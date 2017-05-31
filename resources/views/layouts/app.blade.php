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
    @section('styles')
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/sidenav.css') }}" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    @show()
</head>
<body>
    
    <div id="wrapper">
    
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="/admin">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="admin/banners">Banners</a>
                </li>
                <li>
                    <a href="#">Ejemplo</a>
                </li>
            </ul>
        </div>

        <div id="page-content-wrapper">
            <nav class="navbar navbar-default navbar-static-bar">
                <div class="container">
                    <ul class="nav navbar-nav">
                        <!-- Use any element to open the sidenav -->
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">
                            &#9776;
                        </a>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li role="presentation">
                            <a class="navbar-brand" href="{{ url('/admin') }}">
                                {{ config('app.name', 'Laravel') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    @section('js')
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/admin/admin.js') }}"></script>
    @show

</body>
</html>
