@extends('layouts.gudhomelayout')

@section('content')

< <div class="container">
    <h1>Edit Profile</h1>
  	<hr>
    
    <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{route('gud.update',['guide'=>Auth::user()->id])}}" >  
   
    {{csrf_field()}}
	  <div class="row">
      <!-- left column -->
        <div class="col-md-3">
          <div class="text-center">
          <img src="/images/guide/{{Auth::user()->gud->image_path}}" class="avatar img-circle" alt="avatar" width="200" height="200">
            
            <input type="file" class="form-control" name="image_path">
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



      <!-- edit form column -->

      



    <form method="post" action="{{route('gud.update',['guide'=>Auth::user()->id])}}">    
    @method('PATCH')
    @csrf
        <!-- {{csrf_field()}}          -->
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" name="name" type="text" value="{{Auth::user()->gud->name}}">
            </div>
          </div>
       
        <div class="form-group">
          <label class="col-lg-3 control-label">Age:</label>
          <div class="col-lg-8">
            <input class="form-control" name="age" type="text" value="{{Auth::user()->gud->age}}">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Area:</label>
          <div class="col-lg-8">
            <select id="area" name="area" >
            <option>{{Auth::user()->gud->area}}</option>
                                        <option value="Anuradhapura">Anuradhapura</option>
                                        <option value="Badulla">Badulla</option>
                                        <option value="Batticaloa">Batticaloa</option>
                                        <option value="Galle">Galle</option>
                                        <option value="Gampaha">Gampaha</option>
                                        <option value="Hambantota">Hambantota</option>
                                        <option value="Jaffna">Jaffna</option>
                                        <option value="Kalutara">Kalutara</option>
                                        <option value="Kandy">Kandy</option>
                                        <option value="Kegalle">Kegalle</option>
                                        <option value="Kilinochchi">Kilinochchi</option>
                                        <option value="Kurunegala">Kurunegala</option>
                                        <option value="Mannar">Mannar</option>
                                        <option value="Matale">Matale</option>
                                        <option value="Matara">Matara</option>
                                        <option value="Monaragala">Monaragala</option>
                                        <option value="Mullaitivu">Mullaitivu</option>
                                        <option value="Nuwara Eliya">Nuwara Eliya</option>
                                        <option value="Polonnaruwa">Polonnaruwa</option>
                                        <option value="Puttalam">Puttalam</option>
                                        <option value="Ratnapura">Ratnapura</option>
                                        <option value="Trincomalee">Trincomalee</option>
                                        <option value="Vavuniya">Vavuniya</option>
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
        <input type="text" class="form-control" name="contact" id="contact" placeholder="Contact no" value="{{Auth::user()->gud->contact}}">
        </div>  
      </div>
      <!-- <div class="form-group">
            <label class="col-lg-3 control-label">Price per day:</label>
            <div class="col-lg-8">
              <input class="form-control" name="price" type="text" value="{{Auth::user()->gud->price}}">
            </div>
          </div> -->
      <!-- <div class="form-group ">
        <label class="col-lg-3 control-label">Price for day</label>
        <div class="col-lg-8">
          <input type="text" class="form-control" id="inputContactNo" >
        </div>
      </div> -->
      <!-- <div class="form-group">
        <label class="col-md-3 control-label">Availability
        
        <input type="checkbox" >
                </div>
        </label>
      </div> -->
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