<?php

namespace Database\Seeders;

use App\Models\ShippingMethod;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Test',
            'email' => 'test@gmail.com',
            'password' => Hash::make('test'),
        ]);


        ShippingMethod::insert([
            ['name' => 'Air Freight', 'description' => ''],
            ['name' => 'Sea Freight', 'description' => ''],
            ['name' => 'Road Freight', 'description' => ''],
            ['name' => 'Rail Freight', 'description' => ''],
            ['name' => 'Container', 'description' => ''],
        ]);

    }
}
