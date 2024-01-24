@extends('layouts_v2.singlepage')
{{-- ไทย --}}
@section('title-th', 'Scancondo : บริการจัดหาคอนโดเพื่อเช่าหรือซื้อ')
@section('title-en', 'Scancondo | Find condominium for rent | Buy condo in Bangkok | Room in prime area near Sukhumvit BTS or MRT')

@section('meta-description-th','Scancondo ตัวแทน (Agent) ให้บริการหาห้อง หาเช่า คอนโดในทำเลที่ดี ห้องสวย
พร้อมเข้าอยู่ ตามความต้องการและงบประมาณของคุณผ่านระบบฐานข้อมูลขนาดใหญ่ของเรา')
@section('meta-description-en','Find your room easily with Scancondo.com. There are a lot of great room you can choose. Great condominium, location, facilities and good room decoration you will get one stop service for your best benefit with us.')

@section('facebook-title-th', 'Scancondo : บริการจัดหาคอนโดเพื่อเช่าหรือซื้อ')
@section('facebook-title-en', 'Scancondo | Find condominium for rent | Buy condo in Bangkok | Room in prime area near Sukhumvit BTS or MRT')

@section('meta-keywords-th','ซื้อ, ขาย, เช่า, คอนโด, buy, rent, sell, forsale, condo, condominium, agent, agency, property, bangkok, ขายดาวน์, กรุงเทพ, นนทบุรี, ปทุมธานี, สมุทรปราการ, bts, mrt, airport link, สุขุมวิท, sukhumvit, down payment, room, available, location, บีทีเอส, เอ็มอาร์ที, ใกล้รถไฟฟ้า, สถานี, แผนที่, map, ห้องว่าง')
@section('meta-keywords-en','2-bedroom condo, accommodation for rent, buy, sell, cheap prices, near area, vicinity and location')

@section('head-tag')
    <link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/swal/dist/sweetalert2.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/image-uploader/image-uploader.min.css') }}">
    <link href="{{ asset('assets_v2/assets/css/style-slide.css') }}" rel="stylesheet"> 
@endsection


@section('link_th',$url)

@section('content-th')
    <section id="herozzz">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" 
            style="background-image: url({{ asset('assets_v2/images/slide/slide-want-1.webp') }});">
            <div class="carousel-container">
                <div class="carousel-content animate__animated animate__fadeInUp">
                    <div class="container">
                        <div class="row">
                        <div class="col-sm">
                            <h2>หากคุณกำลังหา <span>เช่าคอนโด / ซื้อคอนโด</span></h2>
                            <p>
                                เพียงแจ้งความต้องการของคุณผ่าน Line@  หรือจะกรอกรายละเอียดผ่านแบบฟอร์มด้านล่างก็ได้ค่ะ 
                                มีข้อสงสัยติดต่อ 02-728-4533 ขอบคุณค่ะ
            
                            </p>
                        </div>
                        <div class="col-sm">
                            <div class="text-center">
                                <a href="//line.me/R/ti/p/%40704uwpvc" class="btn-get-started" target="_blank" rel="noopener">
                                <img src="{{ asset('assets_v2/images/icon/qrcode-scancondo.png') }}" >
                            </a></div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>


            <!-- Slide 4 -->
            <div class="carousel-item" style="background-image: url({{ asset('assets_v2/images/slide/slide-3.webp') }});">
                <div class="carousel-container">
                <div class="carousel-content animate__animated animate__fadeInUp">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <div class="text-center">
                                    <a href="https://youtu.be/Ltf3MU8bwRw" class="btn-get-started" target="_blank" rel="noopener">
                                    <img src="{{ asset('assets_v2/images/icon/youtube.webp') }}" >
                                </a>
                                
                                </div>
                            </div>
                            <div class="col-sm">
                                <h2>เพียงไม่กี่ขั้นตอน <span>ก็หาผู้เช่า/ผู้ซื้อได้ง่ายๆ</span></h2>
                            <p>
                                เพียงคุณดูขั้นตอนจากคลิปแนะนำสั้นๆ ด้านข้างนี้ ก็สามารถลงประกาศหาเช่า /หาซื้อ
                                ห้องได้เอง หากคุณเป็นเจ้าของห้องต้องการปล่อยเช่า หรือ ขาย  ลงประกาศกับเรา
                                ลูกค้าสามารถเห็นประกาศของคุณทุกแพลตฟอร์ม ไม่ว่าจะเป็น Facebook,Line,Instagram,Tiktok,Twitter
                                
                
                            </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        </div>
    </section>

    <div class="require-page">
        <div class="require-content">
            <div class="center">
                <img src="{{ asset('assetstoon/speed/assets/img/icon/want-line.gif') }}" class="img-fluid pb-2" alt="">
                <div>
                    <h1 class="f-theme">ต้องการเช่า / ซื้อ</h1>
                </div>
            </div>
            <form action="{{ route('wantSave') }}" id="formData" enctype="multipart/form-data" method="post">
                @csrf
                    <div class="require-form">
                        <div class="header">
                            ( ส่วนที่ 1 ) รายละเอียดเกี่ยวกับห้องชุด
                        </div>

                        <div class="body">
                            <div class="require-input border-right">
                                <label for="" class="title">
                                    ระบุความต้องการของคุณ<br>
                                    <small class="f-theme">(เฉพาะคอนโดมิเนียมกรุงเทพและปริมณฑลเท่านั้น)</small>
                                </label>
                                <div class="input-radio">
                                    <label class="radio">ต้องการเช่า
                                        <input type="radio" name="want_type" value="1" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="input-radio">
                                    <label class="radio">ต้องการซื้อ
                                        <input type="radio" name="want_type" value="2">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="require-input">
                                <label for="" class="title">
                                    ใส่ชื่อโครงการคอนโดหรือทำเลที่คุณสนใจ และต้องการเช่าห้อง
                                </label>
                                <input type="text" name="condo_name" id="condo_name"  placeholder="ใส่ชื่อโครงการคอนโดหรือทำเลที่คุณสนใจ และต้องการเช่าห้อง">
                            </div>
                            <div class="require-input-detail">
                                <label for="" class="title">
                                    ใส่รายละเอียดข้อมูลห้องที่คุณต้องการเช่าให้ครบถ้วน
                                </label>
                                <div class="detail-input">
                                    <select class="" name="want_room_style" id="want_room_style">
                                        <option value="0" selected>จำนวนห้องนอน</option>
                                        <option value="7">Studio</option>
                                        <option value="1">1 ห้องนอน</option>
                                        <option value="2">2 ห้องนอน</option>
                                        <option value="3">3 ห้องนอน</option>
                                        <option value="4">4 ห้องนอน</option>
                                        <option value="5">5 ห้องนอน</option>
                                        <option value="6">6 ห้องนอน</option>
                                        <option value="8">Penthouse</option>
                                    </select>
                                </div>
                                <div class="detail-input">
                                    <input type="text" name="want_room_size" id="want_room_size" class="input-number"
                                        value="" placeholder="ระบุขนาดห้องที่ต้องการ (ตร.ม.)">
                                </div>
                                <div class="detail-input detail-rent">
                                    <input type="text" name="want_price_rent" id="want_price_rent" class="input-number"
                                        value="" placeholder="ราคาค่าเช่า/เดือน ไม่เกิน (บาท)">
                                </div>
                                <div class="detail-input">
                                    <select class="" name="want_time_period" id="want_time_period">
                                        <option value="0" selected>ช่วงเวลาที่คุณต้องการเช่า/ซื้อ</option>
                                        <option value="1">พร้อมทำสัญญาและเข้าอยู่ทันที</option>
                                        <option value="2">15 วัน</option>
                                        <option value="3">1 เดือน</option>
                                        <option value="4">2 เดือน</option>
                                        <option value="5">3 เดือน</option>
                                    </select>
                                </div>
                                <div class="detail-input detail-rent">
                                    <select class="" name="want_time_stay" id="want_time_stay">
                                        <option value="0" selected>ระยะเวลาที่คุณต้องการเข้าพัก</option>
                                        <option value="1">6 เดือน</option>
                                        <option value="2">9 เดือน</option>
                                        <option value="3">1 ปี</option>
                                        <option value="4">2 ปี</option>
                                        <option value="5">3 ปี</option>
                                        <option value="6">4 ปี</option>
                                    </select>
                                </div>
                                <div class="detail-input detail-sale">
                                    <select class="" name="want_reason" id="want_reason">
                                        <option value="0" selected>เหตุผลที่คุณต้องการซื้อห้อง</option>
                                        <option value="1">อยู่อาศัยเอง</option>
                                        <option value="2">ลงทุน / เก็งกำไร</option>
                                        <option value="3">ลงทุน / ปล่อยเช่า</option>
                                    </select>
                                </div>
                                <div class="detail-input detail-sale">
                                    <input type="text" name="want_price_sale" id="want_price_sale" class="input-number"
                                        value="" placeholder="ราคาที่ต้องการไม่เกิน (บาท)">
                                </div>

                            </div>
                            <div class="require-input-detail">
                                <label for="" class="title">
                                    ระบุความต้องการพิเศษหรือสิ่งที่คุณต้องการเพิ่มเติม (ถ้ามี)
                                </label>
                                <textarea name="want_detail" id="want_detail" class="form-control" rows="8" cols="80"></textarea>
                            </div>
                        </div>

                    </div>

                    <div class="require-form">
                        <div class="header">
                            ( ส่วนที่ 2 ) รายละเอียดเกี่ยวกับผู้ต้องการเช่า/ซื้อ
                        </div>
                        <div class="body">
                            <div class="require-input-customer">
                                <label for="">ชื่อ-นามสกุล</label>
                                <input type="text" name="want_name" id="want_name" value="" placeholder="">
                            </div>
                            <div class="require-input-customer">
                                <label for="">เบอร์โทรศัพท์</label>
                                <input type="text" name="want_phone" id="want_phone" value="" placeholder="">
                            </div>
                            <div class="require-input-customer">
                                <label for="">Line ID</label>
                                <input type="text" name="want_line" id="want_line" value="" placeholder="">
                            </div>
                            <div class="require-input-customer">
                                <label for="" class="title">E-mail</label>
                                <input type="text" name="want_email" id="want_email" value="" placeholder="">
                            </div>
                            <div class="require-input-remark">
                                เจ้าหน้าที่ของเราจะรีบดำเนินการตามความต้องการ และจะติดต่อกลับคุณโดยเร็วที่สุด <br class="hide-sm">
                                เพื่อยืนยันข้อมูลและสอบถามรายละเอียดเพิ่มเติมต่างๆ ภายใน 24 ชั่วโมง ขอบพระคุณค่ะ
                            </div>
                            <div class="require-input-button">
                                <button type="button" name="want_submit" id="want_submit">
                                    <i class="fas fa-paper-plane blink"></i> ส่งข้อมูล</button>
                            </div>
                        </div>
                    </div>
            </form>

        </div>
    </div>                            
@endsection
@section('content-en')
    <section id="herozzz">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" 
            style="background-image: url({{ asset('assets_v2/images/slide/slide-want-1.webp') }});">
            <div class="carousel-container">
                <div class="carousel-content animate__animated animate__fadeInUp">
                    <div class="container">
                        <div class="row">
                        <div class="col-sm">
                            <h2>Looking to rent / buy<span> a condominium?</span></h2>
                            <p>
                                just inform us of your needs through our Line Official @Scancondo or fill out the form below. Our professional team will quickly follow up on your request within 24 hours. Thank you.
            
                            </p>
                        </div>
                        <div class="col-sm">
                            <div class="text-center">
                                <a href="//line.me/R/ti/p/%40704uwpvc" class="btn-get-started" target="_blank" rel="noopener">
                                <img src="{{ asset('assets_v2/images/icon/qrcode-scancondo.png') }}" >
                            </a></div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>


            <!-- Slide 4 -->
            <div class="carousel-item" style="background-image: url({{ asset('assets_v2/images/slide/slide-3.webp') }});">
                <div class="carousel-container">
                <div class="carousel-content animate__animated animate__fadeInUp">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <div class="text-center">
                                    <a href="https://youtu.be/Ltf3MU8bwRw" class="btn-get-started" target="_blank" rel="noopener">
                                    <img src="{{ asset('assets_v2/images/icon/youtube.webp') }}" >
                                </a>
                                
                                </div>
                            </div>
                            <div class="col-sm">
                                <h2>Just a few steps, and you can easily  <span>find a tenant / buyer.</span></h2>
                            <p>
                                Just by watching the step-by-step guide in the short tutorial on this side, you can advertise for rental/purchase of a room by yourself. If you are a room owner looking to rent out or sell, you can advertise with us. Customers will be able to see your advertisements on all platforms, including Facebook, Line, Instagram, TikTok, and Twitter.
                            </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        </div>
    </section>

    <div class="require-page">
        <div class="require-content">
            <div class="center">
                <img src="{{ asset('assetstoon/speed/assets/img/icon/want-line.gif') }}" class="img-fluid pb-2" alt="">
                <div>
                    <h1 class="f-theme">Looking to rent / buy</h1>
                </div>
            </div>
            <form action="{{ route('wantSave') }}" id="formData" enctype="multipart/form-data" method="post">
                @csrf
                    <div class="require-form">
                        <div class="header">
                            (Part 1) Details about the room set
                        </div>

                        <div class="body">
                            <div class="require-input border-right">
                                <label for="" class="title">
                                    Please specify your requirements<br>
                                    <small class="f-theme">(Only for condominiums in Bangkok metropolitan area)</small>
                                </label>
                                <div class="input-radio">
                                    <label class="radio">Looking to rent
                                        <input type="radio" name="want_type" value="1" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="input-radio">
                                    <label class="radio">Looking to buy
                                        <input type="radio" name="want_type" value="2">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="require-input">
                                <label for="" class="title">
                                    Please Enter condo name / location
                                </label>
                                <input type="text" name="condo_name" id="condo_name"  placeholder="Please Enter condo name / location">
                            </div>
                            <div class="require-input-detail">
                                <label for="" class="title">
                                    Please provide complete information about the room you would like to rent
                                </label>
                                <div class="detail-input">
                                    <select class="" name="want_room_style" id="want_room_style">
                                        <option value="0" selected>Room Type</option>
                                        <option value="7">Studio</option>
                                        <option value="1">1 Bedroom</option>
                                        <option value="2">2 Bedrooms</option>
                                        <option value="3">3 Bedrooms</option>
                                        <option value="4">4 Bedrooms</option>
                                        <option value="5">5 Bedrooms</option>
                                        <option value="6">6 Bedrooms</option>
                                        <option value="8">Penthouse</option>
                                    </select>
                                </div>
                                <div class="detail-input">
                                    <input type="text" name="want_room_size" id="want_room_size" class="input-number"
                                        value="" placeholder="Required room area (sq.m.)">
                                </div>
                                <div class="detail-input detail-rent">
                                    <input type="text" name="want_price_rent" id="want_price_rent" class="input-number"
                                        value="" placeholder="Rent/monthly price not exceeding (Baht)">
                                </div>
                                <div class="detail-input">
                                    <select class="" name="want_time_period" id="want_time_period">
                                        <option value="0" selected>time period you want to rent/buy</option>
                                        <option value="1">Ready to contact / Trade Immediately</option>
                                        <option value="2">15 Days</option>
                                        <option value="3">1 Month</option>
                                        <option value="4">2 Months</option>
                                        <option value="5">3 Months</option>
                                    </select>
                                </div>
                                <div class="detail-input detail-rent">
                                    <select class="" name="want_time_stay" id="want_time_stay">
                                        <option value="0" selected>How long you want to stay</option>
                                        <option value="1">6 Months</option>
                                        <option value="2">9 Months</option>
                                        <option value="3">1 Year</option>
                                        <option value="4">2 Years</option>
                                        <option value="5">3 Years</option>
                                        <option value="6">4 Years</option>
                                    </select>
                                </div>
                                <div class="detail-input detail-sale">
                                    <select class="" name="want_reason" id="want_reason">
                                        <option value="0" selected>Reason for wanting to buy the room</option>
                                        <option value="1">Own use</option>
                                        <option value="2">Investment</option>
                                        <option value="3">Renting out</option>
                                    </select>
                                </div>
                                <div class="detail-input detail-sale">
                                    <input type="text" name="want_price_sale" id="want_price_sale" class="input-number"
                                        value="" placeholder="Desired price not exceeding (Baht)">
                                </div>

                            </div>
                            <div class="require-input-detail">
                                <label for="" class="title">
                                    Special requirements or additional things you would like (if any)
                                </label>
                                <textarea name="want_detail" id="want_detail" class="form-control" rows="8" cols="80"></textarea>
                            </div>
                        </div>

                    </div>

                    <div class="require-form">
                        <div class="header">
                            (Part 2) Details about the person looking to rent/buy
                        </div>
                        <div class="body">
                            <div class="require-input-customer">
                                <label for="">Name-Surname</label>
                                <input type="text" name="want_name" id="want_name" value="" placeholder="">
                            </div>
                            <div class="require-input-customer">
                                <label for="">Telephone Number</label>
                                <input type="text" name="want_phone" id="want_phone" value="" placeholder="">
                            </div>
                            <div class="require-input-customer">
                                <label for="">Line ID</label>
                                <input type="text" name="want_line" id="want_line" value="" placeholder="">
                            </div>
                            <div class="require-input-customer">
                                <label for="" class="title">E-mail</label>
                                <input type="text" name="want_email" id="want_email" value="" placeholder="">
                            </div>
                            <div class="require-input-remark">
                                Our staff will promptly follow up on your request and will contact you as soon 
                                as possible to confirm the details and ask any 
                                additional questions. Within 24 hours. Thank you.<br class="hide-sm">

                            </div>
                            <div class="require-input-button">
                                <button type="button" name="want_submit" id="want_submit">
                                    <i class="fas fa-paper-plane blink"></i> ส่งข้อมูล</button>
                            </div>
                        </div>
                    </div>
            </form>

        </div>
    </div>
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