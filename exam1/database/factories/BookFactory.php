<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'name' => fake()->randomElement(["Love","hate"]),
            'description' => fake()->randomElement(["Book about Love","Book about hate"]),
            'genre' => fake()->randomElement(["scifi","beletry"]),
            'author_id' =>fake()->unique(true)->numberBetween(1, 10),

        ];
    }
}
