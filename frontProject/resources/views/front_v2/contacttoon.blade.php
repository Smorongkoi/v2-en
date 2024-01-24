@extends('layouts_v2.singlepage')
{{-- ไทย --}}
@section('title-th', 'Scancondo | ติดต่อเรา')
@section('title-en', 'Scancondo | Contact Us - Get in touch with Scancondo.com for all your real estate inquiries')

@section('meta-description-th','ติดต่อเรา Scancondo.com ตัวแทนอสังหาฯ บริการครบวงจรด้านคอนโด ซื้อ ขาย เช่า ทั้งในกรุงเทพและปริมณฑล ครบจบในที่เดียว')
@section('meta-description-en','Contact us at Scancondo.com, a full-service condominium agency. We provide comprehensive services for buying, selling, and renting condos in Bangkok and its metropolitan area, all in one place.')

@section('facebook-title-th', 'Scancondo | ติดต่อเรา')
@section('facebook-title-en', 'Scancondo | Contact Us - Get in touch with Scancondo.com for all your real estate inquiries')

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
            <h2>ติดต่อเรา</h2>
            <ol>
            <li><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
            <li>ติดต่อเรา</li>
            </ol>
        </div>

        </div>
    </section>
@endsection
@section('breadcrumbs-en')
    <section class="breadcrumbs d-none d-xl-block">
        <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Contact us</h2>
            <ol>
            <li><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
            <li>Contact us</li>
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
                        <h4>
                        ติดต่อเรา<br class="d-block d-sm-none">
                            (Contact us)
                        </h4>
                        <p class="mt-4">
                            ScanCondo.com ให้บริการจัดหาห้องเช่า-ขาย , ผู้เช่า-ผู้ซื้อ คอนโดทั่วกรุงเทพฯ และปริมณฑล ด้วยประสบการณ์ให้บริการมาอย่างยาวนาน
                            เรามีโครงการคอนโด มากกว่า 2,000 โครงการ จำนวนกว่า 100,000 ห้อง ทั่วกรุงเทพฯ ให้คุณได้เลือกคอนโดที่ดีที่สุดที่คุณต้องการ
                            สแกนคอนโดที่ใช่ของคุณ... ที่นี่กับ ScanCondo.com
                        </p>
                        {{-- <a href="#" class="cta-btn shadow"><strong>ฝากห้องเช่า/ฝากขาย</strong></a> --}}
                    </div>
                    
                </div>
            </div>

            <div class="row align-items-center mt-5">
                <div class="col-lg-6 order-2 order-lg-2">
                    
                    <div class="mt-1 p-4 text-center">
                        <br class="d-block d-sm-none">
                        <h4>บริษัท บิลเฟต จำกัด
                            </h4>
                            <h5>(BillFett Co.,Ltd.)</h5>
                            {{-- slide --}}
                            <div id="testimonial-carousel2" class="swiper">
                                <div class="swiper-wrapper">                            
                                    <div class="carousel-item-a swiper-slide contact-info">
                                        <p class="mt-1">
                                            <ul class="list-group">
                                            <li class="list-group-item"><b>ช่องทางการติดต่อ</b></li>
                                            <li class="list-group-item"><i class="fab fa-line" style="color:#92e524;font-size:1.2em" ></i>  ไอดีไลน์ : <a href="//line.me/R/ti/p/%40704uwpvc">@scancondo</a></li>
                                            <li class="list-group-item">
                                                โทร : <i class="bi bi-phone-fill phone-icon"></i> <a href="tel:+6627284533">02-728-4533</a></li>
                                            <li class="list-group-item">
                                                <a href="https://api.whatsapp.com/message/QBXG7VN7RV6YB1" class="linkedin" rel="nofollow" target="_blank">ติดต่อผ่าน 
                                                <i class="bi bi-whatsapp"></i> Whatsapp</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="https://www.youtube.com/channel/UCEABmgidNuLXBLRmE24dXkg" class="twitter mt-1 mr-3" rel="nofollow" target="_blank" style="color:#c40404;font-size:1.2em"><i class="bi bi-youtube"></i></a>

                                                <a href="https://www.facebook.com/ScanCondoTH/" 
                                                class="facebook  mr-3" rel="nofollow" target="_blank"
                                                style="color:#036ce4;"><i class="bi bi-facebook"></i></a>

                                                <a href="https://www.instagram.com/scancondo/" 
                                                class="instagram" rel="nofollow" target="_blank" style="color:#ae3497;"
                                                s><i class="bi bi-instagram"></i></a>
                                            </li>
                                            </ul>                       
                                        </p>  
                                                                            
                                    </div> 
                                    <div class="carousel-item-a swiper-slide contact-info">
                                        
                                        <p class="mt-1">
                                            <ul class="list-group">
                                            <li class="list-group-item"><b>ที่อยู่ (Address)</b></li>
                                            <li class="list-group-item">22,24 ซอยรามคำแหง 2 ซ.13</li>
                                            <li class="list-group-item">แขวงดอกไม้ เขตประเวศ</li>
                                            <li class="list-group-item"> กรุงเทพฯ 10250</li>
                                            <li class="list-group-item">(Bangkok Office)</li>
                                            </ul>                       
                                        </p>                                         
                                    </div> 
                                    <div class="carousel-item-a swiper-slide contact-info">
                                        <p class="mt-3"><br>
                                            <ul class="list-group">
                                            <li class="list-group-item"><b>เวลาทำการ (Office Hours)</b></li>
                                            <li class="list-group-item">จันทร์ - อาทิตย์</li>
                                            <li class="list-group-item">09.00 - 20.00 น.</li>
                                            
                                            </ul>                       
                                        </p>                                         
                                    </div> 
                                </div> 
                            </div> 
                            <div class="testimonial-carousel2-pagination carousel-pagination"></div> 
                            {{-- slide --}}
                    </div>
                    
                </div>
                <div class="col-lg-6 order-1 order-lg-1 text-align-center">
                    <img src="{{ asset('assets_v2/images-news/contactus-slide.png') }}" class="images-fluid">
                </div>                
            </div> 
            <div class="row align-items-center mt-5">
                <div class="col-lg-12 container">
                    <div class="form-group row" >
                                
                                <div class="user-contact form-group col-lg-4">
                                    <label for="">ชื่อ-นามสกุล</label>
                                    <input class="form-control"  type="text" id="contact_name" name="contact_name" value="" autocomplete="off">
                                </div>
                                <div class="user-contact form-group  col-lg-4">
                                    <label for="">เบอร์โทรศัพท์</label>
                                    <input class="form-control"  type="number" id="contact_phone" name="contact_phone" value="" autocomplete="off">
                                </div>
                                <div class="user-contact form-group  col-lg-4">
                                    <label for="">อีเมล</label>
                                    <input class="form-control"  type="email" id="contact_email" name="contact_email" value="" autocomplete="off">
                                </div>
                                <div class="user-contact-detail form-group  col-lg-12">
                                    <label for="">เรื่องที่ต้องการติดต่อ</label>
                                    <input class="form-control" type="text" id="contact_subject" name="contact_subject" value="" autocomplete="off">
                                </div>
                                <div class="user-contact-detail  form-group  col-lg-12">
                                    <label for="contact_description">รายละเอียดที่ต้องการติดต่อ</label>
                                    <textarea class="form-control" id="contact_description" name="contact_description" rows="8" cols="80"></textarea>
                                </div>
                                <div class="center pt-3">
                                    <button class="btn btn-primary"  type="button" id="contact_submit" name="contact_submit">ส่งข้อมูล</button>
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
                        {{-- <h4>
                        ติดต่อเรา<br class="d-block d-sm-none">
                            (Contact us)
                        </h4> --}}
                        <h4>
                            Contact us
                        </h4>
                        <p class="mt-4">
                            ScanCondo.com provides rental-sales services and connects renters and buyers to condominiums throughout Bangkok and its metropolitan area with years of experience. We have more than 2,000 condominium projects and over 100,000 rooms to choose from. Find the perfect condominium for you by scanning at ScanCondo.com
                        </p>
                        {{-- <a href="#" class="cta-btn shadow"><strong>ฝากห้องเช่า/ฝากขาย</strong></a> --}}
                    </div>
                    
                </div>
            </div>

            <div class="row align-items-center mt-5">
                <div class="col-lg-6 order-2 order-lg-2">
                    
                    <div class="mt-1 p-4 text-center">
                        <br class="d-block d-sm-none">
                        <h4>BillFett Co.,Ltd.
                            </h4>
                            <h5>(Head office)</h5>
                            {{-- slide --}}
                            <div id="testimonial-carousel2" class="swiper">
                                <div class="swiper-wrapper">                            
                                    <div class="carousel-item-a swiper-slide contact-info">
                                        <p class="mt-1">
                                            <ul class="list-group">
                                            <li class="list-group-item"><b>Contact channels</b></li>
                                            <li class="list-group-item"><i class="fab fa-line" style="color:#92e524;font-size:1.2em" ></i>  Line ID : <a href="//line.me/R/ti/p/%40704uwpvc">@scancondo</a></li>
                                            <li class="list-group-item">
                                                Tel : <i class="bi bi-phone-fill phone-icon"></i> <a href="tel:+6627284533">+662-728-4533</a></li>
                                            <li class="list-group-item">
                                                <a href="https://api.whatsapp.com/message/QBXG7VN7RV6YB1" class="linkedin" rel="nofollow" target="_blank">Contact via
                                                <i class="bi bi-whatsapp"></i> Whatsapp</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="https://www.youtube.com/channel/UCEABmgidNuLXBLRmE24dXkg" class="twitter mt-1 mr-3" rel="nofollow" target="_blank" style="color:#c40404;font-size:1.2em"><i class="bi bi-youtube"></i></a>

                                                <a href="https://www.facebook.com/ScanCondoTH/" 
                                                class="facebook  mr-3" rel="nofollow" target="_blank"
                                                style="color:#036ce4;"><i class="bi bi-facebook"></i></a>

                                                <a href="https://www.instagram.com/scancondo/" 
                                                class="instagram" rel="nofollow" target="_blank" style="color:#ae3497;"
                                                s><i class="bi bi-instagram"></i></a>
                                            </li>
                                            </ul>                       
                                        </p>  
                                                                            
                                    </div> 
                                    <div class="carousel-item-a swiper-slide contact-info">
                                        
                                        <p class="mt-1">
                                            <ul class="list-group">
                                                <li class="list-group-item"><b>Address</b></li>
                                                <li class="list-group-item">22,24 Soi Ramkhamhaeng 2 Soi 13,</li>
                                                <li class="list-group-item">Dokmai Subdistrict Prawet District,</li>
                                                <li class="list-group-item">Bangkok 10250</li>
                                                <li class="list-group-item">(Bangkok Office)</li>
                                            </ul>                       
                                        </p>                                         
                                    </div> 
                                    <div class="carousel-item-a swiper-slide contact-info">
                                        <p class="mt-3"><br>
                                            <ul class="list-group">
                                                <li class="list-group-item"><b>Office Hours</b></li>
                                                <li class="list-group-item">Monday - Sunday</li>
                                                <li class="list-group-item">09.00 - 20.00 น.</li>
                                            
                                            </ul>                       
                                        </p>                                         
                                    </div> 
                                </div> 
                            </div> 
                            <div class="testimonial-carousel2-pagination carousel-pagination"></div> 
                            {{-- slide --}}
                    </div>
                    
                </div>
                <div class="col-lg-6 order-1 order-lg-1 text-align-center">
                    <img src="{{ asset('assets_v2/images-news/contactus-slide.png') }}" class="images-fluid">
                </div>                
            </div> 
            <div class="row align-items-center mt-5">
                <div class="col-lg-12 container">
                    <div class="form-group row" >
                                
                                <div class="user-contact form-group col-lg-4">
                                    <label for="">Name-Surname</label>
                                    <input class="form-control"  type="text" id="contact_name" name="contact_name" value="" autocomplete="off">
                                </div>
                                <div class="user-contact form-group  col-lg-4">
                                    <label for="">Phone number</label>
                                    <input class="form-control"  type="number" id="contact_phone" name="contact_phone" value="" autocomplete="off">
                                </div>
                                <div class="user-contact form-group  col-lg-4">
                                    <label for="">E-mail</label>
                                    <input class="form-control"  type="email" id="contact_email" name="contact_email" value="" autocomplete="off">
                                </div>
                                <div class="user-contact-detail form-group  col-lg-12">
                                    <label for="">Subject</label>
                                    <input class="form-control" type="text" id="contact_subject" name="contact_subject" value="" autocomplete="off">
                                </div>
                                <div class="user-contact-detail  form-group  col-lg-12">
                                    <label for="contact_description">Details of contact</label>
                                    <textarea class="form-control" id="contact_description" name="contact_description" rows="8" cols="80"></textarea>
                                </div>
                                <div class="center pt-3">
                                    <button class="btn btn-primary"  type="button" id="contact_submit" name="contact_submit"><i class="fas fa-paper-plane"></i> Submit Data</button>
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
    $("#contact_submit").click(function() {

        var contact_name = $("#contact_name").val();
        var contact_phone = $("#contact_phone").val();
        var contact_email = $("#contact_email").val();
        var contact_subject = $("#contact_subject").val();
        var contact_description = $("#contact_description").val();
        if (CheckHasValue(contact_name) == 0 || CheckHasValue(contact_phone) == 0 || CheckHasValue(
                contact_email) == 0 || CheckHasValue(contact_subject) == 0 || CheckHasValue(
            contact_description) == 0) {
            Swal.fire(
                'ไม่สามารถดำเนินการได้',
                'กรุณากรอกข้อมูลให้ครบถ้วน',
                'warning'
            );
        } else {
            Swal.fire({
                title: 'กรุณายืนยันการดำเนินการ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#c6c9d7',
                confirmButtonText: '<i class="fas fa-check blink"></i> ยืนยัน',
                cancelButtonText: '<i class="fas fa-times"></i> ยกเลิก'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('contactSave') }}",
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            '_token': '{{ csrf_token() }}',
                            contact_name: contact_name,
                            contact_phone: contact_phone,
                            contact_email: contact_email,
                            contact_subject: contact_subject,
                            contact_description: contact_description
                        },
                        success: function(response) {
                            if (response.status) {
                                Swal.fire(
                                    'ดำเนินการสำเร็จ!',
                                    'ทีมงานจะรีบติดต่อกลับโดยด่วน ขอบคุณค่ะ',
                                    'success'
                                );
                                $("#contact_name").val('');
                                $("#contact_phone").val('');
                                $("#contact_email").val('');
                                $("#contact_subject").val('');
                                $("#contact_description").val('');
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
    $("#contact_submit").click(function() {

        var contact_name = $("#contact_name").val();
        var contact_phone = $("#contact_phone").val();
        var contact_email = $("#contact_email").val();
        var contact_subject = $("#contact_subject").val();
        var contact_description = $("#contact_description").val();
        if (CheckHasValue(contact_name) == 0 || CheckHasValue(contact_phone) == 0 || CheckHasValue(
                contact_email) == 0 || CheckHasValue(contact_subject) == 0 || CheckHasValue(
            contact_description) == 0) {
            Swal.fire(
                'ไม่สามารถดำเนินการได้',
                'กรุณากรอกข้อมูลให้ครบถ้วน',
                'warning'
            );
        } else {
            Swal.fire({
                title: 'กรุณายืนยันการดำเนินการ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#c6c9d7',
                confirmButtonText: '<i class="fas fa-check blink"></i> ยืนยัน',
                cancelButtonText: '<i class="fas fa-times"></i> ยกเลิก'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('contactSave') }}",
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            '_token': '{{ csrf_token() }}',
                            contact_name: contact_name,
                            contact_phone: contact_phone,
                            contact_email: contact_email,
                            contact_subject: contact_subject,
                            contact_description: contact_description
                        },
                        success: function(response) {
                            if (response.status) {
                                Swal.fire(
                                    'ดำเนินการสำเร็จ!',
                                    'ทีมงานจะรีบติดต่อกลับโดยด่วน ขอบคุณค่ะ',
                                    'success'
                                );
                                $("#contact_name").val('');
                                $("#contact_phone").val('');
                                $("#contact_email").val('');
                                $("#contact_subject").val('');
                                $("#contact_description").val('');
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