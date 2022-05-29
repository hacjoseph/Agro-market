@extends('parts.app')

    @section('contain')

    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="banner-item-content">
                        <span>WELCOME TO OUR SHOP</span>
                        <h1>Order the Organic Foods Now!</h1>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscins elitr, seddiams nonumy eirmod.</p>
                        <a href="#" class="default-btn btn-bg-one">Order Now</a>
                        <img src="assets/images/home-one/home-one-img1.png" alt="Banner Images">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="banner-item-side">
                                <h3>Sign Up on Shop</h3>
                                <span>Get a 30% Offer!</span>
                                <a href="#" class="newslette-btn">Newsletter</a>
                                <img src="assets/images/home-one/home-one-img2.png" alt="Banner Images">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="banner-item-side-2">
                                <h3>Big Sale Offer</h3>
                                <span>Up to 70% Discount</span>
                                <a href="shop-grid.html" class="shop-btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="new-arrival-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>New Arrivals</h2>
            </div>
            <div class="row pt-45">
                <div class="col-lg-3 col-sm-6">
                    <div class="new-arrival-item">
                        <div class="arrival-img">
                            <a href="{{asset('shop-detail')}}">
                                <img src="assets/images/new-arrival-img/new-arrival-1.png" alt="Product Images">
                            </a>
                            <div class="arrival-item-tag">
                                <h3>New</h3>
                            </div>
                            <ul class="arrival-item-action">
                                <li><a href="#"><i class='bx bx-repost'></i></a></li>
                                <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                <li><a href="{{asset('cart')}}"><i class='bx bx-cart'></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3><a href="{{asset('shop-detail')}}">Organic Fresh Capsicum</a></h3>
                            <span>$12.0/Kg <del>$13.0/Kg</del></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="new-arrival-item">
                        <div class="arrival-img">
                            <a href="{{asset('shop-detail')}}">
                                <img src="assets/images/new-arrival-img/new-arrival-2.png" alt="Product Images">
                            </a>
                            <div class="arrival-item-tag">
                                <h3>New</h3>
                            </div>
                            <ul class="arrival-item-action">
                                <li><a href="#"><i class='bx bx-repost'></i></a></li>
                                <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                <li><a href="{{asset('cart')}}"><i class='bx bx-cart'></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3><a href="{{asset('shop-detail')}}">Rear Organic Saffron</a></h3>
                            <span>$4000.0/Kg</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-sm-6">
                    <div class="new-arrival-item">
                        <div class="arrival-img">
                            <a href="{{asset('shop-detail')}}">
                                <img src="assets/images/new-arrival-img/new-arrival-3.png" alt="Product Images">
                            </a>
                            <div class="arrival-item-tag">
                                <h3>-18%</h3>
                            </div>
                            <ul class="arrival-item-action">
                                <li><a href="#"><i class='bx bx-repost'></i></a></li>
                                <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                <li><a href="{{asset('cart')}}"><i class='bx bx-cart'></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3><a href="{{asset('shop-detail')}}">Black Fresh Berry</a></h3>
                            <span>$5.0/Kg <del>$10.0/Kg</del></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-sm-6">
                    <div class="new-arrival-item">
                        <div class="arrival-img">
                            <a href="{{asset('shop-detail')}}">
                                <img src="assets/images/new-arrival-img/new-arrival-4.png" alt="Product Images">
                            </a>
                            <div class="arrival-item-tag">
                                <h3>New</h3>
                            </div>
                            <ul class="arrival-item-action">
                                <li><a href="#"><i class='bx bx-repost'></i></a></li>
                                <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                <li><a href="{{asset('cart')}}"><i class='bx bx-cart'></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3><a href="{{asset('shop-detail')}}">Organic Gooseberry</a></h3>
                            <span>$4.0/Kg <del>$7.0/Kg</del></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-sm-6">
                    <div class="new-arrival-item">
                        <div class="arrival-img">
                            <a href="{{asset('shop-detail')}}">
                                <img src="assets/images/new-arrival-img/new-arrival-5.png" alt="Product Images">
                            </a>
                            <div class="arrival-item-tag">
                                <h3>New</h3>
                            </div>
                            <ul class="arrival-item-action">
                                <li><a href="#"><i class='bx bx-repost'></i></a></li>
                                <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                <li><a href="{{asset('cart')}}"><i class='bx bx-cart'></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3><a href="{{asset('shop-detail')}}">Almond Nuts</a></h3>
                            <span>$12.0/Kg <del>$14.0/Kg</del></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-sm-6">
                    <div class="new-arrival-item">
                        <div class="arrival-img">
                            <a href="{{asset('shop-detail')}}">
                                <img src="assets/images/new-arrival-img/new-arrival-6.png" alt="Product Images">
                            </a>
                            <ul class="arrival-item-action">
                                <li><a href="#"><i class='bx bx-repost'></i></a></li>
                                <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                <li><a href="{{asset('cart')}}"><i class='bx bx-cart'></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3><a href="{{asset('shop-detail')}}">Fresh Banana</a></h3>
                            <span>$2.0/Kg <del>$4.0/Kg</del></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-sm-6">
                    <div class="new-arrival-item">
                        <div class="arrival-img">
                            <a href="{{asset('shop-detail')}}">
                                <img src="assets/images/new-arrival-img/new-arrival-7.png" alt="Product Images">
                            </a>
                            <div class="arrival-item-tag">
                                <h3>New</h3>
                            </div>
                            <ul class="arrival-item-action">
                                <li><a href="#"><i class='bx bx-repost'></i></a></li>
                                <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                <li><a href="{{asset('cart')}}"><i class='bx bx-cart'></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3><a href="{{asset('shop-detail')}}">Fresh Beef Meat</a></h3>
                            <span>$10.0/Kg <del>$12.0/Kg</del></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-sm-6">
                    <div class="new-arrival-item">
                        <div class="arrival-img">
                            <a href="{{asset('shop-detail')}}">
                                <img src="assets/images/new-arrival-img/new-arrival-8.png" alt="Product Images">
                            </a>
                            <div class="arrival-item-tag">
                                <h3>New</h3>
                            </div>
                            <ul class="arrival-item-action">
                                <li><a href="#"><i class='bx bx-repost'></i></a></li>
                                <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                <li><a href="{{asset('cart')}}"><i class='bx bx-cart'></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3><a href="{{asset('shop-detail')}}">Super Natural Brinjal</a></h3>
                            <span>$1.0/Kg <del>$2.0/Kg</del></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="choose-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Why You Choose Us</h2>
            </div>
            <div class="row pt-45">
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-card">
                        <i class="flaticon-24-hours"></i>
                        <h3>24/7 Online Support</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-card">
                        <i class="flaticon-leaf"></i>
                        <h3>100% Pure Foods</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 offset-lg-0 offset-sm-3">
                    <div class="choose-card">
                        <i class="flaticon-service"></i>
                        <h3>Home Delivery</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="trending-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Trending Products</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget arcu luctus orci vulputate eleifend ut et odio. Proin purus mi, convallis sit amet pretium a, rhoncus aliquam purus.
                </p>
            </div>
            <div class="row pt-45">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="trending-item">
                                <div class="trending-img">
                                    <a href="{{asset('shop-detail')}}">
                                        <img src="assets/images/trending-img/trending-img1.png" alt="Product Images">
                                    </a>
                                    <div class="trending-item-tag">
                                        <h3>New</h3>
                                    </div>
                                    <ul class="trending-item-action">
                                        <li><a href="#"><i class='bx bx-repost'></i></a></li>
                                        <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                        <li><a href="{{asset('cart')}}"><i class='bx bx-cart'></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h3><a href="{{asset('shop-detail')}}">Rear Organic Butter</a></h3>
                                    <div class="rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                    <span>$20.0/Kg</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="trending-item">
                                <div class="trending-img">
                                    <a href="{{asset('shop-detail')}}">
                                        <img src="assets/images/trending-img/trending-img2.png" alt="Product Images">
                                    </a>
                                    <div class="trending-item-tag">
                                        <h3>-22%</h3>
                                    </div>
                                    <ul class="trending-item-action">
                                        <li><a href="#"><i class='bx bx-repost'></i></a></li>
                                        <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                        <li><a href="{{asset('cart')}}"><i class='bx bx-cart'></i></a></li>
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
                                    <span>$5.0/Kg <del>$6.0/Kg</del></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="trending-item">
                                <div class="trending-img">
                                    <a href="{{asset('shop-detail')}}">
                                        <img src="assets/images/trending-img/trending-img3.png" alt="Product Images">
                                    </a>
                                    <ul class="trending-item-action">
                                        <li><a href="#"><i class='bx bx-repost'></i></a></li>
                                        <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                        <li><a href="{{asset('cart')}}"><i class='bx bx-cart'></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h3><a href="{{asset('shop-detail')}}">Fresh Green Cucumber</a></h3>
                                    <div class="rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                    <span>$2.0/Kg <del>$4.0/Kg</del></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="trending-item">
                                <div class="trending-img">
                                    <a href="{{asset('shop-detail')}}">
                                        <img src="assets/images/trending-img/trending-img4.png" alt="Product Images">
                                    </a>
                                    <ul class="trending-item-action">
                                        <li><a href="#"><i class='bx bx-repost'></i></a></li>
                                        <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                        <li><a href="{{asset('cart')}}"><i class='bx bx-cart'></i></a></li>
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
                                    <span>$3.0/Kg <del>$3.5.0/Kg</del></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="trending-item">
                                <div class="trending-img">
                                    <a href="{{asset('shop-detail')}}">
                                        <img src="assets/images/trending-img/trending-img5.png" alt="Product Images">
                                    </a>
                                    <ul class="trending-item-action">
                                        <li><a href="#"><i class='bx bx-repost'></i></a></li>
                                        <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                        <li><a href="{{asset('cart')}}"><i class='bx bx-cart'></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h3><a href="{{asset('shop-detail')}}">Olive Oil</a></h3>
                                    <div class="rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                    <span>$6.0/Kg <del>$7.5.0/Kg</del></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="trending-item">
                                <div class="trending-img">
                                    <a href="{{asset('shop-detail')}}">
                                        <img src="assets/images/trending-img/trending-img6.png" alt="Product Images">
                                    </a>
                                    <div class="trending-item-tag">
                                        <h3>New</h3>
                                    </div>
                                    <ul class="trending-item-action">
                                        <li><a href="#"><i class='bx bx-repost'></i></a></li>
                                        <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                        <li><a href="{{asset('cart')}}"><i class='bx bx-cart'></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h3><a href="{{asset('shop-detail')}}">Super Natural Milk</a></h3>
                                    <div class="rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                    <span>$1.0/Kg <del>$1.5.0/Kg</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="trending-side-item">
                                <h3>Buy One Get One</h3>
                                <p>Buy one get one by getting one of our prawn and you will be able to get this offer.</p>
                                <a href="#" class="shop-btn">Shop It Now</a>
                                <img src="assets/images/trending-img/trending-img7.png" alt="Images">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="trending-side-item-2">
                                <span>Product Amazing!</span>
                                <h3>Rear Organic Saffron</h3>
                                <a href="#" class="shop-btn">Shop Now</a>
                                <img src="assets/images/trending-img/trending-img8.png" alt="Images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonials-area ptb-100">
        <div class="container">
            <div class="testimonials-slider owl-carousel owl-theme">
                <div class="testimonials-item">
                    <img src="assets/images/testimonials/testimonials-img1.jpg" alt="Images">
                    <p>
                        "We are one of the best and huge problem on the product taking from online. Most of the time we
                        get the eCommerce and ordered product on this and on that time we saw that it gives the best
                        service for all the time."
                    </p>
                    <i class='bx bxs-quote-alt-left'></i>
                    <h3>- Elen Musk, CEO, MT Corporation</h3>
                </div>
                <div class="testimonials-item">
                    <img src="assets/images/testimonials/testimonials-img2.jpg" alt="Images">
                    <p>
                        "We are one of the best and huge problem on the product taking from online. Most of the time we
                        get the eCommerce and ordered product on this and on that time we saw that it gives the best
                        service for all the time."
                    </p>
                    <i class='bx bxs-quote-alt-left'></i>
                    <h3>- Tom Shumate, Founder, MT Corporation</h3>
                </div>
            </div>
        </div>
    </div>


    <div class="offer-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Our Daily Offer</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget arcu luctus orci vulputate eleifend ut et odio. Proin purus mi, convallis sit amet pretium a, rhoncus aliquam purus.
                </p>
            </div>
            <div class="row pt-45">
                <div class="col-lg-6">
                    <div class="offer-top-item offer-bg1">
                        <span>New Arrival</span>
                        <h3>Buy 100% Fresh Apple</h3>
                        <p>Get this food now</p>
                        <a href="#" class="shop-btn">Shop Now</a>
                        <img src="assets/images/offer-img/offer-img5.png" alt="Images">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="offer-top-item offer-bg2">
                        <span>Discount Offer</span>
                        <h3>Offer Start at $30 Buy!</h3>
                        <p>Come to us immediately.</p>
                        <a href="#" class="shop-btn">Shop It Now</a>
                        <img src="assets/images/offer-img/offer-img6.png" alt="Images">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="offer-item">
                        <div class="offer-img">
                            <a href="{{asset('shop-detail')}}">
                                <img src="assets/images/offer-img/offer-img1.png" alt="Product Images">
                            </a>
                            <div class="offer-item-tag">
                                <h3>-18%</h3>
                            </div>
                            <ul class="offer-item-action">
                                <li><a href="#"><i class='bx bx-repost'></i></a></li>
                                <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                <li><a href="{{asset('cart')}}"><i class='bx bx-cart'></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3><a href="{{asset('shop-detail')}}">Natural Fresh Orange</a></h3>
                            <span>$10.0/Kg <del>$12.0/Kg</del></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="offer-item">
                        <div class="offer-img">
                            <a href="{{asset('shop-detail')}}">
                                <img src="assets/images/offer-img/offer-img2.png" alt="Product Images">
                            </a>
                            <div class="offer-item-tag">
                                <h3>-10%</h3>
                            </div>
                            <ul class="offer-item-action">
                                <li><a href="#"><i class='bx bx-repost'></i></a></li>
                                <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                <li><a href="{{asset('cart')}}"><i class='bx bx-cart'></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3><a href="{{asset('shop-detail')}}">Fresh Pineapple</a></h3>
                            <span>$15.0/Kg <del>$20.0/Kg</del></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="offer-item">
                        <div class="offer-img">
                            <a href="{{asset('shop-detail')}}">
                                <img src="assets/images/offer-img/offer-img3.png" alt="Product Images">
                            </a>
                            <div class="offer-item-tag">
                                <h3>-10%</h3>
                            </div>
                            <ul class="offer-item-action">
                                <li><a href="#"><i class='bx bx-repost'></i></a></li>
                                <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                <li><a href="{{asset('cart')}}"><i class='bx bx-cart'></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3><a href="{{asset('shop-detail')}}">Bunch Red Grapes</a></h3>
                            <span>$10.0/Kg <del>$15.0/Kg</del></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="offer-item">
                        <div class="offer-img">
                            <a href="{{asset('shop-detail')}}">
                                <img src="assets/images/offer-img/offer-img4.png" alt="Product Images">
                            </a>
                            <div class="offer-item-tag">
                                <h3>-5%</h3>
                            </div>
                            <ul class="offer-item-action">
                                <li><a href="#"><i class='bx bx-repost'></i></a></li>
                                <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                <li><a href="{{asset('cart')}}"><i class='bx bx-cart'></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3><a href="{{asset('shop-detail')}}">Organic Cucumber</a></h3>
                            <span>$5.0/Kg <del>$7.0/Kg</del></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="blog-area pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Our Latest Blogs</h2>
                <p class="margin-auto">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget arcu luctus orci vulputate eleifend ut et odio. Proin purus mi, convallis sit amet pretium a, rhoncus aliquam purus.
                </p>
            </div>
            <div class="row pt-45">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <a href="blog-details.html">
                            <img src="assets/images/blog/blog-img1.jpg" alt="Images">
                        </a>
                        <div class="content">
                            <span><i class='bx bx-time-five'></i> Nov 01, 2020</span>
                            <h3><a href="blog-details.html">We Always Ready to Give You Best Delivery Support </a></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consetetur exit sadipscing elitr, sed diam.
                            </p>
                            <a href="#" class="read-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <a href="blog-details.html">
                            <img src="assets/images/blog/blog-img2.jpg" alt="Images">
                        </a>
                        <div class="content">
                            <span><i class='bx bx-time-five'></i> Nov 05, 2020</span>
                            <h3><a href="blog-details.html">Click and Make the Payment in the Most Easiest Way</a></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consetetur exit sadipscing elitr, sed diam.
                            </p>
                            <a href="#" class="read-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="blog-card">
                        <a href="blog-details.html">
                            <img src="assets/images/blog/blog-img3.jpg" alt="Images">
                        </a>
                        <div class="content">
                            <span><i class='bx bx-time-five'></i> Nov 07, 2020</span>
                            <h3><a href="blog-details.html">Global Ecommerce System Marked as a History </a></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consetetur exit sadipscing elitr, sed diam.
                            </p>
                            <a href="#" class="read-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="newsletter-area-section pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Keep in Touch With Newsletter</h2>
                <p class="margin-auto">
                    Get 35% Discount on Subscribe
                </p>
            </div>
            <div class="newsletter-area pt-45">
                <form class="newsletter-form" data-toggle="validator" method="POST">
                    <input type="email" class="form-control" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
                    <button class="subscribe-btn" type="submit">
                        Subscribe
                    </button>
                    <div id="validator-newsletter" class="form-result"></div>
                </form>
            </div>
        </div>
    </div>

@endsection