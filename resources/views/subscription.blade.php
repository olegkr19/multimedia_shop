<html>
@include('header')
<body>
  <div class="main_container">
    <div class="main">
  <b style="margin-left:30px;">@lang('subscription.subscribe'),{{$email}}!!!</b>
   <br>
   <br>
<a class="btn btn-primary" href="{{url('/')}}" role="button" style="margin-bottom:10px;margin-left:10px;">@lang('products.go_back')</a>
 </div>
</div>
</body>
@include('footer')
</html>
