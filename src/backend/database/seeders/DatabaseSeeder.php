<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{

    /**
     * Seed the application's database.
     */
    public function run(): void {

        $this->seed_users();

    }

    
    /**
     * Create users for development
     *
     * @return void
     */
    public function seed_users() : void {
        $this->call([
            AdminSeeder::class,
            CustomerSeeder::class,
        ]);
    }

}
