@extends('layouts.admin')

@section('main-content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="card mb-4 text-white bg-info">
                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                                <div class="fs-2 fw-semibold">26K</div>
                                <div>Total Tenaga Pengajar </div>
                            </div>
                            <div class="icons">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="#46546c"
                                    class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <a href="{{ url('#') }}" class="d-flex btn mt-3 justify-content-center text-white"
                                style="background-color: #46546c">More Info</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="card mb-4 text-white bg-info">
                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                                <div class="fs-2 fw-semibold">26K</div>
                                <div>Total Tenaga Kependidikan </div>
                            </div>
                            <div class="icons">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="#46546c"
                                    class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <a href="{{ url('#') }}" class="d-flex btn mt-3 justify-content-center text-white"
                                style="background-color: #46546c">More Info</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-12">
                    <div class="card mb-4 text-white bg-info">
                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                                <div class="fs-2 fw-semibold">26K</div>
                                <div>Total Berita </div>
                            </div>
                            <div class="icons">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                        <div>
                            <a href="{{ url('#') }}" class="d-flex btn  mt-3 justify-content-center text-white"
                                style="background-color: #46546c">More Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
