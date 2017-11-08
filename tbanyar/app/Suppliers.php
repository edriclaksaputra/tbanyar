<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Detailitem;

class Suppliers extends Model
{
    protected $table = 'suppliers';

    public function Detailitem(){
    	return $this->hasMany('App\DetailItem');
    }
}
