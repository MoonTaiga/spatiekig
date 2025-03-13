<?php

use App\Livewire\Pages\IndexPage;
use App\Livewire\Pages\HomePage;
use App\Livewire\Pages\CreatePage;
use App\Livewire\Auth\Login;
use App\Livewire\Pages\EditPage;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function(){
    Route::get('/records',IndexPage::class);
    Route::get('/home',HomePage::class);
    Route::get('/create',CreatePage::class);
    Route::get('/edit-record/{id}',EditPage::class);

});

Route::middleware(['guest'])->group(function (){
    Route::get('/',Login::class);
Route::get('/login',Login::class)->middleware(['guest'])->name('login');
});
