@extends('layouts.partials.front')
@section('heading',"Others")

@section('content')

<div class="list-group">

    
@forelse($threads as $thread)
@if($thread->type=='Others')
<a href="{{route('thread.show',$thread->id)}}" class="list-group-item">
<p class="list-group-item-text">{{$thread->type}}</p>
<h4 class="list-group-item-heading">{{$thread->subject}}</h4>
<p class="list-group-item-text">{{str_limit($thread->thread,100)}}</p>
</a>

@endif
@empty
<h5>No threads</h5>
@endforelse
</div>
@endsection
