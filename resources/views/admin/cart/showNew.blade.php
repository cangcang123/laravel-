@extends('admin.playout.master')
@section('content')
 <div class="row">
                <div class="col-12">
                  <!-- Recent Order Table -->
                  <div class="card card-table-border-none" id="recent-orders">
                    <div class="card-header justify-content-between">
                      <h2>Recent Orders</h2>
                    </div>
                    <div class="card-body pt-0 pb-5">
                      <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                        <thead>
                          <tr>
                            <th>tên người đặt</th>
                            <th>Tên Sản Phẩm</th>
                            <th class="d-none d-md-table-cell">Số Lượng</th>
                            <th class="d-none d-md-table-cell">price</th>
                            <th class="d-none d-md-table-cell">địa chỉ</th>
                            <th>sđt</th>
                            <th>notes</th>
                            <th>Status</th>
                            <th></th>
                          </tr>
                        </thead>
                        
                        <tbody>
                           @foreach($cdc as $n) 
                          <tr>
                            
                            <td>{{$n->nameuser}}</td>
                            <td>  
                              <a class="text-dark" href="">{{$n->namepro}}</a>
                            </td>
                            <td class="d-none d-md-table-cell">{{$n->quantity}} </td>
                            <td class="d-none d-md-table-cell">{{$n->price}}</td>
                            <td class="d-none d-md-table-cell">{{$n->adruser}}<a></a><a> </a></td>
                            <td>{{$n->phone}}</td>
                            <td>{{$n->notes}}</td>
                            <td >
                              <span class="badge badge-warning"><a href="{{route('admin.checkstatus',$n->idc)}}">Chưa Duyệt</a></span>
                            <span class="badge badge-success"></span>
                            </td>
                            <td class="text-right">
                              <div class="dropdown show d-inline-block widget-dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                                 
                                  <li class="dropdown-item">
                                    <a href="{{route('admin.delcart',$n->id)}}">Xóa</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                            
                          </tr>
                           @endforeach
                            @foreach($cus as $n) 
                          <tr>
                            
                            <td>{{$n->nameuser}}</td>
                            <td>  
                              <a class="text-dark" href="">{{$n->namepro}}</a>
                            </td>
                            <td class="d-none d-md-table-cell">{{$n->quantity}} </td>
                            <td class="d-none d-md-table-cell">{{$n->price}}</td>
                            <td class="d-none d-md-table-cell">{{$n->adruser}}</td>
                            <td>{{$n->phone}}</td>
                            <td>{{$n->notes}}</td>
                            <td > 
                              <span class="badge badge-warning"><a href="{{route('admin.checkstatus',$n->idc)}}">Chưa Duyệt</a></span>
                            <span class="badge badge-success"></span>
                            </td>
                            <td class="text-right">
                              <div class="dropdown show d-inline-block widget-dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                                  <li class="dropdown-item">
                                    <a href="{{route('admin.delcart',$n->id)}}">Xóa</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                            
                          </tr>
                           @endforeach
                        </tbody>
                       
                      </table>
                    </div>
                  </div>
</div>
              </div>            
@stop