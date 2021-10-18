@extends('layout.menu')
@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bitcoin-Investissement-Home</title>
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
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-facebook"><i class="sr-only">Facebook</i></span></a>
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
	    <div style="margin-left:10%; margin-right:10%" class="container-fluid">
	      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" width="60%" alt="Logo du site"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a style="font-size: 15px" href="{{ url('/') }}" class="nav-link">Home</a></li>
	          <li class="nav-item"><a style="font-size: 15px" href="#How-it-work" class="nav-link">How it Work?</a></li>
	          <li class="nav-item"><a style="font-size: 15px" href="#about" class="nav-link">About</a></li>
	          <li class="nav-item"><a style="font-size: 15px" href="#business" class="nav-link">Business</a></li>
	          <li class="nav-item"><a style="font-size: 15px" href="#Payement" class="nav-link">Payement</a></li>
	          <li class="nav-item"><a style="font-size: 15px" href="#reviews" class="nav-link">Customers Reviews</a></li>
	          <li class="nav-item"><a style="font-size: 15px; border-radius:35px" href="{{ route('register') }}" class="nav-link btn btn-primary">Register Now</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('images/bg2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <div class="col-md-6 ftco-animate d-flex align-items-end">
          	<div class="text w-100">
	            <h1 class="mb-4" style="color: #fff"><strong>Trade and Invest on Crypto Using Our Platform</strong></h1>
	            <p class="mb-4 last" style="color: #fff;padding:10px">We measure our success by the satisfaction of our customers.
					Ethereum asset is a return optimizer that provides a key solution for investment managers that combines institutional-grade technology with strong industry experience and a deep understanding of our clients' needs and goals. .</p>
            </div>
          </div>
          <a href="{{ route('register') }}" class="img-video d-flex align-items-center justify-content-center">
          	<strong>Register</strong>
          </a>
        </div>
      </div>
    </div>

    <section class="ftco-intro">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-4 d-flex">
    				<div class="intro aside-stretch d-lg-flex w-100">
    					<div class="icon">
    						<span class="flaticon-checklist"></span>
    					</div>
    					<div class="text">
    						<h2>Plan Basic</h2>
							<h5>Min deposit: 50 $</h5>
    						<p>Get paid 200% after 48 hours Cancel your deposit anytime.</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex">
    				<div class="intro color-1 d-lg-flex w-100">
    					<div class="icon">
    						<span class="flaticon-checklist"></span>
    					</div>
    					<div class="text">
    						<h2>Advanced plan</h2>
							<h5>Min deposit: 300 $</h5>
    						<p>Get paid 500% after 96 hours Cancel your deposit anytime.</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex">
    				<div class="intro color-2 d-lg-flex w-100">
    					<div class="icon">
    						<span class="flaticon-checklist"></span>
    					</div>
    					<div class="text">
    						<h2>Vip plan</h2>
							<h5>Min deposit: 1000 $</h5>
    						<p>Get paid 800% after 1 week Cancel your deposit anytime..</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>


	{{-- How it work --}}
		<section id="How-it-work" class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Services</span>
            <h2>How It Works</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-4 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="number d-flex align-items-center justify-content-center"><span>01</span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    						<img src="{{ asset('images/register.png') }}" style="width: 50%" alt="register Icon">
	    					</div>
    					</div>
    					<h2>Register</h2>
    					<p>The first step is to contact us after determining your investment plan. .</p>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="number d-flex align-items-center justify-content-center"><span>02</span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    						<img src="{{ asset('images/make-a-donation.png') }}" style="width: 50%" alt="register Icon">
	    					</div>
    					</div>
    					<h2>Make a deposit</h2>
  						<p>Make your investment on our reception address and contact us to confirm the investment .</p>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="number d-flex align-items-center justify-content-center"><span>03</span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    						<img src="{{ asset('images/bitcoin.png') }}" style="width: 50%" alt="register Icon">
	    					</div>
    					</div>
    					<h2>Get paid</h2>
  						<p>All you have to do is wait for the agreed deadline. We take care of making your capital profitable</p>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section id="about" class="ftco-section ftco-no-pb ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url('{{ asset('images/img1.jpg') }}');">
					</div>
					<div class="col-md-6 wrap-about px-md-5 ftco-animate py-5 bg-light">
	          <div class="heading-section">
	          	<span class="subheading">About Us</span>
	            <h2 class="mb-4">Bitcoin-Investissement</h2>

	            <p>Bitcoin-Investissement was founded in 2020. With sizable assets under management, we utilize sophisticated and proven trading strategies. We are cryptocurrency experts, data scientists, and software engineers. Coincident operates with the highest levels of integrity and transparency to best serve our customers.
					We are committed to fully partnering with our clients to ensure they receive the very best value combined with the highest quality service at the best price.</p>

					<h2 class="mb-4">Bitcoin is an innovative payment network and a new kind of money.</h2>

					<p>” Each and every Bitcoin transaction that’s ever been made exists on a public ledger accessible to everyone, making transactions hard to reverse and difficult to fake. That’s by design: Core to their decentralized nature, Bitcoins aren’t backed by the government or any issuing institution, and there’s nothing to guarantee their value besides the proof baked in the heart of the system.</p>
	          </div>

					</div>
				</div>
			</div>
		</section>

		<section id="business" class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
			<h2 class="mb-3">We know how to make your asset profitable</h2>
          	<span class="subheading">BUSINESS PLANS </span>
            
          </div>
        </div>
				<div class="row tabulation mt-4 ftco-animate">
					<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
						  	<div class="img" style="background-image: url(images/services-1.jpg);"></div>
						  	<h3><a href="#">Min deposit: 50 $</a></h3>
						  	<p>Get paid 200% after 48 hours Cancel your deposit anytime.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-2">
						  	<div class="img" style="background-image: url(images/services-2.jpg);"></div>
						  	<h3><a href="#">Min deposit: 300 $</a></h3>
						  	<p>Get paid 500% after 96 hours Cancel your deposit anytime</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-3">
						  	<div class="img" style="background-image: url(images/services-3.jpg);"></div>
						  	<h3><a href="#">Min deposit: 1000 $</a></h3>
						  	<p>Get paid 800% after 1 week Cancel your deposit anytime..</p>
						</div>
					</div>
				</div>
  				<div class="col-md-4">
						<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
						  <li class="nav-item text-left">
						    <a class="nav-link active py-4" data-toggle="tab" href="#services-1">Basic Plan</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-2">Advanced Plan</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-3">Vip plan</a>
						  </li>
						</ul>
					</div>
				
			</div>
		</section>

		{{-- Testiminials --}}
		  
		<section id="reviews" class="ftco-section testimony-section">
			<div class="img img-bg border" style="background-image: url(images/bg_4.jpg);"></div>
			<div class="overlay"></div>
		  <div class="container">
			<div class="row justify-content-center mb-5">
			  <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
				  <span class="subheading">Testimonial</span>
				<h2 class="mb-3">Customers reviews</h2>
			  </div>
			</div>
			<div class="row ftco-animate">
			  <div class="col-md-12">
				<div class="carousel-testimony owl-carousel ftco-owl">
				  <div class="item">
					<div class="testimony-wrap py-4">
						<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
					  <div class="text">
						<p class="mb-4">Invest on this platform is like investing in Ethereum. You are sure to make a profitable. In addition I really like this concept where what the investment strategies are familiar with others to participate and make profit too.</p>
						<div class="d-flex align-items-center">
							<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
							<div class="pl-3">
								<p class="name">Roger Scott</p>
							  </div>
						  </div>
					  </div>
					</div>
				  </div>
				  <div class="item">
					<div class="testimony-wrap py-4">
						<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
					  <div class="text">
						<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<div class="d-flex align-items-center">
							<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
							<div class="pl-3">
								<p class="name">Roger Scott</p>
								<span class="position">Marketing Manager</span>
							  </div>
						  </div>
					  </div>
					</div>
				  </div>
				  <div class="item">
					<div class="testimony-wrap py-4">
						<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
					  <div class="text">
						<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<div class="d-flex align-items-center">
							<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
							<div class="pl-3">
								<p class="name">Roger Scott</p>
								<span class="position">Marketing Manager</span>
							  </div>
						  </div>
					  </div>
					</div>
				  </div>
				  <div class="item">
					<div class="testimony-wrap py-4">
						<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
					  <div class="text">
						<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<div class="d-flex align-items-center">
							<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
							<div class="pl-3">
								<p class="name">Roger Scott</p>
								<span class="position">Marketing Manager</span>
							  </div>
						  </div>
					  </div>
					</div>
				  </div>
				  <div class="item">
					<div class="testimony-wrap py-4">
						<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
					  <div class="text">
						<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<div class="d-flex align-items-center">
							<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
							<div class="pl-3">
								<p class="name">Roger Scott</p>
								<span class="position">Marketing Manager</span>
							  </div>
						  </div>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</section>

		{{-- Plan de payement --}}
		<section id="Payement" >
			<div class="row justify-content-center pb-5 mb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h2>PAYMENT MODE</h2>
					<span class="subheading">Investments are automatically detected by the sender's email adress. We therefore ask you to contact us after each transfer to confirm your investment.</span>
				</div>
        	</div>
			    	
			<div class="ftco-appointment ftco-section img" style="background-image: url(images/bg_2.jpg);">
				<div class="overlay"></div>
				<div class="container">
				<div class="row">
					<div class="col-md-4 ftco-animate d-flex">
						<div class="block-7 w-100">
							<div class="text-center">
								<span class="price"><span class="number">200</span> <sub style="font-size:18px">%</sub></span>
								<span>200% Daily for 48 hours</span>
								<span class="excerpt d-block">BEGINERS PACKAGE</span>
								<ul class="pricing-text mb-5">
									<li class="d-flex justify-content-between">
										<p><i style="color:  #07551c" class="fa fa-check mr-2"></i> Min-Invest</p>
										<p style="color:  #07551c">$50.00</p>
									</li>
									<li class="d-flex justify-content-between">
										<p><i style="color:  #07551c" class="fa fa-check mr-2"></i> Max-Invest</p>
										<p style="color:  #07551c">$299.00</p>
									</li>
									<li class="d-flex justify-content-between">
										<p><i style="color:  #07551c" class="fa fa-check mr-2"></i>Ref Commissions</p>
										<p style="color:  #07551c">10 %</p>
									</li>
									<li class="d-flex justify-content-between">
										<p><i style="color:  #07551c" class="fa fa-check mr-2"></i>Instant Payment</p>
										<p style="color:  #07551c">Yes</p>
									</li><hr>
									<p>
										You will receive 200% daily profit and after48 hours you can withdraw, re-invest or top up
									</p>
								</ul>
								<button id="beginers" class="btn btn-primary fadeInUp d-block px-2 py-3" data-wow-delay=".6s">Invest Now</button>
							</div>
						</div>
					</div>
	
	
					<div class="col-md-4 ftco-animate d-flex">
						<div class="block-7 w-100">
							<div class="text-center">
								<span class="price"><span class="number">500</span> <sub style="font-size:18px">%</sub></span>
								<span>500% Daily for 96 hours</span>
								<span class="excerpt d-block">STANDARD PACKAGE</span>
								<ul class="pricing-text mb-5">
									<li class="d-flex justify-content-between">
										<p><i style="color:  #07551c" class="fa fa-check mr-2"></i> Min-Invest</p>
										<p style="color:  #07551c">$300.00</p>
									</li>
									<li class="d-flex justify-content-between">
										<p><i style="color:  #07551c" class="fa fa-check mr-2"></i> Max-Invest</p>
										<p style="color:  #07551c">$999.00</p>
									</li>
									<li class="d-flex justify-content-between">
										<p><i style="color:  #07551c" class="fa fa-check mr-2"></i>Ref Commissions</p>
										<p style="color:  #07551c">10 %</p>
									</li>
									<li class="d-flex justify-content-between">
										<p><i style="color:  #07551c" class="fa fa-check mr-2"></i>Instant Payment</p>
										<p style="color:  #07551c">Yes</p>
									</li><hr>
									<p>
										You will receive 500% daily profit and after 96 hours you can withdraw, re-invest or top up
									</p>
								</ul>
	
								<button id="standard" class="btn btn-primary d-block px-2 py-3">Invest Now</button>
							</div>
						</div>
					</div>
	
			   <div class="col-md-4 ftco-animate d-flex">
						<div class="block-7 w-100">
							<div class="text-center">
								<span class="price"><span class="number">800</span> <sub style="font-size:18px">%</sub></span>
								<span>800% Daily for 192 hours</span>
								<span class="excerpt d-block">ENTREPRISE PACKAGE</span>
								<ul class="pricing-text mb-5">
									<li class="d-flex justify-content-between">
										<p><i style="color:  #07551c" class="fa fa-check mr-2"></i> Min-Invest</p>
										<p style="color:  #07551c">$1000.00</p>
									</li>
									<li class="d-flex justify-content-between">
										<p><i style="color:  #07551c" class="fa fa-check mr-2"></i> Max-Invest</p>
										<p style="color:  #07551c">$4000.00</p>
									</li>
									<li class="d-flex justify-content-between">
										<p><i style="color:  #07551c" class="fa fa-check mr-2"></i>Ref Commissions</p>
										<p style="color:  #07551c">10 %</p>
									</li>
									<li class="d-flex justify-content-between">
										<p><i style="color:  #07551c" class="fa fa-check mr-2"></i>Instant Payment</p>
										<p style="color:  #07551c">Yes</p>
									</li><hr>
									<p>
										You will receive 800% daily profit and after 192 hours you can withdraw, re-invest or top up
									</p>
								</ul>
	
								<button id="entreprise" class="btn btn-primary d-block px-2 py-3">Invest Now</button>
							</div>
						</div>
					</div>
			  </div>
			</div>

			</div>
    </section>

	   <!--Modal: Beginers-->
<div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-notify" role="document">
  <!--Content-->
  <div class="modal-content text-center modal-info">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalToggleLabel1">BEGINERS PACKAGE</h5>
    </div>
    <!--Body-->
    <div class="modal-body">
      
      <li class="d-flex justify-content-between">
        <p>Bitcoin Wallet: </p>
        <p style="color:  #3ecf8e">code</p>
      </li> <hr>
      <li class="d-flex justify-content-between">
        <p>Perfect Money : </p>
        <p style="color:  #3ecf8e">code</p>
      </li> <hr>
      <li class="d-flex justify-content-between">
        <p>Payeer : </p>
        <p style="color:  #3ecf8e">code...</p>
      </li>

    </div>
    <div class="last modal-footer">
      <P style="color: #fff">Copier le code</P>
    </div>
  </div>
  <!--/.Content-->
</div>
</div>
<!--Modal: Beginers-->


   <!--Modal: Standard-->
   <div class="modal fade" id="modalPushStandard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify" role="document">
     <!--Content-->
     <div class="modal-content text-center modal-info">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalToggleLabel1">STANDARD PACKAGE</h5>
       </div>
       <!--Body-->
       <div class="modal-body">
         
         <li class="d-flex justify-content-between">
           <p>Bitcoin Wallet : </p>
           <p style="color:  #3ecf8e">code</p>
         </li> <hr>
         <li class="d-flex justify-content-between">
           <p>Perfect Money : </p>
           <p style="color:  #3ecf8e">code</p>
         </li> <hr>
         <li class="d-flex justify-content-between">
           <p>Payeer : </p>
           <p style="color:  #3ecf8e">code...</p>
         </li>
   
       </div>
       <div class="last modal-footer">
        <P style="color: #fff">Copier le code</P>
       </div>
     </div>
     <!--/.Content-->
   </div>
   </div>
   <!--Modal: Standard-->

      <!--Modal: Entreprise-->
<div class="modal fade" id="modalPushEntreprise" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-notify" role="document">
  <!--Content-->
  <div class="modal-content text-center modal-info">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalToggleLabel1">ENTREPRISE PACKAGE</h5>
    </div>
    <!--Body-->
    <div class="modal-body">
      
      <li class="d-flex justify-content-between">
        <p>Bitcoin Wallet : </p>
        <p style="color:  #3ecf8e">code</p>
      </li> <hr>
      <li class="d-flex justify-content-between">
        <p>Perfect Money : </p>
        <p style="color:  #3ecf8e">code</p>
      </li> <hr>
      <li class="d-flex justify-content-between">
        <p>Payeer : </p>
        <p style="color:  #3ecf8e">code...</p>
      </li>

    </div>
    <div class="last modal-footer">
      <P style="color: #fff">Copier le code</P>
    </div>
  </div>
  <!--/.Content-->
</div>
</div>
<!--Modal: Entreprise-->


	

@endsection

@section('script')
<script type="text/javascript">
	$('#beginers').click(function() {
		$('#modalPush').modal('toggle')
	});

	$('#standard').click(function() {
		$('#modalPushStandard').modal('toggle')
	});

	$('#entreprise').click(function() {
		$('#modalPushEntreprise').modal('toggle')
	});
</script>
	
@endsection