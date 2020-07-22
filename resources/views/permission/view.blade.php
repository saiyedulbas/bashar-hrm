@extends('layouts.app')
@section('permission')
active
@endsection
@section('content')
<div class="now" style="width:90%;margin:auto;">
<div class="row">
<li style="list-style-type:none"><button class="btn btn-info">For any query, Just contact Bashar at 01834663387 or see the documentation and site tour. Thank you.</button></li>
			<div class="col-lg-12">
				<h1 class="page-header">Permission Settings</h1>
			</div>
		</div>

<div class="card">
<div class="card-header bg-info">
Permission List
</div>
<div class="card-body">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Role Name</th>
      <th scope="col">Permissions</th>
      
    </tr>
  </thead>
  <tbody>
    
	@foreach($tank as $mita)
	<tr>
	   <td>{{$mita->name}}</td>
	   <td><ul>
	   @foreach($mita->getAllPermissions() as $luta)
	   
	      <li>{{$luta->name}}</li>
	   
	   @endforeach
	   </ul></td>
	   </tr>
	@endforeach
      
      
      
    
    
    
  </tbody>
</table>
<div class="card">
<div class="card-header bg-info">
Permission Settings
</div>
<div class="card-body">




<form action="{{url('/role/add')}}" method="POST"  >
  
  @csrf
  
  
  
  
  
  <div class="form-group ">
    <label class="">
     Select Role
    </label>
	<select class="form-control" name="role_name" >
	@foreach($tank as $mita)
  <option value="{{$mita->id}}">{{$mita->name}}</option>
  @endforeach
    ...
  
</select>
  </div>
  
  <div class="form-group ">
    <label class="">
     Choose Permission
    </label>
	<select class="js-example-basic-multiple form-control" name="permission_name[]" multiple="multiple" required>
	@foreach($bina as $lau)
  <option value="{{$lau->id}}">{{$lau->name}}</option>
  @endforeach
  
  
</select>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<form action="{{url('/role/again')}}" method="POST"  >
  
  @csrf
  
  
  
  
  <div class="card" style="margin-top:20px;">
  <div class="card-header bg-info">
  Add Role
  </div>
  <div class="card-body">
  <div class="form-group ">
    <label class="">
     Add Role
    </label>
	<input type="text" class="form-control" name="try" required/>
  </div>
  </div>
  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</div>










<div class="card" style="margin-top:20px;">
  <div class="card-header bg-info">
  User Role List
  </div>
  <div class="card-body">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">User Name</th>
      <th scope="col">Role Name</th>
      
    </tr>
  </thead>
  
  <tbody>
    
	@foreach($users as $tina)
  <tr>
      <td>{{$tina->name}}</td>
	  @foreach($tina->getRoleNames() as $lama)
      <td>{{$lama}}</td>
      @endforeach
    </tr>
	@endforeach
      
      
      
    
    
    
  </tbody>
</table>



  </div>
  </div>
<div class="card">
<div class="card-header bg-info">
Assign Role
</div>
<div class="card-body">




<form action="{{url('/role/assign')}}" method="POST"  >
  
  @csrf
  
  <div class="form-group ">
    <label class="">
     Select User Name
    </label>
	<select class="form-control" name="user_name" >
	@foreach($users as $lat)
  <option value="{{$lat->id}}">{{$lat->name}}</option>
  @endforeach
  
  
</select>
  </div>
  
  
  
  <div class="form-group ">
    <label class="">
     Select Role
    </label>
	<select class="form-control" name="role_take" >
	@foreach($tank as $mita)
  <option value="{{$mita->id}}">{{$mita->name}}</option>
  @endforeach
    ...
  
</select>
  </div>
  
  
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



</div>
</div>


</div>
</div>
</div>
@endsection

@section('content2')
<script type="text/javascript">
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
@endsection
@section('we')
Permission Settings
@endsection

@section('bread')
<li class="active">Permission Settings</li>
@endsection