<html>
@include('header')
  <div class="main_container">
    <div class="main">
      <a href="{{ url()->previous() }}"><button type="button" class="btn btn-secondary" style="margin-left:10px;">@lang('products.return')</button></a><br><br>
    <div class="row">
            <div class="col-md-5">
        <form method="post" action="{{ url('order') }}">
      <img src="{{ $product->image_url }}" width="500px" height="550px"><br><br>
        @lang('product.Name'): <b>{{ $product->name }}</b><br>
        @lang('product.Price'): <strong style="color:red;">{{$product->price}} @lang('products.UAH')</strong><br>
            <input name="id" title="id" type="hidden" value="{{$product->id}}">
            <p class="btn-holder"><a href="javascript:void(0);" data-id="{{ $product->id }}" class="btn btn-warning btn-block text-center add-to-cart" role="button">Add to cart</a></p>
        </form>
            </div>
    </div>
    <br>
<a class="btn btn-primary" href="{{url('/')}}" role="button">@lang('products.go_back')</a>
<br>
<br>
<br>
<br>
<br>
</div>
</div>
</body>
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
@include('footer')
</html>
