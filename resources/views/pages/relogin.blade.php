@extends('playout.playout')
@section('main')
 <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6 style="color:#dc3545"><span class="icon_tag_alt"></span> Đăng Nhập
                    </h6>
                </div>
            </div>
            <div class="checkout__form">  
            </h4>
                
                <form action="{{route('home.checklogin')}}" method="POST" role="form">
                	@csrf 
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                                    <div class="checkout__input">
                                        <p>Username<span>*</span></p>
                                        <input type="text" name="username">
                                    </div>
                                               
                            <div class="checkout__input">
                                <p>Password<span>*</span></p>
                                <input type="text" name="password">
                            </div>
                            <div class="checkout__input">
                            	<input type="submit" value="Đăng Nhập" name="login" style="color: #dc3545">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@stop