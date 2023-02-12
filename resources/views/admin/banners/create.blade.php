@extends('admin.templates.master')
@section('content')
    @include('sweetalert::alert')
    <div class="page-content">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="/admin/banners/store">
                            @csrf
                            <div class="card-body">
                                <h4 class="card-title">Thêm banner</h4>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Tên banner</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name" placeholder="Nhập tên banner" name="name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-3 text-right control-label col-form-label">Hình ảnh</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" id="image"  name="image">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Trạng thái</label>
                                    <div class="col-sm-9">
                                        <select name="status" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                            <option>---Chọn---</option>
                                            <option value="1">Mở</option>
                                            <option value="2">Khóa</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" name="submit" class="btn btn-primary">Thêm mới</button>
                                    <button class="btn btn-danger" ><a href="/admin/banners/" style="color: #f8f8f8">Hủy bỏ</a></button>
                                </div>
                            </div>
                        </form>
                    </div>
                 </div>
            </div>

        </div>

        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
@endsection
