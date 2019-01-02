<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function genre(){
        return $this->belongsTo('App\Genre');
    }

    public function authors()
  {
      return $this->belongsToMany('App\Author', 'author_books');
  }

}
