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
                                <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionD">My eBooks (1)</a></li>
                                <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionE">My Lists</a></li>
                                <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionF">Fines/Fees ($0.00)</a>
                                </li>
                            </ul>
                            <div class="container">    


		
            @if(count($bookuser))
		@for($i = 0; $i < count($bookuser); $i++)
  
		<div class="tab-content container">
			<div id="sectionA" class="tab-pane fade in active">
					<table class="table table-bordered shop_table cart">
						<thead>
							<tr>
								<th class="product-name">Informações</th>
								<th class="product-quantity">Sinópse</th>
								<th class="product-actions">Ações</th>
							</tr>
						</thead>
						<tbody>
							<tr class="cart_item">
								<td data-title="Product" class="product-name">
									<span class="product-thumbnail">
										<a href="#"><img
											src="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}"
											width="200px" alt="cart-product-1"></a>
										</span> <br>
										<span class="product-detail">
											<strong>{{ $book[$i]->title }}</strong> <br>
											<span><strong>Author: </strong>{{ $book[$i]->author }}</span> <br>
											<span><strong>Gênero :</strong> {{ $book[$i]->genre }}</span> <br>
											<span><strong>Ano:</strong>{{ $book[$i]->year }}</span> <br>
											<span><strong>Faixa Etária:</strong>{{ $book[$i]->age }}</span>
										</span>
									</td>
									
									<td data-title="Price" class="product-price">
										{{ $book[$i]->synopsis}}
									</td>
									<td data-title="action" class="product-action">
								
										<a href="{{ route('addbook', ['user'=> Auth::user()->id]) }}"><button>Adicionar</button></a>
									</td>
									@endfor
									@endif
								</div>  
                        

                    
                            {{-- <div class="tab-content">
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
                                                            <a href="#"><strong>The Great Gatsby</strong></a>
                                                            <span><strong>Author:</strong> F. Scott Fitzgerald</span>
                                                            <span><strong>ISBN:</strong> 9781581573268</span>
                                                            <span><strong>Fees:</strong> <em>$10</em></span>
                                                        </span>
                                                    </td>
                                                    <td data-title="action" class="product-action">
                                                        <div class="dropdown">
                                                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Edit
                                                                Hold <b class="caret"></b></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Edit Hold</a></li>
                                                                <li><a href="#">Cancel Hold</a></li>
                                                                <li><a href="#">Add Another Hold</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="addition-action">
                                                            <small>Additional Actions:</small>
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-shopping-cart"
                                                                            aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-heart"
                                                                            aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-search"
                                                                            aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-print"
                                                                            aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td data-title="Price" class="product-price">
                                                        <p><a href="#">Sua avaliação</a> e <a href="#"> Ver mais </a></p>
                                                    </td>
                                                    <td class="product-remove">
                                                        Este livro foi adicionado aos Seus livros. <a href="#">Remova</a>
                                                    </td>
                                                </tr>
                                                <tr class="cart_item">
                                                    <td>
                                                        <span data-title="cbox" class="product-cbox">
                                                            <input type="checkbox" id="cbox1" value="first_checkbox">
                                                        </span>
                                                    </td>
                                                    <td data-title="Product" class="product-name">
                                                        <span class="product-thumbnail">
                                                            <a href="#"><img
                                                                    src="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}"
                                                                    width="200px" alt="cart-product-2"></a>
                                                        </span>
                                                        <span class="product-detail">
                                                            <a href="#"><strong>The Great Gatsby</strong></a>
                                                            <span><strong>Author:</strong> F. Scott Fitzgerald</span>
                                                            <span><strong>ISBN:</strong> 9781581573268</span>
                                                            <span><strong>Fees:</strong> <em>$10</em></span>
                                                        </span>
                                                    </td>
                                                    <td data-title="action" class="product-action">
                                                        <div class="dropdown">
                                                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Edit
                                                                Hold <b class="caret"></b></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Edit Hold</a></li>
                                                                <li><a href="#">Cancel Hold</a></li>
                                                                <li><a href="#">Add Another Hold</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="addition-action">
                                                            <small>Additional Actions:</small>
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-shopping-cart"
                                                                            aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-heart"
                                                                            aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-search"
                                                                            aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-print"
                                                                            aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td data-title="Price" class="product-price">
                                                        <p><a href="#">Sua avaliação</a> e <a href="#"> Ver mais </a></p>
                                                    </td>
                                                    <td class="product-remove">
                                                        Este livro foi adicionado aos Seus livros. <a href="#">Remova</a>
                                                    </td>
                                                </tr>
                                                <tr class="cart_item">
                                                    <td>
                                                        <span data-title="cbox" class="product-cbox">
                                                            <input type="checkbox" id="cbox2" value="first_checkbox">
                                                        </span>
                                                    </td>
                                                    <td data-title="Product" class="product-name">
                                                        <span class="product-thumbnail">
                                                            <a href="#"><img
                                                                    src="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}"
                                                                    width="200px" alt="cart-product-3"></a>
                                                        </span>
                                                        <span class="product-detail">
                                                            <a href="#"><strong>The Great Gatsby</strong></a>
                                                            <span><strong>Author:</strong> F. Scott Fitzgerald</span>
                                                            <span><strong>ISBN:</strong> 9781581573268</span>
                                                            <span><strong>Fees:</strong> <em>$10</em></span>
                                                        </span>
                                                    </td>
                                                    <td data-title="action" class="product-action">
                                                        <div class="dropdown">
                                                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Edit
                                                                Hold <b class="caret"></b></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Edit Hold</a></li>
                                                                <li><a href="#">Cancel Hold</a></li>
                                                                <li><a href="#">Add Another Hold</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="addition-action">
                                                            <small>Additional Actions:</small>
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-shopping-cart"
                                                                            aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-heart"
                                                                            aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-search"
                                                                            aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-print"
                                                                            aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td data-title="Price" class="product-price">
                                                        <p><a href="#">Sua avaliação</a> e <a href="#"> Ver mais </a></p>
                                                    </td>
                                                    <td class="product-remove">
                                                        Este livro foi adicionado aos Seus livros. <a href="#">Remova</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                                <div id="sectionB" class="tab-pane fade in">
                                    <h5>Lorem Ipsum Dolor</h5>
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
                                <div id="sectionE" class="tab-pane fade in">
                                    <h5>Lorem Ipsum Dolor</h5>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                        suffered alteration in some form, by injected humour, or randomised words which
                                        don't look even slightly believable. If you are going to use a passage of Lorem
                                        Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of
                                        text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                        chunks as necessary, making this the first true generator on the Internet.</p>
                                </div>
                                <div id="sectionF" class="tab-pane fade in">
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
                    </div><!-- .entry-content --> --}}
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
