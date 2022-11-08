<?php

namespace Database\Seeders;

use App\Models\products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        products::create([
            'product_name' => 'Kaca tabung',
            'description' => 'barang mewah',
            'price' => '11000',
            'stock' => '1',
            'specification' => 'Baik',
            'packaging' => 'Sterofom',
            'material' => 'Kaca',
            'image' => '1',
            'category_id' => '1',
        ]);
        products::create([
            'product_name' => 'Kaca tabung',
            'description' => 'barang mewah',
            'price' => '11000',
            'stock' => '1',
            'specification' => 'Baik',
            'packaging' => 'Sterofom',
            'material' => 'Kaca',
            'image' => '1',
            'category_id' => '1',

        ]);
        products::create([
            'product_name' => 'Kaca tabung',
            'description' => 'barang mewah',
            'price' => '11000',
            'stock' => '1',
            'specification' => 'Baik',
            'packaging' => 'Sterofom',
            'material' => 'Kaca',
            'image' => '1',
            'category_id' => '1',

        ]);
    }
}
