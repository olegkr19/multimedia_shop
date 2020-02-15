<?php

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
          DB::table('brands')->delete();

          $brands = [
        ['name' => 'Nikon'],
        ['name' => 'Samsung'],
        ['name' => 'Apple'],
        ['name' => 'Beats'],
        ['name' => 'Canon'],
        ['name' => 'Dell'],
        ['name' => 'Sony'],
        ['name' => 'Transcend'],
        ['name' => 'Xiaomi'],
        ['name' => 'Asus'],
        ['name' => 'Acer'],
        ['name' => 'HP'],
        ['name' => 'LENOVO'],
        ['name' => 'PRESTIGIO'],
        ['name' => 'DREAM MACHINES'],
        ['name' => 'MSI'],
    ];

          Brand::insert($brands);
    }
}
