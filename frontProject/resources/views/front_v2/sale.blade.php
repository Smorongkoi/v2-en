@extends('layouts_v2.rentsale')
@section('theme','saletheme')

    {{-- ไทย --}}
    @section('title-th', 'Scancondo | ' . $post->post_header)
    @section('title-en', $post->post_header_en.' | Scancondo')
    @section('facebook-title-th', 'Scancondo | ' . $post->post_header)
    @section('facebook-title-en', $post->post_header_en.' | Scancondo')
        @if($post->post_bed <= 6)
            @section('meta-description-th',$post->post_bed." ห้องนอน ".$post->post_baths." ห้องน้ำ ขนาดห้อง ".$post->post_area_total." ตร.ม. ชั้น".$post->post_floor." อาคาร ".$post->post_building)

            @section('meta-description-en',$post->post_bed." bedrooms ".$post->post_baths." Bathrooms area ".$post->post_area_total
            ." sq.m. ".$post->post_floor." floors building ".$post->post_building)

        @else 
            @switch($post->post_bed)
                @case(7) 
                    @section('meta-description-th',"ห้องสตูดิโอ ขนาดห้อง ".$post->post_area_total." ตร.ม. ชั้น".$post->post_floor." อาคาร ".$post->post_building)

                    @section('meta-description-en',"Studio area ".$post->post_area_total." sq.m. ".$post->post_floor
                    ." floors building ".$post->post_building)

                @break
                @case(8) 
                    @section('meta-description-th',"ห้องเพ้นท์เฮ้าส์ ขนาดห้อง ".$post->post_area_total." ตร.ม. ชั้น".$post->post_floor." อาคาร ".$post->post_building)

                    @section('meta-description-en',"Penthouse area ".$post->post_area_total." sq.m. ".$post->post_floor
                    ." floors building ".$post->post_building)

                @break
            @endswitch
        @endif
    {{-- eng --}}
@section('facebook-description-th', strip_tags($post->post_description_th))
@section('facebook-description-en', strip_tags($post->post_description_en))

@section('meta-keywords-th','ซื้อ, ขาย, เช่า, คอนโด, buy, rent, sell, forsale, condo, condominium, agent, agency, property, bangkok, ขายดาวน์, กรุงเทพ, นนทบุรี, ปทุมธานี, สมุทรปราการ, bts, mrt, airport link, สุขุมวิท, sukhumvit, down payment, room, available, location, บีทีเอส, เอ็มอาร์ที, ใกล้รถไฟฟ้า, สถานี, แผนที่, map, ห้องว่าง')
@section('meta-keywords-en','2-bedroom condo, accommodation for rent, buy, sell, cheap prices, near  area, vicinity and location')
@section('facebook-image',$post_image_title)

@section('head-tag')
    <link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}">    
@endsection
@section('breadcrumbs-th')
    <?php
        $folder ="sale";
    ?>
    <section id="breadcrumbs" class="breadcrumbs d-none d-xl-block">        
        <div class="text-center container">
            <h1 class="d-none d-md-block"><i class="fas fa-building"></i>&nbsp; 
                @if($post->post_bed <= 6)
                    ขาย {{$condo->condo_name_th}} {{$post->post_bed}} ห้องนอน {{$post->post_baths}} ห้องน้ำ 
                    ชั้น {{$post->post_floor}} ขนาด {{$post->post_area_total}} ตร.ม.
                @else 
                    @switch($post->post_bed)
                        @case(7) 
                            ขาย {{$condo->condo_name_th}} ห้องสตูดิโอ ชั้น {{$post->post_floor}} ขนาด {{$post->post_area_total}} ตร.ม.
                        @break
                        @case(8) 
                            ขาย {{$condo->condo_name_th}} ห้องเพ้นท์เฮ้าส์ ชั้น {{$post->post_floor}} ขนาด {{$post->post_area_total}} ตร.ม.
                        @break
                    @endswitch
                @endif
            </h1> 
        </div>
        <div class="container text-center d-none d-md-block">  
            <ol>
                <li><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                <li><a href="{{ route('home') }}/ซื้อ-ขาย/คอนโด/{{$condo->condo_url_th}}/">ขาย{{ $condo->condo_name_th }}</a></li>
                <li>ประกาศขาย รหัส : {{ $post->post_no }} 
              </li>
            </ol>
            
        </div>
    </section>
