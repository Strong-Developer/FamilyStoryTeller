<?php

namespace App\Http\Controllers;

use File;
use ZipArchive;
use App\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class StoryController extends Controller
{
    //
    public function index(Request $request){
        
        $result = DB::select("SELECT questions_ttmp.*, categories.title as category FROM (SELECT questions_tmp.*, categories.title, categories.parent from (select questions.*, stories.created_at as timecreated, stories.Orders from questions, stories where questions.id = stories.question_ID) AS questions_tmp, categories WHERE questions_tmp.category_id = categories.id) AS questions_ttmp, categories WHERE categories.id = questions_ttmp.parent ORDER BY Orders");        
    	return view('story',['stories'=> $result]);    	
    }

    public function getstory(Request $request) {
        $result = DB::select("SELECT questions_ttmp.*, categories.title as category FROM (SELECT questions_tmp.*, categories.title, categories.parent from (select questions.*, stories.created_at as timecreated, stories.Orders, stories.Transcript, stories.Record from questions, stories where questions.id = stories.question_ID) AS questions_tmp, categories WHERE questions_tmp.category_id = categories.id) AS questions_ttmp, categories WHERE categories.id = questions_ttmp.parent ORDER BY Orders");        
        return response()->json($result);   
    }

    public function findtext(Request $request) {
        $id = $request->input("tmpid");       
        $temp = Story::where("question_ID", $id)->first()->Transcript;       
        $temp = "./transcript/" . $temp;
        $response = file_get_contents($temp, true);
        return response()->json($response);  
    }
    
    public function setchangedtext(Request $request) {
        $id = $request->input("id");
        $text = $request->input("text");
        $temp = Story::where("question_ID", $id)->first()->Transcript;       
        $temp = "./transcript/" . $temp;
        file_put_contents($temp, $text);
        $result = DB::select("SELECT questions_ttmp.*, categories.title as category FROM (SELECT questions_tmp.*, categories.title, categories.parent from (select questions.*, stories.created_at as timecreated, stories.Orders, stories.Transcript, stories.Record from questions, stories where questions.id = stories.question_ID) AS questions_tmp, categories WHERE questions_tmp.category_id = categories.id) AS questions_ttmp, categories WHERE categories.id = questions_ttmp.parent ORDER BY Orders");        
    	return response()->json($result);   
    }

    public function deleterecord(Request $request) {
        $id = $request->input("id");       
        $text = Story::where("question_ID", $id)->first()->Transcript;
        $audio = Story::where("question_ID", $id)->first()->Record;       
        $path = "./transcript/" . $text;
        unlink($path);
        $path = "./recording/" . $audio;
        unlink($path);
        $res=Story::where("question_ID", $id)->delete();
        $result = DB::select("SELECT questions_ttmp.*, categories.title as category FROM (SELECT questions_tmp.*, categories.title, categories.parent from (select questions.*, stories.created_at as timecreated, stories.Orders, stories.Transcript, stories.Record from questions, stories where questions.id = stories.question_ID) AS questions_tmp, categories WHERE questions_tmp.category_id = categories.id) AS questions_ttmp, categories WHERE categories.id = questions_ttmp.parent ORDER BY Orders");        
    	return response()->json($result);   
    }

    public function setchangedorder(Request $request) {
        $id1 = $request->input("id1");
        $id2 = $request->input("id2"); 
        $query = DB::table('stories')
                ->where('Orders', $id1)->update(['Orders' => '-100']);   
        $query = DB::table('stories')
                ->where('Orders', $id2)->update(['Orders' => $id1]);     
        $query = DB::table('stories')
                ->where('Orders', '-100')->update(['Orders' => $id2]);     
        $result = DB::select("SELECT questions_ttmp.*, categories.title as category FROM (SELECT questions_tmp.*, categories.title, categories.parent from (select questions.*, stories.created_at as timecreated, stories.Orders, stories.Transcript, stories.Record from questions, stories where questions.id = stories.question_ID) AS questions_tmp, categories WHERE questions_tmp.category_id = categories.id) AS questions_ttmp, categories WHERE categories.id = questions_ttmp.parent ORDER BY Orders");        
    	return response()->json($result);   
    }

    public function downloadtext(Request $request) {
        
        $zip = new ZipArchive;   
        $fileName = 'transcript.zip';   
        if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE)
        {
            $files = File::files(public_path('transcript'));   
            foreach ($files as $key => $value) {
                $relativeNameInZipFile = basename($value);
                $zip->addFile($value, $relativeNameInZipFile);
            }             
            $zip->close();
        }    
        return response()->json($fileName);
    }
    
    public function downloadaudio(Request $request) {
        $zip = new ZipArchive;   
        $fileName = 'audio.zip';   
        if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE)
        {
            $files = File::files(public_path('recording'));   
            foreach ($files as $key => $value) {
                $relativeNameInZipFile = basename($value);
                $zip->addFile($value, $relativeNameInZipFile);
            }             
            $zip->close();
        }    
        return response()->json($fileName);
    } 
}
