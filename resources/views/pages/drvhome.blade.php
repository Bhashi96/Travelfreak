@extends('layouts.splayout')

@section('content')
@csrf
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

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
    </style>

	
<link rel="stylesheet" href="//cdn.materialdesignicons.com/3.7.95/css/materialdesignicons.min.css">
<div class="container">


@forelse($drvbooking as $drvbooking)
  @if($drvbooking->driver_id==Auth::user()->id)
      @if($drvbooking->book_flag==0)
      <h5>You have a booking request from{{$drvbooking->tourist_id}}</h5>
      <h6>special note of tourist</h6>
     <h5>{{$drvbooking->note}}</h5>


<div class="actions">
<div class="row">

<form action="{{route('dbookings.update',$drvbooking->id)}}" method="POST" class="inline-it">
{{csrf_field()}}
{{method_field('put')}}

<div class="col-md-6">
<input id="book_flag" type="hidden"  name="book_flag" value="{{ __('1')}}" required autocomplete="">

 </div>


<input class="btn btn-info btn-xs" type="submit" value="Accept">
</form>

<form action="{{route('dbookings.update',$drvbooking->id)}}" method="POST" class="inline-it">
{{csrf_field()}}
{{method_field('put')}}

<div class="col-md-6">
<input id="book_flag" type="hidden"  name="book_flag" value="{{ __('2')}}" required autocomplete="">

 </div>
<input class="btn btn-danger btn-xs" type="submit" value="Reject">
</form>

</div>
</div>

  @endif
  @endif
@empty
<h5>No threads</h5>

@endforelse













      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-4">
                  <div class="border-bottom text-center pb-4">
                    <img src="../img/atharva.jpg" alt="profile" class="img-lg rounded-circle mb-3">
                    <div class="mb-3">
                   
                      <h3>{{Auth::user()->name}}</h3>
                      
                      
                      <div class="d-flex align-items-center justify-content-center">
                        
                        </div>
                      </div>
                      
                    </div> 
                    <p class="w-75 mx-auto mb-3">
                        
                    </p>
                    
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
                      <span class="float-right">
                      {{Auth::user()->drv->age}}
                      </span>
                    </p>
                    <!-- <p class="clearfix">
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
                        <a href="#">  Rs.1000 </a>
                      </span>
                    </p> -->
    
                    
                        <p class="clearfix">
                            <span class="float-left">
                              Vehicle Brand
                            </span>
                            <span class="float-right text-muted">
                              <a href="#">  {{Auth::user()->drv->v_brand}}</a>
                            </span>
                        </p>
                        <p class="clearfix">
                            <span class="float-left">
                              Vehicle Number
                            </span>
                            <span class="float-right text-muted">
                              <a href="#">  {{Auth::user()->drv->v_reg_no}}</a>
                            </span>
                        </p>
                        <img src="../img/kia_soul_EV.jpg" alt="profile" class="img-lg  mb-3">
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
                          Feedback
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="profile-feed">
                    <div class="d-flex align-items-start profile-feed-item">
                      <img src="../img/boy1.jpg" alt="profile" class="img-sm rounded-circle">
                      <div class="ml-4">
                        <h6>
                          Peeter Patel
                         
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
                      <img src="../img/boy2.jpg" alt="profile" class="img-sm rounded-circle">
                      <div class="ml-4">
                        <h6>
                          
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
                          Disha Malhothra
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