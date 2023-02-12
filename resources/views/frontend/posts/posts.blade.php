@extends('frontend.templates.master')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
        <div class="page-header text-center" style="background-image: url('{{asset('layouts/images/page-header-bg.jpg')}}')">
            <div class="container">
                <h1 class="page-title">Blog </h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->

        <div class="page-content">
            <div class="container">
                <div class="entry-container" data-layout="fitRows">
                    @foreach($posts as $row)
                    <div class="entry-item lifestyle shopping col-sm-6 col-lg-4">
                        <article class="entry entry-mask">
                            <figure class="entry-media">
                                <a href="#">
                                <!-- <a href="/posts-detail/{{{$row->id}}}"> -->

                                    <img src="{{asset('storage/' . $row->images)}}" alt="Product image"
                                         class="product-image">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-meta">
                                    {{date('d-m-Y', strtotime($row->created_at))}}
                                    <span class="meta-separator">|</span>
                                </div><!-- End .entry-meta -->

                                <h2 class="entry-title">
                                    <a href="/posts-detail/{{$row->id}}">{{$row->posts_title}}</a>
                                </h2><!-- End .entry-title -->

                                <div class="entry-cats">
                                    in @if($row->posts_category_id === 1) {{'Review'}}
                                    @elseif($row->posts_category_id === 2) {{'Làm đẹp'}}
                                    @else {{'Chăm sóc sức khỏe'}}
                                    @endif
                                </div><!-- End .entry-cats -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .entry-item -->
                    @endforeach
                </div><!-- End .entry-container -->

                <div class="mb-3"></div><!-- End .mb-3 -->

                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        {{$posts->links()}}
                    </ul>
                </nav>
            </div><!-- End .container -->
        </div><!-- End .page-content -->
@endsection
