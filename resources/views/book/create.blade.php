<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ustvari Knjigo
        </h2>
      </x-slot>
      <div class="flex justify-center mt-4 ">
        <form method="POST" action="/books" class="flex flex-col w-full max-w-2xl p-1 sm:px-20 bg-white border-b border-gray-200 rounded-md shadow py-5">
          @csrf
          

            
            <div class="flex flex-warap">
              <div class=" w-full px-3">
                <x-jet-label for="avtor" value="Avtor" />
                <x-jet-input id="avtor" name="avtor" type="text" class="mt-1 block w-full" placeholder="Alojz Bartolj"/>
                
              </div>

              <div class=" w-full px-3">
                <x-jet-label for="naslov" value="Naslov" />
                <x-jet-input id="naslov" name="naslov" type="text" class="mt-1 block w-full" placeholder="Alamut"/>
                
              </div>
            </div>

            <div class="flex w-full mt-3">
              <div class="px-3 w-2/5">
                <x-jet-label for="vrsta-gradiva" value="Vrsta gradiva" />
                <x-jet-input id="vrsta-gradiva" name="vrsta_gradiva" type="text" class="mt-1 w-full block" placeholder="Roman"/>                
              </div>

              <div class="px-3 w-2/5">
                <x-jet-label for="jezik" value="Jezik" />
                <x-select class="mt-1 block w-full" id="jezik" name="jezik"></x-select>  
              </div>

              <div class="px-3 w-1/5">
                <x-jet-label for="leto" value="Leto"/>
                <x-jet-input id="leto" name="leto" type="number" class="mt-1 block w-full " placeholder="2009"/>
                
              </div>
              
            </div>
             
            <div class="flex w-full mt-3">            
              <div class="w-2/5 px-3">
                <x-jet-label for="zaloznistvo-in-izdelava" value="Zalozništvo in izdelava" />
                <x-jet-input id="zaloznistvo-in-izdelava" name="zaloznistvo_izdelava" type="text" class="mt-1 block w-full" placeholder="Mladinska knjiga"/>
              
              </div>

              <div class="w-2/5 px-3">
                
                <x-jet-label for="fizicni-opis" value="Fizični opis"/>
                <x-jet-input id="fizicni-opis" name="fizicni_opis" type="text" class="mt-1 block w-full" placeholder="ilus:"/>
              
              </div>

              <div class="w-1/5 px-3">

                <x-jet-label for="st-strani" value="Št. str."/>
                <x-jet-input id="st-strani" class="mt-1 block w-full" id="st-strani" name="st_strani" type="number" step="1" placeholder="300"/>                
              </div>

            </div>
            <div class="flex mt-3">    
              
                
              
              

              <div class="w-full px-3">
                <x-jet-label for="drugi-avtorji" value="Drugi avtorji"/>
                <x-jet-input id="drugi-avtorji" class="mt-1 block w-full" id="drugi-avtorji" name="drugi_avtorji" type="text" placeholder="Drugi avtorji knjige"/> 
                
              </div>
            </div>

            <div class="flex mt-3"> 
              <div class="w-1/2 px-3">
                <x-jet-label for="isbn" value="ISBN"/>
                <x-jet-input id="isbn" class="mt-1 block w-full" id="isbn" name="isbn" type="text" placeholder="978-86-11-17208-8"/>

                
              </div>
              <div class="w-1/2 px-3">
                <x-jet-label for="cobis-id" value="COBIS ID"/>
                <x-jet-input id="cobis-id" class="mt-1 block w-full" id="cobis-id" name="cobis_id" type="text" placeholder="251517184"/>                
              </div>
            </div>

            <div class="w-full px-3">
              <x-jet-label for="opis" value="Opis"/>
              <x-text-area id="opis" name='opis' class="w-full mt-1 block"> 
                Nekaj o knjigi...
              </x-text-area>
            </div>

            @if ($errors->any())
              <div class="mt-3 bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li class="font-bold">{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            <div class="flex px-3 justify-center mt-3"> 
              <div class="flex justify-between w-1/2">
                <x-jet-button>
                  Shrani
                </x-jet-button>

                <x-cancle href="/books">
                  Prekini
                </x-cancle>
              </div>  
        	  </div>
            
                 

            
              

            
        </form>
          
      </div>

      
      

</x-app-layout>