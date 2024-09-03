<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Hash;
use App\Models\User;
use App\Models\Admin;

class CustomerSeeder extends Seeder {

    /**
     * Run the database seeds.
     */
    public function run(): void {
        
        // Create User for Customer
        $user = User::create([
            'first_name' => 'Ruby',
            'last_name' => 'Customer',
            'username' => 'rubycustomer',
            'email' => 'ruby.customer@example.com',
            'password' => Hash::make('ruby.customer'),
            'role' => 'admin',
        ]);

        // Create Customer
        Admin::create([
            'user_id' => $user->id,
            'nick' => 'ruby.c',
        ]);

    }
}
