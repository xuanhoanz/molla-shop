@extends('admin.templates.master')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">CUSTOMERS LIST</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div id="customerList">
                                <div class="row g-4 mb-3">
                                    <div class="col-sm-auto">
                                        <div>
                                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal"
                                                    id="create-btn" data-bs-target="#showModal"><i
                                                    class="ri-add-line align-bottom me-1"></i>
                                                <a href="/admin/customers/create/" style="color: white">Add</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Date of birth</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Note</th>
                                    <th>Created_At</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($customer as $row)
                                    <tr>
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->gender}}</td>
                                        <td>{{$row->date_of_birth}}</td>
                                        <td>{{$row->address}}</td>
                                        <td>{{$row->phone_number}}</td>
                                        <td>{{$row->email}}</td>
                                        <td>{{$row->note}}</td>
                                        <td>{{$row->created_at}}</td>

                                        <td>
                                            <div class="row">
                                                <div class="col ">
                                                    <a class="btn btn-sm btn-success"
                                                       href="/admin/customers/edit/{{$row->id}}">Edit</a>
                                                </div>
                                                <div class="col">
                                                    <form  method="post" action="{{route('customers.delete',$row->id)}}">
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
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Date of birth</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Note</th>
                                    <th>Created_At</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                            <form method="POST" action="" id="form-delete">
                                @csrf @method('PATCH')
                            </form>
                            {{$customer->appends(request()->all())->links()}}

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
