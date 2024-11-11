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
            [
                'product_name' => 'Pillow',
                'product_category_id' => 1,
                'product_color' => 'White',
                'product_material' => 'Linen',
                'product_description' => 'Pillow is for sleeping for supporting your lovely chilling time',
                'product_size_chart' => '30x30',
                'product_image' => 'products/departments-4.jpg',
            ],
            [
                'product_name' => 'Bed Cover',
                'product_category_id' => 2,
                'product_color' => 'White',
                'product_material' => 'Linen',
                'product_description' => 'Pillow is for sleeping for supporting your lovely chilling time',
                'product_size_chart' => '30x30',
                'product_image' => 'products/departments-5.jpg',
            ],
            [
                'product_name' => 'Blanket',
                'product_category_id' => 3,
                'product_color' => 'White',
                'product_material' => 'Linen',
                'product_description' => 'Pillow is for sleeping for supporting your lovely chilling time',
                'product_size_chart' => '30x30',
                'product_image' => 'products/departments-4.jpg',
            ],
            [
                'product_name' => 'Blanket',
                'product_category_id' => 4,
                'product_color' => 'White',
                'product_material' => 'Linen',
                'product_description' => 'Pillow is for sleeping for supporting your lovely chilling time',
                'product_size_chart' => '30x30',
                'product_image' => 'products/departments-5.jpg',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
