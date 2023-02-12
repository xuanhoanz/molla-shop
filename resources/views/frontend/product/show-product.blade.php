<!DOCTYPE html>
<html lang="en">
@include('frontend.includes.head')

<body>
<div class="page-wrapper">
    <header class="header header-31">
        <div class="header-middle sticky-header">
            <div class="container">
                <div class="header-left">
                    <nav class="main-nav">
                        <ul class="menu sf-arrows">
                            <li><a href="../">Trang chủ</a></li>
                            <li><a href="../about-us">Giới thiệu</a></li>
                            <li><a href="{{route('category.index')}}">Sản phẩm</a></li>
                            <li><a href="../posts">Blog</a></li>
                            <li><a href="../contact-us">Liên hệ</a></li>
                        </ul><!-- End .menu -->
                    </nav><!-- End .main-nav -->

                    <button class="mobile-menu-toggler">
                        <span class="sr-only">Toggle mobile menu</span>
                        <i class="icon-bars"></i>
                    </button><!--End .mobile-menu-toggler-->
                </div><!-- End .header-left -->

                <figure class="header-center">
                    <a href="/" class="logo">
                        <img src="{{asset('layouts/images/demos/demo-31/header-logo.png')}}" alt="Molla Logo"
                             width="200"
                             height="200">
                    </a>
                </figure><!-- End .header-center -->

                <div class="header-right">
                    <div class="header-search header-search-visible">
                        <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                        <form action="#" method="get">
                            <div class="header-search-wrapper">
                                <label for="q" class="sr-only">Search</label>
                                <input type="search" class="form-control" name="q" id="q"
                                       placeholder="Tìm kiếm sản phẩm ..." required>
                                <button class="btn" type="submit"><i class="icon-search"></i></button>
                            </div><!-- End .header-search-wrapper -->
                        </form>
                    </div><!-- End .header-search -->

                    <a href="" class="wishlist-link">
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
                                                    <td class="si-pic"><img width="50" height="100"
                                                                            src="{{asset('storage/' . $item['productInfo']->image)}}"
                                                                            alt="Product image"></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <h6>{{$item['productInfo']->name}}</h6>
                                                            <p>{{number_format($item['productInfo']->price)}}VNĐ
                                                                x {{$item['quanty']}}</p>
                                                            <hr>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="icon-close"
                                                           data-id="{{$item['productInfo']->id}}"></i>
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
    </header><!-- End .header -->

    <hr>
    <main class="main">

        <div>
            <br>
            <br>
            <br>
            <br>
            <hr>
            <br>
            <br>
            <br>

            <div class="page-content">
                <div class="container">
                    <div class="product-details-top mb-2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-gallery product-gallery-vertical">
                                    <div class="row">
                                        <figure class="product-main-image">
                                            @if(!'url')
                                                <img id="image-main" src="{{'url'}}" alt="Product image">
                                            @else<img id="image-main" src="{{asset('storage/' . $product->image)}}" alt="Product image">
                                            @endif
                                        </figure><!-- End .product-main-image -->

                                        {{--                                        <div class="product-image-gallery ">--}}
                                        {{--                                            <img class="product-gallery-item active border"--}}
                                        {{--                                                 src="{{asset('layouts/images/products/single/1-small.jpg')}}" alt="">--}}

                                        {{--                                            <img class="product-gallery-item active border"--}}
                                        {{--                                                 src="{{asset('layouts/images/products/single/2-small.jpg')}}" alt="">--}}

                                        {{--                                            <img class="product-gallery-item active border"--}}
                                        {{--                                                 src="{{asset('layouts/images/products/single/3-small.jpg')}}" alt="">--}}

                                        {{--                                            <img class="product-gallery-item active border"--}}
                                        {{--                                                 src="{{asset('layouts/images/products/single/4-small.jpg')}}" alt="p">--}}
                                        {{--                                        </div><!-- End .product-image-gallery -->--}}
                                    </div><!-- End .row -->
                                </div><!-- End .product-gallery -->
                            </div><!-- End .col-md-6 -->

                            <div class="col-md-6">
                                <div class="product-details">
                                    <h1 class="product-title">{{$product->name}}</h1><!-- End .product-title -->

                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                    </div><!-- End .rating-container -->

                                    <div class="product-price">
                                        {{number_format($product->price)}} VNĐ
                                    </div><!-- End .product-price -->

                                    <div class="product-content">
                                        {{$products->information}}
                                    </div><!-- End .product-content -->


                                    <div class="details-filter-row details-row-size">
                                        <label for="qty">Số lượng:</label>
                                        <div class="product-details-quantity">
                                            <input type="number" id="qty" class="form-control" value="1" min="1"
                                                   max="10" step="1" data-decimals="0" required>
                                        </div><!-- End .product-details-quantity -->
                                    </div><!-- End .details-filter-row -->

                                    <div class="product-details-action">
                                        <a onclick="AddCart({{$product->id}})" href="javascript:"
                                           class="btn-product btn-cart"><span>Add to cart</span></a>

                                    </div><!-- End .product-details-action -->

                                    <div class="product-details-footer">

                                        <div class="social-icons social-icons-sm">
                                            <span class="social-label">Share:</span>
                                            <a href="#" class="social-icon" title="Facebook" target="_blank"><i
                                                    class="icon-facebook-f"></i></a>
                                            <a href="#" class="social-icon" title="Twitter" target="_blank"><i
                                                    class="icon-twitter"></i></a>
                                            <a href="#" class="social-icon" title="Instagram" target="_blank"><i
                                                    class="icon-instagram"></i></a>
                                            <a href="#" class="social-icon" title="Pinterest" target="_blank"><i
                                                    class="icon-pinterest"></i></a>
                                        </div>
                                    </div><!-- End .product-details-footer -->
                                </div><!-- End .product-details -->
                            </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .product-details-top -->
                </div><!-- End .container -->

                {{--                <div class="product-details-tab product-details-extended ">--}}
                {{--                    <div class="container ">--}}
                {{--                        <ul class="nav nav-pills justify-content-center" role="tablist">--}}
                {{--                            <li class="nav-item">--}}
                {{--                                <a class="nav-link active" id="product-desc-link" data-toggle="tab"--}}
                {{--                                   href="#product-desc-tab" role="tab" aria-controls="product-desc-tab"--}}
                {{--                                   aria-selected="true">Description</a>--}}
                {{--                                {{$products->description}}--}}
                {{--                            </li>--}}
                {{--                        </ul>--}}
                {{--                    </div><!-- End .container -->--}}
                {{--                </div><!-- .End .tab-pane -->--}}
                <div class="product-details-tab">
                    <ul class="nav nav-pills justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                            <div class="product-desc-content">
                                <h3>Product Information</h3>
                                {!!$description!!}
                            </div><!-- End .product-desc-content -->
                        </div><!-- .End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div>
            </div><!-- End .tab-content -->
            <div class="product-details-tab product-details-extended">
                <div class="container">
                    <h2 class="title text-center mb-4">You May Also Like</h2><!-- End .title text-center -->

                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                         data-owl-options='{
                            "nav": false,
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":4,
                                    "nav": true,
                                    "dots": false
                                }
                            }
                        }'>
                        {{--                        @foreach($products as $row)--}}
                        <div class="product product-11 text-center">
                            <figure class="product-media">
                                <a href="/single-product/{{$products->id}}">
                                    <img src="{{asset('storage/' . $products->image)}}" alt="Product image"
                                         class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                                </div><!-- End .product-action-vertical -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="#">{{$products->name}}</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    {{number_format($products->price)}} VNĐ
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                            <div class="product-action">
                                <a onclick="AddCart({{$products->id}})" href="javascript:" class="btn-product btn-cart"><span>Add to cart</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->
                        {{--                        @endforeach--}}
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('frontend.includes.footer')
</div>
<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

