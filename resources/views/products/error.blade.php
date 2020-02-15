<html>
@include('header')
<body>
  <div class="main_container">
    <div class="main">
  <div class="error" style="text-align:center;">
    <b style="font-size:40px;">@lang(products.error)</b><br>
    <a href="{{ url()->previous() }}"><button type="button" class="btn btn-secondary" style="margin-left:10px;font-size:20px;">@lang(products.return)</button></a>
  </div>
 </div>
</div>
</body>
@include('footer')
</html>
