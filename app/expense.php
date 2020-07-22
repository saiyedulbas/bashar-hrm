<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class expense extends Model
{
   
   protected $fillable = ['item_name','purchase_from','purchase_date','item_price'];
}
