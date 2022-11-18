<div class="container-fluid p-0 border">
  <img class="img-fluid d-none img1" src="{{ asset('storage/img/slider/' . 'slider1.png') }}" alt="Slider 1">

  <div class="owl-carousel header-carousel position-relative">
    <div class="owl-carousel-item position-relative">
      <img class="img-fluid" src="{{ asset('storage/img/slider/' . 'slider1.png') }}" alt="Slider 1">
    </div>

    <div class="owl-carousel-item position-relative">
      <img class="img-fluid" src="{{ asset('storage/img/slider/' . 'slider2.png') }}" alt="Slider 2">
    </div>
  </div>
</div>

<style>
  @media only screen and (max-width: 600px) {
    .img1 {
      display: block;
    }
  }
</style>
