<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Suppliers;
use App\Items;

class Detailitem extends Model
{
	protected $table = 'Detailitem';

	public function Suppliers(){
		return $this->belongsTo('App\Suppliers');
	}

	public function Items(){
		return $this->belongsTo('App\Items');
	}
}
