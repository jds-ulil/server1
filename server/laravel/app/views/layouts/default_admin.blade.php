<!doctype html>
<html>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="Coe">
<head>
    @yield('addcss')
    @include('includes.head_admin')
</head>
<body>
    @include('layouts.header')

    <div class="container">
    @yield('content')
    </div>

    @include('layouts.footer')
    @yield('addjs')
</body>
</html>