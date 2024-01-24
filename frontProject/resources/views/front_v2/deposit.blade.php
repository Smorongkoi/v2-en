@extends('layouts_v2.singlepage')
{{-- ไทย --}}
@section('title-th', 'Scancondo : ตัวแทนอสังหาฯ รับฝากห้อง ฝากคอนโดปล่อยเช่า ฝากขายและทำการตลาด')
@section('facebook-title-th', 'Scancondo : ตัวแทนอสังหาฯ รับฝากห้อง ฝากคอนโดปล่อยเช่า ฝากขายและทำการตลาด')

@section('title-en', 
'Scancondo | Deposit room for rent or for sale | Condominium agent in Bangkok | Marketing service to find buyer and tenant')
@section('facebook-title-en', 
'Scancondo | Deposit room for rent or for sale | Condominium agent in Bangkok | Marketing service to find buyer and tenant')

@section('meta-description-th',
'Scancondo ตัวแทน (Agent) ให้บริการรับฝากห้อง รับฝากคอนโดในกรุงเทพและปริมณฑลเพื่อทำการตลาด หาลูกค้า ปล่อยเช่าคอนโด ผ่านเครือข่ายของทางเรา')
@section('meta-description-en',
'Deposit room with us to our large database. We will advertise your room in our network via many website to reach target customer.')

@section('meta-keywords-th','ซื้อ, ขาย, เช่า, คอนโด, buy, rent, sell, forsale, condo, condominium, agent, agency, property, bangkok, ขายดาวน์, กรุงเทพ, นนทบุรี, ปทุมธานี, สมุทรปราการ, bts, mrt, airport link, สุขุมวิท, sukhumvit, down payment, room, available, location, บีทีเอส, เอ็มอาร์ที, ใกล้รถไฟฟ้า, สถานี, แผนที่, map, ห้องว่าง')
@section('meta-keywords-en','2-bedroom condo, accommodation for rent, buy, sell, cheap prices, near area, vicinity and location')

@section('head-tag')
    <link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/swal/dist/sweetalert2.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/image-uploader/image-uploader.min.css') }}">
    <link href="{{ asset('assets_v2/assets/css/style-slide.css') }}" rel="stylesheet"> 
@endsection

@section('breadcrumbs-th')

@endsection
@section('breadcrumbs-en')

@endsection

@section('link_th',$url)

