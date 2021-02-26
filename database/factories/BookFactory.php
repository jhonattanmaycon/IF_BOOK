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
        $genre = [
            'ficção',
            'romance',
            'biografia',
            'terror',
            'policial',
            'anime'
        ];
        $url = [
            'storage/app/public/teste1.png',
            'storage/app/public/teste2.png'
        ];


        return [
            'title' => $this->faker->catchPhrase(),
            'author' => $this->faker->name(),
            'synopsis' => $this->faker->realText('50'),
            'genre' => array_rand($genre),
            'age' => array_rand(range(1,18)),
            'year' => $this->faker->year,
            'cover' => array_rand($url),
        ];
    }
}
