<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Story;
use App\Invite;
use App\Question;
use App\Transcribe;

class TranscribeController extends Controller
{
    public $transcription = "";
    public $img = "";
    public $txt = "";
    public $from = "";

    public function twimlResponse(){
        $model = new Transcribe();
        $response = $model->twiml();    
        return Response::make($response, '200')->header('Content-Type', 'text/xml');
    }

    public function saveDatabase(){       
            $invite = Invite::where('phone', $this->from)->first();
            $question = Question::where('storyteller_name', $invite->first_name)->first();
            $question->proceed = "1";
            $quetion->save();
            $story = new Story;
            $story->question_ID = $question->id;
            $story->transcript = $this->txt;
            $story->Record = $this->img;
            $story->Orders = (Story::max('Orders')) + 1;
            $story->save();        
    }

    public function saveTranscript(Request $request){       
        $transcription = $request->TranscriptionText;  
        $txt = $request->CallSid . "_" . $request->RecordingSid . "_" . ".txt";
        file_put_contents( "./transcript/" . $txt, $transcription);      
        $story = Story::where('Record',  ($request->CallSid . "_" . $request->RecordingSid . ".wav"))->first();
        if(isset($story->Record)){
            $story->transcript = $txt;
            $story->save();
        }
        echo("transcript");
    }

    public function saveRecord(Request $request){
        $url = $request->RecordingUrl;
        $this->from = $request->From;
        $this->img = $request->CallSid . "_" . $request->RecordingSid . ".wav";
        file_put_contents( "./recording/" . $this->img, file_get_contents( $url )); 
        $invite = Invite::where('phone', $this->from)->first();
        if(isset($invite->phone)){
            $question = Question::where('storyteller_name', $invite->first_name)->first();
            $question->proceed = "1";            
            $story = new Story;
            $story->question_ID = $question->id;
            $story->transcript = $this->txt;
            $story->Record = $this->img;
            $story->Orders = (Story::max('Orders')) + 1;
            $quetion->save();
            $story->save();    
        }
        echo("audio");
    }

    
}
