<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendance>
 */
class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'time_in' => $this->faker->dateTimeThisMonth(), // Generates a random date and time within the current month
            'time_out' => $this->faker->dateTimeThisMonth(), // Generates a random date and time within the current month
            'location' => $this->faker->randomElement(['office', 'home']), // Randomly selects 'office' or 'home'
            'date' => $this->faker->date(), // Generates a random date
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
