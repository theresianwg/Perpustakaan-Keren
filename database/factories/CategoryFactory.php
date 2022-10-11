<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'overridden',
            'slug' =>'overridden',
            'image' => 'category_science_fiction.jpg',
            'description' => $this->faker->sentence(rand(10, 15))
        ];
    }
}
