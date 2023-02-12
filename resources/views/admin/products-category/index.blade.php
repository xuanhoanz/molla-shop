@extends('admin.templates.master')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Danh sách Bộ sưu tập</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div id="customerList">
                                <div class="row g-4 mb-3">
                                    <div class="col-sm-auto">
                                        <div>
                                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal"
                                                    id="create-btn" data-bs-target="#showModal"><i
                                                    class="ri-add-line align-bottom me-1"></i> <a
                                                    href="/admin/product-category/create" style="color: white">Add</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr align="center">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Total Products</th>
                                    <th>Description</th>
                                    <th>Created Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($productCategory as $row)
                                    <tr align="center">
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->products ? $row->products->count() : 0 }}</td>
                                        <td>{{$row->description}}</td>
                                        <td>{{$row->created_at->format('d-m-Y')}}</td>
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
                                                       href="/admin/product-category/edit/{{$row->id}}">Edit</a>
                                                </div>
                                                <div class="col">
                                                    <form method="post" action="{{route('product-category.delete',$row->id)}}">
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
                                    <th>Name</th>
                                    <th>Total Products</th>
                                    <th>Description</th>
                                    <th>Created Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </tfoot>
                            </table>
                            <form method="POST" action="" id="form-delete">
                                @csrf @method('PATCH')
                            </form>
                            {{$productCategory->appends(request()->all())->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

