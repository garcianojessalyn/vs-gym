@extends('layouts.visitor')

@section('title')
	VSGym - Welcome
@endsection

@section('styles')
	<style>
		.banner-image {
			background-image: url('img/banner-img.jpeg');
			background-size: cover;
		}

	</style>
	<script src="https://kit.fontawesome.com/d3fbd9c521.js" crossorigin="anonymous"></script>
@endsection

<head>
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/faviconn.ico') }}">

</head>

@section('navbar')
	<div class="collapse navbar-collapse" id="navbarNav">
		<div class="mx-auto"></div>
		<ul class="navbar-nav">

			<li class="nav-item">
				<a id="navtext4" class="nav-link text-light" href="{{ route('register') }}">Join us</a>
			</li>

			<li class="nav-item dropdown">
				<a id="navtext5" class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
					aria-expanded="false">
					Login
				</a>
				<ul id="navdrop" class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">

					<li><a class="dropdown-item" href="{{ route('login') }}">Login as Gym User</a></li>
					<li><a class="dropdown-item" href="{{ route('staff.login') }}">Login as Gym Admin</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
@endsection

@section('bannerContent')
	<div class="container  text-white">
		<div class="row">
			<div class="col">
				<div class="row">
					<div class="col landingHeader">
					<img src="{{ asset('img/apple-touch-icon.png') }}" alt="" class="img" />
						Welcome To 
						<br>
						<span class="orangeHeader"> VS Gym</span>
						Website!
					</div>
				</div>
				<br />

				<div class="row">
					<div class="col">
						<span class="landingSecondary">Vitality System Gym Management. A website for easy managing gym and for finding a gym. Register Now!
							</span>
					</div>
				</div>

				<br />


				<div class="row text-center">
					<div class="col">
						<div class="row">
							<div class="col">
								<span class="landingMetricCount">
									
								</span>
							</div>
						</div>
						<div class="row">
							<div class="col">
								
							</div>
						</div>
					</div>
					<div class="col">
						<div class="row">
							<span class="landingMetricCount">
								
							</span>
						</div>
						<div class="row">
							<div class="col">
							
							</div>
						</div>
					</div>
					<div class="col">
						<div class="row">
							<span class="landingMetricCount">
								
							</span>
						</div>
						<div class="row">
							<div class="col">
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<img width="100%" src="{{ asset('img/svg/1.svg') }}" alt="svg1">
			</div>
		</div>
	</div>
@endsection

@section('beforeMainContent')
	<div class="masthead" style="background-image: url('{{ asset('img/gray.jpg') }}');">
		<div class="color-overlay d-flex flex-column justify-content-center text-left ">
			<div class="container ">
				<h1 class="barlow banner-header text-dark">Features of <span
						class="color-orange"> Vitality System Gym Management</span>.</h1>

				<span class="poppins text-dark subcaption">This website is designed for Gym Owners to have their own 
					dashboard to store data of their clients, and for Non-member Users to quickly browse and choose
					 desired gym to register for membership through online payments.</span>
			</div>


		</div>

	</div>
@endsection

@section('mainContent')
	<div class="p-5">

		<div class="container">
			<div class="row">
				<div class="col text-center">
					<i class="fa-solid fa-users  big-icon text-orange"></i>
					<br />
					<br />
					<h5 class="barlow">View Members </h5>
					<span class="poppins text-dark subcaption">You can now view, edit, update and delete your members data that recorded on the system website. The Gym Owner Account can manage the members through the dashboard without needing a pen and a book with simply add and type the member's information and you can now manage and keep their records easily. </span>
				</div>

				<div class="col text-center">
					<i class="fa-solid fa-magnifying-glass big-icon text-orange"></i>
					<br />
					<br />
					<h5 class="barlow">Search Available of Gym around Manila!</h5>
					<span class="poppins text-dark subcaption">The gym owner's account will display on the gym lists for the user's who are finding a gym near his location by simply creating an account of Gym User! </span>
				</div>

				<div class="col text-center">
					<i class="fa-solid fa-book big-icon text-orange"></i>
					<br />
					<br />
					<h5 class="barlow">Customize Plan</h5>
					<span class="poppins text-dark subcaption">This webiste will help you create your availability of plans for the member's memberships! </span>
				</div>

			</div>
		</div>

	</div>
