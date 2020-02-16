<html>
<head>
<title>Multimediashop</title>
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/common.css">
</head>
<body>
<div class="main_container">
  <div class="main">
  <div class="header">
<h1>Multimediashop</h1>
  <ul class="site-nav">
    <li class="nav-products">
      <a href="{{url('/products')}}">@lang('welcome.product')</a>
    </li>
<li class="about">
    <a href="{{ url('/about') }}">@lang('welcome.about')</a>
    </li>
    <li class="cart">
    <a href="{{ url('cart') }}">@lang('welcome.cart')</a>
    </li>
    <li class="dropdown">
  <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">@lang('welcome.lang')</a>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="{{url('setlocale/en')}}">@lang('welcome.eng')</a>
    <a class="dropdown-item" href="{{url('setlocale/ru')}}">@lang('welcome.ru')</a>
    <a class="dropdown-item" href="{{url('setlocale/ukr')}}">@lang('welcome.ukr')</a>
  </div>
  </li>
  </ul>
</div>
<div class="nav-bar-left">
  <ul class="site-nav-left">
    <li class="nav-left">
      <a href="{{ url('laptops') }}">@lang('welcome.laptops')</a>
    </li>
  <li class="nav-left">
    <a href="{{ url('cameras') }}">@lang('welcome.cameras')</a>
    </li>
    <li class="nav-left">
    <a href="{{ url('flash-drivers') }}">@lang('welcome.flash')</a>
    </li>
    <li class="nav-left">
    <a href="{{ url('headphones') }}">@lang('welcome.headphones')</a>
    </li>
    <li class="nav-left">
    <a href="{{ url('smartphones') }}">@lang('welcome.smartphones')</a>
    </li>
    <li class="nav-left">
    <a href="{{ url('tv-sets') }}">@lang('welcome.tv')</a>
    </li>
  </ul>
</div>
<div class="nav-bar-right">
  <img src="{{ asset('img/main_page/image002.jpg') }}" alt="" height="332px" width="1170px" />
</div>
  <div class="products">
<h2>@lang('welcome.product')</h2>
<div class="products-top">
<div class="laptops">
<a href="{{ url('laptops') }}"><img class="animate" src="{{ asset('img/products/laptop.jpg') }}" alt=""></a>
<div class="cameras">
<a href="{{ url('cameras') }}"><img class="animate" src="{{ asset('img/products/camera.jpg') }}" alt=""></a>
<div class="flashdrivers">
<a href="{{ url('flash-drivers') }}"><img class="animate" src="{{ asset('img/products/flash.jpg') }}" alt=""></a>
</div>
</div>
</div>
</div>
<div class="products-bottom">
<div class="headphones">
<a href="{{ url('headphones') }}"><img class="animate" src="{{ asset('img/products/headphones.jpg') }}" alt=""></a>
</div>
<div class="smartphones">
<a href="{{ url('smartphones') }}"><img class="animate" src="{{ asset('img/products/smartphone.jpg') }}" alt=""></a>
</div>
<div class="tv">
<a href="{{ url('tv-sets') }}"><img class="animate" src="{{ asset('img/products/TV.jpg') }}" alt=""></a>
</div>
</div>
</div>
<div class="product-brands">
<h2>@lang('welcome.brands')</h2><br><br>
<div class="slider">
    <div class="column"><img src="{{ asset('img/logos/image002.jpg') }}" alt=""></div>
    <div class="column"><img src="{{ asset('img/logos/image014.gif') }}" alt=""></div>
    <div class="column"><img src="{{ asset('img/logos/image004.gif') }}" alt=""></div>
    <div class="column"><img src="{{ asset('img/logos/image006.jpg') }}" alt=""></div>
    <div class="column"><img src="{{ asset('img/logos/image008.gif') }}" alt=""></div>
    <div class="column"><img src="{{ asset('img/logos/image010.jpg') }}" alt=""></div>
    <div class="column"><img src="{{ asset('img/logos/image012.gif') }}" alt=""></div>
    <div class="column"><img src="{{ asset('img/logos/image016.gif') }}" alt=""></div>
    <div class="column"><img src="{{ asset('img/logos/image018.gif') }}" alt=""></div>
