<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Items;
use App\Faktur;

class Detailfaktur extends Model
{
    protected $table = 'detailfaktur';

    public function Items(){
		return $this->belongsTo('App\Items');
	}

	public function Faktur(){
		return $this->belongsTo('App\Faktur');
	}
}
