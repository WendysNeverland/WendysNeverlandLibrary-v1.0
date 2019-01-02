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
        factory(App\Author::class, 3)->create()
            ->each(function($author){
                $genre = App\Genre::where('id',1)->get();
                $books = factory(App\Book::class, 5)->make();
                foreach($books as $book){
                    $author->books()->save($book);
                }
            });

    }
}
