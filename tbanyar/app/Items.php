<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Detailitem;

class Items extends Model
{
    protected $table = 'items';

    public function Detailitem(){
    	return $this->hasMany('App\DetailItem');
    }
}
