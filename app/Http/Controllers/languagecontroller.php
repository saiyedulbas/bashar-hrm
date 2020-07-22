<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App;
class languagecontroller extends Controller
{
    public function settinglanguage(){
		$nao = Auth::user()->lang;
		
		App::setLocale($nao);
		return view('languagesetting/view');
	}
}
