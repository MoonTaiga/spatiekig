<?php

namespace App\Livewire\Pages;

use App\Models\Music;
use Livewire\Component;
use Livewire\Attributes\Validate;


class CreatePage extends Component
{
    #[Validate('required')]
    public $title;

    #[Validate('required')]
    public $artist;


    public $album;

    #[Validate('required')]
    public $genre;

  
    public $year;

 
  

    public function create(){

        $this->validate();

        Music::create([
            'title' => $this->title,
            'artist' => $this->artist,
            'album' => $this->album,
            'genre' => $this->genre,
            'year' => $this->year
        ]);

        return redirect()->to('/records');

    }




    public function render()
    {
        return view('livewire.pages.create-page');
    }
}
