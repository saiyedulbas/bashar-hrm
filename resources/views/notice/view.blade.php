@extends('layouts.app')
@section('notice')
active
@endsection

       
  @section('content')
@can('can see notice list')
<div class="now" style="width:90%;margin:auto;">

<li class="btn btn-success">Today's expense : {{ami()}}</li>
<li style="list-style-type:none"><a class="btn btn-info" target="_blank" href="https://findbashar.com">Click Here to see Bashar's Portfolio</a></li>
<button type="submit" class="btn btn-success" data-toggle="modal" data-target="#noticemodal" style="margin-top:20px;width:150px;">Add Notice <i class="fa fa-plus"></i>  </button>
<li style="list-style-type:none"><button class="btn btn-info">For any query, Just contact Bashar at 01834663387 or see the documentation and site tour. Thank you.</button></li>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="noticemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Notice</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card">
<div class="card-header bg-info">
Add Notice 
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
<form action="{{url('/notice/new')}}" method="POST" enctype="multipart/form-data" >
  
  @csrf
  
  
  
  
  
  
  <div class="form-group">
    <label class="">
      Notice Title
    </label>
	<input class="form-control notice_title" type="name" name="notice_title" required />
  </div>
  
 
  
  <div class="form-group ">
    <label class="">
      Notice Content
    </label>
	<textarea  class="cktext" id="" cols="30" rows="10" name="cktext" required >Add some content here</textarea>
  </div>
  
  
  
  
   
	<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <button type="submit" class="btn btn-primary our">Add Notice</button>
      </div>
  
  
</form>

</div>
</div>
      </div>
      
    </div>
  </div>
</div>
<div class="tablewrap" style="width:100%;margin-top:20px;">
<div class="card">
<div class="card-header bg-info">
Expense list 
</div>
<div class="card-body">
<table class="table table-striped" id="expensetable">
    <thead>
      <tr>
        <th>Notice Title</th>
        <th>Notice Content</th>
        <th>Created At</th>
        
        
        <th style="text-align:center">Action</th>
		<th>Status</th>
		
      </tr>
    </thead>
    <tbody>
	@foreach($bador as $itor)
	<tr>
	<td>{!!$itor->notice_title!!}</td>
	<td style="width:300px">{!!$itor->notice_content!!}</td>
	<td>{{$itor->created_at->diffForHumans()}}</td>
	<td style="text-align:center">
	<div class="btn-group" role="group" aria-label="Basic example">
	@if($itor->notice_status == 1)
  <a type="button" href="{{url('/activenotice')}}/{{$itor->id}}" class="btn btn-info">Deactivate</a>
    @else
	 <a type="button" href="{{url('/activenotice')}}/{{$itor->id}}" class="btn btn-info">Activate</a>
  @endif
  <a type="button" href="{{url('/deletenotice')}}/{{$itor->id}}" class="btn btn-danger">Delete</a>
  
   </div>
	
	</td>
	<td>
	@if($itor->notice_status == 1)
  <p style="text-align:center">Active</p>
    @else
	 <p style="text-align:center">Deactive</p>
  @endif
	</td>
	</tr>
      @endforeach
      
    </tbody>
  </table>
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
<li class="active">Notice</li>
@endsection
@section('content2')
<script type="text/javascript">
$(document).ready(function() {
    $('#expensetable').DataTable();
	jQuery('.our').click(function(){
		var first = jQuery('.notice_title').val();
		var second = jQuery('.cktext').val();
		
		if(first != '' && second != ''){
			alert('Item Added');
		}
		
		
	});
} );
</script>
<script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
<script>
                        CKEDITOR.replace( 'cktext' );
                </script>
@endsection		 
@section('we')
Notice
@endsection				 
				 
                   
		  
                
