@extends('layouts.menu')


@section('menu')
	@section('username',  '{{$user->name }}')
@endsection

<section class="d-flex flex-column justify-content-center align-items-center">
	<h1 > Sessão para o Biblioteca	</h1>
</section>