<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Auteur;

class AuteurFactory extends Factory
{
    protected $model = Auteur::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'prénom' => $this->faker->firstName
        ];
    }
}
