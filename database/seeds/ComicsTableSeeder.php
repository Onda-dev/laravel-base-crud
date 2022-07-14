<?php

use Illuminate\Database\Seeder;
use App\Comics;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach($comics as $comic) {
            $newComic = new Comic();
        }

        $newComic = new Comic();

        $newComic->title = $comic['title'];
        $newComic->description = $comic['description'];
        $newComic->price = $comic['price'];
        $newComic->series = $comic['series'];
        $newComic->sale_date = $comic['sale_date'];
        $newComic->comic_book = $comic['comic_book'];
        $newComic->image = $comic['thumb'];

        $newComic->save();
    }
}