@endsection
@section('breadcrumbs-en')
    <?php
        $folder ="sale";
    ?>
    <section id="breadcrumbs" class="breadcrumbs d-none d-xl-block">        
        <div class="text-center container">
            <h1 class="d-none d-md-block"><i class="fas fa-building"></i>&nbsp; 
                @if($post->post_bed <= 6)
                Sell {{$condo->condo_name_en}} {{$post->post_bed}} bedrooms {{$post->post_baths}} bahtrooms 
                {{$post->post_floor}} floors {{$post->post_area_total}} m<sup>2</sup>
                @else 
                    @switch($post->post_bed)
                        @case(7) 
                            Sell {{$condo->condo_name_en}} studio rooms {{$post->post_floor}} floors {{$post->post_area_total}} m<sup>2</sup>
                        @break
                        @case(8) 
                            Sell {{$condo->condo_name_en}} penthouse rooms {{$post->post_floor}} floors {{$post->post_area_total}} m<sup>2</sup>
                        @break
                    @endswitch
                @endif
            </h1> 
        </div>
        <div class="container text-center d-none d-md-block">  
            <ol>
                <li><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                <li><a href="{{ route('home') }}/buy-sell/condo/{{$condo->condo_url_en}}/">{{ $condo->condo_name_en }} for sell</a></li>
                <li>Post sell ID : {{ $post->post_no }} 
                </li>
            </ol>
            
        </div>
    </section>
@endsection

@section('buttonshowcondo-th')

@endsection
@section('buttonshowcondo-en')

@endsection

@section('link_th',$url)

@section('content-th')
<div id="features" class="features section-bg" >
        @include('frame_v2.rentsale.board-content-mobile-sale-th')
        @include('frame_v2.rentsale.board-content-pc-sale-th')
</div>
<div class="container" > 
    @include('frame_v2.section.calculator-th')      
    @include('frame_v2.rentsale.section-gallery-th')        
</div>
    @include('frame_v2.rentsale.post-oth-sale-th') 
    @include('frame_v2.rentsale.section-sponsor')
    @include('frame_v2.rentsale.viewall-th') 
@endsection
@section('content-en')
<div id="features" class="features section-bg" >
        @include('frame_v2.rentsale.board-content-mobile-sale-en')
        @include('frame_v2.rentsale.board-content-pc-sale-en')
</div>
<div class="container" >   
    @include('frame_v2.section.calculator-en')      
    @include('frame_v2.rentsale.section-gallery-en')    
</div>
    @include('frame_v2.rentsale.post-oth-sale-en') 
    @include('frame_v2.rentsale.section-sponsor')
    @include('frame_v2.rentsale.viewall-en') 
@endsection

{{-- tabbutton ****************************************************************************** --}}
@section('tabbutton-en')
    <li class="nav-item col-3">
        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
            <h4>
                <span class="iconcondo" ><i class="fas fa-door-open"></i>&nbsp;  Room</span>
            </h4>
        </a>
    </li>
    <li class="nav-item col-3">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
            <h4>
                <span class="iconcondo" ><i class="fas fa-building"></i>&nbsp;  Condo</span>
            </h4>
        </a>
    </li>
    <li class="nav-item col-3">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
            <h4>
                <span class="iconcondo" ><i class="fas fa-align-left"></i>&nbsp;  Info.</span>
            </h4>
        </a>
    </li>
    <li class="nav-item col-3">
        <a class="nav-link" href="{{$condo_google_map_link}}" target="_blank">
            <h4>
                <span class="iconcondo" ><i class="fas fa-map-marked-alt"></i>&nbsp;  Map</span>
            </h4>
        </a>
    </li>
@endsection
@section('tabbutton-th')
    <li class="nav-item col-3">
        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
            <h4>
                <span class="iconcondo" ><i class="fas fa-door-open"></i>&nbsp;  รูปห้องเช่า</span>
            </h4>
        </a>
    </li>
    <li class="nav-item col-3">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
            <h4>
                <span class="iconcondo" ><i class="fas fa-building"></i>&nbsp;  รูปคอนโด</span>
            </h4>
        </a>
    </li>
    <li class="nav-item col-3">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
            <h4>
                <span class="iconcondo" ><i class="fas fa-align-left"></i>&nbsp;  โครงการ</span>
            </h4>
        </a>
    </li>
    <li class="nav-item col-3">
        <a class="nav-link" href="{{$condo_google_map_link}}" target="_blank">
            <h4>
                <span class="iconcondo" ><i class="fas fa-map-marked-alt"></i>&nbsp;  แผนที่</span>
            </h4>
        </a>
    </li>
