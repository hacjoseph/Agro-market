@extends('parts.app')
@section('contain')


<div class="inner-banner-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-5">
                <div class="inner-content">
                    <h2>Shop Full Width Sidebar</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Shop Full Width Sidebar</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-md-7">
                <div class="inner-img">
                    <img src="assets/images/inner-banner/inner-banner3.png" alt="Images">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="product-area pt-100 pb-70">
    <div class="container-fluid m-0">
        <div class="container-max">
            <div class="row">
                <div class="col-lg-9">
                    <div class="product-topper">
                        <div class="row">
                            <div class="col-lg-8 col-md-8">
                                <div class="product-topper-title">
                                    <h3>View All Products <span>( Showing 1-15 of 120 result )</span> </h3>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="product-category">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Categories</option>
                                            <option>Beef Meat</option>
                                            <option>Vegetable</option>
                                            <option>Natural Fruits</option>
                                            <option>Health & Beauty</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
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
                        <div class="col-lg-4 col-sm-6">
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
                        <div class="col-lg-4 col-sm-6">
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
                        <div class="col-lg-4 col-sm-6">
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
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="{{asset('shop-detail')}}">
                                        <img src="assets/images/products/products-img5.png" alt="Product Images">
                                    </a>
                                    <ul class="product-item-action">
                                        <li><a href="#"><i class='bx bx-repost'></i></a></li>
                                        <li><a href="wishlist.html"><i class='bx bx-heart'></i></a></li>
                                        <li><a href="cart.html"><i class='bx bx-cart'></i></a></li>
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
                                    <span>$16.0/Kg <del>$13.0/Kg</del></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="{{asset('shop-detail')}}">
                                        <img src="assets/images/products/products-img6.png" alt="Product Images">
                                    </a>
                                    <ul class="product-item-action">
                                        <li><a href="#"><i class='bx bx-repost'></i></a></li>
                                        <li><a href="wishlist.html"><i class='bx bx-heart'></i></a></li>
                                        <li><a href="cart.html"><i class='bx bx-cart'></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h3><a href="{{asset('shop-detail')}}">Natural Milk</a></h3>
                                    <div class="rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                    <span>$6.0/Kg <del>$9.0/Kg</del></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="{{asset('shop-detail')}}">
                                        <img src="assets/images/products/products-img7.png" alt="Product Images">
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
                                    <h3><a href="{{asset('shop-detail')}}">Almond Nuts</a></h3>
                                    <div class="rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                    <span>$6.0/Kg <del>$9.0/Kg</del></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="{{asset('shop-detail')}}">
                                        <img src="assets/images/products/products-img8.png" alt="Product Images">
                                    </a>
                                    <ul class="product-item-action">
                                        <li><a href="#"><i class='bx bx-repost'></i></a></li>
                                        <li><a href="wishlist.html"><i class='bx bx-heart'></i></a></li>
                                        <li><a href="cart.html"><i class='bx bx-cart'></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h3><a href="{{asset('shop-detail')}}">Fresh Banana</a></h3>
                                    <div class="rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                    <span>$1.0/Kg <del>$3.0/Kg</del></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="{{asset('shop-detail')}}">
                                        <img src="assets/images/products/products-img9.png" alt="Product Images">
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
                                    <h3><a href="{{asset('shop-detail')}}">Beef Meat</a></h3>
                                    <div class="rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                    <span>$11.0/Kg <del>$13.0/Kg</del></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="{{asset('shop-detail')}}">
                                        <img src="assets/images/products/products-img10.png" alt="Product Images">
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
                                    <h3><a href="{{asset('shop-detail')}}"> Fresh Capsicum</a></h3>
                                    <div class="rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                    <span>$12.0/Kg <del>$13.0/Kg</del></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="{{asset('shop-detail')}}">
                                        <img src="assets/images/products/products-img11.png" alt="Product Images">
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
                                    <h3><a href="{{asset('shop-detail')}}">Organic Saffron</a></h3>
                                    <div class="rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                    <span>$400.0/Kg</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="{{asset('shop-detail')}}">
                                        <img src="assets/images/products/products-img12.png" alt="Product Images">
                                    </a>
                                    <div class="product-item-tag">
                                        <h3>-25%</h3>
                                    </div>
                                    <ul class="product-item-action">
                                        <li><a href="#"><i class='bx bx-repost'></i></a></li>
                                        <li><a href="wishlist.html"><i class='bx bx-heart'></i></a></li>
                                        <li><a href="cart.html"><i class='bx bx-cart'></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h3><a href="{{asset('shop-detail')}}">Black Berry</a></h3>
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
                        <div class="col-lg-12 col-md-12 text-center">
                            <div class="pagination-area">
                                <a href="#" class="prev page-numbers">
                                    <i class="bx bx-chevron-left"></i>
                                </a>
                                <span class="page-numbers current" aria-current="page">1</span>
                                <a href="#" class="page-numbers">2</a>
                                <a href="#" class="page-numbers">3</a>
                                <a href="#" class="next page-numbers">
                                    <i class="bx bx-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product-side-bar">
                        <div class="search-widget">
                            <form class="search-form">
                                <input type="search" class="form-control" placeholder="Search...">
                                <button type="submit">
                                    <i class="bx bx-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="product-side-bar-widget">
                            <h3 class="title">Prices Range</h3>
                            <form class="price-range-content">
                                <div class="price-range-bar" id="range-slider"></div>
                                <div class="price-range-filter">
                                    <div class="price-range-filter-item d-flex align-items-center order-1 order-xl-2">
                                        <h4>Range:</h4>
                                        <input type="text" id="price-amount" readonly>
                                    </div>
                                    <div class="price-range-filter-item price-range-filter-button order-2 order-xl-1">
                                        <button class="btn btn-red btn-icon">Filter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="product-side-bar-widget">
                            <h3 class="title">Product Categories</h3>
                            <div class="product-side-categories">
                                <ul>
                                    <li class="active">
                                        <a href="#">All Categories & Items</a>
                                    </li>
                                    <li>
                                        <a href="#">Cooking & Baking</a>
                                    </li>
                                    <li>
                                        <a href="#">Beverage</a>
                                    </li>
                                    <li>
                                        <a href="#">Snacks</a>
                                    </li>
                                    <li>
                                        <a href="#">Milk and Dairy</a>
                                    </li>
                                    <li>
                                        <a href="#">Meat and Fish</a>
                                    </li>
                                    <li>
                                        <a href="#">Fruits and Vegetable</a>
                                    </li>
                                    <li>
                                        <a href="#">Home & Kitchen Appliance</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-side-bar-widget">
                            <h3 class="title">Prices</h3>
                            <div class="product-side-categories">
                                <ul>
                                    <li class="active">
                                        <a href="#">$0-$50</a>
                                    </li>
                                    <li>
                                        <a href="#">$51-$100</a>
                                    </li>
                                    <li>
                                        <a href="#">$101-$150</a>
                                    </li>
                                    <li>
                                        <a href="#">$151-$200</a>
                                    </li>
                                    <li>
                                        <a href="#">$200-$250</a>
                                    </li>
                                    <li>
                                        <a href="#">$250-$300</a>
                                    </li>
                                    <li>
                                        <a href="#">$350-$400</a>
                                    </li>
                                    <li>
                                        <a href="#">$400-$450</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-side-bar-widget">
                            <h3 class="title">High Rated Product</h3>
                            <div class="product-popular-post">
                                <article class="item">
                                    <a href="news-details.html" class="thumb">
                                        <span class="full-image cover bg1" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <h4 class="title-text">
                                            <a href="news-details.html">
                                                Fresh Organic Meat
                                            </a>
                                        </h4>
                                        <p>$12.0 <del>$15.5</del></p>
                                    </div>
                                </article>
                                <article class="item">
                                    <a href="news-details.html" class="thumb">
                                        <span class="full-image cover bg2" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <h4 class="title-text">
                                            <a href="news-details.html">
                                                Fresh Pineapple
                                            </a>
                                        </h4>
                                        <p>$3.50 <del>$4.0</del></p>
                                    </div>
                                </article>
                                <article class="item">
                                    <a href="news-details.html" class="thumb">
                                        <span class="full-image cover bg3" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <h4 class="title-text">
                                            <a href="news-details.html">
                                                Fresh Banana
                                            </a>
                                        </h4>
                                        <p>$1.2 <del>$1.5</del></p>
                                    </div>
                                </article>
                                <article class="item">
                                    <a href="news-details.html" class="thumb">
                                        <span class="full-image cover bg4" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <h4 class="title-text">
                                            <a href="news-details.html">
                                                Rear Organic Saffron
                                            </a>
                                        </h4>
                                        <p>$124.0</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection