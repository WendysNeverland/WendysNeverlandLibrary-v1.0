<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Narrator extends Model
{
    protected $guarded = [];

    public function audioBooks()
    {
        return $this->belongsToMany('App\AudioBook','audio_book_narrators');
    }
}
