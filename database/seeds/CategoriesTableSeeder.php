<?php

use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        $categories = [
      ['name' => 'laptops'],
      ['name' => 'cameras'],
      ['name' => 'flash-drivers'],
      ['name' => 'headphones'],
      ['name' => 'smartphones'],
      ['name' => 'tv'],
  ];

        Categories::insert($categories);
    }
}
