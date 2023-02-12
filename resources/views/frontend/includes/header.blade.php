    <header class="header header-31">
        <div class="header-middle sticky-header">
            <div class="container">
                <div class="header-left">
                    <nav class="main-nav">
                        <ul class="menu sf-arrows">
                            <li><a href="/" >Trang chủ</a></li>
                            <li><a href="/about-us" >Giới thiệu</a></li>
                            <li><a href="{{route('category.index')}}" >Sản phẩm</a></li>
                            <li><a href="#">Cẩm nang</a></li>
                            <li><a href="/contact-us">Liên hệ</a></li>
                        </ul><!-- End .menu -->
                    </nav><!-- End .main-nav -->

                    <button class="mobile-menu-toggler">
                        <span class="sr-only">Toggle mobile menu</span>
                        <i class="icon-bars"></i>
                    </button><!--End .mobile-menu-toggler-->
                </div><!-- End .header-left -->

                <figure class="header-center">
                    <a href="/" class="logo">
                        <img src="{{asset('layouts/images/demos/demo-31/header-logo.png')}}" alt="Molla Logo" width="200"
                             height="200">
                    </a>
                </figure><!-- End .header-center -->

                <div class="header-right">
                    <div class="header-search header-search-visible">
                        <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                        <form action="#" method="get">
                            <div class="header-search-wrapper">
                                <label for="q" class="sr-only">Search</label>
                                <input type="search" class="form-control" name="key" id="key"
                                       placeholder="Tìm kiếm sản phẩm ..." required>
                                <button class="btn" type="submit"><i class="icon-search"></i></button>
                            </div><!-- End .header-search-wrapper -->
                        </form>
                    </div><!-- End .header-search -->

                    <a href="/wishlist" class="wishlist-link">
                        <i class="fab fa-heart"></i>
                    </a><!--End .wishlist-link-->

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
                                                    <td class="si-pic"><img width="50" height="100" src="{{asset('storage/' . $item['productInfo']->image)}}" alt="Product image" ></td>
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
                </div><!-- End .header-right -->
            </div><!-- End .container -->
        </div><!-- End .header-middle -->
        <!-- Messenger Plugin chat Code -->
        <div id="fb-root"></div>



        <!-- Your SDK code -->
    </header><!-- End .header -->
