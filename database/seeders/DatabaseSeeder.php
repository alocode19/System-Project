<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create([
            'username' => function() {
                return Str::random(10);
            },
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'username' => 'Test username',
        //     'email' => 'test@example.com',
        // ]);
    }
}
