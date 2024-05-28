@extends('layouts.site')
@section('content')
    <section class="hdl-maincontent py-2">
        <div class="container">
            <div class="row">

                <div class="col-md-3 order-2 order-md-1">
                    <ul class="list-group mb-3 list-category">
                        <li class="list-group-item bg-warning py-3">Danh mục sản phẩm</li>

                        <li class="list-group-item">
                            <a href="#"></a>
                        </li>

                    </ul>
                    <ul class="list-group mb-3 list-brand">
                        <li class="list-group-item bg-warning py-3">Danh mục thương hiệu</li>

                        <li class="list-group-item">
                            <a href="#"></a>
                        </li>

                    </ul>
                    <ul class="list-group mb-3 list-product-new">
                        <li class="list-group-item bg-warning py-3">Sản phẩm mới</li>
                        <li class="list-group-item">
                            <div class="product-item border">
                                <div class="product-item-image">
                                    <a href="#">
                                        <img src="{{ asset('images/sanpham1.jpg') }}" class="img-fluid" alt="Product_New">
                                    </a>
                                </div>
                                <h2 class="product-item-name text-main text-center fs-5 py-1">
                                    <a href="#"></a>
                                </h2>
                                <h3 class="product-item-price fs-6 p-2 d-flex">
                                    <div class="flex-fill"><del></del></div>
                                    <div class="flex-fill text-end text-main"></div>
                                </h3>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-9 order-1 order-md-2">
                    <div class="category-title bg-warning">
                        <h3 class="fs-5 py-3 text-center">Tất cả sản phẩm</h3>
                    </div>
                    <section class="hdl-maincontent py-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 order-2 order-md-1">
                                    <!-- Sidebar code here -->
                                </div>

                                <!-- Filter, sort by, and view type -->
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <label for="filter">Filter:</label>
                                        <select id="filter" class="form-select">
                                            <option selected>Choose...</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="sort">Sort by:</label>
                                        <select id="sort" class="form-select">
                                            <option selected>Choose...</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                    </div>
                                    <div>
                                        <button class="btn btn-secondary">List view</button>
                                        <button class="btn btn-secondary">Grid view</button>
                                    </div>
                                </div>
                    </section>
                    <div class="product-category mt-3">
                        <div class="row product-list">
                            <!-- Sản phẩm 1 -->
                            <div class="col-6 col-md-3 mb-4">
                                <div class="card">
                                    <img src="{{ asset('images/sanpham1.jpg') }}" class="card-img-top" alt="Product_New"
                                        id="img1">
                                    <div class="card-body">
                                        <h5 class="card-title">Tên sản phẩm</h5>
                                        <p class="card-text">
                                            <s>100000đ</s> 99000đ
                                        </p>
                                        <a href="#" class="btn btn-warning">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Sản phẩm 2 -->
                            <div class="col-6 col-md-3 mb-4">
                                <div class="card">
                                    <img src="{{ asset('images/sanpham1.jpg') }}" class="card-img-top" alt="Product_New"
                                        id="img2">
                                    <div class="card-body">
                                        <h5 class="card-title">Tên sản phẩm</h5>
                                        <p class="card-text">
                                            <s>120000đ</s> 110000đ
                                        </p>
                                        <a href="product_detail.html" class="btn btn-warning">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-4">
                                <div class="card">
                                    <img src="{{ asset('images/sanpham1.jpg') }}" class="card-img-top" alt="Product_New"
                                        id="img2">
                                    <div class="card-body">
                                        <h5 class="card-title">Tên sản phẩm</h5>
                                        <p class="card-text">
                                            <s>120000đ</s> 110000đ
                                        </p>
                                        <a href="product_detail.html" class="btn btn-warning">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-4">
                                <div class="card">
                                    <img src="{{ asset('images/sanpham1.jpg') }}" class="card-img-top" alt="Product_New"
                                        id="img2">
                                    <div class="card-body">
                                        <h5 class="card-title">Tên sản phẩm</h5>
                                        <p class="card-text">
                                            <s>120000đ</s> 110000đ
                                        </p>
                                        <a href="product_detail.html" class="btn btn-warning">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        </div>

        </div>

        </div>

    </section>
@endsection
@section('title','Sản phẩm')
   