<!doctype html>
<html>
<head>
    @include('includes.head_admin')
    @yield('addcss')
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