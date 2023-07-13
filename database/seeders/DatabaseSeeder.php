<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // STATIC DATA SEEDERS
        $this->call(LeadStatusSeeder::class);
        $this->call(CategorySeeder::class);

        // DYNAMIC DATA SEEDERS
        \App\Models\User::factory(10)->create();
        \App\Models\Lead::factory(10)->create();



        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
