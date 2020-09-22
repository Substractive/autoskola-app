<!DOCTYPE html>
<html>
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Meta Tags -->
    <!--<meta name="description" content="{{ this.page.meta_description }}">
    <meta name="title" content="Prometni propisi - besplatni ispiti">

    <meta property="og:title" content="Prometni propisi - besplatni ispiti"/>
    <meta property="og:description" content="{{ this.page.meta_description }}"/>
    <meta property="og:image" content="{{ 'assets/img/prometni_propisi_og_image.png' | theme }}"/> -->

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
    <link rel="icon" type="image/png" href="{{ 'assets/img/logo/favicon.png' | theme }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-172431391-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-172431391-1');
        gtag('config', 'AW-758235727');
    </script>

    {% if this.page.name == 'ispiti' %}
    <!-- Event snippet for Website traffic conversion page --> <script> gtag('event', 'conversion', {'send_to': 'AW-758235727/fWeZCIL2-NcBEM-Ex-kC'}); </script>
    {% endif %}


    <!-- Required Scripts -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- bsnav JS -->
    <script src="{{ asset('js/bsnav.js')}}"></script>
    {% styles %}
</head>

<body>
<!-- Header -->
<header id="layout-header">
    {% partial 'header' %}
</header>



<!-- Content -->
<section id="layout-content">
    {% page %}
</section>

<!-- Footer -->
<footer id="footer">
    {% partial 'footer' %}
</footer>

<!-- Scroll To Top -->
{% partial 'scroll-to-top' %}



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

<!-- Scripts -->
{% framework extras %}
{% scripts %}
</body>
</html>
