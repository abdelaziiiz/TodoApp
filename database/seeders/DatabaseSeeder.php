<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(TodoSeeder::class);

        $this->command->info('Todo table seeded!');
        // \App\Models\User::factory(10)->create();
    }
}
