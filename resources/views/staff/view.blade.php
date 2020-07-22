@extends('layouts.old')

@section('content')
     <div class="" style="width:80%;margin:auto;">
	 
	 <div class="pure-left" style="width:25%;float:left;">
	 <img src="{{asset('/bingo/documents/darun.JPG')}}" style="width:100%;height:300px;"/>
	 <h2 style="text-align:center">{{Auth::user()->name}}</h2>
	 <p style="text-align:center">{{$bisha->designation_name}}</p>
	 <p class="card-header " style="text-align:center">Joined: {{\Carbon\Carbon::parse($amazing->date_of_join)->diffForHumans()}}</p>
	 </div>
	 <div class="card text-black bg-lightblack mb-3" style="width:35%;float:right;margin-left:20px;height:600px;overflow:scroll">
  <div class="card-header">Notice Board</div>
  <div class="card-body">
  
  @foreach($pina as $jita)
  @if($jita->notice_status == 1)
    <div class="card text-black bg-lightblack mb-3" >
  <div class="card-header">{!! $jita->notice_title !!} 
  <span style="float:right;display:inline">{{$jita->created_at->diffForHumans()}}</span>
  </div>
  
  <div class="card-body">
  {!! $jita->notice_content !!}
	  
  </div>
</div>
@endif

@endforeach

  </div>
</div>
	 
	 
	 
	 
	
	 <div class="card text-black bg-lightblack mb-3" style="width:35%;float:right;">
  <div class="card-header">Personal Details</div>
  <div class="card-body">
    <table class="table table-striped">
  
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">{{$first->name}}</th>
    </tr>
  
  
    <tr>
      <th >Father's Name</th>
      <th>{{$third->employee_fathers_name}}</th>
     
    </tr>
	<tr>
      
      <th scope="col">DOB</th>
      <th scope="col">{{$third->employee_dob}}</th>
    </tr>
	<tr>
      
      <th scope="col">Gender</th>
	  @if($third->employee_gender == 1)
	   <th scope="col">Male</th>
   @else
	   <th scope="col">Female</th>
	  @endif
     
    </tr>
	<tr>
      
      <th scope="col">Email</th>
      <th scope="col">{{$first->email}}</th>
    </tr>
	<tr>
      
      <th scope="col">Phone Number</th>
      <th scope="col">{{$third->employee_phone_number}}</th>
    </tr>
    <tr>
      
      <th scope="col">Present Address</th>
      <th scope="col">{{$third->employee_present_address}}</th>
    </tr>
    <tr>
      
      <th scope="col">Permanent Address</th>
      <th scope="col">{{$third->employee_permanent_address}}</th>
    </tr>
    
   
  
</table>
    
  </div>
</div>
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 </div>
	 
@endsection