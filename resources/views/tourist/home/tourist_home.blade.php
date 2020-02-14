@extends('layouts.defaulthome')

@section('content')
@csrf
@include('includes.user_home.user_home_banner')
@include('includes.user_home.serch')
<br>

@include('includes.user_home.profile_container')
    <h1> olll</h1>
   
@endsection