@extends('layouts.ifbook')

@section('menu')

@section('imagem' , "{{asset('foto_perfil/' . $user->photo)}}")

<section>

 
    <div class="container">

      <div class="row gutters-sm">
        <div class="col-md-4 mb-3 mt-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="{{ asset('foto_perfil/' . $user->photo) }}" alt="Admin" class="rounded-circle" width="150">
                <div class="mt-3">
                  <h4> {{ $user->name }} </h4>
                  <p class="text-secondary mb-1">{{ $user->city }}</p>
                  <p class="text-muted font-size-sm">{{ $user->years }}</p>

                  <div class="social-links text-center mb-3">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>

                  </div>
                  @unless($user->id == Auth::user()->id)
                  <button class="btn btn-primary">Seguir</button>
                  <button class="btn btn-outline-primary">Mensagem</button>
                  @endunless
                  @unless($user->id != Auth::user()->id)
                  <a href="{{ route('perfil.edit', ['id'=>$user->id]) }}"><button class="btn btn-primary">Editar Perfil</button></a>
                  @endunless
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4 mb-3 mt-3">
          <div class="card h-100">
            <div class="card-body">
              <h6 class="d-flex align-items-center mb-3">Gênero Literário</h6>
              <small>Romance</small>
              <div class="progress mb-3" style="height: 5px">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 10%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <small>Política</small>
              <div class="progress mb-3" style="height: 5px">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <small>Filosofia</small>
              <div class="progress mb-3" style="height: 5px">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <small>Ficção</small>
              <div class="progress mb-3" style="height: 5px">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <small>Religioso</small>
              <div class="progress mb-3" style="height: 5px">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4 mb-3 mt-3">
          <div class="card h-100">
            <div class="card-body">
              <h6 class="d-flex align-items-center mb-3">Música</h6>
              <small>O extraordinário</small>
              <div class="progress mb-3" style="height: 5px">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <small>No tempo Dele</small>
              <div class="progress mb-3" style="height: 5px">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <small>Eu vou voltar</small>
              <div class="progress mb-3" style="height: 5px">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <small>Tropicalia</small>
              <div class="progress mb-3" style="height: 5px">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <small>Low Fi</small>
              <div class="progress mb-3" style="height: 5px">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
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
  <div class="row">
    <div class="col-sm-4">
      <div class="container">
        <div class="gallery">
          <div class="gallery-item" tabindex="0">
             <img src="https://images.unsplash.com/photo-1511765224389-37f0e77cf0eb?w=500&h=500&fit=crop" class="gallery-image" alt="" width="300px">
              <div class="gallery-item-info">
                <ul>
                  <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 56</li>
                  <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 2</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
      <div class="container">
        <div class="gallery">
          <div class="gallery-item" tabindex="0">
             <img src="https://images.unsplash.com/photo-1511765224389-37f0e77cf0eb?w=500&h=500&fit=crop" class="gallery-image" alt="" width="300px">
              <div class="gallery-item-info">
                <ul>
                  <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 56</li>
                  <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 2</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
      <div class="container">
        <div class="gallery">
          <div class="gallery-item" tabindex="0">
             <img src="https://images.unsplash.com/photo-1511765224389-37f0e77cf0eb?w=500&h=500&fit=crop" class="gallery-image" alt="" width="300px">
              <div class="gallery-item-info">
                <ul>
                  <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 56</li>
                  <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 2</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   <div class="row">
    <div class="col-sm-4">
      <div class="container">
        <div class="gallery">
          <div class="gallery-item" tabindex="0">
             <img src="https://images.unsplash.com/photo-1511765224389-37f0e77cf0eb?w=500&h=500&fit=crop" class="gallery-image" alt="" width="300px">
              <div class="gallery-item-info">
                <ul>
                  <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 56</li>
                  <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 2</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="container">
          <div class="card " style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content Some quick example text to build on the card title and make up the bulk of the card's content
              Some quick example text to build on the card title and make up the bulk of the card's content Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
      <div class="container">
        <div class="gallery">
          <div class="gallery-item" tabindex="0">
             <img src="https://images.unsplash.com/photo-1511765224389-37f0e77cf0eb?w=500&h=500&fit=crop" class="gallery-image" alt="" width="300px">
              <div class="gallery-item-info">
                <ul>
                  <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 56</li>
                  <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 2</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>
@endsection


 