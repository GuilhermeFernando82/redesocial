@extends('layouts.forum')

@section('content')

<div class="container">
	<form method="POST" action="{{ route('sistem.store') }}">
		{{ csrf_field() }}
		<div class="form-group">
		<center><label for="exampleInputEmail1">Titulo</label></center>
		<input type="text" class="form-control" id="exampleInputEmail1" name="titulo" aria-describedby="emailHelp" placeholder="Enter title">
		</div>
		<textarea id="#" name="pb"></textarea>
		<center><button type="submit" class="btn btn-primary mt-3">Publicar</button></center>
	</form>
</div>
@foreach ( $posttable as $i )
<center>
<h1>{{ $i->titulo }}</h1>
<h6>{!!$i->publications!!}</h6>
<p>Publicado por: {{ $i->nome_user }}</p>
<center>
@endforeach
  <center>
    <form method="POST" action="{{ route('coment.store') }}">
    {{ csrf_field() }}
    <input type="text" class="form-control col-8"  placeholder="Escreva um comentario" name="coment">
    <button type="submit" class="btn btn-primary mt-3">Comentar</button>
    </form>
  <center>
@foreach($comentary as $i)
	<p>Usuário: {{$i->nome_user}} Comentou:</p>
	<h3>{{$i->coment}}</h3>
@endforeach
</div>
@endsection


  