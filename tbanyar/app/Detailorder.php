<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Detailorder;
use App\Detailitem;

class Detailorder extends Model
{
    protected $table = 'detailorder';

    public function Order(){
		return $this->belongsTo('App\Order');
	}

	public function Detailitem(){
		return $this->belongsTo('App\Detailitem');
	}
}