@endsection
{{-- tabbutton ****************************************************************************** --}}
{{-- slider tab ที่ 1 ************************************************************************* --}}
@section('tabslideroom-en')
    @include('frame_v2.slider.saleroom-en')  
@endsection
@section('tabslideroom-th')
    @include('frame_v2.slider.saleroom-th')
@endsection
{{-- slider tab ที่ 1 ************************************************************************* --}}
{{-- slider tab ที่ 2 ************************************************************************* --}}
@section('tabslidecondo-en')
    @include('frame_v2.slider.sale-en')  
@endsection
@section('tabslidecondo-th')
    @include('frame_v2.slider.sale-th') 
@endsection
{{-- slider tab ที่ 2 ************************************************************************* --}}

{{-- หัวประกาศมือถือ****************************************************************************** --}}
@section('seoh5-th')
    <div class="pt-toon-title d-block d-sm-none">
        &nbsp;
    </div>
    <h5 class="d-block d-sm-none text-center pt-3  seotextmobile m-2" >
        <i class="fas fa-building"></i>&nbsp;
        {{ $post->post_header }}
        <br>
    </h5>
@endsection
@section('seoh5-en')
<div class="pt-toon-title d-block d-sm-none">
    &nbsp;
</div>
<h5 class="d-block d-sm-none text-center pt-3  seotextmobile m-2" >
    <i class="fas fa-building"></i>&nbsp;
    {{ $post->post_header_en }}
    <br>
</h5>
@endsection
{{-- หัวประกาศมือถือ****************************************************************************** --}}

