@extends('layouts.app')

@section('nav')
  <nav>
    @guest
      <a href="{{ route('login') }}">Login</a>
    @else
      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout ({{ auth()->user()->email }})</a>
        <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none">
          @csrf
        </form>
    @endguest
  </nav>
@endsection