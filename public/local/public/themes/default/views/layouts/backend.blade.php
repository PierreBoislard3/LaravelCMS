<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') &mdash; CMS</title>

        <link rel="stylesheet" href="{{ theme('css/backend.css') }}">
        <script>
            var CKEDITOR_BASEPATH = '/local/public/themes/default/assets/js/ckeditor/';
        </script>
        <script src="{{ theme('js/all.js') }}"></script>

    </head>
    <body>
        @include('partials.backend-navigation')

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>@yield('title')</h3>

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <strong>We found some errors!</strong>

                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if($status)
                        <div class="alert alert-info">
                            {{ $status }}
                        </div>
                    @endif

                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
