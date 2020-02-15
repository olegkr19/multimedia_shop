<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\User;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index()
  {
    $products = Product::paginate(15);
    return view('admin',['products' => $products]);
  }

  public function createProductForm(){
    return view('create');
  }
  public function create(Request $request){
    $product = new Product();
    $product->name = $request->input('name');
    $product->price = $request->input('price');
    $product->discount = 0;
    $image = $request->image->storeAs('images', $request->image->getClientOriginalName());
    $product->image_url = Storage::url($image);
    $product->brand_id = $request->input('brands');
    $product->categories_id = $request->input('categories');
    $product->save();
    return back()->with('success','Product has been inserted successfully');
  }
  public function show(){

  }
  public function edit($id){
      $product = Product::find($id);
      return view('edit-product',['product' => $product]);
  }
  public function update(Request $request){
    $id = $request->input('id');
    $image = $request->image->storeAs('images', $request->image->getClientOriginalName());
      Product::where('id',$id)->update([
        'name' => $request->input('name'),
        'price' => $request->input('price'),
        'image_url' => Storage::url($image),
      ]);
      return back()->with('success','Product has been edited successfully');
  }
  public function destroy(Request $request)
    {
       Product::find($request->id)->delete();
       return back()->with('success','Product has been deleted successfully');
    }
}
