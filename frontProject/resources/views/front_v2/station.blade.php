@extends('layouts_v2.area')
{{-- ไทย --}}
@switch($train_type_sub)
            @case('bts')
                @if($type == 1) 
                    @section('title-th', 'รวมประกาศเช่า/ ซื้อขายคอนโด ใกล้ บีทีเอส'.$train_station_name.' | Buy/Sell/Rent Condominium  BTS ' . $train_station_name_en)
                    @section('meta-description-th', 'Scancondo.com ตัวแทน (Agent) ให้บริการหาคอนโด / ห้องใกล้บีทีเอส'.$train_station_name)
                    {{-- eng --}}
                    @section('title-en', 'Rent/Buy-sell condo near BTS '.$train_station_name_en.' | Buy/Sell/Rent Condominium  BTS ' . $train_station_name_en)
                    @section('meta-description-en', 'Scancondo.com, an agent providing condo / room near BTS '.$train_station_name_en)
                @endif
                @if($type == 2) 
                    @section('title-th', 'ซื้อ-ขายคอนโด ใกล้ บีทีเอส'.$train_station_name.' | Buy/Sell/Rent Condominium  BTS ' .$train_station_name_en)
                    @section('meta-description-th', 'หาห้องสวยถูกใจ คอนโดใกล้ บีทีเอส'
                    .$train_station_name.' ให้บริการซื้อขาย Condo BTS '
                    .$train_station_name_en.' area บริการจัดหาห้องตามความต้องการ ตามงบประมาณ ครบวงจรตั้งแต่ต้นจนจบการซื้อขายกับเรา')
                    {{-- eng --}}
                    @section('title-en', 'Buy/Sell condo near BTS '.$train_station_name_en.' | Buy/Sell/Rent Condominium  BTS ' .$train_station_name_en)
                    @section('meta-description-en', 'Find a beautiful room that you like, near BTS condos.'
                    .$train_station_name_en.' Provide buying and selling services for BTS condos '
                    .$train_station_name_en.' area. Service for finding rooms according to your requirements and budget, complete service from the beginning until the end of the buying/selling process with us.')
                @endif
            @break

            @case('mrt')
                @if($type == 1) 
                    @section('title-th', 'เช่า/ ซื้อขายคอนโด ใกล้ mrt '.$train_station_name.' | Buy/Sell/Rent Condominium MRT ' 
                    .$train_station_name_en)
                    @section('meta-description-th', 'Scancondo.com ตัวแทน (Agent) ให้บริการหาคอนโด / ห้องใกล้ mrt '.$train_station_name)
                    {{-- eng --}}
                    @section('title-en', 'Rent/Buy-sell condo near MRT '.$train_station_name_en.' | Buy/Sell/Rent Condominium  MRT ' . $train_station_name_en)
                    @section('meta-description-en', 'Scancondo.com, an agent providing condo / room near MRT '.$train_station_name_en)
                @endif
                @if($type == 2) 
                    @section('title-th', 'ซื้อ-ขายคอนโด ใกล้ mrt '.$train_station_name.' | Buy/Sell/Rent Condominium  MRT ' 
                    .$train_station_name_en)
                    @section('meta-description-th', 'หาห้องสวยถูกใจ คอนโดใกล้ mrt'
                    .$train_station_name.' ให้บริการซื้อขาย Condo mrt '
                    .$train_station_name_en.' area บริการจัดหาห้องตามความต้องการ ตามงบประมาณ ครบวงจรตั้งแต่ต้นจนจบการซื้อขายกับเรา')
                    {{-- eng --}}
                    @section('title-en', 'Buy/Sell condo near MRT '.$train_station_name_en.' | Buy/Sell/Rent Condominium  MRT ' .$train_station_name_en)
                    @section('meta-description-en', 'Find a beautiful room that you like, near MRT condos.'
                    .$train_station_name_en.' Provide buying and selling services for MRT condos '
                    .$train_station_name_en.' area. Service for finding rooms according to your requirements and budget, complete service from the beginning until the end of the buying/selling process with us.')
                @endif
            @break

            @case('arl')
                @if($type == 1) 
                    @section('title-th', 'เช่า/ ซื้อขายคอนโด ใกล้ แอร์พอร์ตลิ้งค์ '.$train_station_name.' | Buy/Sell/Rent Condominium ARL ' 
                    .$train_station_name_en)
                    @section('meta-description-th', 'Scancondo.com ตัวแทน (Agent) ให้บริการหาคอนโด / ห้องใกล้แอร์พอร์ตลิ้งค์'.$train_station_name)
                    {{-- eng --}}
                    @section('title-en', 'Rent/Buy-sell condo near ARL '.$train_station_name_en.' | Buy/Sell/Rent Condominium  ARL ' . $train_station_name_en)
                    @section('meta-description-en', 'Scancondo.com, an agent providing condo / room near ARL '.$train_station_name_en)
                @endif
                @if($type == 2) 
                    @section('title-th', 'ซื้อ-ขายคอนโด ใกล้ แอร์พอร์ตลิ้งค์ '.$train_station_name.' | Buy/Sell/Rent Condominium ARL ' 
                    .$train_station_name_en)
                    @section('meta-description-th', 'หาห้องสวยถูกใจ คอนโดใกล้ แอร์พอร์ตลิ้งค์'
                    .$train_station_name.' ให้บริการซื้อขาย Condo ARL '
                    .$train_station_name_en.' area บริการจัดหาห้องตามความต้องการ ตามงบประมาณ ครบวงจรตั้งแต่ต้นจนจบการซื้อขายกับเรา')
                    {{-- eng --}}
                    @section('title-en', 'Buy/Sell condo near ARL'.$train_station_name_en.' | Buy/Sell/Rent Condominium  ARL ' .$train_station_name_en)
                    @section('meta-description-en', 'Find a beautiful room that you like, near ARL condos.'
                    .$train_station_name_en.' Provide buying and selling services for ARL condos '
                    .$train_station_name_en.' area. Service for finding rooms according to your requirements and budget, complete service from the beginning until the end of the buying/selling process with us.')
                @endif
            @break

            @default
                @if($type == 1) 
                    @section('title-th', 'เช่า/ ซื้อขายคอนโด ใกล้รถไฟฟ้า สถานี '.$train_station_name.' | Buy/Sell/Rent Condominium ' 
                    .$train_station_name_en.' station')
                    @section('meta-description-th', 'Scancondo.com ตัวแทน (Agent) ให้บริการหาคอนโด / ห้องใกล้สถานี'.$train_station_name)
                    {{-- eng --}}
                    @section('title-en', 'Rent/Buy-sell condo near '.$train_station_name_en.' station | Buy/Sell/Rent Condominium ' . $train_station_name_en.' station')
                    @section('meta-description-en', 'Scancondo.com, an agent providing condo/  room near '.$train_station_name_en.' station')
                @endif
                @if($type == 2) 
                    @section('title-th', 'ซื้อ-ขายคอนโด ใกล้ สถานี '.$train_station_name.' | Buy/Sell/Rent Condominium ' 
                    .$train_station_name_en.' station')
                    @section('meta-description-th', 'หาห้องสวยถูกใจ คอนโดใกล้ สถานี'
                    .$train_station_name.' ให้บริการซื้อขาย Condo สถานี '
                    .$train_station_name_en.' area บริการจัดหาห้องตามความต้องการ ตามงบประมาณ ครบวงจรตั้งแต่ต้นจนจบการซื้อขายกับเรา')
                    {{-- eng --}}
                    @section('title-en', 'Buy/Sell condo near '.$train_station_name_en.' station | Buy/Sell/Rent Condominium ' .$train_station_name_en. ' station')
                    @section('meta-description-en', 'Find a beautiful room that you like, near condos.'
                    .$train_station_name_en.'station. Provide buying and selling services for ARL condos '
                    .$train_station_name_en.' area. Service for finding rooms according to your requirements and budget, complete service from the beginning until the end of the buying/selling process with us.')
                @endif
