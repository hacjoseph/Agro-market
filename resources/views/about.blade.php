@extends('parts.app')
@section('contain')

<div class="inner-banner-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-4">
                <div class="inner-content">
                    <h2>ABOUT US</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-md-8">
                <div class="inner-img">
                    <img src="assets/images/inner-banner/inner-banner1.png" alt="Images">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="about-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="assets/images/about-img.jpg" alt="About Images">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-title">
                        <h2>We Are One of the Best and Leading Agency in World</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam dut
                            nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                            erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                            et ea rebum. Stet clita kasd gubergren.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam dut
                            nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                            erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                            et ea rebum. Stet clita kasd gubergren.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="choose-area-three pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Why You Choose Us</h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-4 col-sm-6">
                <div class="choose-card-two choose-card-two-color">
                    <i class="flaticon-24-hours"></i>
                    <h3>24/7 Online Support</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="choose-card-two choose-card-two-color">
                    <i class="flaticon-leaf"></i>
                    <h3>100% Pure Foods</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 offset-lg-0 offset-sm-3">
                <div class="choose-card-two choose-card-two-color">
                    <i class="flaticon-service"></i>
                    <h3>Home Delivery</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="newsletter-area-section-3 pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-title">
                    <span>Get 35% Discount, <b> Subscribe Now</b></span>
                    <h2>Subscribe to Our Newsletters</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                        nonumy eirmod tempor invidunt ut labore et dolore magna aliquy
                        erat, sed diam voluptua. At vero eos et.
                    </p>
                </div>
                <div class="newsletter-area-two newsletter-area-border">
                    <form class="newsletter-form" data-toggle="validator" method="POST">
                        <input type="email" class="form-control" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
                        <button class="subscribe-btn" type="submit">
                            Subscribe
                        </button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="newsletter-img">
                    <img src="assets/images/newsletter-img.jpg" alt="Images">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="team-area pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Our Team Members</h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <a href="{{asset('team')}}">
                        <img src="assets/images/team/team-img1.jpg" alt="Team Images">
                    </a>
                    <ul class="social-link">
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-youtube'></i></a>
                        </li>
                    </ul>
                    <div class="content">
                        <h3><a href="{{asset('team')}}">Adam Smith</a></h3>
                        <span>Ecommerce specilist</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <a href="{{asset('team')}}">
                        <img src="assets/images/team/team-img2.jpg" alt="Team Images">
                    </a>
                    <ul class="social-link">
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-youtube'></i></a>
                        </li>
                    </ul>
                    <div class="content">
                        <h3><a href="{{asset('team')}}">Max Angles</a></h3>
                        <span>Manager</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="team-card">
                    <a href="{{asset('team')}}">
                        <img src="assets/images/team/team-img3.jpg" alt="Team Images">
                    </a>
                    <ul class="social-link">
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-youtube'></i></a>
                        </li>
                    </ul>
                    <div class="content">
                        <h3><a href="{{asset('team')}}">Park Anderson</a></h3>
                        <span>Sales Executive</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection