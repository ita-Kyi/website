<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DateMakerUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'firstname' => 'John',
                'lastname' => 'Doe',
                'email' => 'john@example.com',
                'password' => Hash::make('password123'), // Replace with actual password
                'bio' => 'Just a music lover',
                'pfp' => 'https://example.com/pfp.jpg',
                'pronounce' => 'he/him',
                'relationship_status' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'firstname' => 'Jane',
                'lastname' => 'Smith',
                'email' => 'jane@example.com',
                'password' => Hash::make('password123'), // Replace with actual password
                'bio' => 'Hello world!',
                'pfp' => null,
                'pronounce' => 'she/her',
                'relationship_status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
