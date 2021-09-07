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
						<a href="#"><h5> Postagem de  <a href="{{route('perfil.explore', ['user'=>$postagem->user_2])}}">{{ $postagem->name}}</a></h5></a><i><h6>{{ $postagem->created_at}}</h6></i></a>
						</span>
						<br>
						<div class="gallery">
							<div class="gallery-item" tabindex="0"  data-toggle="modal" data-target="#meuModal3" onclick="setaDados2Modal('{{$postagem->id}}')">
							<img src="{{ asset('storage/imgposts/' . $postagem->image) }}" width="50%" alt="cart-product-1">
							<a href="#"> <i class="bi bi-heart-fill"> {{$postagem->likes}} &nbsp;&nbsp;&nbsp; </i> <i class="bi bi-chat-fill"> {{$postagem->views}} </i> </a>
							</div>
						</div>
					<br>
					<br>
					</span>

					<span class="product-detail">
						
						<span><strong>"{{ $postagem->message }}"</strong></span>  <br>  <br>
						<a href="{{route('likefeed', ['post_id'=>$postagem->id])}}"><button class="btn btn-success">Curtir</button></a>&nbsp<button  data-toggle="modal" data-target="#meuModal2" class="btn btn-secondary" onclick="setaDadosModal('{{$postagem->id}}')">Comentar</button>
						<br>		<br>		<br>

						<script>
							function setaDadosModal(valor) {
								document.getElementById('campo').value = valor;
							}
						</script>
						
						<script>
							function setaDados2Modal(valor) {
								var campo2 = valor;
							}
						</script>
						
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


	  <div id="meuModal3" class="modal fade" role="dialog">
		<div class="modal-dialog">
	
		  <!-- Conteúdo do modal-->
		  <div class="modal-content">
	
			<!-- Cabeçalho do modal -->
			<div class="modal-header">
				<h4 class="modal-title">Comentários da publicação</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			  </div>
	
			<!-- Corpo do modal -->
			<div>
				<div class="card p-3 mb-2 ">
				  <div class="card-body " >
				  <tbody>
					  @foreach ($dados2 as $postagem)
					  @if($postagem->post_id == 1 )
					  
					  <div class="text-center ">
					  <tr class="cart_item">
	  
					  <td data-title="Product" class="product-name">
						  <span class="inline">
							<a href="#"><h5> Comentário de  <a href="{{route('perfil.explore', ['user'=>$postagem->id])}}">{{ $postagem->name}}</a></h5></a><i><h6> {{ $postagem->created_at}}</h6></i></a>
					 {{--		  </span>
							  <div class="gallery">
								  <div class="gallery-item" tabindex="0" width="1%">
								 <img src="{{ asset('storage/imgposts/' . $postagem->image) }}" width="80%" alt="cart-product-1">
								  <a href="#"> <i class="bi bi-heart-fill"> {{$postagem->likes}} &nbsp;&nbsp;&nbsp; </i> <i class="bi bi-chat-fill"> {{$postagem->views}} </i> </a>
								  </div>
							  </div>
						  </span>
	  --}}

						  <span class="product-detail">
							  <span><strong>"{{ $postagem->text }}"</strong></span> <br>
						  </span>
					  </td>
					  <hr>  <br> 
					  </tr>
	  
						  
				  </div>
				      @endif
					  @endforeach
	  
			</tbody>
		  </div>
		  </div>
		  </div>
		  </div>
	  </div>
			  
			</div>  
		  </div>
	
	

@endsection