<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['category_id' => 1, 'name' => 'Café au lait', 'image' => 'img/cafe-au-lait.jpg', 'price' => 250],
            ['category_id' => 1, 'name' => 'Café noir', 'image' => 'img/cafenoir.jpg', 'price' => 100],
            ['category_id' => 1, 'name' => 'Chocolat chaud', 'image' => 'img/chocolatchaud.jpg', 'price' => 400],
            ['category_id' => 1, 'name' => 'Pain au chocolat', 'image' => 'img/pain-au-chocolat.jpg', 'price' => 200],
            ['category_id' => 2, 'name' => 'Thiebou djeun', 'image' => 'img/thieb2.jpg', 'price' => 800],
            ['category_id' => 2, 'name' => 'Yassa Poulet', 'image' => 'img/yassa2.jpg', 'price' => 1000],
            ['category_id' => 5, 'name' => 'Boissons gazeuses', 'image' => 'img/gaz.jpg', 'price' => 350],
            ['category_id' => 5, 'name' => 'Jus locaux', 'image' => 'img/nature.jpg', 'price' => 300],
            ['category_id' => 5, 'name' => 'Eau', 'image' => 'img/eau.jpg', 'price' => 250],
            ['category_id' => 3, 'name' => 'Hamburger', 'image' => 'img/burger.jpg', 'price' => 1500],
            ['category_id' => 3, 'name' => 'Chawarma', 'image' => 'img/chawarma.jpg', 'price' => 1000],
            ['category_id' => 4, 'name' => 'Cake', 'image' => 'img/cake.jpg', 'price' => 150],
            ['category_id' => 4, 'name' => 'Madelaines', 'image' => 'img/madelaines.jpg', 'price' => 175],
            ['category_id' => 4, 'name' => 'beignets', 'image' => 'img/beignets.jpg', 'price' => 50],
            ['category_id' => 4, 'name' => 'croissants ', 'image' => 'img/croissants.jpg', 'price' => 1000],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}

