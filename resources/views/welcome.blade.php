<!--<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
       <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
       <!-- <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
                @endif
                @endauth
            </div>
            @endif

           <!-- <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
    </html>-->

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="{{ asset('frontend/style/images/favicon.png')}}">
      <title>Embtel solution</title>
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/style/css/bootstrap.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/style/css/plugins.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/style/revolution/css/settings.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/style/revolution/css/layers.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/style/revolution/css/navigation.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/style/type/type.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/style/css/color/purple.css')}}">
      <link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/style/css/font/font2.css')}}">
  </head>
  <body>
      <div class="content-wrapper">
        <nav class="navbar absolute transparent inverse-text navbar-hover-opacity nav-uppercase navbar-expand-lg">
          <div class="container flex-row justify-content-center">
            <div class="navbar-brand"><a href="index.html"><img src="#" srcset="frontend/style/images/logo.png 1x, frontend/style/images/logo@2x.png 2x" class="logo-dark" alt="" /><img src="#" srcset="frontend/style/images/logo-light.png 1x, frontend/style/images/logo-light@2x.png 2x" class="logo-light" alt="" /></a></div>
            <div class="navbar-other ml-auto order-lg-3">
              <ul class="navbar-nav flex-row align-items-center" data-sm-skip="true">
                <li class="nav-item">
                  <div class="navbar-hamburger d-lg-none d-xl-none ml-auto"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
              </li>
              <li class="dropdown search-dropdown position-static nav-item">
                  <a href="#" role="button" class="collapse-toggle" data-toggle="collapse" data-target=".search-dropdown-menu" aria-haspopup="true" aria-expanded="false"><i class="jam jam-search"></i></a>
                  <div class="dropdown-menu search-dropdown-menu w-100 collapse">
                    <div class="form-wrapper">
                      <form class="inverse-text">
                        <input type="text" class="form-control" placeholder="Search something">
                    </form>
                    <!-- /.search-form -->
                    <i class="dropdown-close jam jam-close"></i>
                </div>
                <!-- /.form-wrapper -->
            </div>
        </li>
        <li class="nav-item"><button class="plain" data-toggle="offcanvas-info"><i class="jam jam-info"></i></button></li>
    </ul>
    <!-- /.navbar-nav -->
</div>
<!-- /.navbar-other -->
<div class="navbar-collapse offcanvas-nav">
  <div class="offcanvas-header d-lg-none d-xl-none">
    <a href="index.html"><img src="#" srcset="frontend/style/images/logo-light.png 1x, frontend/style/images/logo-light@2x.png 2x" alt="" /></a>
    <button class="plain offcanvas-close offcanvas-nav-close"><i class="jam jam-close"></i></button>
