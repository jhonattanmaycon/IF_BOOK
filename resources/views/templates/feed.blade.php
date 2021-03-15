@extends('layouts.ifbook')


@section('main-content')

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">


<section class="d-flex flex-column justify-content-center align-items-center">

      <!-- Botão que irá abrir o modal -->
    <button type="button" class="btn btn-success btn-lg mt-2 ml-2" data-toggle="modal" data-target="#meuModal">Fazer publicação</button>


</section>


@endsection