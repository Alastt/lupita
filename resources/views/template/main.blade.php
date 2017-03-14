<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/trumbowyg/dist/ui/trumbowyg.css') }}">
    <title>@yield('title', 'Default') | Panel de administración</title>

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/js/jquery-3.1.1.js') }}"></script>

    <!-- JavaScript -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Chosen -->
    <script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>

    <!-- TRUMBOWYG -->
    <script src="{{ asset('plugins/trumbowyg/dist/trumbowyg.js') }}"></script>

</head>
<body>

    @include('template.partials.nav')

    @include('template.partials.panel_h')

    @include('template.partials.footer')

</body>
</html>