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
        
      }
    }
}
