<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PredmetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->randomElement(['P1', 'P2','ITEH','OIKT', 'M1','M2','M3','SPA','AROS','DMS','LINS','ENG1','ENG2','BAZE','PIS']),
            'sajt_predmeta' => $this->faker->unique()->url(),
            'email' => $this->faker->unique()->email(),
            'espb' => $this->faker->randomDigitNot(5)  
        ];

    }
}
