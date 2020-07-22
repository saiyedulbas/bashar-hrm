<?php

 function ami(){
	echo App\expense::whereDate('purchase_date','=',today())->sum('item_price');
}

