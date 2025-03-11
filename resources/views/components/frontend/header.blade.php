<header class="wrapper bg-soft-primary">
    <nav class="navbar navbar-expand-lg center-nav navbar-light" style="background-color: #dddbdd;">
      <div class="container flex-lg-row flex-nowrap align-items-center">
        <div class="navbar-brand w-100">
          <a href="/">
            <img src="/assets/img/logo-dark.png" alt="" />
          </a>
        </div>
        <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
          <div class="offcanvas-header d-lg-none">
            <h3 class="text-white fs-30 mb-0">Sandbox</h3>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>

                <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>

                <li class="nav-item"><a class="nav-link" href="{{ route('accounts') }}">Accounts</a></li>

                <li class="nav-item"><a class="nav-link" href="{{ route('loans') }}">Loans</a></li>

                <li class="nav-item"><a class="nav-link" href="{{ route('credit-cards') }}">Credit Cards</a></li>

                @auth
                <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
                @else
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                @endauth



            </ul>
            <!-- /.navbar-nav -->
            <div class="offcanvas-footer d-lg-none">
              <div>
                <a href="/cdn-cgi/l/email-protection#adcbc4dfded983c1ccded9edc8c0ccc4c183cec2c0" class="link-inverse"><span class="__cf_email__" data-cfemail="fe97909891be9b939f9792d09d9193">[email&#160;protected]</span></a>
                <br /> 00 (123) 456 78 90 <br />
                <nav class="nav social social-white mt-4">
                  <a href="#"><i class="uil uil-twitter"></i></a>
                  <a href="#"><i class="uil uil-facebook-f"></i></a>
                  <a href="#"><i class="uil uil-dribbble"></i></a>
                  <a href="#"><i class="uil uil-instagram"></i></a>
                  <a href="#"><i class="uil uil-youtube"></i></a>
                </nav>
                <!-- /.social -->
              </div>
            </div>
            <!-- /.offcanvas-footer -->
          </div>
          <!-- /.offcanvas-body -->
        </div>
        <!-- /.navbar-collapse -->
        <div class="navbar-other w-100 d-flex ms-auto">
          <ul class="navbar-nav flex-row align-items-center ms-auto">
            <li class="nav-item dropdown language-select text-uppercase">
              <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">En</a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a class="dropdown-item" href="#">En</a></li>
                <li class="nav-item"><a class="dropdown-item" href="#">De</a></li>
                <li class="nav-item"><a class="dropdown-item" href="#">Es</a></li>
              </ul>
            </li>
            <li class="nav-item d-none d-md-block">
              <a href="/contact.html" class="btn btn-sm btn-primary rounded-pill">Contact</a>
            </li>
            <li class="nav-item d-lg-none">
              <button class="hamburger offcanvas-nav-btn"><span></span></button>
            </li>
          </ul>
          <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-other -->
      </div>
      <!-- /.container -->
    </nav>
    <!-- /.navbar -->
  </header>
