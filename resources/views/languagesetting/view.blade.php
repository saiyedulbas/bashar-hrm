@extends('layouts.app')
@section('language')
active
@endsection
@section('content')
<div class="now" style="width:90%;margin:auto;">
<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">{{ __('Language Settings') }}</h1>
			</div>
		</div>
<div class="card" style="width:50%; margin:auto;float:left;height:322px">
  <div class="card-header">
  
    <button class="btn btn-danger">Notice</button>
  </div>
  <div class="card-body">
   If you change the language setting to bangla then 30% of the whole application will get changed to bangla and the other 70% will remain in english. This is the setting provided by bashar because of some security related issues, if you intend to buy this application then bashar will change the setting accordingly. For any query, Just contact Bashar at 01834663387 or see the documentation and site tour.  Thank you
  </div>
</div>
<div class="card" style="height:323px;">
<div class="card-header bg-info">
{{ __('Language Settings') }}
</div>
<div class="card-body">




<form action="{{url('/language/change')}}" method="POST" enctype="multipart/form-data" >
  
  @csrf
  
  
  
  
  
  <div class="form-group ">
    <label class="">
     {{ __('Language Settings') }}
    </label>
	<select class="form-control" name="language" id="">
	<option value="en">English</option>
	<option value="bn">Bangla</option>
	</select>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</div>








</div>
@endsection
@section('we')
Language Setting
@endsection
@section('bread')
<li class="active">Language Settings</li>
@endsection