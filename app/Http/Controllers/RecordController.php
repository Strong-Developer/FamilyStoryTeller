<?php

namespace App\Http\Controllers;

use App\Invite;
use App\Category;
use App\Question;
use SendGrid;
use Illuminate\Http\Request;
Use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RecordController extends Controller
{
    //
    public function index () {        
        return view('record');
    }

    public function getquery (Request $request) {
        $category = $request->input("category");
        $categoryID = (Category::where('title', $category)-> first())->id;
        $queries = Category::where('parent', $categoryID)-> get();        
        return response()->json($queries);
    }

    public function sendmail(Request $request) {             
        $category_id = $request->input("selQuery");       
        $content = $request->input("tempText");
        $from = Session::get('email'); 
        $collaborator_name = (Invite::where('email', $from)-> first())->first_name; 
        $collaborator_phone = (Invite::where('email', $from)-> first())->phone; 

        $query = Question::where('storyteller_name', $collaborator_name)
                            ->where('proceed', "0")->first();    
        if(isset($query->proceed)){
            return response()->json(['status'=>"You"]); 
            die();
        }            
        
        if($content == "") {
            $question = (Category::where('id', $category_id)-> first())->title;
        } else
        {
            $question = $content;
        }

        ini_set('display_errors',1);
        error_reporting(E_ALL); 
        $header = "From:".$from;
        
        $message = "Hi! " . $collaborator_name .
        " There’s a new question for you in your FamilyStoryMaker.io project.
        Please call ". "+17865162349" ."  or reply to the email we sent to answer. '";
        
        //mail($to,$from,$message,$header);

        $senderEmail = "hello@kidzrize.com";
        $senderName = "A collaborator";
        $email = new SendGrid\Mail\Mail();
        $email->setFrom($senderEmail, $senderName);
        $email->setSubject($header);
        $email->addTo($from);
        $email->addContent("text/plain", $message);
        $sendgrid = new SendGrid(getenv('SENDGRID_API_KEY'));
        try {
            $response = $sendgrid->send($email); 
            $resultsend = $response->statusCode();      
            //echo($resultsend)  ;          
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }

        $question = new Question;
        $question->category_id = $category_id;
        $question->storyteller_name = $collaborator_name;
        $question->collaborator_name = $collaborator_name;
        $question->content = $content;
        $question->proceed = 0;
        $question->save();
        return response()->json(['status'=>'success']); 
    }
}
