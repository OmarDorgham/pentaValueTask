<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 20; $i++) {
            Category::create([
                'name' => 'Sub Category ' . Str::random(5),
                'parent_id' => rand(1, 20)
            ]);
        }
        for ($i = 0; $i <= 20; $i++) {
            Category::create([
                'name' => 'Sub Category ' . Str::random(5),
                'parent_id' => rand(1, 40)
            ]);
        }
        for ($i = 0; $i <= 100; $i++) {
            Category::create([
                'name' => 'Sub Category ' . Str::random(5),
                'parent_id' => rand(1, 60)
            ]);
        }
    }
}
