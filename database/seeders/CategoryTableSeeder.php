<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryRecords = [
            [
                'id' => 1,
                'parent_id' => 0,
                'section_id' => 1,
                'category_name' => 'Men',
                'cat_banner' => '',
                'category_discount' => 0,
                'description' => '',
                'status' => 1,
                'url' => 'men',
                'meta_title' => '',
                'meta_description' => '',
                'meta_keywords' => '',

            ],
            [
                'id' => 2,
                'parent_id' => 0,
                'section_id' => 1,
                'category_name' => 'Women',
                'cat_banner' => '',
                'category_discount' => 0,
                'description' => '',
                'status' => 1,
                'url' => 'women',
                'meta_title' => '',
                'meta_description' => '',
                'meta_keywords' => '',

            ],
            [
                'id' => 3,
                'parent_id' => 0,
                'section_id' => 1,
                'category_name' => 'Kids',
                'cat_banner' => '',
                'category_discount' => 0,
                'description' => '',
                'status' => 1,
                'url' => 'kids',
                'meta_title' => '',
                'meta_description' => '',
                'meta_keywords' => '',

            ]
        ];
        Category::insert($categoryRecords);
    }
}
