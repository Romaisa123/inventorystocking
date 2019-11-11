<html>
<head>
<title>App Name - @yield('title')</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
@section('navbar')
<nav class="navbar navbar-expand-sm bg-light">

<ul class="navbar nav">
<li class="nav-item">
<a id="index" class="navbar-brand" href="{{url('home')}}">Welcome</a>
</li>
<li class="nav-item">
<a id="index" class="navbar-brand" href="{{url('about')}}">About</a>
</li>

</nav>
@show
</body>

</html>