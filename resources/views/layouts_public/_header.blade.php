<!-- Navbar Start -->
<div class="container-fluid bg-light position-relative shadow">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
        <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px;">
            <i class="flaticon-043-teddy-bear"></i>
            <span class="text-primary">KidKinder</span>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav font-weight-bold mx-auto py-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="class.html" class="nav-item nav-link">Classes</a>
                <a href="team.html" class="nav-item nav-link">Teachers</a>
                <a href="gallery.html" class="nav-item nav-link">Gallery</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="blog.html" class="dropdown-item">Blog Grid</a>
                        <a href="single.html" class="dropdown-item">Blog Detail</a>
                        <a href="{{ url('/listmenu') }}" class="dropdown-item">{{ __('Menu') }}</a>
                        <a href="{{ url('/employee') }}" class="dropdown-item">{{ __('Employee') }}</a>
                        <a href="{{ url('/post') }}" class="dropdown-item">{{ __('Post') }}</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            @guest
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="btn btn-primary px-4">{{ __('Login') }}</a>
                @endif

                <!-- @if (Route::has('register')) -->
                    <a style="margin-left: 10px;" href="{{ route('register') }}" class="btn btn-primary px-4">{{ __('Register') }}</a>
                <!-- @endif -->
            @else
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="{{ route('logout') }}" class="dropdown-item"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <!-- <a href="single.html" class="dropdown-item">Blog Detail</a> -->
                    </div>
                </div>
            @endguest
        </div>
    </nav>
</div>
<!-- Navbar End -->