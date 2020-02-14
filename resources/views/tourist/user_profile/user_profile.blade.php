@extends('layouts.without_footer')

@section('content')
@csrf
@include('includes.user_home.tourist_home_nav')

<br><br><br><br><br>
<div class="container">
    <div class="span3 well">
        <center>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="uploads/{{ $user->image_path}}" name="aboutme" width="300" height="300" class="img-circle"></a>
        <h3>{{ $user->name}}</h3>
        <em></em>
		   </center>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                      <h4 class="modal-title" id="myModalLabel"></h4>
                    </div>
                <div class="modal-body">
                    <center>
                    <img src=images/tourist/tourist{{Auth::user()->id}}.jpg" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                    <h3 class="media-heading"> {{ $user->name}}</h3>
                    <hr>
                    <span><strong>Country: </strong></span>
                    <span class="label label-warning">{{ $user->country}}</span>                      
                    </center>
                    <hr>
                    <center>
                    <span><strong>E-mail:  </strong></span>
                    <span class="label label-warning">{{ $user->email}}</span>
                    </center>
                    <hr>
                    <center>
                    <span><strong>Mobile:  </strong></span>
                    <span class="label label-warning">{{ $user->cotact}}</span>
                    </center>
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection