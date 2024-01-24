@extends('layouts_v2.condo')
{{-- @extends('layouts_v2.area') --}}
{{-- ไทย --}}
@if($type == 1) 
    @section('title-th', $condo_name_th.' : เช่า/ซื้อ/ขาย คอนโด '.$condo_name_en.' | Buy/Sell/Rent Condominium in Bangkok')
    @section('meta-description-th', 'Scancondo ตัวแทน (Agent) ให้บริการหาห้อง คอนโด'.$condo_name_th.' ค้นหาห้องที่สวย scan ห้องที่ใช่สำหรับคุณ Buy/Sell/Rent Condominium '.$condo_name_en)
    {{-- eng --}}
    @section('title-en', $condo_name_en.' : Room available for rent')
    @section('meta-description-en', 'Find our  '.$condo_name_en.' listing that meet your requirement (Bedrooms, price, decoration, view etc.)')
@endif
@if($type == 2) 
    @section('title-th', $condo_name_th.' : ซื้อ-ขาย คอนโด '.$condo_name_en.' | Buy-Sell Condominium in Bangkok')
    @section('meta-description-th', 'Scancondo ตัวแทน (Agent) ให้บริการหาห้อง คอนโด'.$condo_name_th.' ค้นหาห้องที่สวย scan ห้องที่ใช่สำหรับคุณ Buy/Sell/Rent Condominium '.$condo_name_en)
    {{-- eng --}}
    @section('title-en', $condo_name_en.' : Best price condominium for sale')
    @section('meta-description-en', 'Find our  '.$condo_name_en.' listing that meet your requirement (Bedrooms, price, decoration, view etc.)')
@endif
@section('meta-keywords-th','ซื้อ, ขาย, เช่า, buy, rent, sell, for sale, condo, condominium, agent, agency, property, Bangkok, Nonthaburi, Pathum Thani, Samut Prakan, กรุงเทพ, นนทบุรี, ปทุมธานี, สมุทรปราการ, BTS, MRT, airport link, สุขุมวิท, Sukhumvit, room, available, location, บีทีเอส, เอ็มอาร์ที, ใกล้รถไฟฟ้า, สถานี, แผนที่, map, ห้องว่าง')
@section('meta-keywords-en',$condo_name_en.', condo, condominium, room, buy, sell, rent, service, agent, agency, property, real estate, Bangkok, Thailand, bts, mrt, flat, apartment, unit, best price, fully furnished, bedroom, available')


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
                {{-- @if($type == 1) เช่า-ซื้อ-ขาย @endif
                @if($type == 2) ซื้อ-ขาย@endif  --}}
                {{$condo_name_th}} ({{$condo_name_en}})
            </h1> 
        </div>
        <div class="container text-center d-none d-md-block">  
            <ol>
                <li><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                <li><a href="{{$rent_url}}"> เช่า{{$condo_name_th}} </a></li>
                <li><a href="{{$sale_url}}"> ซื้อ-ขาย คอนโด{{$condo_name_th}}</a></li>
                <li><a href="{{ route('home') }}/map/condo/{{str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'],$condo_name_th)}}"> แผนที่คอนโดใกล้เคียง {{$condo_name_th}}</a></li>
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
                {{-- @if($type == 1) Rent-Buy-Sell @endif
                @if($type == 2) Buy-Sell @endif  --}}
                {{$condo_name_en}}</h1> 
        </div>
        <div class="container text-center d-none d-md-block">  
            <ol>
                <li><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                <li><a href="{{$rent_url}}"> Rent {{$condo_name_en}} </a></li>
                <li><a href="{{$sale_url}}"> Buy-Sell {{$condo_name_en}}</a></li>
                <li><a href="{{ route('home') }}/map/condo/{{str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'],$condo_name_en)}}"> Map of nearby condos {{$condo_name_en}}</a></li>
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

{{-- คอนโดใกล้เคียง******************************************************* --}}
@section('content-th')
    <div class="board-page">
        <div class="ads-post-content">
            <div class="text-center mt-3">
                <a href="{{ $area_url }}" class="btn-tag" id="all">ดูประกาศทั้งหมด ในทำเลและบริเวณนี้</a>
                @foreach ($condo_landmark as $landmark)
                    <a href="{{ $landmark['url'] }}" class="btn-tag" title="คอนโดใกล้{{ $landmark['name'] }}">
                        คอนโดใกล้{{ $landmark['name'] }}
                    </a>
                @endforeach
            </div>
        </div>
        <div  id="searchBox">
        </div>


    </div>
    <div class="board-condo-oth center">
        <h3 class="f-theme"><font class="text-dark">เลือกดูและเปรียบเทียบ<br class="d-block d-sm-none">
            คอนโดใกล้เคียง</font> <br> {{$condo_name_en}}</h3>
        <div class="nearby-condo" id="showNear">

        </div>
    </div>
