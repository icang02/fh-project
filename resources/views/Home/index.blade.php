@extends('layouts.home')

@section('main-content')
  <!-- Carousel Start -->
  @include('home.components.jumbotron')
  <!-- Carousel End -->

  <!-- Service Start -->
  @include('home.components.services')
  <!-- Service End -->

  <!-- About Start -->
  @include('home.components.about')
  <!-- About End -->

  <!-- Categories Start -->
  @include('home.components.categories')
  <!-- Categories Start -->

  <!-- Courses Start -->
  @include('home.components.courses')
  <!-- Courses End -->

  <!-- Team Start -->
  @include('home.components.team')
  <!-- Team End -->

  <!-- Testimonial Start -->
  @include('home.components.testimonial')
  <!-- Testimonial End -->
@endsection
