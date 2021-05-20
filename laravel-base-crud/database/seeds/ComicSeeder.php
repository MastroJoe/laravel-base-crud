<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $comics = config('comic');

      for ($i=0; $i < count($comics); $i++) {
        $comic = $comics[$i];

        $comic_obj = new Comic();
        $comic_obj->title = $comic['title'];
        $comic_obj->description = $comic['description'];
        $comic_obj->thumb = $comic['thumb'];
        $comic_obj->price = $comic['price'];
        $comic_obj->series = $comic['series'];
        $comic_obj->sale_date = $comic['sale_date'];
        $comic_obj->type = $comic['type'];
        $comic_obj->save();
      }
    }
}
