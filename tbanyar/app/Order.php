<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Detailorder;
use App\Suppliers;

class Order extends Model
{
    protected $table = 'order';

    public function Detailorder(){
    	return $this->hasMany('App\Detailorder');
    }

    public function Suppliers(){
    	return $this->belongsTo('App\Suppliers');
    }
}
