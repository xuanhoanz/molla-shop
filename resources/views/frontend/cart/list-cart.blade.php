@if(Session::has("Cart") != null)
    @foreach(Session::get('Cart')->products as $item)
<div class="page-content" id="list-cart">
    <div class="cart">
        <div class="container">
            <div class="row">
                <div class="col-lg-9" >
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
                <aside class="col-lg-3">
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

                        <a href="/checkout" class="btn btn-outline-primary-2 btn-order btn-block">ĐẶT HÀNG</a>
                    </div><!-- End .summary -->

                    <a href="/List-Carts" class="btn btn-outline-dark-2 btn-block mb-3"><span>CẬP NHẬT GIỎ HÀNG</span><i class="icon-refresh"></i></a>
                </aside><!-- End .col-lg-3 -->

            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .cart -->
</div><!-- End .page-content -->
@else <h3 align="center"> Hiện tại không có sản phẩm nào trong giỏ hàng!</h3>
@endif
