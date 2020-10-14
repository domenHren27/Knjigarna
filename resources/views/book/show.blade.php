<x-app-layout>
    <x-slot name="header">
        <a href="/books">{{$book->naslov}}</a>
    </x-slot>
    <div class="flex justify-center">
        <div class="w-full max-w-lg">
            <div class="mt-3">
                <h1 class="font-bold">Avtor</h1>
                <p>{{$book->avtor}}</p>
            </div>
            <div class="mt-3">
                <h1 class="font-bold">Naslov</h1>
                <p>{{$book->naslov}}</p>
            </div>
            <div class="mt-3">
                <h1 class="font-bold">Vrsta Gradiva</h1>
                <p>{{$book->vrsta_gradiva}}</p>
            </div>
            <div class="mt-3">
                <h1 class="font-bold">Jezik</h1>
                <p>{{$book->jezik}}</p>
            </div>
            <div class="mt-3">
                <h1 class="font-bold">Leto</h1>
                <p>{{$book->leto}}</p>
            </div>
            <div class="mt-3">
                <h1 class="font-bold">Založništvo in izdelava</h1>
                <p>{{$book->zaloznistvo_izdelava}}</p>
            </div>
            <div class="mt-3">
                <h1 class="font-bold">Fizični opis</h1>
                <p>{{$book->fizicni_opis}}</p>
            </div>
            <div class="mt-3">
                <h1 class="font-bold">Število strani</h1>
                <p>{{$book->st_strani}}</p>
            </div>
            <div class="mt-3">
                <h1 class="font-bold">Drugi avtorji</h1>
                <p>{{$book->drugi_avtorji}}</p>
            </div>
            <div class="mt-3">
                <h1 class="font-bold">ISBN</h1>
                <p>{{$book->isbn}}</p>
            </div>
            <div class="mt-3">
                <h1 class="font-bold">COBIS_ID</h1>
                <p>{{$book->cobis_id}}</p>
            </div>
            <div class="mt-3">
                <h1 class="font-bold">Ocena Knjige</h1>
                <p>{{$book->ocena_knjige}}</p>
            </div>
            <div class="mt-3">
                <h1 class="font-bold">Število ocen</h1>
                <p>{{$book->st_ocen}}</p>
            </div>
            <div class="mt-3">
                <h1 class="font-bold">Opis</h1>
                <p>{{$book->opis}}</p>
            </div>
    </div>
</x-app-layout>