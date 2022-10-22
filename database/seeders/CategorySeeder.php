<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Database\Factories\ProductCategoryFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  ProductCategory::factory(10)->create();

        DB::table('product_categories')->insert([
            'category' => 'Laboratorium Kimia'
          
        ]);
        DB::table('product_categories')->insert([
            'category' => 'Laboratorium Fisika'
          
        ]);
        DB::table('product_categories')->insert([
            'category' => 'Laboratorium Biologi'
          
        ]);
    }
}
