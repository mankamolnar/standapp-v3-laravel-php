<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
        {{ $CSS->render_css_links("all") }}
        

        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src='/js/OldalSpecFug.js?1484763531' type='text/javascript'></script>
        <link href="/plugins/sunny/jquery-ui-1.10.1.custom.css" rel="stylesheet">
        <script src="/plugins/jquery-ui-1.10.1.custom.js?1485797089" type="text/javascript"></script>
        <script src="/plugins/hu/jquery.ui.datepicker-hu.js?1485797089" type="text/javascript"></script>
        
        <script src="/js/md5.js?1485797089" type="text/javascript"></script>
        <script src="/js/felhaszKocsModul.js?1485797089" type="text/javascript"></script>

    </head>
    <body class='signo'>

        @include('layouts.header')
        @yield('content')

        <div id='toTop'>
                
        </div>
    </body>
</html>
