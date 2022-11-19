<div class="container-xxl">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="section-title bg-white text-center text-primary px-3">Tenaga Pendidik</h6>
      <h1 class="mb-5">Dekanat</h1>
    </div>

    <div class="row g-4">
      @foreach ($dekanat as $item)
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item bg-light">
            <div class="overflow-hidden">
              @if ($item->foto != null)
                <img class="img-fluid" src="{{ asset("storage/$item->foto") }}" alt="Dekan">
              @else
                <img class="img-fluid" src="{{ asset('storage/img/1-default-img/foto-dosen.jpg') }}" alt="Dekan">
              @endif
            </div>
            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
              <div class="bg-light d-flex justify-content-center pt-2 px-1">
                <button class="btn btn-sm-square btn-primary mx-1" href=""><i
                    class="fab fa-facebook-f"></i></button>
                <button class="btn btn-sm-square btn-primary mx-1" href=""><i
                    class="fab fa-twitter"></i></button>
                <button class="btn btn-sm-square btn-primary mx-1" href=""><i
                    class="fab fa-instagram"></i></button>
              </div>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">{{ $item->nama }}</h5>
              <small>{{ $item->jabatan->nama }}</small>
            </div>
          </div>
        </div>
      @endforeach
    </div>

  </div>
</div>
