<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();

        $book = new Book;

        $table = $book->getTable();

        $columns = DB::getSchemaBuilder()->getColumnListing($table);

        

        //Kreiramo tabelo index podamo stolpce in polja
        return view('book.index')->with('books' , $books)->with('columns', $columns);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'avtor' => 'required|string|max:100',
            'naslov' => 'required|string|max:100',
            'vrsta_gradiva' => 'required|string|max:100',
            'jezik' => 'required|string',
            'leto' => 'required|integer',
            'zaloznistvo_izdelava' => 'required|string|max:100',
            'fizicni_opis' => 'nullable|string|max:100',
            'st_strani' => 'required|integer',
            'drugi_avtorji' => 'nullable|string|max:255',
            'isbn' => 'required|unique:books,isbn',
            'cobis_id' => 'nullable|unique:books,cobis_id',
            'opis' => 'nullable|string'
        ]);

        $book = Book::create($data);

       
        $book->save();

        return redirect('/books');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect('/books');
    }

    public function validateTheRequest()
    {
        return request()->validate([
            'avtor' => 'required|string|max:100',
            'naslov' => 'required|string|max:100',
            'vrsta_gradiva' => 'required|string|max:100',
            'jezik' => 'required|string',
            'leto' => 'required|integer',
            'zaloznistvo_izdelava' => 'required|stirng|max:100',
            'fizicni_opis' => 'nullable|string|max:100',
            'st_strani' => 'required|integer',
            'drugi_avtorji' => 'nullable|string|max:255',
            'isbn' => 'required|unique:books,isbn',
            'cobis_id' => 'nullable|unique:books,cobis_id',
            'opis' => 'nullable|string'
            // Manjka št. ocen in opis, ki ju bomo potegnili preko goodreads
        ]);       
    }
}
