<?php

namespace App\Livewire\Pages;

use App\Models\Music;
use Livewire\Component;

class IndexPage extends Component
{

    public function delete($id){
    $record  =  Music::find($id);

    if($record)
    $record->delete();

    }

    public function render()
    {
        return view('livewire.pages.index-page',['musicRecords' => Music::latest()->get() ]);
    }
}
