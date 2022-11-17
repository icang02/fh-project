@extends('layouts.home')

@section('main-content')
  <style>
    .jarak {
      padding-top: 50px;
      padding-bottom: 50px;
    }
  </style>

  <!-- Carousel Start -->
  <div style="padding-bottom: 50px">
    @include('home.components.jumbotron')
  </div>
  <!-- Carousel End -->

  <!-- Service Start -->
  <div class="jarak">
    @include('home.components.services')
  </div>
  <!-- Service End -->

  <!-- About Start -->
  <div class="jarak">
    @include('home.components.video')
  </div>
  <!-- About End -->

  <!-- Team Start -->
  <div class="jarak">
    @include('home.components.team', [
        'dekanat' => App\Models\Dosen::whereIn('id', [1, 2, 3, 4])->get(),
    ])
  </div>
  <!-- Team End -->

  <!-- Visi Misi Start -->
  <div class="jarak">
    @include('home.components.visi-misi', ['data' => App\Models\VisiMisi::all()])
  </div>
  <!-- Visi Misi End -->


  @php
    $kategoriBerita = App\Models\KategoriBerita::all();
  @endphp
  {{-- Start Artikel Berita --}}
  @include('home.components.artikel-berita', ['kategoriBerita' => $kategoriBerita])
  {{-- End Artikel Berita --}}
@endsection
