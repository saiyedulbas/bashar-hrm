<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class designation extends Model
{
	
    
	function userinfo(){
		return $this->hasOne('App\User','id','added_by');
	}
	function getdesignation(){
		return $this->hasMany('App\realdesignation','department_id','id');
	}
}