</div>
<ul class="navbar-nav mx-auto">
    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a>
      {{--<ul class="dropdown-menu mega-menu boxed list-view text-left">
        <li class="mega-menu-content">
          <div class="row">
            <div class="col-lg-3">
              <ul class="list-unstyled">
                <li><a class="dropdown-item" href="index.html">Digital Startup</a></li>
                <li><a class="dropdown-item" href="index2.html">Saas Landing</a></li>
                <li><a class="dropdown-item" href="index3.html">SEO Agency</a></li>
                <li><a class="dropdown-item" href="index4.html">Modern Business</a></li>
                <li><a class="dropdown-item" href="index5.html">Design Agency</a></li>
                <li><a class="dropdown-item" href="index6.html">App Presentation</a></li>
                <li><a class="dropdown-item" href="index7.html">Creative Landing</a></li>
            </ul>
        </div>
        <!--/column -->
        <div class="col-lg-3">
          <ul class="list-unstyled">
            <li><a class="dropdown-item" href="index8.html">Marketing Startup</a></li>
            <li><a class="dropdown-item" href="index9.html">Digital Agency</a></li>
            <li><a class="dropdown-item" href="index10.html">Creative Business</a></li>
            <li><a class="dropdown-item" href="index11.html">Software Landing</a></li>
            <li><a class="dropdown-item" href="index12.html">App Landing</a></li>
            <li><a class="dropdown-item" href="index13.html">Creative Agency</a></li>
            <li><a class="dropdown-item" href="index14.html">Wedding Photography</a></li>
        </ul>
    </div>
    <!--/column -->
    <div class="col-lg-3">
      <ul class="list-unstyled">
        <li><a class="dropdown-item" href="index15.html">Food Photography</a></li>
        <li><a class="dropdown-item" href="index16.html">Creative Onepage</a></li>
        <li><a class="dropdown-item" href="index17.html">Marketing Company</a></li>
        <li><a class="dropdown-item" href="index18.html">Startup Business</a></li>
        <li><a class="dropdown-item" href="index19.html">Creative Resume</a></li>
        <li><a class="dropdown-item" href="index20.html">Digital Studio</a></li>
        <li><a class="dropdown-item" href="index21.html">Travel Blog</a></li>
    </ul>
</div>
<!--/column -->
<div class="col-lg-3">
  <ul class="list-unstyled">
    <li><a class="dropdown-item" href="index22.html">Minimal Shop</a></li>
    <li><a class="dropdown-item" href="index23.html">Minimal Portfolio</a></li>
    <li><a class="dropdown-item" href="index24.html">Coming Soon</a></li>
    <li><a class="dropdown-item" href="index25.html">Personal Creative</a></li>
    <li><a class="dropdown-item" href="index26.html">Minimal Photography</a></li>
    <li><a class="dropdown-item" href="index27.html">Maintenance</a></li>
</ul>
</div>
<!--/column -->
</div>
<!--/.row -->
</li>
<!--/.mega-menu-content-->
</ul>--}}
<!--/.dropdown-menu -->
</li>
<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="{{route('contact')}}">Contact Us</a>
  {{--<ul class="dropdown-menu">
    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Header</a>
      <ul class="dropdown-menu">
        <li class="nav-item"><a class="dropdown-item" href="header.html">Classic Header</a></li>
        <li class="nav-item"><a class="dropdown-item" href="header2.html">Classic Light Header</a></li>
        <li class="nav-item"><a class="dropdown-item" href="header3.html">Classic Dark Header</a></li>
        <li class="nav-item"><a class="dropdown-item" href="header4.html">Header with Topbar</a></li>
        <li class="nav-item"><a class="dropdown-item" href="header5.html">Wide Header</a></li>
        <li class="nav-item"><a class="dropdown-item" href="header6.html">Extended Header</a></li>
        <li class="nav-item"><a class="dropdown-item" href="header7.html">Fancy Light Header</a></li>
        <li class="nav-item"><a class="dropdown-item" href="header8.html">Fancy Dark Header</a></li>
        <li class="nav-item"><a class="dropdown-item" href="header9.html">Centered Header</a></li>
    </ul>
</li>
<li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Footer</a>
  <ul class="dropdown-menu">
    <li class="nav-item"><a class="dropdown-item" href="footer.html">Footer with Details</a></li>
    <li class="nav-item"><a class="dropdown-item" href="footer2.html">Centered Footer</a></li>
    <li class="nav-item"><a class="dropdown-item" href="footer3.html">Simple Footer</a></li>
    <li class="nav-item"><a class="dropdown-item" href="footer4.html">Footer with Widgets</a></li>
    <li class="nav-item"><a class="dropdown-item" href="footer5.html">Minimalist Footer</a></li>
    <li class="nav-item"><a class="dropdown-item" href="footer6.html">Footer with Overflow</a></li>
    <li class="nav-item"><a class="dropdown-item" href="footer7.html">Footer with Background Image</a></li>
</ul>
</li>
<li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Page Title</a>
  <ul class="dropdown-menu">
    <li class="nav-item"><a class="dropdown-item" href="page-title.html">Page Title with Image</a></li>
    <li class="nav-item"><a class="dropdown-item" href="page-title2.html">Page Title with Breadcrumbs</a></li>
    <li class="nav-item"><a class="dropdown-item" href="page-title3.html">Page Title with Light Wrapper</a></li>
    <li class="nav-item"><a class="dropdown-item" href="page-title4.html">Page Title with Gray Wrapper</a></li>
    <li class="nav-item"><a class="dropdown-item" href="page-title5.html">Page Title with Dark Wrapper</a></li>
    <li class="nav-item"><a class="dropdown-item" href="page-title6.html">Page Title with Colored Wrapper</a></li>
    <li class="nav-item"><a class="dropdown-item" href="page-title7.html">Page Title with Gradient Wrapper</a></li>
    <li class="nav-item"><a class="dropdown-item" href="page-title8.html">Page Title with Video Wrapper</a></li>
</ul>
</li>
<li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Modal Popup</a>
  <ul class="dropdown-menu">
    <li class="nav-item"><a class="dropdown-item" href="modal-popup1.html">Subscription</a></li>
    <li class="nav-item"><a class="dropdown-item" href="modal-popup2.html">Subscription Alternative</a></li>
    <li class="nav-item"><a class="dropdown-item" href="modal-popup3.html">Sign Up</a></li>
    <li class="nav-item"><a class="dropdown-item" href="modal-popup4.html">Contact Form</a></li>
    <li class="nav-item"><a class="dropdown-item" href="modal-popup5.html">Cookie</a></li>
    <li class="nav-item"><a class="dropdown-item" href="modal-popup6.html">Sale</a></li>
</ul>
</li>
<li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#">Fonts</a>
  <ul class="dropdown-menu">
    <li class="nav-item"><a class="dropdown-item" href="font1.html">Jost</a></li>
    <li class="nav-item"><a class="dropdown-item" href="font2.html">Nunito</a></li>
    <li class="nav-item"><a class="dropdown-item" href="font3.html">DM Sans + Zilla Slab</a></li>
    <li class="nav-item"><a class="dropdown-item" href="font4.html">HK Grotesk</a></li>
    <li class="nav-item"><a class="dropdown-item" href="font5.html">Abhaya Libre</a></li>
</ul>
</li>
<li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#">Colors</a>
  <ul class="dropdown-menu">
    <li class="nav-item"><a class="dropdown-item" href="color1.html">Aqua</a></li>
    <li class="nav-item"><a class="dropdown-item" href="color2.html">Blue</a></li>
    <li class="nav-item"><a class="dropdown-item" href="color3.html">Brown</a></li>
    <li class="nav-item"><a class="dropdown-item" href="color4.html">Cobalt</a></li>
    <li class="nav-item"><a class="dropdown-item" href="color5.html">Green</a></li>
    <li class="nav-item"><a class="dropdown-item" href="color6.html">Hibiscus</a></li>
    <li class="nav-item"><a class="dropdown-item" href="color7.html">Leaf</a></li>
    <li class="nav-item"><a class="dropdown-item" href="color8.html">Meander</a></li>
    <li class="nav-item"><a class="dropdown-item" href="color9.html">Orange</a></li>
    <li class="nav-item"><a class="dropdown-item" href="color10.html">Pink</a></li>
    <li class="nav-item"><a class="dropdown-item" href="color11.html">Purple</a></li>
    <li class="nav-item"><a class="dropdown-item" href="color12.html">Red</a></li>
    <li class="nav-item"><a class="dropdown-item" href="color13.html">Rose</a></li>
    <li class="nav-item"><a class="dropdown-item" href="color14.html">Sky</a></li>
    <li class="nav-item"><a class="dropdown-item" href="color15.html">Teal</a></li>
    <li class="nav-item"><a class="dropdown-item" href="color16.html">Violet</a></li>
    <li class="nav-item"><a class="dropdown-item" href="color17.html">Yellow</a></li>
</ul>
</li>
<li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Onepage</a>
  <ul class="dropdown-menu">
    <li class="nav-item"><a class="dropdown-item" href="index16.html">Demo I</a></li>
    <li class="nav-item"><a class="dropdown-item" href="index19.html">Demo II</a></li>
</ul>
</li>
<li class="nav-item"><a class="dropdown-item" href="box-layout.html">Box Layout</a></li>
</ul>--}}
</li>
<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="{{Route('about')}}">About Us</a>
<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="{{Route('team')}}">Team</a>
<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="{{Route('pricing')}}">Pricing</a>
 {{-- <ul class="dropdown-menu">
    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Services</a>
      <ul class="dropdown-menu">
        <li class="nav-item"><a class="dropdown-item" href="services.html">Services I</a></li>
        <li class="nav-item"><a class="dropdown-item" href="services2.html">Services II</a></li>
        <li class="nav-item"><a class="dropdown-item" href="services3.html">Services III</a></li>
        <li class="nav-item"><a class="dropdown-item" href="services4.html">Services IV</a></li>
        <li class="nav-item"><a class="dropdown-item" href="services5.html">Services V</a></li>
    </ul>
</li>
<li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">About</a>
  <ul class="dropdown-menu">
    <li class="nav-item"><a class="dropdown-item" href="about.html">About I</a></li>
    <li class="nav-item"><a class="dropdown-item" href="about2.html">About II</a></li>
    <li class="nav-item"><a class="dropdown-item" href="about3.html">About III</a></li>
    <li class="nav-item"><a class="dropdown-item" href="about4.html">About IV</a></li>
</ul>
</li>
<li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Shop</a>
  <ul class="dropdown-menu">
    <li class="nav-item"><a class="dropdown-item" href="shop.html">Shop</a></li>
    <li class="nav-item"><a class="dropdown-item" href="shop2.html">Shop with Sidebar</a></li>
    <li class="nav-item"><a class="dropdown-item" href="shop3.html">Shop with Left Sidebar</a></li>
    <li class="nav-item"><a class="dropdown-item" href="shop-product.html">Product Page</a></li>
    <li class="nav-item"><a class="dropdown-item" href="shop-cart.html">Shopping Cart</a></li>
    <li class="nav-item"><a class="dropdown-item" href="shop-checkout.html">Checkout</a></li>
</ul>
</li>
<li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Contact</a>
  <ul class="dropdown-menu">
    <li class="nav-item"><a class="dropdown-item" href="contact.html">Contact I</a></li>
    <li class="nav-item"><a class="dropdown-item" href="contact2.html">Contact II</a></li>
    <li class="nav-item"><a class="dropdown-item" href="contact3.html">Contact III</a></li>
    <li class="nav-item"><a class="dropdown-item" href="contact4.html">Contact IV</a></li>
</ul>
</li>
<li><a class="dropdown-item" href="faq.html">FAQ</a></li>
<li><a class="dropdown-item" href="page-loading.html">Page Loading</a></li>
<li><a class="dropdown-item" href="scroll-animation.html">Scroll Animation</a></li>
</ul>--}}
</li>
{{--<li class="nav-item"><a class="nav-link" href="#!">Elements</a>
  <ul class="dropdown-menu mega-menu boxed list-view text-left">
    <li class="mega-menu-content">
      <div class="row">
        <div class="col-lg-3">
          <ul class="list-unstyled">
            <li><a href="accordion.html">Accordion</a></li>
            <li><a href="alerts.html">Alerts</a></li>
            <li><a href="animated-text.html">Animated Text</a></li>
            <li><a href="blockquote.html">Blockquote</a></li>
            <li><a href="buttons-badges.html">Buttons & Badges</a></li>
            <li><a href="call-to-action.html">Call to Action</a></li>
            <li><a href="carousel.html">Carousel</a></li>
            <li><a href="clients.html">Clients</a></li>
            <li><a href="countdown.html">Countdown</a></li>
            <li><a href="counter.html">Counter</a></li>
        </ul>
    </div>
    <!--/column -->
    <div class="col-lg-3">
      <ul class="list-unstyled">
        <li><a href="dividers.html">Dividers</a></li>
        <li><a href="dropcap.html">Dropcap</a></li>
        <li><a href="forms.html">Forms</a></li>
        <li><a href="icon-concept.html">Icons - Concept</a></li>
        <li><a href="icon-jam.html">Icons - Jam</a></li>
        <li><a href="icon-icofont.html">Icons - Icofont</a></li>
        <li><a href="icon-lineal.html">Icons - Lineal</a></li>
        <li><a href="icon-box.html">Icon Box</a></li>
        <li><a href="image-hover.html">Image Hover</a></li>
        <li><a href="image-mask.html">Image Mask</a></li>
    </ul>
</div>
<!--/column -->
<div class="col-lg-3">
  <ul class="list-unstyled">
    <li><a href="lightbox.html">Lightbox</a></li>
    <li><a href="lists.html">Lists</a></li>
    <li><a href="player.html">Media Player</a></li>
    <li><a href="modal.html">Modal</a></li>
    <li><a href="pricing.html">Pricing Tables</a></li>
    <li><a href="process.html">Process Steps</a></li>
    <li><a href="progressbar.html">Progress Bar</a></li>
    <li><a href="animations.html">Scroll Animations</a></li>
    <li><a href="social-icons.html">Social Icons</a></li>
    <li><a href="tables.html">Tables</a></li>
</ul>
</div>
<!--/column -->
<div class="col-lg-3">
  <ul class="list-unstyled">
    <li><a href="tabs.html">Tabs</a></li>
    <li><a href="team.html">Team</a></li>
    <li><a href="testimonials.html">Testimonials</a></li>
    <li><a href="titles.html">Titles</a></li>
    <li><a href="toggle.html">Toggle</a></li>
    <li><a href="tooltip-popover.html">Tooltip & Popover</a></li>
    <li><a href="typography.html">Typography</a></li>
    <li><a href="video-popup.html">Video Popup</a></li>
    <li><a href="waves.html">Waves</a></li>
    <li><a href="wrappers.html">Wrappers</a></li>
</ul>
</div>
<!--/column -->
</div>
<!--/.row -->
</li>
<!--/.mega-menu-content-->
</ul>
<!--/.dropdown-menu -->
</li>--}
{{--<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#!">Portfolio</a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="portfolio.html">Grid Portfolio</a></li>
    <li><a class="dropdown-item" href="portfolio2.html">Grid Portfolio with Details</a></li>
    <li><a class="dropdown-item" href="portfolio3.html">Masonry Portfolio</a></li>
    <li><a class="dropdown-item" href="portfolio4.html">Masonry Portfolio with Details</a></li>
    <li><a class="dropdown-item" href="portfolio5.html">Mosaic Portfolio</a></li>
    <li><a class="dropdown-item" href="portfolio6.html">Fullscreen Grid Portfolio</a></li>
    <li><a class="dropdown-item" href="portfolio7.html">Portfolio with Item Details</a></li>
    <li><a class="dropdown-item" href="portfolio8.html">Box Portfolio with Item Details</a></li>
    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Portfolio Posts</a>
      <ul class="dropdown-menu">
        <li class="nav-item"><a class="dropdown-item" href="portfolio-post.html">Post with Multiple Images</a></li>
        <li class="nav-item"><a class="dropdown-item" href="portfolio-post2.html">Post with Slider</a></li>
        <li class="nav-item"><a class="dropdown-item" href="portfolio-post3.html">Post with Masonry Gallery</a></li>
        <li class="nav-item"><a class="dropdown-item" href="portfolio-post4.html">Post with Carousel</a></li>
        <li class="nav-item"><a class="dropdown-item" href="portfolio-post5.html">Post with Columns</a></li>
        <li class="nav-item"><a class="dropdown-item" href="portfolio-post6.html">Post with Video</a></li>
    </ul>
</li>
</ul>
</li>--}}
{{--<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#!">Blog</a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="blog.html">Grid View</a></li>
    <li><a class="dropdown-item" href="blog2.html">Grid View with Sidebar</a></li>
    <li><a class="dropdown-item" href="blog3.html">Box Grid View</a></li>
    <li><a class="dropdown-item" href="blog4.html">Box Grid View with Sidebar</a></li>
    <li><a class="dropdown-item" href="blog5.html">Classic View</a></li>
    <li><a class="dropdown-item" href="blog6.html">Classic View with Sidebar</a></li>
    <li><a class="dropdown-item" href="blog7.html">Box Classic View</a></li>
    <li><a class="dropdown-item" href="blog8.html">Box Classic View with Sidebar</a></li>
    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Blog Posts</a>
      <ul class="dropdown-menu">
        <li class="nav-item"><a class="dropdown-item" href="blog-post.html">Post No Sidebar</a></li>
        <li class="nav-item"><a class="dropdown-item" href="blog-post2.html">Post with Sidebar</a></li>
        <li class="nav-item"><a class="dropdown-item" href="blog-post3.html">Box Post No Sidebar </a></li>
        <li class="nav-item"><a class="dropdown-item" href="blog-post4.html">Box Post with Sidebar </a></li>
    </ul>
</li>
</ul>
</li>--}}


@if (Route::has('login'))

@auth

<a class="nav-link" href="{{ url('/home') }}">User Home<span class="sr-only">(current)</span></a>

@else
 <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="{{ route('login') }}">Login</a>
    @if (Route::has('register'))
   
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="{{ route('register') }}">Register</a>
       @endif
       @endauth

       @endif


   </ul>
   <!-- /.navbar-nav -->
</div>
<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>
<!-- /.navbar -->
<div class="offcanvas-info inverse-text">
  <button class="plain offcanvas-close offcanvas-info-close"><i class="jam jam-close"></i></button>
  <a href="index.html"><img src="#" srcset="frontend/style/images/logo-light.png 1x, frontend/style/images/logo-light@2x.png 2x" alt="" /></a>
  <div class="space30"></div>
  <p>1Snowlake is a multi-concept and powerful site template contains rich layouts with possibility of unlimited combinations & beautiful elements.</p>
  <div class="space20"></div>
  <div class="widget">
    <h5 class="widget-title">Contact Info</h5>
    <address> Moonshine St. 14/05 <br /> Light City, London <div class="space20"></div>
      <a href="mailto:first.last@email.com" class="nocolor">info@email.com</a><br /> +00 (123) 456 78 90 </address>
  </div>
  <!-- /.widget -->
  <div class="widget">
    <h3 class="widget-title">Learn More</h3>
    <ul class="list-unstyled">
      <li><a href="#" class="nocolor">Our Story</a></li>
      <li><a href="#" class="nocolor">Terms of Use</a></li>
      <li><a href="#" class="nocolor">Privacy Policy</a></li>
      <li><a href="#" class="nocolor">Contact Us</a></li>
  </ul>
</div>
<!-- /.widget -->
<div class="widget">
    <h3 class="widget-title">Follow Us</h3>
    <ul class="social social-mute social-s ml-auto">
      <li><a href="#"><i class="jam jam-twitter"></i></a></li>
      <li><a href="#"><i class="jam jam-facebook"></i></a></li>
      <li><a href="#"><i class="jam jam-instagram"></i></a></li>
      <li><a href="#"><i class="jam jam-vimeo"></i></a></li>
      <li><a href="#"><i class="jam jam-youtube"></i></a></li>
  </ul>
</div>
<!-- /.widget -->
</div>
<!-- /.offcanvas-info -->
<div class="wrapper dark-wrapper">
  <div class="rev_slider_wrapper fullwidth-container">
    <div id="slider10" class="rev_slider fullwidthbanner" data-version="5.4.7">
      <ul>
        <li data-transition="fade" data-thumb=""><img src="frontend/style/images/art/slider-bg12.jpg" alt="" />
          <div class="tp-caption font-weight-600 color-white text-center" 
          data-x="center" 
          data-y="middle" 
          data-voffset="['-45','-45','-45','-45']" 
          data-fontsize="['50','50','40','36']" 
          data-lineheight="['65','65','55','51']" 
          data-width="['550','550','550','340']" 
          data-textAlign="['center','center','center','center']" 
          data-whitespace="['normal','normal','normal','normal']" 
          data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.7;sY:0.7;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' 
          data-responsive="on" 
          data-responsive_offset="on" style="z-index: 9;">Hello! We are a digital and marketing company
      </div>
      <!-- /.tp-caption -->
      <a class="tp-caption btn btn-l btn-white btn-strong-hover scroll" 
      data-x="center" 
      data-y="middle" 
      data-voffset="['85','85','85','85']" 
      data-width="['auto','auto','auto','auto']" 
      data-textAlign="['center','center','center','center']" 
      data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.7;sY:0.7;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' 
      data-responsive="on" 
      data-responsive_offset="on" style="z-index: 9;" href="#">Get Started
  </a>
  <!-- /.tp-caption -->
</li>
</ul>
<div class="tp-bannertimer tp-bottom"></div>
</div>
<!-- /.rev_slider -->
</div>
<!-- /.rev_slider_wrapper -->
</div>



 @yield('content')



















<footer class="dark-wrapper inverse-text">
  <div class="container inner">
    <div class="row">
      <div class="col-md-4 col-lg-3">
        <div class="widget">
          <img src="#" srcset="frontend/style/images/logo-light.png 1x, frontend/style/images/logo-light@2x.png 2x" alt="" />
          <div class="space40"></div>
          <p>22© 2020 Snowlake App. <br class="d-none d-lg-block" />All rights reserved.</p>
      </div>
      <!-- /.widget -->
  </div>
  <!-- /column -->
  <div class="col-md-4 col-lg-3">
    <div class="widget">
      <h3 class="widget-title">Get in Touch</h3>
      <address>Moonshine St.<br class="d-none d-lg-block" /> 14/05 Light City,<br class="d-none d-lg-block" /> London, United Kingdom</address>
      <a href="mailto:first.last@email.com">info@email.com</a><br /> +00 (123) 456 78 90
  </div>
  <!-- /.widget -->
</div>
<!-- /column -->
<div class="col-md-4 col-lg-3">
    <div class="widget">
      <h3 class="widget-title">Learn More</h3>
      <ul class="list-unstyled">
        <li><a href="#" class="nocolor">About Us</a></li>
        <li><a href="#" class="nocolor">Our Story</a></li>
        <li><a href="#" class="nocolor">Projects</a></li>
        <li><a href="#" class="nocolor">Terms of Use</a></li>
        <li><a href="#" class="nocolor">Privacy Policy</a></li>
        <li><a href="#" class="nocolor">Contact Us</a></li>
    </ul>
</div>
<!-- /.widget -->
</div>
<!-- /column -->
<div class="space30 d-none d-md-block d-lg-none"></div>
<div class="col-md-12 col-lg-3">
    <div class="widget">
      <h3 class="widget-title">Our Newsletter</h3>
      <p>Subscribe to our newsletter to get our news & deals delivered to your inbox!</p>
      <div class="space10"></div>
      <div class="newsletter-wrapper">
        <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll" class="input-group">
            <input type="email" value="" name="EMAIL" class="email form-control mb-0 mr-2 mb-sm-0" id="mce-EMAIL" placeholder="Email Address" required>
            <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-rounded btn-default mr-0 mb-0 pull-right">Join</button>
            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true">
              <input type="text" name="b_ddc180777a163e0f9f66ee014_056957de28" tabindex="-1" value="">
          </div>
          <div class="clearfix"></div>
      </div>
  </form>
</div>
<!-- /.newsletter-wrapper -->
</div>
<!-- /.widget -->
</div>
<!-- /column -->
</div>
<!--/.row -->
</div>
<!-- /.container -->
</footer>
</div>
<!-- /.content-wrapper -->
<script src="{{ asset('frontend/style/js/jquery.min.js')}}"></script>
<script src="{{ asset('frontend/style/js/popper.min.js')}}"></script>
<script src="{{ asset('frontend/style/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('frontend/style/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{ asset('frontend/style/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{ asset('frontend/style/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{ asset('frontend/style/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{ asset('frontend/style/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{ asset('frontend/style/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{ asset('frontend/style/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{ asset('frontend/style/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{ asset('frontend/style/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{ asset('frontend/style/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{ asset('frontend/style/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{ asset('frontend/style/js/plugins.js')}}"></script>
<script src="{{ asset('frontend/style/js/scripts.js')}}"></script>
</body>
</html>