<!-- Mobile Menu -->
<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-close"></i></span>

        <form action="#" method="get" class="mobile-search">
            <label for="mobile-search" class="sr-only">Search</label>
            <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..."
                   required>
            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
        </form><!--End .mobile-search-->
        <div class="social-icons">
            <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Pinterest"><i class="icon-pinterest"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->

<!-- Plugins JS File -->
<script src="{{asset('layouts/js/jquery.min.js')}}"></script>
<script src="{{asset('layouts/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('layouts/js/jquery.hoverIntent.min.js')}}"></script>
<script src="{{asset('layouts/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('layouts/js/superfish.min.js')}}"></script>
<script src="{{asset('layouts/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('layouts/js/jquery.plugin.min.js')}}"></script>
<script src="{{asset('layouts/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('layouts/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('layouts/js/layouts/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('layouts/js/isotope.pkgd.min.js')}}"></script>
<!-- Main JS File -->
<script src="{{asset('layouts/js/main.js')}}"></script>
<script src="{{asset('layouts/js/demos/demo-31.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>


<!-- JavaScript -->
<script>
    function AddCart(id) {
        $.ajax({
            url: '../Add-Cart/' + id,
            type: 'GET',
        }).done(function (response) {
            RenderCart(response);
            swal("Good job!", "Bạn đã thêm sản phẩm vào giỏ hàng!", "success");
        });
    }

    function RenderCart(response) {
        $("#change-item-cart").empty();
        $("#change-item-cart").html(response);
        $("#total-quanty-show").text($("#total-quanty-cart").val());
    }

</script>
<script>
    $(".product-gallery-item").click(
        function () {
            url = $(this).attr('src');
            $('#image-main').html('src', url);
        });
</script>
</body>
</html>



