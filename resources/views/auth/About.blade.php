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
    <title>Auth_Wiki - About Us - Team Dove</title>
    <link rel="stylesheet" href="about.css" />
</head>
<body>
@include('layout.topbar')
@include('layout.navbar')
    
    <div class="container mt-5">
        <div class=" m-3">
        <h1 class="text-primary">About Auth_wiki</h1>
        </div>
        <p class="w-50">Auth_wiki is an open source platform, built and maintained by developers like you, to make the work easier for everyone.
         <p class="w-50">Build and deploy your projects faster, with our suite of user authentication libraries for major programming languages and frameworks.</p>
         <p class="w-50">Auth_Wiki was built on Laravel, an open-source PHP framework for Artisans.</p></p>
    </div>
   
    <div class="container container2 mt-5 d-flex justify-content-between align-items-center">

      <div class="imgc"> 
        <img src="Images/intro.png" alt="img" />
      </div>
      <div class="why">
        <div class="m-3">
        <h2 class="text-primary">Why Our Auth-Wiki Library?</h2>
        </div>
        <p>Auth-Wiki Multi-Factor authentication is a layered approach to securing data and applications where a system reqquires a user to 
         present a combination of two or more credentials to verify a user’s identity for login. to increase because even if one credential
         becomes compromised, unauthorised user’s will be unable to meet the second authentication requirement.....<span class="text-primary">View More</span></p>
      </div>
    </div>

    <div class=" text-center pt-3 m-3">
        <h1 class="text-primary">Meet Our Team</h1>
        </div>
    <div class="container mt-5 d-flex justify-content-between align-items-center">
            <div  class="d-flex flex-column align-items-center">
            <img src="Images/otusanya.png" alt="team-lead" />
            <p>Otunsanya Iyabo<p>
            <p class='role'>Team lead<p>
            </div>

            <div  class="d-flex flex-column align-items-center">
            <img src="Images/obinna-akaolisa.png" alt="dev-lead" />
            <p>obinna Akaolisa<p>
            <p class='role'>Developer Team lead<p>
            </div>

            <div  class="d-flex flex-column align-items-center">
            <img src="Images/babatunde-olanrewaju.png" alt="Ass-lead" />
            <p>Babatunde Olanrewaju<p>
            <p class='role'>Ass. Team lead<p>
            </div>

            <div  class="d-flex flex-column align-items-center">
            <img src="Images/christopher-adeyemi.png" alt="Ass.Dev-lead" />
            <p>Christopher Adeyemi<p>
            <p class='role'>Ass. Developer Team lead<p>
            </div>

            <div  class="d-flex flex-column align-items-center">
            <img src="Images/godwin-uchechukwu.png" alt="team-lead" />
            <p>Godwin Uchechukwu<p>
            <p class='role'>Product Designer Team lead<p>
            </div>
       
    </div>
    <div class="container mt-5 d-flex justify-content-between align-items-center">

            <div class="d-flex flex-column align-items-center">
            <img src="Images/aisha-sanusi.png" alt="team-lead" />
            <p>Aisha Sanusi<p>
            <p>Product Designer Ass. Team lead<p>
            </div>

            <div  class="d-flex flex-column align-items-center">
            <img src="Images/jemine-okorodudu.png" alt="team-lead" />
            <p>Jemine Okorodudu<p>
            <p class='role'>Product Designer<p>
            </div>

            <div  class="d-flex flex-column align-items-center">
            <img src="Images/dorcas-samuel.png" alt="team-lead" />
            <p>Dorcas Samuel<p>
            <p class='role'>Frontend + PHP<p>
            </div>

            <div  class="d-flex flex-column align-items-center">
            <img src="Images/confidence-asor.png" alt="team-lead" />
            <p>Confidence Asor<p>
            <p class='role'>Product Designer<p>
            </div>

            <div  class="d-flex flex-column align-items-center">
            <img src="Images/moyin-ojo.png" alt="team-lead" />
            <p>Moyin Ojo<p>
            <p class='role'>Product Designer<p>
            </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>