@section('content-th')
    <section id="herozzz">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" 
            style="background-image: url({{ asset('assets_v2/images/slide/slide-1.webp') }});">
            <div class="carousel-container">
                <div class="carousel-content animate__animated animate__fadeInUp">
                    <div class="container">
                        <div class="row">
                        <div class="col-sm">
                            <h2>หากคุณเป็น <span>เจ้าของห้อง</span></h2>
                            <p>
                            มีคอนโด ที่ต้องการขาย หรือต้องการหาผู้เช่า เพียงฝากห้องไว้กับเรา (ฝากห้องฟรี ไม่มีข้อผูกมัดใดๆ) เรายินดีเป็นอย่างยิ่งที่จะช่วยทำการตลาดให้กับคุณ ผ่านเครือข่ายและช่องทางการประชาสัมพันธ์ต่างๆ 
                            ของทางเราอย่างเต็มที่ พร้อมดูแลจนสามารถปิดการขายได้อย่างสมบูรณ์ เพียงส่งข้อมูลห้องของคุณ
                            ผ่านแบบฟอร์มด้านล่าง หรือ สแกน QR CODE ได้เลยค่ะ
            
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

            <!-- Slide 2 -->
            <div class="carousel-item" 
            style="background-image: url({{ asset('assets_v2/images/slide/slide-2.webp') }});">
            <div class="carousel-container">
                <div class="carousel-content animate__animated animate__fadeInUp">
                    <div class="container">
                        <div class="row">
                        <div class="col-sm">
                            <h2>จะปล่อยเช่าก็ง่าย <span>จะขายก็รวดเร็ว</span></h2>
                            <p>
                            แค่คุณมีคอนโดว่าง ก็ลงประกาศกับ scancondo ได้เลย  ไม่มีค่าใช้จ่ายใดๆ  ง่าย จบ ครบในที่เดียว<br><br>

                            เพียงส่งข้อมูลห้องของคุณ
                            ผ่านแบบฟอร์มด้านล่าง หรือ สแกน QR CODE ได้เลยค่ะ
            
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

            <!-- Slide 3 -->
            <div class="carousel-item" 
            style="background-image: url({{ asset('assets_v2/images/slide/slide-3.webp') }});">
            <div class="carousel-container">
                <div class="carousel-content animate__animated animate__fadeInUp">
                    <div class="container">
                        <div class="row">
                        <div class="col-sm">
                            <h2>ลูกค้ามากมายรอเช่า /<span>ซื้อคอนโด ของคุณอยู่!!</span></h2>
                            <p>
                                เพียงลงประกาศปล่อยเช่าหรือขายไว้กับเรา ก็เข้าถึงลูกค้าที่คุณต้องการได้อย่างรวดเร็ว  ลงประกาศกับเราได้ ฟรี!!  ไม่มีค่าใช้จ่ายใดๆ<br><br>

                                คุณสามารถส่งข้อมูลห้องผ่านแบบฟอร์มด้านล่าง หรือ สแกน QR CODE ได้เลยค่ะ
            
                            </p>
                        </div>
                        <div class="col-sm">
                            <div class="text-center">
                                <a href="//line.me/R/ti/p/%40704uwpvc" class="btn-get-started" target="_blank" rel="noopener">
                                <img src="{{ asset('assets_v2/images/icon/qrcode-scancondo.png') }}" >
                            </a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <!-- Slide 4 -->
            <div class="carousel-item" 
            style="background-image: url({{ asset('assets_v2/images/slide/slide-4.webp') }});">
                <div class="carousel-container">
                <div class="carousel-content animate__animated animate__fadeInUp">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <div class="text-center">
                                    <a href="https://youtu.be/xpYLkNBzU5g" class="btn-get-started" target="_blank" rel="noopener">
                                    <img src="{{ asset('assets_v2/images/icon/youtube.webp') }}" >
                                </a>
                                
                                </div>
                            </div>
                            <div class="col-sm">
                                <h2>เพียงไม่กี่ขั้นตอน <span>ก็ฝากห้องได้</span></h2>
                            <p>
                                เพียงคุณดูขั้นตอนจากคลิปแนะนำสั้นๆ ด้านข้างนี้ ก็สามารถลงประกาศขาย / เช่า
                                ห้องได้เอง หากคุณเป็นเจ้าของห้องต้องการปล่อยเช่า หรือ ขาย  ลงประกาศกับเรา
                                ฟรี!! ไม่มีค่าใช้จ่าย  ลูกค้าสามารถเห็นประกาศของคุณทุกช่องทาง social network
                                ทั้ง Facebook,Line,Instagram,Tiktok,Twitter และ partner
                                ของเรามากกว่า 1000 คน
                
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
    <div style="background-color:#eeeeee" class="deposit-page" >
        <div class="deposit-content">
            <div class="center">
                <div>
                    <h1 class="f-theme">ฝากเช่า / ขาย</h1>
                </div>
            </div>
            <form action="{{ route('depositSave') }}" id="formData" enctype="multipart/form-data" method="post">
                @csrf
                <div 
                class="deposit-form"
                >
                    <div class="header">
                        ( ส่วนที่ 1 ) รายละเอียดเกี่ยวกับห้องชุด
                    </div>
                    <div 
                    class="body"
                    >
                        <div class="deposit-input border-right">
                            <label for="" class="title">
                                ระบุความต้องการฝากของคุณ<br>
                                <small class="f-theme">(เฉพาะคอนโดมิเนียมกรุงเทพและปริมณฑลเท่านั้น)</small>
                            </label>
                            <div class="input-radio">
                                <label class="radio">เช่า
                                    <input type="radio" name="deposit_type" value="1" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="input-radio">
                                <label class="radio">ขาย
                                    <input type="radio" name="deposit_type" value="2">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="input-radio">
                                <label class="radio">เช่า/ขาย
                                    <input type="radio" name="deposit_type" value="3">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="deposit-input">
                            <label for="" class="title">
                                ใส่ชื่อโครงการคอนโดที่ต้องการฝาก
                            </label>
                            <input type="text" name="condo_name" id="condo_name"  placeholder="ใส่ชื่อโครงการคอนโดหรือทำเลที่คุณสนใจ และต้องการเช่าห้อง" autocomplete="off" spellcheck="false" onfocus="this.value=''" >
                        </div>
                        <div class="deposit-input-detail">
                            <label for="" class="title">
                                ใส่รายละเอียดข้อมูลห้องของคุณให้ครบถ้วน <br>
                                <small class="f-theme">(เลือกใส่ข้อมูลเฉพาะรูปแบบคอนโดของคุณ เช่น ถ้ามีเพียงอาคารเดียว
                                    หรือไม่มีเฟส ก็ไม่ต้องใส่ เป็นต้น)</small>
                            </label>
                            <div class="detail-input">
                                <select class="" name="deposit_room_style" id="deposit_room_style">
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
                                <select class="" name="deposit_room_bath" id="deposit_room_bath">
                                    <option value="0" selected>จำนวนห้องน้ำ</option>
                                    <option value="1">1 ห้องน้ำ</option>
                                    <option value="2">2 ห้องน้ำ</option>
                                    <option value="3">3 ห้องน้ำ</option>
                                    <option value="4">4 ห้องน้ำ</option>
                                    <option value="5">5 ห้องน้ำ</option>
                                    <option value="6">6 ห้องน้ำ</option>
                                </select>
                            </div>
                            <div class="detail-input">
                                <select class="" name="deposit_room_building" id="deposit_room_building">
                                    <option value="0" selected>ระบุอาคาร/ตึก</option>
                                    <option value="0">มีอาคาร/ตึกเดียว</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="F">F</option>
                                    <option value="G">G</option>
                                    <option value="H">H</option>
                                </select>
                            </div>
                            <div class="detail-input">
                                <select class="" name="deposit_room_phase" id="deposit_room_phase">
                                    <option value="0" selected>ระบุเฟส</option>
                                    <option value="0">ไม่มีเฟส</option>
                                    <option value="1">เฟส 1</option>
                                    <option value="2">เฟส 2</option>
                                    <option value="3">เฟส 3</option>
                                    <option value="4">เฟส 4</option>
                                    <option value="5">เฟส 5</option>
                                    <option value="6">เฟส 6</option>
                                    <option value="7">เฟส 7</option>
                                    <option value="8">เฟส 8</option>
                                </select>
                            </div>
                            <div class="detail-input detail-sale">
                                <select class="" name="deposit_sale_type" id="deposit_sale_type">
                                    <option value="0" selected>ประเภทการขาย</option>
                                    <option value="1">ขายใบจอง/เงินดาวน์</option>
                                    <option value="2">ขายห้องชุดพร้อมอยู่</option>
                                    <option value="3">ขายห้องชุดพร้อมผู้เช่า</option>
                                </select>
                            </div>
                            <div class="detail-input detail-sale">
                                <select class="" name="deposit_sale_hold" id="deposit_sale_hold">
                                    <option value="0" selected>รูปแบบการถือครอง</option>
                                    <option value="1">Freehold (ขายขาด)</option>
                                    <option value="2">Leasehold (เช่าซื้อ)</option>
                                </select>
                            </div>
                            <div class="detail-input">
                                <input type="number" name="deposit_room_size" id="deposit_room_size" value=""
                                    placeholder="พื้นที่ห้อง (ตร.ม.)" class="">
                            </div>
                            <div class="detail-input">
                                <input type="number" name="deposit_room_floor" id="deposit_room_floor" value=""
                                    placeholder="ชั้น" class="">
                            </div>
                            <div class="detail-input detail-rent">
                                <input type="number" name="deposit_room_live" id="deposit_room_live" value=""
                                    placeholder="พักอาศัยได้ (จำนวนคน)" class="">
                            </div>
                            <div class="detail-input detail-rent">
                                <input type="number" name="deposit_price_rent" id="deposit_price_rent" value=""
                                    placeholder="ราคาค่าเช่า/เดือน (บาท)" class="">
                            </div>
                            <div class="detail-input detail-sale">
                                <input type="number" name="deposit_price_sale" id="deposit_price_sale" value=""
                                    placeholder="ราคาขาย (บาท)" class="">
                            </div>
                        </div>
                        <div class="deposit-input-detail">
                            <label for="" class="title">
                                ใส่ข้อมูลที่ต้องการ รายละเอียดห้องเพิ่มเติม (ถ้ามี)
                            </label>
                            <textarea name="deposit_detail" id="deposit_detail" rows="8" cols="80" class="form-control"></textarea>
                            <br>
                            <div class="input-images"></div>

                            {{-- <input type="file" name="File" id="file" accept="image/*" /> --}}
                            {{-- <input type="file" multiple name="images[]"> --}}
                        </div>
                    </div>
                </div>
                <div class="deposit-form">
                    <div class="header">
                        ( ส่วนที่ 2 ) รายละเอียดเกี่ยวกับผู้ฝาก
                    </div>
                    <div class="body">
                        <div class="deposit-input-customer">
                            <label for="">ชื่อ-นามสกุล</label>
                            <input type="text" name="deposit_name" id="deposit_name" value="" placeholder="">
                        </div>
                        <div class="deposit-input-customer">
                            <label for="">เบอร์โทรศัพท์</label>
                            <input type="text" name="deposit_phone" id="deposit_phone" value="" placeholder="">
                        </div>
                        <div class="deposit-input-customer contact">
                            <label for="">Line ID</label>
                            <input type="text" name="deposit_line" id="deposit_line" value="" placeholder="">
                        </div>
                        <div class="deposit-input-customer contact">
                            <label for="" class="title">E-mail</label>
                            <input type="text" name="deposit_email" id="deposit_email" value="" placeholder="">
                        </div>
                        <div class="deposit-input-customer contact">
                            <label for="" class="title">ประเภทผู้ฝาก</label>
                            <label class="radio">เจ้าของห้อง
                                <input type="radio" name="deposit_owner_type" value="1" checked>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio">เอเจนต์
                                <input type="radio" name="deposit_owner_type" value="2">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="deposit-input-remark">
                            เจ้าหน้าที่ของเราจะรีบดำเนินการตามความต้องการ และจะติดต่อกลับคุณโดยเร็วที่สุด <br class="hide-sm">
                            เพื่อยืนยันข้อมูลและสอบถามรายละเอียดเพิ่มเติมต่างๆ ภายใน 24 ชั่วโมง ขอบพระคุณค่ะ
                        </div>



                        <div class="deposit-input-button">
                            <button type="button" name="submit_deposit" id="submit_deposit"><i class="fas fa-cloud-upload-alt"></i> ส่งข้อมูล</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>    
    @include('frame_v2.section.whydeposit-th')            
