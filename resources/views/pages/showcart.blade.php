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
                           < <form action="{{route('home.search')}}"  method="POST">
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
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="{{route('home.index')}}">Home</a>
                            <span>Shopping Cart</span>
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
    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <form action="{{route('cart.update')}}" method="POST">
                @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach($shop as $s)
                                <tr>
                                   
                                    <td class="shoping__cart__item">
                                        <img height="100" width="100" src="{{ asset('images') }}/{{$s->options->images}}" alt="">
                                        <h5>{{$s->name}}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        {{number_format($s->price).' '.'vnđ'}}
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" name="quantity" value="{{$s->qty}}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                         <?php
                                         $subtotal = $s->price * $s->qty;
                                         echo number_format($subtotal).' '.'vnđ';
                                         ?>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span ><a href="{{route('cart.delete',$s->rowId)}}">X</a></span>
                                    </td>
                                    <input type="hidden" value="{{$s->rowId}}" name="rowId_cart" >
                                </tr>
                                 @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
               
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                 <input class="primary-btn cart-btn cart-btn-right" type="submit" value="cập nhật" name="update">
                    </div>
                </div>

            </div>
        </form>
        <form action="{{route('cart.user')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Nghi Chú Đến Người Giao</h5>
                                <input type="text" name="notes" size="70" placeholder="Nghi vào đây">                  
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>(cả phí ship)</h5>
                        <ul>
                           <input type="hidden" value="1" name="status">
                            <li>Tổng Cộng <span>{{Cart::total().' '.'vnđ'}}</span></li>
                        </ul>
                        <input type="submit" name="save" value="PROCEED TO CHECKOUT" class="primary-btn"><a></a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </section>
      @stop