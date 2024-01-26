<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Auteur;
use App\Models\Livre;
use App\Models\Emprunt;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        Auteur::factory(10)->create();
        Livre::factory(50)->create();
        Emprunt::factory(100)->create();
    }
}
