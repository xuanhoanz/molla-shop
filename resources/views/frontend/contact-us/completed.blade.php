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
                <h1 class="page-title">Xin cảm ơn!</h1>
                <br>
                <h5>Nyan Vũ đã nhận được thông tin và sẽ liên hệ lại bạn trong thời gian sớm nhất!</h5>
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
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->

@endsection
