<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'adm@adm.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678')
        ]);

        User::factory(10)->create();    
    }
}
