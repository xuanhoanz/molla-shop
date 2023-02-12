@extends('frontend.templates.master')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
        <div class="container">
            <div class="page-header text-center" style="background-image: url('{{asset('layouts/images/page-header-bg.jpg')}}')">
                <div class="container">
                    <h1 class="page-title">Liên hệ với chúng tôi</h1>
                </div><!-- End .container -->
        </div><!-- End .container -->
<hr>
        <div class="page-content pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-2 mb-lg-0">
                        <h2 class="title mb-1">Thông tin liên hệ</h2><!-- End .title mb-2 -->
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="contact-info">

                                    <ul >
                                        <li>
                                            <i class="icon-map-marker"></i>
                                            Đông Ngạc, Bắc Từ Liêm, Hà Nội, Việt Nam
                                        </li>
                                        <li>
                                            <i class="icon-phone"></i>
                                            <a href="tel:#">0966 194 595</a>
                                        </li>
                                        <li>
                                            <i class="icon-envelope"></i>
                                            <a href="mailto:vuhuongngan235@gmail.com">vuhuongngan235@gmail.com</a>
                                        </li>
                                    </ul><!-- End .contact-list -->
                                </div><!-- End .contact-info -->
                            </div><!-- End .col-sm-7 -->

                            <div class="col-sm-5">
                                <div class="contact-info">
                                    <h3>Thời gian làm việc</h3>

                                    <ul class="contact-list">
                                        <li>
                                            <i class="icon-clock-o"></i>
                                            <span class="text-dark">Monday-Saturday</span> || 7am-9pm
                                        </li>
                                        <li>
                                            <i class="icon-calendar"></i>
                                            <span class="text-dark">Sunday</span> || 8am-6pm
                                        </li>
                                    </ul><!-- End .contact-list -->
                                </div><!-- End .contact-info -->
                            </div><!-- End .col-sm-5 -->
                        </div><!-- End .row -->
                    </div><!-- End .col-lg-6 -->
                    <div class="col-lg-6">
                        <h2 class="title mb-1">Bạn cần thêm thông tin tư vấn?</h2><!-- End .title mb-2 -->
                        <p class="mb-2">Sử dụng biểu mẫu bên dưới để liên hệ với Nyan Vũ nhé!</p>

                        <form class="form-horizontal" method="post" enctype="multipart/form-data"
                              action="/contact-us/store">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="cname" class="sr-only">Họ và tên</label>
                                    <input type="text" class="form-control" id="cname" name="name" placeholder="Họ và tên *" required>
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6">
                                    <label for="cemail" class="sr-only">Email</label>
                                    <input type="email" class="form-control" id="cemail" name="email" placeholder="Email *" required>
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="cphone"  class="sr-only">Số điện thoại</label>
                                    <input type="tel" class="form-control" id="cphone" name="phone_number" placeholder="Số điện thoại *">
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6">
                                    <label for="csubject"  class="sr-only">Tiêu đề</label>
                                    <input type="text" class="form-control" id="csubject" name="subject" placeholder="Tiêu đề *">
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->

                            <label for="cmessage" class="sr-only">Nội dung</label>
                            <textarea class="form-control" cols="30" rows="4" id="cmessage" name="contents" required placeholder="Nội dung *"></textarea>

                            <button type="submit" name="submit" class="btn btn-outline-primary-2 btn-minwidth-sm">
                                <span>Gửi thông tin</span>
                                <i class="icon-long-arrow-right"></i>
                            </button>
                            <hr>
                        </form><!-- End .contact-form -->
                    </div><!-- End .col-lg-6 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
@endsection
