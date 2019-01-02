<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\author::class, 3)->create()
            ->each(function($author){
                $genre = factory(App\genre::class, 1)->create();
                $books = factory(App\book::class, 5)->make();
                foreach($books as $book){
                    $author->books()->save($book,['genre_id', $genre])
                }
            })

    }
}
