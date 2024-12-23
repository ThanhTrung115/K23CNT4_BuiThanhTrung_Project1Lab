@extends('_layouts.admins._master')
@section('title','Danh sách sản phẩm')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{route('bttadmins.bttsanpham.bttcreatesubmit')}}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h2>Thêm mới sản phẩm</h2>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="bttMaSanPham" class="col-sm-2 col-form-label">Mã sản phẩm:</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="bttMaSanPham" name="bttMaSanPham"/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="bttTenSanPham" class="col-sm-2 col-form-label">Tên sản phẩm:</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="bttTenSanPham" name="bttTenSanPham"/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="bttHinhAnh" class="col-sm-2 col-form-label">Hình ảnh:</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="bttHinhAnh" name="bttHinhAnh"/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="bttSoLuong" class="col-sm-2 col-form-label">Số lượng:</label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control" id="bttSoLuong" name="bttSoLuong"/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="bttDonGia" class="col-sm-2 col-form-label">Đơn giá:</label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control" id="bttDonGia" name="bttDonGia"/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="bttMaLoai" class="col-sm-2 col-form-label">Mã loại</label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control" id="bttMaLoai" name="bttMaLoai"/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="bttTrangThai" class="col-sm-2 col-form-label">Trạng thái</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="bttTrangThai1" name="bttTrangThai" value="1"/>
                                    <label for="tvcTrangThai1">Hiển thị</label>
                                        &nbsp;
                                    <input type="radio" id="bttTrangThai0" name="bttTrangThai" value="0"/>
                                    <label for="tvcTrangThai0">Khóa</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success">Ghi lại</button>
                            <a href="{{route('bttadmins.bttsanpham')}}" class="btn btn-secondary">Quay lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection