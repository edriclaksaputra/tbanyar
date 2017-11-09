<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Detailitem;
use App\Order;

class Suppliers extends Model
{
    protected $table = 'suppliers';

    public function Detailitem(){
    	return $this->hasMany('App\DetailItem');
    }

    public function Order(){
    	return $this->hasMany('App\Order');
    }
}
