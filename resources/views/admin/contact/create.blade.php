@extends('admin.templates.master')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data"
                              action="/admin/contacts/store">
                            @csrf
                            <div class="card-body">
                                <h4 class="card-title">Thêm thông tin khách hàng</h4>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Tên</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name"
                                               placeholder="Nhập tên khách hàng" name="name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Điện thoại liên
                                        hệ</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="phone_number"
                                               placeholder="Nhập số điện thoại khách hàng" name="phone_number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email"
                                               placeholder="Nhập email khách hàng" name="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Chủ đề</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="subject"
                                               placeholder="Nhập chủ đề liên hệ" name="subject">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Nội dung liên hệ</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="contents"
                                               placeholder="Nhập nội dung khách hàng liên hệ" name="contents">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Ghi chú</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="note" placeholder="Nhập ghi chú"
                                               name="note">
                                    </div>
                                </div>

                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit"
                                            name="submit" class="btn btn-success">Thêm mới</button>
                                    <button class="btn btn-danger" ><a href="/admin/contacts/" style="color: #f8f8f8">Hủy bỏ</a></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
