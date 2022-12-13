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

    <title>Confirm your Email - Auth_Wiki - Team Dove</title>
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
        <div class="col-12 col-md-5 mb-4">
            <h1 class="text-main my-2">Forgot Password</h1>
            <p class="mb-4">Fill in the email address you used to register.</p>
            <form action="#" method="post">
                @csrf
                <div class="form-row">
                    <div class="col mb-4">
                        <label for="confirm-email">Enter your email</label>
                        <input type="email" name="confirm_email" id="confirm_email" class="form-control form-control-lg mt-2" placeholder="you@example.com">
                    </div>
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col mb-3 d-grid">
                        <button type="submit" name="send_link" class="btn btn-main btn-lg d-inline">Send reset link</button>
                    </div>
                    <div class="col mb-3 d-grid">
                        <a href="{{ route('login') }}" class="btn btn-light btn-lg border border-primary">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>  
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>