@section('script')
    <script src="{{ asset('plugins/select2/select2.full.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/area.js') }}" charset="utf-8"></script>
    <script src="{{ asset('plugins/fotorama-4.6.4/fotorama.js') }}" charset="utf-8"></script>
    <script>
        var imageBoxLoad = 0;
        var imageBoxH = $('#imageBox').offset().top;   
    </script>
    <script>
        function numberWithCommas(number) {
            var parts = number.toString().split(".");
            parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            return parts.join(".");
        }

        function Calculate() {

            var check = 0;

            var amount = parseFloat(RemoveComma($("#input_amount").val()));
            var year = parseFloat(RemoveComma($("#input_time").val()));
            var intyear = parseFloat(RemoveComma($("#input_percent").val()));

            if (isNaN(amount)) {
            $("#alert_amount").show();
            check = 1;
            } else {
            $("#alert_amount").hide();
            }
            if (isNaN(year)) {
            $("#alert_time").show();
            check = 1;
            } else {
            $("#alert_time").hide();
            }
            if (isNaN(intyear)) {
            $("#alert_percent").show();
            check = 1;
            } else {
            $("#alert_percent").hide();
            }

            if (check == 1) {
            return false;
            }

            var interest_year = (intyear/100);
            var interest_year_show = interest_year*100;
            var interest_month = (interest_year/12);
            var interest_month_plus =1+interest_month;
            var inttime = year*12;
            var result1 = (1/Math.pow(interest_month_plus,inttime));
            var result2 = (1-result1)/interest_month;
            var PMT = amount/result2;
            var LOAN = PMT+(PMT*1.5);
            var PMT_string = Math.round(PMT*100)/100 ;
            var LOAN_string = Math.round(LOAN*100)/100 ;
            var DDD = PMT_string;
            var loner = LOAN_string;

            $('#show_PMT_string').html(DDD);
            $('#show_total').html(amount);
            $('#show_loner').html(loner);

            $('#calculator-1 .Count').each(function () {
            var $this = $(this);
            jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                duration: 1000,
                easing: 'swing',
                step: function () {
                $this.text(numberWithCommas(Math.ceil(this.Counter)));
                }
            });


            });
            setTimeout(function(){
            $('#show_PMT_string').html(numberWithCommas(DDD));
            $('#show_total').html(numberWithCommas(amount));
            $('#show_loner').html(numberWithCommas(loner));
            }, 1050);
        }

        function Calculate2() {

            var check = 0;

            var amount = parseFloat(RemoveComma($("#input_amount2").val()));
            var year = parseFloat(RemoveComma($("#input_time2").val()));
            var intyear = parseFloat(RemoveComma($("#input_percent2").val()));
            var inputdept = parseFloat(RemoveComma($("#input_dept").val()));
            var inputyy = (RemoveComma($("#input_yy").val()));

            if (isNaN(amount)) {
            $("#alert_amount2").show();
            check = 1;
            } else {
            $("#alert_amount2").hide();
            }
            if (isNaN(year)) {
            $("#alert_time2").show();
            check = 1;
            } else {
            $("#alert_time2").hide();
            }
            if (isNaN(intyear)) {
            $("#alert_percent2").show();
            check = 1;
            } else {
            $("#alert_percent2").hide();
            }

            if (check == 1) {
            return false;
            }

            var formula = (amount*0.6);
            var nodept = (formula-inputdept);
            var divide = (nodept/inputyy)*1000000;

            var interest_year = (intyear/100);
            var interest_year_show = interest_year*100;
            var interest_month = (interest_year/12);
            var interest_month_plus =1+interest_month;
            var inttime = year*12;
            var result1 = (1/Math.pow(interest_month_plus,inttime));
            var result2 = (1-result1)/interest_month;
            var result3 = (1-result1);

            var PMT = amount*0.45;
            var PMT2= PMT;
            var p0=1+interest_month;
            var PMT3=(1/Math.pow(1+interest_month_plus,inttime));
            var PMT3b=(1+Math.pow(1+interest_month_plus,inttime));
            var PMT4=PMT2/1-PMT3;

            var LOAN =Math.pow(1+interest_month,inttime) ;
            var LOAN2 =1-(1/LOAN);

            var PMT_string = Math.round(PMT*100)/100 ;

            var e13=1-(1/LOAN);
            var e15=interest_month/e13;
            var xcx=0.005208787422143495+e15;
            var e16=0.000383+e15;
            var maxloan=PMT2/e16;
            var maxloan2=maxloan-130.54200000013225;
            var maxloan_string2 =Math.floor(maxloan2);
            var LOAN_string = maxloan_string2 ;

            var intdex=interest_month+0.000383;
            var DDD = PMT_string;
            var loner = LOAN_string;

            $('#show_PMT_string2').html(DDD);
            $('#show_total2').html(amount);
            $('#show_loner2').html(loner);
            $('#formula').html(formula);
            $('#show_dept').html(inputdept);
            $('#show_yy').html(inputyy);
            $('#show_nodept').html(nodept);
            $('#show_divide').html(divide);

            $('#calculator-2 .Count').each(function () {
            var $this = $(this);
            jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                duration: 1000,
                easing: 'swing',
                step: function () {
                $this.text(numberWithCommas(Math.ceil(this.Counter)));
                }
            });


            });
            setTimeout(function(){
            $('#show_PMT_string2').html(numberWithCommas(DDD));
            $('#show_total2').html(numberWithCommas(amount));
            $('#show_loner2').html(numberWithCommas(loner));
            }, 1050);
        }

        function Calculate3() {

            var check = 0;

            var amount = parseFloat(RemoveComma($("#input_amount3").val()));
            var year = parseFloat(RemoveComma($("#input_time3").val()));
            var intyear = parseFloat(RemoveComma($("#input_percent3").val()));

            if (isNaN(amount)) {
                $("#alert_amount3").show();
                check = 1;
            } else {
                $("#alert_amount3").hide();
            }
            if (isNaN(year)) {
                $("#alert_time3").show();
                check = 1;
            } else {
                $("#alert_time3").hide();
            }

            if (isNaN(intyear)) {
                $("#alert_percent3").show();
                check = 1;
            } else {
                $("#alert_percent3").hide();
            }

            if (check == 1) {
                return false;
            }

            var maxloan_string2 = (year * 1200) / (amount);


            var interest_year = (intyear/100);
            var interest_year_show = interest_year*100;
            var interest_month = (interest_year/12);
            var interest_month_plus =1+interest_month;
            var inttime = year*12;
            var result1 = (1/Math.pow(interest_month_plus,inttime));
            var result2 = (1-result1)/interest_month;
            var result3 = (1-result1);

            var PMT = (amount * 1200) / year;
            var PMT2= PMT;
            var p0=1+interest_month;
            var PMT3=(1/Math.pow(1+interest_month_plus,inttime));
            var PMT3b=(1+Math.pow(1+interest_month_plus,inttime));
            var PMT4=PMT2/1-PMT3;

            var LOAN =Math.pow(1+interest_month,inttime) ;
            var LOAN2 =1-(1/LOAN);

            var PMT_string = Math.round(PMT*100)/100 ;

            var e13=1-(1/LOAN);
            var e15=interest_month/e13;
            var xcx=0.005208787422143495+e15;
            var e16=0.000383+e15;


            var LOAN_string = maxloan_string2 ;

            var intdex=interest_month+0.000383;
            var lonlon = maxloan_string2.toFixed(3) ;

            var maxloan_string3 = amount/(year * 12) ;
            var maxloan_string4 = Math.round(maxloan_string3*100)/100 ;
            var lonlon3 = maxloan_string4.toFixed(0) ;
            var DDD = lonlon3;
            var loner = lonlon;

            $('#show_PMT_string3').html(DDD);
            $('#show_total3').html(amount);
            $('#show_loner3').html(loner);

            $('.Count').each(function () {
                var $this = $(this);
                jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                duration: 1000,
                easing: 'swing',
                step: function () {
                    $this.text(numberWithCommas(Math.ceil(this.Counter)));
                }
                });


            });
            setTimeout(function(){
                $('#show_PMT_string3').html(numberWithCommas(DDD));
                $('#show_total3').html(numberWithCommas(amount));
                $('#show_loner3').html(numberWithCommas(loner));
            }, 1050);
        }
    </script>
