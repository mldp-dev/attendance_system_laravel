<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Attendance;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserAttendance>
 */
class UserAttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'attendance_id' => Attendance::all()->random()->id,
        ];
    }
}
