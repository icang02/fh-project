@extends('layouts.home')

@section('main-content')
  <style>
    .jarak {
      padding-top: 50px;
      padding-bottom: 50px;
      /* border: 1px solid; */
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
    @include('home.components.team')
  </div>
  <!-- Team End -->

  <!-- Visi Misi Start -->
  <div class="jarak">
    @include('home.components.visi-misi')
  </div>
  <!-- Visi Misi End -->
@endsection
