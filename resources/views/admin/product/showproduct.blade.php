@extends('admin.playout.master')
@section('content')
 <div class="row">
                <div class="col-12">
                  <!-- Recent Order Table -->
                  <div class="card card-table-border-none" id="recent-orders">
                    <div class="card-header justify-content-between">
                      <h2>Recent Orders</h2>
                      <div>
                        <span><button type="button" class="mb-1 btn btn-info"><a style="color:#212529" href="{{route('admin.Addproductall')}}">Thêm Sản Phẩm</a></button>
                          </span>
                      </div>
                    </div>
                    <div class="card-body pt-0 pb-5">
                      <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                        <thead>
                          <tr>
                            <th>Ảnh</th>
                            <th>Tên Sản Phẩm</th>
                            <th class="d-none d-md-table-cell">Số Lượng</th>
                            <th class="d-none d-md-table-cell">Date</th>
                            <th class="d-none d-md-table-cell">price</th>
                            <th>sales</th>
                            <th>Status</th>
                            <th></th>
                          </tr>
                        </thead>
                        @foreach($name as $n)
                        <tbody>
                          <tr>
                            <td ><img src="{{ asset('images') }}/{{$n->images}}" height="80" width="80"></td>
                            <td >
                              <a class="text-dark" href="">{{$n->name}}</a>
                            </td>
                            <td class="d-none d-md-table-cell">{{$n->quantity}}</td>
                            <td class="d-none d-md-table-cell">{{$n->date}}</td>
                            <td class="d-none d-md-table-cell">{{$n->price}}</td>
                            <td>{{$n->sales}}</td>
                            <td >@if($n->sales == 1){
                              <span class="badge badge-success">Còn Hàng</span>
                            }@endif
                            <span class="badge badge-warning">Hết Hàng</span>
                          
                          
                            </td>
                            <td class="text-right">
                              <div class="dropdown show d-inline-block widget-dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                                  <li class="dropdown-item">
                                    <a href="{{route('admin.editproduct',$n->id)}}">Sửa</a>
                                  </li>
                                  <li class="dropdown-item">
                                    <a href="{{route('admin.deleteproduct',$n->id)}}">Xóa</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                        @endforeach
                      </table>
                    </div>
                    <div>
                      {{$name->links()}}
                    </div>
                  </div>
</div>
              </div>            
@stop