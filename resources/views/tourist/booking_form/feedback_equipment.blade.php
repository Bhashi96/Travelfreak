@extends('layouts.free')

@section('content')
@include('includes.equipment_booking_head')



<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Rate your service </h1>
						</div>
						
						<form action="/booking_form/feedback_equipment" method="post">
						
							@csrf 	


							<div class="row">
                            
                                 

								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Rating {{$equipment->id}}</span> 
										<select class="form-control" name="rate" required>
											<option>1</option>
											<option>2</option>
											<option>3</option>
                                            <option>4</option>
					    					<option>5</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								

                                <div class="col-md-8">
                                  <div class="form-group">
                                     <span class="form-label">Discription</span>
							           <textarea class="form-control" rows="5" id="comment"  name="comment"></textarea> 
                                  </div>
                                </div>

								<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Equipment ID</span>
										<input id="equipment_id" name="equipment_id" class="form-control" value= "{{$equipment->id}}" >
									</div>
									
								</div>
								
							</div>  
								
							 <!--	<div class="col-md-3">
									<div class="form-btn">
                                       <a href="/feedback" class="submit-btn">Book</a> 
                                        <button class="submit-btn" onclick="alert('Request send')"><a href="/user_home" >Submit</a></button>
                                        
										
									</div>
								</div>  -->
								<div class="col-md-3">
									<div class="form-btn">
                                        <button type="submit" class="submit-btn">
                                            Submit
                                        </button>	
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