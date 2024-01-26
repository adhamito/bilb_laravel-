<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Livre;
use App\Models\Auteur;

class LivreFactory extends Factory
{
    protected $model = Livre::class;

    public function definition()
    {
        return [
            'titre' => $this->faker->sentence,
            'année_de_publication' => $this->faker->year,
            'nombre_de_pages' => $this->faker->numberBetween(100, 500),
            'auteur_id' => Auteur::factory()
        ];
    }
}
