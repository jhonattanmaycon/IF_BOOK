<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Livros</title>
	<!-- Favicon -->
	<link href="images/favicon.ico" rel="icon" type="image/x-icon" />

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i"
	rel="stylesheet" />
	<link href="{{ asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />

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

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

</head>






<body>
	
	<section class="page-banner services-banner " >
		<div class="container">
			<div class="banner-header">
				<h2>Biblioteca - IFBOOK</h2>
				<span class="underline center"></span>
				<p class="lead">"A mente precisa de livros assim como uma espada precisa de uma pedra de amolar"<br>- Tyrion Lannister</p>
			</div>
			
			<div class="breadcrumb">
					<li><a href="library/{{Auth::user()->id}}">Home</a></li>

			</div>
		
		</div>
	</section>
	
	<!-- End: Page Banner -->

	<!-- Start: Products Section -->
	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				<div class="books-full-width">
					<div class="container">
						<!-- Start: Search Section -->
						<section class="search-filters">
							<div class="filter-box">
								<h3>Qual livro você deseja encontrar?</h3>
								<form action="http://libraria.demo.presstigers.com/index.html" method="get">
									<div class="col-md-4 col-sm-6">
										<div class="form-group">
											<input class="form-control" placeholder="Pesquisar título" id="keywords" name="keywords" type="text">
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="form-group">
											<div class="form-group">
												<input class="form-control" placeholder="Pesquisar autor" id="keywords" name="keywords" type="text">
											</div>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="form-group">
											<div class="form-group">
												<input class="form-control" placeholder="Pesquisar gênero" id="keywords" name="keywords" type="text">
											</div>
										</div>
									</div>
									<div class="col-md-2 col-sm-6">
										<div class="form-group">
											<input class="form-control" type="submit" value="Buscar">
										</div>
									</div>
								</form>
							</div>
							<div class="clear"></div>
						</section>
						<!-- End: Search Section -->
						
						<div class="filter-options margin-list">
							<div class="row">                                            
								<div class="col-md-3 col-sm-3">
									<select name="orderby">
										<option selected="selected">Títulos</option>
										<option>Sort by popularity</option>
										<option>Sort by rating</option>
										<option>Sort by newness</option>
										<option>Sort by price</option>
									</select>
								</div>
								<div class="col-md-3 col-sm-3">
									<select name="orderby">
										<option selected="selected">Categorias</option>
										<option>Sort by popularity</option>
										<option>Sort by rating</option>
										<option>Sort by newness</option>
										<option>Sort by price</option>
									</select>
								</div>
								<div class="col-md-2 col-sm-3">
									<select name="orderby">
										<option selected="selected">Nacionalidades</option>
										<option>Sort by popularity</option>
										<option>Sort by rating</option>
										<option>Sort by newness</option>
										<option>Sort by price</option>
									</select>
								</div>
								<div class="col-md-2 col-sm-3">
									<select name="orderby">
										<option selected="selected">Lançamento</option>
										<option>Sort by popularity</option>
										<option>Sort by rating</option>
										<option>Sort by newness</option>
										<option>Sort by price</option>
									</select>
								</div>
								<div class="col-md-2 col-sm-12 pull-right">
									<div class="filter-toggle">
										<a href="books-media-gird-view-v2.html" class="active"><i class="glyphicon glyphicon-th-large"></i></a>
										<a href="books-media-list-view.html"><i class="glyphicon glyphicon-th-list"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="booksmedia-fullwidth">
							<ul>
							
								@if(count($book))
								@for($i = 0; $i < 6; $i++)
								<li>
									<div class="book-list-icon blue-icon"  @if(Auth::user()->exist($book[$i]->id))  style="visibility: hidden" @endif> <a style="color: white" title="Adicionar aos seus livros" href="{{ route('addbook', ['book'=> $book[$i]->id]) }}"><i class="fas fa-plus-circle fa-2x"></i></a>  </div>
									<figure>
										<a href="books-media-detail-v2.html"><img src="{{ asset('assets/images/books-media/layout-3/books-media-layout3-01.jpg') }}" alt="Book"></a>
										<figcaption>
											<header>
												<h4><a href="books-media-detail-v2.html">{{ $book[$i]->title }}</a></h4>
												<p><strong>Author:</strong>  {{ $book[$i]->author }}</p>
												<p><strong>Gênero:</strong>  {{ $book[$i]->genre }}</p>
											
											</header>
											<span class="product-detail">
											
											
											</span>
											<p>Aqui será a sinopse! {{ $book[$i]->synopsis }} It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
											<p><strong>Faixa:</strong>  {{  $book[$i]->age }}</p>
											

											<div class="actions">
												<ul>
													<li>
														<a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
															<i class="fa fa-shopping-cart"></i>
														</a>
													</li>
													<li>
														<a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
															<i class="fa fa-heart"></i>
														</a>
													</li>
													<li>
														<a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail">
															<i class="fa fa-envelope"></i>
														</a>
													</li>
													<li>
														<a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
															<i class="fa fa-search"></i>
														</a>
													</li>
													<li>
														<a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
															<i class="fa fa-print"></i>
														</a>
													</li>
													<li>
														<a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Share">
															<i class="fa fa-share-alt"></i>
														</a>
													</li>
												</ul>
											</div>
										</figcaption>
									</figure>                                                
								</li>
								
								@endfor
									@endif

									<nav class="navigation pagination text-center">
										<h2 class="screen-reader-text">Posts navigation</h2>
										<div class="nav-links">
											<a class="prev page-numbers" href="#."><i class="fa fa-long-arrow-left"></i> Previous</a>
											<a class="page-numbers" href="#.">1</a>
											<span class="page-numbers">2</span>
											<a class="page-numbers" href="#.">3</a>
											<a class="page-numbers" href="#.">4</a>
											<a class="next page-numbers" href="#.">Next <i class="fa fa-long-arrow-right"></i></a>
										</div>
									</nav>

					
					<!-- End: Staff Picks -->
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
</body>
</html>