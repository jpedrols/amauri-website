<!--  Scripts  -->
<script src="{{ asset('site/assets/js/jquery.min.js ') }}"></script>
<script src="{{ asset('site/assets/js/jquery.unveil.js') }}"></script>
<script src="{{ asset('site/assets/js/aos.js') }}"></script>
<script src="{{ asset('site/assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('site/assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('site/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('site/assets/js/isotope.min.js') }}"></script>
<script src="{{ asset('site/assets/js/imagesloaded.min.js') }}"></script>
<script src="{{ asset('site/assets/js/carousel.js') }}"></script>
<script src="{{ asset('site/assets/js/menu.js') }}"></script>
<script src="{{ asset('site/assets/js/elements.js') }}"></script>
<script src="{{ asset('site/assets/js/masonry.js') }}"></script>
<script src="{{ asset('site/assets/js/form.js') }}"></script>
<!--  END Scripts  -->

<meta name="csrf-token" content="{{ csrf_token() }}">
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ url('/contabiliza_views/{uuid}') }}",
            method: 'get',
            data: {
                uuid: window.localStorage.getItem('uuid')
            },
            success: function(result){
                window.localStorage.setItem('uuid', result);
            },
            error: function(){
                console.log('Ajax não funcionou');
            }
        });
    });
</script>