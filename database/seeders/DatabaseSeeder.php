<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use App\Models\ProductSku;
use Illuminate\Database\Seeder;
use Database\Seeders\SizeSeeder;
use Database\Seeders\ColorSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            ColorSeeder::class,
            SizeSeeder::class
        ]);

        \App\Models\Category::factory(10)
            ->has(
                Product::factory(3)
                ->has(
                    ProductSku::factory(5)
                )            
            )
         ->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
