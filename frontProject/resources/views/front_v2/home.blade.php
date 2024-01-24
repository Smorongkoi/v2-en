@extends('layouts_v2.home')
{{-- ไทย --}}
@section('title-th', 'Scancondo.com : ซื้อ ขาย เช่า คอนโด | ตัวแทนอสังหาริมทรัพย์ | รับฝากขายห้อง/ Condo ในกรุงเทพและปริมณฑล')
@section('meta-description-th', 'Scancondo ตัวแทน (Agent) อสังหาริมทรัพย์ครบวงจร หาคอนโดห้องสวย ถูกใจกับฐานข้อมูลกว่า 2,000 โครงการ บริการหาคอนโด ฝากห้อง ฝากขาย และทาการตลาดผ่านเครือข่ายของเรา')
@section('meta-keywords-th','ซื้อ, ขาย, เช่า, คอนโด, buy, rent, sell, forsale, condo, condominium, agent, agency, property, bangkok, ขายดาวน์, กรุงเทพ, นนทบุรี, ปทุมธานี, สมุทรปราการ, bts, mrt, airport link, สุขุมวิท, sukhumvit, down payment, room, available, location, บีทีเอส, เอ็มอาร์ที, ใกล้รถไฟฟ้า, สถานี, แผนที่, map, ห้องว่าง')
{{-- eng --}}
@section('title-en', 'Scancondo.com : Buy, sell, rent condominium in Bangkok 
| Real estate agency | Condo prime area or CBD near Sukhumvit BTS and MRT')
@section('meta-description-en', 'Scancondo.com, one stop service for real-estate agent. We are reliable property agents for your home buying, selling, and rentals. Offer helping expats and international clients find the best properties')
@section('meta-keywords-en','condo, condominium, room, buy, sell, rent, service, agent, agency, property, real estate, Bangkok, Thailand, bts, mrt, flat, apartment, unit, best price, fully furnished, bedroom, available')

@section('content-th')
@include('frame_v2.section.hero-th')
    <main id="main">
        @include('frame_v2.section.boxpark-th')
        @include('frame_v2.section.sponsor-th')
        @include('frame_v2.section.condonearme-th')
        @include('frame_v2.section.whychooseus-th')
        @include('frame_v2.section.cta-th')
        @include('frame_v2.section.articles-news-th')
        @include('frame_v2.section.tools-th') 
        @include('frame_v2.section.tools-mobile-th') 
        @include('frame_v2.section.seo-area-th')  
        @include('frame_v2.section.seo-condo-th')       

    </main>
    <div class="d-none d-sm-block">
        <div class="home-content" id="box-view"  style="background: none"></div>
        <div class="home-content" id="box-beautiful" style="background: none"></div>
    </div>
@endsection
@section('content-en')
@include('frame_v2.section.hero-en')
    <main id="main">
        @include('frame_v2.section.boxpark-en')
        @include('frame_v2.section.sponsor-en')
        @include('frame_v2.section.condonearme-en')
        @include('frame_v2.section.whychooseus-en')
        @include('frame_v2.section.cta-en')
        @include('frame_v2.section.articles-news-en') 
        @include('frame_v2.section.tools-en') 
        @include('frame_v2.section.tools-mobile-en')  
        @include('frame_v2.section.seo-area-en') 
        @include('frame_v2.section.seo-condo-en')  
    </main>
    <div class="d-none d-sm-block">
        <div class="home-content" id="box-view"  style="background: none"></div>
        <div class="home-content" id="box-beautiful" style="background: none"></div>
    </div>
@endsection

@section('script-th')
    <script>
        function getNewsth() {
            $.ajax({
                type: "post",
                url: "{{ route('getNewsth') }}",
                dataType: "html",
                success: function (response) {
                    $("#showNews").html(response);
                }
            });
        }
    </script>
    <script>
        var shockLoad = 0;
        var shockH = $('#box-shock').offset().top;
        var viewLoad = 0;
        var viewH = $('#box-view').offset().top;
        var beautifulLoad = 0;
        var beautifulH = $('#box-beautiful').offset().top;
        var newsLoad = 0;
        var newsH = $('#box-news').offset().top;

        $(window).on('load', function() {
            getTabTrain();
        });
        $(document).ready(function() {
            var scroll = $(window).scrollTop();
            if (scroll == 0) {
                $("nav").addClass('top');
            } else {
                $("nav").removeClass('top');
            }
            $(window).scroll(function (event) {
                var scroll = $(window).scrollTop();
                if (scroll == 0) {
                    $("nav").addClass('top');
                } else {
                    $("nav").removeClass('top');
                }

                var wH = $(window).height();
                var wS = $(this).scrollTop();

                var scrollTo = wS + wH;

                if (shockLoad == 0 && scrollTo >= shockH) {
                    shockLoad = 1;
                    getShockPost();
                }

                if (viewLoad == 0 && scrollTo >= viewH) {
                    viewLoad = 1;
                    getViewPost();
                }

                if (beautifulLoad == 0 && scrollTo >= beautifulH) {
                    beautifulLoad = 1;
                    getBeautifulPost();
                }

                if (newsLoad == 0 && scrollTo >= newsH) {
                    newsLoad = 1;
                    getNewsth();
                }

            });
        });    
    </script>
@endsection
@section('script-en')
{{-- <script>
    function getNewsth() {
        $.ajax({
            type: "post",
            url: "{{ route('getNewsth') }}",
            dataType: "html",
            success: function (response) {
                $("#showNews").html(response);
            }
        });
    }
</script>
<script>
    var shockLoad = 0;
    var shockH = $('#box-shock').offset().top;
    var viewLoad = 0;
    var viewH = $('#box-view').offset().top;
    var beautifulLoad = 0;
    var beautifulH = $('#box-beautiful').offset().top;
    var newsLoad = 0;
    var newsH = $('#box-news').offset().top;

    $(window).on('load', function() {
        getTabTrain();
    });
    $(document).ready(function() {
        var scroll = $(window).scrollTop();
        if (scroll == 0) {
            $("nav").addClass('top');
        } else {
            $("nav").removeClass('top');
        }
        $(window).scroll(function (event) {
            var scroll = $(window).scrollTop();
            if (scroll == 0) {
                $("nav").addClass('top');
            } else {
                $("nav").removeClass('top');
            }

            var wH = $(window).height();
            var wS = $(this).scrollTop();

            var scrollTo = wS + wH;

            if (shockLoad == 0 && scrollTo >= shockH) {
                shockLoad = 1;
                getShockPost();
            }

            if (viewLoad == 0 && scrollTo >= viewH) {
                viewLoad = 1;
                getViewPost();
            }

            if (beautifulLoad == 0 && scrollTo >= beautifulH) {
                beautifulLoad = 1;
                getBeautifulPost();
            }

            if (newsLoad == 0 && scrollTo >= newsH) {
                newsLoad = 1;
                getNewsth();
            }

        });
    });    
</script> --}}

    <script>
        function getNewsen() {
            $.ajax({
                type: "post",
                url: "{{ route('getNewsen') }}",
                dataType: "html",
                success: function (response) {
                    $("#showNews").html(response);
                }
            });
        }
    </script>
    <script>
        var shockLoad = 0;
        var shockH = $('#box-shock').offset().top;
        var viewLoad = 0;
        var viewH = $('#box-view').offset().top;
        var beautifulLoad = 0;
        var beautifulH = $('#box-beautiful').offset().top;
        var newsLoad = 0;
        var newsH = $('#box-news').offset().top;

        $(window).on('load', function() {
            getTabTrain();
        });
        $(document).ready(function() {
            var scroll = $(window).scrollTop();
            if (scroll == 0) {
                $("nav").addClass('top');
            } else {
                $("nav").removeClass('top');
            }
            $(window).scroll(function (event) {
                var scroll = $(window).scrollTop();
                if (scroll == 0) {
                    $("nav").addClass('top');
                } else {
                    $("nav").removeClass('top');
                }

                var wH = $(window).height();
                var wS = $(this).scrollTop();

                var scrollTo = wS + wH;

                if (shockLoad == 0 && scrollTo >= shockH) {
                    shockLoad = 1;
                    getShockPost();
                }

                if (viewLoad == 0 && scrollTo >= viewH) {
                    viewLoad = 1;
                    getViewPost();
                }

                if (beautifulLoad == 0 && scrollTo >= beautifulH) {
                    beautifulLoad = 1;
                    getBeautifulPost();
                }

                if (newsLoad == 0 && scrollTo >= newsH) {
                    newsLoad = 1;
                    getNewsen();
                }

            });
        });    
    </script>
@endsection

@section('script')
    <script>
    function getTabTrain() {
        $.ajax({
            type: "post",
            url: "{{ route('getTabTrain') }}",
            dataType: "html",
            success: function (response) {
                $("#showTabData").html(response);
                $("#showTabData").addClass('train').addClass('active');
                $("#showTabData").removeClass('area').removeClass('univercity').removeClass('condo-hot');
                $(".menu-train button").first().trigger('click');
            }
        });
    }
    function getTrainStation(button,train) {
        $(".menu-train button").removeClass('active');
        $(button).addClass('active');
        $.ajax({
            type: "post",
            url: "{{ route('getTrainStation') }}",
            data: {train:train},
            dataType: "html",
            success: function (response) {
                $("#showStation").html(response);
            }
        });
    }
    function getTabArea() {
        $.ajax({
            type: "post",
            url: "{{ route('getTabArea') }}",
            dataType: "html",
            success: function (response) {
                $("#showTabData").html(response);
                $("#showTabData").addClass('area').addClass('active');
                $("#showTabData").removeClass('train').removeClass('univercity').removeClass('condo-hot');
                $(".menu-area button").first().trigger('click');
            }
        });
    }
    function getArea(button,area) {
        $(".menu-area button").removeClass('active');
        $(button).addClass('active');
        $.ajax({
            type: "post",
            url: "{{ route('getArea') }}",
            data: {area:area},
            dataType: "html",
            success: function (response) {
                $("#showArea").html(response);
            }
        });
    }
    function getTabUniversity() {
        $.ajax({
            type: "post",
            url: "{{ route('getTabUniversity') }}",
            dataType: "html",
            success: function (response) {
                $("#showTabData").html(response);
                $("#showTabData").addClass('univercity').addClass('active');
                $("#showTabData").removeClass('area').removeClass('train').removeClass('condo-hot');
            }
        });
    }
    function getTabLandmark() {
        $.ajax({
            type: "post",
            url: "{{ route('getTabLandmark') }}",
            dataType: "html",
            success: function (response) {
                $("#showTabData").html(response);
                $("#showTabData").addClass('area').addClass('active');
                $("#showTabData").removeClass('univercity').removeClass('train').removeClass('condo-hot');
                $(".menu-area button").first().trigger('click');
            }
        });
    }
    function getLandmark(button,landmark) {
        console.log(landmark);
        $(".menu-area button").removeClass('active');
        $(button).addClass('active');
        $.ajax({
            type: "post",
            url: "{{ route('getLandmark') }}",
            data: {landmark:landmark},
            dataType: "html",
            success: function (response) {
                $("#showLandmark").html(response);
            }
        });
    }
    function getShockPost() {
        $.ajax({
            type: "post",
            url: "{{ route('getShockPost') }}",
            dataType: "html",
            success: function (response) {
                $("#showShock").html(response);

                $('#showShock .condo.owl-carousel').owlCarousel({
                    margin: 6,
                    loop: true,
                    responsive: {
                        0: {
                        items: 1
                        },
                        600: {
                        items: 2
                        },
                        900: {
                        items: 3
                        },
                        1200: {
                        items: 4
                        }
                    }
                })

            }
        });
    }
    function getBeautifulPost() {
        $.ajax({
            type: "post",
            url: "{{ route('getBeautifulPost') }}",
            dataType: "html",
            success: function (response) {
                $("#showBeautiful").html(response);

                $('#showBeautiful .condo.owl-carousel').owlCarousel({
                    margin: 6,
                    loop: true,
                    responsive: {
                        0: {
                        items: 1
                        },
                        600: {
                        items: 2
                        },
                        900: {
                        items: 3
                        },
                        1200: {
                        items: 4
                        }
                    }
                })

            }
        });
    }
    function getViewPost() {
        $.ajax({
            type: "post",
            url: "{{ route('getViewPost') }}",
            dataType: "html",
            success: function (response) {
                $("#showView").html(response);

                $('#showView .condo.owl-carousel').owlCarousel({
                    margin: 6,
                    loop: true,
                    responsive: {
                        0: {
                        items: 1
                        },
                        600: {
                        items: 2
                        },
                        900: {
                        items: 3
                        },
                        1200: {
                        items: 4
                        }
                    }
                })

            }
        });
    }
    
</script>

@endsection



