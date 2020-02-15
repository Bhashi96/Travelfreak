@extends('layouts.free')

@section('content')
@include('includes.equipment_booking_head')


<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					
					<div class="booking-form">
						<div class="form-header">
							<h1>Book your Guides  </h1>
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
						
						<!-- /booking_form/guide_booking -->
                		<form action="{{route('equipmentbooking.create')}}" method="put">
							@csrf  
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Start date</span>
										<input id="start_date" name="start_date" class="form-control" type="date" required>
									</div>
									<span class="in-out hidden-xs hidden-sm">&#8652;</span>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">End date</span>
										<input id="end_date" name="end_date" class="form-control" type="date" required>
									</div>
								</div>
							</div>
							
								
							<input id="equipment_id" name="equipment_id" class="form-control" type='hidden' value= "{{$equipment->id}}" >

							<div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                     <span class="form-label">Add a Note</span>
							           <textarea class="form-control" rows="3" id="note" name="note"></textarea> 
									  
                                  </div>
                                </div> 

								 @error('note')
									   <b>Error</b>
									   @enderror 
                            
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