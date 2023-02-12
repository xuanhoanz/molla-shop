@extends('admin.templates.master')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Trang quản trị</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-md-6 col-lg-4" ><a ></a>
                    <div class="card card-hover">
                        <div class="box text-center" >
                            <h1 class="font-light text-black"><i class="mdi mdi-view-dashboard"></i></h1>
                            <h6 class="text-black"><a href="/admin/user/">Quản lý người dùng</a></h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4" >
                    <div class="card card-hover" >
                        <div class="box  text-center">
                            <h1 class="font-light text-black"><i class="mdi mdi-chart-areaspline"></i></h1>
                            <h6 class="text-black" ><a href="/admin/banner/">Quản lý banner</a></h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-hover">
                        <div class="box  text-center">
                            <h1 class="font-light text-black"><i class="mdi mdi-collage"></i></h1>
                            <h6 class="text-black"><a href="/admin/customers/">Quản lý thông tin khách hàng</a></h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-hover">
                        <div class="box  text-center">
                            <h1 class="font-light text-black"><i class="mdi mdi-border-outside"></i></h1>
                            <h6 class="text-black"><a href="/admin/products/">Quản lý sản phẩm</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" ><a ></a>
                    <div class="card card-hover">
                        <div class="box  text-center" >
                            <h1 class="font-light text-black"><i class="mdi mdi-view-dashboard"></i></h1>
                            <h6 class="text-black"><a href="/admin/posts/">Quản lý bài viết</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card card-hover">
                        <div class="box text-center" >
                            <h1 class="font-light text-black"><i class="mdi mdi-border-outside"></i></h1>
                            <h6 class="text-black"><a href="/admin/bills/">Quản lý thông tin  hóa đơn</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
