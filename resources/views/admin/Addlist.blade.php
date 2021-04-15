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
											<form class="form-pill" action="{{route('admin.createlist',$id)}}" method="POST" role="form">
												@csrf 
												<div class="form-group">
													<label for="exampleFormControlInput3">Tên Loại</label>
													<input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Tên Loại" name="name">
												</div>
												<div class="form-group">
													<label for="exampleFormControlSelect3">Kiểu Sản Phẩm</label>
													<select class="form-control" id="exampleFormControlSelect3" name="idname">
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
									<div>
										{{$name->links()}}
									</div>
</div>

          


        </div>
@stop