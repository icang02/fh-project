<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>{{ $title ?? 'Fakultas Hukum | 404 Not Found' }}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="{{ asset('home-assets') }}/img/logo-uho.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
    rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="{{ asset('home-assets') }}/lib/animate/animate.min.css" rel="stylesheet">
  <link href="{{ asset('home-assets') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="{{ asset('home-assets') }}/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="{{ asset('home-assets') }}/css/style.css" rel="stylesheet">
  <link href="{{ asset('home-assets') }}/css/mystyle.css" rel="stylesheet">

  {{-- Font Awesome Icon --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->

  @include('home.components.navbar', [
      'kategoriBerita' => App\Models\KategoriBerita::where('nama', '!=', 'Ui Greenmetric')->get(),
      'uiGreenmetric' => App\Models\KategoriBerita::where('nama', '=', 'Ui Greenmetric')->get()->first(),
      'links' => App\Models\Link::all(),
  ])

  {{-- Start Main Content --}}
  @yield('main-content')
  {{-- End Main Content --}}

  <!-- Footer Start -->
  @include('home.components.footer')
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary bg-utama btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('home-assets') }}/lib/wow/wow.min.js"></script>
  <script src="{{ asset('home-assets') }}/lib/easing/easing.min.js"></script>
  <script src="{{ asset('home-assets') }}/lib/waypoints/waypoints.min.js"></script>
  <script src="{{ asset('home-assets') }}/lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="{{ asset('home-assets') }}/js/main.js"></script>
</body>

</html>
