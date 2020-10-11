<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'avtor', 
        'naslov', 
        'vrsta_gradiva', 
        'jezik', 
        'leto', 
        'zaloznistvo_izdelava', 
        'fizicni_opis', 'st_strani', 
        'drugi_avtorji', 
        'isbn' , 
        'cobis_id', 
        'ocena_knjige', 
        'st_ocen', 
        'opis'
    ]; 

    public function path()
    {
        return "/books/{$this->id}";    
    }
}
