@extends('layouts.site')
@section('content')
<section class="hdl-maincontent py-2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="image">
                    <img id="productimage" class="img-fluid w-100" src="{{ asset('images/sanpham1.jpg') }}"
                        alt="">
                </div>
                <div class="list-image mt-3">
                    <div class="row">
                        <div class="col-3">
                            <img class="img-fluid w-100" src="{{ asset('images/sanpham1.jpg') }}" alt=""
                                onclick="changeimage(src)">
                        </div>
                        <div class="col-3">
                            <img class="img-fluid" src="{{ asset('images/sanpham1.jpg') }}" alt=""
                                onclick="changeimage(src)">
                        </div>
                        <div class="col-3">
                            <img class="img-fluid" src="{{ asset('images/sanpham1.jpg') }}" alt=""
                                onclick="changeimage(src)">
                        </div>
                        <div class="col-3">
                            <img class="img-fluid" src="{{ asset('images/sanpham1.jpg') }}" alt=""
                                onclick="changeimage(src)">
                        </div>
                    </div>
                </div>
                <script>
                    function changeimage(src) {
                        document.getElementById("productimage").src = src;
                    }
                </script>
            </div>
            <div class="col-md-6">
                <h1 class="text-main">Tên sản phẩm</h1>
                <h3 class="fs-5">
                </h3>
                <h2 class="text-main py-4">Giá:100000 đ</h2>

                <div class="mb-3">
                    <label for="">Số lượng</label>
                    <input type="number" value="1" name="qty" id="qty" class="form-control"
                        style="width:200px">
                </div>
                <div class="mb-3">
                    <a class="btn btn-warning text-light " href="index.php?option=cart">Mua ngay</a>
                    <button class="btn btn-warning text-light" onclick="">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>Thêm vào giỏ hàng
                    </button>

                </div>
            </div>
        </div>
        <div class="row">
            <h2 class="text-main fs-4 pt-4">Chi tiết sản phẩm</h2>
            <p>Mô tả sản phẩm
                * THÔNG TIN SẢN PHẨM
                - Tên sản phẩm: Áo Thun Croptop Nữ dây rút SPEEP

                - Độ tuổi: > 13 tuổi

                - Phù hợp: Mặc đi làm, đi học, đi chơi, ở nhà.

                - Chất liệu: Vải thun

                - Họa tiết: in chữ

                - Xuất xứ: Tự thiết kế và sản xuất bởi FM Style tại Việt Nam

                - Cam kết 100% chất lượng từ chất vải đến đường chỉ, phát hiện lỗi được hoàn trả miễn phí.

                * HƯỚNG DẪN CHỌN SIZE CHO BẠN
                - Freesize: Cân nặng gợi ý <58kg * HƯỚNG DẪN BẢO QUẢN VÀ SỬ DỤNG - Lần đầu chỉ xả nước lạnh rồi phơi
                    khô để đảm bảo chất và màu của sản phẩm. - Nhớ lộn trái sản phẩm khi giặt và không giặt ngâm. -
                    Không giặt máy trong 2 tuần đầu. - Không sử dụng thuốc tẩy. - Khi phơi lộn trái và không phơi
                    trực tiếp dưới ánh nắng mặt trời.</p>
        </div>

        <div class="row">
            <h2 class="text-main fs-4 pt-4">Sản phẩm khác</h2>
            <div class="col-sm-3">
                <div class="card">
                    <img src="{{ asset('images/sanpham1.jpg') }}" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h4><b>John Doe</b></h4>
                        <p>Architect & Engineer</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img src="{{ asset('images/sanpham1.jpg') }}" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h4><b>John Doe</b></h4>
                        <p>Architect & Engineer</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img src="{{ asset('images/sanpham1.jpg') }}" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h4><b>John Doe</b></h4>
                        <p>Architect & Engineer</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img src="{{ asset('images/sanpham1.jpg') }}" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h4><b>John Doe</b></h4>
                        <p>Architect & Engineer</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
@section('title','Sản phẩm')
   
    

