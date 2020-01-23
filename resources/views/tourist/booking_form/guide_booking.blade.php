@extends('layouts.free')

@section('content')
@include('includes.booking_head')


<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					
					<div class="booking-form">
						<div class="form-header">
							<h1>Book your Guide</h1>
						</div>
				
                		<form action="/booking_form/guide_booking" method="post">
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


							<div class="row">
                            
                                 <div class="col-md-6">
									<div class="form-group">
										<span class="form-label">No.of.people</span>
                                        <input type="text" class="form-control" id="nop" name="nop" required>
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