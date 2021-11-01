<?php

namespace Database\Factories;

use App\Models\Quiz;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuizFactory extends Factory
{
    protected $mode = Quiz::class;
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3, 7),
            'description' => $this->faker->text(200)
        ];
    }
}
