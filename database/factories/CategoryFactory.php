<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'image' => $this->faker->imageUrl(),
        ];
    }

    /**
     * Define a specific state for the category.
     *
     * @param string $name
     * @param string $image
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function customCategory($name, $image): Factory
    {
        return $this->state(function () use ($name, $image) {
            return [
                'name' => $name,
                'image' => $image,
            ];
        });
    }
}

