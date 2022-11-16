@foreach ($allBerita as $berita)
  <div class="card border border-white" style="max-width: 540px;">
    <div class="row">
      <div class="col-lg-3 col-3">
        @if ($berita->cover == null)
          <img src="{{ asset('storage/img/cover-berita/' . 'default.png') }}" alt="Image" width="70" height="70"
            style="border-radius: 6px">
        @else
          <img src="{{ asset('storage/' . $berita->cover) }}" alt="Image" width="70" height="70"
            style="border-radius: 6px">
        @endif
      </div>
      <div class="col-lg-9 col-9">
        <h6>
          <a href="{{ url('/berita' . '/' . str()->lower($berita->kategori_berita->nama) . '/' . $berita->id) }}"
            class="text-dark">{{ $berita->judul }}</a>
        </h6>
        <p class="text-muted">
          <small>
            <i class="fa-solid fa-eye"></i> <span class="fw-bold"><i>{{ $berita->views }}x
                dilihat</i></span>
          </small>
        </p>
      </div>
    </div>

  </div>
  <hr>
@endforeach
