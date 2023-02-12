<script src="{{asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('admin/assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
<script src="{{asset('admin/assets/js/plugins.js')}}"></script>

<!-- apexcharts -->
<script src="{{asset('admin/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

<!--Swiper slider js-->
<script src="{{asset('admin/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

<!-- Vector map-->
<script src="{{asset('admin/assets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/jsvectormap/maps/world-merc.js')}}"></script>

<!-- Countdown js -->
<script src="{{asset('admin/assets/js/pages/coming-soon.init.js')}}"></script>

<!-- Marketplace init -->
<script src="{{asset('admin/assets/js/pages/dashboard-nft.init.js')}}"></script>

<!-- App js -->
<script src="{{asset('admin/assets/js/app.js')}}"></script>

<script>
    $('.btnDelete').click(function (ev) {
        ev.preventDefault();
        var _href = $(this).attr('href');
        $('form#form-delete').attr('action', _href);
        if (confirm('Bạn có chắc chắn muốn xóa không ?')) {
            $('form#form-delete').submit();
        }
    })
    // $(".deleteProduct").click(function(){
    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });
    //     $.ajax(
    //         {
    //             url: "banners/delete/"+id,
    //             type: 'delete', // replaced from put
    //             dataType: "JSON",
    //             data: {
    //                 "id": id // method and token not needed in data
    //             },
    //             success: function (response)
    //             {
    //                 console.log(response); // see the reponse sent
    //             },
    //             error: function(xhr) {
    //                 console.log(xhr.responseText); // this line will save you tons of hours while debugging
    //                 // do something here because of error
    //             }
    //         });
    // });
</script>
<script src={{ url('ckeditor/ckeditor.js') }}></script>
<script>
    CKEDITOR.replace( 'description', {
        filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',

    } );
    CKEDITOR.replace( 'information', {
        filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',

    } );
</script>
@include('ckfinder::setup')
