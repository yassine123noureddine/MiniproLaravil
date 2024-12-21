<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB ;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\profile ;

class profilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        profile::factory(10)->create();
            
      
    }
}
