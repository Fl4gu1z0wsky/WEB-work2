<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Animal;

class AnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Animal::create([
            'name' => 'Simba',
            'species' => 'Lion',
            'sexe' => 'Male',
            'age' => 3,
            'country' => 'Congo',
            'comment' => 'Le roi de la jungle.'
        ]);

        Animal::create([
            'name' => 'Baloo',
            'species' => 'Ours',
            'sexe' => 'Male',
            'age' => 8,
            'country' => 'Canada',
            'comment' => 'Attention, il est grincheux !'
        ]);

        Animal::create([
            'name' => 'Sherkhan',
            'species' => 'Tigre',
            'sexe' => 'Femelle',
            'age' => 5,
            'country' => 'Inde',
            'comment' => 'Elle aime les papouilles, mais gare à ses crocs.'
        ]);

        Animal::create([
            'name' => 'Akela',
            'species' => 'Loup',
            'sexe' => 'Male',
            'age' => 4,
            'country' => 'Italie',
            'comment' => 'Il est très sage pour son âge.'
        ]);
    }
}
