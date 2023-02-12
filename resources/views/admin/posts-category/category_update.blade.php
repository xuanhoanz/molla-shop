@extends('admin.templates.master')
@section('content')
    <form method="post" action="/admin/posts-category/update/{{ $postsCategory->id }}">
        @method('PATCH')
        @csrf
        <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Chỉnh sửa thông tin loại bài viết</h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên loại</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" value="{{$postsCategory->name}}" name="name"
                                        >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Mô tả</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" value="{{$postsCategory->description}}" name="description">
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
                                    <button type="submit" name="submit" class="btn btn-success">Cập nhật</button>
                                    <button class="btn btn-danger" ><a href="/admin/posts-category/" style="color: #f8f8f8">Hủy bỏ</a></button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </form>
@endsection
