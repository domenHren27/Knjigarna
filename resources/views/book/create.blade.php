<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ustvari Knjigo
        </h2>
      </x-slot>
      <div class="flex justify-center mt-4">
        <form method="POST" action="/books" class="w-full max-w-lg">
          @csrf
          

            
            <div class="flex flex-wrap -mx-3 mb-6 items-center">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="avtor">
                  Avtor
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="avtor" id="avtor" type="text" placeholder="Ime in primek avtorja">
                
              </div>
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="naslov">
                  Naslov
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="naslov" id="naslov" type="text" placeholder="Naslov knjige">
                
              </div>
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="vrsta-gradiva">
                  Vrsta gradiva
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="vrsta_gradiva" id="vrsta_gradiva" type="text" placeholder="Vrsta gradiva 'Žaner'">
                
              </div>

              <div class="w-full px-3 mb-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="jezik">
                  Jezik
                </label>
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="jezik" id="jezik">
                  <option value="slovenski">Slovenščina</option>
                  <option value="nemški">Nemščina</option>
                  <option value="angleški">Angleščina</option>
                  <option value="ruski">Ruščina</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
              </div>
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="leto">
                  Leto
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="leto" name="leto" type="number" step="1" placeholder="2009">
                
              </div>
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="zaloznistvo-in-izdelava">
                  Zaloznistvo in izdelava
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="zaloznistvo-in-izdelava" 
                name="zaloznistvo_izdelava" type="text" placeholder="Založnik in izdelovalec knjige">
                
              </div>
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="fizicni-opis">
                  Fizični opis
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="fizicni-opis" name="fizicni_opis" type="text" placeholder="Trde platnice:ilus">
                
              </div>
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="st-strani">
                  Št. strani
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="st-strani" name="st_strani" type="number" step="1" placeholder="300">
                
              </div>
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="drugi-avtorji">
                  Drugi avtorji
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="drugi-avtorji" name="drugi_avtorji" type="text" placeholder="Drugi avtorji knjige">
                
              </div>
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="isbn">
                  ISBN
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="isbn" name="isbn" type="text" placeholder="978-86-11-17208-8">
                
              </div>
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="cobis-id">
                  COBIS ID
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="cobis-id" name="cobis_id" type="text" placeholder="251517184">
                
              </div>
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="opis">
                  Opis
                </label>
                
                <textarea class="w-full resize-none"id="opis" name="opis" rows="10" cols="50">
                  Nekaj o knjigi...
                </textarea>
                
                <button type="submit" value="Submit" class="bg-white hover:bg-orange-darky text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                  Potrdi
                </button>

                <div class="mt-3">
                  <a class="bg-white hover:bg-orange-darky text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" href="/books">Nazaj</a>
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
              </div>

            </div>
          </form>
          
        </div>

      
      

</x-app-layout>