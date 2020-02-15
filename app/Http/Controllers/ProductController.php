<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categories;
use App\Models\Brand;

class ProductController extends Controller
{
  public function index(){
    $products = Product::paginate(20);
    if(Categories::where('name','laptops')){
      $category = Categories::first();
    }elseif(Categories::where('name','cameras')){
      $category = Categories::all()->get(1);
    }elseif(Categories::where('name','flash-drivers')){
      $category = Categories::all()->get(2);
    }elseif(Categories::where('name','headphones')){
      $category = Categories::all()->get(3);
    }elseif(Categories::where('name','smartphones')){
      $category = Categories::all()->get(4);
    }elseif(Categories::where('name','tv')){
      $category = Categories::all()->get(5);
    }
    $brands = Brand::all();
    return view('products.index',['products' => $products,'category' => $category,'brands' => $brands]);
  }
  public function laptops(){
    $products = Product::where('categories_id',1)->paginate(20);
    $category = Categories::first();
    $brands = $category->brands()->get()->unique();
    return view('products',['products' => $products,'category' => $category,'brands' => $brands]);
  }
  public function cameras(){
    $products = Product::where('categories_id',2)->paginate(20);
    $category = Categories::all()->get(1);
    $brands = $category->brands()->get()->unique();
    return view('products',['products' => $products, 'category' => $category,'brands' => $brands]);
  }
  public function flash_drivers(){
    $products = Product::where('categories_id',3)->paginate(12);
    $category = Categories::all()->get(2);
    $brands = $category->brands()->get()->unique();
    return view('products',['products' => $products, 'category' => $category,'brands' => $brands]);
  }
  public function headphones(){
    $products = Product::where('categories_id',4)->paginate(20);
    $category = Categories::all()->get(3);
    $brands = $category->brands()->get()->unique();
    return view('products',['products' => $products, 'category' => $category,'brands' => $brands]);
  }
  public function smartphones(){
    $products = Product::where('categories_id',5)->paginate(25);
    $category = Categories::all()->get(4);
    $brands = $category->brands()->get()->unique();
    return view('products',['products' => $products, 'category' => $category,'brands' => $brands]);
  }
  public function tv_sets(){
    $products = Product::where('categories_id',6)->paginate(20);
    $category = Categories::all()->get(5);
    $brands = $category->brands()->get()->unique();
    return view('products',['products' => $products, 'category' => $category,'brands' => $brands]);
  }
  public function getProductId($id){
    $product = Product::find($id);
    if(!$product){
      abort(404);
    }
    return view('product',['product' => $product]);
  }
  public function search(Request $request){
    $query = $request->input('query');
    $products = Product::where('name','like','%'.$query.'%')->get();
    $brands = Brand::all();
    $category = Categories::first();
    return view('products.search',['products' => $products, 'category' => $category,'brands' => $brands]);
  }
  public function cart(){
    return view('cart');
  }
  public function addToCart($id){
    $product = Product::find($id);
      if(!$product) {
          abort(404);
      }
      $cart = session()->get('cart');
      // if cart is empty then this is the first product
      if(!$cart) {
          $cart = [
                  $id => [
                      "name" => $product->name,
                      "quantity" => 1,
                      "price" => $product->price,
                      "image" => $product->image_url
                  ]
          ];
          session()->put('cart', $cart);
          return back()->with('success', 'Product added to cart successfully!');
      }
      // if cart not empty then check if this product exist then increment quantity
      if(isset($cart[$id])) {
          $cart[$id]['quantity']++;
          session()->put('cart', $cart);
          return back()->with('success', 'Product added to cart successfully!');
      }
      // if item not exist in cart then add to cart with quantity = 1
      $cart[$id] = [
          "name" => $product->name,
          "quantity" => 1,
          "price" => $product->price,
          "image" => $product->image_url
      ];
      session()->put('cart', $cart);
      return back()->with('success', 'Product added to cart successfully!');
  }
  public function update(Request $request)
  {
      if($request->id and $request->quantity)
      {
          $cart = session()->get('cart');
          $cart[$request->id]["quantity"] = $request->quantity;
          session()->put('cart', $cart);
          session()->flash('success', 'Cart updated successfully');
      }
  }

  public function remove(Request $request)
  {
      if($request->id) {
          $cart = session()->get('cart');
          if(isset($cart[$request->id])) {
              unset($cart[$request->id]);
              session()->put('cart', $cart);
          }
          session()->flash('success', 'Product removed successfully');
      }
  }
}
