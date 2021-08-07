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
                <p class="text-secondary mb-1">{{ $user->city}}, {{$user->years }}</p>
                <p class="text-muted font-size-sm">{{ $user->bio}}</p>
                <div class="social-links text-center mb-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>

                </div>
                @unless($user->id == Auth::user()->id)
                <a href="{{route('follow', ['user_1'=>Auth::user()->id, 'user_2'=>$user->id])}}"><button class="btn btn-primary">Seguir</button></a>
                <button class="btn btn-outline-primary">Mensagem</button>
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
                <h4> Seguidores</h4>

                <p class="text-secondary mb-1">{{ $user->followers}}</p>
              </div>
              <div class="col-sm  align-items-center text-center">
                <h4> Seguindo</h4>
                <p class="text-secondary mb-1">{{ $user->follows}}</p>
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
         <a href="#"> <i class="bi bi-heart-fill"> 100 &nbsp;&nbsp;&nbsp; </i> <i class="bi bi-chat-fill"> 50 </i> </a>

      

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

</div>
</main>
@endsection


