@extends('layouts_v2.singlepage')
{{-- ไทย --}}
@section('title-th', 'บริการหาเช่าคอนโด | ฝากขายคอนโด | ฝากห้องทำการตลาด | ซื้อขายอสังหาริมทรัพย์')
@section('title-en', 'Discover the Best Real Estate Services at ScanCondo.com - Our Service')

@section('meta-description-th','Scancondo.com บริการด้านคอนโดครบวงจร บริการหาคอนโด ห้องสวยถูกใจ, รับฝากขาย ฝากห้องเพื่อทำการตลาดหาลูกค้า ดูแลลูกค้าด้วยทีมงานมืออาชีพทุกขั้นตอนตั้งแต่ต้นจนจบสมบูรณ์')
@section('meta-description-en','Discover the best services for finding your dream condo in Bangkok and surrounding 
areas with ScanCondo.com. We have over 2,000 projects and 100,000 rooms for you to 
choose from with experienced professionals ready to assist you every step of the way.')

@section('facebook-title-th', 'บริการหาเช่าคอนโด | ฝากขายคอนโด | ฝากห้องทำการตลาด | ซื้อขายอสังหาริมทรัพย์')
@section('facebook-title-en', 'Discover the Best Real Estate Services at ScanCondo.com - Our Service')

@section('meta-keywords-th','ซื้อ, ขาย, เช่า, คอนโด, buy, rent, sell, forsale, condo, condominium, agent, agency, property, bangkok, ขายดาวน์, กรุงเทพ, นนทบุรี, ปทุมธานี, สมุทรปราการ, bts, mrt, airport link, สุขุมวิท, sukhumvit, down payment, room, available, location, บีทีเอส, เอ็มอาร์ที, ใกล้รถไฟฟ้า, สถานี, แผนที่, map, ห้องว่าง')
@section('meta-keywords-en','2-bedroom condo, accommodation for rent, buy, sell, cheap prices, near area, vicinity and location')

@section('head-tag')
    <link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/swal/dist/sweetalert2.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/image-uploader/image-uploader.min.css') }}">
    <link href="{{ asset('assets_v2/assets/css/style-slide.css') }}" rel="stylesheet"> 
@endsection

@section('breadcrumbs-th')
    <section class="breadcrumbs d-none d-xl-block">
        <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>บริการของเรา</h2>
            <ol>
            <li><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
            <li>บริการของเรา</li>
            </ol>
        </div>

        </div>
    </section>
@endsection
@section('breadcrumbs-en')
    <section class="breadcrumbs d-none d-xl-block">
        <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Our services</h2>
            <ol>
            <li><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
            <li>Our services</li>
            </ol>
        </div>

        </div>
    </section>
@endsection

@section('link_th',$url)

@section('content-th')
    <section id="featurestoon" class="featurestoon" data-aos="fade-up">
        <div class="container" >      
            <div class="row align-items-center">
                <div class="col-lg-7 order-2 order-lg-1">
                    
                    <div class="mt-1 p-4 text-center">
                        <br class="d-block d-sm-none">
                        <h4>เพิ่มโอกาสในการหา<br class="d-block d-sm-none">ผู้เช่า/ผู้ซื้อได้รวดเร็วยิ่งขึ้น</h4>
                        <p class="mt-4">
                            ฝากข้อมูลทรัพย์ของคุณกับเรา ผ่านฐานลูกค้าและช่องทางการตลาดอันหลากหลาย ที่เราจะช่วยคุณทำการตลาด ประชาสัมพันธ์ทรัพย์ของคุณ กับทีมงานที่มีประสบการณ์และความเชี่ยวชาญ เพื่อให้ปิดการขายได้อย่างสมบูรณ์
                        </p>
                        <a href="{{ route('deposit') }}" class="cta-btn shadow"><strong>ฝากห้องเช่า/ฝากขาย</strong></a>
                    </div>
                    
                </div>
                <div class="col-lg-5 order-1 order-lg-2 text-align-center" >
                <img src="{{ asset('assets_v2/images-news/ourservices-001.png') }}" class="images-fluid">
                </div>
            </div>

            <div class="row align-items-center mt-5">
                <div class="col-lg-7 order-2 order-lg-2">
                    
                    <div class="mt-1 p-4 text-center">
                        <br class="d-block d-sm-none">
                        <h4>
                            บริการจัดหา<br class="d-block d-sm-none">ห้องเช่า - ห้องขาย </h4>
                            <h5>(สำหรับลูกค้าที่ต้องการเช่า - ซื้อห้อง)</h5>
                        <p class="mt-4">
                            หากท่านกำลังมองหาคอนโดที่จะเช่า - ซื้อ ไม่ว่าจะเพื่ออยู่อาศัย หรือ ลงทุน ทางเราให้บริการจัดหาคอนโดให้เช่า - ขาย ทุกประเภท ตามความต้องการของคุณ เราหาห้องสวยตามความต้องการทุกรูปแบบ - ทุกทำเลทั่วกรุงเทพและปริมณฑล อำนวยความสะดวกทุกขั้นตอน ให้คุณได้ห้องตามที่คุณต้องการ เริ่มตั้งแต่การคัดเลือกห้องที่ดีที่สุด ตามราคา และทำเลที่คุณต้องการ , การนัดหมายเจ้าของห้อง, พาไปเยี่ยมชมห้องจริง                            
                        </p>
                        <p class="mt-4">
                            เพื่อให้คุณได้เห็นห้องทุกมุมมองแบบ 360องศา, ทำสัญญาเช่า - ซื้อ และดูแลบริการคุณตลอดอายุสัญญา ด้วยทีมงานมืออาชีพที่คุณไว้วางใจ
                        </p>
                        <a class="cta-btn2 shadow" href="//line.me/R/ti/p/%40704uwpvc"><i class="fab fa-line shadow" ></i> ไลน์ @Scancondo</a>&nbsp;&nbsp; 
                        <a class="cta-btn3 shadow" href="https://api.whatsapp.com/message/QBXG7VN7RV6YB1">
                            <i class="fab fa-whatsapp shadow"></i> Whatsapp : Scancondo
                        </a>
                        
                    </div>
                    
                </div>
                <div class="col-lg-5 order-1 order-lg-1 text-align-center">
                    <img src="{{ asset('assets_v2/images-news/ourservices-002.png') }}" class="images-fluid">
                </div>
            </div> 
            
            <div class="row align-items-center mt-5">
                <div class="col-lg-7 order-2 order-lg-1">                        
                    <div class="mt-1 p-4 text-center">
                        <br class="d-block d-sm-none">
                        <h4>
                            บริการจัดหาผู้เช่า - ผู้ซื้อ ห้องชุดคอนโดมิเนียม</h4>
                            <h5> (สำหรับ Owner)</h5>
                        <p class="mt-4">
                            หากท่านมีคอนโด อยากหาคนมาเช่า - ซื้อห้องแล้วละก็..
                            ให้เราได้บริการคุณ กับบริการจัดหาผู้เช่า - ซื้อ ให้ตรงกลุ่มลูกค้าที่คุณต้องการ ด้วยสื่อการตลาด และ ช่องทางการตลาดที่เรามีอยู่มากมาย พร้อมทั้งทีมงานมืออาชีพ และมีประสบการณ์ในการบริการมาอย่างยาวนาน เรามั่นใจว่า คุณจะได้ลูกค้าอย่างรวดเร็วตามที่คาดหวัง เพียงให้เราได้ดูแล
                        </p>
                        <p class="mt-4">
                            ทั้งนี้ เราให้บริการแบบครบวงจร ตั้งแต่ทำการตลาด, หาลูกค้า, พาลูกค้าชมห้อง, จนถึงจบการเซ็นสัญญา  
                        </p>
                        <a href="{{ route('deposit') }}" class="cta-btn shadow"><strong>ฝากห้องเช่า/ฝากขาย</strong></a>
                        
                    </div>
                    
                </div>
                <div class="col-lg-5 order-1 order-lg-2 text-align-center">
                    <img src="{{ asset('assets_v2/images-news/ourservices-003.png') }}" class="images-fluid">
                </div>
            </div>
        </div>
    </section>                      
@endsection
@section('content-en')
    <section id="featurestoon" class="featurestoon" data-aos="fade-up">
        <div class="container" >      
            <div class="row align-items-center">
                <div class="col-lg-7 order-2 order-lg-1">
                    
                    <div class="mt-1 p-4 text-center">
                        <br class="d-block d-sm-none">
                        <h4>Increased opportunities to find <br>tenants/buyers quickly</h4>
                        <p class="mt-4">
                            Deposit your property information with us. through a variety of customer bases and marketing channels that we will help you market publicize your property with a team of experience and expertise to close the sale completely.
                        </p>
                        <a href="{{ route('deposit') }}" class="cta-btn shadow"><strong>Deposit Room</strong></a>
                    </div>
                    
                </div>
                <div class="col-lg-5 order-1 order-lg-2 text-align-center" >
                <img src="{{ asset('assets_v2/images-news/ourservices-001.png') }}" class="images-fluid">
                </div>
            </div>

            <div class="row align-items-center mt-5">
                <div class="col-lg-7 order-2 order-lg-2">
                    
                    <div class="mt-1 p-4 text-center">
                        <br class="d-block d-sm-none">
                        <h4>
                            Provide to find <br class="d-block d-sm-none">rental and selling condominium</h4>
                            <h5>(For our customers)</h5>
                        <p class="mt-4">
                            If you are looking for condos to rent - buy, whether for living or investment, we provide all types of condos for rent - sale according to your needs. We find beautiful rooms according to every need - every location in Bangkok and its vicinity. Facilitate every step You can get the room you want. Starting from selecting the best room according to the price and location you want, making an appointment with the owner of the room, taking you to see the real room.                             
                        </p>
                        <p class="mt-4">
                            So that you can see every room with a 360 degree view, make a rental-purchase contract and take care of your service throughout the contract. With a professional team that you can trust
                        </p>
                        <a class="cta-btn2 shadow" href="//line.me/R/ti/p/%40704uwpvc"><i class="fab fa-line shadow" ></i> ไลน์ @Scancondo</a>&nbsp;&nbsp; 
                        <a class="cta-btn3 shadow" href="https://api.whatsapp.com/message/QBXG7VN7RV6YB1">
                            <i class="fab fa-whatsapp shadow"></i> Whatsapp : Scancondo
                        </a>
                        
                    </div>
                    
                </div>
                <div class="col-lg-5 order-1 order-lg-1 text-align-center">
                    <img src="{{ asset('assets_v2/images-news/ourservices-002.png') }}" class="images-fluid">
                </div>
            </div> 
            
            <div class="row align-items-center mt-5">
                <div class="col-lg-7 order-2 order-lg-1">                        
                    <div class="mt-1 p-4 text-center">
                        <br class="d-block d-sm-none">
                        <h4>
                            Service for providing renters and buyers of condominium units</h4>
                            <h5> (For Owner)</h5>
                        <p class="mt-4">
                            If you have a condo want to find someone to rent - buy a room

                            Let us serve you with tenant recruitment services - buy to meet the customer group you want with many marketing materials and marketing channels that we have along with a professional team And with a long experience in service, we are confident that you will get customers as quickly as expected. Just let us take care
                        </p>
                        <p class="mt-4">
                            We provide a full range of services. Set up marketing, find customers, take customers to see the room, until the end of the contract. 
                        </p>
                        <a href="{{ route('deposit') }}" class="cta-btn shadow"><strong>Deposit a room for rent / consignment</strong></a>
                        
                    </div>
                    
                </div>
                <div class="col-lg-5 order-1 order-lg-2 text-align-center">
                    <img src="{{ asset('assets_v2/images-news/ourservices-003.png') }}" class="images-fluid">
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{ asset('plugins/select2/select2.full.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('plugins/swal/dist/sweetalert2.js') }}" charset="utf-8"></script>
    <script src="{{ asset('assets_v2/assets/js/main-slide.js') }}"></script>

@endsection

@section('script-th')
<script type="text/javascript">
    $(document).ready(function() {
        var want_type = $("input[name='want_type']:checked").val();
        if (want_type == 1) {
            $(".detail-sale").hide();
            $(".detail-rent").show();
        } else if (want_type == 2) {
            $(".detail-rent").hide();
            $(".detail-sale").show();
        } else {
            $(".detail-rent").show();
            $(".detail-sale").show();
        }
        $('textarea').summernote({
            height: "200px"
        });
    });
    $("input[name='want_type']").change(function(event) {
        var want_type = $("input[name='want_type']:checked").val();
        if (want_type == 1) {
            $(".detail-sale").hide();
            $(".detail-rent").show();
        } else if (want_type == 2) {
            $(".detail-rent").hide();
            $(".detail-sale").show();
        } else {
            $(".detail-rent").show();
            $(".detail-sale").show();
        }
    });
    $(".body .require-input select").select2({
        width: '100%',
        placeholder: 'พิมพ์แล้วเลือกโครงการที่คุณต้องการ',
        minimumInputLength: 2,
        language: {
            inputTooShort: function(a) {
                return "เลือกพิมพ์เฉพาะภาษาไทย หรืออังกฤษ อย่างใดอย่างหนึ่งเท่านั้น";
            }
        }
    });
    $(".body .require-input-detail .detail-input select").select2({
        minimumResultsForSearch: -1,
        width: '100%'
    });
    $("#want_submit").click(function(event) {

        var want_type = $('input[name=want_type]:checked').val();
        var condo_name = $("#condo_name").val();
        var want_room_style = $("#want_room_style").val();
        var want_room_size = RemoveComma($("#want_room_size").val());
        var want_price_rent = RemoveComma($("#want_price_rent").val());
        var want_time_period = $("#want_time_period").val();
        var want_time_stay = $("#want_time_stay").val();
        var want_reason = $("#want_reason").val();
        var want_price_sale = RemoveComma($("#want_price_sale").val());
        var want_detail = $("#want_detail").val();
        var want_name = $("#want_name").val();
        var want_phone = $("#want_phone").val();
        var want_line = $("#want_line").val();
        var want_email = $("#want_email").val();

        if ((want_type == 1 && (want_price_rent <= 0 || want_time_stay == 0)) || (want_type == 2 && (
                want_price_sale <= 0 || want_reason == 0)) || condo_name == "" || want_room_style == 0 ||
            want_room_size <= 0 || want_time_period == 0 || CheckHasValue(want_name) == 0 || CheckHasValue(
                want_phone) == 0 || CheckHasValue(want_line) == 0 || CheckHasValue(want_email) == 0) {

            Swal.fire(
                'ไม่สามารถดำเนินการได้',
                'กรุณากรอกข้อมูลให้ครบถ้วน',
                'warning'
            );

        } else {

            if (want_type == 1) {
                want_price_sale = 0;
            } else if (want_type == 2) {
                want_price_rent = 0;
            }

            Swal.fire({
                title: 'กรุณายืนยันการดำเนินการ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ยืนยัน',
                cancelButtonText: 'ยกเลิก'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('wantSave') }}",
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            want_type: want_type,
                            condo_name: condo_name,
                            want_room_style: want_room_style,
                            want_room_size: want_room_size,
                            want_price_rent: want_price_rent,
                            want_time_period: want_time_period,
                            want_time_stay: want_time_stay,
                            want_reason: want_reason,
                            want_price_sale: want_price_sale,
                            want_detail: want_detail,
                            want_name: want_name,
                            want_phone: want_phone,
                            want_line: want_line,
                            want_email: want_email
                        },
                        success: function(response) {
                            if (response.status == 1) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Scancondo จะรีบติดต่อกลับโดยด่วน ขอบพระคุณค่ะ',
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then((result) => {
                                    location.reload();
                                })
                            } else {
                                Swal.fire(
                                    'ดำเนินการไม่สำเร็จ!',
                                    'กรุณาติดต่อเจ้าหน้าที่',
                                    'error'
                                );
                            }
                        }
                    });
                }
            })

        }

    });
