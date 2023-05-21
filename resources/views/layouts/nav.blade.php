@extends('layouts.app')

@section('nav')
  <nav>
    <p>Home</p>
    @guest
    <p>Log In</p>
    @endguest
    @auth
    <p>Log Out</p>   
    @endauth
  </nav>
@endsection