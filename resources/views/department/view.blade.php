@extends('layouts.app')
@section('department')
active
@endsection
@section('content')
<div class="now" style="width:90%;margin:auto;">
<li class="btn btn-success">Today's expense : {{ami()}}</li>
<li style="list-style-type:none"><a class="btn btn-info" target="_blank" href="https://findbashar.com">Click Here to see Bashar's Portfolio</a></li>
<li style="list-style-type:none"><button class="btn btn-danger">For any query, Just contact Bashar at 01834663387 or see the documentation and site tour. Thank you.</button></li>
<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Department Section</h1>
			</div>
		</div>
<div class="fullformwrap" style="width:40%;float:left;">
@if(session('status'))
					 <div class="alert alert-success">
				 {{ session('status')}}
				 </div>
				 @endif
<div class="card">
<div class="card-header bg-info">
Add department
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


@if(session('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{session('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


<form action="{{route('designation.store')}}" method="POST" >
  
  @csrf
  
  
  
  
  
  
  <div class="form-group ">
    <label class="">
      Add department
    </label>
	<input class="form-control" type="name" name="departmentname" required/>
  </div>
  
  
  <div id="example-1" class="content" 
     data-mfield-options='{"section": ".group","btnAdd":"#btnAdd","btnRemove":".btnRemove"}'>
  <div class="row">
    <div class="col-md-12">
      <button type="button" id="btnAdd" class="btn btn-primary">Add Designation <i class="fa fa-plus"></i></button>
    </div>
  </div>
  <div class="group">
    <div class="form-group ">
    <label class="">
      
    </label>
	<input class="form-control" type="name" name="designation_name[]" required/>
  </div>
    
    
  </div>
  
</div>
  
  
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</div>

</div>
<div class="tablewrap" style="width:55%; float:right;">
<div class="card">
<div class="card-header bg-info">
Department Table
</div>
<div class="card-body">
<table class="table table-striped">
    <thead>
      <tr>
        <th>Department Name</th>
        <th>Added By</th>
        
        <th>Designations</th>
		<th>Last Edited By</th>
      </tr>
    </thead>
    <tbody>
	@foreach($first as $second)
	 <tr>
        <td>{{ $second->department }}</td>
        <td>{{ $second->userinfo->name }}</td>
        <td>
		@php 
	     $mina = App\designation::find($second->id)->getdesignation
        @endphp 
             @foreach($mina as $raju)
         <li>{{$raju->designation_name}}</li>
           @endforeach			 
		</td>
        <td></td>
      </tr>
	@endforeach
      
      
    </tbody>
  </table>
  </div>
  </div>
  
</div>




</div>



@endsection
@section('content2')
<script type="text/javascript">
$('#example-1').multifield();





</script>
@endsection
@section('bread')
<li class="active">Department</li>
@endsection
@section('we')
Department
@endsection