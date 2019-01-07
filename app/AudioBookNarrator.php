<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AudioBookNarrator extends Model
{

    protected $guarded = [];

    protected function audioBook()
    {
        return $this->belongsTo('App\AudioBook');
    }

    protected function narrator()
    {
        return $this->belongsTo('App\Narrator');
    }

}
