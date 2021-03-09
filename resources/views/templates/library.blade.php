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
                                <li class="active"><b class="arrow-up"></b><a data-toggle="tab" href="#sectionA">Meus Livros</a></li>
                                <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionB">Para Ler</a></li>
                                <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionC">Já Lidos</a></li>
                            </ul>



                            <div class="tab-content">
                                <div id="sectionA" class="tab-pane fade in active">
                                    <form method="post" action="http://libraria.demo.presstigers.com/cart-page.html">
                                        <table class="table table-bordered shop_table cart">
                                            <thead>
                                                <tr>

                                                    <th class="product-name">Informações</th>
                                                    <th class="product-quantity">Ações</th>
                                                    <th class="product-price">Sua Avaliação</th>
                                                    <th class="product-subtotal">&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($books as $book)
                                                <tr class="cart_item">

                                                    <td data-title="Product" class="product-name">
                                                        <div class="row">
                                                        <span class="product-thumbnail">
                                                            <a href="#"><img
                                                                src="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}"
                                                                width="200px" alt="cart-product-1"></a>
                                                            </span>
                                                            <span class="product-detail">
                                                                <a href="#"><strong>{{ $book->title }}</strong></a>
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
                                                                    <li><a href="#">Para Ler</a></li>
                                                                    <li><a href="#">Já Lido</a></li>
                                                                    <li><a href="#">Ver Livro</a></li>
                                                                    <li><a href="#">Excluir</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                            <td class="product-action">
                                                                
                                                             <a href="#">Escreva a sua avaliação sobre este livro.</a>

                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        {{-- Encerrando a tabela que mostra os livros do usuario --}}

                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                        {{-- Sessão para os livros para ler --}}
                                        <div id="sectionB" class="tab-pane fade in">

                                        </div>
                                        {{-- Sessão para os livros já lidos  --}}
                                        <div id="sectionC" class="tab-pane fade in">
                                            
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
