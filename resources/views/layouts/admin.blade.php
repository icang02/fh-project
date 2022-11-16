<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
  <title>{{ $title }}</title>

  <!-- Favicon -->
  <link href="{{ asset('home-assets') }}/img/logo-uho.ico" rel="icon">
  <meta name="theme-color" content="#ffffff">

  <!-- Vendors styles-->
  <link rel="stylesheet" href="{{ asset('admin-assets') }}/vendors/simplebar/css/simplebar.css">
  <link rel="stylesheet" href="{{ asset('admin-assets') }}/css/vendors/simplebar.css">

  <!-- Main styles for this application-->
  <link href="{{ asset('admin-assets') }}/css/style.css" rel="stylesheet">

  <!-- We use those styles to show code examples, you should remove them in your application.-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
  <link href="{{ asset('admin-assets') }}/css/examples.css" rel="stylesheet">

  <!-- Global site tag (gtag.js) - Google Analytics-->
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    // Shared ID
    gtag('config', 'UA-118965717-3');
    // Bootstrap ID
    gtag('config', 'UA-118965717-5');
  </script>

  @if (!request()->is('auth'))
    <link href="{{ asset('admin-assets') }}/vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
    <link href="{{ asset('admin-assets') }}/vendors/@coreui/icons/css/brand.min.css" rel="stylesheet">
    <link href="{{ asset('admin-assets') }}/vendors/@coreui/icons/css/flag.min.css" rel="stylesheet">
    <link href="{{ asset('admin-assets') }}/vendors/@coreui/icons/css/free.min.css" rel="stylesheet">

    {{-- Setup Ck Editor --}}
    <link rel="stylesheet" href="{{ asset('admin-assets') }}/ckeditor/sample.css">
  @endif

  {{-- Jquery --}}
  <script src="{{ asset('admin-assets') }}/js/jquery-3.6.1.min.js" type="text/javascript"></script>
</head>

<body>
  {{-- sidebar --}}
  @if (request()->is('auth'))
    @include('admin.auth.login')
  @else
    @include('admin.components.sidebar')
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      {{-- header --}}
      @include('admin.components.header')

      {{-- Start Main Content --}}
      @yield('main-content')
      {{-- End Main Content --}}

      @include('admin.components.footer')
    </div>
  @endif
  {{-- <!-- CoreUI and necessary plugins--> --}}
  <script src="{{ asset('admin-assets') }}/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
  <script src="{{ asset('admin-assets') }}/vendors/simplebar/js/simplebar.min.js"></script>

  @if (!request()->is('auth'))
    <!-- Plugins and scripts required by this view-->
    <script src="{{ asset('admin-assets') }}/vendors/chart.js/js/chart.min.js"></script>
    <script src="{{ asset('admin-assets') }}/vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="{{ asset('admin-assets') }}/vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="{{ asset('admin-assets') }}/js/main.js"></script>
  @endif


  @if (!request()->is('auth'))
    {{-- setup Ck Editor --}}
    <script src="{{ asset('admin-assets') }}/ckeditor/ckeditor.js"></script>

    <script>
      ClassicEditor
        .create(document.querySelector('#editor1'), {
          // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
        })
        .then(editor => {
          window.editor = editor;
        })
        .catch(err => {
          console.error(err.stack);
        });

      ClassicEditor
        .create(document.querySelector('#editor2'), {
          // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
        })
        .then(editor => {
          window.editor = editor;
        })
        .catch(err => {
          console.error(err.stack);
        });
    </script>
  @endif

  {{-- Preview Image --}}
  <script>
    function previewImage() {
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
      }
    }

    // Reset Form Berita
    $(document).ready(function() {
      const judul = document.querySelector('#judul');
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      $('#reset').click(function() {
        judul.value = '';
        image.value = '';
        imgPreview.style.display = 'none'
      });
    });
  </script>

</body>

</html>
