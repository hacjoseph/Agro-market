@extends('parts.app')
@section('contain')

<div class="inner-banner-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-4">
                <div class="inner-content">
                    <h2>Register</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Register</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-md-8">
                <div class="inner-img">
                    <img src="assets/images/inner-banner/inner-banner5.png" alt="Images">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="user-area pt-100 pb-70">
    <div class="container">
        <div class="user-width">
            <div class="user-form">
                <div class="contact-form">
                    <h2>Register Now</h2>
                    <form>
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="form-group">
                                    <input type="text" class="form-control" required data-error="Please enter your Username" placeholder="Enter Your Username">
                                </div>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="form-group">
                                    <input type="email" class="form-control" required data-error="Please enter your Username or Email" placeholder="Enter Your Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" type="password" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-lg-12 ">
                                <button type="submit" class="default-btn btn-bg-three">
                                    Register Now
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection