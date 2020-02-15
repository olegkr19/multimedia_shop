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
      <aside class="sidebar">
          <div class="sidebar-block">
            <div class="searchline">
              <form method="post" action="">
                {{csrf_field()}}
              <input type="text" id="search" name="query" placeholder="@lang('products.search')">
              </form>
              </div>
            <div class="scrollbar_inner">
              <ul class="checkbox-filter">
                @foreach($brands as $brand)
                <li class="checkbox-item">
                  <a class="checkbox-link" href="products/{{str_replace(' ','-',strtolower($brand->name))}}">
                      {{$brand->name}}
                    @endforeach
                  </a>
                </li>
              </ul>
            </div>
          </div>
      </aside>


    <span id="status"></span>
    <div class="row">
      @if($products == '')
          <b style="font-size:40px;margin-left:20px;">@lang(products.no_found)</b><br>
      @else
      @foreach($products as $product)
            <div class="col-md-4" style="border: 1px solid #dedede">
      <a href="products/{{$category->name}}/{{$product->id}}"><img class="animate2" src="{{ $product->image_url }}" width="200px" height="150px"></a><br><br>
        <span>{{ $product->name }}</span><br>
        <strong style="color:red;">{{$product->price}} @lang('products.UAH')</strong><br>
          <p class="btn-holder"><a href="javascript:void(0);" data-id="{{ $product->id }}" class="btn btn-warning btn-block text-center add-to-cart" role="button">@lang('products.add')</a></p>
            </div>
    @endforeach
    @endif
    </div>
    <br>
<a class="btn btn-primary" href=" {{url('/')}} " role="button" style="margin-bottom:10px;margin-left:260px;">@lang('products.go_back')</a>
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
