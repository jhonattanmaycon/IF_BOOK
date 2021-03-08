
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

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
     <script src="js/html5shiv.min.js"></script>
     <script src="js/respond.min.js"></script>
     <![endif]-->

    </head>
	
    <section class="d-flex flex-column justify-content-center align-items-center">

        <!-- Start: Header Section -->


        <!-- End: Header Section -->

        <!-- Start: Page Banner -->

        <!-- End: Page Banner -->
        <!-- Start: Cart Section -->
        <div id="content" class="site-content">
            <div class="col-md-12">
                <div class="page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="woocommerce table-tabs" id="responsiveTabs">
                            <ul class="nav nav-tabs">
                                <li class="active"><b class="arrow-up"></b><a data-toggle="tab" href="#sectionA">Meus Livros</a></li>
                                <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionB">Para ler (x)</a></li>
                                <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionC">Lidos (0)</a></li>
                                <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionD">Favoritos (x)</a></li>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="sectionA" class="tab-pane fade in active">
                                    <form method="post" action="http://libraria.demo.presstigers.com/cart-page.html">
                                        <table class="table table-bordered shop_table cart">
                                            <thead>
                                                <tr>
                                                    <th class="product-name">&nbsp;</th>
                                                    <th class="product-name">Title</th>
                                                    <th class="product-quantity">Action</th>
                                                    <th class="product-price">Pickup Location </th>
                                                    <th class="product-subtotal">&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    @foreach($books as $book)
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
                                                            <a href="#"><h5>{{ $book->title }}</h5></a>
                                                                <span><strong>Author:</strong> {{ $book->author }}</span>
                                                                <span><strong>Gênero:</strong>{{ $book->genre }}</span>
                                                                <span><strong>Ano:</strong> {{ $book->year }}</span>
                                                                <span><strong>Faixa Etária:</strong> {{ $book->age }}</span>
                                                        </span>
                                                    </td>
                                                    <td data-title="action" class="product-action">
                                                        <div class="dropdown">
                                                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Opções</a>
                                                            <ul class="dropdown-menu">
                                                                 <li><a href="#">Para Ler</a></li>
                                                                    <li><a href="#">Já Lido</a></li>
                                                                    <li><a href="#">Fazer anotações</a></li>
                                                            </ul>
                                                        </div>
                                                       
                                                    </td>
                                                    <td data-title="Price" class="product-price">
                                                        <p>Sua avaliação foi <a href="#">x estrelas</a> <br>
                                                         Para ver suas postagens <a href="#"> Clique aqui </a></p>
                                                    </td>
                                                    <td class="product-remove">
                                                        Este livro foi adicionado dia x/x/x aos Seus livros. <br> <a href="#">Remover</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                               
                                <div id="sectionB" class="tab-pane fade in">
                                    <h5> Ipsum Dolor</h5>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                        suffered alteration in some form, by injected humour, or randomised words which
                                        don't look even slightly believable. If you are going to use a passage of Lorem
                                        Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of
                                        text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                        chunks as necessary, making this the first true generator on the Internet.</p>
                                </div>
                                <div id="sectionC" class="tab-pane fade in">
                                    <h5>Lorem Ipsum Dolor</h5>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                        suffered alteration in some form, by injected humour, or randomised words which
                                        don't look even slightly believable. If you are going to use a passage of Lorem
                                        Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of
                                        text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                        chunks as necessary, making this the first true generator on the Internet.</p>
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
