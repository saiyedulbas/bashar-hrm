<?php

namespace App\Http\Controllers;

use App\expense;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use App;
use PDF;
class ExpenseController extends Controller
{
     public function __construct(){
		$this->middleware('auth');
		
	}
	
    public function index()
    {
		$nao = Auth::user()->lang;
		
		App::setLocale($nao);
		$jama = expense::all();
		
        return view('expense/view',compact('jama'));
		
    }
	 public function expensedownload(){
		 
		$pdf = expense::all();
		
		$expense = PDF::loadview('expense/download',compact('pdf'));
		return $expense->download('expense.pdf');
		
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $disn = expense::insertGetId([
		    'item_name' => $request->item_name,
			'purchase_from' => $request->purchase_from,
			'purchase_date' => $request->purchase_date,
			'item_price' => $request->item_price,
			'created_at' => carbon::now(),
		]);
		if($request->hasFile('item_bill')){
			$path = $request->file('item_bill')->store('bills');
			expense::where('id','=',$disn)->update([
			  
			  'attachment' => $path,
			  
			]);
			return back();
			
		}
		return back();
		
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(expense $expense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, expense $expense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(expense $expense)
    {
        //
    }
	
}
