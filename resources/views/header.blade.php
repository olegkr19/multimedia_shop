<head>
<title>Multimedia</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<link rel="stylesheet" href="{{ URL::asset('css/common.css') }}">
</head>
<body>
  <div class="main_container">
    <div class="header">
  <h1>Multimediashop</h1>
    <ul class="site-nav">
      <li class="nav-products">
        <a href="{{ url('products')}}">@lang('welcome.product')</a>
      </li>
  <li class="about">
      <a href="{{ url('about') }}">@lang('welcome.about')</a>
      </li>
      <li class="cart">
      <a href="{{ url('cart')}}">@lang('welcome.cart')</a>
      </li>
    </ul>
  </div>
