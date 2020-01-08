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
						<div class="form-header">
							<h1>Rate your service</h1>
						</div>
						
						<form action="/booking_form/feedback" method="post">
							@csrf 	


							<div class="row">
                            
                                 

								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Rating</span>
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