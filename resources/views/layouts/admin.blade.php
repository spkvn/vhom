<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <!-- Scripts -->
    <script src="/js/vendor.js"></script>

    <script src="/js/admin.js"></script>
</head>
<body>
<nav class="nav">
    @include('partials.nav.admin')
</nav>
<div class="body">
    @yield('content')
</div>
<div id="slider">
    <h1>Confirmation</h1>
    <hr>
    <p id="confirm-message">

    </p>
    <button class="confirm">
        Yes
    </button>
    <button class="cancel">
        No
    </button>
</div>
@stack('javascript')
</body>
</html>
