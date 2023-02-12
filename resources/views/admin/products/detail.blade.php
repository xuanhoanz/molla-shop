@extends('admin.templates.master')
@section('content')
    <div class="page-content">
        <div class="container">
            <table class="table table-nowrap">
                <tbody>
                <tr>
                    <td>Tên sản phẩm: {{$products->name}}</td>
                </tr>
                <tr>
                    <td>Bộ sưu tập: {{$products->category_id}}</td>
                    </tr>
                <tr>
                    <td>Ảnh chính: <img height="200" width="300"
                                        src="{{asset('storage/' . $products->image)}}" alt=""></td>
                </tr>
                <tr>
                    <td>Đơn giá: {{$products->price}}</td>
                </tr>
                <tr>
                    <td>Thông tin mô tả: {!!$products->information!!}</td>
                </tr>
                <tr>
                    <td>Thông tin chi tiết: {!! $products->description !!}</td>
                </tr>
                <tr>
                <td>
                    <a href="{{route('products.edit',$products->id)}}" class="btn btn-success">Edit </a>
                </td>
                </tr>
                </tbody>
            </table>
        </div><!-- End .container -->
    </div><!-- End .page-content -->
@endsection


