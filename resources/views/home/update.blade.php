@extends('layouts.nav')

@section('title', 'Update conference')

@section('content')
  <form action="{{ route('edit') }}" method="POST">
    @csrf
    <input type="text" name="id" id="id" value="{{ $conference['id'] }}" style="display: none">
    <label for="name"><p>Name</p></label>
    <input type="text" name="name" id="name" value={{ $conference['name'] }}>
    <label for="description"><p>Description</p></label>
    <textarea name="description" id="description" cols="30" rows="10">{{ $conference['description'] }}</textarea>
    <label for="date"><p>Date</p></label>
    <input type="date" name="date" id="date" value={{ $conference['date'] }}>
    <label for="location"><p>Location</p></label>
    <input type="text" name="location" id="location" value={{ $conference['location'] }}>
    <input type="submit" value="Update">
  </form>
@endsection