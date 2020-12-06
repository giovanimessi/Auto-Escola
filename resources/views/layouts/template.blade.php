<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>@yield('title')/</title>
<link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="Stylesheet">
<link href="{{asset('assets/css/estilo.css')}}" rel="Stylesheet">



</head>
<body>

    @yield('content')
<script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>
</body>

</html>