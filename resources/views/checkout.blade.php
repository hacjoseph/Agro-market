@extends('parts.app')
@section('contain')


<div class="inner-banner-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-4">
                <div class="inner-content">
                    <h2>Checkout </h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-md-8">
                <div class="inner-img">
                    <img src="assets/images/inner-banner/inner-banner7.png" alt="Images">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="checkout-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="checkout-form">
                    <div class="contact-form">
                        <h2>Billing Information</h2>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" placeholder=" First Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Country Name</label>
                                        <select class="form-control">
                                            <option value="5">United Arab Emirates</option>
                                            <option value="1">China</option>
                                            <option value="2">United Kingdom</option>
                                            <option value="0">Germany</option>
                                            <option value="3">France</option>
                                            <option value="4">Japan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" class="form-control" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Town/City</label>
                                        <select class="form-control">
                                            <option value="5">Falkland</option>
                                            <option value="1">New Jersey</option>
                                            <option value="2">New York</option>
                                            <option value="0">Berlin</option>
                                            <option value="3">Paris</option>
                                            <option value="4">Tokyo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>State Division</label>
                                        <input type="text" class="form-control" placeholder="State Division">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Street Address</label>
                                        <input type="text" class="form-control" placeholder="Street Address">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Post Code</label>
                                        <input type="text" class="form-control" placeholder="Post Code">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn btn-bg-three">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="checkout-form">
                    <div class="contact-form">
                        <h2>Payment Information</h2>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Card Holder Name</label>
                                        <input type="text" class="form-control" placeholder="Card Holder Name">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Card Number</label>
                                        <input type="text" class="form-control" placeholder="Card Number">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Card Expire</label>
                                        <input type="text" class="form-control" placeholder="dd/mm/yy">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>CVC</label>
                                        <input type="text" class="form-control" placeholder="CVC">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn btn-bg-three">
                                        Place Order
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection