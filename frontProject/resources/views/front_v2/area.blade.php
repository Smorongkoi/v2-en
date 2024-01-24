@extends('layouts_v2.area')
{{-- ไทย --}}
@if($type == 1) 
    @section('title-th', 'รวมประกาศเช่า-ซื้อขายคอนโด ทำเล '.$area_name.' | Buy/Sell/Rent Condominium in Bangkok')
    @section('meta-description-th', 'Scancondo ตัวแทน (Agent) ให้บริการหาคอนโด ทำเล'.$area_name.' ค้นหาห้องที่สวย scan ห้องที่ใช่สาหรับคุณ')
    {{-- eng --}}
    @section('title-en', 'Rent/Buy-sell condo near '.$area_name_en.' | Buy/Sell/Rent Condominium in Bangkok')
    @section('meta-description-en', 'Scancondo.com, an agent providing condo / room near '.$area_name_en.' ค้นหาห้องที่สวย scan ห้องที่ใช่สาหรับคุณ')
@endif
@if($type == 2) 
    @section('title-th', 'ซื้อ-ขายคอนโดบริเวณ '.$area_name.' | Buy-Sell Condominium in '.$area_name_en)
    @section('meta-description-th', 'หาห้องสวยถูกใจ คอนโดใกล้'.$area_name
    .' ให้บริการซื้อขาย Condo บริการจัดหาห้องตามความต้องการ ตามงบประมาณ ครบวงจรตั้งแต่ต้นจนจบการซื้อขายกับเรา')
    {{-- eng --}}
    @section('title-en', 'Buy/Sell condo near '.$area_name_en.' | Buy-Sell Condominium in '.$area_name_en)
    @section('meta-description-en', 'Find a beautiful room that you like, near '.$area_name_en
    .' Provide buying and selling services for '.$area_name_en.
    ' complete service from the beginning until the end of the buying/selling process with us.')
@endif
@section('meta-keywords-th','ซื้อ, ขาย, เช่า, คอนโด, buy, rent, sell, forsale, condo, condominium, agent, agency, property, bangkok, ขายดาวน์, กรุงเทพ, นนทบุรี, ปทุมธานี, สมุทรปราการ, bts, mrt, airport link, สุขุมวิท, sukhumvit, down payment, room, available, location, บีทีเอส, เอ็มอาร์ที, ใกล้รถไฟฟ้า, สถานี, แผนที่, map, ห้องว่าง')
@section('meta-keywords-en','2-bedroom condo, accommodation for rent, buy, sell, cheap prices, near '
.$area_name_en.' area, vicinity and location')


@section('head-tag')
    <link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}">
@endsection
@section('breadcrumbs-th')
    <?php
    $folder ="area";
    ?>
    <section id="breadcrumbs" class="breadcrumbs d-none d-xl-block">        
        <div class="text-center container">
            <h1 class="d-none d-md-block"><i class="fas fa-building"></i>&nbsp; 
                @if($type == 1) เช่า-ซื้อ-ขาย @endif
                @if($type == 2) ซื้อ-ขาย@endif 
                คอนโดทำเล {{ $area_name }}</h1> 
        </div>
        <div class="container text-center d-none d-md-block">  
            <ol>
            <li><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
            <li>{{$zone_name}}</li>
            <li>คอนโด ทำเล {{ $area_name }}</li>
            </ol>
            
        </div>
    </section>
@endsection
@section('breadcrumbs-en')
    <?php
    $folder ="area";
    ?>
    <section id="breadcrumbs" class="breadcrumbs d-none d-xl-block">        
        <div class="text-center container">
            <h1 class="d-none d-md-block"><i class="fas fa-building"></i>&nbsp; 
                @if($type == 1) Rent-Buy-Sell @endif
                @if($type == 2) Buy-Sell @endif 
                condo near {{ $area_name_en }}</h1> 
        </div>
        <div class="container text-center d-none d-md-block">  
            <ol>
            <li><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
            <li>{{$zone_name_en}}</li>
            <li>condo near {{ $area_name_en }}</li>
            </ol>
            
        </div>
    </section>
@endsection
@section('buttonshowcondo-th')
    <button type="button" class="show-condo" name="button" 
        onclick="getCondoAreaStep(2);">แสดงคอนโดทั้งหมด <br class="d-block d-sm-none">( จำนวน <span id="showCountCondo"></span> คอนโด )
    </button>    
@endsection
@section('buttonshowcondo-en')
    <button type="button" class="show-condo" name="button" 
        onclick="getCondoAreaStep(2);">View All <br class="d-block d-sm-none">( <span id="showCountCondo"></span> Projects )
    </button>    
@endsection

@section('link_th',$url)

@section('content-th')
@endsection
@section('content-en')
@endsection

