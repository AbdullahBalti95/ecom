<?php

namespace Database\Factories;

use App\Models\Size;
use App\Models\Color;
use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductSku>
 */
class ProductSkuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'sku' => strtoupper(Str::random(8)),
            // 'stock' => rand(0, 100),
            // 'price' => $this->faker->randomFloat(2, 0.99, 100),
            'size_id' => Size::inRandomOrder()->first()->id,            
            'color_id' => Color::inRandomOrder()->first()->id,            
            'product_image_id' => ProductImage::factory(1)->create()[0]->id            
        ];
    }
}
