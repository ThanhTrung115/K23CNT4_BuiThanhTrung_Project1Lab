@extends('_layouts.admins._master')
@section('title','Danh sách loại sản phẩm')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col-12">
                <div class="d-flex w-100 justify-content-between">
                    <h1>DANH SÁCH LOẠI SẢN PHẨM</h1>
                    <a href="{{route('bttadmins.bttloaisanpham.bttcreate')}}" class="btn btn-success">Thêm mới</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã loại</th>
                        <th>Tên loại</th>
                        <th>Trạng thái</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($bttLoaiSanPham as $item)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td>{{$item->bttMaLoai}}</td>
                            <td>{{$item->bttTenLoai}}</td>
                            <td>{{$item->bttTrangThai}}</td>
                            <td>
                                view / edit / delete
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th colspan="5">Chưa có thông tin loại sản phẩm</th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection