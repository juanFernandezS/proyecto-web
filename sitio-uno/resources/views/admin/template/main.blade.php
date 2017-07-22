<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Default') | UBBNews</title>

    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">

    <!-- estilo del login-->
    {{ Html::style("plugins/others/login.css") }}

</head>
<body>

    @include('public.template.partials.nav')

    <section>
        @yield('content')
    </section>

    <script src="{{ asset('plugins/jquery/js/jquery-3.2.1.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>