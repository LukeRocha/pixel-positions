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
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomElement(['$90,000 USD', '$45,000 USD', '$38,000 USD', '$24,000 USD', '$18,000 USD']),
            'location' => 'Remote',
            'schedule' => 'Full time',
            'url' => fake()->url(),
            'featured' => false
        ];
    }
}
