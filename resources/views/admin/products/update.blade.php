@extends('admin.templates.master')
@section('content')
    <form method="post" enctype="multipart/form-data" action="{{route('products.update',$products->id)}}">
        @method('PATCH')
        @csrf
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Chỉnh sửa thông tin sản phẩm</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Loại sản phẩm</label>
                                        <div class="col-sm-9">
                                            <select id= "category_id" name="category_id" class="select2 form-control custom-select"
                                                    style="width: 100%; height:36px;">
                                                <option>---Chọn---</option>
                                                <option value="1">Saffron dạng sợi</option>
                                                <option value="2">Mỹ Phẩm</option>
                                                <option value="3">Set quà Tết 2023</option>
                                                <option value="4">Nước hoa</option>
                                                <option value="5">Saffron Mật ong</option>
                                                <option value="6">Set quà</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Tên sản phẩm</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="name"
                                                   value="{{$products->name}}" name="name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Mô tả tóm tắt</label>
                                        <div class="col-sm-9">
                                            <textarea  class="form-control" id="information"
                                                  name="information">{!!$products->information!!}
                                                </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Giới thiệu chi tiết về sản phẩm</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="description"
                                                   name="description"> {!!$products->description!!}
                                                </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Đơn giá</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="price" value="{{$products->price}}" name="price">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Hình ảnh</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="image" name="image">
                                            <img height="200" width="300"
                                                 src="{{asset('storage/' . $products->image)}}" alt="">
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
                                        <button type="submit" name="submit" class="btn btn-success">Cập nhật</button>
                                        <button class="btn btn-danger" ><a href="/admin/products/" style="color: #f8f8f8">Hủy bỏ</a></button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
