<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\designation;
use Carbon\Carbon;
use App\realdesignation;
use App;
class designationcontroller extends Controller
{
	
    public function __construct(){
		$this->middleware('auth');
		
		
	}
    public function index()
    {
		$nao = Auth::user()->lang;
		
		App::setLocale($nao);
		$first = designation::with('userinfo')->get();
		
        return view('department/view',compact('first'));
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
		$request->validate([
		    'departmentname' => 'required|unique:designations,department'
		]);
        $amazing = designation::insertGetId([
		   'department' => $request->departmentname,
		   'added_by' => Auth::user()->id,
		   'created_at' => carbon::now(),
		]);
		foreach($request->designation_name as $designation_full){
			realdesignation::insert([
			     'department_id' => $amazing,
				 'designation_name' => $designation_full,
				 'added_by' => Auth::id(),
				 'created_at' => carbon::now(),
			]);
		}
		return back()->with('status','department added with designation successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
