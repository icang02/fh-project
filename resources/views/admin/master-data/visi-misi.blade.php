@extends('layouts.admin')

@section('main-content')
  <div class="body px-1 px-md-3 mt-1">
    <div class="container-lg">

      <div class="row justify-content-between">
        <div class="row">
          <div class="col">
            {{-- Start Flash Message --}}
            @if (session('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Sukses</strong> — {{ session('success') }}
                <button type="button" class="btn-close" data-coreui-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            {{-- End Flash Message --}}

            <div class="table-responsive">
              <table class="table table-bordered table-hover">
                <thead class="table-dark">
                  <tr>
                    <th style="width:10%">Aksi</th>
                    <th scope="row" style="width: 30%">Kategori</th>
                    <th style="width: 60">isi</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($data as $item)
                    <tr>
                      <td>
                        <button class="badge text-bg-warning text-white border-0" data-coreui-toggle="modal"
                          data-coreui-target="#btn-update-{{ $item->id }}"> Edit
                        </button>
                      </td>
                      <td>{{ $item->nama }}</td>
                      <td>{!! $item->body !!}</td>
                    </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>

          @foreach ($data as $item)
            {{-- MODAL UPDATE MISI --}}
            <div class="modal fade" id="btn-update-{{ $item->id }}" tabindex="-1"
              aria-labelledby="modalUpdateKategoriLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalUpdateKategoriLabel">Update {{ $item->nama }} Fakultas Hukum</h5>
                    <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form action="{{ url('/dashboard/visi-misi/' . $item->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="modal-body">
                      <div class="mb-3">
                        <label for="editor" class="form-label">Masukan {{ $item->nama }}</label>
                        <textarea id="editor{{ $item->id }}" name="body" class="@error('body') is-invalid @enderror" required>
                          {{ old('body', $item->body) }}
                        </textarea>
                        @error('body')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-secondary" type="button" data-coreui-dismiss="modal">Close</button>
                      <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          @endforeach

        </div>

        <div class="row">
          <div class="col">
            {{-- {{ $data->onEachSide(0.5)->withQueryString()->links() }} --}}
          </div>
        </div>
      </div>

    </div>
  @endsection
