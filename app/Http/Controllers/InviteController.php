<?php

namespace App\Http\Controllers;

use App\Invite;
use App\User;
use SendGrid;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class InviteController extends Controller
{
    //
    public function index(){
        return view('invite');
    }

    public function sendmail(Request $request) {             
        $first_name = $request->input("first_name");
        $last_name = $request->input("last_name");
        $phone = $request->input("phone");
        $to = $request->input("email");
        $user = Invite::where('email', $to)->first();
        if(isset($user->email)){
            return response()->json(['status'=>'exist']); 
            die();
        }
        $type = $request->input('type');
        $from = Session::get('email');  
        ini_set('display_errors',1);
        error_reporting(E_ALL);
        $header = "From:".$from;
        if($type == '0'){
            $message = "Hello!  " . $from . " has invited you to work with them as a Collaborator on their FamilyStoryMaker.io project.
            Please log in and join them in creating the story and book they’ve started working on.
            If you have any questions, please feel free to reach us at hello@kidzrize.com & we’ll be happy to help.
            Enjoy! Lisa
            Lisa Peterson
            KidzRize 
            Hello@KidzRize.com 
            https://www.KidzRize.com 
            https://www.FamilyStoryMaker.io";
        }else{
            $message = "Hello!  " . $from .  " has invited you to work with them as a Storyteller on their FamilyStoryMaker.io project.
            They want to hear the stories of your life! Soon, they will start sending questions to you by phone (text) and email. 
            You’ll be able to reply by email or phone (voice) with your answers.
            If you ever have any questions, please feel free to reach us at hello@kidzrize.com & we’ll be happy to help.
            Enjoy! Lisa
            Lisa Peterson
            KidzRize             
            Hello@KidzRize.com
            https://www.KidzRize.com
            https://www.FamilyStoryMaker.io";
        }        
        //mail($to,$from,$message,$header);
        $senderEmail = "hello@kidzrize.com";
        $senderName = "A collaborator";
        $email = new SendGrid\Mail\Mail();
        $email->setFrom($senderEmail, $senderName);
        $email->setSubject($header);
        $email->addTo($to);
        $email->addContent("text/plain", $message);
        $sendgrid = new SendGrid(getenv('SENDGRID_API_KEY'));
        try {
            $response = $sendgrid->send($email);   
            $resultsend = $response->statusCode();      
           // echo($resultsend)  ;
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }

        Invite::create($request->all());
        return response()->json(['status'=>'success']); 
    }
}
