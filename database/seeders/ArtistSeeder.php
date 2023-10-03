<?php

namespace Database\Seeders;
use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        // if (Song::count() > 0){
        //     echo "There are some songs in database";
        //     return;
        // }

        $artist = new Artist();
        $artist->name = "Miley Cyrus";
        $artist->image_path = null;
        $artist->save();

        $artist = new Artist();
        $artist->name = "Lee Isaacs";
        $artist->image_path = null;
        $artist->save();

        $artist = new Artist();
        $artist->name = "Getsunova";
        $artist->image_path = null;
        $artist->save();

        $artist = new Artist();
        $artist->name = "Dept";
        $artist->image_path = null;
        $artist->save();

        Artist::factory(100) -> create();
    }
}
