<?php

namespace Database\Seeders;

use App\Models\BiohackingExpert;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BiohackingExpertsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $biohackingExperts = require base_path("database/seeders/data/biohacking_experts.php");

        foreach ($biohackingExperts as $expert) {
            BiohackingExpert::create($expert);
        }
    }
}