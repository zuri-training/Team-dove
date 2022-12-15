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

    <title>Library Display - Auth_Wiki - Team Dove</title>
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
<div class="container">
    <h1 class="text-center">Firebase Auth. (Javascript)</h1>
    
    <div class="row">
      <div class="col col-lg-2">
        <h2>Get Started</h2>
        <ul class="list-group">
          <li class="list-group-item">Introduction</li>
          <li class="list-group-item">Content</li>
          <li class="list-group-item">Webpack</li>
          <li class="list-group-item">Parcel</li>
          <li class="list-group-item">Vite</li>
          <li class="list-group-item">Accessibility</li>
          <li class="list-group-item">Browser and device</li>
          <li class="list-group-item">RFS</li>
          <li class="list-group-item">RTL</li>
          <li class="list-group-item">Contribute</li>
        </ul>
      </div>

      <div class="col">
        <h3>Overview</h3>
        <p>
          Firebase is an authenticated service that allows you to easily authenticate users. It provide support for
          email/password, phone number, Google, Facebook sign-in amongst many others. This library will help you get
          started with registering users on your React project.
        </p>
        <h3>
          Packages/dependencies
        </h3>
        <p>
          React&colon; This library enables you to set up sign-up authentication on your react app. Ensure you have npm
          installed on your workstation then set up a new project by running 'npx create-react &lt;APP_NAME&gt;'
        </p>
        <p>
          Firebase module&colon; After setting up your react project, you would need to install the firebase module in
          order to use the package include therein. You can do so by running 'npm install firebase'.
        </p>
        <h3>
          Code Snippet
        </h3>
        <img src="{{asset('images/image 9code snippet.png')}}" alt="code snippet" class="rounded float-left">
        <h4>
          Examples
        </h4>
        <p>
          Time is precious as a developer, and we want to get start building that next idea FAST! To get started, use
          the library&colon;
        </p>
        <ol>
          <li>
            Head over to the Firebase Console and create project.
          </li>
          <li>
            Give your project a name and click to start the process
          </li>
          <li>
            Click on the web icon (&lt;/&gt;) on your project's overview page to register the app.
          </li>
          <li>
            Give your app a name of your choice and click register app.You don't need to enable firebase Hosting.
          </li>
          <li>
            Copy the configuration object under "Add Firebase SDK"
          </li>
          <li>
            Head over to the authentication tab and enable "Email/password" authentication
          </li>
        </ol>
        <p>
          After that is done, create a 'env' to store the configuration information for your project. Your Key should
          match what's after the "REACT_APP_" in the 'initializeApp' object and the value can be obtained from the
          configuration object retrieved in the previous step.
        </p>
        <!-- App key image here -->
        <img src="{{ asset('images/App key.png') }}" alt="App Key" class="img-fluid">
        <p>
          Voila! All the remains is to hook up your library with your input field. Happy coding!
        </p>
        <p>
          Note&colon; You can choose to do away with the REACT_APP prefix if you have the "dotenv" package installed and
          initialized.
        </p>

        <h3>
          LEAVE A COMMENT
        </h3>
        <!-- The comment section Add div to make it inline -->
        <div class="row">
          <div class="col col-lg-1 ">
            <img src="{{ asset('images/otusanya-iyabo') }}" alt="Team leader" class="rounded float-left h-25">
          </div>
          <div class="col col-lg-4">
            <p>
              Your email address will not be published. Required Fields are marked *
            </p>
            <div class="form-outline w-100">
              <textarea class="form-control" id="textAreaExample" rows="4" style="background: #fff;"></textarea>
              <div class="float-end mt-2 pt-1">
                <button type="button" class="btn btn-primary btn-sm">Post comment</button>
                <button type="button" class="btn btn-outline-primary btn-sm">Cancel</button>
              </div>
            </div>
          </div>

          <h3>Comments</h3>
          <div class="row">
            <div class="col col-lg-1 ">
              <img src="{{ asset('images/otusanya-iyabo') }}" alt="Team leader" class="rounded float-left h-25">
            </div>
            <div class="col col-lg-4">
              <p>Jane Doe, 20 Jun 2022, 11:44 am</p>
              <p>
                Thank you for creating this platform. It was a great help for me. Would love to contribute to this
                project.
              </p>
              <div class="row">
                <div class="col">reply</div>
                <div class="col"><i class="fa-solid fa-thumbs-up"></i></div>
                <div class="col"><i class="fa-solid fa-thumbs-down"></i></div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col col-lg-1 ">
              <img src="{{ asset('images/babatunde-olanrewaju.png') }}" alt="visitor" class="rounded float-left h-25">
            </div>
            <div class="col col-lg-4">
              <p>Babatunde Olanrewaju, 29 July 2022, 10:44 pm</p>
              <p>
                What a wonderful platform that made coding faster.
              </p>
              <div class="row">
                <div class="col">reply</div>
                <div class="col"><i class="fa-solid fa-thumbs-up"></i></div>
                <div class="col"><i class="fa-solid fa-thumbs-down"></i></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col col-lg-1 ">
              <img src="{{ asset('images/christopher-adeyemi.png') }}" alt="visitor" class="rounded float-left h-25">

            </div>
            <div class="col col-lg-4">
              <p>Adeyemi, 15 Nov 2022, 8:15 am</p>
              <p>
                I must confess this is a great platform.
              </p>
              <div class="row">
                <div class="col">reply</div>
                <div class="col"><i class="fa-solid fa-thumbs-up"></i></div>
                <div class="col"><i class="fa-solid fa-thumbs-down"></i></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col col-lg-1 ">
              <img src="{{ asset('images/dorcas-samuel.png') }}" alt="visitor" class="rounded float-left h-25">
            </div>
            <div class="col col-lg-4">
              <p>Adeyemi, 22 Nov 2022, 5:19 am</p>
              <p>
                Getting to know this webpage is a wonderful experience and I look forward to more updates from the
                developers.
              </p>
              <div class="row">
                <div class="col">reply</div>
                <div class="col"><i class="fa-solid fa-thumbs-up"></i></div>
                <div class="col"><i class="fa-solid fa-thumbs-down"></i></div>
              </div>
            </div>
          </div>

          <div>
            <h3 class="text-center">Suggested Downloads</h3>
            <div class="d-flex flex-row">
              <div class="p-2">
                <img src="{{ asset('images/images/Rectangle 1.png') }}" class="mx-auto d-block" alt="Suggested Download 1">
              </div>
              <div class="p-2">
                <img src="{{ asset('images/images/Rectangle 2.png') }}" class="mx-auto d-block" alt="Suggested Download 2">
              </div>
              <div class="p-2">
                <img src="{{ asset('images/images/Rectangle 3.png') }}" class="mx-auto d-block" alt="Suggested Download 3">
              </div>
              <div class="p-2">
                <img src="{{ asset('images/images/Rectangle 4.png') }}" class="mx-auto d-block" alt="Suggested Download 4">
              </div>
            </div>
            <div class="d-flex flex-row">
              <div class="p-2">
                <img src="{{ asset('images/images/Rectangle 5.png') }}" class="mx-auto d-block" alt="Suggested Download 5">
              </div>
              <div class="p-2">
                <img src="{{ asset('images/images/Rectangle 6.png') }}" class="mx-auto d-block" alt="Suggested Download 6">
              </div>
              <div class="p-2">
                <img src="{{ asset('images/images/Rectangle 7.png') }}" class="mx-auto d-block" alt="Suggested Download 7">
              </div>
              <div class="p-2">
                <img src="{{ asset('images/images/Rectangle 8.png') }}" class="mx-auto d-block" alt="Suggested Download 8">
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

@include('layout.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>