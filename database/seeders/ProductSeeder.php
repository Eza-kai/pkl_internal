<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        DB::table('products')->delete();

        $category1 = Category::create([
            'name' => 'Elektronik',
            'slug' => 'elektronik',
        ]);

        $category2 = Category::create([
            'name' => 'Perabotan Rumah',
            'slug' => 'perabotan rumah',
        ]);

        Product::create([
            'name' => 'Samsung S22 5G',
            'slug' => 'samsung s22 5g',
            'category_id' => 1,
            'description' => 'Lorem Ipsum',
            'image' => 'image.png',
            'price' => 9000000,
            'stock' => 100,
        ]);

        Product::create([
            'name' => 'Sapi Lidi',
            'slug' => 'sapu lidi',
            'category_id' => 2,
            'description' => 'Lorem Ipsum',
            'image' => 'image.png',
            'price' => 10000,
            'stock' => 1000,
        ]);

        
    }
}
