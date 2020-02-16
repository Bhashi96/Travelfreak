 <!-- *********************************************************************************************************************  -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
  color: orange;
}
hr.style13 {
	height: 10px;
	border: 0;
	box-shadow: 0 10px 10px -10px #8c8b8b inset;
}
hr.style14 { 
  border: 0; 
  height: 1px; 
  background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0); 
}
</style>
 
 <br>
<br>
<hr class="style13">

<!-- *********************************************************************************************************************  -->       
<div class="container mt-3">
<p class="text-Left lead" style="font-size:160%">Drivers </p>
    <div class="row">     
    @foreach ($tourist as $key =>$value)
             <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                <p class="text-center lead"><strong>{{ $value->name}} </strong> </p>
                <img src="images/driver/driver{{$value->id}}.jpg" class="mx-auto d-block image-fluid" alt="" width="251" height="161">
                <br>

                <p class="text-left lead">{{ $value->area}}</p>

                <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span> 
                     <!-- <a href="/guide_profile" class="btn btn-primary">Book now</a> -->
                     <a href="{{route('drivers.show',$value->id)}}" class="btn btn-primary">More info</a>
                <p class="text-center" > </p>
             </div>
             @endforeach          
    </div>     
</div> 
<br>
 <hr class="style13">


 <br>
<!-- *********************************************************************************************************************  -->       
<div class="container mt-3">
<p class="text-Left lead" style="font-size:160%">Drivers </p>
    <div class="row">     
    @foreach ($driver as $key =>$value)
             <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                <p class="text-center lead"><strong>{{ $value->name}} </strong> </p>
                <img src="images/driver/driver{{$value->id}}.jpg" class="mx-auto d-block image-fluid" alt="" width="251" height="161">
                <br>

                <p class="text-left lead">{{ $value->area}}</p>

                <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span> 
                     <!-- <a href="/guide_profile" class="btn btn-primary">Book now</a> -->
                     <a href="{{route('drivers.show',$value->id)}}" class="btn btn-primary">More info</a>
                <p class="text-center" > </p>
             </div>
             @endforeach          
    </div>     
</div> 

 <!-- *********************************************************************************************************************  -->       
 <br>
 <hr class="style13">


 <br>       
<div class="container mt-3">
<p class="text-Left lead" style="font-size:160%">Guides </p>
    <div class="row">     
    @foreach ($guide as $key =>$value)
             <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                <p class="text-center lead"><strong>{{ $value->name}} </strong></p>
                <img src="images/guide/guide{{$value->id}}.jpg" class="mx-auto d-block image-fluid" alt="" width="251" height="161">
                <br>

                <p class="text-left lead">{{ $value->area}}</p>
                      <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span> 
                    <!-- <a href="/guide_profile" class="btn btn-primary">Book now</a> -->
                     <a href="{{route('guides.show',$value->id)}}" class="btn btn-primary">More info</a>
                <p class="text-center" > </p>
             </div>
             @endforeach          
    </div>     
</div> 

<!-- *********************************************************************************************************************  -->       
<br>
 <hr class="style13">


 <br>

<div class="container mt-3">
<p class="text-Left lead" style="font-size:160%">Equipment provider </p>  <br>
    <div class="row">     
    @foreach ($eqp as $key =>$value)
             <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                <p class="text-center lead"><strong>{{ $value->name}} </strong> </p>
                <img src="images/eqp/eqp{{$value->id}}.jpg" class="mx-auto d-block image-fluid" alt="" width="251" height="161">
                <br>

                <p class="text-left lead">{{ $value->area}}</p>

                <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span> 
                     <a href="{{route('equipment.show',$value->id)}}" class="btn btn-primary">More info</a>
                <p class="text-center" > </p>
             </div>
             @endforeach          
    </div>     
</div> 
<br><br><br>


