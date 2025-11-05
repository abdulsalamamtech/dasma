<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // The password should be change immediately after deployment
        // Developer admin
        if (!User::where('email', 'abdulsalamamtech@gmail.com')->exists()) {
            $user = User::create([
                'name' => 'Admin User',
                'email' => 'abdulsalamamtech@gmail.com',
                'password' => bcrypt('password'), // Use bcrypt for password hashing by default
                'email_verified_at' => now(),
                'role' => 'admin',
            ]);
            $user->assignRole('super-admin');
            $user->assignRole('admin');
            info("Seeded admin user: " . $user->email);
        }
        // Application admin
        if (!User::where('email', 'contact@dasmacollection.com')->exists()) {
            $user = User::create([
                'name' => 'Admin User',
                'email' => 'contact@dasmacollection.com',
                'password' => bcrypt('password'), // Use bcrypt for password hashing by default
                'email_verified_at' => now(),
                'role' => 'admin',
            ]);
            $user->assignRole('super-admin');
            $user->assignRole('admin');
            info("Seeded admin user: " . $user->email);
        }


        $user = User::where('email', 'abdulsalamamtech@gmail.com')->first();
        $user->assignRole('super-admin');
        $user->assignRole('admin');
        info("Seeded admin user: " . $user->email);
    }
}
