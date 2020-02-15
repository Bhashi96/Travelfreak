@extends('layouts.default')

@section('content')



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
                <div class="col-lg-8">
                  <div class="border-bottom text-center pb-6">
                    <img src="../images/guide/guide{{$guide->id}}.jpg" alt="profile" class="img-rounded " width="251" height="161"  >
                    <div class="mb-6">
                      <h3>{{ $guide -> name}}</h3>
                      <div class="d-flex align-items-center justify-content-center">
                        <h5 class="mb-0 mr-2 text-muted">{{$guide->area}}</h5>
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
                     
                      <button class="btn btn-success"> 
                        <a href="/guidebooks/{{$guide->id}}" class="btn btn-success btn-lg">Book now</a>
                      </button>
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
                        {{$guide->age}}
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left">
                       Gender
                      </span>
                      <span class="float-right text-muted">
                      {{$guide->gender}}
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left">
                        Charge per day 
                      </span>
                      <span class="float-right text-muted">
                       {{$guide->price}} 
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left">
                        Guide Licence  
                      </span>
                      <span class="float-right text-muted">
                         {{$guide->licence}} 
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left">
                        E-mail  
                      </span>
                      <span class="float-right text-muted">
                         {{$guide->email}} 
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left">
                        Mobile no  
                      </span>
                      <span class="float-right text-muted">
                         {{$guide->contact}} 
                      </span>
                    </p>
                
                      </div>
                      
                    </div>
                </div>
            </div>
           
           
           
            
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

                  @foreach ($rate as $key =>$value)

                    <div class="d-flex align-items-start profile-feed-item">
                      <img src="../img/boy3.jpg" alt="profile" class="img-sm rounded-circle">
                      <div class="ml-4">
                        <h6>
                        {{$rate->tourist_id}} 
                       
                        echo $rate->rate;
                          <small class="ml-4 text-muted"><i class="mdi mdi-clock mr-1"></i>10 hours</small>
                        </h6>
                        <p>
                        {{$rate->comment}} 
                        </p>
                        <p class="small text-muted mt-2 mb-0">
                          <span>
                            <i class="mdi mdi-star mr-1"></i> {{$rate->rate}} 
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

                    @endforeach     
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    

   
@endsection