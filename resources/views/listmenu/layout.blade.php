<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Produk</title>
  <!-- Customized Bootstrap Stylesheet -->
  <link href="{{ url('assets/home/css/style.css') }}" rel="stylesheet">
  <link href="{{ url('assets/css/custom.css') }}" rel="stylesheet">
    <!-- <script src="{{ ('/build/assets/js/custom.js') }}"></script> -->
  <!-- Flaticon Font -->
  <link href="{{ url('assets/home/lib/flaticon/font/flaticon.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet"/>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    
@auth

<div class="d-flex align-items-start konten-login">
    <div class="nav flex-column nav-pills side-left" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <h5 class="text-center juduul">
            <a class="navbar-brand" href="{{ url('/home') }}">
                <img src="{{ ('build/assets/img/cms-assets/Handbag.png')}}"/>
            </a>
            <b>
                <label style="padding:10px;padding-right:20px;">SIMS Web App</label>
                <a class="toggle-side" href="" >
                    <i class="fa fa-list" aria-hidden="true"></i>
                </a>
            </b>
        </h5>
        <button class="nav-link active" id="v-pills-produk-tab" data-bs-toggle="pill" data-bs-target="#v-pills-produk" type="button" role="tab" aria-controls="v-pills-produk" aria-selected="true"><img src="{{ ('build/assets/img/cms-assets/Package.png')}}"/> <label>Produk</label></button>
        <a class="linkk" href="{{ url('/home') }}">
            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><img src="{{ ('build/assets/img/cms-assets/User.png')}}"/> <label>Profile</label></button>
        </a>
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <button style="width:100%;" class="nav-link" id="v-pills-logout-tab" data-bs-toggle="pill" data-bs-target="#v-pills-logout" type="button" role="tab" aria-controls="v-pills-logout" aria-selected="false"><img src="{{ ('build/assets/img/cms-assets/SignOut.png')}}"/> <label>{{ __('Logout') }} </label></button>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    
    </div>
    <div class="tab-content side-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-produk" role="tabpanel" aria-labelledby="v-pills-produk-tab">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        </div>
        <div class="tab-pane fade" id="v-pills-logout" role="tabpanel" aria-labelledby="v-pills-logout-tab"></div>
    </div>
</div>

@else
    
@endauth
</body>
</html>