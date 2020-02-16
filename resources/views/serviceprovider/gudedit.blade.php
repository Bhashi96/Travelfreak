@extends('layouts.gudhomelayout')

@section('content')

<div class="container">
    <h1>Edit Profile</h1>
    <hr>
    <div class="row">
    <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="../img/boy1.jpg" class="avatar img-circle" alt="avatar">
          <h6>Upload a profile picture</h6>
          <input type="file" class="form-control">
        </div>
      </div>
                 

















      <!-- edit form column -->

      <div class="col-md-9 personal-info">
                
        <h3>Personal info</h3>



    <form method="post" action="{{route('gud.update',['guide'=>Auth::user()->id])}}">    
    @method('PATCH')
        {{csrf_field()}}         
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{{Auth::user()->name}}">
            </div>
          </div>
       
        <div class="form-group">
          <label class="col-lg-3 control-label">Age:</label>
          <div class="col-lg-8">
            <input class="form-control" type="text" value="{{Auth::user()->gud->age}}">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Area:</label>
          <div class="col-lg-8">
            <select>
            <option selected>Colombo</option>
                                        <option>Anuradhapura</option>
                                        <option>Badulla</option>
                                        <option>Batticaloa</option>
                                        <option>Galle</option>
                                        <option>Gampaha</option>
                                        <option>Hambantota</option>
                                        <option>Jaffna</option>
                                        <option>Kalutara</option>
                                        <option>Kandy</option>
                                        <option>Kegalle</option>
                                        <option>Kilinochchi</option>
                                        <option>Kurunegala</option>
                                        <option>Mannar</option>
                                        <option>Matale</option>
                                        <option>Matara</option>
                                        <option>Monaragala</option>
                                        <option>Mullaitivu</option>
                                        <option>Nuwara Eliya</option>
                                        <option>Polonnaruwa</option>
                                        <option>Puttalam</option>
                                        <option>Ratnapura</option>
                                        <option>Trincomalee</option>
                                        <option>Vavuniya</option>
            </select>
          </div>
        </div>
        <div class="form-group">
            <label class="col-lg-3 control-label">Gender:</label>
            <div class="col-lg-8">
              <input value="{{Auth::user()->gud->gender}}" readonly>
            </div>
          </div>
      <div class="form-group">
        <label class="col-lg-3 control-label">Email:</label>
        <div class="col-lg-8">
          <input class="form-control" type="text" value="{{Auth::user()->gud->email}}" readonly>
        </div>
      </div>
      <div class="form-group ">
        <label class="col-lg-3 control-label">Contact Number</label>
        <div class="col-lg-8">
        <input type="text" class="form-control" name="contact" id="inputContactNo" placeholder="Contact no" value="{{Auth::user()->gud->contact}}">
        </div>  
      </div>
      <!-- <div class="form-group ">
        <label class="col-lg-3 control-label">Price for day</label>
        <div class="col-lg-8">
          <input type="text" class="form-control" id="inputContactNo" >
        </div>
      </div> -->
      <div class="form-group">
        <label class="col-md-3 control-label">Availability</label>
        
        <div class="col-md-8">
        <input type="checkbox" >
                </div>
      </div>
      <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <button type="submit" class="btn btn-primary">Update Details</button>
          </div>
        </div>
      </form>       
    </div>
</div>
</div>
  

  <br><br>
@endsection