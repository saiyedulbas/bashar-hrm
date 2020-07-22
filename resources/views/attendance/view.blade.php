@extends('layouts.app')
@section('attendance')
active
@endsection
@section('content')
<div class="now" style="width:90%;margin:auto;">
<div class="row">
			<div class="col-lg-12">
			
				<h1 class="page-header">Make Attendance for {{\carbon\carbon::now()->format('Y-m-d')}}</h1>
			</div>
		</div>
		<div class="card" style="width:50%;overflow:hidden;display:block;; margin:auto;float:left;height:322px">
  <div class="card-header">
  <button class="btn btn-danger">Notice</button>
    
  </div>
  <div class="card-body">
   If you wanna see the employee attendance information then try to put dates on which the attendance had been taken. If it is the first time you are taking attendance then put dates accordingly to see the result. For any query, Just contact Bashar at 01834663387 or see the documentation and site tour. Thank you
  </div>
</div>
		From: <input type="date" class="from_date" value="{{$from_date}}" />
To:<input type="date" class="to_date" value="{{$to_date}}" />
<button type="submit" class="btn btn-primary" id="check_submit">Submit</button>
<div class="card">

<div class="card-header bg-info">

Attendance List
</div>
@isset($chor)
<div class="card-body">

  <table class="table table-bordered">
  @foreach($chor as $mata)
      <tr>
   <td>{{App\User::find($mata->user_id)->name}}</td>
   @if($mata->status == 1)
	   <td>Present</td>
   @else
	 <td>Absent</td>  
	@endif   
   <td>{{$mata->created_at->format('Y-m-d')}}</td>
  </tr>
  @endforeach
  
  </table>

    
</div>
@endisset









</div>
<div class="card">
<div class="card-header bg-info">
Mark Attendance
</div>
<div class="card-body">
@php
$nota = carbon\carbon::now()->format('Y-m-d');
@endphp
@if(! \App\attendance::whereDate('created_at',$nota)->exists())
  <form action="{{url('/attend/add')}}" method="POST"  >
  
  @csrf
  
  <table class="table table-bordered">
  
  
  <tbody>
  @foreach($mon as $tin)
    <tr>
	<td> <div class="">
   
	<input type="checkbox" class="" name="attend[]" value="{{$tin->id}}" checked/>
  </div>
  </td>
   <td>{{ $tin->name }}</td>
	</tr>
      @endforeach
      
      
    
    
    
  </tbody>
</table>
  
  
  
 
  
 
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@else
	attendance taken for today
@endif

    















</div>
</div>

</div>
@endsection

@section('content2')
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('#check_submit').click(function(){
		var from_date = jQuery('.from_date').val();
		var to_date = jQuery('.to_date').val();
		if(from_date == '' || to_date == ''){
			alert('please provide data');
		}
		else{
			var link = "{!!url('/attendance')!!}"+"/"+from_date+"/"+to_date;
			window.location.href= link;
		}
	});
	
	
});
</script>


@endsection
@section('we')
Attendance
@endsection
@section('bread')
<li class="active">Attendance</li>
@endsection