<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/jquery-confirm.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/materialize.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/mystyle.css') }}" />
</head>

<body>
    <header>
        @include('includes.header')
    </header>

    @include('includes.sidenav')

        <main>  
            @yield('content')
        </main>
    
        <footer>
        @include('includes.footer')
    </footer>

    {{-- <script type="text/javascript" src="{{ asset('js/app.js') }}"></script> --}}
    <script>M.AutoInit();</script>

</body>

    
</html>