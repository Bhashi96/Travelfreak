@extends('layouts.free')

@section('content')
@include('includes.equipment_booking_head')

	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form"> 
                         <h1 class="form-header">Please wait for the comfirmation </h1>
						<!--<div class="form-header">
							<h1>Please wait for the comfirmation !</h1>
						</div>  -->
						
					</div>
				</div>
			</div>
		</div>
	</div>

   


	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
                    <!-- <h1 class="form-header">Service Finiesd</h1> -->
						<div class="form-header">
							<h1>Service Finiesd</h1>
						</div>  
                        <button class="submit-btn"><a href="/feedbackmsg_equipment/{{$equipment->id}}" ><h4>Rate your service</h4></a></button>
						
					</div>
				</div>
			</div>
		</div>
	</div>




@endsection