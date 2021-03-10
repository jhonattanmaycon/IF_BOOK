
@extends('layouts.ifbook')

@section('main-content')

<head>
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
    <link href="{{ asset('assets/css/stylelibrary.css') }}" rel="stylesheet" type="text/css" />

</head>

<section class="d-flex flex-column justify-content-center align-items-center">

    <a href="{{ route('getbook') }}"><button class="button">Adicionar Livro</button></a>

    <div id="content" class="site-content">
        <div class="col-md-12">
            <div class="page type-page status-publish hentry">
                <div class="entry-content">
                    <div class="woocommerce table-tabs" id="responsiveTabs">
                        <ul class="nav nav-tabs">
                            <li class="active"><b class="arrow-up"></b><a data-toggle="tab" href="#sectionA">Meus Livros({{ Auth::user()->countBooks() }})</a></li>
                            <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionB">Para ler ({{ Auth::user()->countToRead() }})</a></li>
                            <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionC">Lidos ({{ Auth::user()->countRead() }})</a></li>
                            <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionD">Favoritos (x)</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="sectionA" class="tab-pane fade in active">
                                <form method="post" action="http://libraria.demo.presstigers.com/cart-page.html">
                                 
                                    <table class="table table-bordered shop_table cart">
                                        <thead>
                                            <tr>
                                                <th class="product-name">&nbsp;</th>
                                                <th class="product-name">Obras</th>
                                                <th class="product-quantity">Ações</th>
                                                <th class="product-price">Notas</th>
                                                <th class="product-subtotal">&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                    
                                            @foreach($books as $book) 
                                            @if(Auth::user()->hasBook($book->id))
                                            <tr class="cart_item">
                                                <td data-title="cbox" class="product-cbox">
                                                    <span>
                                                        <input type="checkbox" id="cbox3" value="first_checkbox">
                                                    </span>
                                                </td>
                                                <td data-title="Product" class="product-name">
                                                    <div class="row">
                                                        <span class="product-thumbnail">
                                                            <a href="#"><img
                                                                src="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}"
                                                                width="200px" alt="cart-product-1"></a>
                                                            </span>
                                                            <span class="product-detail">
                                                                <a href="#"><h5>{{ $book->title }}</h5></a>
                                                                <span><strong>Author:</strong> {{ $book->author }}</span>
                                                                <span><strong>Gênero:</strong>{{ $book->genre }}</span>
                                                                <span><strong>Ano:</strong> {{ $book->year }}</span>
                                                                <span><strong>Faixa Etária:</strong> {{ $book->age }}</span>

                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td data-title="action" class="product-action">
                                                        <div class="dropdown">
                                                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Opções</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="{{ route('toRead', ['book'=> $book->id]) }}">Para Ler</a></li>
                                                                <li><a href="#">Já Lido</a></li>
                                                                <li><a href="#">Fazer anotações</a></li>
                                                            </ul>
                                                        </div>

                                                    </td>
                                                    <td class="product-price">
                                                        <p>Sua avaliação foi <a href="#">x estrelas</a> <br>
                                                           Para ver suas postagens <a href="#"> Clique aqui </a></p>
                                                       </td>
                                                       <td class="product-remove">
                                                        Este livro foi adicionado dia x/x/x aos Seus livros. <br> <a href="{{ route('remove', ['book'=> $book->id])}}">Remover</a>
                                                    </td>
                                                </tr>
                                                @else
                                                    <h1> Você não possui nenhum livro. Cliquem em 'Adicionar Livro e escolha um do seu agrado :)' </h1>
                                                @endif
                                                @endforeach
                                                {{-- Encerrando a tabela que mostra os livros do usuario --}}
                                            </tbody>
                                        </table>
                                    </form>
                                </div>



                                {{-- SESSÂO PARA LER --}}

                                <div id="sectionB" class="tab-pane fade in">
                                   <table class="table table-bordered shop_table cart">
                                        <thead>
                                            <tr>
                                                <th class="product-name">&nbsp;</th>
                                                <th class="product-name">Obras</th>
                                                <th class="product-quantity">Ações</th>
                                                <th class="product-price">Notas</th>
                                                <th class="product-subtotal">&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                    
                                            @foreach($books as $book) 
                                            @if(Auth::user()->toRead($book->id))
                                            <tr class="cart_item">
                                                <td data-title="cbox" class="product-cbox">
                                                    <span>
                                                        <input type="checkbox" id="cbox3" value="first_checkbox">
                                                    </span>
                                                </td>
                                                <td data-title="Product" class="product-name">
                                                    <div class="row">
                                                        <span class="product-thumbnail">
                                                            <a href="#"><img
                                                                src="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}"
                                                                width="200px" alt="cart-product-1"></a>
                                                            </span>
                                                            <span class="product-detail">
                                                                <a href="#"><h5>{{ $book->title }}</h5></a>
                                                                <span><strong>Author:</strong> {{ $book->author }}</span>
                                                                <span><strong>Gênero:</strong>{{ $book->genre }}</span>
                                                                <span><strong>Ano:</strong> {{ $book->year }}</span>
                                                                <span><strong>Faixa Etária:</strong> {{ $book->age }}</span>

                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td data-title="action" class="product-action">
                                                        <div class="dropdown">
                                                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Opções</a>
                                                            <ul class="dropdown-menu">
                                                                
                                                                <li><a href="{{ route('read', ['book'=> $book->id]) }}">Já Lido</a></li>
                                                            </ul>
                                                        </div>

                                                    </td>
                                                    <td class="product-price">
                                                        <p>Sua avaliação foi <a href="#">x estrelas</a> <br>
                                                           Para ver suas postagens <a href="#"> Clique aqui </a></p>
                                                       </td>
                                                       <td class="product-remove">
                                                        Este livro foi adicionado dia x/x/x aos Seus livros. <br> <a href="{{ route('remove_toRead', ['book'=> $book->id])}}">Remover</a>
                                                    </td>
                                                </tr>
                                                
                                                @endif
                                                @endforeach
                                                {{-- Encerrando a tabela que mostra os livros do usuario --}}
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                                </div>
                                <div id="sectionC" class="tab-pane fade in">
                                    <div id="sectionB" class="tab-pane fade in">
                                   <table class="table table-bordered shop_table cart">
                                        <thead>
                                            <tr>
                                                <th class="product-name">&nbsp;</th>
                                                <th class="product-name">Obras</th>
                                                <th class="product-quantity">Ações</th>
                                                <th class="product-price">Notas</th>
                                                <th class="product-subtotal">&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                    
                                            @foreach($books as $book) 
                                            @if(Auth::user()->read($book->id))
                                            <tr class="cart_item">
                                                <td data-title="cbox" class="product-cbox">
                                                    <span>
                                                        <input type="checkbox" id="cbox3" value="first_checkbox">
                                                    </span>
                                                </td>
                                                <td data-title="Product" class="product-name">
                                                    <div class="row">
                                                        <span class="product-thumbnail">
                                                            <a href="#"><img
                                                                src="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}"
                                                                width="200px" alt="cart-product-1"></a>
                                                            </span>
                                                            <span class="product-detail">
                                                                <a href="#"><h5>{{ $book->title }}</h5></a>
                                                                <span><strong>Author:</strong> {{ $book->author }}</span>
                                                                <span><strong>Gênero:</strong>{{ $book->genre }}</span>
                                                                <span><strong>Ano:</strong> {{ $book->year }}</span>
                                                                <span><strong>Faixa Etária:</strong> {{ $book->age }}</span>

                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td data-title="action" class="product-action">
                                                        <div class="dropdown">
                                                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Opções</a>
                                                            <ul class="dropdown-menu">
                                                                
                                                                <li><a href="#">Favoritar</a></li>
                                                                <li><a href="#">Avaliação</a></li>
                                                            </ul>
                                                        </div>

                                                    </td>
                                                    <td class="product-price">
                                                        <p>Sua avaliação foi <a href="#">x estrelas</a> <br>
                                                           Para ver suas postagens <a href="#"> Clique aqui </a></p>
                                                       </td>
                                                       <td class="product-remove">
                                                        Este livro foi adicionado dia x/x/x aos Seus livros. <br> <a href="{{ route('remove_read', ['book'=> $book->id])}}">Remover</a>
                                                    </td>
                                                </tr>
                                                
                                                @endif
                                                @endforeach
                                </div>
                                <div id="sectionD" class="tab-pane fade in">
                                    <h5>Lorem Ipsum Dolor</h5>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                        suffered alteration in some form, by injected humour, or randomised words which
                                        don't look even slightly believable. If you are going to use a passage of Lorem
                                        Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of
                                        text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                    chunks as necessary, making this the first true generator on the Internet.</p>
                                </div>

                            </div>
                        </div>
                    </div><!-- .entry-content -->
                </div>
            </div>
        </div>
    </div>
