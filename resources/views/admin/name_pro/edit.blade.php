@extends('admin.playout.master')
@section('content')
 <div class="content-wrapper">
          <div class="content">
          		<div class="row">
<div class="col-lg-6">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Basic Validation</h2>
										</div>
										<div class="card-body">
											<form  action="{{route('admin.updatename')}}" method="POST" role="form">
											 @csrf @method('PUT')
												<div class="form-row">
													@foreach($name as $n)
													<input type="hidden" value="{{$n->id}}" name="idz">
													<div class="col-md-12 mb-3">
														<label for="validationServer01">Kiểu Sản Phẩm</label>
														<input type="text" class="form-control" value="{{$n->name}}" name="name" required>
														<div class="valid-feedback">
															Looks good!
														</div>
													</div>
													@endforeach
												</div>
												<button class="btn btn-primary" name="update" type="submit">Submit form</button>
											</form>
										</div>
									</div>
								</div>
									</div>
</div>

          


        </div>
@stop