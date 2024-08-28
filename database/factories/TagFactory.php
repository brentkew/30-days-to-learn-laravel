<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->word(); // Generates a random word for the tag name

        return [
            'name' => ucfirst($name),  // Capitalizes the first letter of the tag name
            'slug' => Str::slug($name), // Generates a slug from the tag name
            'description' => $this->faker->sentence(), // Generates a random sentence for description
        ];
    }
}
