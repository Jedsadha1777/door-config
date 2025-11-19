<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class A1_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Product::create([
            'code' => 'GIESTA-P01',
            'name' => 'GIESTA Door Model P01',
            'thumbnail' => '/images/products/giesta-p01.jpg'
        ]);
    }

}
