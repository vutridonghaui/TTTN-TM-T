@extends('layout_admin.master_admin')
@section('content')
	<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        	Danh sách <small>các shop cần phê duyệt</small>
                            
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" >
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Tên Shop</th>
                                <th>Tên chủ sở hữu</th>
                                <th>Thời gian tạo</th>
                                <th>Chấp nhận</th>
                                <th>Xóa Shop</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($list_shop as $ls)
                            <tr class="odd gradeX" align="center">

                                <td>{{$ls->id}}</td>
                                <td>{{$ls->tenshop}}</td>
                                
                                <td>{{$ls->name}}</td>
                                
                                <td>{{$ls->created_at}}</td>
                                <td class="center"> 
                                    <a href="{{route('agree_shop',$ls->id)}}">Chấp nhận</a>
                                </td>
                                <td class="center">
                                    <a href="{{route('cancel_shop',$ls->id)}}">
                                        <i class="fa fa-trash-o  fa-fw"></i>
                                    </a>
                                </td>
                                
                            </tr>
                        @endforeach
                            
                        </tbody>
                    </table>
                </div>
@endsection