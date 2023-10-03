<?php

namespace Database\Seeders;
use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        if (Song::count() > 0){
            echo "There are some songs in database";
            return;
        }
        $song = new Song();
        $song->title = "River";
        $song->artist_id = 1;
        $song->duration = 3*60+20;
        $song->save();
        $song->playlists()->attach(1);
        $song->playlists()->attach(3);

        $song = new Song();
        $song->title = "Song for You";
        $song->artist_id = 1 ;
        $song->duration = 2*60+48;
        $song->save();
        $song->playlists()->attach(1);
        $song->playlists()->attach(3);

        
        $song = new Song();
        $song->title = "คำถามซึ่งไร้คนตอบ";
        $song->artist_id = 2 ;
        $song->duration = 4*60+29;
        $song->save();
        $song->playlists()->attach(1);
        $song->playlists()->attach(3);

        $song = new Song();
        $song->title = "17 Hoo Hoo";
        $song->artist_id = 2 ;
        $song->duration = 4*60+29;
        $song->save();
        $song->playlists()->attach(1);
        $song->playlists()->attach(3);

        Song::factory(1000) -> create();
    }
}
