@extends('admin.templates.master')
@include('sweetalert::alert')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data"
                              action="/admin/users/store">
                            @csrf
                            <div class="card-body">
                                <h4 class="card-title">Thêm thông tin người dùng</h4>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Tên</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name"
                                               placeholder="Nhập tên người dùng" name="name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email"
                                               placeholder="Nhập email người dùng" name="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Mật khẩu</label>
                                    <div class="col-sm-9">
                                        <input maxlength="8" minlength="8" type="password" class="form-control" id="password" placeholder="Nhập mật khẩu"
                                               name="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Trạng thái</label>
                                    <div class="col-sm-9">
                                        <select name="status" class="select2 form-control custom-select"
                                                style="width: 100%; height:36px;">
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
                                    <button type="submit"
                                            name="submit" class="btn btn-primary">Thêm mới</button>
                                    <button class="btn btn-danger" ><a href="/admin/users/" style="color: #f8f8f8">Hủy bỏ</a></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
