@extends('frontend.templates.master')
@section('content')
<br>
<br>
<br>
<br>
<br>
        <div class="page-content">
            <!-- End .entry-media -->
            <div class="container">
                <article class="entry-content editor-content">
                    <div class="row">
                        <div class="col-lg-11">
                            <div class="entry-body">
                                <div class="entry-meta">
                                        <span class="entry-author">
                                            by <a href="#">Nyan Vũ</a>
                                        </span>
                                    <span class="meta-separator">|</span>
                                    {{date('d-m-Y', strtotime($posts->created_at))}}
                                </div><!-- End .entry-meta -->

                                <h2 class="entry-title entry-title-big">
                                    {{$posts->posts_title}}
                                </h2><!-- End .entry-title -->

                                <div class="entry-cats">
                                    {{$posts->posts_category}}
                                </div><!-- End .entry-cats -->

                                <div class="entry-content editor-content">
                                    {!!$description!!}
                                </div><!-- End .entry-content -->

                            </div><!-- End .entry-body -->
                        </div><!-- End .col-lg-11 -->

                        <div class="col-lg-1 order-lg-first mb-2 mb-lg-0">
                            <div class="sticky-content">
                                <div class="social-icons social-icons-colored social-icons-vertical">
                                    <span class="social-label">SHARE:</span>
                                    <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                    <a href="#" class="social-icon social-linkedin" title="Linkedin" target="_blank"><i class="icon-linkedin"></i></a>
                                </div><!-- End .soial-icons -->
                            </div><!-- End .sticky-content -->
                        </div><!-- End .col-lg-1 -->
                    </div><!-- End .row -->
                </article><!-- End .entry -->


{{--                <div class="related-posts">--}}
{{--                    <h3 class="title">Related Posts</h3><!-- End .title -->--}}

{{--                    <div class="owl-carousel owl-simple" data-toggle="owl"--}}
{{--                         data-owl-options='{--}}
{{--                                "nav": false,--}}
{{--                                "dots": true,--}}
{{--                                "margin": 20,--}}
{{--                                "loop": false,--}}
{{--                                "responsive": {--}}
{{--                                    "0": {--}}
{{--                                        "items":1--}}
{{--                                    },--}}
{{--                                    "480": {--}}
{{--                                        "items":2--}}
{{--                                    },--}}
{{--                                    "768": {--}}
{{--                                        "items":3--}}
{{--                                    },--}}
{{--                                    "992": {--}}
{{--                                        "items":4--}}
{{--                                    }--}}
{{--                                }--}}
{{--                            }'>--}}
{{--                        @foreach($posts as $row)--}}
{{--                        <article class="entry entry-grid">--}}
{{--                            <figure class="entry-media">--}}
{{--                                <a href="/posts-detail/{{$row->id}}">--}}
{{--                                    <img  src="{{asset('storage/' . $row->images)}}" alt="">--}}
{{--                                </a>--}}
{{--                            </figure><!-- End .entry-media -->--}}

{{--                            <div class="entry-body">--}}
{{--                                <div class="entry-meta">--}}
{{--                                    {{date('d-m-Y', strtotime($row->created_at))}}--}}
{{--                                    <span class="meta-separator">|</span>--}}
{{--                                </div><!-- End .entry-meta -->--}}

{{--                                <h2 class="entry-title">--}}
{{--                                    <a href="/posts/{{$row->id}}">{{$row->posts_title}}</a>--}}
{{--                                </h2><!-- End .entry-title -->--}}

{{--                                <div class="entry-cats">--}}
{{--                                    in @if($row->posts_category_id === 1) {{'Review'}}--}}
{{--                                    @elseif($row->posts_category_id === 2) {{'Làm đẹp'}}--}}
{{--                                    @else {{'Chăm sóc sức khỏe'}}--}}
{{--                                    @endif--}}
{{--                                </div><!-- End .entry-cats -->--}}
{{--                            </div><!-- End .entry-body -->--}}
{{--                        </article><!-- End .entry -->--}}
{{--                        @endforeach--}}
{{--                    </div><!-- End .owl-carousel -->--}}
{{--                </div><!-- End .related-posts -->--}}
            </div><!-- End .container -->
        </div><!-- End .page-content -->

@endsection
