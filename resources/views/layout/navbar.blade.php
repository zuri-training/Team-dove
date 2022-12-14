<nav class="navbar navbar-expand-lg bg-white px-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="logo" height="40px">
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item mx-2">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#">Libraries</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#">Contribute</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#">Community</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <a class="btn btn-main" href="{{ route('register') }}">Get Started</a>
            </ul>
        </div>
    </div>
</nav>