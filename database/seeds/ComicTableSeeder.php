<?php

use Illuminate\Database\Seeder;

use App\Comic;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data= config('comics');
        foreach($data as $item){
            $newComic = new Comic();

            $newComic->thumb = $item['thumb'];
            $newComic->title = $item['title'];
            $newComic->series = $item['series'];
            $newComic->description = $item['description'];
            $newComic->price = $item['price'];
            $newComic->sale_date = $item['sale_date'];
            $newComic->type = $item['type'];

            $newComic->save();
        }
    }
}
