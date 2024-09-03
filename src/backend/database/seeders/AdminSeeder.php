<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Hash;
use App\Models\User;
use App\Models\Admin;

class AdminSeeder extends Seeder {

    /**
     * Run the database seeds.
     */
    public function run(): void {

        // Create User for Admin
        $user = User::create([
            'first_name' => 'John',
            'last_name' => 'Admin',
            'username' => 'johnadmin',
            'email' => 'john.admin@example.com',
            'password' => Hash::make('john.admin'),
            'role' => 'admin',
        ]);

        // Create Admin
        Admin::create([
            'user_id' => $user->id,
            'nick' => 'john.a',
        ]);

    }
}
