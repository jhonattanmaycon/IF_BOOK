@extends('layouts.ifbook')
@section('main-content')
<section class="d-flex flex-column justify-content-center align-items-center">
	<h1 class="text-white">Explorador</h1>
	
		{{-- <div class="dropdown">
		  <a href="#" data-toggle="dropdown"class="dropdown-toggle">Filtros</a>
			<ul class="dropdown-menu">
			  <li><a href="">&nbsp;&nbsp;Livros</a></li>
			  <li><a href="">&nbsp;&nbsp;Filmes</a></li>
			  <li><a href="">&nbsp;&nbsp;Resenhas</a></li>
			  <li><a href="#">&nbsp;&nbsp;Negociação</a></li>
			</ul>
		</div> --}}

		{{-- <form action="{{ route('explore_filterCategoria') }}" method="post">
			@csrf
			<select name="filterCategoria">

				<option value="escolha">Escolha</option>
				<option value="livro">Livro</option>
				<option value="filme">Filme</option>
				<option value="resenhas">Resenhas</option>
				<option value="negociacao">Negociação</option>

			</select>
			<button type="submit">Enviar</button>
		</form> --}}



		<form action="{{ route('explore_filter') }}" method="post" class="form form-inline">	
    		@csrf
    		<input type="text" name="filter" placeholder="Filtrar" class="form-control">
    		<select name="filterCategoria">

				<option value="zero">Escolha</option>
				<option value="livro">Livro</option>
				<option value="filme">Filme</option>
				<option value="resenhas">Resenhas</option>
				<option value="negociacao">Negociação</option>

			</select>
    		<<button type="submit" class="btn btn-info">Pesquisar</button> 
    	</form>

    
		<div class="col-md-8 mb-3 mt-3" >
		  <div class="card p-3 mb-2 bg-dark text-white p-white ">
			<div class="card-body " >

			<tbody>
				@foreach ($dados as $postagem)
				<div class="text-center ">
				<tr class="cart_item">

				<td data-title="Product" class="product-name">
					<span class="inline">
						<a href="#"><h5>{{ $postagem->id }} <strong>Usuário {{$postagem->name}} </strong></h5></a><i><h6>{{ $postagem->created_at}}</h6></i></a>
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
				@endforeach

	  </tbody>
	</div>
	</div>
	</div>
	</div>
</div>
	  
</section>

@endsection