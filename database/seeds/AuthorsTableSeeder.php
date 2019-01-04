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
        $genres = factory(App\Genre::class, 3)->create();
        foreach($genres as $genre){
            $authors = factory(App\Author::class, 3)->create();
            foreach($authors as $author){
                $books = factory(App\Book::class, 5)->create(['genre_id' =>$genre->id]);
                foreach($books as $book){
                    $author->books()->save($book);
                    $audioBooks = factory(App\AudioBook::class, 1)->make();
                    foreach($audioBooks as $audioBook){
                        $book->audioBooks()->save($audioBook);
                        $narrators = factory(App\Narrator::class, 1)->create();
                        foreach($narrators as $narrator){
                            $audioBook->narrators()->save($narrator);
                        }
                    }
                }
            }
        }
    }
}
