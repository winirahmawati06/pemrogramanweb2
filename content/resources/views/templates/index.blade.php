<html>
<head> <title>Latihan Blade templates</title>
</head>
<body>
@include ('templates.header')
@yield('content')
@include('templates.footer')
</body>
</html>