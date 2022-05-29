@extends('parts.app')
@section('contain')

<div class="inner-banner-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-5">
                <div class="inner-content">
                    <h2>Shop Grid</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Shop Grid</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-md-7">
                <div class="inner-img">
                    <img src="assets/images/inner-banner/inner-banner2.png" alt="Images">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="product-area pt-100 pb-70">
    <div class="container">
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
</div>
@endsection