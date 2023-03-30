<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->words(3, true),
            'introduction' => fake()->paragraph(1),
            'course_description' => fake()->paragraph(30),
            'image_path' => '',
            'views' => fake()->numberBetween(),
            'creator_id' => fake()->numberBetween(1, 250),
            'category_id' => fake()->numberBetween(1, 9)
        ];
    }
}
