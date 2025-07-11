<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'teste@teste.com',
            'password' => Hash::make('12345678'),
            'email_verified_at' => now(),
        ]);
        

        $this->call([
            NotaSeeder::class,
            UserSeeder::class,
            CategoriaSeeder::class,
            PostSeeder::class,
            CommentSeeder::class
        ]);
    }
}
