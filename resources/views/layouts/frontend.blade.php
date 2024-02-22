<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script defer type="text/javascript" src="{{ asset('js/customBehavioursJS.js') }}"></script>
    
</head>

<body class="bg-gray-100 font-sans antialiased customBody" >

    <div id="app-2" class="bodyWrapper">

        @include('layouts.navbar')
        
        <div class="contentWrapper flex flex-wrap justify-end">
            
            @yield('content')
                    
        </div>
        
    </div>
    
</body>

</html>