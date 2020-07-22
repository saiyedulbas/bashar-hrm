<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\attendance;
use Carbon\Carbon;
class attendancecontroller extends Controller
{
    public function __construct(){
		$this->middleware('auth');
		
	}
	public function attendance($from_date = '',$to_date = ''){
		if($from_date == '' || $to_date == ''){
			$mon = User::where('user_type',1)->get();
		$dama = attendance::all();
		$chor = attendance::whereBetween('created_at',[$from_date,$to_date])->get();
		return view('attendance/view',compact('from_date','to_date','mon','dama','chor'));
		}
		
		else{
			
			$mon = User::where('user_type',1)->get();
		    $dama = attendance::all();
		    $chor = attendance::whereBetween('created_at',[$from_date,$to_date])->get();
		    return view('attendance/view',compact('from_date','to_date','mon','dama','chor'));
			
		}
		
	}
	public function attendadd(Request $request){
		$users = User::where('user_type',1)->get();
		foreach($users as $user){
		attendance::insert([
		  'user_id' => $user->id,
		  'created_at' => carbon::now()->format('Y-m-d')
		]);
		}
		
		foreach($request->attend as $joto){
			attendance::where('user_id',$joto)->whereDate('created_at',carbon::now()->format('Y-m-d'))->update([
			   'status' =>  1
			]);
		}
		return back();
	}
}
