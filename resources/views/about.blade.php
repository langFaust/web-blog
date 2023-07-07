@extends('layouts.main')

@section('container')
<h1>Ini halaman about</h1>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<img src="img/{{ $img }}" alt="image" width="250px" class="img-thumbnail rounded-circle">

@endsection
