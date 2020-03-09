@extends('layouts.splayout')

@section('content')

<br><br>
    <div class="container">
    <h1>Edit Profile</h1>
  	<hr>
    
    <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{route('drv.update',['driver'=>Auth::user()->id])}}" >  
   
    {{csrf_field()}}
	  <div class="row">
      <!-- left column -->
        <div class="col-md-3">
          <div class="text-center">
          <img src="/images/driver/{{Auth::user()->drv->image_path}}" class="avatar img-circle" alt="avatar" width="200" height="200">
            
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
                
      <form method="post" action="{{route('drv.update',['driver'=>Auth::user()->id])}}">    
      @method('PATCH')
        <!-- {{csrf_field()}}     -->
        @csrf
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
              <input class="form-control" type="text" value="{{Auth::user()->drv->age}}" name="age">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Gender:</label>
            <div class="col-lg-8">
              <input name="gender" value="{{Auth::user()->drv->gender}}" readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{{Auth::user()->drv->email}}" name="email" readonly>
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
          <!-- <div class="form-group">
            <label class="col-md-3 control-label">Availability
             <input type="checkbox" >
            </label>
          <div class="col-md-8">
              <lable>from</lable>
              <input type="date" name="from" max="2019-11-05">
              <lable>to</lable>
              <input type="date" name="to" >
            </div> 
          </div> -->

          <h3>Vehicle Details</h3>
           <div class="col-md-3">
           <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{  route( 'drv.update',['id'=>Auth::user()->id] )  }}" > 
           <div class="text-center">
            <!-- <label >Upload a photo</label>  -->
              <img src="/images/vehical/{{Auth::user()->drv->img}}" class="avatar img-circle" alt="avatar" width="300" height="200">
              <!-- <img src="../img/kia_soul_EV.jpg" class="avatar img-circle" alt="avatar">  -->
             <input type="file" class="form-control" name="img">
            </div>
            </form>
          </div>
          
          <div class="form-group">
          <!-- <label class="col-lg-3 control-label">Vehical Type</label>
          <div class="col-lg-8">
            <select id="area" name="area" >
                    <option>{{Auth::user()->drv->v_brand}}</option>
                    <option value="Van">Van</option>
                    <option value="Car">Car</option>
                    <option value="Mini Van">Mini Van</option>
                    <option value="Tuk tuk">Tuk tuk</option>                     
            </select>
          </div>
        </div> -->
          
          
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Vehicle Type</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{{Auth::user()->drv->v_brand}}" name="v_brand" id="v_brand">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Vehicle Register No</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{{Auth::user()->drv->v_reg_no}}" name="v_reg_no">
            </div>
          </div>
         
          <div class="form-group">
            <label class="col-lg-3 control-label">Number of seats</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{{Auth::user()->drv->v_seats}}" name="v_seats" id="v_seats">
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