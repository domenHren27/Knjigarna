<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
    </x-slot>
  
    <table class="table-auto">
        <thead>
          <tr>
            @foreach ($columns as $column)
              <th class="px-4 py-2">{{$column}}</th>
            @endforeach            

            {{-- <th class="px-4 py-2">Naslov</th>
            <th class="px-4 py-2">Vrsta gradiva</th>
            <th class="px-4 py-2">Jezik</th>
            <th class="px-4 py-2">Leto</th>
            <th class="px-4 py-2">Zaloznistvo in izdelava</th>
            <th class="px-4 py-2">Fizični opis</th>
            <th class="px-4 py-2">Število strani</th>
            <th class="px-4 py-2">Drugi avtorji</th>
            <th class="px-4 py-2">ISBN</th>
            <th class="px-4 py-2">COBIS_ID</th>
            <th class="px-4 py-2">Ocena knjige</th>
            <th class="px-4 py-2">Število ocen</th>
            <th class="px-4 py-2">Opis</th> --}}
          </tr>
        </thead>
        <tbody>
          
            @foreach ($books as $book)
            <tr>
                @foreach ($columns as $column)
                  <td class="border px-4 py-2"> {{ $book->$column }}</td>    
                @endforeach
            </tr>
            @endforeach
            
            
            
          
        </tbody>
      </table>

</x-app-layout>