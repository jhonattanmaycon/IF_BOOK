@extends('layouts.ifbook')
@section('main-content')
    
<head>        

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets\img\favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets\img\favicon-16x16.png')}}">
  <link rel="manifest" href="{{asset('assets\img\site.webmanifest')}}">
  <link rel="sortcut icon" href="favicon.ico" type="image/x-icon" />
  
  <link
  href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i"
  rel="stylesheet" />
  <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />

  <!-- Mobile Menu -->
  <link href="{{asset('assets/css/mmenu.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/css/mmenu.positioning.css') }}" rel="stylesheet" type="text/css" />

  <!-- Responsive Table -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsivetable.css') }}" />

  <!-- Stylesheet -->
  <link href="{{ asset('assets/css/stylelibrary.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>
    <section class="d-flex flex-column justify-content-center align-items-center" >
        <div class="content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="booksmedia-detail-main">
                        <div class="container">
                            <div class="row">
                                <!-- Start: Search Section -->
                               
                                <!-- End: Search Section -->
                            </div>
                            <div class="booksmedia-detail-box">
                                <div class="detailed-box" style="background-color: #0a1a503d;">
                                    <div class="col-xs-12 col-sm-5 col-md-3">
                                        <div class="post-thumbnail">
                                            <div class="book-list-icon blue-icon"></div>
                                            <img src="{{ asset('assets/img/portfolio/'.$book->cover) }}" width="100%" alt="cart-product-1">
                                            <br> <br>
                    
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-md-6">
                                        <div class="post-center-content">
                                            <h2>{{$book->title}}</h2>
                                            <br>
                                            <p><strong>Autor:</strong> {{$book->author}}</p>
                                            <p><strong>ISBN:</strong> </p>
                                            <p><strong>Categoria:</strong> {{$book->genre}}</p>
                                            <p><strong>Classificação:</strong> {{$book->age}} anos</p>
                                            <br><br>
                                            <p><strong >Sinopse:</strong> {{$book->synopsis}}</p>
                                            <br><br><br><br><br>
                                            <div class="actions">
                                                <ul>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Add To Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Like">
                                                            <i class="fa fa-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Mail">
                                                            <i class="fa fa-envelope"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Search">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Print">
                                                            <i class="fa fa-print"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Print">
                                                            <i class="fa fa-share-alt"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3 ">
                                        <div class="post-right-content">
                                            <h4 style="color: white">Avaliações</h4>
                                            <p style="color: white"><strong style="color: white">Nota Média:</strong> ☆☆☆☆☆</p>
                                            <p style="color: white"><strong style="color: white">Total de leitores: {{$leitores}} </strong>  </p>
                                            <p style="color: white"><strong style="color: white">Resenhas: {{count($dados)}} </strong> </p>
                                            <a href="#." class="available-location">Availability by Location <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                            <a href="{{ route('addbook', ['book'=> $book->id]) }}" class="btn btn-dark-gray">Adicionar a sua livraria</a> 
                                            <a href="#." class="btn btn-dark-gray">Saber mais</a> 
                                            <a href="{{ route('getbook') }}" class="btn btn-dark-gray">Buscar similares</a>
                                            <a href="#." class="btn btn-dark-gray">Curtir</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                            

                                <br>  <br>  <br>
                                <div class="table-tabs" id="responsiveTabs">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><b class="arrow-up"></b><a data-toggle="tab" href="#sectionA">Relacionados ({{count($autor)}}): </a></li>
                                        <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionB">Resenhas ({{count($dados)}})</a></li>
                                        <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionC">Negociações ({{count($dados2)}})</a></li>
                                
                                    </ul>
                                    <div class="tab-content">
                                        <div id="sectionA" class="tab-pane fade in active">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Título</th>
                                                        <th>Categoria</th>
                                                        <th>Ano </th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($autor as $autor)
                                                    <tr>
                                                        <td><a href="{{route('livroview', ['book'=> $autor->id]) }}">{{$autor->title}}</a></td>
                                                        <td>{{$autor->genre}}</td>
                                                        <td>{{$autor->year}}</td>   
                                                                                                                    
                                                    </tr>
                                                   
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="sectionB" class="tab-pane fade in active">
                                            @foreach ($dados as $comments)
                                            <tr>
                                                <br>
                                                <h2 style="color: rgb(196, 192, 192)"><td><a href="{{route('posts.view', ['post'=>$comments->id])}}">Postagem </a> de {{$comments->name}}</td></h2>
                                                <div class="text-center ">
                                                    <tr class="cart_item">
                                    
                                                    <td data-title="Product" class="product-name">
                                                        <span class="inline">
                                                          <h5>Feito em {{ $comments->created_at}}</a></h5><i></i>
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
                                                            <a href="{{route('posts.view', ['post'=>$comments->id])}}"><img src="{{  asset('storage/imgposts/' . $comments->image) }}"  width="10%" alt="cart-product-1"></a><br>
                                                            <h2><strong>"{{ $comments->message }}"</strong></h2> <br><br><br>
                                                        </span>
                                                    </td>
                                                    <hr>  <br> 
                                                    </tr>
                                    
                                                        
                                                </div> 
                                                                                                            
                                            </tr>
                                           
                                            @endforeach
                                    
                                </div>
                                        <div id="sectionC" class="tab-pane fade in">
                                            @foreach ($dados2 as $comments)
                                            <tr>
                                                <br>
                                                <h2 style="color: rgb(196, 192, 192)"><td><a href="{{route('posts.view', ['post'=>$comments->id])}}">Postagem </a> de {{$comments->name}}</td></h2>
                                                <div class="text-center ">
                                                    <tr class="cart_item">
                                    
                                                    <td data-title="Product" class="product-name">
                                                        <span class="inline">
                                                          <h5>Feito em {{ $comments->created_at}}</a></h5><i></i>
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
                                                            <a href="{{route('posts.view', ['post'=>$comments->id])}}"><img src="{{  asset('storage/imgposts/' . $comments->image) }}"  width="10%" alt="cart-product-1"></a><br>
                                                            <h2><strong>"{{ $comments->message }}"</strong></h2> <br><br><br>
                                                        </span>
                                                    </td>
                                                    <hr>  <br> 
                                                    </tr>
                                    
                                                        
                                                </div> 
                                                                                                            
                                            </tr>
                                           
                                            @endforeach

                                        </div>
                                  
                                        

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Products Section -->
        
  

        <!-- Start: Social Network -->
        
        <!-- End: Social Network -->

        <!-- Start: Footer -->
      
        <!-- End: Footer -->
        
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
    </body>


</html>