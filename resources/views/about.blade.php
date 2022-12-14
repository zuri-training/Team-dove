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
    <title>About Auth_Wiki - Team Dove</title>
    <link rel="stylesheet" href="about.css" />
</head>
<body>
	
@include('layout.topbar')

@include('layout.navbar')
    
    <section class="container mt-5">
        <div class="row section align-items-center">
          <div class="col-12 col-md-6">
              <h1 class="text-main mb-3">About Auth_wiki</h1>
              <p class="mb-3">
				Auth_wiki is an open source platform, built and maintained by developers like you, to make the work easier for everyone.
			  </p>
			  <p class="mb-3">
				Build and deploy your projects faster, with our suite of user authentication libraries for major programming languages and frameworks.
			</p>
			<p class="mb-3">
				Auth_Wiki was built on Laravel, an open-source PHP framework for Artisans.
			</p>
        </div>
    </section>
	<section class="container" id="intro">
		<div class="row align-items-center g-0">
			<div class="col-12 col-md-4 mb-0 mb-md-3">
				<div class="intro-img-about p-0"></div>
			</div>
			<div class="col-12 col-md-8 bg-cplus p-5 mb-3">
				<h2 class="text-main mb-3">Why Our Auth-Wiki Library?</h2>
				<p class="mb-3 lh-lg">
					Auth-Wiki gives you convenience of development. With our Libraries, you get to develop your projects, without worrying about authentication - we provide that.
				</p>
				<p class="mb-3 lh-lg">
					Auth_Wiki gives you speed of delivery. With our already made libraries of authentication, you get to deliver your projects faster than without them.
				</p>
				<p class="mb-3 lh-lg">
					Auth_Wiki ensures security. Our libraries are built by and vetted by seasoned developers and cyber security experts, to ensure that the codes you inject in your projects are free of any security threats. Build with peace of mind.
				</p>
			</div>
		</div>
	</section>

	<section class="container my-5 section" id="team">
		<div class="row">
			<div class="col text-center">
				<h2 class="text-main my-5">Meet Our Team</h2>
			</div>
		</div>
		<div class="row align-items-center justify-content-center my-3">
			<div class="col-12 col-md text-center mb-3">
				<div class="team-member">
					<img src="{{ asset('images/otusanya-iyabo.png') }}" alt="Otusanya Iyabo" d-block mx-auto>
					<h5 class="my-3">Otusanya Iyabo</h5>
					<h6>Project Team lead</h6>
					<p>Product Design</p>
				</div>
			</div>
			<div class="col-12 col-md text-center mb-3">
				<div class="team-member">
					<img src="{{ asset('images/babatunde-olanrewaju.png') }}" alt="Babatunde Olanrewaju" d-block mx-auto>
					<h5 class="my-3">Babatunde Olanrewaju</h5>
					<h6>Ass. Team lead</h6>
					<p>Frontend + PHP</p>
				</div>
			</div>
			<div class="col-12 col-md text-center mb-3">
				<div class="team-member">
					<img src="{{ asset('images/obinna-akaolisa.png') }}" alt="Obinna Akaolisa" d-block mx-auto>
					<h5 class="my-3">Obinna Akaolisa</h5>
					<h6>Dev. Team lead</h6>
					<p>Frontend + PHP</p>
				</div>
			</div>
			<div class="col-12 col-md text-center mb-3">
				<div class="team-member">
					<img src="{{ asset('images/christopher-adeyemi.png') }}" alt="Christopher Adeyemi" d-block mx-auto>
					<h5 class="my-3">Christopher Adeyemi</h5>
					<h6>Ass. Dev. Team lead</h6>
					<p>Frontend + PHP</p>
				</div>
			</div>
			<div class="col-12 col-md text-center mb-3">
				<div class="team-member">
					<img src="{{ asset('images/godwin-uchechukwu.png') }}" alt="Godwin Uchechukwu" d-block mx-auto>
					<h5 class="my-3">Godwin Uchechukwu</h5>
					<h6>Design Team lead</h6>
					<p>Product Design</p>
				</div>
			</div>
		</div>
		<div class="row align-items-center justify-content-center my-3">
			<div class="col-12 col-md text-center mb-3">
				<div class="team-member">
					<img src="{{ asset('images/aisha-sanusi.png') }}" alt="Aisha Sanusi" d-block mx-auto>
					<h5 class="my-3">Aisha Sanusi</h5>
					<h6>Ass. Design Team lead</h6>
					<p>Product Design</p>
				</div>
			</div>
			<div class="col-12 col-md text-center mb-3">
				<div class="team-member">
					<img src="{{ asset('images/jemine-okorodudu.png') }}" alt="Jemine Okorodudu" d-block mx-auto>
					<h5 class="my-3">Jemine Okorodudu</h5>
					<h6>Team member</h6>
					<p>Product Design</p>
				</div>
			</div>
			<div class="col-12 col-md text-center mb-3">
				<div class="team-member">
					<img src="{{ asset('images/dorcas-samuel.png') }}" alt="Dorcas Samuel" d-block mx-auto>
					<h5 class="my-3">Dorcas Samuel</h5>
					<h6>Team member</h6>
					<p>Frontend + PHP</p>
				</div>
			</div>
			<div class="col-12 col-md text-center mb-3">
				<div class="team-member">
					<img src="{{ asset('images/confidence-asor.png') }}" alt="Confidence Asor" d-block mx-auto>
					<h5 class="my-3">Confidence Asor</h5>
					<h6>Team member</h6>
					<p>Product Design</p>
				</div>
			</div>
			<div class="col-12 col-md text-center mb-3">
				<div class="team-member">
					<img src="{{ asset('images/moyin-ojo.png') }}" alt="Moyin Ojo" d-block mx-auto>
					<h5 class="my-3">Moyin Ojo</h5>
					<h6>Team member</h6>
					<p>Product Design</p>
				</div>
			</div>
		</div>
	</section>
    
	@include('layout.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>