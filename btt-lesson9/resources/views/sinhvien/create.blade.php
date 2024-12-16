<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm sinh viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        input{
            border-radius:0 !important;
        }
    </style>
</head>
<body>
    <section class="container">
        <form action="{{route('sinhvien.createsubmit')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h1>Thêm mới sinh viên</h1>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="MaSV" class="col-sm-2 col-form-label">Mã sinh viên</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="MaSV" name="bttMaSV">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="HoSV" class="col-sm-2 col-form-label">Họ sinh viên</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="HoSV" name="bttHoSV">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="TenSV" class="col-sm-2 col-form-label">Tên sinh viên</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="TenSV" name="bttTenSV">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Phai" class="col-sm-2 col-form-label">Giới tính</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="Phai" name="bttPhai">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="NgaySinh" class="col-sm-2 col-form-label">Ngày sinh</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="NgaySinh" name="bttNgaySinh">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="NoiSinh" class="col-sm-2 col-form-label">Nơi sinh</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="NoiSinh" name="bttNoiSinh">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="MaKH" class="col-sm-2 col-form-label">Mã khoa</label>
                        <div class="col-sm-10">
                          <select name="bttMaKH" id="MaKH">
                            <option value="">--Chọn khoa--</option>
                            <option value="AV">Anh Văn</option>
                            <option value="DT">Điện Tử</option>
                            <option value="KT">Kế Toán</option>
                            <option value="TH">Tin Học</option>
                            <option value="TR">Triết</option>
                          </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="HocBong" class="col-sm-2 col-form-label">Học bổng</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" id="HocBong" name="bttHocBong">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="DiemTrungBinh" class="col-sm-2 col-form-label">Điểm trung bình</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="DiemTrungBinh" name="bttDiemTrungBinh">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Thêm mới</button>
                    <a href="/sinhvien" class="btn btn-secondary">Quay lại</a>
                </div>
            </div>
        </form>
    </section>
</body>
</html>