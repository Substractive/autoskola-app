<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Meta Tags -->
<!--<meta name="description" content="">
    <meta name="title" content="Prometni propisi - besplatni ispiti">

    <meta property="og:title" content="Prometni propisi - besplatni ispiti"/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content=""/> -->

    <!-- Title -->
    <title>Prometni propisi - besplatni ispiti</title>

    <!-- Required CSS -->
    <link rel="stylesheet" href=" {{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">

    <!-- bsnav CSS -->
    <link rel="stylesheet" href="{{ asset('css/bsnav.css') }}">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/008e405aaf.js" crossorigin="anonymous"></script>

    <!-- Ubuntu Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-172431391-1"></script>
   <!-- <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-172431391-1');
        gtag('config', 'AW-758235727');
    </script> -->

    <!-- Required Scripts -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- bsnav JS -->
    <script src="{{ asset('js/bsnav.js')}}"></script>

</head>

<body class="bg-gradient-primary">

<!-- Header -->
<header id="layout-header">
    @include('partials.header')
</header>

<!-- Content -->
<section id="layout-content">
    @yield('content')
</section>

<!-- Footer -->
<footer id="footer">
    @include('partials.footer')
</footer>

@include('partials.scrolltotop')


<!-- Mob Nav -->
<div class="bsnav-mobile">
    <div class="bsnav-mobile-overlay"></div>
    <div class="navbar bsnav-scrollspy"></div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>


<script src="{{ asset('js/smooth-scroll.polyfills.js') }}"></script>

<script>

    // Instantiate Scrolls
    var scroll = new SmoothScroll('a[href*="#"]:not([data-easing])');

    if (document.querySelector('[data-easing]')) {
        var linear = new SmoothScroll('[data-easing="linear"]', {easing: 'linear'});

        var easeInQuad = new SmoothScroll('[data-easing="easeInQuad"]', {easing: 'easeInQuad'});
        var easeInCubic = new SmoothScroll('[data-easing="easeInCubic"]', {easing: 'easeInCubic'});
        var easeInQuart = new SmoothScroll('[data-easing="easeInQuart"]', {easing: 'easeInQuart'});
        var easeInQuint = new SmoothScroll('[data-easing="easeInQuint"]', {easing: 'easeInQuint'});

        var easeInOutQuad = new SmoothScroll('[data-easing="easeInOutQuad"]', {easing: 'easeInOutQuad'});
        var easeInOutCubic = new SmoothScroll('[data-easing="easeInOutCubic"]', {easing: 'easeInOutCubic'});
        var easeInOutQuart = new SmoothScroll('[data-easing="easeInOutQuart"]', {easing: 'easeInOutQuart'});
        var easeInOutQuint = new SmoothScroll('[data-easing="easeInOutQuint"]', {easing: 'easeInOutQuint'});

        var easeOutQuad = new SmoothScroll('[data-easing="easeOutQuad"]', {easing: 'easeOutQuad'});
        var easeOutCubic = new SmoothScroll('[data-easing="easeOutCubic"]', {easing: 'easeOutCubic'});
        var easeOutQuart = new SmoothScroll('[data-easing="easeOutQuart"]', {easing: 'easeOutQuart'});
        var easeOutQuint = new SmoothScroll('[data-easing="easeOutQuint"]', {easing: 'easeOutQuint'});
    }

    // // Log scroll events
    // var logScrollEvent = function (event) {
    // 	console.log('type:', event.type);
    // 	console.log('anchor:', event.detail.anchor);
    // 	console.log('toggle:', event.detail.toggle);
    // };
    // document.addEventListener('scrollStart', logScrollEvent, false);
    // document.addEventListener('scrollStop', logScrollEvent, false);
    // document.addEventListener('scrollCancel', logScrollEvent, false);
</script>

<script>
    $(window).scroll(function() {
        if ($(this).scrollTop()) {
            $('.scroll-to-top').fadeIn();
        } else {
            $('.scroll-to-top').fadeOut();
        }
    });
</script>

</body>

</html>
