@extends('layouts.defaulthome')


@section('content')


<div class="container mt-3">
<h1>Travelfreak Forum</h1>

@forelse($threads as $thread)

<a href="#" class="list-group-item">
     <h4 class="list-group-item-heading">{{$thread->subject}}</h4>
     <p class="list-group-item-text">{{str_limit($thread->thread,100)}}</p>
     </a>


@empty
<h5>No threads</h5>
@endforelse
</div>


@endsection