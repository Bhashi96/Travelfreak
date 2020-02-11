<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
    @include('includes.navbar')
    @include('includes.regnavbar')

</head>
<body>
<div style="background-image: url({{ asset('img/regimg.jpg') }});">
    
    @yield('content')
    @include('includes.footer') 
</body>
</html>