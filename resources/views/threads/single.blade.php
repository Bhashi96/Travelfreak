@extends('layouts.partials.front')


@section('content')

<h4>{{$threads->subject}}<h4>
<hr>

<div class="thread-details">
    {{$threads->thread}}
    </div>

@endsection