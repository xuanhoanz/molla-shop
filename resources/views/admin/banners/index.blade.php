@extends('admin.templates.master')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Danh sách Banner</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div id="customerList">
                                <div class="row g-4 mb-3">
                                    <div class="col-sm-auto">
                                        <div>
                                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal"
                                                    id="create-btn" data-bs-target="#showModal"><i
                                                    class="ri-add-line align-bottom me-1"></i> <a
                                                    href="/admin/banners/create" style="color: white">Add</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive table-card mt-3 mb-1">
                                    <table class="table align-middle table-nowrap" id="customerTable">
                                        <thead class="table-light">
                                        <tr>
                                            <th scope="col" style="width: 50px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="checkAll"
                                                           value="option">
                                                </div>
                                            </th>
                                            <th class="sort" data-sort="banner_name">ID</th>
                                            <th class="sort" data-sort="banner_title">Banner Title</th>
                                            <th class="sort" data-sort="image">Image</th>
                                            <th class="sort" data-sort="created_at">Created_At</th>
                                            <th class="sort" data-sort="status">Status</th>
                                            <th class="sort" data-sort="action">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                        @foreach($banner as $row)
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="chk_child"
                                                               value="option1">
                                                    </div>
                                                </th>
                                                <td class="id" style="display:none;"><a href="javascript:void(0);"
                                                                                        class="fw-medium link-primary">#VZ2101</a>
                                                </td>

                                                <td>{{$row->id}}</td>
                                                <td>{{$row->name}}</td>
                                                <td><img height="200" width="300"
                                                         src="{{asset('storage/' . $row->image)}}"
                                                         alt=""></td>
                                                <td>{{$row->created_at}}</td>
                                                <td>@if($row->status === 1)<span
                                                        class="badge badge-soft-success text-uppercase">Mở</span>
                                                    @else <span
                                                            class="badge badge-soft-danger text-uppercase">Khóa</span>
                                                    @endif
                                                </td>


                                                <td>
                                                    <div class="row">
                                                        <div class="col ">
                                                            <a class="btn btn-sm btn-success"
                                                               href="/admin/banners/edit/{{$row->id}}">Edit</a>
                                                        </div>
                                                        <div class="col">
                                                            <form id="btndelete" method="post" action="{{route('banners.destroy',$row->id)}}">
                                                                @method('delete')
                                                                @csrf
                                                            <button  href="" class="btn btn-danger btnDelete btn-sm flex">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                                @endforeach
                                            </tr>
                                        </tbody>
                                    </table>
                                    {{$banner->appends(request()->all())->links()}}
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
<script>
    $(document).ready(function(){
        $('#btndelete').click(function(){
            $(this).swal(
                "Good job!",
                "Đã xóa sản phẩm khỏi giỏ hàng!",
                "success"
            );
        });
    });
</script>
@endsection
