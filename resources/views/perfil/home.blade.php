@extends('layouts.ifbook')

@section('admin')
  @can('admin-acess', $user)
   <li><a href="{{ route('admin') }}" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Admin</span></a></li>
   @endcan
@endsection
@section('main-content')

<style>
  body{
    background-color: #030911;
  }
</style>
<section>


  <div class="container">


    <div class="row gutters-sm">
      <div class="col-md-6 mb-3 mt-3" >
        <div class="card p-3 mb-2 bg-dark text-white p-white ">
          <div class="card-body " >
            <div class="d-flex flex-column align-items-center text-center " >
              {{--<img src="{{ asset('foto_perfil/' . $user->photo) }}" alt="Admin" class="rounded-circle" width="90px">--}}
              <div class="mt-3">
                <h4> {{ $user->realname }} </h4>
                <h6> @ {{ $user->name }} </h6>
                <p class="text-secondary mb-1">{{ $user->city}}, {{$user->years }}</p>
                <p class="text-muted font-size-sm">{{ $user->bio}}</p>
                <div class="social-links text-center mb-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>

                </div>
                @unless($user->id == Auth::user()->id)
                @if($verification==0)
                  <a href="{{route('follow', ['user_1'=>Auth::user()->id, 'user_2'=>$user->id])}}"><button class="btn btn-primary">Seguir</button></a>
                  <button class="btn btn-outline-primary">Mensagem</button>
              
                @endif
                @if($verification==1)
                  <a href="{{route('follow', ['user_1'=>Auth::user()->id, 'user_2'=>$user->id])}}"><button class="btn btn-primary">Deseguir</button></a>
                  <button class="btn btn-outline-primary">Mensagem</button>
                @endif
                @endunless
                
                @unless($user->id != Auth::user()->id)
                <a href="{{ route('perfil.edit', ['id'=>$user->id]) }}"><button class="btn btn-light">Editar Perfil</button></a>
                @endunless
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 mb-3 mt-3" >

        <div class="card bg-dark text-white p-white ">
          <div class="card-body" >
            <div class="row">
              <div class="col-sm  align-items-center text-center">
               
                <a href="#"><h4 data-toggle="modal" data-target="#meuModal2"> Seguidores</h4></a>
                <p class="text-secondary mb-1">{{$user->contsegue($user)}}</p>
              </div>
              <div class="col-sm  align-items-center text-center">
                <a href="#"><h4 data-toggle="modal" data-target="#meuModal3"> Seguindo</h4></a>
                <p class="text-secondary mb-1">{{ $user->contseguindo($user)}}</p>
              </div>

            </div>
          </div>
        </div>

        <div class="card bg-dark text-white p-white ">
          <div class="card-body " >
            <div class="d-flex flex-column align-items-center text-center " >
              <div class="">
                <h4> Hobbies</h4>
                <p class="text-secondary mb-1">{{ $user->hobbie}}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="card bg-dark text-white p-white ">
          <div class="card-body " >
            <div class="d-flex flex-column align-items-center text-center " >
              <div class="">
                <h4> Música do momento </h4>
                <p class="text-secondary mb-1">{{ $user->music}}</p>

              </div>
            </div>
          </div>

        </div>






      </div>


      
      <div class="row gutters-sm">
        <div class="col-sm-4 mb-3 mt-3">
          <div class="card h-100 bg-dark text-white p-white">
            <div class="card-body">
              <h6 class=" d-flex align-items-center mb-3">Top 3 Livros</h6>
              <small>{{ $user->onebook}}</small>
              <hr>
              <small>{{ $user->twobook}}</small>
              <hr>
              <small>{{ $user->threebook}}</small>
              <hr>

            </div>
          </div>
        </div>

        <div class="col-sm-4 mb-3 mt-3">
          <div class="card h-100 bg-dark text-white p-white ">
            <div class="card-body">
              <h6 class="d-flex align-items-center mb-3">Top 3 Músicas</h6>
              <small>{{ $user->onemusic}}</small>
              <hr>
              <small>{{ $user->twomusic}}</small>
              <hr>
              <small>{{ $user->threemusic}}</small>
              <hr>
            </div>
          </div>
        </div>


        <div class="col-sm-4 mb-3 mt-3">
          <div class="card h-100 bg-dark text-white p-white ">
            <div class="card-body">
              <h6 class="d-flex align-items-center mb-3">Top 3 Filmes</h6>
              <small>{{ $user->onemovie}}</small>
              <hr>
              <small>{{ $user->twomovie}}</small>
              <hr>
              <small>{{ $user->threemovie}}</small>
              <hr>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
</div>
</section>

<main>
  <div class="container">
  <div class="row">
    <hr>
    @foreach($posts as $post)


    <div class="col-sm-4">

 
      <div class="gallery">

        <div class="gallery-item" tabindex="0">
          {{-- decoding="auto" style="object-fit: cover;" sizes="293px" --}}

         <img  src="{{asset('image_post/' . $post->image)}}" class="gallery-image" alt="">
         <a href="#"> <i class="bi bi-heart-fill"> {{$post->likes}} &nbsp;&nbsp;&nbsp; </i> <i class="bi bi-chat-fill"> {{$post->views}} </i> </a>

      

         {{-- 
         <div class="gallery-item-info">
        
          <ul>
            <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 56</li>
            <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 2</li>
          </ul>
          <button class="btn" onclick="document.getElementById( {{'"' .'form-' . $post->id . '"'}} ).submit(); return false;"> Excluir Post</button>
        
          <form action="{{ route('posts.destroy',['post'=>$post->id]) }}" method="post" id="{{'form-' . $post->id}}">
            @csrf
            @method('delete')
          </form>
        </div>
        --}}
      </div>

    </div>
  </div>

  @endforeach

    <!-- Modal Seguidores -->
              <div id="meuModal2" class="modal fade" role="dialog">
                <div class="modal-dialog">

                  <!-- Conteúdo do modal-->
                  <div class="modal-content">
                
                    <!-- Cabeçalho do modal -->
                    <div class="modal-header">
                      <h4 class="modal-title">Seguidores de {{$user->name}}</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Corpo do modal -->
                    {{-- @foreach ($amigos as $amigo)
                    @if ($user->segue($amigo))
                      <div class="text-center">
                
                        
                        <a><h3>{{$amigo->name}}</h3></a>
                      </div>
                    @endif 
                    @endforeach 
                --}}

                    @foreach ($user->meus_seguidores() as $amigo )
                        <div class="text-center">
                    
                            
                          <a><h3>{{$amigo->name}}</h3></a>
                        </div>
                    @endforeach 

                  </div>
                </div>
              </div>
            <!-- Rodapé do modal-->

             <!-- Modal Seguidos-->
                <div id="meuModal3" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Conteúdo do modal-->
                    <div class="modal-content">

                      <!-- Cabeçalho do modal -->
                      <div class="modal-header">
                        <h4 class="modal-title">{{$user->name}} segue</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                      <!-- Corpo do modal -->
                      @foreach ($user->meus_seguindos() as $amigo )
                        <div class="text-center">
                    
                            
                          <a><h3>{{$amigo->name}}</h3></a>
                        </div>
                    @endforeach 
                        
                      </div>  
                    </div>
            <!-- Rodapé do modal-->
           
</div>
</main>
@endsection


