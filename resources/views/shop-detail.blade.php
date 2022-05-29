@extends('parts.app')
@section('contain')

<div class="inner-banner-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-4">
                <div class="inner-content">
                    <h2>Shop Details</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Shop Details</li>
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


<div class="product-details-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="product-detls-image">
                    <img src="assets/images/products/shop-details-img.png" alt="Image">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="product-desc">
                    <h3>Black Fresh Berry</h3>
                    <div class="price">
                        <span class="new-price">$20.00</span>
                        <span class="old-price">$30.00</span>
                    </div>
                    <div class="product-review">
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <a href="#" class="rating-count">3 reviews</a>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et.
                    </p>
                    <div class="input-count-area">
                        <h3>Quantity</h3>
                        <div class="input-counter">
                            <span class="minus-btn"><i class='bx bx-minus'></i></span>
                            <input type="text" value="1">
                            <span class="plus-btn"><i class='bx bx-plus'></i></span>
                        </div>
                    </div>
                    <div class="product-add-btn">
                        <button type="submit" class="default-btn btn-bg-three">
                            <i class="fas fa-cart-plus"></i> Buy Now!
                        </button>
                        <button type="submit" class="default-btn btn-bg-three">
                            <i class="fas fa-cart-plus"></i> Add To Cart
                        </button>
                    </div>
                    <div class="product-share">
                        <ul>
                            <li>
                                <span>Share:</span>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="product-tab pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="tab products-details-tab">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <ul class="tabs">
                                <li>
                                    <a href="#">
                                        Description
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Reviews
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Shipping Information
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="tab_content current active pt-45">
                                <div class="tabs_item current">
                                    <div class="products-tabs-decs">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu neque ut ipsum tempor varius. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam eget ligula eget sem lacinia varius. Maecenas maximus vitae ligula sit amet placerat. Suspendisse elementum porttitor erat tempus malesuada. Vestibulum lorem ipsum, congue sed risus cursus, condimentum luctus nibh. Ut convallis ultrices lorem. Donec blandit purus ac lacus finibus, nec feugiat elit auctor.</p>
                                    </div>
                                </div>
                                <div class="tabs_item">
                                    <div class="products-tabs-reviews">
                                        <ul>
                                            <li>
                                                <img src="assets/images/products/product-profile1.jpg" alt="Image">
                                                <h3>Devit M. kolin</h3>
                                                <div class="content">
                                                    <div class="rating">
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star-half'></i>
                                                    </div>
                                                    <span>19 Jan 2020</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
                                            </li>
                                            <li>
                                                <img src="assets/images/products/product-profile2.jpg" alt="Image">
                                                <h3>Donam. Markin</h3>
                                                <div class="content">
                                                    <div class="rating">
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star-half'></i>
                                                    </div>
                                                    <span>14 April 2020</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
                                            </li>
                                        </ul>
                                        <div class="reviews-form">
                                            <div class="contact-form">
                                                <h3>Add Your Review</h3>
                                                <p>Lorem ipsum dolo sit amet, consectetur adipisicing eiusmod tempor incididun </p>
                                                <div class="rating">
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star-half'></i>
                                                </div>
                                                <form id="contactForm">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-6">
                                                            <div class="form-group">
                                                                <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name*">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-6">
                                                            <div class="form-group">
                                                                <input type="email" name="email_address" id="email_address" required data-error="Please enter email address" class="form-control" placeholder="Email Address*">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Your Message"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12">
                                                            <button type="submit" class="default-btn btn-bg-three">
                                                                Send Your Message
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs_item">
                                    <div class="products-tabs-shipping">
                                        <ul>
                                            <li>
                                                Address:
                                                <span>Virgil A Stanton, Virginia, USA</span>
                                            </li>
                                            <li>
                                                Phone:
                                                <a href="tel:+1(123)-456-7890-3524">+1 (123) 456 7890 3524</a>
                                            </li>
                                            <li>
                                                Email:
                                                <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#c2aaa7aeaead82aaabaeadeca1adaf"><span class="__cf_email__" data-cfemail="c8a0ada4a4a788a0a1a4a7e6aba7a5">[email&#160;protected]</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="related-products-area pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Related Products</h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="product-img">
                        <a href="{{asset('shop-detail')}}">
                            <img src="assets/images/products/products-img1.png" alt="Product Images">
                        </a>
                        <div class="product-item-tag">
                            <h3>New</h3>
                        </div>
                        <ul class="product-item-action">
                            <li><a href="#"><i class='bx bx-repost'></i></a></li>
                            <li><a href="wishlist.html"><i class='bx bx-heart'></i></a></li>
                            <li><a href="cart.html"><i class='bx bx-cart'></i></a></li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3><a href="{{asset('shop-detail')}}">Organic Butter</a></h3>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <span>$12.0/Kg </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="product-img">
                        <a href="{{asset('shop-detail')}}">
                            <img src="assets/images/products/products-img2.png" alt="Product Images">
                        </a>
                        <div class="product-item-tag">
                            <h3>-22%</h3>
                        </div>
                        <ul class="product-item-action">
                            <li><a href="#"><i class='bx bx-repost'></i></a></li>
                            <li><a href="wishlist.html"><i class='bx bx-heart'></i></a></li>
                            <li><a href="cart.html"><i class='bx bx-cart'></i></a></li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3><a href="{{asset('shop-detail')}}">Fresh Carrots</a></h3>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <span>$5.0/Kg <del>$7.0/Kg</del></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="product-img">
                        <a href="{{asset('shop-detail')}}">
                            <img src="assets/images/products/products-img3.png" alt="Product Images">
                        </a>
                        <div class="product-item-tag">
                            <h3>New</h3>
                        </div>
                        <ul class="product-item-action">
                            <li><a href="#"><i class='bx bx-repost'></i></a></li>
                            <li><a href="wishlist.html"><i class='bx bx-heart'></i></a></li>
                            <li><a href="cart.html"><i class='bx bx-cart'></i></a></li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3><a href="{{asset('shop-detail')}}">Green Cucumber</a></h3>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <span>$2.0/Kg <del>$3.0/Kg</del></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="product-img">
                        <a href="{{asset('shop-detail')}}">
                            <img src="assets/images/products/products-img4.png" alt="Product Images">
                        </a>
                        <div class="product-item-tag">
                            <h3>-10%</h3>
                        </div>
                        <ul class="product-item-action">
                            <li><a href="#"><i class='bx bx-repost'></i></a></li>
                            <li><a href="wishlist.html"><i class='bx bx-heart'></i></a></li>
                            <li><a href="cart.html"><i class='bx bx-cart'></i></a></li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3><a href="{{asset('shop-detail')}}">Fresh Pineapple</a></h3>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <span>$2.0/Kg <del>$3.0/Kg</del></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection