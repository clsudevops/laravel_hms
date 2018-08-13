<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
            {{-- @include('includes.breadcrumb') --}}
            
            @yield('content')
            
        </main>
    
        <footer>
        @include('includes.footer')
    </footer>

    <script type="text/javascript" src="{{ url('/js/script.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/jquery-confirm.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/materialize.js') }}"></script>
    <script>M.AutoInit();</script>
</body>

    
</html>