@extends('layouts.partials.front')
@section('heading',"Edit Addvertisement")
@section('content')

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

<form method="POST" class="form-vertical" role="form" action="{{ route('thread.update',$threads->id) }} ">
                       {{csrf_field()}}
                       {{method_field('put')}}
				  <div class="form-group">
				    <label for="InputSubject">Heading</label>
				    <input type="text" class="form-control" id="InputSubject" name="subject" aria-describedby="subHelp" placeholder="Enter subject" value="{{$threads->subject}}">
				    <small id="subHelp" class="form-text text-muted">guide,driver,eqp.</small>
				  </div>
				  <div class="form-group row">
                            <label for="type" class="col-md-6 col-form-label text-md-left">{{ __('Catogery') }}</label>

                            <div class="col-md-12">
                            <select id="inputid" class="form-control" name="type">
                                        <option selected>Apartments</option>
                                        <option>Vehicles</option>
                                        <option>Lands</option>
                                        <option>Equipments</option>
                                    </select>
                            </div>
           </div>
				  <div class="form-group">
				    <label for="inputthread">Description</label>
				    <input type="textarea" class="form-control" id="inputthread" name="thread" aria-describedby="emailHelp" placeholder="Enter thread" value="{{$threads->thread}}">
				    <small id="threadHelp" class="form-text text-muted"></small>
				  </div>
				  
                    <button type="submit" class="btn btn-primary"  >Edit</button>
                    <br><br><br><br><br><br><br><br><br>
				</form>


@endsection