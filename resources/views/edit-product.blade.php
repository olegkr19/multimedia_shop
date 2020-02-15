@extends('layouts.app')

@section('content')
<h2 style="margin-top: 12px;font-style: oblique;" class="text-center">Edit Product</a></h2>
<br>
<a href="{{ url('/admin') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Come Back</a><br><br>
  @if($message = Session::get('success'))
  <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>{{$message}}</strong>
  </div>
  @endif
<form action="{{url('update-product')}}" method="POST" name="edit_product" enctype="multipart/form-data">
  {{ method_field('PUT') }}
    {{ csrf_field() }}
<div class="row">
  <input type="hidden" name="id" class="form-control" value="{{$product->id}}">
    <div class="col-md-7">
        <div class="form-group">
            <strong>Name</strong>
            <input type="text" name="name" class="form-control" value="{{$product->name}}" required>
        </div>
    </div>
    <div class="col-md-7">
        <div class="form-group">
            <strong>Price (like 12.000)</strong>
            <input type="number" name="price" class="form-control" value="{{$product->price}}" min="0" step="0.001" data-number-to-fixed="3" placeholder="Enter price" required>
        </div>
    </div>
    <div class="col-md-7">
        <div class="form-group">
            <strong>Image</strong><br>
            <img src="{{$product->image_url}}" /><br>
            <span class="another_image">Select another image:</span><br>
            <input type="file" name="image" class="form-control" accept=".jpg, .jpeg, .png" required>
        </div>
    </div>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
