<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'avtor' => $this->faker->name,
            'naslov' => $this->faker->sentence(3),
            'vrsta_gradiva' => 'fantazija',
            'jezik' => 'slovenski',
            'leto' => $this->faker->year,
            'zaloznistvo_izdelava' => 'mladinska knjiga',
            'fizicni_opis' => 'ilus',
            'st_strani' => $this->faker->numberBetween(1, 1000),
            'drugi_avtorji' => $this->faker->name,
            'isbn' => $this->faker->isbn10,
            'cobis_id' => $this->faker->isbn13,
            'ocena_knjige' => $this->faker->randomFloat(2,1, 5),
            'st_ocen' => $this->faker->randomNumber(6),
            'opis' => $this->faker->text
        ];
    }
}
