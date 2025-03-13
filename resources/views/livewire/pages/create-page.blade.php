<div class="flex flex-col items-center pb-8">
    <div class="w-full flex justify-start py-2 px-3">
        <a href="/records" wire:navigate class="flex items-center gap-3"> <i class="bi bi-arrow-left text-xl "></i><span class="text-lg">Back</span></a>
    </div>
    <h1 class="text-3xl text-center font-semibold my-3">Add New Record</h1>

    <div class="form w-1/2">
        <form wire:submit='create' >
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
                <span wire:loading>Saving...</span>
                <span wire:loading.class='hidden'>Save Record</span>
            </button>
         </form>
    </div>
</div>
