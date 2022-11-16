<div class="container">
  <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
    <h6 class="section-title bg-white text-center text-primary px-3">Visi Misi</h6>
    <h1 class="mb-5">Fakultas Hukum UHO</h1>
  </div>
</div>
<div class="container-xxl visi2" style="background-image: url({{ asset('home-assets/img/bg-visi-misi.jpg') }})">
  <div class="row">
    <div class="col col-lg-5 ms-3">

      @foreach ($data as $item)
        <div>
          <div class="btn btn-lg btn-lg-square btn-primary ms-1 mt-1 mb-1 me-3" href="" style="float: left">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
              class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
              <path
                d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z" />
              <path
                d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z" />
            </svg>
          </div>

          <h3 class="p-2">{{ $item->nama }}</h3>
          <div class="ms-4">
            <p class="ms-5">{!! $item->body !!}</p>
          </div>
        </div>
      @endforeach

    </div>
  </div>
</div>

<style>
  .visi2 {
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: 100%;
  }

  @media only screen and (max-width: 576px) {
    .visi2 {
      background-size: 0;
    }
  }
</style>
