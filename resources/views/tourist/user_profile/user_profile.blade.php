@extends('layouts.without_footer')

@section('content')
@csrf
@include('includes.user_home.tourist_home_nav')

<!--<div class="container">
    <h1>Profile</h1>
  	<hr>
	<div class="row">
     left column 
      <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control">
        </div>
      </div>
      
     
      <div class="col-md-9 personal-info">
        <div>
        </div>
        <h3>Personal info</h3>
        
   left column      <form class="form-horizontal" role="form"> 
          <div class=>
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
                   {{ $user ->name}}
            </div>
          </div>
          
          <div >
            <label class="col-lg-3 control-label">Mobile no:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" >
            </div>
          </div>
          <div >
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" >
            </div>
          </div>
         
          <div >
            <label class="col-md-3 control-label">Country:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" >
            </div>
          </div>
          
        </form>  
      </div>
  </div>
</div>
<hr>
--><!------
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  ---------->
<br><br><br><br><br>
<div class="container">
    <div class="span3 well">
        <center>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="images/tourist/tourist{{Auth::user()->id}}.jpg" name="aboutme" width="300" height="300" class="img-circle"></a>
        <h3>{{ $user->name}}</h3>
        <em></em>
		   </center>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                      <h4 class="modal-title" id="myModalLabel"></h4>
                    </div>
                <div class="modal-body">
                    <center>
                    <img src=images/tourist/tourist{{Auth::user()->id}}.jpg" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                    <h3 class="media-heading"> {{ $user->name}}</h3>
                    <hr>
                    <span><strong>Country: </strong></span>
                    <span class="label label-warning"><!--{{ $user->country}}-->Srilanka</span>                      
                    </center>
                    <hr>
                    <center>
                    <span><strong>E-mail:  </strong></span>
                    <span class="label label-warning">{{ $user->email}}</span>
                    </center>
                    <hr>
                    <center>
                    <span><strong>Mobile:  </strong></span>
                    <span class="label label-warning"><!--{{ $user->contact}}--> 0774354962</span>
                    </center>
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection