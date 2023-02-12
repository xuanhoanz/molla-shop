@extends('admin.templates.master')
@section('content')
    <form method="post" action="/admin/customer/update/{{ $customer->id }}">
        @method('PATCH')
        @csrf
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Chỉnh sửa thông tin khách hàng</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Tên</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="name" value="{{$customer->name}}" name="name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-sm-3 text-right control-label col-form-label">Giới tính</label>
                                        <div class="col-sm-9">
                                            <select name="status" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                                <option>---Chọn---</option>
                                                <option value="1">Nam</option>
                                                <option value="2">Nữ</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Ngày sinh</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="date_of_birth" value="{{$customer->date_of_birth}}" name="date_of_birth">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Địa chỉ</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="address" value="{{$customer->address}}" name="address">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Điện thoại liên hệ</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="phone_number" value="{{$customer->phone_number}}" name="phone_number">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="email" value="{{$customer->email}}" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Ghi chú</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="note" value="{{$customer->note}}" name="note">
                                        </div>
                                    </div>
{{--                                    <div class="form-group row">--}}
{{--                                        <label class="col-sm-3 text-right control-label col-form-label">Trạng thái</label>--}}
{{--                                        <div class="col-sm-9">--}}
{{--                                            <select name="status" class="select2 form-control custom-select" style="width: 100%; height:36px;">--}}
{{--                                                <option>---Chọn---</option>--}}
{{--                                                <option value="1">Mở</option>--}}
{{--                                                <option value="2">Khóa</option>--}}
{{--                                                </optgroup>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
                                <div class="border-top">
                                    <td>
                                    <div class="card-body">
                                        <button type="submit" name="submit" class="btn btn-success">Thêm mới</button>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="card-body">
                                        <button href="/admin/customer/" class="btn btn-danger">Hủy bỏ</button>
                                    </div>
                                    </td>
                                </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
    </form>
@endsection
