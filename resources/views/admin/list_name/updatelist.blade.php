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
											<form class="form-pill" action="{{route('admin.updatelist_name',$id)}}" method="POST" enctype="multipart/form-data">
												@csrf @method('PUT')
												<input type="hidden" value="{{$n->id}}" name="idz">
												<div class="form-group">
													<label for="exampleFormControlInput3">Tên Loại</label>
													<input type="text" class="form-control" id="exampleFormControlInput3" value="{{$n->name}}" placeholder="Tên Sản Phẩm" name="name">
												</div>
												
												<div class="form-group">
													<label for="exampleFormControlSelect3">Kiểu Sản Phẩm</label>
													<select class="form-control" id="exampleFormControlSelect3"  name="idname">
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