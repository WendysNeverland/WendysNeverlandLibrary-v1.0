<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    public function genre(){
        return $this->belongsTo('App\genre');
    }
}
