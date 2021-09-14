<!DOCTYPE html> <html lang="en">

<head>
  <meta charset="utf-8">
		<title>IFBOOK</title>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

   
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets\img\favicon-32x32.png')}}">
		<link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets\img\favicon-16x16.png')}}">
		<link rel="manifest" href="{{asset('assets\img\site.webmanifest')}}">
		<link rel="sortcut icon" href="favicon.ico" type="image/x-icon" />
    
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.0.1
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    @yield('tinymce')

</head>

<body>
  
  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        {{--<a href=""><img src="{{asset('foto_perfil/' . Auth::user()->photo)}} " alt="" class="img-fluid rounded-circle">
        </a>
        --}}
        <h1 class="text-light">
          <a href="index.html">  
            {{Auth::user()->name}}
          </a>
        </h1>
        <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" title="Criar um post"  class="facebook"  data-toggle="modal" data-target="#meuModal"><i class="bx bi-plus-circle"></i></a>

          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      


        </div>
      </div>


  
 









      </div>
    </div>

      <nav id="navbar" class="nav-menu nav2">
        <ul>
          <li><a href="{{route('feed')}}" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Feed</span></a></li>
          <li><a href="{{route('explore')}}" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Explorar</span></a></li>
          <li><a href="{{route('library')}}" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Biblioteca</span></a></li>
          <li><a href="{{route('match')}}" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Match</span></a></li>
           <li><a href="{{ route('perfil.home') }}" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Perfil</span></a></li>
          <li><a href="#" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Logout</span></a></li>
          <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
          @yield('admin')
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <main id="main">
    
    @yield('main-content')

  </main>

  @yield('menu')

   <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/typed.js/typed.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>

  <!-- Template Main JS File -->
  <script>

    var loadFile = function(event) {
      var output = document.getElementById('output');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };
  </script>
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
