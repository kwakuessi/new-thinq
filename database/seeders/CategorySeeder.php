<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            ['name' => 'Computer electronics', 'description' => ''],
            ['name' => 'Fashion/Accessories', 'description' => ''],
            ['name' => 'Household appliance', 'description' => ''],
            ['name' => 'Automotive/accessories', 'description' => ''],
            ['name' => 'Construction machinery', 'description' => ''],
            ['name' => 'Energy/Utilities', 'description' => ''],
        ]);
    }
}
