@extends('layouts.app')
@section('employee')
active
@endsection

@section('content')
@can('can see employee list')
<div class="now" style="width:90%;margin:auto;">
<div class="row">
			<div class="col-lg-12">
			@if(session('status'))
					 <div class="alert alert-success">
				 {{ session('status')}}
				 </div>
				 @endif
			<div class="card">
                <div class="card-header bg-danger" style="height:60px;color:white">Notice</div>

                <div class="card-body">
                    After creating an employee, a mail with a password will be given to the employee. Remember, this application is using mailtrap which is paid mail service provider to manage bulk mail. So, if you want to see the mail service in action just contact Bashar at 01834663387 and he will give you access to see how the mail service works. Without contacting Bashar, you won't be able to see the mail service working. For any query, Just contact Bashar at 01834663387 or see the documentation and site tour. Thank you.<br>
					<button class="btn btn-danger">Demo Employee Login Credentials:</button>
					<br><br>
					<button class="btn btn-danger">Email: </button> jahidulalam@gmail.com <br><br>
					<button class="btn btn-danger">Password:</button>  UUIStj
					
                </div>
                </div>
				
				<h1 class="page-header">Employee Section</h1>
			</div>
		</div>

<div class="card">
<div class="card-header bg-info">
Add employee
</div>
<div class="card-body">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('employee.store')}}" method="POST" enctype="multipart/form-data" >
  
  @csrf
  
  
  
  
  
  
  <div class="form-group ">
    <label class="">
      Employee Name
    </label>
	<input class="form-control" type="name" name="employee_name" required/>
  </div>
  <div class="form-group ">
    <label class="">
      Employee Father's Name
    </label>
	<input class="form-control" type="name" name="employee_fathers_name" required/>
  </div>
  <div class="form-group ">
    <label class="">
      Employee Date Of Birth
    </label>
	<input class="form-control" type="date" name="date_of_birth" required/>
  </div>
  <div class="form-group ">
    <label class="">
      Employee Gender
    </label>
	<select name="employee_gender" class="form-control" id="" required>
	<option value="1">
	male
	</option>
	<option value="2">
	female
	</option>
	</select>
  </div>
  <div class="form-group ">
    <label class="">
      Employee Phone Number
    </label>
	<input class="form-control" type="text" name="employee_phone_number" required/>
  </div>
  <div class="form-group ">
    <label class="">
      Employee Present Address
    </label>
	<textarea name="present_address" id="" class="form-control" required></textarea>
  </div>
  <div class="form-group ">
    <label class="">
      Employee Permanent Address
    </label>
	<textarea name="permanent_address" id="" class="form-control" required></textarea>
  </div>
  
    <label class="">
      
    </label>
	<legend>Account Login Information</legend>
	<div class="form-group ">
    <label class="">
      Employee email Address
    </label>
	<input type="email" name="employee_email" class="form-control" required/>
  </div>
 
  
  <legend>
  Company Details
  </legend>
  <div class="form-group ">
    <label class="">
      Employee No
    </label>
	<input type="text" class="form-control" name="employee_no" required/>
  </div>
  <div class="form-group ">
    <label class="">
      Department
    </label>
	<select name="department_take" class="form-control js-example-basic-single" id="amake" required>
	<option value="">--select one--</option>
	@foreach($now as $cow)
	<option value="{{$cow->id}}">
	{{$cow->department}}
	</option>
	@endforeach
	
	
	</select>
  </div>
  <div class="form-group ">
    <label class="">
      Designation
    </label>
	<select name="designation_take" class="form-control" id="designation_take" required>
	
	<option value="">
	
	</option>
	
	
	
	</select>
  </div>
  <div class="form-group ">
    <label class="">
      Date of Join
    </label>
	<input class="form-control" type="date" name="date_of_join" required/>
  </div>
  <div class="form-group ">
    <label class="">
      Joining salary
    </label>
	<input class="form-control" type="text" name="joining_salary" required/>
  </div>
  
  <legend>Bank Information</legend>
  <div class="form-group ">
    <label class="">
      Account Holder's Name
    </label>
	<input class="form-control" type="text" name="holder_name" required/>
  </div>
  <div class="form-group ">
    <label class="">
      Account Number
    </label>
	<input class="form-control" type="text" name="holder_number" required/>
  </div>
  <div class="form-group ">
    <label class="">
      Bank Name
    </label>
	<input class="form-control" type="text" name="bank_name" required/>
  </div>
  <div class="form-group ">
    <label class="">
      IFSC Number
    </label>
	<input class="form-control" type="text" name="ifsc_number" required/>
  </div>
  <div class="form-group ">
    <label class="">
      PAN number
    </label>
	<input class="form-control" type="text" name="pan_number" required/>
  </div>
  <div class="form-group ">
    <label class="">
      Branch
    </label>
	<input class="form-control" type="text" name="branch_name" required/>
  </div>
  <legend>Documents</legend>
  <div class="form-group ">
    <label class="">
      Resume
    </label>
	<input class="form-control-file" type="file" name="document_file[resume]" />
  </div>
  <div class="form-group ">
    <label class="">
      joining letter
    </label>
	<input class="form-control-file" type="file" name="document_file[join_letter]" />
  </div>
  <div class="form-group ">
    <label class="">
      Contract and Agreement
    </label>
	<input class="form-control-file" type="file" name="document_file[contract]" />
  </div>
  <div class="form-group ">
    <label class="">
      ID proof
    </label>
	<input class="form-control-file" type="file" name="document_file[idproof]" />
  </div>
  <div class="form-group ">
    <label class="">
      Offer Letter
    </label>
	<input class="form-control-file" type="file" name="document_file[offer_letter]" />
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</div>
</div>







@else
	<div class="card" style="width:80%; margin:auto">
  <div class="card-header">
    Take Note
  </div>
  <div class="card-body">
    In order to see this page, you have to assign a role to yourself. So, just go to settings option then click on the permission settings then go straight upside down and in the "assign role" option assign yourself a role. And, if you want to see all the features of this application then make sure you have assigned yourself the "department head" role. Thank you.
  </div>
</div>
@endcan
@endsection

@section('content2')
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('#amake').change(function(){
		var department_id = jQuery(this).val();
		$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$.ajax({
			type:'POST',
			url:'/getdesignationlist',
			data: {
				department_id: department_id
				},
			success: function (data) {
				jQuery('#designation_take').html(data);
			}
		});
		
	});
	 $('.js-example-basic-single').select2();
});

</script>
@endsection
@section('bread')
<li class="active">Employee</li>
@endsection
@section('we')
Employee
@endsection