<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->words(4, true);
        return [
            'name'=> ucwords($name),
            'slug' => Str::slug($name),
            'description' => $this->faker->paragraph(),
            'sku' => strtoupper(Str::random(4)),
            'price' => $this->faker->randomFloat(2, 0.99, 100),
            'stock' => rand(0, 100),
            'path' => $this->faker->imageUrl()
        ];
    }
}
