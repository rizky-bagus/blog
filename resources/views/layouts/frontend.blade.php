<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Ednews</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,600,700" rel="stylesheet">
    
    <!-- Stylesheets -->
    
    <link href="{{ asset('assets/plugin-frameworks/bootstrap.css') }}" rel="stylesheet">
    
    <link href="{{ asset('assets/fonts/ionicons.css') }}" rel="stylesheet">
    
        
    <link href="{{ asset('assets/common/styles.css') }}" rel="stylesheet">
    
    
</head>
<body>
    
    @include('partials.header')
    
    @yield('content')
    
    @include('partials.footer')
    
    <!-- SCIPTS -->
    
    <script src="{{ asset('assets/plugin-frameworks/jquery-3.2.1.min.js') }}"></script>
    
    <script src="{{ asset('assets/plugin-frameworks/tether.min.js') }}"></script>
    
    <script src="{{ asset('assets/plugin-frameworks/bootstrap.js') }}"></script>
    
    <script src="{{ asset('assets/common/scripts.js') }}"></script>

    <script>
        var url = 'http://localhost:8000/';
        var baseUrl = 'http://localhost:8000/api/';
        var imageurl = 'http://localhost:8000/assets/images/';
    </script>
    
</body>
</html>