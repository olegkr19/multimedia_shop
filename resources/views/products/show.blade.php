<html>
@include('header')
<body>
  <div class="main_container">
    <div class="main">
      @if($message = Session::get('success'))
      <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{$message}}</strong>
      </div>
      @endif
    <a href="{{ url()->previous() }}"><button type="button" class="btn btn-secondary" style="margin-left:10px;">@lang('products.return')</button></a><br>
    <span id="status"></span>
    <div class="show_products">
    <div class="row">
      @foreach($products as $product)
            <div class="col-md-4" style="border: 1px solid #dedede">
      <a href="products/{{$product->id}}"><img class="animate2" src="{{ $product->image_url }}" width="200px" height="150px"></a><br><br>
        <span>{{ $product->name }}</span><br>
        <strong style="color:red;">{{$product->price}} @lang('products.UAH')</strong><br>
          <p class="btn-holder"><a href="javascript:void(0);" data-id="{{ $product->id }}" class="btn btn-warning btn-block text-center add-to-cart" role="button">Add to cart</a></p>
            </div>
    @endforeach
    </div>
  </div>
    <br>
      <div class="pagination"> {{$products->links()}} </div>
      <a class="btn btn-primary" href="{{url('/')}}" role="button" style="margin-bottom:10px;margin-left:10px;">@lang('products.go_back')</a><br>
</div>
</div>
<script>
      $(".add-to-cart").click(function (e) {
          e.preventDefault();

          let ele = $(this);
          $.ajax({
              url: '{{ url('add-to-cart') }}' + '/' + ele.attr("data-id"),
              method: "get",
              data: {_token: '{{ csrf_token() }}'},
              dataType: "json"
          });
            alert('Added');
      });
</script>
</body>
@include('footer')
</html>
