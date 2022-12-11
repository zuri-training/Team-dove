<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--Import fontawesome icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Import Custom CSS-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!--Import favicon-->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

    <title>Auth_Wiki - Homepage - Team Dove</title>
</head>
<body>

@include('layout.topbar')
@include('layout.navbar')

<section class="container" id="hero">
     <div class="row section mt-5 align-items-center justify-content-center">
        <div class="col-12 col-md-6 mb-4">
            <h1 class="text-main">Auth_Wiki</h1>
            <p>
                Build and deploy your projects faster, with our suite of user authentication libraries for major programming languages and frameworks.
            </p>
            <p>
                Auth_wiki is an open source platform, built and maintained by developers like you, to make the work easier for everyone.
            </p>
            <a href="#" class="btn btn-main btn-lg">Get Started</a>
        </div>
        <div class="col-12 col-md-6 mb-4 text-center">
            <img src="{{asset('images/hero-image.png')}}" alt="hero-image" height="400px">
        </div>
    </div>  
</section>

<section class="container" id="build">
    <div class="row section my-4 align-items-center">
        <div class="col-12 col-md-7 mb-4">
            <img src="{{ asset('images/icon-curly-bracket.png' )}}" alt="hero-image"  class="mb-4">
            <h2>Build and deploy your codes, faster.</h2>
            <p class="my-3">
                With our developer-tested authentication code libraries, you get to build your applications faster, without worrying about the authentication of users. <br> Just download the code library for your preferred language, and hook it into your project.
            </p>
            <div>
                <a href="#" class="ml-3">View available libraries</a>
                <i class="fas fa-arrow-right"></i>
            </div>
        </div>
    </div>
</section>

<section class="container" id="libraries">
    <div class="row section my-4 align-items-center">
        <div class="col-12 col-md-7 mb-4">
            <img src="{{ asset('images/icon-plug-in.png') }}" alt="hero-image"  class="mb-4">
            <h2>Just plug it in.</h2>
            <p class="my-3">
                Because of the way our libraries are built, all you need to do is download, and include in your project. So simple!
            </p>
            <div>
                <a href="#" class="ml-3">View available libraries</a>
                <i class="fas fa-arrow-right"></i>
            </div>
        </div>
    </div>
</section>

<section class="container" id="plug-in">
    <div class="row my-4 align-items-center justify-content-center">
        <div class="col-12 text-center mb-4">
            <h2>Browse Libraries</h2>
        </div>
    </div>
    <div class="row section align-items-center justify-content-center">
        <div class="col-12 col-md-3 mb-4">
            <div class="card border border-0">
                <div class="card-body text-center">
                    <div class="rounded p-5 bg-php">
                        <img src="{{ asset('images/php-logo.png') }}" alt="php-logo" height="96px">
                    </div>  
                    <a href="#" class="stretched-link link-plain">                  
                        <h4 class="my-3">PHP</h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-4">
            <div class="card border border-0">
                <div class="card-body text-center">
                    <div class="rounded p-5 bg-node">
                        <img src="{{ asset('images/nodejs-logo.png') }}" alt="nodejs-logo" height="96px">
                    </div>  
                    <a href="#" class="stretched-link link-plain">                  
                        <h4 class="my-3">Node JS</h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-4">
            <div class="card border border-0">
                <div class="card-body text-center">
                    <div class="rounded p-5 bg-python">
                        <img src="{{ asset('images/python-logo.png') }}" alt="python-logo" height="96px">
                    </div>  
                    <a href="#" class="stretched-link link-plain">                  
                        <h4 class="my-3">Python</h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-4">
            <div class="card border border-0">
                <div class="card-body text-center">
                    <div class="rounded p-5 bg-cplus">
                        <img src="{{ asset('images/c-plus-logo.png') }}" alt="c++logo" height="96px">
                    </div>  
                    <a href="#" class="stretched-link link-plain">                  
                        <h4 class="my-3">C ++</h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-4">
            <div class="card border border-0">
                <div class="card-body text-center">
                    <div class="rounded p-5 bg-java">
                        <img src="{{ asset('images/java-logo.png') }}" alt="java-logo" height="96px">
                    </div>  
                    <a href="#" class="stretched-link link-plain">                  
                        <h4 class="my-3">Java</h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-4">
            <div class="card border border-0">
                <div class="card-body text-center">
                    <div class="rounded p-5 bg-csharp">
                        <img src="{{ asset('images/c-sharp-logo.png') }}" alt="c-sharp-logo" height="96px">
                    </div>  
                    <a href="#" class="stretched-link link-plain">                  
                        <h4 class="my-3">C #</h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-4">
            <div class="card border border-0">
                <div class="card-body text-center">
                    <div class="rounded p-5 bg-laravel">
                        <img src="{{ asset('images/laravel-logo.png') }}" alt="laravel-logo" height="96px">
                    </div>  
                    <a href="#" class="stretched-link link-plain">                  
                        <h4 class="my-3">Laravel</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


@include('layout.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>