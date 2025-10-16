<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RoboticsKit;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'course_key' => $this->faker->unique()->bothify('ROB####'), // 4 digits = 10,000 combos
            'title' => $this->faker->sentence(3),
            'cover' => $this->faker->imageUrl(640, 480, 'education', true),
            'content' => $this->faker->paragraph(5),
            'robotics_kit_id' => \App\Models\RoboticsKit::inRandomOrder()->first()->id ?? 1,
        ];
    }
}