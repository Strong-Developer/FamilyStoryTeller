<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Twilio\TwiML\VoiceResponse;
use GuzzleHttp\Client as GuzClient;

class Transcribe extends Model
{
    public function twiml(){
        $response = new VoiceResponse();
        $response->say('Please leave a message at the beep. Hang up when finished.');
        $response->record([ 'action'=>'https://4d4f310b782f.ngrok.io/api/saveRecord', 'maxLength' => 1000, 'transcribe' => 'true', 'transcribeCallback'=>'https://4d4f310b782f.ngrok.io/api/save', 'method' => 'POST' ]);
        return $response;
     }
}
