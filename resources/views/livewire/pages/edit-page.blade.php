<div>
    <div class="w-full flex justify-start py-2 px-3">
        <a href="/records" wire:navigate class="flex items-center gap-3"> <i class="bi bi-arrow-left text-xl "></i><span class="text-lg">Back</span></a>
    </div>
    <div x-data='{ show: false }' class="min-h-[85vh] w-full flex flex-col justify-center items-center">
     
        <div class="flex flex-col gap-3 shadow-lg py-4 px-7 rounded-lg">
           <h1 class="text-2xl font-semibold"> {{ $music->title }}</h1>
     
            <p class="text-sm text-gray-700">Artist: {{$music->artist}}</p>
            <p class="text-sm text-gray-700">Genre: {{$music->genre}}</p>
       
            <p class="text-sm text-gray-700">Album: {{$music->album}}</p>
            <p class="text-sm text-gray-700">Year: {{$music->year}}</p>
         
    
           <button x-on:click='$wire.showModal = true'>Edit</button>
        </div>
    
    
        {{-- Edit Modal --}}
       <div 
        wire:transition.opacity.duration.200ms
        wire:show='showModal'
        class="absolute bg-black/60 min-h-screen w-full top-0 left-0 flex justify-center items-center">
        <div  class="form w-1/2 bg-white/90">
            <form wire:submit='updateMusic' x-on:submit='show = false' >
                <div class="flex justify-end">
                    <button wire:click='closeModal'><i class="bi bi-x text-4xl"></i></button>
                </div>
                <div class="inputs">
                  <label for="title">title: </label>
                   <input type="text" name="title" wire:model='title'
                   class="@error('title') border-red-500 @enderror"
                   >
                   <span>@error('title') <span class="error">{{ $message }}</span> @enderror
                  </span>
                </div>
    
                <div class="inputs">
                  <label for="artist" >artist: </label>
                  <input type="text" name="artist" wire:model='artist'
                  <span>@error('artist') <span class="error">{{ $message }}</span> @enderror
                </span>
                </div>
    
                <div class="inputs">
                    <label for="album">album: </label>
                     <input type="text" name="album" wire:model='album'
                     class="@error('album') border-red-500 @enderror"
                     >
                     <span>@error('album') <span class="error">{{ $message }}</span> @enderror
                    </span>
                  </div>
    
                <div class="inputs">
                    <label for="year">year: </label>
                     <input type="text" name="year" wire:model='year'
                     class="@error('year') border-red-500 @enderror"
                     >
                     <span>@error('year') <span class="error">{{ $message }}</span> @enderror
                    </span>
                  </div>
    
                  <div class="flex justify-end gap-6 mb-8">
                    <!-- Course Filter -->
                    <div class="flex items-center gap-2">
                        <label for="genre" class="font-medium">Genre:</label>
                        <select name="genre" id="genre" wire:model="genre"
                            class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                        
                            <option value="Pop">Pop</option>
                            <option value="Rock">Rock</option>
                            <option value="Hip-Hop / Rap">Hip-Hop / Rap</option>
                            <option value="R&B / Soul">R&B / Soul</option>
                            <option value="Jazz">Jazz</option>
                            <option value="Classical">Classical</option>
                            <option value="Electronic / EDM">Electronic / EDM</option>
                            <option value="Country">Country</option>
                            <option value="Reggae">Reggae</option>
                            <option value="Blues">Blues</option>
                        </select>
                    </div>
                </div>
                
    
                <button type="submit" class="">
                    <span wire:loading>Updating...</span>
                    <span wire:loading.class='hidden'>Update Record</span>
                </button>
             </form>
        </div>
       </div>
    </div>
    
</div>

