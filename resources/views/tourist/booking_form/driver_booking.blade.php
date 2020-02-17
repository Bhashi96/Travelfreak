@extends('layouts.free')

@section('content')
@include('includes.driver_booking_head')

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">

					<div class="booking-form">
						<div class="form-header">
							<h1>Book your Driver</h1>
						</div>

						@if(count($errors) > 0)
						<div> 
							<ul>
									@foreach($errors->all() as $erorr)
									  <li style="color:red">  {{$erorr}}</li>
									@endforeach
							</ul>
						</div>
						@endif
				
                		
						<form action="{{route('driverbooking.create')}}" method="put">
							@csrf  
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">From Destination</span>
										<input id="from" name="from" class="form-control" type="text" required>
									</div>
									<span class="in-out hidden-xs hidden-sm">&#8652;</span>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">To Destination</span>
										<input id="to" name="to" class="form-control" type="text" required>
									</div>
								</div>
							</div>


							<div class="row">
                            
                                 <div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Pick up Date</span>
                                        <input type="date" class="form-control" id="date" name="date" required>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Pick up Time</span>
										<input type="time" class="form-control" id="time" name="time" required>								
									</div>
								</div>
								
								<input id="driver_id" name="driver_id" class="form-control" type='hidden' value= "{{$driver->id}}" >	

                                <div class="col-md-6">
                                  <div class="form-group">
                                     <span class="form-label">Add a Note</span>
							           <textarea class="form-control" rows="3" id="note" name="note"></textarea> 
                                  </div>
                                </div>  
                            
								<div class="col-md-3">
									<div class="form-btn">
                                        <button type="submit" class="submit-btn">
                                            Book
                                        </button>	
									</div>
								</div>

                                <div class="col-md-3">
									<div class="form-btn">									
									<button class="submit-btn" type="reset">Reset</button> 
									</div>									
								</div>
								
								<div class="col-md-3">
									<div class="form-btn">
									<a href="/home" class="stretched-link" >Go to home --></a>	
									</div>
								</div>
								 	                              
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
   
@endsection