@endswitch

@section('meta-keywords-th','ซื้อ, ขาย, เช่า, คอนโด, buy, rent, sell, forsale, condo, condominium, agent, agency, property, bangkok, ขายดาวน์, กรุงเทพ, นนทบุรี, ปทุมธานี, สมุทรปราการ, bts, mrt, airport link, สุขุมวิท, sukhumvit, down payment, room, available, location, บีทีเอส, เอ็มอาร์ที, ใกล้รถไฟฟ้า, สถานี, แผนที่, map, ห้องว่าง')
@section('meta-keywords-en','2-bedroom condo, accommodation for rent, buy, sell, cheap prices, near '
.$train_station_name_en.' area, vicinity and location')


@section('head-tag')
    <link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}">
@endsection
@section('breadcrumbs-th')
    <?php
    // $folder ="area";
    $folder ="station";
    ?>
    <section id="breadcrumbs" class="breadcrumbs d-none d-xl-block">        
        <div class="text-center container">
            <h1 class="d-none d-md-block"><i class="fas fa-building"></i>&nbsp; 
                @if($type == 1) เช่า-ซื้อ-ขาย @endif
                @if($type == 2) ซื้อ-ขาย@endif 
                คอนโดใกล้ {{ $train_type_name }} สถานี {{ $train_station_name }} ({{ $train_station_name_en }})
            </h1> 
        </div>
        <div class="container text-center d-none d-md-block">  
            <ol>
            <li><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
            {{-- <li>{{$zone_name}}</li> --}}
            <li>คอนโดใกล้ {{ $train_type_name }} สถานี {{ $train_station_name }} ({{ $train_station_name_en }})
            </li>
            </ol>
            
        </div>
    </section>
