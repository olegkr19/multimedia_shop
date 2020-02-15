@extends('layouts.app')

@section('content')
<h2 style="margin-top: 12px;font-style: oblique;" class="text-center">Add Product</a></h2>
<br>
<a href="{{ url('/admin') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Come Back</a><br><br>
  @if($message = Session::get('success'))
  <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>{{$message}}</strong>
  </div>
  @endif
<form action="{{url('admin/create')}}" method="POST" name="add_product" enctype="multipart/form-data">
{{ csrf_field() }}

<div class="row">
    <div class="col-md-7">
        <div class="form-group">
            <strong>Name</strong>
            <input type="text" name="name" class="form-control" placeholder="Enter name" required>
        </div>
    </div>
    <div class="col-md-7">
        <div class="form-group">
            <strong>Price (like 12.000)</strong>
            <input type="number" name="price" class="form-control" value="0" min="0" step="0.001" data-number-to-fixed="3" placeholder="Enter price" required>
        </div>
    </div>
    <div class="col-md-7">
        <div class="form-group">
            <strong>Image</strong>
            <input type="file" name="image" class="form-control" accept=".jpg, .jpeg, .png" required>
        </div>
    </div>
    <div class="col-md-10">
        <div class="form-group">
            <strong>Brand</strong><br>
            <select name="brands">
    <option value="1">Nikon</option>
    <option value="2">Samsung</option>
    <option value="3">Apple</option>
    <option value="4">Beats</option>
    <option value="5">Canon</option>
    <option value="6">Dell</option>
    <option value="7">Sony</option>
    <option value="8">Transcend</option>
    <option value="9">Xiaomi</option>
    <option value="10">Asus</option>
    <option value="11">Acer</option>
    <option value="12">HP</option>
    <option value="13">Lenovo</option>
    <option value="14">Prestigio</option>
    <option value="15">Dream Machines</option>
    <option value="16">MSI</option>
  </select>
        </div>
    </div>
    <div class="col-md-10">
        <div class="form-group">
            <strong>Category</strong><br>
            <select name="categories">
    <option value="1">Laptops</option>
    <option value="2">Cameras</option>
    <option value="3">Flash drivers</option>
    <option value="4">Headphones</option>
    <option value="5">Smartphones</option>
    <option value="6">TV</option>
  </select>
        </div>
    </div>
    <div class="col-md-10">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

</form>
@endsection
