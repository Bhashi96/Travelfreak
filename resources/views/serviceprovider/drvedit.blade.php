@extends('layouts.splayout')

@section('content')

<br><br>
    <div class="container">
      <h1>Edit Profile</h1>
      <hr>
      <div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
         <img src="../img/atharva.jpg" class="avatar img-circle" alt="avatar">
         <h6>Upload a profile picture</h6>
          <input type="file" class="form-control">
        </div>
      </div>
              
      
      @if(count($errors)>0)
      <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
        </ul>
      </div>
      @endif
      @if(\Session::has('success'))
      <div class="alert alert-success">
        <p>{{\Session::get('success')}}</p>
      </div>
      @endif
       
       <!-- edit form column -->
       
       
       <div class="col-md-9 personal-info">
                
                <h3>Personal info</h3>


                
      <form method="post" action="{{route('drv.update',['driver'=>Auth::user()->id])}}">    
      @method('PATCH')
        {{csrf_field()}}    
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
            <input class="form-control" type="text" name="name" value="{{Auth::user()->name}}">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Age:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{{Auth::user()->drv->age}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Gender:</label>
            <div class="col-lg-8">
              <input value="{{Auth::user()->drv->gender}}" readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{{Auth::user()->drv->email}}" readonly>
            </div>
          </div>
          <div class="form-group ">
            <label class="col-lg-3 control-label">Contact Number</label>
            <div class="col-lg-8">
              <input type="text" class="form-control" name="contact" id="inputContactNo" placeholder="Contact no" value="{{Auth::user()->drv->contact}}">
            </div>
          </div>
          <div class="form-group ">
            <label class="col-lg-3 control-label">Licence</label>
            <div class="col-lg-8">
              <input type="text" class="form-control" name="licence" id="inputLicence" placeholder="Licence" value="{{Auth::user()->drv->licence}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Availability</label>
            <div class="col-md-8">
              <lable>from</lable>
              <input type="date" name="from" max="2019-11-05">
              <lable>to</lable>
              <input type="date" name="to" >
            </div>
          </div>

          <h3>Vehicle Details</h3>
          <div class="col-md-3">
            <div class="text-center">
            <label >Upload a photo</label> 
             <img src="../img/kia_soul_EV.jpg" class="avatar img-circle" alt="avatar">
             <input type="file" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Vehicle Brand</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{{Auth::user()->drv->v_brand}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Vehicle Register No</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{{Auth::user()->drv->v_reg_no}}">
            </div>
          </div>
         
          <div class="form-group">
            <label class="col-lg-3 control-label">Number of seats</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{{Auth::user()->drv->v_seats}}">
            </div>
          </div>
          
              <button type="submit" class="btn btn-primary">Update Details</button>
              
            </div>
          </div>
        </form>
        </form>



      </div>
    </div>
    <hr>

	  <div id="colorlib-page">
      <div class="container-wrap">
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
        <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
        <div class="text-center">
        </div>
      </div>
    </div>
</div>

@endsection