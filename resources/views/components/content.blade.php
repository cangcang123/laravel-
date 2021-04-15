        <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Đồ Tươi</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">Toàn Bộ</li>
                            <li data-filter=".oranges">Thịt</li>
                            <li data-filter=".fresh-meat">Cá</li>
                            <li data-filter=".vegetables">Gà</li>
                            <li data-filter=".fastfood">Hải Sản</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach($thit as $a)
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges ">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" href="{{route('home.product',$a->id)}}"  data-setbg="{{ asset('images') }}/{{$a->images}}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="{{route('cart.homeadd',$a->id)}}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="{{route('home.product',$a->id)}}">{{$a->name}}</a></h6>
                            <h5>{{number_format($a->price).' '.'vnđ'}}</h5>
                        </div>
                    </div>              
                </div>
                 @endforeach
                 @foreach($ca as $a)
                 <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" href="{{route('home.product',$a->id)}}"  data-setbg="{{ asset('images') }}/{{$a->images}}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="{{route('cart.homeadd',$a->id)}}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="{{route('home.product',$a->id)}}">{{$a->name}}</a></h6>
                            <h5>{{number_format($a->price).' '.'vnđ'}}</h5>
                        </div>
                    </div>              
                </div>
                @endforeach
                @foreach($ga as $a)
                 <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables">
                   <div class="featured__item">
                        <div class="featured__item__pic set-bg" href="{{route('home.product',$a->id)}}"  data-setbg="{{ asset('images') }}/{{$a->images}}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="{{route('cart.homeadd',$a->id)}}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="{{route('home.product',$a->id)}}">{{$a->name}}</a></h6>
                            <h5>{{number_format($a->price).' '.'vnđ'}}</h5>
                        </div>
                    </div>              
                </div>
                @endforeach
                @foreach($haisan as $a)
                 <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood">
                   <div class="featured__item">
                        <div class="featured__item__pic set-bg" href="{{route('home.product',$a->id)}}"  data-setbg="{{ asset('images') }}/{{$a->images}}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="{{route('cart.homeadd',$a->id)}}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="{{route('home.product',$a->id)}}">{{$a->name}}</a></h6>
                            <h5>{{number_format($a->price).' '.'vnđ'}}</h5>
                        </div>
                    </div>              
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{ asset('site/img/banner/banner-1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{ asset('site/img/banner/banner-2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->
        