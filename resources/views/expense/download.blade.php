<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>dompdf</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>
<body>
	<table class="table table-bordered" id="expensetable">
    <thead>
		
	  <tr>
	<th>Item Name</th>
	<th>Purchase From</th>

	<th>Purchase Date</th>
	<th>Amount Price</th>
		
		
	  </tr>
    </thead>
    <tbody>
	@foreach($pdf as $pant)
	 <tr>
        <td>{{$pant->item_name}}</td>
        <td>{{$pant->purchase_from}}</td>
        <td>
		
             
         {{$pant->purchase_date}}
           		 
		</td>
        <td>{{$pant->item_price}}</td>
        
		
			
		
		
      </tr>
	@endforeach
      
      
    </tbody>
  </table>
  
</body>
</html>
















	
	
	
	
	
	
    
	 
	 




