<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    public function definition()
    {
        return [
            'firstName' => $this->faker->firstName(7),
            'lastName' => $this->faker->lastName(15),
            'healthCardNumber' => rand(10, 100000) . "",
        ];
    }
}
