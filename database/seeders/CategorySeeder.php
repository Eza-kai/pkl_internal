<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        Category::create([
            'name' => 'Elektronik',
            'slug' => 'elektronik',
        ]);

        Category::create([
            'name' => 'Perabotan Rumah',
            'slug' => 'perabotan rumah',
        ]);
    }
}
