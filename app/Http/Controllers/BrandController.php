<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categories;
use App\Models\Brand;

class BrandController extends Controller
{
  public function nikon(){
    $brands = Brand::all();
    $products = Product::where('brand_id',1)->paginate(20);
    //category - cameras
    $category = Categories::all()->get(1);
    return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
  }
  public function samsung(){
    $brands = Brand::all();
    $products = Product::where('brand_id',2)->paginate(20);
    //categories - smartphones and tv-sets
    $category = Categories::all()->get(4);
    return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
  }
  public function apple(){
    $brands = Brand::all();
    $products = Product::where('brand_id',3)->paginate(20);
    //categories - laptops headphones
    $category = Categories::all()->get(4);
    return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
  }
    public function beats(){
      $brands = Brand::all();
      $products = Product::where('brand_id',4)->paginate(20);
      //categories - headphones
      $category = Categories::all()->get(4);
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function canon(){
      $brands = Brand::all();
      $products = Product::where('brand_id',5)->paginate(20);
      //categories are cameras
      $category = Categories::all()->get(4);
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function dell(){
      $brands = Brand::all();
      $products = Product::where('brand_id',6)->paginate(20);
      //categories are laptops
      $category = Categories::all()->get(4);
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function sony(){
      $brands = Brand::all();
      $products = Product::where('brand_id',7)->paginate(20);
      //categories are cameras headphones tv-sets
      $category = Categories::all()->get(4);
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function transcend(){
      $brands = Brand::all();
      $products = Product::where('brand_id',8)->paginate(20);
      //categories are flash-drivers
      $category = Categories::all()->get(4);
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function xiaomi(){
      $brands = Brand::all();
      $products = Product::where('brand_id',9)->paginate(20);
      //categories are smartphones
      $category = Categories::all()->get(4);
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function asus(){
      $brands = Brand::all();
      $products = Product::where('brand_id',10)->paginate(20);
      //categories are laptops
      $category = Categories::all()->get(4);
      //if(url('products/$brands')){}
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function acer(){
      $brands = Brand::all();
      $products = Product::where('brand_id',11)->paginate(20);
      //categories are laptops
      $category = Categories::all()->get(4);
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function hp(){
      $brands = Brand::all();
      $products = Product::where('brand_id',12)->paginate(20);
      //categories are laptops
      $category = Categories::all()->get(4);
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function lenovo(){
      $brands = Brand::all();
      $products = Product::where('brand_id',13)->paginate(20);
      //categories are laptops
      $category = Categories::all()->get(4);
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function prestigio(){
      $brands = Brand::all();
      $products = Product::where('brand_id',14)->paginate(20);
      //categories are laptops
      $category = Categories::all()->get(4);
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function dream_machines(){
      $brands = Brand::all();
      $products = Product::where('brand_id',15)->paginate(20);
      //categories are laptops
      $category = Categories::all()->get(4);
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }
    public function msi(){
      $brands = Brand::all();
      $products = Product::where('brand_id',16)->paginate(20);
      //categories are laptops
      $category = Categories::all()->get(4);
      return view('products.show',['products' => $products,'category' => $category,'brands' => $brands]);
    }

}
