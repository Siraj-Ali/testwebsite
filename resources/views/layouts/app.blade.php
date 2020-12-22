<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<body>
    <div id="app">
        

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="row-wrapper footer">
    <div class="container">
		<div class="row footer-site-links">
            <div class="col-xs-12 col-sm-2">
                <h5>
                    Get Online
                </h5>
                <ul class="links list-unstyled">
                    <li>
                        <a href="#">Email</a>
                    </li>
                    <li>
                        <a href="#">WHOIS Lookup</a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-2">
                <h5>
                    Sell Online
                </h5>
                <ul class="links list-unstyled">
                    <li>
                        <a href="#">eCommerce Hosting</a>
                    </li>
                    <li>
                        <a href="#">eCommerce Web Design</a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-3">
                <h5>
                    Corporate Information
                </h5>
                <ul class="links list-unstyled">
                    <li>
                        <a href="#">About Us</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-3">
                <h5>
                    Customer Support
                </h5>
                <ul class="links list-unstyled support">
                    <li>
                        <a href="#">Log In/Control Panel</a>
                    </li>
                </ul>
            </div>
        </div>
    </div><!-- .container -->
</footer>
    </div>
</body>
</html>
