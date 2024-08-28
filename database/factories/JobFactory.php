<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle,
            'employer_id' => Employer::factory(),
            'salary' => fake()->randomElement(['$60,000 - $75,000', '$80,000 - $100,000', '$100,000 - $120,000']),
            'location' => fake()->city . ', ' . fake()->stateAbbr,
            'experience' => fake()->randomElement(['2+ years', '3+ years', '5+ years']),
            'company' => fake()->company,
            'type' => fake()->randomElement(['Full-time', 'Part-time', 'Remote']),
            'date_posted' => fake()->date('Y-m-d', 'now'),
        ];
    }
}