@endsection
@section('script-th')
    <script>
        $(window).on('load', function() {
            Calculate();
            Calculate2();
            Calculate3();
            $(window).scroll(function (event) {
                var wH = $(window).height();
                var wS = $(this).scrollTop();
                var scrollTo = wS + wH;
                if (imageBoxLoad == 0 && scrollTo >= imageBoxH) {
                    imageBoxLoad = 1;
                    getPostOthTH();
                }
            });
        });
        function getPostOthTH() {
            $.ajax({
                type: "post",
                url: "{{ route('getPostOthTH',[$post->id,2]) }}",
                dataType: "html",
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function (response) {
                    $("#showPostOth").html(response);
                    $('.post-oth-slide.owl-carousel').owlCarousel({
                        autoplay:true,
                        autoplayTimeout:3000,
                        autoplayHoverPause:true,
                        margin: 12,
                        loop: true,
                        center: true,
                        responsive: {
                            0: { items: 1 },
                            400: { items: 2 },
                            600: { items: 4 },
                            900: { items: 5 },
                            1200: { items: 6 }
                        }
                    });
        
                }
            });
        }

    </script>
@endsection
@section('script-en')
    <script>
        $(window).on('load', function() {
            Calculate();
            Calculate2();
            Calculate3();
            $(window).scroll(function (event) {
                var wH = $(window).height();
                var wS = $(this).scrollTop();
                var scrollTo = wS + wH;
                if (imageBoxLoad == 0 && scrollTo >= imageBoxH) {
                    imageBoxLoad = 1;
                    getPostOthEN();
                }
            });
        });
        function getPostOthEN() {
            $.ajax({
                type: "post",
                url: "{{ route('getPostOthEN',[$post->id,2]) }}",
                dataType: "html",
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function (response) {
                    $("#showPostOth").html(response);
                    $('.post-oth-slide.owl-carousel').owlCarousel({
                        autoplay:true,
                        autoplayTimeout:3000,
                        autoplayHoverPause:true,
                        margin: 12,
                        loop: true,
                        center: true,
                        responsive: {
                            0: { items: 1 },
                            400: { items: 2 },
                            600: { items: 4 },
                            900: { items: 5 },
                            1200: { items: 6 }
                        }
                    });
        
                }
            });
        }

    </script>
@endsection

