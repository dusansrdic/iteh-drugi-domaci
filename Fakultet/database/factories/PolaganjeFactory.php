<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;
use App\Models\Predmet;

class PolaganjeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'datum' => $this->faker->date($format = 'Y-m-d', $max = 'now') ,
            'bodovi' => $this->faker->numberBetween($min = 0, $max = 100),
            'ocena' => $this->faker->numberBetween($min = 5, $max = 10),
            'napomena' => $this->faker->text($maxNbChars = 30) ,
            'student_id' => Student::factory(),
            'predmet_id' => Predmet::factory()

        ];
    }
}
