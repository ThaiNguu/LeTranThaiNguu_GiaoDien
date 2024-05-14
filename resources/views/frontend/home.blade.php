<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trang chủ</title>
    <meta charset="UTF-8">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="index.css">
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
                <a class="navbar-brand" href="public/">Trang chủ</a>
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

    <section id="slider" class="p-3">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/slider0.jpg') }}" alt="Los Angeles" class="d-block"
                        style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/slider1.jpg') }}" alt="Chicago" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/slider2.jpg') }}" alt="New York" class="d-block" style="width:100%">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>

    <section id="product-new" class="p-3">
        <h2>Sản phẩm mới nhất</h2>
        <div class="row">
            <div class="col-sm-3">
                <a href="chi-tiet-san-pham/1">
                    <div class="card">
                        <img src="{{ asset('images/sanpham1.jpg') }}" alt="Avatar" style="width:100%">
                        <div class="container">
                            <h4><b>John Doe</b></h4>
                            <p>Architect & Engineer</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="chi-tiet-san-pham/1">
                    <div class="card">
                        <img src="{{ asset('images/sanpham1.jpg') }}" alt="Avatar" style="width:100%">
                        <div class="container">
                            <h4><b>John Doe</b></h4>
                            <p>Architect & Engineer</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="chi-tiet-san-pham/1">
                    <div class="card">
                        <img src="{{ asset('images/sanpham1.jpg') }}" alt="Avatar" style="width:100%">
                        <div class="container">
                            <h4><b>John Doe</b></h4>
                            <p>Architect & Engineer</p>
                        </div>

                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="chi-tiet-san-pham/1">
                    <div class="card">
                        <img src="{{ asset('images/sanpham1.jpg') }}" alt="Avatar" style="width:100%">
                        <div class="container">
                            <h4><b>John Doe</b></h4>
                            <p>Architect & Engineer</p>
                        </div>
                    </div>
            </div>
            </a>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <a href="chi-tiet-san-pham/1">
                    <div class="card">
                        <img src="{{ asset('images/sanpham1.jpg') }}" alt="Avatar" style="width:100%">
                        <div class="container">
                            <h4><b>John Doe</b></h4>
                            <p>Architect & Engineer</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="chi-tiet-san-pham/1">
                    <div class="card">
                        <img src="{{ asset('images/sanpham1.jpg') }}" alt="Avatar" style="width:100%">
                        <div class="container">
                            <h4><b>John Doe</b></h4>
                            <p>Architect & Engineer</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="chi-tiet-san-pham/1">
                    <div class="card">
                        <img src="{{ asset('images/sanpham1.jpg') }}" alt="Avatar" style="width:100%">
                        <div class="container">
                            <h4><b>John Doe</b></h4>
                            <p>Architect & Engineer</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="chi-tiet-san-pham/1">
                    <div class="card">
                        <img src="{{ asset('images/sanpham1.jpg') }}" alt="Avatar" style="width:100%">
                        <div class="container">
                            <h4><b>John Doe</b></h4>
                            <p>Architect & Engineer</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>


    <section id="product-sale" class="p-3">
        <h2>Sản phẩm giảm giá</h2>
        <div class="row">
            <div class="col-sm-3">
                <a href="chi-tiet-san-pham/1">
                    <div class="card">
                        <img src="{{ asset('images/sanpham1.jpg') }}" alt="Avatar" style="width:100%">
                        <div class="container">
                            <h4><b>John Doe</b></h4>
                            <p>Architect & Engineer</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="chi-tiet-san-pham/1">
                    <div class="card">
                        <img src="{{ asset('images/sanpham1.jpg') }}" alt="Avatar" style="width:100%">
                        <div class="container">
                            <h4><b>John Doe</b></h4>
                            <p>Architect & Engineer</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="chi-tiet-san-pham/1">
                    <div class="card">
                        <img src="{{ asset('images/sanpham1.jpg') }}" alt="Avatar" style="width:100%">
                        <div class="container">
                            <h4><b>John Doe</b></h4>
                            <p>Architect & Engineer</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="chi-tiet-san-pham/1">
                    <div class="card">
                        <img src="{{ asset('images/sanpham1.jpg') }}" alt="Avatar" style="width:100%">
                        <div class="container">
                            <h4><b>John Doe</b></h4>
                            <p>Architect & Engineer</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <a href="chi-tiet-san-pham/1">
                        <div class="card">
                            <img src="{{ asset('images/sanpham1.jpg') }}" alt="Avatar" style="width:100%">
                            <div class="container">
                                <h4><b>John Doe</b></h4>
                                <p>Architect & Engineer</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3">
                    <a href="chi-tiet-san-pham/1">
                        <div class="card">
                            <img src="{{ asset('images/sanpham1.jpg') }}" alt="Avatar" style="width:100%">
                            <div class="container">
                                <h4><b>John Doe</b></h4>
                                <p>Architect & Engineer</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3">
                    <a href="chi-tiet-san-pham/1">
                        <div class="card">
                            <img src="{{ asset('images/sanpham1.jpg') }}" alt="Avatar" style="width:100%">
                            <div class="container">
                                <h4><b>John Doe</b></h4>
                                <p>Architect & Engineer</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3">
                    <a href="chi-tiet-san-pham/1">
                        <div class="card">
                            <img src="{{ asset('images/sanpham1.jpg') }}" alt="Avatar" style="width:100%">
                            <div class="container">
                                <h4><b>John Doe</b></h4>
                                <p>Architect & Engineer</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
    </section>

    <section id="post-new" class="p-3 ">
        <h2>Bài viết mới</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card" id="card-news1">
                    <img src="{{ asset('images/baiviet1.jpg') }}" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h4><b>John Doe</b></h4>
                        <p>Architect & Engineer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" id="card-news2">
                    <img src="{{ asset('images/baiviet2.jpg') }}" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h4><b>John Doe</b></h4>
                        <p>Architect & Engineer</p>
                    </div>
                </div>
                <div class="card" id="card-news3">
                    <img src="{{ asset('images/baiviet3.jpg') }}" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h4><b>John Doe</b></h4>
                        <p>Architect & Engineer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="d-flex justify-content-between p-3 bg-dark text-white">
        <img src="{{ asset('images/footer.png') }}" alt="Footer" style="width:10%">
        <div id="copyright">@ Bản quyền thuộc về Ngưu All right reserved</div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
        < /s> <
        script src = "https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js" >
    </script>
</body>

</html>
