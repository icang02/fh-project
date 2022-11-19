<hr>
<div class="container px-4 px-lg-5 mt-5">
  <div class="row gx-5">
    @foreach ($kategoriBerita as $kategori)
      <div class="col-lg-3">
        <h5 class="my-4"><a href="#"></a>{{ $kategori->nama }}</h5>
        <ul class="text-primary" style="margin-left: -14.5px">
          @foreach ($kategori->berita->take(5) as $berita)
            <li>
              <a href="{{ url('berita/' . str()->slug($berita->kategori_berita->nama) . '/' . $berita->id) }}">{{ $berita->judul }}
                <span
                  class="text-muted">{{ Carbon\Carbon::createFromFormat('Y-m-d', $berita->tanggal)->format('j F, Y') }}</span></a>
            </li>
          @endforeach
        </ul>
      </div>
    @endforeach
  </div>
</div>
