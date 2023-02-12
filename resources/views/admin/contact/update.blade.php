@extends('admin.templates.master')
@section('content')
    <form method="post" action="/admin/contacts/update/{{ $contact->id }}">
        @method('PATCH')
        @csrf
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Update Contact</h4>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Contact Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  value="{{$contact->name}}" name="name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  value="{{$contact->email}}" name="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Phone Number</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  value="{{$contact->phone_number}}" name="phone_number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Subject</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  value="{{$contact->subject}}" name="subject">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Content</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  value="{{$contact->content}}" name="contents">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Ghi chú</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  value="{{$contact->note}}" name="note">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label  class="col-sm-3 text-right control-label col-form-label">Trạng thái</label>
                                    <div class="col-sm-9">
                                        <select name="status" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                            <option>---Chọn---</option>
                                            <option value="1">Đã tư vấn</option>
                                            <option value="2">Chưa tư vấn</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" name="submit" class="btn btn-primary">Cập nhật</button>
                                    <button class="btn btn-danger" action="/admin/contacts/store">Hủy bỏ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
@endsection
