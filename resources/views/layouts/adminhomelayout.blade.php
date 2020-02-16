<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.admin_head')
  

    @include('includes.navbar')
    @include('includes.admin_nav')
   
</head>
<body>
    
    
    @yield('content')
    @include('includes.footer') 
</body>
</html>