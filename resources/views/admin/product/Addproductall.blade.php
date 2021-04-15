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
											<form class="form-pill" action="{{route('admin.createproductall')}}" method="POST" enctype="multipart/form-data">
												@csrf 
												<div class="form-group">
													<label for="exampleFormControlInput3">Tên Sản Phẩm</label>
													<input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Tên Loại" name="name">
												</div>
												<div class="form-group">
													<label for="exampleFormControlInput3">giá</label>
													<input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Tên Loại" name="price">
												</div>
												<div class="form-group">
													<label for="exampleFormControlInput3">Cân Nặng</label>
													<input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Tên Loại" name="weight">
												</div>
												<div class="form-group">
													<label for="exampleFormControlInput3">Số Lượng</label>
													<input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Tên Loại" name="quantity">
												</div>
												<div class="form-group">
													<label for="exampleFormControlInput3">sales</label>
													<input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Tên Loại" name="sales">
												</div>
												<div class="form-group">
													<label for="exampleFormControlInput3">Hạng Sử Dụng</label>
													<input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Tên Loại" name="date">
												</div>
												<div class="form-group">
													<label for="exampleFormControlInput3">Content</label>
													<input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Tên Loại" name="content">
												</div>
												<div class="form-group">
													<label for="exampleFormControlInput3">images</label>
													<input type="file" class="form-control"  name="file_img">
												</div>
												<div class="form-group">
													<label for="exampleFormControlSelect3">Loại Sản Phẩm</label>
													<select class="form-control" id="exampleFormControlSelect3" name="idlist">
														@foreach($name as $n)
														<option value="{{$n->id}}">{{$n->name}}</option>
														@endforeach
													</select>
												</div>
												<button type="submit" name="add" class="btn btn-primary ml-2">Submit</button>
											</form>
										</div>
									</div>
								</div>
									</div>
</div>

          


        </div>
@stop