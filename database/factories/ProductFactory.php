<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Use default data or random data for testing
        return [
            'category_id' => Category::factory(), 
            'name' => $this->faker->word(),
            'image' => $this->faker->imageUrl(),
            'price' => $this->faker->numberBetween(50, 5000)
        ];
    }

    /**
     * Define a specific state for the product.
     *
     * @param string $name
     * @param string $image
     * @param float $price
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function customProduct($name, $image, $price): Factory
    {
        return $this->state(function () use ($name, $image, $price) {
            return [
                'name' => $name,
                'image' => $image,
                'price' => $price,
            ];
        });
    }
}
