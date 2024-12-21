<?php

namespace Database\Seeders;

use App\Models\profile;
use App\Models\book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories ;
class books extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        book::factory(5)->create();
    }
}
// 'nom' => 'Horiya',
// 'prenom' => 'belm',
// 'password' => 'Horyahoriya',
// 'text' => 'i will like in fautre in chaa ahle',
    
