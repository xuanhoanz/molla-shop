@extends('frontend.templates.master')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <main class="main">
        <div class="page-header text-center">
            <div class="container">
                <h1 class="page-title">Checkout<span>Shop</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <div class="page-content">
            <div class="checkout">
                <div class="container">
                    <form action="/checkout/store" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-7">
                                <h2 class="checkout-title">Thông tin đặt hàng</h2><!-- End .checkout-title -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Họ và tên *</label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->
                                <label>Địa chỉ *</label>
                                <input type="text" class="form-control" name="address" required>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Số điện thoại liên hệ *</label>
                                        <input type="number" class="form-control" name="phone_number" required>
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->

                                <label>Email </label>
                                <input type="email" class="form-control" name="email">


                                <label>Ghi chú</label>
                                <textarea class="form-control" cols="30" rows="4" name="note"></textarea>
                            </div><!-- End .col-lg-9 -->
                            <aside class="col-lg-5">
                                <div class=" summary">
                                    <h3 class="summary-title ">Your Order</h3><!-- End .summary-title -->
                                    <div class="accordion-summary" id="accordion-payment">
                                        <div class="page-content" id="list-cart">
                                            <table class="table table-cart table-mobile">
                                                <thead>
                                                <tr align="center">
                                                    <th class="p-name">Product Name</th>
                                                    <th>Quantity</th>
                                                    <th>Total </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if(Session::has("Cart") != null)
                                                    @foreach(Session::get('Cart')->products as $item)
                                                <tr><td>
                                                        <h5 class="product-title" >{{$item['productInfo']->name}}</h5>
                                                    </td>
                                                    <td class="qua-col first-row ">
                                                        <div class="quantity " align="center">
                                                            {{$item['quanty']}}
                                                        </div>
                                                    </td>
                                                    <td class="total-col" align="center">{{number_format($item['price'])}}
                                                    </td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                            </table><!-- End .table table-wishlist -->
                                        </div><!-- End .page-content -->
                                                @else <h3 align="center"> Hiện tại không có sản phẩm nào trong giỏ
                                                    hàng!</h3>
                                                @endif

                                                <div class="card">
                                                    <div class="card-header" id="heading-3">
                                                        <h2 class="card-title">
                                                            Vui lòng thanh toán khi nhận hàng
                                                        </h2>
                                                    </div><!-- End .card-header -->
                                                </div><!-- End .card -->


                                    </div><!-- End .accordion -->

                                    <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                        <span class="btn-text">Place Order</span>
                                        <span class="btn-hover-text">Proceed to Checkout</span>
                                    </button>
                                </div><!-- End .summary -->
                            </aside><!-- End .col-lg-3 -->
                        </div><!-- End .row -->
                    </form>
                </div><!-- End .container -->
            </div><!-- End .checkout -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->



@endsection
