@extends('layouts.ifbook')


@section('main-content')

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">


<section class="d-flex flex-column justify-content-center align-items-center">

      <!-- Botão que irá abrir o modal -->
    <button type="button" class="btn btn-success btn-lg mt-2 ml-2" data-toggle="modal" data-target="#meuModal">Fazer publicação</button>

     <!-- Select de posts para o usuario -->
     <div class="col-md-8 mb-3 mt-3" >
		  <div class="card p-3 mb-2 bg-dark text-white p-white ">
			<div class="card-body " >

			<tbody>
				@foreach ($dados as $postagem)
        		{{--@if ($user->segue($user)) --}}
				
				<div class="text-center ">
				<tr class="cart_item">

				<td data-title="Product" class="product-name">
					<span class="inline">
						<a href="#"><h5><strong>{{ $postagem->user_2}}Usuário </strong>{{ $postagem->name}} </h5></a><i><h6>{{ $postagem->created_at}}</h6></i></a>
						</span>
						<br>
						<div class="gallery">
							<div class="gallery-item" tabindex="0">
							<img src="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}" class="gallery-image" width="200px" alt="cart-product-1">
							<a href="#"> <i class="bi bi-heart-fill"> {{$postagem->likes}} &nbsp;&nbsp;&nbsp; </i> <i class="bi bi-chat-fill"> {{$postagem->views}} </i> </a>
							</div>
						</div>
					<br>
					<br>
					</span>

					<span class="product-detail">
						
						<span><strong>"{{ $postagem->message }}"</strong></span>  <br>  <br>
						<button class="form-group col-md-3 box-border">Curtir</button><button class="form-group col-md-3 box-border">Comentar</button>
						<br>		<br>		<br>
						
					</span>
				</td>

				<td data-title="action" class="product-action">
					
				</td>

				

				</tr>

					
			</div class="container">
     {{--  @endif--}}
				@endforeach

	  </tbody>
	</div>
	</div>
	</div>
	</div>
</div>
</section>


@endsection