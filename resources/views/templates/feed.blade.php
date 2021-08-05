@extends('layouts.ifbook')


@section('main-content')

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">


<section class="d-flex flex-column justify-content-center align-items-center">

      <!-- Botão que irá abrir o modal -->
    <button type="button" class="btn btn-success btn-lg mt-2 ml-2" data-toggle="modal" data-target="#meuModal">Fazer publicação</button>

     <!-- Select de posts para o usuario -->
   {{-- @foreach ($posts)
     @if (Auth::user()->hasBook($book->id)) 
    <tr class="cart_item">
      <td data-title="cbox" class="product-cbox">
        <span>
          <input type="checkbox" id="cbox3" value="first_checkbox">
        </span>
      </td>

      <td data-title="Product" class="product-name">
        <span class="product-thumbnail">
          <a href="#"><img src="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}"width="200px" alt="cart-product-1"></a>
        </span>
          <span class="product-detail">
            <a href="#"><h5>{{ $book->title }}</h5></a>
            <span><strong>Author:</strong>{{ $book->author }}</span>
            <span><strong>Gênero:</strong>{{ $book->genre }}</span>
            <span><strong>Ano:</strong> {{ $book->year }}</span>
            <span><strong>Faixa Etária:</strong>{{ $book->age }}</span>
        </span>
      </td>

      <td data-title="action" class="product-action">
        <div class="dropdown">
          <a href="#" data-toggle="dropdown"class="dropdown-toggle">Opções</a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('paraLer', ['book' => $book->id]) }}">Para Ler</a></li>
              <li><a href="{{ route('jaLido', ['book' => $book->id]) }}">Já Lido</a></li>
              <li><a href="{{ route('paraFav', ['book' => $book->id]) }}">Fazer anotações</a></li>
              <li><a href="#">Favoritar</a></li>
            </ul>
        </div>
      </td>

      <td class="product-price">
              <p>Sua avaliação: <a href="#">☆☆☆☆☆</a> <br>
                Ver postagens <a href="#">sobre</a>
              </p>
      </td>

            <td class="product-remove">
              Este livro foi adicionado dia x/x/x aos Seus livros. <br> <a href="{{ route('remove', ['book' => $book->id]) }}">Remover</a>
            </td>

    </tr>

          
  @endif 
    

    @endforeach
                --}}
</section>


@endsection