<?php

namespace Database\Seeders;
use App\Models\autor;

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
        autor::factory(20)->create();
    }
}
