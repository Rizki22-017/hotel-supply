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
            [
               'category_name' => 'Kategori 1',
               'category_description' => '1st Cateogry is a good product with a good quality',
               'category_image' => 'assets/img/about.jpg'
            ],
            [
                'category_name' => 'Kategori 2',
                'category_description' => '2nd Cateogry is a good product with a good quality',
                'category_image' => 'assets/img/departments-1.jpg'
            ],
            [
                'category_name' => 'Kategori 3',
                'category_description' => '3rd Cateogry is a good product with a good quality',
                'category_image' => 'assets/img/departments-2.jpg'
            ],
            [
                'category_name' => 'Kategori 4',
                'category_description' => '4th Cateogry is a good product with a good quality',
                'category_image' => 'assets/img/about.jpg'
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
