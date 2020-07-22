@extends('layouts.app')
@section('award')
active
@endsection
@section('content')
<div class="now" style="width:90%;margin:auto;">
<div class="row">
<li style="list-style-type:none"><button class="btn btn-danger">For any query, Just contact Bashar at 01834663387 or see the documentation and site tour. Thank you.</button></li>
			<div class="col-lg-12">
				<h1 class="page-header">Award</h1>
			</div>
		</div>

<div class="card">
<div class="card-header bg-info">
Award
</div>
<div class="card-body">
<form action="{{url('/award/give')}}" method="POST" enctype="multipart/form-data" >
  
  @csrf
  
  
  
  
  
  
  <div class="form-group">
    <label class="">
      Award Name
    </label>
	<input class="form-control" id="award_name" type="text" name="award_name"/>
  </div>
  <div class="form-group">
    <label class="">
      Gift Item
    </label>
	<input class="form-control" id="award_item" type="text" name="award_item"/>
  </div>
  <div class="form-group ">
    <label class="">
      Cash Price
    </label>
	<input class="form-control" id="cash_price" type="text" name="cash_price"/>
  </div>
  <div class="form-group ">
    <label class="">
      Employee Name
    </label>
	<select name="employee_name" id="employee_name" class="form-control" id="">
	@foreach($user as $khao)
	<option value="{{$khao->id}}">{{$khao->name}}</option>
	@endforeach
	 
	</select>
  </div>
  
  
  
  
  
   
	
        
       <button type="button"  class="btn btn-primary" id="insert">Give Award</button>
      </div>
  
  
</form>
<div class="spinner-border bb" style="display:none" role="status">
  <span class="sr-only">Loading...</span>
</div>


</div>
</div>
</div>
@endsection

@section('content2')
<script type="text/javascript">
jQuery(document).ready(function(){
	
	jQuery('#insert').click(function(){
		
		$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		
		
		var award_name = jQuery('#award_name').val(); 
		var award_item = jQuery('#award_item').val(); 
		var cash_price = jQuery('#cash_price').val(); 
		var employee_name = jQuery('#employee_name').val(); 
		if(award_name == '' || award_item == '' || cash_price == ''){
			alert('Field Required');
			return false;
		}
		else{
			jQuery('#insert').hide();
			jQuery('.bb').show();
		    $.ajax({
			'type' : 'POST',
			'url' : '/award/give',
			'data' : {
				'award_name' : award_name,
				'award_item' : award_item,
				'cash_price' : cash_price,
				'employee_name' :employee_name ,
			},
			'success' : function(data){
				    jQuery('.bb').hide();
					jQuery('#insert').show();
					jQuery('#award_name').val(' ');
					jQuery('#award_item').val(' ');
					jQuery('#cash_price').val(' ');
					alert('Award added successfully and every employee will get notice about that particular award. To see it in action, you just have to login as employee and you will see award being notified in notice board');
					
			        
		            
					
				
			},
		});
		}
		

		
		
		

	});
	
	
	
	
	
	
	
	
});
</script>
@endsection
@section('we')
Award
@endsection
@section('bread')
<li class="active">Award</li>
@endsection