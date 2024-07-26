<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Petit Déjeuner', 'image' => 'img/breakfast1.jpg'],
            ['name' => 'Plats du Jour', 'image' => 'img/plats.jpg'],
            ['name' => 'Fast Food', 'image' => 'img/fastfood.jpg'],
            ['name' => 'Viennoiseries', 'image' => 'img/viennoiseries2.jpg'],
            ['name' => 'Boissons', 'image' => 'img/boissons.jpg'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
