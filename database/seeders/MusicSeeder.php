<?php

namespace Database\Seeders;

use App\Models\Music;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $musicRecords = [
            ['title' => 'Bohemian Rhapsody', 'artist' => 'Queen', 'album' => 'A Night at the Opera', 'genre' => 'Rock', 'year' => 1975],
            ['title' => 'Billie Jean', 'artist' => 'Michael Jackson', 'album' => 'Thriller', 'genre' => 'Pop', 'year' => 1982],
            ['title' => 'Shape of You', 'artist' => 'Ed Sheeran', 'album' => 'Divide', 'genre' => 'Pop', 'year' => 2017],
            ['title' => 'Smells Like Teen Spirit', 'artist' => 'Nirvana', 'album' => 'Nevermind', 'genre' => 'Grunge', 'year' => 1991],
            ['title' => 'Rolling in the Deep', 'artist' => 'Adele', 'album' => '21', 'genre' => 'Pop', 'year' => 2010],
            ['title' => 'Hotel California', 'artist' => 'Eagles', 'album' => 'Hotel California', 'genre' => 'Rock', 'year' => 1976],
            ['title' => 'Lose Yourself', 'artist' => 'Eminem', 'album' => '8 Mile', 'genre' => 'Hip-Hop', 'year' => 2002],
            ['title' => 'Stairway to Heaven', 'artist' => 'Led Zeppelin', 'album' => 'Led Zeppelin IV', 'genre' => 'Rock', 'year' => 1971],
            ['title' => 'Hallelujah', 'artist' => 'Leonard Cohen', 'album' => 'Various Positions', 'genre' => 'Folk', 'year' => 1984],
            ['title' => 'Imagine', 'artist' => 'John Lennon', 'album' => 'Imagine', 'genre' => 'Rock', 'year' => 1971],
            ['title' => 'Someone Like You', 'artist' => 'Adele', 'album' => '21', 'genre' => 'Pop', 'year' => 2011],
            ['title' => 'Blinding Lights', 'artist' => 'The Weeknd', 'album' => 'After Hours', 'genre' => 'R&B', 'year' => 2020],
            ['title' => 'Hey Jude', 'artist' => 'The Beatles', 'album' => 'Single', 'genre' => 'Rock', 'year' => 1968],
            ['title' => 'Sweet Child O Mine', 'artist' => 'Guns N Roses', 'album' => 'Appetite for Destruction', 'genre' => 'Rock', 'year' => 1987],
            ['title' => 'Uptown Funk', 'artist' => 'Mark Ronson ft. Bruno Mars', 'album' => 'Uptown Special', 'genre' => 'Funk', 'year' => 2014],
            ['title' => 'All of Me', 'artist' => 'John Legend', 'album' => 'Love in the Future', 'genre' => 'R&B', 'year' => 2013],
            ['title' => 'Radioactive', 'artist' => 'Imagine Dragons', 'album' => 'Night Visions', 'genre' => 'Alternative Rock', 'year' => 2012],
            ['title' => 'Thinking Out Loud', 'artist' => 'Ed Sheeran', 'album' => 'x', 'genre' => 'Pop', 'year' => 2014],
            ['title' => 'Shallow', 'artist' => 'Lady Gaga & Bradley Cooper', 'album' => 'A Star Is Born', 'genre' => 'Pop'],
            ['title' => 'Old Town Road', 'artist' => 'Lil Nas X', 'album' => '7 EP', 'genre' => 'Hip-Hop', 'year' => 2019],
        ];

        foreach($musicRecords as $music)
          Music::create($music);
    }
}
