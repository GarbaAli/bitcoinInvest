@extends('layout.menu')
@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bitcoin-Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>

  	<div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex align-items-center">
						<p class="mb-0 phone pl-md-2">
							<a href="#"><span class="fa fa-paper-plane mr-1"></span>  info@bitcoin-investissement.com</a>
						</p>
					</div>
					<div class="col-md-6 d-flex justify-content-md-end">
						<div class="social-media">
			    		<p class="mb-0 d-flex">
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
			    		</p>
		        </div>
					</div>
				</div>
			</div>
		</div>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div style="margin-left:10%" class="container-fluid">
	      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" width="60%" alt="Logo du site"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a style="font-size: 15px" href="{{ url('/') }}" class="nav-link">Home</a></li>
	          <li class="nav-item"><a style="font-size: 15px" href="{{ url('/') }}#How-it-work" class="nav-link">How it Work?</a></li>
	          <li class="nav-item"><a style="font-size: 15px" href="{{ url('/') }}#about" class="nav-link">About</a></li>
	          <li class="nav-item"><a style="font-size: 15px" href="{{ url('/') }}#business" class="nav-link">Business</a></li>
	          <li class="nav-item"><a style="font-size: 15px" href="{{ url('/') }}#Payement" class="nav-link">Payement</a></li>
	          <li class="nav-item"><a style="font-size: 15px" href="{{ url('/') }}#reviews" class="nav-link">Customers Reviews</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate mb-5 text-center">
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{ url('/') }}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Register Now<i class="fa fa-chevron-right"></i></span></p>
              <h1 class="mb-0 bread">Register Now</h1>
            </div>
          </div>
        </div>
      </section>
  
          <section class="ftco-section bg-light">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-md-12">
                          <div class="wrapper px-md-4">
                              <div class="row mb-5">
                                  <div class="col-md-6">
                                      <div class="dbox w-100 text-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-paper-plane"></span>
                                        </div>
                                        <div class="text">
                                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@bitcoin-investissement.com</a></p>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="dbox w-100 text-center">
                                  <div class="icon d-flex align-items-center justify-content-center">
                                      <span class="fa fa-globe"></span> 
                                  </div>
                                  <div class="text">
                                  <p><span>Website</span> <a href="{{ url('/') }}">bitcoin-investissement.com</a></p>
                                </div>
                            </div>
                                  </div>
                              </div>
                              <div class="row no-gutters">
                                  <div class="col-md-7">
                                        <!-- Message derreurs -->
                                        @if ($errors->any())
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            <button type="button" class="close" data-dismiss="alert"  aria-label="Close"> 
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @endif
                                        <!-- Fin message errreurs -->
                                      <div class="contact-wrap w-100 p-md-5 p-4">
                                          <h3 class="mb-4">Contact Us</h3>
                                          <form method="POST" id="contactForm" action="{{ route('sendData') }}" name="contactForm" class="contactForm">
                                            @csrf
                                              <div class="row">
                                                  <div class="col-md-6">
                                                      <div class="form-group">
                                                          <label class="label" for="name">Full Name</label>
                                                          <input type="text" id="name" value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username">
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6"> 
                                                      <div class="form-group">
                                                          <label class="label" for="email">Wallet</label>
                                                          <input type="text" id="wallet" value="{{ old('wallet') }}" name="wallet" placeholder="Wallet Adress" class="form-control @error('wallet') is-invalid @enderror">
                                                      </div>
                                                  </div>
                                                  <div class="col-md-12">
                                                      <div class="form-group">
                                                          <label class="label" for="subject">Amount</label>
                                                          <input type="text" id="amount" class="form-control @error('amount') is-invalid @enderror" value="{{ old('amount') }}" name="amount" placeholder="Amount">
                                                      </div>
                                                  </div>
                                                  <div class="col-md-12">
                                                      <div class="form-group">
                                                          <label class="label" for="#">Email Adress</label>
                                                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" name="email" placeholder="Email Adress">
                                                      </div>
                                                  </div>
                                                  <div class="col-md-12">
                                                      <div class="form-group">
                                                          <input type="submit" value="Register" class="btn btn-primary">
                                                          <div class="submitting"></div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                                  <div class="col-md-5 order-md-first d-flex align-items-stretch">
                                      <div id="map" class="map"></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>

          @endsection