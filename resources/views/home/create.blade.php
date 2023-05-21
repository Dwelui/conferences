@extends('layouts.nav')

@section('title', 'Create conference')

@section('content')
  <form action="{{ route('create') }}" method="POST">
    @csrf
    <label for="name"><p>Name</p></label>
    <input type="text" name="name" id="name">
    <label for="desc"><p>Description</p></label>
    <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
    <label for="date"><p>Date</p></label>
    <input type="date" name="date" id="date">
    <label for="location"><p>Location</p></label>
    <input type="text" name="location" id="location">
    <input type="submit" value="Add">
  </form>
@endsection