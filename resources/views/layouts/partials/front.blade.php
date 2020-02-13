

<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    @include('includes.navbar')
    
<div class="container mt-3">
<h1>Travel freak Forum</h1>
<br>

<div class="row">
     
          <div class="col-md-3"><h4>Category</h4></div>
                    <div class="col-md-4"><h4 class="main-content-heading">@yield('heading')</h4></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-2">
                         <a class="btn btn-primary" href="{{route('thread.create')}}">Create Thread</a>
                    </div>
                
        
     
</div>
<div class ="row">
     <div class="col-md-3">
          <ul class="list-group">
               <a href ="/forum2" class="list-group-item">
               <span class="badge">14</span>
               All threads
               </a>
               <a href ="#" class="list-group-item">
               <span class="badge">3</span>
               Guides
               </a>
               <a href ="#" class="list-group-item">
               <span class="badge">3</span>
               Drivers
               </a>
               <a href ="#" class="list-group-item">
               <span class="badge">2</span>
               EQP
               </a>
          </ul>
      </div>
     <div class=col-md-9>
     <div class="content-wrap-well">
     <div class="list-group" >


     @yield('content')
</div>
</div>
</div>
</div>
</div>
  
    
    @include('includes.footer') 
</body>
</html>

