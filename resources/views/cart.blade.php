@extends('parts.app')
@section('contain')


<div class="inner-banner-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-4">
                <div class="inner-content">
                    <h2>Cart</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Cart</li>
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


<section class="cart-wraps-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <form>
                    <div class="cart-wraps">
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Unit Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#">
                                                <img src="assets/images/products/products-img1.png" alt="Image">
                                            </a>
                                        </td>
                                        <td class="product-name">
                                            <a href="#">Organic Butter</a>
                                        </td>
                                        <td class="product-price">
                                            <span class="unit-amount">$50.00</span>
                                        </td>
                                        <td class="product-quantity">
                                            <div class="input-counter">
                                                <span class="minus-btn">
                                                    <i class='bx bx-minus'></i>
                                                </span>
                                                <input type="text" value="1">
                                                <span class="plus-btn">
                                                    <i class='bx bx-plus'></i>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="subtotal-amount">$50.00</span>
                                            <a href="#" class="remove">
                                                <i class='bx bx-trash'></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#">
                                                <img src="assets/images/products/products-img2.png" alt="Image">
                                            </a>
                                        </td>
                                        <td class="product-name">
                                            <a href="#">Fresh Carrots</a>
                                        </td>
                                        <td class="product-price">
                                            <span class="unit-amount">$30.00</span>
                                        </td>
                                        <td class="product-quantity">
                                            <div class="input-counter">
                                                <span class="minus-btn">
                                                    <i class='bx bx-minus'></i>
                                                </span>
                                                <input type="text" value="1">
                                                <span class="plus-btn">
                                                    <i class='bx bx-plus'></i>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="subtotal-amount">$30.00</span>
                                            <a href="#" class="remove">
                                                <i class='bx bx-trash'></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#">
                                                <img src="assets/images/products/products-img3.png" alt="Image">
                                            </a>
                                        </td>
                                        <td class="product-name">
                                            <a href="#">Green Cucumber</a>
                                        </td>
                                        <td class="product-price">
                                            <span class="unit-amount"> $75.00</span>
                                        </td>
                                        <td class="product-quantity">
                                            <div class="input-counter">
                                                <span class="minus-btn">
                                                    <i class='bx bx-minus'></i>
                                                </span>
                                                <input type="text" value="1">
                                                <span class="plus-btn">
                                                    <i class='bx bx-plus'></i>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="subtotal-amount">$75.00</span>
                                            <a href="#" class="remove">
                                                <i class='bx bx-trash'></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#">
                                                <img src="assets/images/products/products-img4.png" alt="Image">
                                            </a>
                                        </td>
                                        <td class="product-name">
                                            <a href="#">Fresh Pineapple</a>
                                        </td>
                                        <td class="product-price">
                                            <span class="unit-amount">$50.00</span>
                                        </td>
                                        <td class="product-quantity">
                                            <div class="input-counter">
                                                <span class="minus-btn">
                                                    <i class='bx bx-minus'></i>
                                                </span>
                                                <input type="text" value="1">
                                                <span class="plus-btn">
                                                    <i class='bx bx-plus'></i>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="subtotal-amount">$50.00</span>
                                            <a href="#" class="remove">
                                                <i class='bx bx-trash'></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="cart-buttons">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-sm-7 col-md-7">
                                    <div class="continue-shopping-box">
                                        <a href="#" class="default-btn btn-bg-three">
                                            Continue Shopping
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-sm-5 col-md-5 text-end">
                                    <a href="#" class="default-btn btn-bg-three">
                                        Update Cart
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="cart-calc">
                                <div class="cart-wraps-form">
                                    <h3>Calculate Shipping</h3>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <select>
                                                    <option value="">Credit Card Type</option>
                                                    <option value="">Another option</option>
                                                    <option value="">A option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input type="text" class="form-control" placeholder="Credit Card Number">
                                        </div>
                                        <div class="form-group col-12">
                                            <input type="text" class="form-control" placeholder="Card Verification Number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Coupon Code">
                                    </div>
                                    <a href="#" class="default-btn btn-bg-three">
                                        Apply Coupon
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cart-totals">
                                <h3>Cart Totals</h3>
                                <ul>
                                    <li>Subtotal <span>$150.00</span></li>
                                    <li>Shipping <span>$30.00</span></li>
                                    <li>Coupon <span>$20.00</span></li>
                                    <li>Total <span><b>$160.00</b></span></li>
                                </ul>
                                <a href="#" class="default-btn btn-bg-three">
                                    Proceed To Checkout
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection