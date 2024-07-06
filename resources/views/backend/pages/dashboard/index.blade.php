@extends('backend.layouts.app')

@section('title', 'Dashboard')

@section('css')
<link href="{{asset('/')}}omah/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
<link href="{{asset('/')}}omah/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
@endsection

@section('content')

@endsection

@section('js')
<script src="{{asset('/')}}omah/vendor/chartjs/chart.bundle.min.js"></script>
<script src="{{asset('/')}}omah/vendor/owl-carousel/owl.carousel.js"></script>

<!-- Apex Chart -->
<script src="{{asset('/')}}omah/vendor/apexchart/apexchart.js"></script>
<!-- Vectormap -->
<script src="{{asset('/')}}omah/vendor/jqvmap/js/jquery.vmap.min.js"></script>
<script src="{{asset('/')}}omah/vendor/jqvmap/js/jquery.vmap.world.js"></script>
<script src="{{asset('/')}}omah/vendor/jqvmap/js/jquery.vmap.usa.js"></script> 

<!-- Chart piety plugin files -->
<script src="{{asset('/')}}omah/vendor/peity/jquery.peity.min.js"></script>

<script src="{{asset('/')}}omah/js/dashboard/dashboard-1.js"></script>
@endsection

@section('script')
<script>
    function carouselReview(){
        /*  testimonial one function by = owl.carousel.js */
        jQuery('.testimonial-one').owlCarousel({
            loop:true,
            autoplay:true,
            margin:0,
            nav:true,
            dots: false,
            navText: ['<i class="las la-long-arrow-alt-left"></i>', '<i class="las la-long-arrow-alt-right"></i>'],
            responsive:{
                0:{
                    items:1
                },
                
                480:{
                    items:1
                },			
                
                767:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })		
        /*Custom Navigation work*/
        jQuery('#next-slide').on('click', function(){
            $('.testimonial-one').trigger('next.owl.carousel');
        });

        jQuery('#prev-slide').on('click', function(){
            $('.testimonial-one').trigger('prev.owl.carousel');
        });
        /*Custom Navigation work*/
    }
    
    jQuery(window).on('load',function(){
        setTimeout(function(){
            carouselReview();
        }, 1000); 
    });
</script>
@endsection