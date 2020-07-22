<?php

namespace App\Http\Controllers;
use App\Notifications\employeenotification;
use App\employee;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeeForm;
use App\User;
use App\designation;
use App\realdesignation;
use App\company;
use Carbon\Carbon;
use App\bank;
use App\document;
use Auth;
use Notification;
use App;
class EmployeeController extends Controller
{
	
    public function __construct(){
		$this->middleware('auth');
		
	}
    public function index()
    {
		$nao = Auth::user()->lang;
		
		App::setLocale($nao);
		$now = designation::all();
		
       return view('employee/view',compact('now'));
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
	
	
	public function getdesignationlist(Request $request)
	{
		$attach = '';
		$zabal = realdesignation::where('department_id','=',$request->department_id)->get();
		foreach($zabal as $tuna){
			 $attach .= '<option value='.'"'.$tuna->id.'"'.'>'.$tuna->designation_name.'</option>';
		}
		echo $attach;
		
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response EmployeeForm EmployeeForm
     */
    public function store(EmployeeForm $request)
    {
		
		$password_to_send = str_random(6);
        $first = User::insertGetId([
		
		       'name' => $request->employee_name,
			   'email' => $request->employee_email,
			   'password' => bcrypt($password_to_send),
			   'user_type' => 1,
		]);
		$jack = employee::insertGetId([
		      'user_id' => $first,
			  'employee_fathers_name' => $request->employee_fathers_name,
			  'employee_dob' => $request->date_of_birth,
			  'employee_gender' => $request->employee_gender,
			  'employee_phone_number' => $request->employee_phone_number,
			  'employee_present_address' => $request->present_address,
			  'employee_permanent_address' => $request->permanent_address,
			  'created_at' => carbon::now(),
		]);
		$rose = company::insertGetId([
		    'employee_id' => $jack,
			'employee_no' => $request->employee_no,
			'department_id' => $request->department_take,
			'designation_id' => $request->designation_take,
			'date_of_join' => $request->date_of_join,
			'created_at' => carbon::now(),
		]);
		bank::insert([
		    'employee_id' => $jack,
			'account_holder_name' => $request->holder_name,
			'account_number' => $request->holder_number,
			'bank_name' => $request->bank_name,
			'ifsc' => $request->ifsc_number,
			'pan_number' => $request->pan_number,
			'branch' => $request->branch_name,
			'created_at' => carbon::now(),
			
		]);
		if(!empty($request->document_file)){
		foreach($request->document_file as $key => $value){
			$path = $value->store('documents');
			document::insert([
			  'employee_id' => $jack,
			  'file_name' => $key,
			  'file_location' => $path,
			  'created_at' => carbon::now(),
			  
			]);
			
		}
		}
		
		
			
		
		
		
		
		
		
		
		 $mita = $request->employee_name;
		 $ziba = $request->employee_email;
		 $password_to_sendi = $password_to_send;
		Notification::route('mail',$ziba)->notify(new employeenotification($password_to_sendi,$mita));
		
		return back()->with('status','New Employee Created');
    }
	

    /**
     * Display the specified resource.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
     public function destroy(employee $employee)
    {
        //
    }
}
