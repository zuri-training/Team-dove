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

    <title>Create an account - Auth_Wiki - Team Dove</title>
</head>
<body class="auth">

@include('layout.topbar')
<nav class="navbar navbar-expand-lg px-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="logo" height="40px">
        </a>
    </div>
</nav>
<section class="container" id="hero-auth">
    <div class="row section align-items-center justify-content-start my-5">
        <div class="col-12 col-md-6 mb-4">
            <h1 class="text-main my-4">Create an account</h1>
            <form action="#" method="post">
                <div class="form-row">
                    <div class="col mb-3">
                        <input type="text" name="full_name" id="full_name" class="form-control form-control-lg" placeholder="Full name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col mb-3">
                        <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Email">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col mb-3">
                        <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col mb-3">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control form-control-lg" placeholder="Confirm password">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col mb-3">
                        <label for="accept_terms" class="form-check-label">
                            <input type="checkbox" name="accept_terms" id="accept_terms" class="form-check-input">
                            Creating an account means you are okay with our <a href="#">Terms of Service</a> and our <a href="#">Privacy Policy</a>.
                        </label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col mb-3">
                        <button type="submit" name="create_account" class="btn btn-main btn-lg">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>  
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>