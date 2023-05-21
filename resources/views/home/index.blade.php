@extends('layouts.nav')

@section('title', 'Home')
    
@section('content')
  <ol>
    @foreach ($conferences as $conference)
      <li>
        <div class="conference-data"></div>
          <h1>{{ $conference['title'] }}</h1>
          <p>{{ $conference['content'] }}</p>
        </div>
        @auth
          <div class="conference-buttons">
            
          </div>
        @endauth
      </li>
    @endforeach
  </ol>
  @auth
    {{-- Add conference button --}}
  @endauth
@endsection

