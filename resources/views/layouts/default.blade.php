<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Strony dla firm | @yield('meta-title')</title>

        <meta name="description" content="@yield('meta-description')">
        <meta name="keywords" content="Strony dla firm, strona internetowa, firma, biznes, platforma, aplikacja, design">

        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="Strony dla firm | @yield('meta-title')">
        <meta itemprop="description" content="@yield('meta-description')">
        <meta itemprop="image" content="{{asset('images/default.webp')}}">

        <meta property="fb:app_id" content="300416041066243"/>

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@publisher_handle">
        <meta name="twitter:title" content="Strony dla firm | @yield('meta-title')">
        <meta name="twitter:description" content="@yield('meta-description')">
        <meta name="twitter:creator" content="@author_handle">
        <meta name="twitter:image:src" content="{{asset('images/default.webp')}}">

        <!-- Open Graph data -->
        <meta property="og:title" content="Strony dla firm | @yield('meta-title')"/>
        <meta property="og:type" content="article"/>
        <meta property="og:url" content="{{url()->current()}}"/>
        <meta property="og:image" content="{{asset('images/default.webp')}}"/>
        <meta property="og:description" content="@yield('meta-description')"/>
        <meta property="og:site_name" content="Strony dla firm"/>

        <meta name="title" content="Strony dla firm | @yield('meta-title')">
        <meta name="author" content="Grzegorz Kastelik Usługi Programistyczne">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/icon.svg') }}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        @stack('css')
    </head>
    <body>
        <div id="fb-root"></div>
        <header>
            @include('partials.site.navigation')
            @yield('header')
        </header>

        <!-- Content -->
        <main id="zawartosc">
            @yield('content')
        </main>

        <div class="fb-customerchat"
             attribution=setup_tool
             page_id="107138147773786"
             theme_color="#389eed"
             greeting_dialog_display="fade"
             greeting_dialog_delay="5"
             logged_in_greeting="Dzień dobry! W czym możemy Ci pomóc?"
             logged_out_greeting="Dzień dobry! W czym możemy Ci pomóc?">
        </div>

        <!-- Footer -->
        <footer>
            @include('partials.site.footer')
        </footer>

        <!-- Scripts -->
        @stack('scripts')
        <!-- Load Facebook SDK for JavaScript -->
        <script>
          window.fbAsyncInit = function() {
            FB.init({
              xfbml            : true,
              version          : 'v8.0'
            });
          };

          (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/pl_PL/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));</script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-175518280-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'UA-175518280-1');
        </script>

        <script defer src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>
        <script src="{{asset('js/wow.min.js')}}"></script>
        <script>
          new WOW().init();
        </script>
    </body>
</html>
