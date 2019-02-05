<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <meta name="description" content="">
    <meta name="author" content="WowThemez">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('APP_NAME', 'Golden Mothers') }}</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/css-animation.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/elegant-font-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/elegant-line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet">
    {{--<link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slicknav.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nivo-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/payment/payment.css') }}" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
    @include('inc.navbar')
    @include('inc.messages')
    <div class="container-fluid">

        @yield('content')
    </div>
    @include('inc.footer')
</div>

{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>--}}


<script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.isotope.v3.0.2.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.nivo.slider.pack.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.slicknav.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.waypoints.v2.0.3.min.js') }}"></script>
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('js/payment/stripe.min.js')}}"></script>
<script src="{{ asset('js/vendor/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('js/vendor/letteranimation.min.js') }}"></script>

<script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
<script src="{{ asset('js/vendor/smooth-scroll.min.js') }}"></script>
<script src="{{ asset('js/vendor/tether.min.js') }}"></script>
<script src="{{ asset('js/vendor/venobox.min.js') }}"></script>
<script src="{{ asset('js/vendor/wow.min.js') }}"></script>
<script src="{{ asset('js/vendor/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/contact.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://js.stripe.com/v3/"></script>

<script src="{{asset('js/payment/payment.js')}}"></script>


{{--<script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>--}}

{{--<script>--}}
    {{--CKEDITOR.replace( 'article-ckeditor' );--}}
{{--</script>--}}
</body>
</html>
