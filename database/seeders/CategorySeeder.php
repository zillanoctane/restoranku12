<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
  
    public function run(): void
    {
        $categories = [
            ['cat_name' => 'Makanan', 'description' => 'Berbagai macam makanan'],
            ['cat_name' => 'Minuman', 'description' => 'Berbagai macam minuman'],

        ];

        DB::table('categories')->insert($categories);
    }
}
