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
        <nav class="mobile-nav">
        <ul class="mobile-menu">
                            <li><a href="/" >Trang chủ</a></li>
                            <li><a href="/about-us" >Giới thiệu</a></li>
                            <li><a href="{{route('category.index')}}" >Sản phẩm</a></li>
                            <li><a href="#">Cẩm nang</a></li>
                            <li><a href="/contact-us">Liên hệ</a></li>
                        </ul>
        </nav>
                        
        <div class="social-icons">
            <a href="https://www.facebook.com/huongngan235" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Pinterest"><i class="icon-pinterest"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->

<!-- Sign in / Register Modal -->

<!-- Plugins JS File -->
<script src="{{asset('layouts/js/wNumb.js')}}"></script>
<script src="{{asset('layouts/bootstrap-input-spinner.js')}}"></script>
<script src="{{asset('layouts/js/nouislider.min.js')}}"></script>
<!-- Main JS File -->
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

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
<!-- JavaScript -->
<script>
    function AddCart(id){
        $.ajax({
            url: 'Add-Cart/'+id,
            type: 'GET',
        }).done(function(response) {
            RenderCart(response);
            swal("Good job!", "Bạn đã thêm sản phẩm vào giỏ hàng!", "success");
        });
    }

    $("#change-item-cart").on("click", ".si-close i" , function(){
        $.ajax({
            url: 'Delete-Item-Cart/'+$(this).data("id"),
            type: 'GET',
        }).done(function(response) {
            RenderCart(response);
            swal("Good job!", "Đã xóa sản phẩm khỏi giỏ hàng!", "success");
        });
    });

    function RenderCart(response){
        $("#change-item-cart").empty();
        $("#change-item-cart").html(response);
        $("#total-quanty-show").text($("#total-quanty-cart").val());
    }

</script>



