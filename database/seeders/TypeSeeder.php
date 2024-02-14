<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create(["title" => "Masterclass"]);
        Type::create(["title" => "Píldora"]);
        Type::create(["title" => "Coding live"]);
        Type::create(["title" => "Transversal"]);
    }
}