@section('tabbutton-en')
    <li class="nav-item col-2"></li>
    <li class="nav-item col-4">
        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
            <h4>
                <span class="iconcondo" ><i class="fas fa-building"></i>&nbsp;  Condo nearby</span>
            </h4>
        </a>
    </li>
    <li class="nav-item col-4">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
            <h4>
                <span class="iconcondo" ><i class="fas fa-align-left"></i>&nbsp;  Information</span>
            </h4>
        </a>
    </li>
    <li class="nav-item col-2"></li>
@endsection
@section('tabbutton-th')
    <li class="nav-item col-2"></li>
    <li class="nav-item col-4">
        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
            <h4>
                <span class="iconcondo" ><i class="fas fa-building"></i>&nbsp;  คอนโดใกล้ทำเลนี้</span>
            </h4>
        </a>
    </li>
    <li class="nav-item col-4">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
            <h4>
                <span class="iconcondo" ><i class="fas fa-align-left"></i>&nbsp;  ข้อมูลทำเล</span>
            </h4>
        </a>
    </li>
    <li class="nav-item col-2"></li>
@endsection
@section('condoinfotable-th')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">โซน</th>
            <th scope="col">ชื่อภาษาไทย</th>
            <th scope="col">ชื่อภาษาอังกฤษ</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$zone_name}}</td>
            <td>{{ $area_name }}</td>
            <td>{{ $area_name_en }}</td>
        </tr>
        
        </tbody>
    </table> 
    <table class="table">
        <tbody>
            <tr><td colspan="4">
                <div class="text-center container">
                    <h4 class="f-theme d-none d-md-block">รวมคอนโดประกาศขาย - ประกาศให้เช่าในทำเลนี้</h4>
                    <h4 class="d-none d-md-block">คอนโดทำเล {{ $area_name }}</h4><br>
                    <i class="fas fa-check f-theme"></i> ครบทุกระดับราคา  <br class="d-block d-sm-none">
                    <i class="fas fa-check f-theme"></i> ครบทุกรูปแบบห้องนอน <br class="d-block d-sm-none"> 
                    <i class="fas fa-check f-theme"></i> ครบทุกคอนโดในทำเลนี้<br class="d-block d-sm-none"> <br>
                    พร้อมข้อมูลและรายละเอียดครบถ้วน ตัดสินใจได้เลย
                </div><br><br>
            </td></tr>
        </tbody>
    </table> 
@endsection
@section('condoinfotable-en')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Zone</th>
            <th scope="col">Area Name</th>
            <th scope="col">Area Name in Thai</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$zone_name_en}}</td>
            <td>{{ $area_name_en }}</td>
            <td>{{ $area_name }}</td>
        </tr>
        
        </tbody>
    </table> 
    <table class="table">
        <tbody>
            <tr><td colspan="4">
                <div class="text-center container">
                    <h4 class="f-theme d-none d-md-block">Rent-purchase condos near</h4>
                    <h4 class="d-none d-md-block">Condo near {{ $area_name_en }}</h4><br>
                    <i class="fas fa-check f-theme"></i> Complete with all price levels  <br class="d-block d-sm-none">
                    <i class="fas fa-check f-theme"></i> Complete with all bedroom types <br class="d-block d-sm-none"> 
                    <i class="fas fa-check f-theme"></i> Complete with all condos near<br class="d-block d-sm-none"> <br>
                    Complete with full information and details, ready for decision making
                </div><br><br>
            </td></tr>
        </tbody>
    </table> 
@endsection
@section('boxfilter-th')
    <select class="" name="area_id" id="area_id">
        @foreach ($optionList as $data)
            <option value="{{ $data['value'] }}" @if ($data['value'] == $area_id) selected @endif>{{ $data['name'] }}</option>
        @endforeach
    </select>
@endsection
@section('boxfilter-en')
    <select class="" name="area_id" id="area_id">
        @foreach ($optionList as $data)
            <option value="{{ $data['value'] }}" @if ($data['value'] == $area_id) selected @endif>{{ $data['name'] }}</option>
        @endforeach
    </select>
@endsection
@section('boxfilterbutton-th')
    <button type="button" name="button" class="btn btn-primary searchnow" onclick="countPostArea();">
        <span class="blink"><i class="fas fa-search"></i></span> ค้นหา คลิก!
    </button>
@endsection
@section('boxfilterbutton-en')
    <button type="button" name="button" class="btn btn-primary searchnow" onclick="countPostArea();">
        <span class="blink"><i class="fas fa-search"></i></span> Search now
    </button>
@endsection
@section('seoh5-th')
    <div class="pt-toon-title d-block d-sm-none">
        &nbsp;
    </div>
    <h5 class="d-block d-sm-none text-center pt-3  seotextmobile" >
        <i class="fas fa-building"></i>&nbsp;
        @if($type == 1) เช่า/ซื้อ/ขาย @endif
        @if($type == 2) ซื้อ-ขาย @endif 
        คอนโดทำเล<br>
        <span class="f-theme">{{$area_name }}</span>
    </h5>
