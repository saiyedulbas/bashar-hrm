@extends('layouts.app')
@section('expense')
active
@endsection

  @section('content')
@can('can see expense list')
<div class="now" style="width:90%;margin:auto;">
<li class="btn btn-success">Today's expense : {{ami()}}</li>
<li style="list-style-type:none"><a class="btn btn-info" target="_blank" href="https://findbashar.com">Click Here to see Bashar's Portfolio</a></li>
<button type="submit" class="btn btn-success" data-toggle="modal" data-target="#expensemodal" style="margin-top:20px;width:150px;">Add Expense <i class="fa fa-plus"></i>  </button>
<a href="{{url('/expense/download')}}" class="btn btn-success" id="">Download Whole Page</a><br>
<li style="list-style-type:none"><button class="btn btn-danger">For any query, Just contact Bashar at 01834663387 or see the documentation and site tour. Thank you.</button></li>




<!-- Modal -->
<div class="modal fade" id="expensemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Expense</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card">
<div class="card-header bg-info">
Add Expense 
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
<form action="{{route('expense.store')}}" method="POST" enctype="multipart/form-data" >
  
  @csrf
  
  
  
  
  
  
  <div class="form-group">
    <label class="">
      Item Name
    </label>
	<input class="form-control item_name" type="name" name="item_name" required/>
  </div>
  <div class="form-group">
    <label class="">
      Purchase From
    </label>
	<input class="form-control purchase_from" type="name" name="purchase_from" required/>
  </div>
  <div class="form-group ">
    <label class="">
      Purchase Date
    </label>
	<input class="form-control purchase_date" type="date" name="purchase_date" required/>
  </div>
  <div class="form-group ">
    <label class="">
      Item price
    </label>
	<input class="form-control item_price" type="name" name="item_price" required/>
  </div>
  <div class="form-group ">
    <label class="">
      Attach Bill
    </label>
	<input class="form-control" type="file" name="item_bill" />
  </div>
  
  
  
  
   
	<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <button type="submit" class="btn btn-primary our">Add Expense</button>
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
        <th>Item Name</th>
        <th>Purchase From</th>
        
        <th>Purchase Date</th>
		<th>Amount Price</th>
		<th>Attached Bill</th>
		<th>Download</th>
		
      </tr>
    </thead>
    <tbody>
	@foreach($jama as $pant)
	 <tr>
        <td>{{$pant->item_name}}</td>
        <td>{{$pant->purchase_from}}</td>
        <td>
		
             
         {{$pant->purchase_date}}
           		 
		</td>
        <td>{{$pant->item_price}}</td>
        
		@if($pant->attachment == 'document/image')
			<td>
		     No attachment
		</td>
		@else
			<td>
		     {{$pant->attachment}}
		</td>
		@endif
		@if($pant->attachment != 'document/image')
		<td style="text-align:center;"><a href="{{asset('/bingo')}}/{{$pant->attachment}}" target="_blank" ><i class="fa fa-download" style="font-size:25px;"></i></a></td>
	@else
		<td>No download available</td>
		@endif
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
<li class="active">Expense</li>
@endsection
@section('content2')
<script type="text/javascript">
$(document).ready(function() {
    $('#expensetable').DataTable();
	jQuery('.our').click(function(){
		var first = jQuery('.item_name').val();
		var second = jQuery('.purchase_from').val();
		var third = jQuery('.purchase_date').val();
		var fourth = jQuery('.item_price').val();
		if(first != '' && second != '' && third != '' && fourth != ''){
			alert('Item Added');
		}
		
	});
} );
</script>
@endsection
@section('we')
Expense
@endsection