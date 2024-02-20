<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ExtraResource;

class ExtraResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ExtraResource::create(["extra_res_title" => "Resource 1", "link" => "Link 1"]);
        ExtraResource::create(["extra_res_title" => "Resource 2", "link" => "Link 2"]);
        ExtraResource::create(["extra_res_title" => "Resource 3", "link" => "Link 3"]);
    }
}
