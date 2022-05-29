@extends('parts.app')
@section('contain')

<div class="inner-banner-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-4">
                <div class="inner-content">
                    <h2> My Account</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li> My Account </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-md-8">
                <div class="inner-img">
                    <img src="assets/images/inner-banner/inner-banner2.png" alt="Images">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="my-account-area ptb-100">
    <div class="container">
        <div class="tab account-tab">
            <div class="row">
                <div class="col-lg-4">
                    <ul class="tabs">
                        <li>
                            <a href="#">
                                My Account
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                My Order
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Address
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Log Out
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <div class="tab_content current active">
                        <div class="tabs_item current">
                            <div class="account-tab-item">
                                <div class="account-details">
                                    <h2>Profile Details</h2>
                                    <div class="account-profile">
                                        <div class="account-profile-img">
                                            <img src="assets/images/products/product-profile1.jpg" alt="Images">
                                        </div>
                                        <ul>
                                            <li><a href="#">Upload</a></li>
                                            <li><a href="#">Remove</a></li>
                                        </ul>
                                    </div>
                                    <div class="account-form">
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Megan">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Fox">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder="megan@hello.com">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="+501-529-1747">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="account-form">
                                        <h3>Change Password</h3>
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" placeholder="Current Password">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" placeholder="New Password">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" placeholder="Confirm Password">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <button type="submit" class="default-btn btn-bg-three">
                                                        Confirm
                                                    </button>
                                                </div>
                                                <div class="col-lg-8 col-md-6">
                                                    <button type="submit" class="default-btn btn-bg-three">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabs_item">
                            <div class="account-tab-item">
                                <div class="checkout-order">
                                    <h2>My Orders</h2>
                                    <h3 class="title-item">Item Description & Amount <span>Cash</span></h3>
                                    <ul class="checkout-product">
                                        <li>
                                            <img src="assets/images/products/products-img1.png" alt="Images">
                                            <h3>Organic Butter</h3>
                                            <span>$2.0</span>
                                            <div class="price-tag">$18.0</div>
                                        </li>
                                        <li>
                                            <img src="assets/images/products/products-img2.png" alt="Images">
                                            <h3>Fresh Carrots</h3>
                                            <span>$25.0</span>
                                            <div class="price-tag">$225.0</div>
                                        </li>
                                    </ul>
                                    <div class="total-amount">
                                        <h2 class="amount-title">Sub Total Amount <span>$243.0</span></h2>
                                        <h3 class="vat-title">Vat (5%) <span>$12.0</span></h3>
                                        <h3 class="total-title">Total Amount<span>$255.0</span></h3>
                                    </div>
                                    <div class="amount-btn">
                                        <a href="#" class="default-btn btn-bg-three">Next</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabs_item">
                            <div class="account-tab-item">
                                <div class="address-details">
                                    <h2>My Addresses <a href="#" class="address-edit">Edit</a></h2>
                                    <p>New Jersey</p>
                                    <span>2873 Yorkshire Circle, NC, Carolina</span>
                                </div>
                            </div>
                        </div>
                        <div class="tabs_item">
                            <div class="account-tab-item">
                                <div class="contact-form">
                                    <h2>Log In</h2>
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-12 ">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" required data-error="Please enter your Username or Email" placeholder="Username or Email">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input class="form-control" type="password" name="password" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 form-condition">
                                                <div class="agree-label">
                                                    <input type="checkbox" id="chb1">
                                                    <label for="chb1">
                                                        Remember Me <a class="forget" href="forget-password.html">Forgot My Password?</a>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 ">
                                                <button type="submit" class="default-btn btn-bg-three">
                                                    Log In Now
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
        </div>
    </div>
</div>

@endsection