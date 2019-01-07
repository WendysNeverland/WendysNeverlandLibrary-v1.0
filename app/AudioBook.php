<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AudioBook extends Model
{
    protected $guarded = [];
    //De onderstaande functions geven de relatie tussen tabelen in het database weer.
    public function narrators()
    {
        return $this->belongsToMany('App\Narrator', 'audio_book_narrators');
    }

    public function book()
    {
        return $this->belongsTo('App\Book');
    }
}
