<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="products mb-3">
                    <div class="row justify-content-center">
                        @foreach($products as $row)
                        <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="product product-7 text-center">
                                <figure class="product-media " style="width: 250px; height: 250px">
                                    <span class="product-label label-new">New</span>
                                    <a href="/single-product/{{$row->id}}">
                                        <img src="{{asset('storage/' . $row->image)}}" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a onclick="AddCart({{$row->id}})" href="javascript:" class="btn-product btn-cart"><span>Add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Women</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="#">{{$row->name}}</a></h3>
                                    <div class="product-price">
                                        {{number_format($row->price)}} VNĐ
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
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
            <aside class="col-lg-3 order-lg-first">
                <div class="sidebar sidebar-shop">
                    <div class="">
                        <h4 class="widget-title">
                                Category
                        </h4><!-- End .widget-title -->
@foreach( $categories as $row)
    <hr>
    <div>
        <a class="text-black text-decoration-none" href="{{route('product.show', $row->id)}}">{{$row->name}}</a>
    </div>
                        @endforeach
                    </div><!-- End .widget -->

                </div><!-- End .sidebar sidebar-shop -->
            </aside><!-- End .col-lg-3 -->
        </div><!-- End .row -->
    </div><!-- End .container -->
</div><!-- End .page-content -->