@endsection
@section('content-en')
    <div class="board-page">
        <div class="ads-post-content">
            <div class="text-center mt-3">
                <a href="{{ $area_url }}" class="btn-tag" id="all">View all listings in this area and location</a>
                @foreach ($condo_landmark as $landmark)
                    <a href="{{ $landmark['url'] }}" class="btn-tag" title="Condo near {{ $landmark['name'] }}">
                        Condo near {{ $landmark['name'] }}
                    </a>
                @endforeach
            </div>
        </div>
        <div  id="searchBox">
        </div>


    </div>
    <div class="board-condo-oth center">
        <h3 class="f-theme"><font class="text-dark">Choose, view and compare <br class="d-block d-sm-none">
            nearby condos</font> <br> {{$condo_name_en}}</h3>
        <div class="nearby-condo" id="showNear">

        </div>
    </div>
@endsection
{{-- คอนโดใกล้เคียง********************************************************** --}}
@section('tabbutton-en')
    <li class="nav-item col-4">
        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
            <h4>
                <span class="iconcondo" ><i class="fas fa-building"></i>&nbsp;  Condo Images</span>
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
    <li class="nav-item col-4">
        <a class="nav-link"  href="{{$condo_google_map_link}}">
            <h4>
            <span class="iconcondo"  ><i class="fas fa-map-marked-alt"></i> Map</span>
            
            </h4>
        </a>
    </li>
@endsection
@section('tabbutton-th')
    <li class="nav-item col-4">
        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
            <h4>
                <span class="iconcondo" ><i class="fas fa-building"></i>&nbsp;  รูปคอนโด</span>
            </h4>
        </a>
    </li>
    <li class="nav-item col-4">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
            <h4>
                <span class="iconcondo" ><i class="fas fa-align-left"></i>&nbsp;  ข้อมูล</span>
            </h4>
        </a>
    </li>
    <li class="nav-item col-4">
        <a class="nav-link"  href="{{$condo_google_map_link}}">
            <h4>
            <span class="iconcondo"  ><i class="fas fa-map-marked-alt"></i> แผนที่</span>
            
            </h4>
        </a>
    </li>
