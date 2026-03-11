<?php

namespace Database\Seeders;

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

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'admin'=>1
        ]);

        User::factory()->create([
            'name' => 'User',
            'email' => 'user@example.com',
            'admin'=>0
        ]);

        $this->call([
            TodoListSeeder::class
        ]);
    }
}