@endsection
@section('content-en')
    <section id="herozzz">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" 
            style="background-image: url({{ asset('assets_v2/images/slide/slide-1.webp') }});">
            <div class="carousel-container">
                <div class="carousel-content animate__animated animate__fadeInUp">
                    <div class="container">
                        <div class="row">
                        <div class="col-sm">
                            <h2>If you are <span>the owner</span></h2>
                            <p>
                                of a room and wish to sell or find a tenant for a condo.
                                Just leave your room with us (free deposit and no strings attached) we are more than happy to help with your marketing. Ready to take care of and complete the sale, just send your room information through the form below or scan the QR code.
            
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

            <!-- Slide 2 -->
            <div class="carousel-item" 
            style="background-image: url({{ asset('assets_v2/images/slide/slide-2.webp') }});">
            <div class="carousel-container">
                <div class="carousel-content animate__animated animate__fadeInUp">
                    <div class="container">
                        <div class="row">
                        <div class="col-sm">
                            <h2>Renting is easy,  <span>selling is quick.</span></h2>
                            <p>
                                If you have a vacant condo, you can simply list it with scancondo. There are no fees involved. Easy, convenient, and all in one place.
                                <br><br>

                                Just submit your room information
                                via the form below or scan the QR code directly.
            
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

            <!-- Slide 3 -->
            <div class="carousel-item" 
            style="background-image: url({{ asset('assets_v2/images/slide/slide-3.webp') }});">
            <div class="carousel-container">
                <div class="carousel-content animate__animated animate__fadeInUp">
                    <div class="container">
                        <div class="row">
                        <div class="col-sm">
                            <h2>Many customers are waiting to<span> rent/buy your condo!!</span></h2>
                            <p>
                                Just list your rental or sale advertisement with us, and you'll quickly reach the customers you desire. List with us for free! There are no costs involved.
                                <br><br>

                                You can submit room information through the form below or simply scan the QR code.
            
                            </p>
                        </div>
                        <div class="col-sm">
                            <div class="text-center">
                                <a href="//line.me/R/ti/p/%40704uwpvc" class="btn-get-started" target="_blank" rel="noopener">
                                <img src="{{ asset('assets_v2/images/icon/qrcode-scancondo.png') }}" >
                            </a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <!-- Slide 4 -->
            <div class="carousel-item" 
            style="background-image: url({{ asset('assets_v2/images/slide/slide-4.webp') }});">
                <div class="carousel-container">
                <div class="carousel-content animate__animated animate__fadeInUp">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <div class="text-center">
                                    <a href="https://youtu.be/xpYLkNBzU5g" class="btn-get-started" target="_blank" rel="noopener">
                                    <img src="{{ asset('assets_v2/images/icon/youtube.webp') }}" >
                                </a>
                                
                                </div>
                            </div>
                            <div class="col-sm">
                                <h2>In just a few simple steps, <span> you can list your room.</span></h2>
                            <p>
                                Just by following a few steps from the short instructional video on the side, you can list your room for sale or rent on your own. If you are the owner and want to lease or sell your room, you can list it with us for free! There are no costs involved. Customers can see your listings through various social network channels, including Facebook, Line, Instagram, TikTok, Twitter, and our network of more than 1000 partners.
                
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
    <div style="background-color:#eeeeee" class="deposit-page" >
        <div class="deposit-content">
            <div class="center">
                <div>
                    <h1 class="f-theme">Deposit condo, for rent / for sale</h1>
                </div>
            </div>
            <form action="{{ route('depositSave') }}" id="formData" enctype="multipart/form-data" method="post">
                @csrf
                <div 
                class="deposit-form"
                >
                    <div class="header">
                        (Part 1) Room unit details
                    </div>
                    <div 
                    class="body"
                    >
                        <div class="deposit-input border-right">
                            <label for="" class="title">
                                Specify your deposit requirements<br>
                                <small class="f-theme">(Only for condominiums in Bangkok metropolitan area)</small>
                            </label>
                            <div class="input-radio">
                                <label class="radio">Rent
                                    <input type="radio" name="deposit_type" value="1" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="input-radio">
                                <label class="radio">Sell
                                    <input type="radio" name="deposit_type" value="2">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="input-radio">
                                <label class="radio">Rent/Sell
                                    <input type="radio" name="deposit_type" value="3">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="deposit-input">
                            <label for="" class="title">
                                Please enter condo project's name you want to deposit
                            </label>
                            <input type="text" name="condo_name" id="condo_name"  
                            placeholder="Project Name" autocomplete="off" spellcheck="false" onfocus="this.value=''" >
                        </div>
                        <div class="deposit-input-detail">
                            <label for="" class="title">
                                Provide complete information about your room <br>
                                <small class="f-theme">
                                    Select and provide information only about your condo's specific features <br>
                                    (e.g., if you only have one building or no phase, no need to enter those details)
                                </small>
                            </label>
                            <div class="detail-input">
                                <select class="" name="deposit_room_style" id="deposit_room_style">
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
                                <select class="" name="deposit_room_bath" id="deposit_room_bath">
                                    <option value="0" selected>Number of bathrooms</option>
                                    <option value="1">1 bathroom</option>
                                    <option value="2">2 bathrooms</option>
                                    <option value="3">3 bathrooms</option>
                                    <option value="4">4 bathrooms</option>
                                    <option value="5">5 bathrooms</option>
                                    <option value="6">6 bathrooms</option>
                                </select>
                            </div>
                            <div class="detail-input">
                                <select class="" name="deposit_room_building" id="deposit_room_building">
                                    <option value="0" selected>Specify building/tower</option>
                                    <option value="0">Single building/tower</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="F">F</option>
                                    <option value="G">G</option>
                                    <option value="H">H</option>
                                </select>
                            </div>
                            <div class="detail-input">
                                <select class="" name="deposit_room_phase" id="deposit_room_phase">
                                    <option value="0" selected>Specify phase</option>
                                    <option value="0">no phase</option>
                                    <option value="1">phase 1</option>
                                    <option value="2">phase 2</option>
                                    <option value="3">phase 3</option>
                                    <option value="4">phase 4</option>
                                    <option value="5">phase 5</option>
                                    <option value="6">phase 6</option>
                                    <option value="7">phase 7</option>
                                    <option value="8">phase 8</option>
                                </select>
                            </div>
                            <div class="detail-input detail-sale">
                                <select class="" name="deposit_sale_type" id="deposit_sale_type">
                                    <option value="0" selected>Type of sale</option>
                                    <option value="1">Reservation/down payment sale</option>
                                    <option value="2">Ready-to-move-in room unit for sale</option>
                                    <option value="3">For sale with tenant</option>
                                </select>
                            </div>
                            <div class="detail-input detail-sale">
                                <select class="" name="deposit_sale_hold" id="deposit_sale_hold">
                                    <option value="0" selected>Ownership structure</option>
                                    <option value="1">Freehold</option>
                                    <option value="2">Leasehold</option>
                                </select>
                            </div>
                            <div class="detail-input">
                                <input type="number" name="deposit_room_size" id="deposit_room_size" value=""
                                    placeholder="Room area (sqm)" class="">
                            </div>
                            <div class="detail-input">
                                <input type="number" name="deposit_room_floor" id="deposit_room_floor" value=""
                                    placeholder="Floors" class="">
                            </div>
                            <div class="detail-input detail-rent">
                                <input type="number" name="deposit_room_live" id="deposit_room_live" value=""
                                    placeholder="occupancy capacity (persons)" class="">
                            </div>
                            <div class="detail-input detail-rent">
                                <input type="number" name="deposit_price_rent" id="deposit_price_rent" value=""
                                    placeholder="rental/monthly price (Baht)" class="">
                            </div>
                            <div class="detail-input detail-sale">
                                <input type="number" name="deposit_price_sale" id="deposit_price_sale" value=""
                                    placeholder="sales price (Baht)" class="">
                            </div>
                        </div>
                        <div class="deposit-input-detail">
                            <label for="" class="title">
                                Provide the desired information, additional room details (if any)
                            </label>
                            <textarea name="deposit_detail" id="deposit_detail" rows="8" cols="80" class="form-control"></textarea>
                            <br>
                            Upload Images below <i class="fas fa-angle-double-down"></i><br>
                            <div class="input-images"></div>


                        </div>
                    </div>
                </div>
                <div class="deposit-form">
                    <div class="header">
                        (Part 2) Depositor details
                    </div>
                    <div class="body">
                        <div class="deposit-input-customer">
                            <label for="">Name-Surname</label>
                            <input type="text" name="deposit_name" id="deposit_name" value="" placeholder="">
                        </div>
                        <div class="deposit-input-customer">
                            <label for="">Telephone Number</label>
                            <input type="text" name="deposit_phone" id="deposit_phone" value="" placeholder="">
                        </div>
                        <div class="deposit-input-customer contact">
                            <label for="">Line ID</label>
                            <input type="text" name="deposit_line" id="deposit_line" value="" placeholder="">
                        </div>
                        <div class="deposit-input-customer contact">
                            <label for="" class="title">E-mail</label>
                            <input type="text" name="deposit_email" id="deposit_email" value="" placeholder="">
                        </div>
                        <div class="deposit-input-customer contact">
                            <label for="" class="title">Type of depositor</label>
                            <label class="radio">Owner
                                <input type="radio" name="deposit_owner_type" value="1" checked>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio">Agency
                                <input type="radio" name="deposit_owner_type" value="2">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="deposit-input-remark">
                            Our staff will promptly attend to your needs and will contact you back
                            <br class="hide-sm">
                            as soon as possible to confirm the information and ask for any additional
                            <br class="hide-sm">
                            details within 24 hours. Thank you.
                        </div>



                        <div class="deposit-input-button">
                            <button type="button" name="submit_deposit" id="submit_deposit"><i class="fas fa-cloud-upload-alt"></i> Submit data</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div> 
    @include('frame_v2.section.whydeposit-en') 
