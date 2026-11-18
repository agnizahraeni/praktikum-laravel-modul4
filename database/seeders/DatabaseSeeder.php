<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Isi data kategori sesuai kolom category_name & description
        DB::table('category_product')->insertOrIgnore([
            ['id_category' => 1, 'category_name' => 'Makanan', 'description' => 'Kategori produk makanan'],
            ['id_category' => 2, 'category_name' => 'Minuman', 'description' => 'Kategori produk minuman'],
            ['id_category' => 3, 'category_name' => 'Snack', 'description' => 'Kategori produk camilan'],
        ]);

        // 2. Generate 21 data produk dummy
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 21; $i++) {
            DB::table('products')->insert([
                'name_product' => $faker->words(2, true),
                'stock_product' => $faker->numberBetween(5, 50),
                'price_product' => $faker->numberBetween(10000, 100000),
                'desc_product' => $faker->sentence(4),
                'id_category' => rand(1, 3),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}