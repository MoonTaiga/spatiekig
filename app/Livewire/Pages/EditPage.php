<?php

namespace App\Livewire\Pages;

use App\Models\Music;
use Livewire\Component;
use Livewire\Attributes\Validate;


class EditPage extends Component
{
    public $showModal = false;


    public $music;
    public $id;
    public $album;
    public $year;


    #[Validate('required')]
    public $title;

    #[Validate('required')]
    public $artist;
    #[Validate('required')]
    public $genre;

  
 


    public function mount($id){
    $this->music = Music::find($id);

       $this->id = $id;
       $this->title = $this->music->title;
       $this->artist = $this->music->artist;
       $this->album = $this->music->album;
       $this->genre = $this->music->genre;
       $this->year = $this->music->year;
    }

    public function updateMusic(){
        $this->validate();
        
        $this->music->update([
            'title' => $this->title,
            'artist' => $this->artist,
            'album' => $this->album,
            'genre' => $this->genre,
            'year' => $this->year
        ]);

        $this->showModal = false;
    }

    public function closeModal(){
        $this->showModal = false;

    }

    public function render()
    {
        return view('livewire.pages.edit-page',['music' => Music::find($this->id)]);
    }
}