@endsection

@section('script')
    <script src="{{ asset('plugins/select2/select2.full.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('plugins/swal/dist/sweetalert2.js') }}" charset="utf-8"></script>
    <script src="{{ asset('assets_v2/assets/js/main-slide.js') }}"></script>
    <script src="{{ asset('plugins/image-uploader/image-uploader.min.js') }}" charset="utf-8"></script>
@endsection

@section('script-th')
<script type="text/javascript">
    $(document).ready(function() {
        $('.input-images').imageUploader();
        var deposit_type = $("input[name='deposit_type']:checked").val();
        if (deposit_type == 1) {
            $(".detail-sale").hide();
            $(".detail-rent").show();
        } else if (deposit_type == 2) {
            $(".detail-rent").hide();
            $(".detail-sale").show();
        } else {
            $(".detail-rent").show();
            $(".detail-sale").show();
        }
    });
    $("input[name='deposit_type']").change(function(event) {
        var deposit_type = $("input[name='deposit_type']:checked").val();
        if (deposit_type == 1) {
            $(".detail-sale").hide();
            $(".detail-rent").show();
        } else if (deposit_type == 2) {
            $(".detail-rent").hide();
            $(".detail-sale").show();
        } else {
            $(".detail-rent").show();
            $(".detail-sale").show();
        }
    });
    $(".body .deposit-input select").select2({
        width: '100%',
        placeholder: 'พิมพ์แล้วเลือกโครงการที่คุณต้องการ',
        minimumInputLength: 2,
        language: {
            inputTooShort: function(a) {
                return "เลือกพิมพ์เฉพาะภาษาไทย หรืออังกฤษ อย่างใดอย่างหนึ่งเท่านั้น";
            }
        }
    });
    $(".body .deposit-input-detail .detail-input select").select2({
        minimumResultsForSearch: -1,
        width: '100%'
    });
    
    $("#submit_deposit").click(function(e) {
        e.preventDefault();
        var deposit_type = $('input[name=deposit_type]:checked').val();
        var condo_name = $("#condo_name").val();
        var deposit_room_style = $("#deposit_room_style").val();
        var deposit_room_bath = $("#deposit_room_bath").val();
        var deposit_room_building = $("#deposit_room_building").val();
        var deposit_room_phase = $("#deposit_room_phase").val();
        var deposit_sale_type = $("#deposit_sale_type").val();
        var deposit_sale_hold = $("#deposit_sale_hold").val();
        var deposit_room_size = $("#deposit_room_size").val();
        var deposit_room_floor = $("#deposit_room_floor").val();
        var deposit_room_live = $("#deposit_room_live").val();
        var deposit_price_rent = $("#deposit_price_rent").val();
        var deposit_price_sale = $("#deposit_price_sale").val();
        var deposit_detail = $("#deposit_detail").val();
        var deposit_name = $("#deposit_name").val();
        var deposit_phone = $("#deposit_phone").val();
        var deposit_line = $("#deposit_line").val();
        var deposit_email = $("#deposit_email").val();
        var deposit_owner_type = $('input[name=deposit_owner_type]:checked').val();
        var inputFile = $("input[name='images[]']").get(0).files.length;
        console.log(inputFile);
        // var imageUploader = $('input[name="File"]')[0];
        
            // alert(inputFile);

        if (condo_name == "" || deposit_room_style == 0 || deposit_room_bath == 0 ||
            deposit_room_size <= 0 || deposit_room_floor <= 0 || (deposit_type == 1 && (
                deposit_room_live <= 0 || deposit_price_rent <= 0)) || (deposit_type == 2 && (
                    deposit_price_sale <= 0 || deposit_sale_type == 0 || deposit_sale_hold == 0
                    )) || (deposit_type == 3 && (deposit_room_live <= 0 || deposit_price_rent <=
                0 || deposit_price_sale <= 0 || deposit_sale_type == 0 || 
                deposit_sale_hold == 0)) || CheckHasValue(deposit_detail) == 0 || CheckHasValue(
                deposit_name) == 0 || CheckHasValue(deposit_phone) == 0 || CheckHasValue(
                deposit_line) == 0 || CheckHasValue(deposit_email) == 0)  {
            Swal.fire(
                'ไม่สามารถดำเนินการได้',
                'กรุณากรอกข้อมูลให้ครบถ้วน',
                'warning'
            );
        } else {

            if (inputFile === 0) {
            Swal.fire(
                'กรุณาอัพโหลดรูปด้วยค่ะ',
                'warning'
            );
        } 
        else {

            if (deposit_type == 1) {
                deposit_price_sale = 0;
            } else if (deposit_type == 2) {
                deposit_price_rent = 0;
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
                    Swal.fire({
                        icon: 'success',
                        title: 'ดำเนินการสำเร็จ!',
                        text: 'Scancondo จะรีบติดต่อกลับโดยด่วน ขอบพระคุณค่ะ',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    $("#formData").submit();
                }
            })
        }
        }
    
    });

