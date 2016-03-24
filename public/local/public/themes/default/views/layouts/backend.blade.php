<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') &mdash; Laravel CMS</title>

    <link rel="stylesheet" href="{{ theme('css/backend-style.css') }}">
</head>
<body>
<nav class="navbar navbar-static-top navbar-inverse">
    <div class="navbar-header"><a href="/" class="navbar-brand">Laravel CMS</a></div>
    <ul class="nav navbar-nav">
        <li><a href="#">Item 1</a></li>
        <li><a href="#">Item 1</a></li>
        <li><a href="#">Item 1</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><span class="navbar-text">Hello, Johnny</span></li>
        <li><a href="{{ route('auth.logout') }}">Logout</a></li>
    </ul>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>@yield('title')</h3>

            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
