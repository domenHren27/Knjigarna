<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Knjige
      </h2>
    </x-slot>
      <div class="flex items-stretch overflow-auto">
        <table class="table-auto">
          <thead>
            <tr>
              <th class="px-2 py-2"> </th>
              @foreach ($columns as $column)
                <th class="px-2 py-2">{{$column}}</th>
              @endforeach            
    
            </tr>
          </thead>
          <tbody>
            @foreach ($books as $book)
            <tr>
                
                @foreach ($columns as $column)
                  @if ($column == 'id')
                     <td class="border px-2 py-2">
                      <form method="POST" action="/books/{{$book->$column}}">
                        @method('DELETE')
                        @csrf
                        
                
                        <button type="submit" value="Submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
                          Izbriši
                        </button>
                      </form>
                      
                    </td>   
                  @endif
                  @if (gettype($book->$column) == 'string')
                    <td class="border px-2 py-2"> {{ Illuminate\Support\Str::limit($book->$column, 40) }}</td> 
                  @else
                    <td class="border px-2 py-2"> {{ $book->$column }}</td>  
                  @endif
                   
                @endforeach

                
            </tr>
            @endforeach     
          </tbody>
        </table>
      </div>
      
      
    
    

</x-app-layout>