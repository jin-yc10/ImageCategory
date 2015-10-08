<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="/css/main.css" >
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css" >
    @yield('head')
</head>
<body>
    @yield('body')
</body>
<script type="application/javascript" src="/js/jquery-1.11.3.min.js" ></script>
<script type="application/javascript" src="/js/bootstrap.min.js" ></script>
@yield('after-body')
</html>
