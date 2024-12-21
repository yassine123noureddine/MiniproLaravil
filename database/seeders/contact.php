<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class contact extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("contacts")->insert([
            "nom"=>"noureddine",
            "email"=>"noureddine@gmail.com",
            "password"=>"jh26k83$444",
            "bio"=>"hello  my name is noureddine",
            
        ]);
    }
}
