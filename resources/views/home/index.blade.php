@extends('layouts.nav')

@section('title', 'Home')
    
@section('content')
  <ol>
    @foreach ($conferences as $conference)
      <li>
        <div class="conference-data"></div>
          <h1>{{ $conference['name'] }}</h1>
          <p>{{ $conference['description'] }}</p>
          <p>{{ $conference['location'] }}</p>
          <p>{{ $conference['date'] }}</p>
        </div>
        @auth
          <div class="conference-buttons">
            <a href="{{ route('update', [$conference['id']]) }}">Update</a>
            <a href="{{ route('delete', [$conference['id']]) }}">Remove</a>
          </div>
        @endauth
      </li>
    @endforeach
  </ol>
  @auth
    <a href="{{ route('create') }}">Add conference</a>
  @endauth
@endsection

