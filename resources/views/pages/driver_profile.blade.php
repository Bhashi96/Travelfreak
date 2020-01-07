@extends('layouts.default')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/font-awesome.min.css"/>
<link rel="stylesheet" href="css/flaticon.css"/>
<link rel="stylesheet" href="css/owl.carousel.css"/>
<link rel="stylesheet" href="css/magnific-popup.css"/>
<link rel="stylesheet" href="css/style.css"/>

<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!--upload image-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



    <style>
        body{margin-top:20px;}

body {
    color: #6c7293;
}

.profile-navbar .nav-item .nav-link {
  color: #6c7293;
}

.profile-navbar .nav-item .nav-link.active {
  color: #464dee;
}

.profile-navbar .nav-item .nav-link i {
  font-size: 1.25rem;
}

.profile-feed-item {
  padding: 1.5rem 0;
  border-bottom: 1px solid #e9e9e9;
}
.img-sm {
    width: 43px;
    height: 43px;
}

.star-rating {
  line-height:32px;
  font-size:1.25em;
}

.star-rating .fa-star{color: yellow;}
.btn-lg {
  width: 250px;
  float: right;
}
}
    </style>

	
<link rel="stylesheet" href="//cdn.materialdesignicons.com/3.7.95/css/materialdesignicons.min.css">
<div class="container">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-4">
                  <div class="border-bottom text-center pb-4">
                    <img src="../img/boy4.jpg" alt="profile" class="img-lg rounded-circle mb-3">
                    <div class="mb-3">
                      <h3>S A M Pathirana</h3>
                      <div class="d-flex align-items-center justify-content-center">
                        <h5 class="mb-0 mr-2 text-muted">2 years of experience</h5>
                        </div>
                      </div>
                       
                      <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="star-rating">
                                      <span class="fa fa-star-o" data-rating="1"></span>
                                      <span class="fa fa-star-o" data-rating="2"></span>
                                      <span class="fa fa-star-o" data-rating="3"></span>
                                      <span class="fa fa-star-o" data-rating="4"></span>
                                      <span class="fa fa-star-o" data-rating="5"></span>
                                      <input type="hidden" name="whatever1" class="rating-value" value="2.56">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="w-75 mx-auto mb-3">
                        
                    </p>
                    <div class="d-flex justify-content-center">
                      <button class="btn btn-success mr-1">Add</button>
                      <button class="btn btn-success">Notifications</button>
                    </div>
                  </div>
                  
                  <div class="border-bottom py-4">
                    <div class="d-flex mb-3">
                      <div class="progress progress-md flex-grow">
                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="55" style="width: 55%" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <div class="d-flex">
                      <div class="progress progress-md flex-grow">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="75" style="width: 75%" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="progress progress-md flex-grow">
                          <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="55" style="width: 55%" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                  </div>
                  
                  <div class="py-4">
                    
                    <p class="clearfix">
                      <span class="float-left">
                        Age
                      </span>
                      <span class="float-right text-muted">
                        33 years
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left">
                        languages 
                      </span>
                      <span class="float-right text-muted">
                        English
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left">
                        Charge per day
                      </span>
                      <span class="float-right text-muted">
                        <a href="#">  Rs.1200 </a>
                      </span>
                    </p>
                
                      </div>
                      
                    </div>
                </div>
            </div>
            <a href="/booking_form/driver_booking" class="btn btn-success btn-lg">Book now</a> 
               <div class="col-lg-8">
                  
                  <div class="mt-4 py-2 border-top border-bottom">
                    <ul class="nav profile-navbar">
                      <li class="nav-item">
                        <a class="nav-link" href="#">
                          <i class="mdi mdi-account-outline"></i>
                          <h6>Feedback</h6>
                          
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="profile-feed">
                    <div class="d-flex align-items-start profile-feed-item">
                      <img src="../img/boy3.jpg" alt="profile" class="img-sm rounded-circle">
                      <div class="ml-4">
                        <h6>
                          James Henry
                          <small class="ml-4 text-muted"><i class="mdi mdi-clock mr-1"></i>10 hours</small>
                        </h6>
                        <p>
                          One of the best drivers I have ever seen in Sri Lanka
                        </p>
                        <p class="small text-muted mt-2 mb-0">
                          <span>
                            <i class="mdi mdi-star mr-1"></i>4
                          </span>
                          <span class="ml-2">
                            <i class="mdi mdi-comment mr-1"></i>11
                          </span>
                          <span class="ml-2">
                            <i class="mdi mdi-reply"></i>
                          </span>
                        </p>
                      </div>
                    </div>
                    <div class="d-flex align-items-start profile-feed-item">
                      <img src="../img/boy1.jpg" alt="profile" class="img-sm rounded-circle">
                      <div class="ml-4">
                        <h6>
                          Logan Reggle
                          <small class="ml-4 text-muted"><i class="mdi mdi-clock mr-1"></i>10 hours</small>
                        </h6>
                        <p>
                            It's superb
                        </p>                            
                        <p class="small text-muted mt-2 mb-0">
                          <span>
                            <i class="mdi mdi-star mr-1"></i>4
                          </span>
                          <span class="ml-2">
                            <i class="mdi mdi-comment mr-1"></i>11
                          </span>
                          <span class="ml-2">
                            <i class="mdi mdi-reply"></i>
                          </span>
                        </p>
                      </div>
                    </div>
                    <div class="d-flex align-items-start profile-feed-item">
                      <img src="../img/girl1.jpg" alt="profile" class="img-sm rounded-circle">
                      <div class="ml-4">
                        <h6>
                          Cristina Shanel
                          <small class="ml-4 text-muted"><i class="mdi mdi-clock mr-1"></i>10 hours</small>
                        </h6>
                        <p>
                          Superb service. Keep it up!
                        </p>
                                                                                
                        <p class="small text-muted mt-2 mb-0">
                          <span>
                            <i class="mdi mdi-star mr-1"></i>4
                          </span>
                          <span class="ml-2">
                            <i class="mdi mdi-comment mr-1"></i>11
                          </span>
                          <span class="ml-2">
                            <i class="mdi mdi-reply"></i>
                          </span>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    

 
 
   
@endsection