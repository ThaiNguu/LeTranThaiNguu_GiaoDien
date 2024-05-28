@extends('layouts.site')
@section('content')
    <div class="container mt-5">
        <h2 class="text-center">Thông Tin Liên Hệ</h2>
        <p>Gọi Điện : 0376548379</p>
        <p>Email : thainguu.com.vn</p>
        <p>Giờ Làm Việc : 07:30 - 22:30 Các Ngày Trong Tuần (Kể Cả Ngày Lễ)</p>
        <h2 class="text-center">Phản Ánh – Khiếu Nại</h2>
        <form>
            <div class="form-group">
                <label for="name">Họ và tên *</label>
                <input type="text" class="form-control" id="name" placeholder="Nhập họ và tên...">
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại *</label>
                <input type="text" class="form-control" id="phone" placeholder="Nhập số điện thoại...">
            </div>
            <div class="form-group">
                <label>THÔNG TIN PHẢN ÁNH</label>
                <div class="btn-group d-flex" role="group">
                    <button type="button" class="btn btn-warning flex-grow-1">Ứng Dụng</button>
                    <button type="button" class="btn btn-warning flex-grow-1">Thanh Toán</button>
                    <button type="button" class="btn btn-warning flex-grow-1">Đơn Hàng</button>
                    <button type="button" class="btn btn-warning flex-grow-1">Nhân Viên</button>
                    <button type="button" class="btn btn-warning flex-grow-1">Sản Phẩm</button>
                    <button type="button" class="btn btn-warning flex-grow-1">Khác</button>
                </div>
            </div>
            <div class="form-group">
                <label for="feedback">Chi tiết phản ánh</label>
                <textarea class="form-control" id="feedback" rows="3" placeholder="Vui lòng nhập nội dung..."></textarea>
            </div>
            <div class="form-group">
                <label for="file">Đính kèm hình ảnh/video</label>
                <input type="file" class="form-control-file" id="file">
            </div>
            <button type="submit" class="btn btn-secondary btn-block">Gửi phản ánh</button>
        </form>
    </div>
@endsection
@section('title','Liên hệ')
