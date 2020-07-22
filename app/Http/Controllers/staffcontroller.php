<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\employee;
use App\company;
use App\realdesignation;
use App\notice;
use App\document;
use App;
use App\message;
use Carbon\Carbon;

class staffcontroller extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
       
        
		
		
    }
    public function index(){
		$nao = Auth::user()->lang;
		
		App::setLocale($nao);
		$first = User::where('id','=',Auth::user()->id)->firstOrFail();
		
		$second = Auth::user()->id;
		$third = employee::where('user_id','=',$second)->firstOrFail();
		
		 $tona =  $third->id;
		
		$amazing = company::where('employee_id','=',$tona)->first();
		
		
		$dida = $amazing->designation_id;
		$bisha = realdesignation::where('id','=',$dida)->first();
		
		$pina = notice::orderBy('id','desc')->get();
		$pina2 = document::where('employee_id','=',$tona)->get();
		
		
		return view('staff/view',compact('first','third','amazing','bisha','pina','pina2'));
		
	}
	public function staffpublicchatroom(){
		return view('staff/chat');
	}
	public function chatpost(Request $request){
		$take = $request->name;
		$make = $request->again;
		message::insert([
		      'user_id' => $make,
			  'message' => $take,
			  'created_at' => carbon::now(),
		]);
		
		
	}
	public function getmessages(){
		$mina = message::all();
		foreach($mina as $raju){
			echo '<div style="width:50%;height:100px;margin-bottom:20px;" class="card "><div class="card-header">'.
			  User::find($raju->user_id)->name.
			  '</div><div class="card-body" style="">'.
			  $raju->message
			  .'</div></div>';
		 
			         
			
		}
		
		
		
		
	}
}
