<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;
use Carbon\Carbon;
use Auth;
class githubcontroller extends Controller
{
	
	 public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }
	
	
      public function handleProviderCallback()
    {
		$user = Socialite::driver('github')->user();
		
		if(User::where('email',$user->getEmail())->exists()){
			$user_data = User::where('email',$user->getEmail())->first();
			$this->guard()->login($user_data);
			return redirect('home');
		}
		else{
			$user_id = User::insertGetId([
		    'name' => $user->getNickname(),
			'email' => $user->getEmail(),
			'password' => '12345',
			'user_type' => 2,
			'lang' => 'en',
			'created_at' => carbon::now()
		 ]);
		 $user_data = User::find($user_id);
		 $this->guard()->login($user_data);
		 return redirect('home');
		 
		}
         
        
		 
		 
        
    }
	 protected function guard()
    {
        return Auth::guard();
    }
	
}
