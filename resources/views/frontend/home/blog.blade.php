<div class="container">
<hr class="mt-6">
    <div class="heading text-center mt-8 mb-8">
        <h2 class="text-secondary">Bài viết mới</h2>
    </div>
<div class="blog-posts">
    <div class="container">

        <div class="owl-carousel owl-simple carousel-with-shadow" data-toggle="owl"
             data-owl-options='{
                            "nav": false,
                            "dots": true,
                            "items": 3,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
                                },
                                "600": {
                                    "items":2
                                },
                                "992": {
                                    "items":3
                                }
                            }
                        }'>
            @foreach($posts as $row)
            <article class="entry entry-display">
                <figure class="entry-media">
                    <a href="#">
                        <img  src="{{asset('storage/' . $row->images)}}" alt="">
                    </a>
                </figure><!-- End .entry-media -->

                <div class="entry-body text-center">
                    <div class="entry-meta">
                        {{date('d-m-Y', strtotime($row->created_at))}}
                    </div><!-- End .entry-meta -->

                    <h3 class="entry-title">
                        <a href="/posts-detail/{{$row->id}}">{{$row->posts_title}}</a>
                    </h3><!-- End .entry-title -->

                    <div class="entry-content">
                        <a href="/posts-detail/{{$row->id}}" class="read-more">Continue Reading</a>
                    </div><!-- End .entry-content -->
                </div><!-- End .entry-body -->
            </article><!-- End .entry -->
            @endforeach
        </div><!-- End .owl-carousel -->

        <div class="more-container text-center mt-2">
            <a href="/posts" class="btn btn-outline-darker btn-more"><span>Xem nhiều bài viết hơn</span><i class="icon-long-arrow-right"></i></a>
        </div><!-- End .more-container -->
    </div><!-- End .container -->
</div><!-- End .blog-posts -->
</div>
