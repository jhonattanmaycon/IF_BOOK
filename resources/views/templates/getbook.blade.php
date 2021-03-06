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
	<link href="{{ asset('assets/css/stylelibrary.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="container">
		@if(count($book))
		@for($i = 0; $i < count($book); $i++)
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
										<a href="{{ route('library', ['user'=> Auth::user()->id]) }}"><button>Adicionar</button></a>
									</td>
									@endfor
									@endif
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