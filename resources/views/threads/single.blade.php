@extends('layouts.partials.front')


@section('content')

<h3>{{$threads->subject}}</h3>
<br><br>
<h6>{{$threads->type}}</h6>
<hr>

<div class="thread-details">
   <p> {{$threads->thread}}</p>
    </div>

<br>
@if(auth()->user()->id==$threads->user_id)
<div class="actions">
<div class="row">

<a href="{{route('thread.edit',$threads->id)}}" class="btn btn-info btn-xs">Edit</a>


<form action="{{route('thread.destroy',$threads->id)}}" method="POST" class="inline-it">
{{csrf_field()}}
{{method_field('DELETE')}}
<input class="btn btn-xs btn-danger" type="submit" value="delete">
</form>
</div>
</div>

@endif
<br><br><br><br><br><br><br><br><br><br><br><br><br>

@endsection