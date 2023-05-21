@extends('layouts.nav')

@section('title', 'Update conference')

@section('content')
  <form action="{{ route('edit') }}" method="POST">
    @csrf
    <input type="text" name="id" id="id" value="{{ $conference['id'] }}" style="display: none">
    <label for="name"><p>Name</p></label> <br>
    <input type="text" name="name" id="name" value={{ $conference['name'] }}> <br> <br>
    <label for="description"><p>Description</p></label> <br>
    <textarea name="description" id="description" cols="30" rows="10">{{ $conference['description'] }}</textarea> <br> <br>
    <label for="date"><p>Date</p></label> <br>
    <input type="date" name="date" id="date" value={{ $conference['date'] }}> <br> <br>
    <label for="location"><p>Location</p></label> <br>
    <input type="text" name="location" id="location" value={{ $conference['location'] }}> <br> <br>
    <input type="submit" value="Update">
  </form>
  <br>
  <a href="{{ route('home.index') }}">Back</a>
@endsection