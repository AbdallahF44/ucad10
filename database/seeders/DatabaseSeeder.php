<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use App\Models\Contact;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        for ($i = 1; $i < 20; $i++) {
            Article::create([
                'title' => fake()->text(50),
                'content' => fake()->text(300),
                'type' => [1, 2, 3][array_rand([1, 2, 3])]
            ]);
        }

        Contact::create([
            'facebook' => fake()->url(),
            'instagram' => fake()->url(),
            'linkedin' => fake()->url(),
            'twitter' => fake()->url(),
            'youtube' => fake()->url(),
            'email' => fake()->email(),
            'phone' => fake()->phoneNumber(),
        ]);
    }
}
