@extends('layouts.nav')

@section('title', 'Create conference')

@section('content')
  <form action="{{ route('submit') }}" method="POST">
    @csrf
    <label for="name"><p>Name</p></label> <br>
    <input type="text" name="name" id="name"> <br> <br>
    <label for="description"><p>Description</p></label> <br>
    <textarea name="description" id="description" cols="30" rows="10"></textarea> <br> <br>
    <label for="date"><p>Date</p></label> <br>
    <input type="date" name="date" id="date"> <br> <br>
    <label for="location"><p>Location</p></label> <br>
    <input type="text" name="location" id="location"> <br> <br>
    <input type="submit" value="Add">
  </form>
  <br>
  <a href="{{ route('home.index') }}">Back</a>
@endsection