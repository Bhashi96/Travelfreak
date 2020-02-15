@extends('layouts.defaulthome')

@section('content')
@csrf
@include('includes.user_home.tourist_home_nav')

<div class="container">
    <h1>Edit Profile</h1>
  	<hr>
    <form class="form-horizontal" role="form" method="post" action="{{   route( 'update-tourist',['id'=>Auth::user()->id] )   }}" enctype="multipart/form-data">  
    @csrf
    @method('put')
	  <div class="row">
      <!-- left column -->
        <div class="col-md-3">
          <div class="text-center">
            <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
            <h6>Upload your profile photo...</h6>
            
            <input type="file" class="form-control" name="image">
          </div>
        </div>

      <div class="col-md-9 personal-info">
        <h3>Personal info</h3>
        @if(count($errors) > 0)
          <div> 
              <ul>
              @foreach($errors->all() as $erorr)
                <li style="color:red">  {{$erorr}}</li>
              @endforeach
              </ul>
          </div>

        @endif
      
          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="name" value="{{$user->name}}" placeholder="Enter your name">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Mobile no:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="cotact" value="{{$user->cotact}}" placeholder="Enter your mobile no" >
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="email" value="{{$user->email}}" placeholder="Enter your e-mail">
            </div>
          </div>
         
          <div class="form-group">
            <label class="col-md-3 control-label">Country:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="country" value="{{$user->country}}" placeholder="Enter your country">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="password" placeholder="Enter the password">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="re-pass" placeholder="Re-enter the password" >
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes" >
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>

      </div>
  </div>
  </form>
</div>
<hr>

@endsection