@endsection
@section('condoinfotable-th')
    <table class="table table-striped text-left condo-detail-toon">
        <tbody>
            <tr>
                <th style="width: 33.33%">ชื่อโครงการ</th>
                <td style="text-align: left">{{$condo_name_th}}</td>
            </tr>
            <tr>
                <th>Project name</th>
                <td style="text-align: left">{{$condo_name_en}}</td>
            </tr>
            @if($condo_project_owner != "")
                <tr>
                    <th>เจ้าของโครงการ</th>
                    <td style="text-align: left">{{$condo_project_owner}}</td>
                </tr>
            @endif
            @if($condo_total_area != "")
                <tr>
                    <th>เนื้อที่ทั้งหมด</th>
                    <td style="text-align: left">{{$condo_total_area}} ตร.ม</td>
                </tr>
            @endif
            @if($condo_total_buildings != "")
                <tr>
                    <th>จำนวนตึก</th>
                    <td style="text-align: left">{!!$condo_total_buildings!!} ตึก</td>
                </tr>
            @endif
            @if($condo_total_floor  != "")
                <tr>
                <th>จำนวนชั้น</th>
                <td style="text-align: left">{!!$condo_total_floor !!} ชั้น</td>
                </tr >
            @endif
            @if($condo_total_room != "")
                <tr>
                <th>จำนวนห้อง</th>
                <td style="text-align: left">{!!$condo_total_room!!} ห้อง</td>
                </tr>
            @endif
            @if($condo_total_style != "")
                <tr>
                <th>ลักษณะห้องและขนาดห้อง</th>
                <td style="text-align: left">{!!$condo_total_style!!} แบบ</td>
                </tr>
            @endif
            @if($condo_total_parking != "")
                <tr>
                <th>ที่จอดรถทั้งหมด</th>
                <td style="text-align: left">{!!$condo_total_parking!!} คัน</td>
                </tr>
            @endif
            @if($condo_total_lift != "")
                <tr>
                <th>ลิฟท์</th>
                <td style="text-align: left">{!!$condo_total_lift!!} ตัว</td>
                </tr>
            @endif
            @if($condo_pubild_transport != "")
                <tr>
                <th>ขนส่งสาธารณะ</th>
                <td style="text-align: left">{!!$condo_pubild_transport!!}</td>
                </tr>
            @endif
            @if($condo_bus_passing != "")
                <tr>
                <th>รถโดยสาร</th>
                <td>{!!$condo_bus_passing!!}</td>
                </tr>
            @endif
            @if($condo_address != "")
                <tr>
                <th>ที่ตั้ง</th>
                <td style="text-align: left">{!!$condo_address!!}</td>
                </tr>
            @endif
            <tr>
                <th>ประเภทคอนโด</th>
                <td style="text-align: left">
                    @switch($condo_rise_style)
                    @case(2) High rise @break
                    @case(1) Low rise @break
                @endswitch<br>
                {!!$condo_total_floor!!}
                </td>
            </tr>
            {{-- @if($condo_common_fee_th != "")
            <tr>
                <th>ค่าส่วนกลางและกองทุน</th>
                <td  style="text-align: left">
                    {!!$condo_common_fee_th!!}
                </td>
            </tr>
            @endif
            <tr>
                <th>สิ่งอำนวยความสะดวก</th>
                <td style="text-align: left">
                    {!!$condo_facilities_th!!}
                </td>
            </tr> --}}
            <tr>
                <th>จุดเด่นของโครงการ</th>
                <td style="text-align: left">
                    -
                </td>
            </tr>
            <tr>
                <th>ราคาเช่าเริ่มต้น</th>
                <td style="text-align: left">
                    {{ $condo_1bed_price_rent }} บาท
                </td>
            </tr>
            <tr>
                <th>จำนวนห้อง</th>
                <td style="text-align: left">
                    {{$condo_total_room}} ห้อง
                </td>
            </tr>
            <tr>
                <th>สถานที่สำคัญใกล้เคียง</th>
                <td style="text-align: left">
                    @foreach ($condo_landmark as $landmark)
                    <a href="{{ $landmark['url'] }}" title="คอนโดใกล้{{ $landmark['name'] }}"><i class="fas fa-map-marker-alt"></i>  {{ $landmark['name'] }}</a><br>
                    @endforeach
                </td>
            </tr>
            <tr>
                <th>โซน</th>
                <td style="text-align: left">
                    <a href="{{ $area_url }}"><i class="fas fa-map-marker-alt"></i> {{ $area_name }}</a>
                </td>
            </tr>
        </tbody>
    </table>
    <table class="table">
        <tbody>
            <tr><td colspan="4">
                <div class="text-center container">                
                    <h4 class="f-theme d-none d-md-block">รวมประกาศให้เช่า (Rent) - ประกาศขาย (Sale)</h4>
                    <h4 class="d-none d-md-block">{{$condo_name_th}}</h4><br>
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
    <table class="table table-striped text-left condo-detail-toon">
        <tbody>
            <tr>
                <th style="width: 33.33%">Project name</th>
                <td style="text-align: left">{{$condo_name_en}}</td>
            </tr>
            <tr>
                <th>Project name in Thai</th>
                <td style="text-align: left">{{$condo_name_th}}</td>
            </tr>
            @if($condo_project_owner != "")
                <tr>
                    <th>Project Owner</th>
                    <td style="text-align: left">{{$condo_project_owner}}</td>
                </tr>
            @endif
            @if($condo_total_area != "")
                <tr>
                    <th>Total area</th>
                    <td style="text-align: left">{{$condo_total_area}} m<sup>2</sup></td>
                </tr>
            @endif
            @if($condo_total_buildings != "")
                <tr>
                    <th>Total Buildings</th>
                    <td style="text-align: left">{!!$condo_total_buildings!!}</td>
                </tr>
            @endif
            @if($condo_total_floor  != "")
                <tr>
                <th>Total Floors</th>
                <td style="text-align: left">{!!$condo_total_floor !!}</td>
                </tr >
            @endif
            @if($condo_total_room != "")
                <tr>
                <th>Total rooms</th>
                <td style="text-align: left">{!!$condo_total_room!!}</td>
                </tr>
            @endif
            @if($condo_total_style != "")
                <tr>
                <th>Room features and room size.</th>
                <td style="text-align: left">{!!$condo_total_style!!}</td>
                </tr>
            @endif
            @if($condo_total_parking != "")
                <tr>
                <th>Total Parking Lot</th>
                <td style="text-align: left">{!!$condo_total_parking!!}</td>
                </tr>
            @endif
            @if($condo_total_lift != "")
                <tr>
                <th>Total Elevator</th>
                <td style="text-align: left">{!!$condo_total_lift!!}</td>
                </tr>
            @endif
            @if($condo_pubild_transport != "")
                <tr>
                <th>Public Transportation</th>
                <td style="text-align: left">{!!$condo_pubild_transport!!}</td>
                </tr>
            @endif
            @if($condo_bus_passing != "")
                <tr>
                <th>Bus Passing</th>
                <td>{!!$condo_bus_passing!!}</td>
                </tr>
            @endif
            @if($condo_address != "")
                <tr>
                <th>Address</th>
                <td style="text-align: left">{!!$condo_address!!}</td>
                </tr>
            @endif
            <tr>
                <th>Condo Type</th>
                <td style="text-align: left">
                    @switch($condo_rise_style)
                    @case(2) High rise @break
                    @case(1) Low rise @break
                @endswitch<br>
                {!!$condo_total_floor!!}
                </td>
            </tr>
            @if($condo_common_fee_en != "")
            <tr>
                <th>Common expenses and Funds</th>
                <td  style="text-align: left">
                    {!!$condo_common_fee_en!!}
                </td>
            </tr>
            @endif
            <tr>
                <th>Amenities / Facilities</th>
                <td style="text-align: left">
                    {!!$condo_facilities_en!!}
                </td>
            </tr>
            <tr>
                <th>Project's selling points</th>
                <td style="text-align: left">
                    {!!$condo_notable!!}
                </td>
            </tr>
            <tr>
                <th>nitial rental price</th>
                <td style="text-align: left">
                    {{ $condo_1bed_price_rent }} Baht/Month
                </td>
            </tr>
            <tr>
                <th>Total Rooms</th>
                <td style="text-align: left">
                    {{$condo_total_room}}
                </td>
            </tr>
            <tr>
                <th>Conveniently located places</th>
                <td style="text-align: left">
                    @foreach ($condo_landmark as $landmark)
                    <a href="{{ $landmark['url'] }}" title="Condo near {{ $landmark['name'] }}">
                        <i class="fas fa-map-marker-alt"></i>  {{ $landmark['name'] }}</a><br>
                    @endforeach
                </td>
            </tr>
            <tr>
                <th>Zone</th>
                <td style="text-align: left">
                    <a href="{{ $area_url }}"><i class="fas fa-map-marker-alt"></i> {{ $area_name }}</a>
                </td>
            </tr>
        </tbody>
    </table>
    <table class="table">
        <tbody>
            <tr><td colspan="4">
                <div class="text-center container">                
                    <h4 class="f-theme d-none d-md-block">{{$condo_name_en}} For Rent - {{$condo_name_en}} For Sale</h4>
                    <h4 class="d-none d-md-block">{{$condo_name_en}}</h4><br>
                    <i class="fas fa-check f-theme"></i>  Complete with all price levels   <br class="d-block d-sm-none">
                    <i class="fas fa-check f-theme"></i> Complete with all bedroom types <br class="d-block d-sm-none"> 
                    <i class="fas fa-check f-theme"></i> Complete with all condos in this location<br class="d-block d-sm-none"> <br>
                    Complete with full information and details, ready for decision making
                </div><br><br>
            </td></tr>
        </tbody>
    </table> 