@endsection
@section('breadcrumbs-en')
    <?php
    // $folder ="area";
    $folder ="station";
    ?>
    <section id="breadcrumbs" class="breadcrumbs d-none d-xl-block">        
        <div class="text-center container">
            <h1 class="d-none d-md-block"><i class="fas fa-building"></i>&nbsp; 
                @if($type == 1) Rent-Buy-Sell @endif
                @if($type == 2) Buy-Sell @endif 
                condo near {{ $train_station_name_en }} station ({{ $train_type_name_en }})
            </h1> 
        </div>
        <div class="container text-center d-none d-md-block">  
            <ol>
            <li><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
            {{-- <li>{{$zone_name_en}}</li> --}}
            <li>condo near {{ $train_station_name_en }} station ({{ $train_type_name_en }})
            </li>
            </ol>
            
        </div>
    </section>
@endsection
@section('buttonshowcondo-th')
    <button type="button" class="show-condo" name="button" 
        onclick="getCondoStationStep(2);">แสดงคอนโดทั้งหมด <br class="d-block d-sm-none">( จำนวน <span id="showCountCondo"></span> คอนโด )
    </button>    
@endsection
@section('buttonshowcondo-en')
    <button type="button" class="show-condo" name="button" 
        onclick="getCondoStationStep(2);">View All <br class="d-block d-sm-none">( <span id="showCountCondo"></span> Projects )
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
                <span class="iconcondo" ><i class="fas fa-building"></i>&nbsp;  คอนโดใกล้สถานี</span>
            </h4>
        </a>
    </li>
    <li class="nav-item col-4">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
            <h4>
                <span class="iconcondo" ><i class="fas fa-align-left"></i>&nbsp;  ข้อมูลสถานี</span>
            </h4>
        </a>
    </li>
    <li class="nav-item col-2"></li>
@endsection
@section('condoinfotable-th')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">รถไฟฟ้า</th>
            <th scope="col">ชื่อภาษาไทย</th>
            <th scope="col">ชื่อภาษาอังกฤษ</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $train_type_name }}</td>
            <td>{{ $train_station_name }}</td>
            <td>{{ $train_station_name_en }}</td>
        </tr>
        
        </tbody>
    </table> 
    <table class="table">
        <tbody>
            <tr><td colspan="4">
                <div class="text-center container">
                    <h4 class="f-theme d-none d-md-block">
                        @if($type == 1) เช่า-ซื้อขาย @endif
                        @if($type == 2) ซื้อ-ขาย@endif                         
                        คอนโดใกล้ {{ $train_type_name }} </h4>
                    <h4 class="d-none d-md-block">สถานี {{ $train_station_name }} ({{ $train_station_name_en }})</h4><br>
                    <i class="fas fa-check f-theme"></i> ครบทุกระดับราคา  <br class="d-block d-sm-none">
                    <i class="fas fa-check f-theme"></i> ครบทุกรูปแบบห้องนอน <br class="d-block d-sm-none"> 
                    <i class="fas fa-check f-theme"></i> ครบทุกคอนโดใกล้สถานีนี้<br class="d-block d-sm-none"> <br>
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
            <th scope="col">Train Type / Line</th>
            <th scope="col">Station Name</th>
            <th scope="col">Station Name in Thai</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $train_type_name_en }}</td>
            <td>{{ $train_station_name_en }}</td>
            <td>{{ $train_station_name }}</td>
        </tr>
        
        </tbody>
    </table> 
    <table class="table">
        <tbody>
            <tr><td colspan="4">
                <div class="text-center container">
                    <h4 class="f-theme d-none d-md-block">
                        @if($type == 1) 
                        {{-- เช่า-ซื้อขาย  --}}
                        Rent-Buy Sell
                        @endif
                        @if($type == 2) 
                        {{-- ซื้อ-ขาย --}}
                        Buy-Sell
                        @endif                         
                        condo near {{ $train_type_name_en }} </h4>
                    <h4 class="d-none d-md-block"> {{ $train_station_name_en }} station</h4><br>
                    <i class="fas fa-check f-theme"></i> Complete with all price levels  <br class="d-block d-sm-none">
                    <i class="fas fa-check f-theme"></i> Complete with all bedroom types <br class="d-block d-sm-none"> 
                    <i class="fas fa-check f-theme"></i> Complete with all condos near this station<br class="d-block d-sm-none"> <br>
                    Complete with full information and details, ready for decision making
                </div><br><br>
            </td></tr>
        </tbody>
    </table> 
