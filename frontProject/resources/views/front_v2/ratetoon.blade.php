@extends('layouts_v2.singlepage')
{{-- ไทย --}}
@section('title-th', 'Scancondo.com | วิธีชำระเงิน')
@section('facebook-title-th', 'Scancondo.com | วิธีชำระเงิน')

@section('title-en', 
'Payment Methods for scancondo.com - Secure and Convenient Options for Your Property Transactions')
@section('facebook-title-en', 
'Payment Methods for scancondo.com - Secure and Convenient Options for Your Property Transactions')

@section('meta-description-th','วิธีการชำระเงินสำหรับซื้อ/ขาย/เช่าคอนโดบนเว็บไซต์ Scancondo.com พบกับข้อมูล และแนวทางการชำระเงินที่ครบถ้วน และสะดวกสบาย')
@section('meta-description-en','Explore the latest real estate listings and properties for sale, rent and for sale by owner on scancondo.com. Find your dream home with our comprehensive property search, expert advice and market analysis. 
Connect with top real estate agents and get the best deals on your next property purchase or rental with Scancondo.com')

@section('meta-keywords-th','ซื้อ, ขาย, เช่า, คอนโด, buy, rent, sell, forsale, condo, condominium, agent, agency, property, bangkok, ขายดาวน์, กรุงเทพ, นนทบุรี, ปทุมธานี, สมุทรปราการ, bts, mrt, airport link, สุขุมวิท, sukhumvit, down payment, room, available, location, บีทีเอส, เอ็มอาร์ที, ใกล้รถไฟฟ้า, สถานี, แผนที่, map, ห้องว่าง')
@section('meta-keywords-en','real estate prices, buying, selling, renting, property inquiries, real estate market, property value, property investment, real estate agents, real estate listings, real estate market trends, 
property buying guide, property selling guide, rental property guide, real estate market analysis')

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
            <h2>วิธีชำระเงิน</h2>
            <ol>
                <li><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                <li>วิธีชำระเงิน</li>
                <li>
                    <a href="{{ route('home') }}/assets_v2/pdf/bookbank.pdf" target="_blank" rel="nofollow">
                        ดาวน์โหลด PDF วิธีชำระเงิน
                    </a>
                </li>
            </ol>
        </div>

        </div>
    </section>
@endsection
@section('breadcrumbs-en')
    <section class="breadcrumbs d-none d-xl-block">
        <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Payment method</h2>
            <ol>
                <li><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                <li>Payment method</li>
                <li>
                    <a href="{{ route('home') }}/assets_v2/pdf/bookbank.pdf" target="_blank" rel="nofollow">
                        Download PDF Payment Guide
                    </a>
                </li>
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
                <div class="col-lg-12 order-2 order-lg-1">                    
                    <div class="mt-1 p-4 text-center">
                        <br class="d-block d-sm-none">
                        <h4>วิธีชำระเงิน <br class="d-block d-sm-none">
                            (Payment Method)</h4>
                        <p class="mt-4 text-center">
                            ** เมื่อท่านชำระเงินเรียบร้อยแล้ว กรุณาส่งเอกสารการชำระเงิน (pay in slip) กลับมาในไลน์ @scancondo พร้อมระบุชื่อ - นามสกุล และเบอร์โทรติดต่อกลับด้วยค่ะ<br>
                            <br class="d-block d-sm-none">
                            หากมีข้อสงสัย สามารถติดต่อผู้จัดการโดยตรง คุณเก่ง ได้ที่เบอร์ 063-190-6556
                        </p>
                        
                    </div>
                    
                </div>
            </div>

            <div class="row align-items-center mt-5">
                <div class="col-lg-5 order-2 order-lg-2">
                    
                    <div class="mt-1 p-4 text-center">
                        <br class="d-block d-sm-none">
                        <h4>สแกน QR CODE
                            </h4>
                            <h5>(QR payment method)</h5>
                            {{-- slide --}}
                                                    
                                    <div class="carousel-item-a swiper-slide">
                                        <p class="mt-2 text-center">
                                            <img src="{{ asset('assets_v2/images-news/payment-002.png') }}" class="images-fluid" style="width: 70%"><br>  
                                            <b>ท่านสามารถเลือกวิธีการชำระเงิน<br> โดยการสแกนคิวอาร์โค้ดได้เลยค่ะ <br class="d-block d-sm-none">
                                                สะดวก รวดเร็ว</b><br>
                                        </p>                                        
                                    </div>
                                
                            
                            {{-- slide --}}
                    </div>
                    
                </div>
                <div class="col-lg-7 order-1 order-lg-1 text-align-center">
                    <img src="{{ asset('assets_v2/images-news/payment-001.png') }}" class="images-fluid">
                </div>
            </div>
            
            

            <div class="row align-items-center mt-1">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="row align-items-center mt-5">
                        <div class="col-lg-12 order-2 order-lg-1">                    
                            <div class="mt-1 p-4 text-center">
                                <br class="d-block d-sm-none">
                                <h4>โอนผ่านเข้าบัญชีบริษัท <br class="d-block d-sm-none">
                                    (Bank Transfer)</h4>
                                <p class="mt-4 text-center">
                                    ท่านสามารถเลือกวิธีการชำระเงิน โดยโอนเงินผ่านเคาน์เตอร์ธนาคาร 
                                    หรือ ATM<br>
                                    ซึ่งทางเรามีให้เลือกหลากหลายธนาคาร
                                    เพื่ออำนวยความสะดวกให้ท่าน โดยใช้ชื่อบัญชีนิติบุคคลในนาม
                                    <br class="d-block d-sm-none"> "บริษัท บิลเฟต จำกัด" เท่านั้น
                                </p>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 order-2 order-lg-1">
                    
                    <div class="mt-1 p-4 text-center">
                        <br class="d-block d-sm-none">
                                                    
                                    <div class="carousel-item-a swiper-slide">
                                        <p class="mt-2 text-center">
                                            
                                            <ul class="banktoon list-group">
                                                <li class="list-group-item">
                                                    <h4 style="font-size: 1.4em">ธนาคารกสิกรไทย
                                                    </h4>
                                                    <h5>( K-Bank )</h5>
                                                </li>
                                                <li class="list-group-item">
                                                    <img src="{{ asset('assets_v2/images-news/bank-002.png') }}" class="images-fluid p-1" ><br>   
                                                </li>
                                                <li class="list-group-item"><b>เลขที่บัญชี : 689-2-05114-1</b></li>
                                                <li class="list-group-item">ชื่อบัญชี : บริษัท บิลเฟต จำกัด</li>
                                                <li class="list-group-item">สาขา : รามคำแหง 2</li>
                                                <li class="list-group-item">ประเภท : ออมทรัพย์</li>
                                            </ul>  
                                        </p>                                        
                                    </div>
                    </div>
                    
                </div>                

                <div class="col-lg-3 order-2 order-lg-1">
                    
                    <div class="mt-1 p-4 text-center">
                        <br class="d-block d-sm-none">
                        
                            
                                                    
                                    <div class="carousel-item-a swiper-slide">
                                        <p class="mt-2 text-center">
                                            
                                            <ul class="banktoon list-group">
                                                <li class="banktoon list-group-item">
                                                    <h4 style="font-size: 1.4em">ธนาคารไทยพานิชย์ 
                                                    </h4>
                                                    <h5>( SCB )</h5>
                                                </li>
                                                <li class="list-group-item">
                                                    <img src="{{ asset('assets_v2/images-news/bank-004.png') }}" class="images-fluid p-1" ><br>  
                                                </li>
                                                
                                                <li class="list-group-item"><b>เลขที่บัญชี : 154-230762-1</b></li>
                                                <li class="list-group-item">ชื่อบัญชี : บริษัท บิลเฟต จำกัด</li>
                                                <li class="list-group-item">สาขา : รามคำแหง 2</li>
                                                <li class="list-group-item">ประเภท : ออมทรัพย์</li>
                                            </ul>  
                                        </p>                                         
                                    </div>
        
                    </div>
                    
                </div>
                
                
            </div> 


            

        </div>
    </section>                    
@endsection
@section('content-en')
    <section id="featurestoon" class="featurestoon" data-aos="fade-up">
        <div class="container" >      
            <div class="row align-items-center">
                <div class="col-lg-12 order-2 order-lg-1">                    
                    <div class="mt-1 p-4 text-center">
                        <br class="d-block d-sm-none">
                        <h4>Payment method 
                            {{-- <br class="d-block d-sm-none">
                            (Payment Method) --}}
                        </h4>
                        <p class="mt-4 text-center">
                            ** Once you have completed the payment, please send back the payment document (pay in slip) on our Line 
                            <a href="//line.me/R/ti/p/%40704uwpvc" target="_blank" rel="nofollow">@scancondo</a> along with your name, surname, and contact number for our reference.
                            <br>
                            <br class="d-block d-sm-none">
                            If you have any questions, please contact the manager directly, Mr. Keng at 063-190-6556
                        </p>
                        
                    </div>
                    
                </div>
            </div>

            <div class="row align-items-center mt-5">
                <div class="col-lg-5 order-2 order-lg-2">
                    
                    <div class="mt-1 p-4 text-center">
                        <br class="d-block d-sm-none">
                        <h4>Scan QR code
                            </h4>
                            <h5>(QR payment method)</h5>
                            {{-- slide --}}
                                                    
                                    <div class="carousel-item-a swiper-slide">
                                        <p class="mt-2 text-center">
                                            <img src="{{ asset('assets_v2/images-news/payment-002.png') }}" class="images-fluid" style="width: 70%"><br>  
                                            <b>You could select the payment method<br>  by scanning the QR code directly. <br class="d-block d-sm-none">
                                                It's Easy and fast.</b><br>
                                        </p>                                        
                                    </div>
                                
                            
                            {{-- slide --}}
                    </div>
                    
                </div>
                <div class="col-lg-7 order-1 order-lg-1 text-align-center">
                    <img src="{{ asset('assets_v2/images-news/payment-001.png') }}" class="images-fluid">
                </div>
            </div>
            
            

            <div class="row align-items-center mt-1">

                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="row align-items-center mt-5">
                        <div class="col-lg-12 order-2 order-lg-1">                    
                            <div class="mt-1 p-4 text-center">
                                <br class="d-block d-sm-none">
                                <h4>Transfer via company account. <br >
                                    (Bank Transfer)</h4>
                                <p class="mt-4 text-center">
                                    You can choose the payment method by transferring money through the bank counter or ATM, we have various options for banks for your convenience. Please use the account name of "Billfett Co., Ltd" only.
                                </p>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 order-2 order-lg-1">
                    
                    <div class="mt-1 p-4 text-center">
                        <br class="d-block d-sm-none">
                                                    
                                    <div class="carousel-item-a swiper-slide">
                                        <p class="mt-2 text-center">
                                            
                                            <ul class="banktoon list-group">
                                                <li class="list-group-item">
                                                    <h4 style="font-size: 1.4em">Kasikorn Bank
                                                    </h4>
                                                    <h5>( K-Bank )</h5>
                                                </li>
                                                <li class="list-group-item">
                                                    <img src="{{ asset('assets_v2/images-news/bank-002.png') }}" class="images-fluid p-1" ><br>   
                                                </li>
                                                <li class="list-group-item"><b>Account ID : 689-2-05114-1</b></li>
                                                <li class="list-group-item">Account Name : Billfett Co., Ltd</li>
                                                <li class="list-group-item">Branch : Ramkhamhaeng 2</li>
                                                <li class="list-group-item">Type : Savings</li>
                                            </ul>  
                                        </p>                                        
                                    </div>
                    </div>
                    
                </div>                

                <div class="col-lg-3 order-2 order-lg-1">
                    
                    <div class="mt-1 p-4 text-center">
                        <br class="d-block d-sm-none">
                        
                            
                                                    
                                    <div class="carousel-item-a swiper-slide">
                                        <p class="mt-2 text-center">
                                            
                                            <ul class="banktoon list-group">
                                                <li class="banktoon list-group-item">
                                                    <h4 style="font-size: 1.1em">Siam Commercial Bank 
                                                    </h4>
                                                    <h5>( SCB )</h5>
                                                </li>
                                                <li class="list-group-item">
                                                    <img src="{{ asset('assets_v2/images-news/bank-004.png') }}" class="images-fluid p-1" ><br>  
                                                </li>
                                                
                                                <li class="list-group-item"><b>Account ID : 154-230762-1</b></li>
                                                <li class="list-group-item">Account Name : Billfett Co., Ltd</li>
                                                <li class="list-group-item">Branch : Ramkhamhaeng 2</li>
                                                <li class="list-group-item">Type : Savings</li>
                                            </ul>  
                                        </p>                                         
                                    </div>
        
                    </div>
                    
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