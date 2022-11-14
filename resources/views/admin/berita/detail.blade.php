@extends('layouts.admin')

@section('main-content')
    <div class="body px-3">
        <div class="container-lg">
            <div class="row mt-3">
                <div class="col">
                    <div class="card" style="width: 100%;">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h6 class="card-title"><b>Judul</b></h6>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of
                                        the card's content.</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card-body">
                                    <h6 class="card-title"><b>Kategori</b></h6>
                                    <p class="btn btn-primary">Event</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <h6 class="card-title"><b>Tanggal</b></h6>
                            <p class="card-text">21-05-2002</p>
                        </div>

                        <div class="card-body">
                            <h6 class="card-title"><b>Isi Berita</b></h6>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione dolor
                                eveniet natus fuga assumenda facere, obcaecati, doloribus aut architecto laboriosam beatae
                                sit. Ab, quibusdam sint reprehenderit nemo similique eos rerum incidunt quos, placeat nisi
                                soluta dolorum aspernatur? Ullam laborum quisquam, fugit odio, sed voluptatibus dolores
                                dolorum eaque molestiae nisi, unde mollitia expedita? Voluptate eaque iure officiis eos id
                                iusto deserunt? Laboriosam illo voluptas sapiente omnis, maiores atque dicta consectetur
                                obcaecati, non, quidem magnam debitis fugit? Impedit delectus, explicabo a quam tempore
                                corporis in obcaecati iste dolore voluptatum, enim molestias libero sint adipisci sequi odio
                                esse cum porro. Numquam, excepturi amet!</p>
                        </div>

                        <div class="card-body">

                            <a href="{{ '/dashboard/berita/list-berita' }}" class="btn btn-danger text-light">Kembali</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
