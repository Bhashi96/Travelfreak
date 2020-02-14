@extends('layouts.defaulthome')

@section('content')
@csrf
<h1> oll</h1>
@include('includes.user_home.tourist_home_nav')
@include('includes.user_home.serch')
@include('includes.user_home.user_home_banner')
<br>

@include('includes.user_home.profile_container')
    <h1> oll</h1>
   
@endsection