</div>
</main>
</div>
</div>
<!-- End: Cart Section -->

<!-- Start: Social Network -->

<!-- End: Social Network -->

<!-- Start: Footer -->

<!-- jQuery Latest Version 1.x -->
<script type="text/javascript" src="{{ asset('assets/jslibrary/jquery-1.12.4.min.js') }}"></script>

<!-- jQuery UI -->
<script type="text/javascript" src="{{ asset('assets/jslibrary/jquery-ui.min.js') }}"></script>

<!-- jQuery Easing -->
<script type="text/javascript" src="{{ asset('assets/jslibrary/jquery.easing.1.3.js') }}"></script>

<!-- Bootstrap -->
<script type="text/javascript" src="{{ asset('assets/jslibrary/bootstrap.min.js') }}"></script>

<!-- Mobile Menu -->
<script type="text/javascript" src="{{ asset('assets/jslibrary/mmenu.min.js') }}"></script>

<!-- Harvey - State manager for media queries -->
<script type="text/javascript" src="{{ asset('assets/jslibrary/harvey.min.js') }}"></script>

<!-- Waypoints - Load Elements on View -->
<script type="text/javascript" src="{{ asset('assets/jslibrary/waypoints.min.js') }}"></script>

<!-- Facts Counter -->
<script type="text/javascript" src="{{ asset('assets/jslibrary/facts.counter.min.js') }}"></script>

<!-- MixItUp - Category Filter -->
<script type="text/javascript" src="{{ asset('assets/jslibrary/mixitup.min.js') }}"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="{{ asset('assets/jslibrary/owl.carousel.min.js') }}"></script>

<!-- Accordion -->
<script type="text/javascript" src="{{ asset('assets/jslibrary/accordion.min.js') }}"></script>

<!-- Responsive Tabs -->
<script type="text/javascript" src="{{ asset('assets/jslibrary/responsive.tabs.min.js') }}"></script>

<!-- Responsive Table -->
<script type="text/javascript" src="{{ asset('assets/jslibrary/responsive.table.min.js') }}"></script>

<!-- Masonry -->
<script type="text/javascript" src="{{ asset('assets/jslibrary/masonry.min.js') }}"></script>

<!-- Carousel Swipe -->
<script type="text/javascript" src="{{ asset('assets/jslibrary/carousel.swipe.min.js') }}"></script>

<!-- bxSlider -->
<script type="text/javascript" src="{{ asset('assets/jslibrary/bxslider.min.js') }}"></script>

<!-- Custom Scripts -->
<script type="text/javascript" src="{{ asset('assets/jslibrary/main.js') }}"></script>


</section>
@endsection
