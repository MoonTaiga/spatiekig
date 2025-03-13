<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Page Title' }}</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>

    <header class="py-3 px-4 bg-indigo-500 text-white">
        <nav class="flex justify-between">
            <div class="logo">
                <a href="/home" wire:navigate class="text-2xl font-semibold">Midterm Spatie</a>
            </div>
            <div class="flex gap-7 items-center">

            @auth
            <a href="/records" wire:navigate>Records</a>
            <a href="/create" wire:navigate>Create</a>
            <p>{{auth()->user()->name}}</p>

            <livewire:auth.logout />

            @else
             <a href="/login" wire:navigate>Login</a>
            @endauth
            </div>

        </nav>
    </header>

    <main>
        {{ $slot }}
    </main>

    @livewireScripts
</body>
</html>
