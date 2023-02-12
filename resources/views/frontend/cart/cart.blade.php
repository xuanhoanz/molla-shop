<div class="dropdown cart-dropdown" id="change-item-cart">
    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true"
       aria-expanded="false" data-display="static">
        <i class="icon-shopping-cart"></i>
        <span class="cart-count">
                                @if(Session::has("Cart") != null)
                <span id="total-quanty-show">{{Session::get("Cart")->totalQuanty}}</span>
            @else
                <span id="total-quanty-show">0</span>
            @endif
                            </span>
    </a>

    <div class="dropdown-menu dropdown-menu-right">
        <div id="change-item-cart">
            @if(Session::has("Cart") != null)
                <div class="select-items">
                    <table>
                        <tbody>
                        @foreach(Session::get('Cart')->products as $item)
                            <tr>
                                <td class="si-pic"></td>
                                <td class="si-text">
                                    <div class="product-selected">
                                        <h6>{{$item['productInfo']->name}}</h6>
                                        <p>{{number_format($item['productInfo']->price)}}VNĐ x {{$item['quanty']}}</p>
                                        <hr>
                                    </div>
                                </td>
                                <td class="si-close">
                                    <i class="icon-close" data-id="{{$item['productInfo']->id}}"></i>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="select-total">
                    <span>Total:</span>
                    <h5>{{number_format(Session::get('Cart')->totalPrice)}} VNĐ</h5>
                </div>
            @endif
        </div>

        <div class="dropdown-cart-action">
            <a href="{{url('/List-Carts')}}" class="btn btn-primary">View Cart</a>
            <a href="/checkout" class="btn btn-outline-primary-2"><span>Checkout</span><i
                    class="icon-long-arrow-right"></i></a>
        </div><!-- End .dropdown-cart-total -->
    </div><!-- End .dropdown-menu -->
</div><!-- End .cart-dropdown -->
