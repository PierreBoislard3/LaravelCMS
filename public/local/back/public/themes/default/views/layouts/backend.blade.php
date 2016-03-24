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
        <li><a href="{{ route('backend.users.index') }}">Users</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><span class="navbar-text">Hello, {{ $admin->name }}</span></li>
        <li><a href="{{ route('auth.logout') }}">Logout</a></li>
    </ul>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>@yield('title')</h3>

            @if($errors->any())
                <div class="alert alert-danger">
                    <strong> We found some errors!</strong>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
