

    @yield('content')

    
    <footer class="ftco-footer bg-light">
        <div class="container-fluid" style="margin-left: 10%;margin-right:10%">
          <div class="row mb-12">
            <div class="col-sm-4 col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2 logo"><a style="color: #000" href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" width="70%" alt="Logo du site"></a></h2>
              </div>
            </div>
            <div class="col-md-8 col-sm">
              <ul class="footer-nav">
                  <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                  <li class="nav-item"><a  href="#How-it-work" class="nav-link">How it Work?</a></li>
                  <li class="nav-item"><a  href="#about" class="nav-link">About</a></li>
                  <li class="nav-item"><a  href="#business" class="nav-link">Business</a></li>
                  <li class="nav-item"><a  href="#Payement" class="nav-link">Payement</a></li>
                  <li class="nav-item"><a  href="#reviews" class="nav-link">Customers Reviews</a></li>
                  <li class="nav-item"><a  href="{{ route('register') }}" class="nav-link btn btn-primary btn-sm">Register Now</a></li>
                </ul>
            </div>
          </div>
        </div>
        <div class="container px-0 py-5 last">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                  <p class="mb-0" style="color:#fff;text-align:center;font-weight:bold">
                     Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Bitcoin-Investissement</p>
                </div>
              </div>
            </div>
        </div>
      </footer>
      
    
  
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  
  
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('script')
      
    </body>
  </html>