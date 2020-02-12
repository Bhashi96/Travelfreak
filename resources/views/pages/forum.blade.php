@extends('layouts.defaulthome')


@section('content')
<div class="container mt-3">
<h1>Travelfreak Forum</h1>
<br>



<div class ="row">
     <div class="col-md-3">
          <ul class="list-group">
               <a href ="#" class="list-group-item">
               <span class="badge">14</span>
               All threads
               </a>
               <a href ="#" class="list-group-item">
               <span class="badge">3</span>
               Guides
               </a>
               <a href ="#" class="list-group-item">
               <span class="badge">3</span>
               Drivers
               </a>
               <a href ="#" class="list-group-item">
               <span class="badge">2</span>
               EQP
               </a>
          </ul>
      </div>
      <div class=col-md-9>
     <div class="content-wrap-well">
     <div class="list-group" >

@forelse($threads as $thread)

<a href="#" class="list-group-item">
     <h4 class="list-group-item-heading">{{$thread->subject}}</h4>
     <p class="list-group-item-text">{{str_limit($thread->thread,100)}}</p>
     </a>


@empty
<h5>No threads</h5>
@endforelse
</div>
     </div>
</div>
</div>







  </div>
  <br><br><br><br><br><br><br><br><br><br>
@endsection