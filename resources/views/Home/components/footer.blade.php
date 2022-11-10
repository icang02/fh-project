<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
    <div class="row g-5">
      <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <center>
                <img src="{{ asset('home-assets/img/logo-uho.png') }}" width="150" class = "mx-auto" alt="Universitas Haluoleo">
              </center>
            </div>
            <h5 class="text-white text-center mb-3">FAKULTAS HUKUM<br>UNIVERSITAS HALUOLEO</h5>
      </div>    
      <div class="col-lg-4 col-md-6">
        <h5 class="text-white mb-3">TENTANG SITUS</h5>
        <a class="btn btn-link" href="{{ url('/') }}">Beranda</a>
        <a class="btn btn-link" href="{{ url('#') }}">Spada</a>
        <a class="btn btn-link" href="{{ url('about') }}">Tentang</a>
        <a class="btn btn-link" href="{{ url('#') }}">Hubungi Kami</a>
        <a class="btn btn-link" href="{{ url('#') }}">Umpan Balik</a>
      </div>
      <div class="col-lg-4 col-md-6">
        <h5 class="text-white mb-3">HUBUNGI KAMI</h5>
        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Kampus Bumi Tridharma Jln. H.E.A Mokodompit, Anduonouhu Kendari, Sulawesi Tenggara 93232</p>
        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(0401) 3195217</p>
        <p class="mb-2"><i class="fa fa-envelope me-3"></i>Fhukumuho@yahoo.co.id</p>
        <div class="d-flex pt-2">
          <a class="btn btn-outline-light btn-social" href="{{url('https://web.facebook.com/groups/790598337644887/')}}"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-outline-light btn-social" href="{{url('https://www.instagram.com/fakultashukumuho/')}}"><i class="fab fa-instagram"></i></a>
          <a class="btn btn-outline-light btn-social" href="{{url('https://www.youtube.com/channel/UCyaZXJNwkmtNyi8AQOrzrJw')}}"><i class="fab fa-youtube"></i></a>
          <a class="btn btn-outline-light btn-social" href="{{url('mailto:Fhukumuho@yahoo.co.id')}}"><i class="fa fa-envelope"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="copyright">
      <div class="row">
        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
          &copy;Hak Cipta 2017-<?php echo date('Y'); ?> <a class="border-bottom" href="{{ url('/') }}"> Fakultas Hukum UHO</a>
        </div>
        <div class="col-md-6 text-center text-md-end">
          <div class="footer-menu">
            <a href="{{ url('/') }}">Home</a>
            <a href="">Cookies</a>
            <a href="">Help</a>
            <a href="">FQAs</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
