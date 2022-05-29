@extends('parts.app')
@section('contain')

<div class="inner-banner-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-4">
                <div class="inner-content">
                    <h2>Forget Password</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Forget Password</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-md-8">
                <div class="inner-img">
                    <img src="assets/images/inner-banner/inner-banner6.png" alt="Images">
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
                    <h2>Forget Password</h2>
                    <form>
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="form-group">
                                    <input type="text" class="form-control" required data-error="Please enter username or email" placeholder="Username or Email">
                                </div>
                            </div>
                            <div class="col-lg-12 ">
                                <button type="submit" class="default-btn btn-bg-three">
                                    Reset Now
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