@endsection
@section('boxfilter-en')
    <select class="" name="university_id" id="university_id" disabled>
        <option value="{{$condo_name_en}}"  selected>{{ $condo_name_en }}</option>
    </select>
@endsection
@section('boxfilter-th')
<select class="" name="university_id" id="university_id" disabled>
    <option value="{{$condo_name_th}}"  selected >{{ $condo_name_th }}</option>
</select>
@endsection
@section('boxfilterbutton-th')
    <button type="button" name="button" class="btn btn-primary searchnow" onclick="countPostCondo();">
        <span class="blink"><i class="fas fa-search"></i></span> ค้นหา คลิก!
    </button>
@endsection
@section('boxfilterbutton-en')
    <button type="button" name="button" class="btn btn-primary searchnow" onclick="countPostCondo();">
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
        <br>
        <span class="f-theme">{{ $condo_name_th }}</span>
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
        <br>
        <span class="f-theme">{{ $condo_name_en }}</span>
    </h5>
@endsection
@section('script')
    <script src="{{ asset('plugins/select2/select2.full.min.js') }}" charset="utf-8"></script>
    {{-- <script src="{{ asset('js/area.js') }}" charset="utf-8"></script> --}}
    <script src="{{ asset('js/condo.js') }}" charset="utf-8"></script>
    {{-- <script>
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

        
    </script> --}}
    <script>
        $("button.main-condo-menu").click(function(event) {
            if (!$(this).data('id') || $(this).data('id') == "") {
                return false;
            } else {
                $(".main-condo-menu").removeClass('active');
                $(this).addClass('active');
                $(".content-detail").removeClass('active');
                $($(this).data('id')).addClass('active');
            }
        });
        $("select").select2({ minimumResultsForSearch: -1,width: '100%' });

        var searchBoxLoad = 1;
        var searchBoxH = $('#searchBox').offset().top;
        $(window).on('load', function() {
            countPostCondo();
            getNearCondo();
            $(window).scroll(function (event) {
                
                var wH = $(window).height();
                var wS = $(this).scrollTop();
                var scrollTo = wS + wH;
                if (searchBoxLoad == 0 && scrollTo >= searchBoxH) {
                    searchBoxLoad = 1;
                    countPostCondo();
                    getNearCondo();
                }
            });
        });

        function countPostCondo() {
            let post_status = $("#post_status").val();
            let price_low = $("#price_low").val();          
            let price_high = $("#price_high").val();
            let post_style = $("#post_style").val();
            $("#showPaginaiton,#showPost").empty();
            $("#showPostNull").hide();
            $.ajax({
                type: "post",
                url: "{{ route('countPostCondo',[$condo_id,$type]) }}",
                data: {
                    post_status : post_status,
                    post_style : post_style,
                    price_low : price_low,
                    price_high : price_high,
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
                        let content = '<button type="button" class="page-link mr-2 pr-2" data-page="' + index + '">' + index + '</button>';
                        $("#showPaginaiton").append(content);
                    }
                    $("#showPaginaiton button").click(function (e) {
                        $("#showPaginaiton button").removeClass('active');
                        $(this).addClass('active');
                        let page = $(this).data('page');
                        getPostCondo(page);
                    });
                    $("#showPaginaiton button").first().trigger('click');
                }
            });
        }

        function getNearCondo() {
            $.ajax({
                type: "post",
                url: "{{ route('getNearCondo',$condo_id) }}",
                dataType: "html",
                success: function (response) {
                    $("#showNear").html(response);
                    $('.nearby-condo .owl-carousel').owlCarousel({
                        margin: 24,
                        loop: true,
                        autoplay:true,
                        autoplayTimeout:3000,
                        autoplayHoverPause:true,
                        responsive: {
                            0: {
                                items: 2
                            },
                            600: {
                                items: 3
                            },
                            900: {
                                items: 4
                            }
                        }
                    });
                }
            });
        }
        
    </script>
@endsection
@section('script-th')
    <script>
        function getPostCondo(page) {
            let post_status = $("#post_status").val();
            let price_low = $("#price_low").val();
            let price_high = $("#price_high").val();
            let post_style = $("#post_style").val();
            $.ajax({
                type: "post",
                url: "{{ route('getPostCondoTH',[$condo_id,$type]) }}",
                data: {
                    page : page,
                    post_status : post_status,
                    post_style : post_style,
                    price_low : price_low,
                    price_high : price_high,
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
        function getPostCondo(page) {
            let post_status = $("#post_status").val();
            let price_low = $("#price_low").val();
            let price_high = $("#price_high").val();
            let post_style = $("#post_style").val();
            $.ajax({
                type: "post",
                url: "{{ route('getPostCondoEN',[$condo_id,$type]) }}",
                data: {
                    page : page,
                    post_status : post_status,
                    post_style : post_style,
                    price_low : price_low,
                    price_high : price_high,
                },
                dataType: "html",
                success: function (response) {
                    $("#showPost").html(response);
                }
            });
        }


    </script>
@endsection

