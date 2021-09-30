@extends('layouts.ifbook')
@section('main-content')
<section class="d-flex flex-column justify-content-center align-items-center">
	<div class="row text-center">
	<form action="{{ route('explore_filter') }}" method="post" class="form form-inline">	
		@csrf
		<input type="text" name="filter" placeholder="Filtrar texto" class="form-control">
		<select class="form-select form-select-sm" size="1" name="filterCategoria">

			<option value="zero">Escolha</option>
			<option value="livro">Livro</option>
			<option value="filme">Filme</option>
			<option value="resenhas">Resenhas</option>
			<option value="negociacao">Negociação</option>

		</select>
		<button type="submit" class="btn btn-info text-center">Pesquisar</button> 
	</form>
</div>

    
		<div class="col-md-8 mb-3 mt-3" >
		  <div class="card p-3 mb-2 bg-dark text-white p-white ">
			<div class="card-body " >

			<tbody>
				@foreach ($dados as $postagem)

				<div class="text-center ">
				<tr class="cart_item">

				<td data-title="Product" class="product-name">
					<span class="inline">
						<a href="{{route('posts.view', ['post'=>$postagem->id])}}"><h5> Postagem de {{ $postagem->name}}</h5></a><i><h6>{{ $postagem->created_at}}</h6></i></a>
						</span>
						<br>
						<div class="gallery">
							<div class="gallery-item" tabindex="0" data-toggle="modal" data-target="#meuModal3" onclick="setaDados2Modal('{{$postagem->id}}')">
							<img src="{{  asset('storage/imgposts/' . $postagem->image) }}"  width="25%" alt="cart-product-1" >
							<a href="{{route('posts.view', ['post'=>$postagem->id])}}" target="_blank"> <i class="bi bi-heart-fill"> {{$postagem->likes}} &nbsp;&nbsp;&nbsp; </i> <i class="bi bi-chat-fill"> {{$postagem->views}} </i> </a>
							{{--<a href="#"> <i class="bi bi-heart-fill"> {{$postagem->contlike($postagem->id)}} &nbsp;&nbsp;&nbsp; </i> <i class="bi bi-chat-fill"> {{$postagem->contcomment($postagem->id)}} </i> </a>--}}
							</div>
						</div>
					<br>
					<br>
					</span>

					<span class="product-detail">
						
						<span><strong>"{{ $postagem->message }}"</strong></span>  <br>  <br>

						
					

						{{-- 
						@unless($verification->post_id == $postagem->id)
						@if($verification>0)
						<a href="{{route('like', ['post_id'=>$postagem->id])}}"><button class="button">Descurtir</button></a><button class="form-group col-md-3 box-border">Comentar</button>
						@endif
						@endunless
						--}}



						
						{{-- @foreach ($curtiu as $curtiu)
						<a class="btn btn-success" href="{{route('like', ['post_id'=>$postagem->id])}}">
							 @if ($curtiu == $postagem->id)
								Descurtir
							@else 
								Curtir
							@endif

						@endforeach 
									 --}}
						</a> 	
							&nbsp
						<button data-toggle="modal" data-target="#meuModal2" class="btn btn-secondary" onclick="setaDadosModal('{{$postagem->id}}')">
						Comentar
						</button>

						<br>		<br>							<hr>	<br>
						
						<script>
							function setaDadosModal(valor) {
								document.getElementById('campo').value = valor;
							}
						</script>

						<script>
							function setaDados2Modal(valor) {
								var campo2 = valor;
								$('h4 span').html(campo2);
							}
						</script>

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

<div id="meuModal2" class="modal fade" role="dialog">
	<div class="modal-dialog">

	  <!-- Conteúdo do modal-->
	  <div class="modal-content">

		<!-- Cabeçalho do modal -->
		<div class="modal-header">
            <h4 class="modal-title">Fazer comentário</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

		<!-- Corpo do modal -->
		<form action="{{route('comments.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="text-center">
              <img id="output" width="250px">
              <label for="cover">Adicionar foto</label>
              <input type="file" accept="image/*" class="form-control" name="image" onchange="loadFile(event)">
            </div>

			<input style="visibility: hidden" type='text' readonly  id="campo" name="post" value="campo">

            <div class="text-center">
            <label for="w3review"></label>
            <textarea id="message" name="message" rows="4" cols="55"  minlength="1" maxlength="150" placeholder="Digite aqui o seu comentário..." required></textarea>
            </div>


			

           
            <!-- Rodapé do modal-->
              <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              <input type="submit"class="btn btn-success" value="Enviar">
          
              </div>
            
           </form>
		  
		</div>  
	  </div>
	</div>

	
	
			  
			  
			</div>  
		  </div>

@endsection