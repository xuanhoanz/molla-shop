@extends('frontend.templates.master')


@section('content')
    <br>
    <br>
    <br>
    <br>
    <hr>

    <main class="main">
        <div class="page-content" id="list-cart">
            <div class="cart">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7" >
                            <table class="table table-cart table-mobile" >
                                <thead>
                                <tr align="center">
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Save</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(Session::has("Cart") != null)
                                    @foreach(Session::get('Cart')->products as $item)
                                        <tr align="center">
                                            <td class="cart-pic first-row"><a href="/single-product/{{$item['productInfo']->id}}">
                                                    <img width="150" height="200" src="{{asset('storage/' . $item['productInfo']->image)}}" alt="Product image" >
                                                </a></td>
                                            <td class="product-col">
                                                <h5 class="product-title" >{{$item['productInfo']->name}}</h5>
                                            </td>
                                            <td class="price-col">{{number_format($item['productInfo']->price)}}VNĐ</td>
                                            <td class="qua-col first-row">
                                                <div class="quantity">
                                                    <div class="cart-product-quantity">
                                                        <input id="quanty-item-{{$item['productInfo']->id}}" type="number" class="form-control" value="{{$item['quanty']}}">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="total-col">{{number_format($item['price'])}}VNĐ</td>
                                            <td class="close-td first-row"><i onclick="SaveListItemCart({{$item['productInfo']->id}});"  class="icon icon-check"></i></td>
                                            <td class="remove-col"><i class="icon-close" onclick="DeleteListItemCart({{$item['productInfo']->id}});"></i></td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table><!-- End .table table-wishlist -->
                        </div><!-- End .col-lg-9 -->
                        <aside class="col-lg-5">
                            <div class="summary summary-cart">
                                <h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

                                <table class="table table-summary">
                                    <tbody>
                                    <tr class="summary-subtotal">
                                        <td>Subtotal:</td>
                                        <td>{{Session::get('Cart')->totalQuanty}}</td>
                                    </tr><!-- End .summary-subtotal -->
                                    <tr class="summary-total">
                                        <td>Total:</td>
                                        <td>{{number_format(Session::get('Cart')->totalPrice)}}VNĐ</td>
                                    </tr><!-- End .summary-total -->
                                    </tbody>
                                </table><!-- End .table table-summary -->

                                <a href="/checkout" class="btn btn-outline-primary-2 btn-order btn-block">THANH TOÁN</a>
                            </div><!-- End .summary -->

                            <a href="/List-Carts" class="btn btn-outline-dark-2 btn-block mb-3"><span>CẬP NHẬT GIỎ HÀNG</span><i class="icon-refresh"></i></a>
                        </aside><!-- End .col-lg-3 -->
                        @else <h3 align="center"> Hiện tại không có sản phẩm nào trong giỏ hàng!</h3>
                        @endif
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .cart -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
    <script>

        function DeleteListItemCart(id){
            $.ajax({
                url: 'Delete-Item-List-Cart/'+id,
                type: 'GET',
            }).done(function(response) {
                RenderListCart(response);
                swal("Good job!", "Đã xóa sản phẩm khỏi giỏ hàng!", "success");
            });
        }

        function SaveListItemCart(id){
            $.ajax({
                url: 'Save-Item-List-Cart/'+id+'/'+$("#quanty-item-"+id).val(),
                type: 'GET',
            }).done(function(response) {
                RenderListCart(response);
                swal("Good job!", "Cập nhật sản phẩm thành công!", "success");
            });
        }
        function RenderListCart(response){
            $("#list-cart").empty();
            $("#list-cart").html(response);


            var proQty = $('.pro-qty');
            proQty.prepend('<span class="dec qtybtn">-</span>');
            proQty.append('<span class="inc qtybtn">+</span>');
            proQty.on('click', '.qtybtn', function () {
                var $button = $(this);
                var oldValue = $button.parent().find('input').val();
                if ($button.hasClass('inc')) {
                    var newVal = parseFloat(oldValue) + 1;
                } else {
                    // Don't allow decrementing below zero
                    if (oldValue > 0) {
                        var newVal = parseFloat(oldValue) - 1;
                    } else {
                        newVal = 0;
                    }
                }
                $button.parent().find('input').val(newVal);
            });
        }

    </script>

@endsection