@endsection
@section('boxfilter-th')
<select class="" name="station_id" id="station_id">
        @foreach ($optionList as $data)
            <option value="{{ $data['value'] }}" @if ($data['value'] == $station_id) selected @endif>{{ $data['name'] }}</option>
        @endforeach
    </select>
@endsection
@section('boxfilter-en')
<select class="" name="station_id" id="station_id">
        @foreach ($optionList as $data)
            <option value="{{ $data['value'] }}" @if ($data['value'] == $station_id) selected @endif>{{ $data['name'] }}</option>
        @endforeach
    </select>
@endsection
@section('boxfilterbutton-th')
    <button type="button" name="button" class="btn btn-primary searchnow" onclick="countPostStation();">
        <span class="blink"><i class="fas fa-search"></i></span> ค้นหา คลิก!
    </button>
@endsection
@section('boxfilterbutton-en')
    <button type="button" name="button" class="btn btn-primary searchnow" onclick="countPostStation();">
        <span class="blink"><i class="fas fa-search"></i></span> Search now
    </button>
@endsection
@section('seoh5-th')
    <div class="pt-toon-title d-block d-sm-none">
        &nbsp;
    </div>
    <h5 class="d-block d-sm-none text-center pt-3  seotextmobile" >
        <i class="fas fa-building"></i>&nbsp;คอนโดใกล้ {{ $train_type_name }}<br>
        <span class="f-theme">สถานี {{ $train_station_name }} ({{ $train_station_name_en }})</span>
    </h5>
@endsection
@section('seoh5-en')
    <div class="pt-toon-title d-block d-sm-none">
        &nbsp;
    </div>
    <h5 class="d-block d-sm-none text-center pt-3  seotextmobile" >
        <i class="fas fa-building"></i>&nbsp;condo near {{ $train_type_name_en }}<br>
        <span class="f-theme">{{ $train_station_name_en }} station</span>
    </h5>
@endsection
@section('script')
    <script src="{{ asset('plugins/select2/select2.full.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/area.js') }}" charset="utf-8"></script>
    <script>
        var searchBoxLoad = 1;
        var searchBoxH = $('#searchBox').offset().top;
        $(window).on('load', function() {
            countCondoStation();
            // เพิ่มบรรทัดเดียวได้เลย
            countPostStation();
            getCondoStationStep(1);
            $(window).scroll(function (event) {
                var wH = $(window).height();
                var wS = $(this).scrollTop();
                var scrollTo = wS + wH;
                if (searchBoxLoad == 0 && scrollTo >= searchBoxH) {
                    searchBoxLoad = 1;
                    countPostStation();
                }
            });
        });
        $("#buttonShowCondo").click(function (e) {
            $(this).remove();
        });
        function countCondoStation() {
            $.ajax({
                type: "post",
                url: "{{ route('countCondoStation',$train_station_id) }}",
                dataType: "json",
                success: function (response) {
                    if (response.countCondo > 4) {
                        $("#showCountCondo").html(response.countCondo);
                        $("#buttonShowCondo").show();
                    }
                }
            });
        }
        function getCondoStationStep(step) {
            $.ajax({
                type: "post",
                url: "{{ route('getCondoStationStep',$train_station_id) }}",
                data: {step:step},
                dataType: "html",
                success: function (response) {
                    $("#showCondo").append(response);
                }
            });
        }
        function countPostStation() {
            let station_id = $("#station_id").val();
            let price_low = $("#price_low").val();
            let price_high = $("#price_high").val();
            let post_style = $("#post_style").val();
            let post_status = $("#post_status").val();
            $("#showPaginaiton,#showPost").empty();
            $("#showPostNull").hide();
            $.ajax({
                type: "post",
                url: "{{ route('countPostStation',$type) }}",
                data: {
                    station_id : station_id,
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
                        getPostStation(page);
                    });
                    $("#showPaginaiton button").first().trigger('click');
                }
            });
        }

        
    </script>
@endsection
@section('script-th')
    <script>
            function getPostStation(page) {
                let station_id = $("#station_id").val();
                let price_low = $("#price_low").val();
                let price_high = $("#price_high").val();
                let post_style = $("#post_style").val();
                let post_status = $("#post_status").val();
                $.ajax({
                    type: "post",
                    url: "{{ route('getPostStationTH',$type) }}",
                    data: {
                        page : page,
                        station_id : station_id,
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
            function getPostStation(page) {
                let station_id = $("#station_id").val();
                let price_low = $("#price_low").val();
                let price_high = $("#price_high").val();
                let post_style = $("#post_style").val();
                let post_status = $("#post_status").val();
                $.ajax({
                    type: "post",
                    url: "{{ route('getPostStationEN',$type) }}",
                    data: {
                        page : page,
                        station_id : station_id,
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

