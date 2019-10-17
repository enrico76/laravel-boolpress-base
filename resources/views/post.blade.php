@extends('layout.layout-base')

@section('content')
  <h1>nome categoria: {{$post -> category -> name}}</h1>

  <div class="box">
    <h3>{{$post -> title}}</h3>
    <p>{{$post -> text}}</p>

  </div>
@endsection
