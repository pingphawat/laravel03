<?php

namespace Database\Seeders;
use App\Models\Playlist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        if (Playlist::count() > 0){
            echo "There are some songs in database";
            return;
        }
        $playlist = new Playlist();
        $playlist->name = "My first playlist";
        $playlist->user_id = 1 ;
        $playlist->accessibility = "PUBLIC" ;
        $playlist->save(); 
        $playlist->songs()->attach(2);
        $playlist->songs()->attach(68);

        $playlist = new Playlist();
        $playlist->name =  "My second playlist";
        $playlist->user_id = 1;
        $playlist->accessibility =  "PUBLIC";
        $playlist->save(); 
        $playlist->songs()->attach(2);
        $playlist->songs()->attach(68);

        $playlist = new Playlist();
        $playlist->name =  "My third playlist";
        $playlist->user_id = 1;
        $playlist->accessibility =  "PUBLIC";
        $playlist->save(); 
        $playlist->songs()->attach(2);
        $playlist->songs()->attach(68);

        $playlist = new Playlist();
        $playlist->name =  "My private playlist";
        $playlist->user_id = 2;
        $playlist->accessibility =  "PRIVATE";
        $playlist->save();  
        $playlist->songs()->sync([98, 4, 7]);

        $playlist = new Playlist();
        $playlist->name =  "Another private playlist";
        $playlist->user_id = 2;
        $playlist->accessibility =  "PRIVATE";
        $playlist->save(); 
        $playlist->songs()->sync([61, 34, 15, 2]);
        
        Playlist::factory(100) -> create();
    }
}
