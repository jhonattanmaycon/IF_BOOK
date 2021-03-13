<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
    <!-- Favicon -->
    <link href="images/favicon.ico" rel="icon" type="image/x-icon" />

    <!-- Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i"
    rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Mobile Menu -->
    <link href="css/mmenu.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/mmenu.positioning.css') }}" rel="stylesheet" type="text/css" />

    <!-- Responsive Table -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsivetable.css') }}" />

    <!-- Stylesheet -->
    <link href="{{ asset('assets/css/stylelibrary.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body>
{{--     <a href="{{ route('livros.create') }}"><button>Criar Livro</button></a>
<div class="container">
    @if(count($book))
        @for($i = 0; $i < count($book); $i++)
            <img src="{{asset('capa_imagem/' . $book[$i]->cover)}}" width="150px" alt="">
            <p>Título: {{ $book[$i]->title }}</p>
            <p>Autor: {{ $book[$i]->author}}</p>
            <p>Gênero: {{ $book[$i]->genre }}</p>
            <p>Ano: {{ $book[$i]->year }}</p>
            <p>Faixa Etária: {{ $book[$i]->age }}</p>
            <p>Sinopse: {{ $book[$i]->synopsis }}</p>
            <a href="{{ route('livros.show', ['livro'=>$book[$i]->id]) }}"><button>Ver</button></a> 
            
            <hr>
        @endfor
    @endif
</div> --}}
<section class="d-flex flex-column justify-content-center align-items-center">

     <a href="{{ route('livros.create') }}"><button class="button">Adicionar Livro</button></a>

    <div class="tab-content">
        <div id="sectionA" class="tab-pane fade in active">
            <div class="container">

                <table class="table table-bordered shop_table cart">
                    <thead>
                        <tr>
                            <th class="product-name">&nbsp;</th>
                            <th class="product-name">Obras</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($book as $books)

                        <tr class="cart_item">
                            <td data-title="cbox" class="product-cbox">
                                <span>
                                    <input type="checkbox" id="cbox3" value="first_checkbox">
                                </span>
                            </td>
                            <td data-title="Product" class="product-name">
                                <span class="product-thumbnail">
                                    <a href="#"><img
                                        src="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}"
                                        width="200px" alt="cart-product-1"></a>
                                    </span>
                                    <span class="product-detail">
                                        <a href="#">
                                            <h5>{{ $books->title }}</h5><br>
                                        </a>
                                        <span><strong>Author:</strong>
                                            {{ $books->author }}</span> <br>
                                            <span><strong>Gênero:</strong>{{ $books->genre }}</span><br>
                                            <span><strong>Ano:</strong> {{ $books->year }}</span><br>
                                            <span><strong>Faixa Etária:</strong>
                                                {{ $books->age }}</span><br>
                                            </span>
                                        </td>
                                    </tr>

                                    @endforeach


                                    {{-- Encerrando a tabela que mostra os livros do usuario --}}
                                </tbody>
                            </table>
                        </form>
                        {{$book->links()}}
                    </div>
                </div>
            </div>
        </body>
        </html>
