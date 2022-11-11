@extends('layouts.admin')

@section('main-content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
      <div class="card mb-4">
        <div class="card-header"> Theme colors</div>
        <div class="card-body">
          <div class="row">
            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
              <div class="bg-primary theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
              <h6>Brand Primary Color</h6>
            </div>
            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
              <div class="bg-secondary theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
              <h6>Brand Secondary Color</h6>
            </div>
            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
              <div class="bg-success theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
              <h6>Brand Success Color</h6>
            </div>
            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
              <div class="bg-danger theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
              <h6>Brand Danger Color</h6>
            </div>
            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
              <div class="bg-warning theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
              <h6>Brand Warning Color</h6>
            </div>
            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
              <div class="bg-info theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
              <h6>Brand Info Color</h6>
            </div>
            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
              <div class="bg-light theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
              <h6>Brand Light Color</h6>
            </div>
            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
              <div class="bg-dark theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
              <h6>Brand Dark Color</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection