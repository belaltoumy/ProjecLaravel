@extends('layout')
@section('content')
<h1>courses</h1>
   @foreach($user->usercourse  as $course)
   <ul>
   <p> {{$course->course->name}} </p>
    <p> {{$course->course->discreption}} </p>
    <a href="#"> show</a>
    <hr/>
   </ul>

   @endforeach
@endsection
