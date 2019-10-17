@extends('layout.layout-base')

@section('content')

  <a href="{{Route('create.post')}}">Crea un post</a>

  @foreach ($posts as $post)


  <div class="box">
    <h3>{{$post -> title}}</h3>
    <p>{{$post -> text}}</p>
  </div>
@endforeach
@endsection
