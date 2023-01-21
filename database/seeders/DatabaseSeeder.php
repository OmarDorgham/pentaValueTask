<?php

namespace Database\Seeders;

use App\Models\Category;
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
        \App\Models\Category::factory(20)->create();
        $this->call(CategorySeeder::class);
//        $this->call([
//            Category::class,
//            ]);
        // \App\Models\User::factory(10)->create();
    }
}
