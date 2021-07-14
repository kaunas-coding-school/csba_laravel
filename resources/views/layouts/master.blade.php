<html>
<head>
    <title>Mano aplikacija - @yield('title')</title>
</head>
@section('css')
    <link rel="stylesheet" type="text/css" href="/css/app.css">
@show
<body>
@section('sidebar')
    This is the master sidebar.
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>
