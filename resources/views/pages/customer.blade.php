@extends('playout.playout')
 @section('main')
<section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            @foreach($name as $m)
                            <li>
                                <a href="#">{{$m->name}}</a>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                             <form action="{{route('home.search')}}"  method="POST">
                            @csrf
                                <div class="hero__search__categories">
                                    All Sản Phẩm
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" name="name" placeholder="What do yo u need?">
                                <button type="submit" name="timkiem" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('site/img/breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
<?php
$shop = Cart::content();
?>
    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                    </h6>
                </div>
            </div>
            <div class="checkout__form">
                <h4>Billing Details</h4>
                <form action="{{route('customer')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Họ Và Tên<span>*</span></p>
                                        <input type="text" name="name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Số Điện Thoại<span>*</span></p>
                                        <input type="text" name="phone">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Địa Chỉ để nhận hàng<span>*</span></p>
                                <input type="text" name="adress">
                            </div>
                            <div class="checkout__input">
                                <p>Nghi Chú đến người giao hàng<span>*</span></p>
                                <input type="text" name="notes">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                           
                            <div class="checkout__order"> 
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                <ul>
                                     @foreach($shop as $s)
                                    <li>{{$s->qty}}x{{$s->name}} <span><?php
                                         $subtotal = $s->price * $s->qty;
                                         echo number_format($subtotal).' '.'vnđ';
                                         ?></span></li>
                                    @endforeach
                                </ul>
                                <div class="checkout__order__total">Tổng cộng(cả phí ship) <span>{{Cart::total().' '.'vnđ'}}</span></div>
                                <div class="checkout__input__checkbox">
                                   
                                </div>
                                <input type="submit" name="create" value="Mua Hàng" class="site-btn">
                            </div>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @stop