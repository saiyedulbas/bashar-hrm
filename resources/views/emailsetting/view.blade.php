@extends('layouts.app')
@section('email')
active
@endsection
@section('content')
<div class="now" style="width:90%;margin:auto;">
<div class="row">
<button class="btn btn-danger">Here is the default mail configuration.<br> If you wanna change the default mail configuration then contact with Bashar.<br> For any query, Just contact Bashar at 01834663387 or see the documentation and site tour. Thank you.</button>
<li><a target="_blank" href="https://findbashar.com">Click Here to see Bashar's Portfolio</a></li>
			<div class="col-lg-12">
				<h1 class="page-header">Email Settings</h1>
			</div>
		</div>

<div class="card">
<div class="card-header bg-info">
Email Settings
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



<form action="{{url('/email/change')}}" method="POST" enctype="multipart/form-data" >
  
  @csrf
  
  
  <div class="form-group ">
    <label class="">
     Change Mail Port
    </label>
	<input class="form-control" type="text" name="port" value="{{config('mail.port')}} " disabled/>
  </div>
  <div class="form-group ">
    <label class="">
     Change Mail Driver
    </label>
	<input class="form-control" type="text" name="driver" value="{{config('mail.driver')}}" disabled/>
  </div>
  <div class="form-group ">
    <label class="">
     Change Mail Host
    </label>
	<input class="form-control" type="text" name="host" value="{{config('mail.host')}} " disabled/>
  </div>
  <div class="form-group ">
    <label class="">
     Change Mail Username
    </label>
	<input class="form-control" type="text" name="username" value="{{config('mail.username')}} " disabled/>
  </div>
  <div class="form-group ">
    <label class="">
     Change Mail Password
    </label>
	<input class="form-control" type="text" name="password" value="{{config('mail.password')}} " disabled/>
  </div>
  <div class="form-group ">
    <label class="">
     Change Mail Encryption
    </label>
	<select class="form-control" name="encryption" id="" disabled>
	<option value="tls">tls</option>
	<option value="ssl">ssl</option>
	</select>
  </div>
  
  
  <button type="submit" class="btn btn-primary" disabled>Submit</button>
</form>

</div>
</div>
</div>
@endsection
@section('we')
Email Setting
@endsection
@section('bread')
<li class="active">Email Settings</li>
@endsection