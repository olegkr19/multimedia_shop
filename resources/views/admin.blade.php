@extends('layouts.app')

@section('content')
  <div class="main_container">
    <div class="admin_main">
            <h1>Admin panel</h1><br>
            @if($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{$message}}</strong>
            </div>
            @endif
            <div class="admin_sidebar">
            <b>EDIT/DELETE PRODUCT</b><br>
            <a href="{{url('admin/create')}}">NEW PRODUCT </a><br>
          </div>
            <div class="main_content">
              <table id="product" class="col-md-11 table table-hover table-condensed">
              <thead>
              <tr>
                  <th style="width:20%">Image</th>
                  <th style="width:40%">Name</th>
                  <th style="width:20%">Price</th>
                  <th style="width:20%"></th>
              </tr>
              </thead>
              <tbody>
                  @foreach($products as $id => $details)
                      <tr>
                          <td data-th="Image">
                                  <div class="col-sm-3 hidden-xs"><img src="{{ $details['image_url'] }}" width="100" height="100" class="img-responsive"/></div>
                                  </td>
                                  <td data-th="Name">
                                    <div class="col-sm-9">
                                          <h4 class="nomargin">{{ $details['name'] }}</h4>
                                      </div>
                                  </td>
                          <td data-th="Price">{{ $details['price'] }} UAH</td>
                          <td class="actions" data-th="">
                              <a href="{{url('admin/edit-product')}}/{{$details['id']}}" class="btn btn-outline-primary edit-product">Edit</a>
                              <button class="btn btn-outline-danger removeProduct" data-id="{{ $details['id'] }}" data-token="{{ csrf_token() }}">DELETE</button>
                          </td>
                      </tr>
                  @endforeach

              </tbody>
            </table>
            </div>
            {{$products->links()}}
</div>
</div>
<script>
$(".removeProduct").click(function (e) {
    e.preventDefault();
    var ele = $(this);

    if(confirm("Are you sure?")) {
        $.ajax({
            url: '{{ url('remove-product') }}',
            method: "DELETE",
            data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
        });
        $(document).ajaxStop(function(){
          setTimeout(function(){
            window.location.reload();
          }, 1);
        });
    }
});
</script>
@endsection
