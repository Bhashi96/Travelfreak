@extends('layouts.without_footer')

@section('content')
@csrf
@include('includes.user_home.tourist_home_nav')

<br>
                <form action="/search_page" method="post">
							@csrf  

							<div class="row">
                            
                                 <div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Service provider</span>
                                        <select id="type" name="type" class="form-control" required>
											<option>guide</option>
											<option>driver</option>
                                            <option>equipment</option>
                                            </select>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">District</span>
										<select id="district" name="district" class="form-control" required>
											<option>Ampara</option>
											<option>Anuradhapura</option>
											<option>Badulla</option>
                                            <option>Batticaloa</option>
											<option>Colombo</option>
											<option>Galle</option>
                                            <option>Gampaha</option>
											<option>Hambantota</option>
											<option>Jaffna</option>
                                            <option>Kandy</option>
											<option>Kegalle</option>
											<option>Kilinochchi</option>
                                            <option>Kurunegala</option>
                                            <option>Mannar</option>
                                            <option>Matela</option>
                                            <option>Matara</option>
                                            <option>Monaragala</option>
                                            <option>Mullaitivu</option>
                                            <option>Nuwara Eliya</option>
                                            <option>Puttalam</option>
                                            <option>Ratnapura</option>
                                            <option>Trincomalee</option> 
                                            <option>Vavuniya</option>
                                            

										</select>
										<span class="select-arrow"></span>
									</div>
								</div>

								 @error('note')
									   <b>Error</b>
									   @enderror 
                            
								<div class="col-md-3">
									<div class="form-btn">
                                        <button type="submit" class="submit-btn">
                                            
											Search
					
                                        </button>	
									</div>
								</div>
                                								 	                              
							</div>
                    </form>

<br> <br>
 <hr class="style13">


 <br>
<!--
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
                     <a href="{{route('equipment.show',$value->id)}}" class="btn btn-primary">Book now</a>
                <p class="text-center" > </p>
             </div>
             @endforeach          
    </div>     
</div> 
<br><br><br>  -->
@endsection
