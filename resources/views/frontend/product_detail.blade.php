<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>

<body>
    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-6 col-md-2 py-1">
                    <a href="index.php">
                        <img src="{{ asset('images/logo.jpg') }}" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="col-12 col-sm-9 d-none d-md-block col-md-5 py-3">
                    <div class="input-group mb-3">
                        <form method="post" action="index.php?option=customer&search=true" name="search">
                            <input name="search" type="text" style=" width:450px;height:40px;"
                                placeholder="Nhập nội dung tìm kiếm" class="btn btn-light text text-primary"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <button style="height:40px;" class="btn btn-warning" type="submit" name="TIM"><i
                                    class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-sm-12 d-none d-md-block col-md-4 text-center py-2">
                    <div class="call-login--register border-bottom">
                        <ul class="nav nav-fills py-0 my-0">

                            <li class="nav-item">
                                <a class="nav-link" href="#">Giỏ hàng</a>
                            </li>

                            <li class="nav-item bg-warning">
                                <a class="nav-link" href="#"><span class="text-light">Đăng nhập</span></a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-6 col-sm-6 col-md-1 text-end py-4 py-md-2">
                    <a href="index.php?option=cart">
                        <div class="box-cart float-end border">
                            <i class="fa fa-shopping-bag " aria-hidden="true"></i>
                            <span id="showcart" class="text-light">

                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-sm bg-warning navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Trang chủ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="san-pham">Tất cả sản phẩm</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="lien-he">Liên hệ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown">Danh mục sản phẩm</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Link</a></li>
                                <li><a class="dropdown-item" href="#">Another link</a></li>
                                <li><a class="dropdown-item" href="#">A third link</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Áo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Quần</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Phụ kiện</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </section>
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
    <footer class="d-flex justify-content-between p-3 bg-dark text-white">
        <img src="{{ asset('images/footer.png') }}" alt="Footer" style="width:10%">
        <div id="copyright">@ Bản quyền thuộc về Ngưu All right reserved</div>
    </footer>
</body>

</html>
