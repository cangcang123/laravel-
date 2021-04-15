@extends('playout.playout')
@section('main')
 <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Đăng Ký
                    </h6>
                </div>
            </div>
            <div class="checkout__form">
                <h4>@if(count($errors)>0)
                  <a>
                  	@foreach($errors->all as $err)
                  	{{$err}}
                  	@endforeach
                  </a>
                @endif
                @if(Session::has('success'))
                <a>{{Session::get('success')}}</a>
                @endif
            </h4>
                
                <form action="{{route('home.register')}}" method="POST" role="form">
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
                                        <p>Username<span>*</span></p>
                                        <input type="text" name="username">
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" value="0" name="active">
                            <div class="checkout__input">
                                <p>Địa chỉ<span>*</span></p>
                                <input type="text" name="adress">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text" name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="email" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Password<span>*</span></p>
                                <input type="text" name="passa">
                            </div>
                            <div class="checkout__input">
                            	<input type="submit" value="Đăng Ký" name="register" style="color: #dc3545">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@stop