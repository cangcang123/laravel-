@extends('admin.playout.master')
@section('content')
 <div class="row">
                <div class="col-12">
                  <!-- Recent Order Table -->
                  <div class="card card-table-border-none" id="recent-orders">
                    <div class="card-header justify-content-between">
                      <h2>Recent Orders</h2>
                      <div>
                        
                      </div>
                    </div>
                    <div class="card-body pt-0 pb-5">
                      <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                        <thead>
                          <tr>
                            <th>Họ và Tên</th>
                            <th>Địa Chỉ</th>
                            <th class="d-none d-md-table-cell">Số Điện Thoại</th>
                          </tr>
                        </thead>
                        @foreach($name as $n)
                        <tbody>
                          <tr> 
                            <td>                           
                              <a class="text-dark" href="">{{$n->name}}</a>
                            </td>
                            <td class="d-none d-md-table-cell">{{$n->adress}}</td>
                            <td class="d-none d-md-table-cell">{{$n->phone}}</td>
                            <td class="text-right">
                              <div class="dropdown show d-inline-block widget-dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                                  <li class="dropdown-item">
                                    <a href="{{route('admin.deleteCus',$n->id)}}">Xóa</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                        @endforeach
                      </table>
                    </div>
                    <div>{{$name->links()}}</div>
                  </div>
</div>
              </div>            
@stop