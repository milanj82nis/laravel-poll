<!DOCTYPE html>
<html lang="en">

<head>
  @include('partials/__head')
</head>

<body>
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/sr_RS/sdk.js#xfbml=1&version=v3.2&appId=360091758047624&autoLogAppEvents=1"></script>
  <div id="wrapper">
@include('partials/__hidden-top')

  @include('partials/__navbar')
    <section id="featured">

 
@include('partials/__slider')
    </section>
@include('partials/__messages')


@yield('content')
@include('partials/__footer')
  </div>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <!-- javascript
    ================================================== -->

  <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('js/bootstrap.js') }}"></script>
  <script src="{{ asset('js/jcarousel/jquery.jcarousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>
  <script src="{{ asset('js/jquery.fancybox-media.js') }}"></script>
  <script src="{{ asset('js/google-code-prettify/prettify.js') }}"></script>
  <script src="{{ asset('js/portfolio/jquery.quicksand.js') }}"></script>
  <script src="{{ asset('js/portfolio/setting.js') }}"></script>
  <script src="{{ asset('js/jquery.flexslider.js') }}"></script>
  <script src="{{ asset('js/jquery.nivo.slider.js') }}"></script>
  <script src="{{ asset('js/modernizr.custom.js') }}"></script>
  <script src="{{ asset('js/jquery.ba-cond.min.js') }}"></script>
  <script src="{{ asset('js/jquery.slitslider.js') }}"></script>
  <script src="{{ asset('js/animate.js') }}"></script>

  <!-- Template Custom JavaScript File -->
  <script src="{{ asset('js/custom.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="{{ asset('js/share.js') }}"></script>

</body>
</html>
