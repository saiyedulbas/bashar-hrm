<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\award;
use App\notice;
use Carbon\Carbon;
class awardcontroller extends Controller
{
    public function __construct(){
		$this->middleware('auth');
		
	}
	public function award(){
		
		$user = User::where('user_type',1)->get();
		return view('award/view',compact('user'));
	}
	public function awardgive(Request $request){
		$award_description = $request->award_name. " award is given to ". User::find($request->employee_name)->name. " with cash price of ". $request->cash_price. " taka as well as a beautiful ". $request->award_item;
		award::create($request->all());
		notice::insert([
		   'notice_title' => 'Award of '.carbon::now()->subMonths(1)->format('M-Y'),
		   'notice_content' => $award_description,
		   'created_at' => carbon::now()
		   
		]);
		echo award::where('award_name',$request->award_name)->get();
		
		
		
		
	}
	
	
}