</script>
@endsection

@section('script-en')
<script type="text/javascript">
    $(document).ready(function() {
        var want_type = $("input[name='want_type']:checked").val();
        if (want_type == 1) {
            $(".detail-sale").hide();
            $(".detail-rent").show();
        } else if (want_type == 2) {
            $(".detail-rent").hide();
            $(".detail-sale").show();
        } else {
            $(".detail-rent").show();
            $(".detail-sale").show();
        }
        $('textarea').summernote({
            height: "200px"
        });
    });
    $("input[name='want_type']").change(function(event) {
        var want_type = $("input[name='want_type']:checked").val();
        if (want_type == 1) {
            $(".detail-sale").hide();
            $(".detail-rent").show();
        } else if (want_type == 2) {
            $(".detail-rent").hide();
            $(".detail-sale").show();
        } else {
            $(".detail-rent").show();
            $(".detail-sale").show();
        }
    });
    $(".body .require-input select").select2({
        width: '100%',
        placeholder: 'พิมพ์แล้วเลือกโครงการที่คุณต้องการ',
        minimumInputLength: 2,
        language: {
            inputTooShort: function(a) {
                return "เลือกพิมพ์เฉพาะภาษาไทย หรืออังกฤษ อย่างใดอย่างหนึ่งเท่านั้น";
            }
        }
    });
    $(".body .require-input-detail .detail-input select").select2({
        minimumResultsForSearch: -1,
        width: '100%'
    });
    $("#want_submit").click(function(event) {

        var want_type = $('input[name=want_type]:checked').val();
        var condo_name = $("#condo_name").val();
        var want_room_style = $("#want_room_style").val();
        var want_room_size = RemoveComma($("#want_room_size").val());
        var want_price_rent = RemoveComma($("#want_price_rent").val());
        var want_time_period = $("#want_time_period").val();
        var want_time_stay = $("#want_time_stay").val();
        var want_reason = $("#want_reason").val();
        var want_price_sale = RemoveComma($("#want_price_sale").val());
        var want_detail = $("#want_detail").val();
        var want_name = $("#want_name").val();
        var want_phone = $("#want_phone").val();
        var want_line = $("#want_line").val();
        var want_email = $("#want_email").val();

        if ((want_type == 1 && (want_price_rent <= 0 || want_time_stay == 0)) || (want_type == 2 && (
                want_price_sale <= 0 || want_reason == 0)) || condo_name == "" || want_room_style == 0 ||
            want_room_size <= 0 || want_time_period == 0 || CheckHasValue(want_name) == 0 || CheckHasValue(
                want_phone) == 0 || CheckHasValue(want_line) == 0 || CheckHasValue(want_email) == 0) {

            Swal.fire(
                'ไม่สามารถดำเนินการได้',
                'กรุณากรอกข้อมูลให้ครบถ้วน',
                'warning'
            );

        } else {

            if (want_type == 1) {
                want_price_sale = 0;
            } else if (want_type == 2) {
                want_price_rent = 0;
            }

            Swal.fire({
                title: 'กรุณายืนยันการดำเนินการ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ยืนยัน',
                cancelButtonText: 'ยกเลิก'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('wantSave') }}",
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            want_type: want_type,
                            condo_name: condo_name,
                            want_room_style: want_room_style,
                            want_room_size: want_room_size,
                            want_price_rent: want_price_rent,
                            want_time_period: want_time_period,
                            want_time_stay: want_time_stay,
                            want_reason: want_reason,
                            want_price_sale: want_price_sale,
                            want_detail: want_detail,
                            want_name: want_name,
                            want_phone: want_phone,
                            want_line: want_line,
                            want_email: want_email
                        },
                        success: function(response) {
                            if (response.status == 1) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Scancondo จะรีบติดต่อกลับโดยด่วน ขอบพระคุณค่ะ',
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then((result) => {
                                    location.reload();
                                })
                            } else {
                                Swal.fire(
                                    'ดำเนินการไม่สำเร็จ!',
                                    'กรุณาติดต่อเจ้าหน้าที่',
                                    'error'
                                );
                            }
                        }
                    });
                }
            })

        }

    });
</script>
@endsection