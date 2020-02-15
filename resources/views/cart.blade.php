<html>
@include('header')
<body>
  <div class="main_container">
    <div class="main">
      @if($message = Session::get('success'))
      <div class="alert alert-success alert-block">
         <button class="close" id="close" data-dismiss="modal">&times;</button>
          <strong>{{$message}}</strong>
      </div>
      @endif
    <!-- products -->
    <span id="status"></span>
    <table id="cart" class="table table-hover table-condensed">
    <thead>
    <tr>
        <th style="width:50%">@lang('cart.product')</th>
        <th style="width:10%">@lang('cart.price')</th>
        <th style="width:8%">@lang('cart.quantity')</th>
        <th style="width:22%" class="text-center">@lang('cart.subtotal')</th>
        <th style="width:10%"></th>
    </tr>
    </thead>
    <tbody>
       <?php $total = 0 ?>
    @if(session('cart'))
        @foreach(session('cart') as $id => $details)

            <?php $total += $details['price'] * $details['quantity'] ?>

            <tr>
                <td data-th="Product">
                    <div class="row1">
                        <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" width="100" height="100" class="img-responsive"/></div>
                        <div class="col-sm-9">
                            <h4 class="nomargin">{{ $details['name'] }}</h4>
                        </div>
                    </div>
                </td>
                <td data-th="Price">{{ $details['price'] }} @lang('products.UAH')</td>
                <td data-th="Quantity">
                    <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" min="1" />
                </td>
                <td data-th="Subtotal" class="text-center">{{ $details['price'] * $details['quantity'] }} @lang('products.UAH')</td>
                <td class="actions" data-th="">
                    <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh" aria-hidden="true"></i></button>
                    <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                </td>
            </tr>
        @endforeach
    @endif

    </tbody>
    <tfoot>
    <tr class="visible-xs">
        <td class="text-center"><strong>@lang('cart.total'): {{ $total }} @lang('products.UAH')</strong></td>
    </tr>
    <tr>
        <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> @lang('cart.continue')</a></td>
        <td colspan="2" class="hidden-xs"></td>
        <td class="hidden-xs text-center"><strong>@lang('cart.total'): {{ $total }} @lang('products.UAH')</strong></td>
    </tr>
    </tfoot>
</table>
 </div>
</div>
<script>


        $(".update-cart").click(function (e) {
           e.preventDefault();

           var ele = $(this);

            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure?")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
      $("#close").click(function(){$(".alert-block").hide();});
    </script>
</body>
@include('footer')
</html>
