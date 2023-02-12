@extends('admin.templates.master')
@section('content')
    <form method="post" enctype="multipart/form-data" action="/admin/posts/update/{{ $posts->id }}">
        @method('PATCH')
        @csrf
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Chỉnh sửa thông tin bài viết</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tiêu đề bài viết</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Nhập tiêu đề bài viết" name="posts_title" value="{{$posts->posts_title}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Chủ đề</label>
                                        <div class="col-sm-9">
                                            <select name="posts_category_id" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                                <option>---Chọn---</option>
                                                <option value="1">Review</option>
                                                <option value="2">Làm đẹp</option>
                                                <option value="3">Chăm sóc sức khỏe</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Mô tả tóm tắt</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"  placeholder="Mô tả tóm tắt về bài viết" name="information" value="{{$posts->information}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-sm-3 text-right control-label col-form-label">Hình ảnh</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="images"  name="images">
                                            <img height="200" width="300" src="{{asset('storage/' . $posts->images)}}" alt="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Chi tiết bài viết</label>
                                        <div class="col-sm-9">
                                            <textarea name="description" class="form-control " id="editor1"  >{{$posts->description}}</textarea>
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
                                    <div class="card-body" >
                                        <button type="submit" name="submit" class="btn btn-success" >Cập nhật</button>
                                        <button class="btn btn-danger" ><a href="/admin/posts/" style="color: #f8f8f8">Hủy bỏ</a></button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
