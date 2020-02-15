<section class="footer">
<div class="footer-item">
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
