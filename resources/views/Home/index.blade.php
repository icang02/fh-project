@extends('layouts.home')

@section('main-content')
    <!-- Carousel Start -->
    @include('home.components.jumbotron')
    <!-- Carousel End -->

    <!-- Service Start -->
    @include('home.components.services')
    <!-- Service End -->

    <!-- About Start -->
    @include('home.components.video')
    <!-- About End -->

    <!-- Team Start -->
    @include('home.components.team')
    <!-- Team End -->

    <!-- Visi Misi Start -->
    @include('home.components.visi-misi')
    <!-- Visi Misi End -->
@endsection
