<!doctype html>
<html>

@include(_get_frontend_layout_path('frontend._head'))
<body id="page-top">

@yield('content')

@include(_get_frontend_layout_path('frontend.js'))

</body>
</html>