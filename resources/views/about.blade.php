@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <img src="img/{{ $image }}" alt="" class="img-thumbnail rounded-circle mt-5">
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
@endsection
