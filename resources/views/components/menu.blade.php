 <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All Sản Phẩm</span>
                        </div>
                        
                        <ul>
                            @foreach($name as $n)
                            <li><a href="{{route('home.name',$n->id)}}">{{$n->name}}</a></li>
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
                                <h5>+0363566937</h5>
                                <span>Hỗ Trợ 24/7</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="{{ asset('site/img/hero/banner.jpg') }}">
                        <div class="hero__text">
                            <span>Rau Củ Quả</span>
                            <h2>Tự Nhiên  <br />100% Tươi</h2>
                            <p>Tha Hồ Lựa Chọn , Đảm Bảo Về Hình Ảnh</p>
                            <a href="{{route('home.index')}}" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>