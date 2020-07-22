<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;
use Auth;
use App;
class emailcontroller extends Controller
{
	
    public function settingemail(){
		$nao = Auth::user()->lang;
		
		App::setLocale($nao);
		return view('emailsetting/view');
	}
	public function emailchange(Request $request){
		foreach($request->all() as $first => $second){
			if($first != '_token'){
			$this->take($first,$second);
			}
		}
		Artisan::call('config:cache');
		return back();
		
	}
	public function take($name,$value){
		
		$location = base_path('.env');
		
		$contents = file_get_contents($location);
		$search_string = strtoupper('mail_'.$name).'='.config("mail.".$name);
		$replace_string = strtoupper('mail_'.$name).'='.$value;
		$new = str_replace($search_string,$replace_string,$contents);
		file_put_contents($location,$new);
		
	}
}
