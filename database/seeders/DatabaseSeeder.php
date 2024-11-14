<?php

namespace Database\Seeders;

use App\Models\Supplement;
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
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Supplement::create([
            "name" => "Ashwagandha",
            "description" => "Herb that promotes relaxation, helps with mental clarity, reduces stress and cortisol levels.",
            "purchase_url" => "https://iherb.com/pr/youtheory-ashwagandha-60-vegetarian-capsules/90165"
        ]);

        Supplement::create([
            "name" => 'Omega 3',
            "description" => 'Supports heart health, improves brain function, reduces inflammation, supports mood, skin, and joint health',
            "purchase_url" => "https://iherb.com/pr/sports-research-omega-3-fish-oil-triple-strength-120-softgels/109322"
        ]);

        Supplement::create([
            "name" => 'Creatine Monohydrate',
            "description" => 'Boosts muscle strength, enhances exercise performance, supports energy production, aids recovery, and improves muscle growth',
            "purchase_url" => "https://iherb.com/pr/california-gold-nutrition-sport-creatine-monohydrate-unflavored-1-lb-454-g/71026"
        ]);
    }
}