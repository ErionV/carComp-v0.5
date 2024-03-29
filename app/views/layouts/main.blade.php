<!DOCTYPE html>

<html>

<head>
    <title>CarComp</title>
    {{ HTML::style('packages/bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('packages/bootstrap/css/style.css') }}
</head>

<body>
    @include('layouts.navigation')
    @include('layouts.navigationTwo')

    <div class="container">

        @if(Session::has('global'))
            <div id="notificationMessage" class="alert-warning alert">
                <p>
                    <strong>NOTIFICATION!</strong>
                    {{ Session::get('global') }}
                </p>
            </div>
        @endif

        @yield('content')

        {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') }}
        {{ HTML::script('packages/bootstrap/js/bootstrap.min.js') }}
        {{ HTML::script('packages/bootstrap/js/myJSFuncs.js') }}
        {{ HTML::script('packages/bootstrap/js/angular.js') }}
    </div>

</body>

</html>