<div class="py-3 px-5">
   <table class="w-full border-collapse border border-gray-300 shadow-lg rounded-lg overflow-hidden">
    <thead>
        <tr class="bg-blue-500 text-white text-left">
            <th>title</th>
            <th>artist</th>
            <th>album</th>
            <th>genre</th>
            <th>year</th>
            <th></th>
            <th></th>
        </tr>
       </thead>
       <tbody>
            @foreach ($musicRecords as $music)
                <tr>
                    <td>{{$music->title}}</td>
                    <td>{{$music->artist}}</td>
                    <td>{{$music->album}}</td>
                    <td>{{$music->genre}}</td>
                    <td>{{$music->year}}</td>
                    @can(['edit-records','delete-records'])
                    <td>
                        <a href="/edit-record/{{$music->id}}" wire:navigate class="text-black/90 hover:text-sky-600"><i class="bi bi-pencil-square text-lg "></i></a>
                    </td>

                    <td>
                        <button wire:click='delete({{$music->id}})' class="text-black/90  hover:text-red-600"><i class="bi bi-trash text-lg "></i></button>
                    </td>
                        
                    @endcan
                </tr>
            @endforeach
       </tbody>
    </table>
   
      
 
</div>
