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

        if(!User::where('email', 'abdulsalamamtech@gmail.com')->exists()) {
            $user = User::create([
                'name' => 'Admin User',
                'email' => 'abdulsalamamtech@gmail.com',
                'password' => bcrypt('password'), // Use bcrypt for password hashing
                'email_verified_at' => now(),
            ]);
            $user->assignRole('super-admin');
        }
    }
}