</div>
</div>
<br>
<section class="customer_reviews">
  <h2>@lang('welcome.customers')</h2>
  <div class="container">
    <!--Circle image with text under him-->
    <div class="customer_1">
      <img class="customer_image" src="{{asset('img/main_page/zinchenko.jpg')}}" /><br>
      <b>Alex Zinchenko</b>
      <p>
      @lang('welcome.review1')
      </p>
    </div>
    <div class="customer_2">
      <img class="customer_image" src="{{asset('img/main_page/Bradley-Cooper.jpg')}}" /><br>
      <b>Bradley Cooper</b>
      <p>
        @lang('welcome.review2')
      </p>
    </div>
    <div class="customer_3">
      <img class="customer_image" src="{{asset('img/main_page/justin-timberlake.jpg')}}" /><br>
      <b>Justin Timbarlake</b>
      <p>
        @lang('welcome.review3')
      </p>
    </div>
    <div class="customer_4">
      <img class="customer_image" src="{{asset('img/main_page/miley-cyrus.jpg')}}" /><br>
      <b>Miley Cyrus</b>
      <p>
        @lang('welcome.review4')
      </p>
    </div>
    <div class="customer_5">
      <img class="customer_image" src="{{asset('img/main_page/scarlett-johansson.jpg')}}" /><br>
      <b>Scarlett Johansson</b>
      <p>
        @lang('welcome.review5')
      </p>
    </div>
  </div>
</section>
</div>
</div>
<section class="footer">
<div class="footer-item">
<!--footer include about us,contacts,social-networking sites links and more-->
<span class="footer-block-title">@lang('welcome.subscribe')</span>
<div class="footer-block-content"><br>
<p>@lang('welcome.join')</p>
</div>
<div class="newsletter">
<form id="newsletter-static" class="contact-form" method="post" action="{{url('send')}}" accept-charset="UTF-8">
  <input type="hidden" name="form_type" value="customer" />
  <div class="form-fields-inline">
    <div class="newsletter-input">
      <input id="newsletter_email" class="form-field-input" name="email" type="email" aria-label="Email adress" placeholder="@lang('welcome.email')" />
    </div>
    <div class="form-submit">
      {{csrf_field()}}
      <button class="button-primary" name="subscribe" type="submit">@lang('welcome.submit')</button>
    </div>
  </div>
</form>
</div>
<div class="about_us">
  <div class="form-fields-inline-2">
  <span class="footer-block-title">@lang('welcome.about')</span><br><br>
  <p>@lang('welcome.about_text') <a href="{{url('about')}}">@lang('welcome.more')</a></p>
</div>
</div>
<div class="follow_us">
  <div class="form-fields-inline-3">
  <span class="footer-block-title">@lang('welcome.follow')</span><br><br>
    <div class="social-networks">
      <a href="https://uk-ua.facebook.com/"><img src="{{ asset('img/social-networks/Facebook.png') }}" ="" /></a>
      <a href="https://www.instagram.com/?hl=ru"><img src="{{ asset('img/social-networks/Instagram.png') }}" alt=""></a>
      <a href="https://www.messenger.com/"><img src="{{ asset('img/social-networks/Messenger.png') }}" alt=""></a>
      <a href="https://www.whatsapp.com/?lang=ru"><img src="{{ asset('img/social-networks/Whatsapp.png') }}" alt=""></a>
    </div>
</div>
</div>
<div class="copyright">
  <p>&copy; 2020 Multimediashop<p>
</div>
</div>
</section>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
$('.slider').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 500,
});
</script>
</body>
</html>
