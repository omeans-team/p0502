<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Home - Website</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Free HTML Templates" name="keywords">
  <meta content="Free HTML Templates" name="description">

  <!-- Favicon -->
  <link href="{{ url('assets/img/favicon.png') }}" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

  <!-- Flaticon Font -->
  <link href="{{ url('assets/home/lib/flaticon/font/flaticon.css') }}" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="{{ url('assets/home/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/home/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="{{ url('assets/home/css/style.css') }}" rel="stylesheet">
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
@yield('style')
</head>

<body>

@include('layouts_public._header')

@yield('content')
@include('layouts_public._footer')

  <!-- Back to Top -->
  <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="{{ url('assets/home/lib/easing/easing.min.js') }}"></script>
  <script src="{{ url('assets/home/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ url('assets/home/lib/isotope/isotope.pkgd.min.js') }}"></script>
  <script src="{{ url('assets/home/lib/lightbox/js/lightbox.min.js') }}"></script>

  <!-- Template Javascript -->
  <script src="{{ url('assets/home/js/main.js') }}"></script>
@yield('script')

</body>

</html>