<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Categories;
use App\Models\Product;

class CategoryController extends Controller
{
    public function laptops_asus(){
      $products = Product::where('brand_id',10)->where('categories_id',1)->paginate(20);
      $category = Categories::first();
      $brands =  $category->brands()->get()->unique();
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function laptops_hp(){
      $products = Product::where('brand_id',12)->where('categories_id',1)->paginate(20);
      $category = Categories::first();
      $brands =  $category->brands()->get()->unique();
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function laptops_dell(){
      $products = Product::where('brand_id',6)->where('categories_id',1)->paginate(20);
      $category = Categories::first();
      $brands =  $category->brands()->get()->unique();
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function laptops_acer(){
      $products = Product::where('brand_id',11)->where('categories_id',1)->paginate(20);
      $category = Categories::first();
      $brands =  $category->brands()->get()->unique();
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function laptops_lenovo(){
      $products = Product::where('brand_id',13)->where('categories_id',1)->paginate(20);
      $category = Categories::first();
      $brands =  $category->brands()->get()->unique();
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function laptops_dream_machines(){
      $products = Product::where('brand_id',15)->where('categories_id',1)->paginate(20);
      $category = Categories::first();
      $brands =  $category->brands()->get()->unique();
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function laptops_apple(){
      $products = Product::where('brand_id',3)->where('categories_id',1)->paginate(20);
      $category = Categories::first();
      $brands =  $category->brands()->get()->unique();
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function laptops_prestigio(){
      $products = Product::where('brand_id',14)->where('categories_id',1)->paginate(20);
      $category = Categories::first();
      $brands =  $category->brands()->get()->unique();
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function laptops_msi(){
      $products = Product::where('brand_id',16)->where('categories_id',1)->paginate(20);
      $category = Categories::first();
      $brands =  $category->brands()->get()->unique();
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function cameras_nikon(){
      $products = Product::where('brand_id',1)->where('categories_id',2)->paginate(20);
      $category = Categories::all()->get(1);
      $brands =  $category->brands()->get()->unique();
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function cameras_canon(){
      $products = Product::where('brand_id',5)->where('categories_id',2)->paginate(20);
      $category = Categories::all()->get(1);
      $brands =  $category->brands()->get()->unique();
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function cameras_sony(){
      $products = Product::where('brand_id',7)->where('categories_id',2)->paginate(20);
      $category = Categories::all()->get(1);
      $brands =  $category->brands()->get()->unique();
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function flashdrivers_transcend(){
      $products = Product::where('brand_id',8)->where('categories_id',3)->paginate(20);
      $category = Categories::all()->get(2);
      $brands = $category->brands()->get()->unique();
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function headphones_beats(){
      $products = Product::where('brand_id',4)->where('categories_id',4)->paginate(20);
      $category = Categories::all()->get(3);
      $brands =  $category->brands()->get()->unique();
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function headphones_apple(){
      $products = Product::where('brand_id',3)->where('categories_id',4)->paginate(20);
      $category = Categories::all()->get(3);
      $brands =  $category->brands()->get()->unique();
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function headphones_sony(){
      $products = Product::where('brand_id',7)->where('categories_id',4)->paginate(20);
      $category = Categories::all()->get(3);
      $brands =  $category->brands()->get()->unique();
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function smartphones_apple(){
      $products = Product::where('brand_id',3)->where('categories_id',5)->paginate(20);
      $category = Categories::all()->get(4);
      $brands =  $category->brands()->get()->unique();
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function smartphones_xiaomi(){
      $products = Product::where('brand_id',9)->where('categories_id',5)->paginate(20);
      $category = Categories::all()->get(4);
      $brands =  $category->brands()->get()->unique();
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function smartphones_samsung(){
      $products = Product::where('brand_id',2)->where('categories_id',5)->paginate(20);
      $category = Categories::all()->get(4);
      $brands =  $category->brands()->get()->unique();
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function tv_samsung(){
      $products = Product::where('brand_id',2)->where('categories_id',6)->paginate(20);
      $category = Categories::all()->get(5);
      $brands =  $category->brands()->get()->unique();
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function tv_sony(){
      $products = Product::where('brand_id',7)->where('categories_id',6)->paginate(20);
      $category = Categories::all()->get(5);
      $brands =  $category->brands()->get()->unique();
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
}
