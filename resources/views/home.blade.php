@extends('layouts.univ')

@section('title', 'Home')


@section('content')


  @if (session('status'))
  <h2>Selamat Datang</h2>
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>

  @endif


@endsection
