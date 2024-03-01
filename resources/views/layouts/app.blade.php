<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">

    <script defer type="text/javascript" src="{{ asset('js/customBehavioursJS.js') }}"></script>
    
</head>

<body class="bg-gray-100 font-sans antialiased customBody backdrop">

    <div class="pageBodyNavbarWrapper">

        @include('layouts.navbar')

    </div>

    <div class="pageBodySidebarWrapper">
            
        @include('layouts.sidebar')

    </div>

    <div class="pageBodyWrapper">

        @yield('content')

    </div>

    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        $(function() {
            $( "#opennavdropdown" ).on( "click", function() {
                $( "#navdropdown" ).toggleClass( "hidden" );
            })
        })
    </script>

    @stack('scripts')

</body>
</html>