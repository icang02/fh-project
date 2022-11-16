<div class="bg-light min-vh-100 d-flex flex-row align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card-group d-block d-md-flex row">
          <div class="card col-md-7 p-4 mb-0">
            <div class="card-body">

              {{-- Start error message --}}
              @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {{ session('error') }}
                  <button type="button" class="btn-close" data-coreui-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
              {{-- End error message --}}

              <h1>Login</h1>
              <p class="text-medium-emphasis">Masukkan password dengan benar.</p>

              <form action="" method="post">
                @csrf
                <div class="input-group mb-3">
                  <span class="input-group-text">
                    <i class="fa-solid fa-lock">Icon</i>
                  </span>
                  <input class="form-control @error('username') is-invalid @enderror" type="text" name="username"
                    placeholder="Username" value="{{ old('username') }}">
                  @error('username')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="input-group mb-4">
                  <span class="input-group-text">
                    <i class="fa-solid fa-lock">Icon</i>
                  </span>
                  <input class="form-control @error('password') is-invalid @enderror" type="password" name="password"
                    placeholder="Password" autocomplete="off">
                  @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="row">
                  <div class="col-6">
                    <button class="btn btn-primary px-4" type="submit">Login</button>
                  </div>
                  {{-- <div class="col-6 text-end">
                    <button class="btn btn-link px-0" type="button">Forgot password?</button>
                  </div> --}}
                </div>
              </form>
            </div>
          </div>

          <div class="card col-md-5 text-white py-5" id="form-bg"
            style="background-image: url({{ asset('storage/img/slider/slider2.jpg') }}); background-size: cover;">
            <div class="card-body text-center">
              <h2>Fakultas Hukum</h2>
              <p>S M A R T</p>
              <button class="btn btn-lg btn-outline-light mt-3" type="button">UHO Bisa Jagad Kita</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
