@extends('layouts.home')

@section('main-content')
    <!-- Carousel Start -->
    @include('home.components.jumbotron')
    <!-- Carousel End -->

    <!-- About Start -->
    @include('home.components.video')
    <!-- About End -->

    <!-- Service Start -->
    @include('home.components.services')
    <!-- Service End -->

    <!-- Team Start -->
    @include('home.components.team')
    <!-- Team End -->
@endsection
