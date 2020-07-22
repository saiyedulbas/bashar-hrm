<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class award extends Model
{
    protected $fillable = ['award_name','award_item','cash_price','employee_name'];
}
