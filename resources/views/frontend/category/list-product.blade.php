<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="products mb-3">
                    <div class="row justify-content-center">
                        @foreach($products as $row)
                            <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                <div class="product product-7 text-center">
                                    <figure class="product-media img-thumbnail rounded img-fluid" style="width: 275px; height: 275px">
{{--                                        <span class="product-label label-new">New</span>--}}
                                        <a href="/single-product/{{$row->id}}">
                                            <img src="{{asset('storage/' . $row->image)}}" alt="Product image"
                                                 class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a onclick="AddCart({{$row->id}})" href="javascript:"
                                               class="btn-product btn-cart"><span>Add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            @if($row->category_id === 1) {{'Saffron dạng sợi'}}
                                            @elseif($row->category_id === 2){{'Mỹ phẩm'}}
                                            @elseif($row->category_id === 3){{'Set quà Tết 2023'}}
                                            @elseif($row->category_id === 4){{'Nước hoa'}}
                                            @elseif($row->category_id === 5){{'Saffron Mật ong'}}
                                            @elseif($row->category_id === 6){{'Set quà'}}
                                            @endif
                                        </div><!-- End .product-cat -->
                                        <p class="text-capitalize" ><a style="color: black" href="#">{{$row->name}}</a></p>
                                        <div class="product-price text-danger">
                                            {{number_format($row->price)}} VNĐ
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div>
                                                <!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->
                        @endforeach
                    </div><!-- End .row -->
                </div><!-- End .products -->


                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        {{$products->links()}}
                    </ul>
                </nav>
            </div><!-- End .col-lg-9 -->
            <aside class="col-lg-2 order-lg-first">
                <div class="sidebar sidebar-shop">
                    <div class="">
                        <a href="{{route('category.index')}}">
                            <h4 class="widget-title">
                                Bộ sưu tập
                            </h4><!-- End .widget-title -->
                        </a>
                        @foreach( $categories as $row)
                            <hr>
                            <div class="widget-title"  >
                                <a href="{{route('category.show', $row->id)}}" style="color: black">
                                <i class="bi bi-tags"> </i>{{$row->name}}
                                </a>
                            </div>
                        @endforeach
                        <hr>
                    </div><!-- End .widget -->

                </div><!-- End .sidebar sidebar-shop -->
            </aside><!-- End .col-lg-3 -->
        </div><!-- End .row -->
    </div><!-- End .container -->
</div><!-- End .page-content -->
