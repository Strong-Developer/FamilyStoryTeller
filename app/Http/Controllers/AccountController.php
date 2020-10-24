<?php

namespace App\Http\Controllers;

use App\User;
use App\Bookdata;
use App\Invite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{
    //
    public function index(){
        $user = User::where('email', Session::get('email'))->first();
        return view('account', ["user"=>$user]);
    }

    public function getdata(Request $request) {
        $response = Bookdata::get();
        $storytellers = Invite::where('type', "1");   
        return response()->json($response);       
    }

    public function getteller(Request $request) {        
        $response = Invite::where('type', "1")->get();   
        return response()->json($response);       
    }
}
