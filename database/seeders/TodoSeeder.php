<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //factory(Todo::class, 10)->create(); laravel < 8.x
         Todo::factory()->count(10)->create();
        

    }
}
