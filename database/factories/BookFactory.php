<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->name();
        return [
            'category_id' => 'overidden',
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'image' => 'book.jpg',
            'author' => $this->faker->name(),
            'publisher' => $this->faker->company(),
            'stock' => rand(10, 20),
            'published_date' => $this->faker->date('Y-m-d'),
            'description' => $this->faker->sentence(10),
        ];
    }
}
