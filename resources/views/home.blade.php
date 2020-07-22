@extends('layouts.app')
@section('home')
active
@endsection

@section('content')
@can('can see graph list')
<div class="container" style="margin-top:20px;">
    <div class="row justify-content-center">
        <div class="col-md-10">
		<li class="btn btn-success">Today's expense : {{ami()}}</li>
		<li style="list-style-type:none"><a class="btn btn-info" target="_blank" href="https://findbashar.com">Click Here to see Bashar's Portfolio</a></li>
		<li style="list-style-type:none"><button class="btn btn-danger">Pleae read it carefully</button></li>
		<li style="list-style-type:none"><button class="btn btn-danger">To see the below graph in action you have to add some expenses for today,<br> yesterday and 2 days ago going to the Expense section as shown in the graph. So, just do it, it is quite amazing.<br> For any query, Just contact Bashar at 01834663387 or see the documentation and site tour. Thank you.</button></li>
            <div class="card">
                <div class="card-header bg-primary text-white" style="height:60px;">
                 @role(1)
                 {{ __('Dashboard ') }}
                   @else
              You are not a department head
                 @endrole

				 </div>

                <div class="card-body" style="height:800px;">
				<div class="col-md-3">
                    <div class="card">
                <div class="card-header bg-primary text-white" style="height:60px;">{{ __('Total Expense') }}</div>

                <div class="card-body">
				{{$first}}
					
                </div>
                </div>
			</div>
			<div class="col-md-3">
                    <div class="card">
                <div class="card-header bg-success" style="height:60px;">Today's Expense</div>

                <div class="card-body">
				{{$third}}
                </div>
                </div>
			</div>
			<div class="col-md-3" style="cursor:pointer">
                    <div class="card" id="testing">
                <div class="card-header bg-primary" style="height:60px;color:white" id="insert">Click to see All Users from database (ajax)</div>
                <div class="spinner-border bb" style="display:none" role="status">
  <span class="sr-only">Loading...</span>
</div>
                <div class="card-body">
                    
                </div>
                </div>
			</div>
			<div class="col-md-3">
                    <div class="card">
                <div class="card-header bg-primary" style="height:60px;color:white">Dashboard</div>

                <div class="card-body">
                    
                </div>
                </div>
			</div>
			 
              <div class="col-md-12">
			{!! $chart->container() !!}
			{!! $chart->script() !!}
			</div>
             
            
        
                </div>
            </div>
			
        </div>
    </div>
</div>
<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">All Users </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
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

@section('bread')
<li class="active">Home</li>
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

jQuery('#insert').hide();
			jQuery('.bb').show();
		$.ajax({
			
			'type' : 'GET',
			'url' : '/expense_list',
			'success' : function(data){
				jQuery('.modal-body').html(data);
				jQuery('.modal').modal('show');
				jQuery('.bb').hide();
				jQuery('#insert').show();
			    	
				
			},
		});


	});
});
</script>
        
        
       

@endsection

@section('we')
Default User Dashboard
@endsection