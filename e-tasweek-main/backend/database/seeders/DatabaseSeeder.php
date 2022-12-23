<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Offer;
use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AboutUsSeeder::class,
            ContactUsSeeder::class,
            SystemRoleSeeder::class,
            SystemUserSeeder::class,
            ServiceSeeder::class,
            ProjectSeeder::class,
            MediaSeeder::class,
            OfferSeeder::class
        ]);
    }
}