@extends('admin.templates.master')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">BILLS LIST</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div id="customerList">
                                <div class="row g-4 mb-3">
                                    <div class="col-sm-auto">
                                        <div>
                                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal"
                                                    id="create-btn" data-bs-target="#showModal"><i
                                                    class="ri-add-line align-bottom me-1"></i>
                                                <a href="#" style="color: white">Add</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer Id</th>
                                    <th>Total</th>
                                    <th>Note</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($bills as $bill)
                                    <tr>
                                        <td><a href="/admin/bills/{{$bill->id}}">{{$bill->id}}</a></td>
                                        <td>{{$bill->customer_id}}</td>
                                        <td>{{number_format($bill->total)}}</td>
                                        <td>{{$bill->note}}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col ">
                                                    <a class="btn btn-sm btn-success"
                                                       href="#">Edit</a>
                                                </div>
                                                
                                        </td>
                                        </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer Id</th>
                                    <th>Total</th>
                                    <th>Note</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                            {{$bills->appends(request()->all())->links()}}
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
