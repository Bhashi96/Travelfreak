@extends('layouts.defaulthome')

@section('content')
@csrf
@include('includes.user_home.tourist_home_nav')

<div class="container">
    <h1>Edit Profile</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
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
        @if(count($errors) > 0)

          <div> 
              <ul>
              @foreach($errors->all() as $erorr)
                <li style="color:red">  {{$erorr}}</li>
              @endforeach
              </ul>
          </div>

        @endif
        
        <form class="form-horizontal" role="form" method="post" action="{{   route( 'update-tourist',['id'=>Auth::user()->id] )   }}">  
          @csrf
          @method('put')
         
          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="name" value="{{$user->name}}" placeholder="Enter your name">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Mobile no:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="mobile-no" placeholder="Enter your mobile no" >
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
              <input class="form-control" type="text" name="country"  placeholder="Enter your country">
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
        </form>
      </div>
  </div>
</div>
<hr>

@endsection