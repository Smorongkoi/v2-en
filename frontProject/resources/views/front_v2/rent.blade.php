@extends('layouts_v2.rentsale')
@section('theme','renttheme')
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
        $folder ="rent";
    ?>
    <section id="breadcrumbs" class="breadcrumbs d-none d-xl-block">        
        <div class="text-center container">
            <h1 class="d-none d-md-block"><i class="fas fa-building"></i>&nbsp; 
                @if($post->post_bed <= 6)
                    เช่า {{$condo->condo_name_th}} {{$post->post_bed}} ห้องนอน {{$post->post_baths}} ห้องน้ำ 
                    ชั้น {{$post->post_floor}} ขนาด {{$post->post_area_total}} ตร.ม.
                @else 
                    @switch($post->post_bed)
                        @case(7) 
                            เช่า {{$condo->condo_name_th}} ห้องสตูดิโอ ชั้น {{$post->post_floor}} ขนาด {{$post->post_area_total}} ตร.ม.
                        @break
                        @case(8) 
                            เช่า {{$condo->condo_name_th}} ห้องเพ้นท์เฮ้าส์ ชั้น {{$post->post_floor}} ขนาด {{$post->post_area_total}} ตร.ม.
                        @break
                    @endswitch
                @endif
            </h1> 
        </div>
        <div class="container text-center d-none d-md-block">  
            <ol>
                <li><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                <li><a href="{{ route('home') }}/เช่าคอนโด/{{$condo->condo_url_th}}/">เช่า{{ $condo->condo_name_th }}</a></li>
                <li>ประกาศเช่า รหัส : {{ $post->post_no }} 
                </li>
            </ol>
            
        </div>
    </section>
@endsection
@section('breadcrumbs-en')
    <?php
    $folder ="rent";
    ?>
    <section id="breadcrumbs" class="breadcrumbs d-none d-xl-block">        
        <div class="text-center container">
            <h1 class="d-none d-md-block"><i class="fas fa-building"></i>&nbsp; 
                @if($post->post_bed <= 6)
                    Rent {{$condo->condo_name_en}} {{$post->post_bed}} bedrooms {{$post->post_baths}} bahtrooms 
                    {{$post->post_floor}} floors {{$post->post_area_total}} m<sup>2</sup>
                @else 
                    @switch($post->post_bed)
                        @case(7) 
                            Rent {{$condo->condo_name_en}} studio rooms {{$post->post_floor}} floors {{$post->post_area_total}} m<sup>2</sup>
                        @break
                        @case(8) 
                            Rent {{$condo->condo_name_en}} penthouse rooms {{$post->post_floor}} floors {{$post->post_area_total}} m<sup>2</sup>
                        @break
                    @endswitch
                @endif
            </h1> 
        </div>
        <div class="container text-center d-none d-md-block">  
            <ol>
                <li><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                <li><a href="{{ route('home') }}/rent-condo/{{$condo->condo_url_en}}/">{{ $condo->condo_name_en }} for rent</a></li>
                <li>Post Rent ID : {{ $post->post_no }} 
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
        @include('frame_v2.rentsale.board-content-mobile-rent-th')
        @include('frame_v2.rentsale.board-content-pc-rent-th')
</div>
<div class="container" >      
    @include('frame_v2.rentsale.section-gallery-th')        
</div>
    @include('frame_v2.rentsale.post-oth-rent-th') 
    @include('frame_v2.rentsale.section-sponsor')
    @include('frame_v2.rentsale.viewall-th') 
@endsection
@section('content-en')
<div id="features" class="features section-bg" >
        @include('frame_v2.rentsale.board-content-mobile-rent-en')
        @include('frame_v2.rentsale.board-content-pc-rent-en')
</div>
<div class="container" >       
    @include('frame_v2.rentsale.section-gallery-en')    
</div>
    @include('frame_v2.rentsale.post-oth-rent-en') 
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
    @include('frame_v2.slider.rentroom-en')  
@endsection
@section('tabslideroom-th')
    @include('frame_v2.slider.rentroom-th') 
@endsection
{{-- slider tab ที่ 1 ************************************************************************* --}}
{{-- slider tab ที่ 2 ************************************************************************* --}}
@section('tabslidecondo-en')
    @include('frame_v2.slider.rent-en')  
@endsection
@section('tabslidecondo-th')
    @include('frame_v2.slider.rent-th') 
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
@endsection
@section('script-th')
    <script>
        $(window).on('load', function() {
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
                url: "{{ route('getPostOthTH',[$post->id,1]) }}",
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
                url: "{{ route('getPostOthEN',[$post->id,1]) }}",
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

