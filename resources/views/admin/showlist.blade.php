@extends('admin.playout.master')
@section('content')
 <div class="content-wrapper">
          <div class="content">
 <div class="breadcrumb-wrapper">
                <h1>Quản Lí Kiểu Sản Phẩm</h1>             
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
              <a href="index.html">
                <span class="mdi mdi-home"></span>                
              </a>
            </li>
            <li class="breadcrumb-item">
              Quản Lí Kiểu Loại
            </li>
            <li class="breadcrumb-item" aria-current="page">Quản Lí Kiểu</li>
          </ol>
        </nav>
             </div> 
 <div class="row">
                <div class="col-lg-6">
                  <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Bản Quản Lí</h2>
                    </div>
                    <div class="card-body">
                     
<table class="table">
                        <thead>
                          <tr>
                            <th scope="col">stt</th>
                            <th scope="col">Tên Kiểu</th>
                            <th scope="col"><a href="{{route('admin.addlist',$id)}}">thêm</a></th>
                          </tr>
                        </thead>
                        @foreach($name as $n)
                        <tbody>
                          <tr class="table-danger">
                            <td scope="row">{{$n->id}}</td>
                            <td>{{$n->name}}</td>
                            <td><a href="{{route('admin.showproduct',$n->id)}}">Xem</a></td>
                            <td><a href="{{route('admin.updatelist',$n->id)}}">Sửa</a></td>
                          </tr>
                         @endforeach
                        </tbody>
                      </table>
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