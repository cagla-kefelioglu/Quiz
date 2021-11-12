<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Quiz;

class QuizFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Quiz::class;

    public function definition()
    {
        return [
          'title'=>$this->faker->sentence(rand(6,7)),
          'description'=>$this->faker->text(200),
        ];
    }
}
