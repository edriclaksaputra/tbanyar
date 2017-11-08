<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Detailorder;

class Order extends Model
{
    protected $table = 'order';

    public function Detailorder(){
    	return $this->hasMany('App\Detailorder');
    }
}
