@extends('layouts.old')

@section('content')
<div class="full-wrap" style="width:80%;margin:auto;">
         <div class="card">
		      <div class="card-header">
			  Public chatroom
			  </div>
			  <div class="card-body" id="messagebody" style="height:500px;overflow:scroll">
			  body part
			  </div>
			  <div class="card-footer">
			  <form action="{{url('/chat/post')}}" method="POST" id="jabal">
			  
			      <input type="text" class="chatvalue" name="chatvalue" />
			      <input type="hidden" class="chatvaluehidden" value="{{Auth::user()->id}}" />
				  <input class="btn btn-sm btn-success" type="submit" id="chatsubmit" />
			  </form>
			  </div>
		 </div>
		 
</div>
@endsection
@section('content2')
<script type="text/javascript">
jQuery(document).ready(function(){
	
		
	jQuery('.bottom').click(function(){
		jQuery('#messagebody').animate({scrollTop:9999999},200);
		return false;
	});
	

	setInterval(function(){
		
		$.ajax({
			'url' : '/get/messages',
			'type' : 'GET',
			'success' : function(mita){
				jQuery('#messagebody').html(mita);
			}
		});
	},100);
	
	jQuery('#jabal').submit(function(){
		
		var first = jQuery('.chatvalue').val();
		var second = jQuery('.chatvaluehidden').val();
		
		
		
		$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		
		$.ajax({
			'url' : '/chat/post',
			'type' : 'POST',
			'data' : {
				'name' : first,
				'again' : second, 
			},
			'success' : function(hima){
				jQuery('.chatvalue').val(' ');
		        $('#messagebody').stop().animate({
			  scrollTop: $('#messagebody')[0].scrollHeight
			}, 800);
			}
			
		});
		return false;
	});
	
	
	
	
});
</script>
@endsection