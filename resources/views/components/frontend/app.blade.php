<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords"
        content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>Sandbox - Modern & Multipurpose Bootstrap 5 Template</title>
    <link rel="shortcut icon" href="/assets/img/favicon.png">
    <link rel="stylesheet" href="/assets/css/plugins.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/colors/grape.css">
    <link rel="preload" href="/assets/css/fonts/space.css" as="style" onload="this.rel='stylesheet'">
</head>

<body>
    <div class="content-wrapper">

        {{-- named slot header --}}

        {{ $header }}


        {{ $slot }}

    </div>
    <!-- /.content-wrapper -->
    <footer  style="background-color: #dddbdd;">
        <div class="container py-13 py-md-15">
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-4 col-lg-3">
                    <div class="widget" >
                        <img class="" src="/logo.svg" width="170px" height="30px" alt="">
                        <p class="mb-4">© 2025 East West Bank. <br class="d-none d-lg-block">All rights reserved.</p>
                        <nav class="nav social ">
                            <a href="#"><i class="uil uil-twitter"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                            <a href="#"><i class="uil uil-instagram"></i></a>
                            <a href="#"><i class="uil uil-youtube"></i></a>
                        </nav>
                        <!-- /.social -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title  mb-3">Get in Touch</h4>
                        <address class="pe-xl-13 pe-xxl-15">400 E Kaliste Saloom Rd, Lafayette, Louisiana, USA
                        </address>
                        <a href="mailto:support@ewbcredit.org">support@ewbcredit.org</a>
                        <br>
                        +1-253-453-7124
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title  mb-3">Learn More</h4>
                        <ul class="list-unstyled text-reset mb-0">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Story</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-12 col-lg-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3448.519358929753!2d-92.0083291!3d30.193720999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86249ce0962dbce5%3A0x2a8c36444411430d!2sPark%20Tower%20Office%20Building!5e0!3m2!1sen!2sng!4v1741883309621!5m2!1sen!2sng" width="100%" height="215" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </footer>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="/assets/js/plugins.js"></script>
    <script src="/assets/js/theme.js"></script>
</body>

</html>
