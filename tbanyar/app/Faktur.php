<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Detailfaktur;

class Faktur extends Model
{
    protected $table = 'faktur';

    public funtion Detailfaktur(){
    	return $this->hasMany('App\Detailfaktur');
    }
}
