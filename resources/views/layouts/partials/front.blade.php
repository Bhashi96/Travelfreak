

<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    @include('includes.navbar')
    @include('includes.spnavbar')
    
<div class="container mt-3">
<h3>Travel freak Addvertisement Forum</h3>
<br>

<div class="row">
     
          <div class="col-md-3"><h4>Category</h4></div>
                    <div class="col-md-4"><h4 class="main-content-heading">@yield('heading')</h4></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-2">
                    
                   
                    <a class="btn btn-primary" href="{{route('thread.create')}}">Create Addvertisement</a>
                
                   
                         
                    </div>
                
        
     
</div>
<div class ="row">
     <div class="col-md-3">
          <ul class="list-group">
               <a href ="/threads/forumall" class="list-group-item">
               <span class="badge"></span>
               All Adds
               </a>
               <a href ="/threads/forumapart" class="list-group-item">
               <span class="badge"></span>
               Apartments
               </a>
              
               <a href ="/threads/forumvehicle" class="list-group-item">
               <span class="badge"></span>
               Vehicles
               </a>
               <a href ="/threads/forumeqp" class="list-group-item">
               <span class="badge"></span>
               Equipments
               </a>
               <a href ="/threads/forumothers" class="list-group-item">
               <span class="badge"></span>
               Others
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

