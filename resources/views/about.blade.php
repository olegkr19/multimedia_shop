<html>
@include('header')
<body>
  <div class="main_container">
    <div class="main">
      <div class="about">
  <h2>@lang('about.about')</h2>
  <p> @lang('about.text') </p>
  <a class="btn btn-primary" href="{{url('/')}}" role="button">@lang('about.go_back')</a>
</div>
 </div>
</div>
<br>
</body>
@include('footer')
</html>
