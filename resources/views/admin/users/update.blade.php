@extends('admin.templates.master')
@section('content')
    <form method="post" enctype="multipart/form-data" action="/admin/users/update/{{ $user->id }}">
        @method('PATCH')
        @csrf
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Chỉnh sửa thông tin người dùng</h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên người dùng</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"
                                               name="name" value="{{$user->name}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"
                                               name="email" value="{{$user->email}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control"
                                               name="password" value="{{$user->password}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Trạng
                                        thái</label>
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
                                    <button type="submit" name="submit" class="btn"
                                            style="background: #3A688C; color: #f8f8f8">Cập nhật
                                    </button>
                                    <button class="btn btn-danger" ><a href="/admin/users/" style="color: #f8f8f8">Hủy bỏ</a></button>
                                </div>
                            </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </form>
@endsection
