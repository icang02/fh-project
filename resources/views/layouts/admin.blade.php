<!DOCTYPE html>
<html lang="en">

<head>
  <base href="./">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
  <title>{{ $title }}</title>
  <!-- Favicon -->
  <link href="{{ asset('home-assets') }}/img/logo-uho.ico" rel="icon">
  {{-- <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('admin-assets') }}/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('admin-assets') }}/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('admin-assets') }}/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin-assets') }}/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('admin-assets') }}/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('admin-assets') }}/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('admin-assets') }}/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('admin-assets') }}/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin-assets') }}/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"
    href="{{ asset('admin-assets') }}/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin-assets') }}/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('admin-assets') }}/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin-assets') }}/favicon/favicon-16x16.png">
  <link rel="manifest" href="{{ asset('admin-assets') }}/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="{{ asset('admin-assets') }}/favicon/ms-icon-144x144.png"> --}}
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
  <link href="{{ asset('admin-assets') }}/vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
  <link href="{{ asset('admin-assets') }}/vendors/@coreui/icons/css/brand.min.css" rel="stylesheet">
  <link href="{{ asset('admin-assets') }}/vendors/@coreui/icons/css/flag.min.css" rel="stylesheet">
  <link href="{{ asset('admin-assets') }}/vendors/@coreui/icons/css/free.min.css" rel="stylesheet">

  {{-- Setup Ck Editor --}}
  <link rel="stylesheet" href="{{ asset('admin-assets') }}/ckeditor/sample.css">
</head>

<body>
  {{-- sidebar --}}
  @include('admin.components.sidebar')
  <div class="wrapper d-flex flex-column min-vh-100 bg-light">
    {{-- header --}}
    @include('admin.components.header')

    {{-- Start Main Content --}}
    @yield('main-content')
    {{-- End Main Content --}}

    @include('admin.components.footer')
  </div>
  <!-- CoreUI and necessary plugins-->
  <script src="{{ asset('admin-assets') }}/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
  <script src="{{ asset('admin-assets') }}/vendors/simplebar/js/simplebar.min.js"></script>
  <!-- Plugins and scripts required by this view-->
  <script src="{{ asset('admin-assets') }}/vendors/chart.js/js/chart.min.js"></script>
  <script src="{{ asset('admin-assets') }}/vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
  <script src="{{ asset('admin-assets') }}/vendors/@coreui/utils/js/coreui-utils.js"></script>
  <script src="{{ asset('admin-assets') }}/js/main.js"></script>

  {{-- setup Ck Editor --}}
  <script src="{{ asset('admin-assets') }}/ckeditor/ckeditor.js"></script>

  <script>
    ClassicEditor
      .create(document.querySelector('#editor'), {
        // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
      })
      .then(editor => {
        window.editor = editor;
      })
      .catch(err => {
        console.error(err.stack);
      });
  </script>

  {{-- Preview Image --}}
  <script>
    function previewImage() {
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
      }
    }
  </script>

</body>

</html>
