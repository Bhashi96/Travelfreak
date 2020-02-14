@extends('layouts.defaulthome')


@section('content')
<div class="container mt-3">
<h1>Travelfreak Forum</h1>
<br>
<!--<div class="row">
     <div class="row content heading">
          <div class="col-md-3"><h4>category</h4></div>
          <div class="col-md-9">
               <div classs ="row">
                    <div class="col-md-4"><h4 class="main-content-heading">threads</h4></div>
                    <div class="col-md-offset-6 col-md-2">
                         <a class="btn btn-primary" href="{{route('forum.create')}}">create Thread</a>
                    </div>
                </div>
           </div>
      </div>
</div>-->

<div class="row">
     
                     <div class="col-md-3"><h4>category</h4></div>
                    <div class="col-md-4"><h4 class="main-content-heading">Threads</h4></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-2 ">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createthreat">create Thread</button>
                    </div>   
</div>
<!--href="{{route('forum.create')}}"-->

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

  <div class="modal fade" data-keyboard="false" aria-hidden="true" data-backdrop="static" tabindex="-1" id="createthreat" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Create thret</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          @if (count($errors)>0)
               <div class="alert alert-danger">
               <ul>
               @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
               @endforeach
               </ul>
               </div>
          @endif

          @if(session('message'))
          <div class="alert alert-sucess">
          {{session('message')}}
          </div>
          @endif


        <!-- Modal Body -->
				<form method="POST" class="form-horizontal" role="form" action="{{ route('forum.store') }} ">
                        @csrf
				  <div class="form-group">
				    <label for="InputSubject">Subjects</label>
				    <input type="text" class="form-control" id="InputSubject" name="subject" aria-describedby="subHelp" placeholder="Enter subject" value="{{old('subject')}}">
				    <small id="subHelp" class="form-text text-muted">guide,driver,eqp.</small>
				  </div>
				  <div class="form-group">
				    <label for="InputType">Type</label>
				    <input type="text" class="form-control" id="InputType"name=type placeholder="Enter type" value="{{old('type')}}">
				  </div>
				  <div class="form-group">
				    <label for="inputthread">Thread</label>
				    <input type="text" class="form-control" id="inputthread" name="thread" aria-describedby="emailHelp" placeholder="Enter thread" value="{{old('thread')}}">
				    <small id="threadHelp" class="form-text text-muted"></small>
				  </div>
				  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" data-backdrop="static" data-keyboard="false">Create</button>
      </div>
				</form>
      </div>
     
    </div>
  </div>
</div>


  <br><br><br><br><br><br><br><br><br><br>
@endsection