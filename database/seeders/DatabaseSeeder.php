<?php

namespace Database\Seeders;

use App\Models\Cor;
use App\Models\Produto;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Produto::factory(20)->create();
        //Cor::factory(100)->create();
    }
}
