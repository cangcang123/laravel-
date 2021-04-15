@extends('admin.playout.master')
@section('content')
 <div class="content-wrapper">
          <div class="content">
          		<div class="row">
<div class="col-lg-6">	<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Form pill</h2>
										</div>
										<div class="card-body">
											@foreach($name as $n)
											<form class="form-pill" action="{{route('admin.updateproduct',$id)}}" method="POST" enctype="multipart/form-data">
												@csrf @method('PUT')
												<input type="hidden" value="{{$n->id}}" name="id">
												<input type="hidden" value="{{$n->images}}" name="file_iz">
												<div class="form-group">
													<label for="exampleFormControlInput3">Tên Sản Phẩm</label>
													<input type="text" class="form-control" id="exampleFormControlInput3" value="{{$n->name}}" placeholder="Tên Sản Phẩm" name="name">
												</div>
												<div class="form-group">
													<label for="exampleFormControlInput3">giá</label>
													<input type="text" class="form-control" id="exampleFormControlInput3" value="{{$n->price}}" placeholder="giá" name="price">
												</div>
												<div class="form-group">
													<label for="exampleFormControlInput3">Cân Nặng</label>
													<input type="text" class="form-control" id="exampleFormControlInput3" value="{{$n->weight}}" placeholder="Tên Loại" name="weight">
												</div>
												<div class="form-group">
													<label for="exampleFormControlInput3">Số Lượng</label>
													<input type="text" class="form-control" id="exampleFormControlInput3" value="{{$n->quantity}}" placeholder="Tên Loại" name="quantity">
												</div>
												<div class="form-group">
													<label for="exampleFormControlInput3">sales</label>
													<input type="text" class="form-control" id="exampleFormControlInput3" value="{{$n->sales}}" placeholder="Tên Loại" name="sales">
												</div>
												<div class="form-group">
													<label for="exampleFormControlInput3">Hạng Sử Dụng</label>
													<input type="text" class="form-control" id="exampleFormControlInput3" value="{{$n->date}}" placeholder="Tên Loại" name="date">
												</div>
												<div class="form-group">
													<label for="exampleFormControlInput3">Content</label>
													<input type="text" class="form-control" id="exampleFormControlInput3" value="{{$n->content}}" placeholder="Tên Loại" name="content">
												</div>
												<div class="form-group">
													<label for="exampleFormControlInput3">Ảnh</label>
													<input type="file" class="form-control"  value="{{$n->images}}"  name="file_img">
												</div>
												<div class="form-group">
													<label for="exampleFormControlSelect3">Loại Sản Phẩm</label>
													<select class="form-control" id="exampleFormControlSelect3"  name="idlist">
														@foreach($list as $l)
														<option value="{{$l->id}}">{{$l->name}}</option>
														@endforeach
													</select>
												</div>
												<button type="submit" name="add" class="btn btn-primary ml-2">Submit</button>
											</form>
											@endforeach
										</div>
									</div>
								</div>
									</div>
</div>

          


        </div>
@stop