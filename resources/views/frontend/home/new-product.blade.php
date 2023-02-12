<div class="heading text-center mt-6 mb-4">
    <h2 class="text-secondary">Sản phẩm bán chạy</h2>
    <h6>Selling products</h6>
</div>

<div class="container-fluid">
    <div class="tab-content tab-content-carousel">
        <div class="container">

        <div class="tab-pane p-0 fade show active" id="products-featured-tab" role="tabpanel"
             aria-labelledby="products-featured-link">
            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                 data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
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
                                        "items":5
                                    },
                                    "1600": {
                                        "items":6,
                                        "nav": true
                                    }
                                }
                            }'>
                @foreach($products as $row)
                    <div class="product product-11 text-center">
                        <figure class="product-media" style="width: 250px; height: 250px">
                            <a href="/single-product/{{$row->id}}">
                                <img src="{{asset('storage/' . $row->image)}}" alt="Product image"
                                     class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                            </div><!-- End .product-action-vertical -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="#">{{$row->name}}</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                {{number_format($row->price)}} VNĐ
                            </div><!-- End .product-price -->
                        </div><!-- End .product-body -->
                        <div class="product-action">
                            <a onclick="AddCart({{$row->id}})" href="javascript:" class="btn-product btn-cart"><span>Add to cart</span></a>
                        </div><!-- End .product-action -->
                    </div><!-- End .product -->
                @endforeach

            </div><!-- End .owl-carousel -->
        </div><!-- .End .tab-pane -->
        </div>
</div><!-- End .tab-content -->
</div><!-- End .container-fluid -->