</script>
@endsection

@section('script-en')
<script type="text/javascript">
    $(document).ready(function() {
        $('.input-images').imageUploader();
        var deposit_type = $("input[name='deposit_type']:checked").val();
        if (deposit_type == 1) {
            $(".detail-sale").hide();
            $(".detail-rent").show();
        } else if (deposit_type == 2) {
            $(".detail-rent").hide();
            $(".detail-sale").show();
        } else {
            $(".detail-rent").show();
            $(".detail-sale").show();
        }
    });
    $("input[name='deposit_type']").change(function(event) {
        var deposit_type = $("input[name='deposit_type']:checked").val();
        if (deposit_type == 1) {
            $(".detail-sale").hide();
            $(".detail-rent").show();
        } else if (deposit_type == 2) {
            $(".detail-rent").hide();
            $(".detail-sale").show();
        } else {
            $(".detail-rent").show();
            $(".detail-sale").show();
        }
    });
    $(".body .deposit-input select").select2({
        width: '100%',
        placeholder: 'พิมพ์แล้วเลือกโครงการที่คุณต้องการ',
        minimumInputLength: 2,
        language: {
            inputTooShort: function(a) {
                return "เลือกพิมพ์เฉพาะภาษาไทย หรืออังกฤษ อย่างใดอย่างหนึ่งเท่านั้น";
            }
        }
    });
    $(".body .deposit-input-detail .detail-input select").select2({
        minimumResultsForSearch: -1,
        width: '100%'
    });
    
    $("#submit_deposit").click(function(e) {
        e.preventDefault();
        var deposit_type = $('input[name=deposit_type]:checked').val();
        var condo_name = $("#condo_name").val();
        var deposit_room_style = $("#deposit_room_style").val();
        var deposit_room_bath = $("#deposit_room_bath").val();
        var deposit_room_building = $("#deposit_room_building").val();
        var deposit_room_phase = $("#deposit_room_phase").val();
        var deposit_sale_type = $("#deposit_sale_type").val();
        var deposit_sale_hold = $("#deposit_sale_hold").val();
        var deposit_room_size = $("#deposit_room_size").val();
        var deposit_room_floor = $("#deposit_room_floor").val();
        var deposit_room_live = $("#deposit_room_live").val();
        var deposit_price_rent = $("#deposit_price_rent").val();
        var deposit_price_sale = $("#deposit_price_sale").val();
        var deposit_detail = $("#deposit_detail").val();
        var deposit_name = $("#deposit_name").val();
        var deposit_phone = $("#deposit_phone").val();
        var deposit_line = $("#deposit_line").val();
        var deposit_email = $("#deposit_email").val();
        var deposit_owner_type = $('input[name=deposit_owner_type]:checked').val();
        var inputFile = $("input[name='images[]']").get(0).files.length;
        console.log(inputFile);
        // var imageUploader = $('input[name="File"]')[0];
        
            // alert(inputFile);

        if (condo_name == "" || deposit_room_style == 0 || deposit_room_bath == 0 ||
            deposit_room_size <= 0 || deposit_room_floor <= 0 || (deposit_type == 1 && (
                deposit_room_live <= 0 || deposit_price_rent <= 0)) || (deposit_type == 2 && (
                    deposit_price_sale <= 0 || deposit_sale_type == 0 || deposit_sale_hold == 0
                    )) || (deposit_type == 3 && (deposit_room_live <= 0 || deposit_price_rent <=
                0 || deposit_price_sale <= 0 || deposit_sale_type == 0 || 
                deposit_sale_hold == 0)) || CheckHasValue(deposit_detail) == 0 || CheckHasValue(
                deposit_name) == 0 || CheckHasValue(deposit_phone) == 0 || CheckHasValue(
                deposit_line) == 0 || CheckHasValue(deposit_email) == 0)  {
            Swal.fire(
                'ไม่สามารถดำเนินการได้',
                'กรุณากรอกข้อมูลให้ครบถ้วน',
                'warning'
            );
        } else {

            if (inputFile === 0) {
            Swal.fire(
                'กรุณาอัพโหลดรูปด้วยค่ะ',
                'warning'
            );
        } 
        else {

            if (deposit_type == 1) {
                deposit_price_sale = 0;
            } else if (deposit_type == 2) {
                deposit_price_rent = 0;
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
                    Swal.fire({
                        icon: 'success',
                        title: 'ดำเนินการสำเร็จ!',
                        text: 'Scancondo จะรีบติดต่อกลับโดยด่วน ขอบพระคุณค่ะ',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    $("#formData").submit();
                }
            })
        }
        }
    
    });

</script>
@endsection