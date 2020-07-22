<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\expense;
use App\Http\Resources\expense as expense_resource;
use App\Http\Resources\userinfo;
use App\User;
class apicontroller extends Controller
{
    public function total_expense(){
		$first = expense::sum('item_price');
		
		return response()->json($first);
	}
	public function individual_expense($id){
		return new expense_resource(expense::find($id));
		
	}
	public function all(){
		
		return  expense_resource::collection(expense::all());
	}
	public function userall(){
		return  userinfo::collection(User::all());
	}
	public function expense_insert(Request $bina){
	     expense::create($bina->all());
		 echo 'done';
	}
}
