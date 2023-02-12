@extends('admin.templates.master')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Danh sách Sản phẩm</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div id="customerList">
                                <div class="row g-4 mb-3">
                                    <div class="col-sm-auto">
                                        <div>
                                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal"
                                                    id="create-btn" data-bs-target="#showModal"><i
                                                    class="ri-add-line align-bottom me-1"></i> <a
                                                    href="{{route('products.create')}}" style="color: white">Add</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                        <tr align="center">
                                            <th>ID</th>
                                            <th>Category</th>
                                            <th>Name</th>
                                            <th>Information</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $row)
                                            <tr align="center">
                                                <td>{{$row->id}}</td>
                                                <td>{{$row->category_id}}</td>
                                                <td><a href="/admin/products/{{$row->id}}">{{$row->name}}</a></td>
                                                <td align="left">{!!$row->information!!}</td>
                                                <td>{{number_format($row->price)}}</td>
                                                <td><img height="100" width="100"
                                                         src="{{asset('storage/' . $row->image)}}" alt=""></td>
                                                <td>@if($row->status == 1)<span
                                                        class="badge badge-soft-success text-uppercase">Mở</span>
                                                    @else <span
                                                            class="badge badge-soft-danger text-uppercase">Khóa</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col ">
                                                            <a class="btn btn-sm btn-success"
                                                               href="/admin/products/edit/{{$row->id}}">Edit</a>
                                                        </div>
                                                        <div class="col">
                                                            <form method="post" action="{{route('products.destroy',$row->id)}}">
                                                                @method('delete')
                                                                @csrf
                                                                <button  href="" class="btn btn-danger btnDelete btn-sm flex">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr align="center">
                                            <th>ID</th>
                                            <th>Category</th>
                                            <th>Name</th>
                                            <th>Information</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    {{$products->appends(request()->all())->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
@endsection
