<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(["category_title" => "Front-end"]);
        Category::create(["category_title" => "Back-end"]);
        Category::create(["category_title" => "Project management"]);
        Category::create(["category_title" => "Functional & technical analysis"]);
        Category::create(["category_title" => "Architecture"]);
        Category::create(["category_title" => "QA"]);
    }
}
