@extends('layouts.free')

@section('content')
@include('includes.equipment_booking_head')


@if  ( $booking->book_flag == 0 && $booking->finiesd_flag == 0 )
    

	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form"> 
						<h1 class="form-header">Please wait for the comfirmation </h1>
						
						
					</div>
				</div>
			</div>
		</div>
	</div>

@elseif  ( $booking->book_flag == 1 && $booking->finiesd_flag == 0 )

	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form"> 
						<h1 class="form-header">Booking comfirmed </h1>
					</div>
				</div>
			</div>
		</div>
	</div>

@elseif  ( $booking->book_flag == 0 && $booking->finiesd_flag == 1 )

<div id="booking" class="section">
	<div class="section-center">
		<div class="container">
			<div class="row">
				<div class="booking-form"> 
					<h1 class="form-header" style="color:red;">Sorry ! Equipment provider Reject your booking </h1>
					<h3 class="form-header">Try another equipment provider </h3>
					<a href="/home" class="stretched-link" >Go to home --></a>	
				</div>										
			</div>
		</div>
	</div>
</div>

@elseif  ( $booking->book_flag == 1 && $booking->finiesd_flag == 1 )


	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Service Finiesd</h1>
						</div> 
						<a href="//feedbackmsg_equipment/{{$equipment->id}}" ><button class="submit-btn"><h4>Rate your service</h4></button></a>						
					</div>
				</div>
			</div>
		</div>
	</div>

@endif




@endsection