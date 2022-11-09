@extends('layouts.auth')

@section('main-content')
  <main class="d-flex w-100">
    <div class="container d-flex flex-column">
      <div class="row vh-100">
        <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
          <div class="d-table-cell align-middle">

            <div class="text-center mt-4">
              <h1 class="h2">Fakultas Hukum</h1>
              <p class="lead">
                Silahkan masukkan username dan password dengan benar
              </p>
            </div>

            <div class="card">
              <div class="card-body">
                <div class="m-sm-4">
                  <div class="text-center">
                    <img src="{{ asset('admin-asssets') }}/img/avatars/avatar.jpg" alt="Admin"
                      class="img-fluid rounded-circle" width="132" height="132" />
                  </div>
                  <form>
                    <div class="mb-3">
                      <label class="form-label">Username</label>
                      <input class="form-control form-control-lg" type="text" name="username" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Password</label>
                      <input class="form-control form-control-lg" type="password" name="password" autocomplete="off" />
                    </div>
                    <div>
                      <label class="form-check">
                        <input class="form-check-input" type="checkbox" value="remember-me" name="remember-me">
                        <span class="form-check-label">
                          Remember me
                        </span>
                      </label>
                    </div>
                    <div class="text-center mt-3">
                      <button type="submit" class="btn btn-lg btn-primary">Sign in</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
