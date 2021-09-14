@extends('layouts.ifbook')
@section('main-content')
    
<head>        

        <!-- Favicon -->
  <link href="images/favicon.ico" rel="icon" type="image/x-icon" />

  <!-- Fonts -->
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
                                <div class="detailed-box" style="background-color: rgba(7, 17, 53, 0.253);">
                                    <div class="col-xs-12 col-sm-5 col-md-4">
                                        <div class="post-thumbnail" >
                                            <div class="book-list-icon blue-icon"><img src="{{  asset('storage/imgposts/' . $post->photo) }}"  width="45%" alt="cart-product-1"></div>

                                            <img src="{{  asset('storage/imgposts/' . $post->image) }}"  width="90%" class="center-block" alt="cart-product-1">
                                            <br> <br>
                                           
                                        </div>
                                         
                                        <p style="color: white"><strong style="color: white">Curtidas: {{ $likes}} </strong> </p>
                                        <p style="color: white"><strong style="color: white">Comentário: {{count($comments)}} </strong> </p>
                                        <br>
                                       
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-md-6">
                                        <div class="post-center-content">
                                            @foreach ($user as $user)
                                            <h2>Postagem de <a href="{{route('perfil.explore', ['user'=>$user->id])}}">{{$user->name}}</a></h2>
                                            @endforeach
                                            <br>
                                            <p><strong>Data:</strong> {{$post->created_at}}</p>
                                            <p><strong>Categoria:</strong> {{$post->categoria}}</p>
                                            @foreach ($obra as $obra)
                                            <p><strong>Obra: </strong><a href="{{route('livroview', ['book'=>$obra->id])}}">{{$obra->title}}</a></p>
 
                                            <div class="center-content">
                                                <a href="{{route('livroview', ['book'=>$obra->id])}}"><img src="{{ asset('assets/img/portfolio/' . $obra->cover) }}"  width="40%" alt="cart-product-1"></a>
                                            </div>
                                            @endforeach
                                            <br>
                                            <p><strong>"{{$post->message}}"</strong> </p>
                                        
                                          
                                            <div class="actions">
                                                
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-1">
                                        <div class="post-right-content">
                                            <br><br><br><br><br><br><br>
                                            <a href="{{route('like', ['post_id'=>$post->id])}}" class="btn btn-dark-gray">Curtir</a>
                                            <a  data-toggle="modal" data-target="#meuModal2" class="btn btn-dark-gray" onclick="setaDadosModal('{{$post->id}}')">Comentar</a>
                                        </div>
                                    </div>
                            
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                            

                                <br>  <br>  <br>
                                <div class="table-tabs" id="responsiveTabs">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><b class="arrow-up"></b><a data-toggle="tab" href="#sectionA">Ver comentários </a></li>
                                
                                    </ul>
                                    <div class="tab-content">
                                        <div id="sectionA" class="tab-pane fade in active">
                                                    @foreach ($comments as $comments)
                                                    <tr>
                                                        <br>
                                                        <h2 style="color: rgb(196, 192, 192)"><td>Comentário de <a href="{{route('perfil.explore', ['user'=>$comments->id])}}">{{$comments->name}}</a></td></h2>
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
                                                                    <h2><strong>"{{ $comments->text }}"</strong></h2> <br><br><br>
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
            
        <!-- End: Products Section -->
        
  

        <!-- Start: Social Network -->
        
        <!-- End: Social Network -->

        <!-- Start: Footer -->
      
        <!-- End: Footer -->
        <script>
            function setaDadosModal(valor) {
                document.getElementById('campo').value = valor;
            }
        </script>
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