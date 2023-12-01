<?php

namespace Database\Seeders;

use App\Models\Diabetes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiabetesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Diabetes::factory(100)->create();
    }
}