@endsection
@section('seoh5-en')
    <div class="pt-toon-title d-block d-sm-none">
        &nbsp;
    </div>
    <h5 class="d-block d-sm-none text-center pt-3  seotextmobile" >
        <i class="fas fa-building"></i>&nbsp;
        @if($type == 1) Rent/Buy/Sell @endif
        @if($type == 2) Buy-Sell @endif 
        Condo area<br>
        <span class="f-theme">{{$area_name }}</span>
    </h5>
@endsection
@section('script')
    <script src="{{ asset('plugins/select2/select2.full.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/area.js') }}" charset="utf-8"></script>
    <script>
        var searchBoxLoad = 1;
        var searchBoxH = $('#searchBox').offset().top;
        $(window).on('load', function() {
            countCondoArea();
            countPostArea();
            getCondoAreaStep(1);
            $(window).scroll(function (event) {
                var wH = $(window).height();
                var wS = $(this).scrollTop();
                var scrollTo = wS + wH;
                if (searchBoxLoad == 0 && scrollTo >= searchBoxH) {
                    searchBoxLoad = 1;
                    countPostArea();
                }
            });
        });
        $("#buttonShowCondo").click(function (e) {
            $(this).remove();
        });
        function countCondoArea() {
            $.ajax({
                type: "post",
                url: "{{ route('countCondoArea',$area_id) }}",
                dataType: "json",
                success: function (response) {
                    if (response.countCondo > 4) {
                        $("#showCountCondo").html(response.countCondo);
                        $("#buttonShowCondo").show();
                    }
                }
            });
        }
        function getCondoAreaStep(step) {
            $.ajax({
                type: "post",
                url: "{{ route('getCondoAreaStep',$area_id) }}",
                data: {step:step},
                dataType: "html",
                success: function (response) {
                    $("#showCondo").append(response);
                }
            });
        }
        function countPostArea() {
            let area_id = $("#area_id").val();
            let price_low = $("#price_low").val();
            let price_high = $("#price_high").val();
            let post_style = $("#post_style").val();
            let post_status = $("#post_status").val();
            $("#showPaginaiton,#showPost").empty();
            $("#showPostNull").hide();
            $.ajax({
                type: "post",
                url: "{{ route('countPostArea',$type) }}",
                data: {
                    area_id : area_id,
                    price_low : price_low,
                    price_high : price_high,
                    post_style : post_style,
                    post_status : post_status,
                },
                dataType: "json",
                success: function (response) {
                    console.log(response);
                    if (response.pagination == 0) {
                        $("#showPostNull").show();
                    }
                    $("#showPostRent").html(response.postRent);
                    $("#showPostSale").html(response.postSale);
                    $("#showPostRent-mobile").html(response.postRent);
                    $("#showPostSale-mobile").html(response.postSale);
                    for (let index = 1; index <= response.pagination; index++) {
                        let content = '<button type="button" class="page-link" data-page="' + index + '">' + index + '</button>';
                        $("#showPaginaiton").append(content);
                    }
                    $("#showPaginaiton button").click(function (e) {
                        $("#showPaginaiton button").removeClass('active');
                        $(this).addClass('active');
                        let page = $(this).data('page');
                        getPostArea(page);
                    });
                    $("#showPaginaiton button").first().trigger('click');
                }
            });
        }
        
    </script>
@endsection
@section('script-th')
    <script>
        function getPostArea(page) {
                let area_id = $("#area_id").val();
                let price_low = $("#price_low").val();
                let price_high = $("#price_high").val();
                let post_style = $("#post_style").val();
                let post_status = $("#post_status").val();
                $.ajax({
                    type: "post",
                    url: "{{ route('getPostAreaTH',$type) }}",
                    data: {
                        page : page,
                        area_id : area_id,
                        price_low : price_low,
                        price_high : price_high,
                        post_style : post_style,
                        post_status : post_status,
                    },
                    dataType: "html",
                    success: function (response) {
                        $("#showPost").html(response);
                    }
                });
            }
    </script>
@endsection
@section('script-en')
    <script>
        function getPostArea(page) {
                let area_id = $("#area_id").val();
                let price_low = $("#price_low").val();
                let price_high = $("#price_high").val();
                let post_style = $("#post_style").val();
                let post_status = $("#post_status").val();
                $.ajax({
                    type: "post",
                    url: "{{ route('getPostAreaEN',$type) }}",
                    data: {
                        page : page,
                        area_id : area_id,
                        price_low : price_low,
                        price_high : price_high,
                        post_style : post_style,
                        post_status : post_status,
                    },
                    dataType: "html",
                    success: function (response) {
                        $("#showPost").html(response);
                    }
                });
            }
    </script>
@endsection

