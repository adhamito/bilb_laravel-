<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Emprunt;
use App\Models\Livre;

class EmpruntFactory extends Factory
{
    protected $model = Emprunt::class;

    public function definition()
    {
        return [
            'livre_id' => Livre::factory(), // Cela crée un livre pour chaque emprunt
            'date_d_emprunt' => $this->faker->date,
            'date_de_retour' => $this->faker->date
        ];
    }
}

