<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'Laptop ASUS ROG',
            'description' => 'Laptop gaming dengan performa tinggi.',
            'price' => 25000000,
            'category_id' => 1,
            'is_publish' => true,
            'published_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