@endsection

@section('afterMainContent')
		<div class="color-overlay d-flex flex-column justify-content-center text-start float-start">
			<div class="container ">
				<h1 class="barlow banner-header"> <span class="color-orange">About Us</span></h1>

				<p class="poppins text-dark subcaption">A Computer
					Engineering Students at Technological Institute of 
					the Philippines - Manila conduct a project for Software Design 
					called Gym Management System.

				</p>
				<br>

				<h1 class="barlow banner-header"> <span class="color-orange">Have a Questions?</span></h1>
				<div class="block-23 mb-3">
				<div class="container">
				<div class="col">
	              <ul>
				  <div class="col text-left">
				  	<i class="fa-solid fa-location-dot text-orange"></i>
					<span class="poppins text-dark subcaption"> Visit us at Technological Institute of the Philippines Manila Branch</span></li>
					<div class="col text-left">
					<i class="fa-solid fa-phone text-orange"></i></i>
	                <span class="poppins text-dark subcaption"> 09185126965</span></a></li>
					<div class="col text-left">
					<i class="fa-solid fa-envelope text-orange"></i>
					</span><span class="poppins text-dark subcaption"> vsgym_devs@gmail.com</span></a></li>
					<div class="col text-left">
					<i class="fa-brands fa-twitter text-orange"></i>
					</span><span class="poppins text-dark subcaption"> @vsgym_official</span></a></li>
					<div class="col text-left">
					<i class="fa-brands fa-facebook-square text-orange "></i>
					</span><span class="poppins text-dark subcaption"> VS Gym</span></a></li>

					
	              </ul>
				  <br>
	            </div>
				</div>
				</div>

				<section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a class="gallery img d-flex align-items-center" style="background-image: url(storage/gym_images/lansang.jpg);">
						</a>
						<img src="{{ asset('img/dan.jpg') }}" alt="" class="img-fluid d-block mx-auto" />
                        <div class="text ml-5 mr-lg-4 text-lg-center">
                        <h3>Danica Mae Lansang</h3>
						<span class="poppins text-dark subcaption">Computer Engineering</span>
                        </div>
					</div>
					<div class="col-md-3 ftco-animate">
					<img src="{{ asset('img/jessa.jpeg') }}" alt="" class="img-fluid d-block mx-auto" />
						</a>
                          <div class="text ml-5 mr-lg-4 text-lg-center">
                        <h3>Jessalyn Garciano</h3>
						<span class="poppins text-dark subcaption">Computer Engineering</span>
                        </div>
					</div>
					<div class="col-md-3 ftco-animate">
					<img src="{{ asset('img/jenn.jpg') }}" alt="" class="img-fluid d-block mx-auto" />
						</a>
                        <div class="text ml-5 mr-lg-4 text-lg-center">
                        <h3>Jenny Goyagoy</h3>
						<span class="poppins text-dark subcaption">Computer Engineering</span>
                        </div>
					</div>
        </div>
    	</div>
		
    </section>

			</div>

		</div>

	</div>


	

 

@endsection

@section('bodyScript')
	<script type="text/javascript">
	 var nav = document.getElementById('nav');
	 var navtext1 = document.getElementById('navtext1')
	 var brandnav = document.getElementById('brandnav')
	 var navdrop = document.getElementById('navdrop')

	 window.addEventListener('scroll', function() {
	  if (window.pageYOffset > 100) {
	   nav.classList.add('bgFrosty', 'shadow');
	   navtext4.classList.add('text-dark');
	   navtext5.classList.add('text-dark');
	   brandnav.classList.add('text-dark');
	   navdrop.classList.remove('dropdown-menu-dark')
	  } else {
	   nav.classList.remove('bgFrosty', 'shadow');
	   navtext4.classList.remove('text-dark');
	   navtext5.classList.remove('text-dark');
	   brandnav.classList.remove('text-dark');
	   navdrop.classList.add('dropdown-menu-dark')
	  }
	 });
	</script>
@endsection
