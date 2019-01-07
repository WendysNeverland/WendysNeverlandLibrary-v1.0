<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuthorBook extends Model
{
    protected $guarded = [];

    protected function author()
    {
        return $this->belongsTo('App\Author');
    }

    protected function book()
    {
        return $this->belongsTo('App\Book');
    }
}
