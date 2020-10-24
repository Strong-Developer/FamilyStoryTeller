<?php

namespace App\Http\Controllers;

use \App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    //
    public function signin(){        
    	return view('signin',['alarm' => 0]);
    }
    public function authenticate(Request $request){
       
    	$validator = $request->validate([
            'email'     => 'required',
            'password'  => 'required|min:6'
        ]);
      
        if (Auth::attempt($validator)) {
            
            Session::put('email', $request->input('email'));            
            return redirect('story');
        }else{
         
        	return view('signin',['alarm' => 1]);
        }
    }
    public function signup(){
    	return view('signup',['alarm' => 0]);
    }
    public function register(Request $request){
    	$validator = $request->validate([
          'name'      => 'required|min:1',
          'email'     => 'required',
          'password'  => 'required|min:6',
          'phone'     => 'required'
        ]);
    	$user = User::where('email', $request->email)->first();
    	if(isset($user->email)){
    		return view('signup',['alarm' => 1]);
    	}else {
    		User::create($validator);
        	return redirect()->action('AuthController@signin');
    	}
    }

    public function update(Request $request){
    	$validator = $request->validate([
          'accname'      => 'required|min:1',
          'accmail'     => 'required',
          'accpass'  => 'required|min:6',
          'accphone'     => 'required'
        ]);
        $accname = $request->input("accname");
        $accmail = $request->input("accmail");
        $accpass = $request->input("accpass");
        $accphone = $request->input("accphone");
    	$user = User::where('email', $accmail)->first();
        $user->name = $accname;
        $user->email = $accmail;
        $user->password = $accpass;
        $user->phone = $accphone;
        $user->save();
        return response()->json(['status'=>'success']);     	
    }
}
