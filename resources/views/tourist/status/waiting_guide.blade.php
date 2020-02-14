@extends('layouts.free')

@section('content')

<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/bootstrap.miin.css">
<link rel="stylesheet" href="../css/style.css">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Cardo:700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">




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
                        <button class="submit-btn"><a href="/feedbackmsg_guide/{{$guide->id}}" ><h4>Rate your service</h4></a></button>
						
					</div>
				</div>
			</div>
		</div>
	</div>




@endsection