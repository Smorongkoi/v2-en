@extends('layouts_v2.singlepage')
{{-- ไทย --}}
@section('title-th', 'Scancondo | สลิปเงินเดือน (*** สำหรับทีมงานเท่านั้น ***)')
@section('title-en', 'Scancondo | E-payment Slip for Scancondo staff only')

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
            <h2>สลิปเงินเดือน</h2>
            <ol>
            <li><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
            <li>สลิปเงินเดือน</li>
            </ol>
        </div>

        </div>
    </section>
@endsection
@section('breadcrumbs-en')
    <section class="breadcrumbs d-none d-xl-block">
        <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>E-payment Slip</h2>
            <ol>
            <li><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
            <li>E-payment Slip</li>
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
                            สลิปเงินเดือน<br class="d-block d-sm-none">
                            (E-Payment Slip)
                        </h4>
                        <p class="mt-4 text-center">
                            ท่านสามารถ สมัคร และ ใช้งานระบบดูสลิปของเรา จาก ลิงก์นี้ได้เลยค่ะ
                            <a href="http://83.118.30.208/LoginERS/Login.aspx" target="_blank" rel="nofollow" class="btn btn-primary blink">คลิก</a><br><br>
                            หากยังไม่เข้าใจวิธีใช้งาน ก็อ่านรายละเอียดตามวิธีการด้านล้างนี้ได้เลยนะคะ <a href="http://83.118.30.208/LoginERS/Login.aspx" target="_blank" rel="nofollow" class="btn btn-primary ">ดาวน์โหลดคู่มือแบบ PDF</a> 
                        </p>
                        {{-- <a href="#" class="cta-btn shadow"><strong>ฝากห้องเช่า/ฝากขาย</strong></a> --}}
                    </div>
                    
                </div>
            </div>

            <div class="row align-items-center mt-5">

                <div class="col-lg-12 order-1 order-lg-1 text-align-center">
                    <img src="{{ asset('assets_v2/assets/img/team/epayslip.png') }}" class="images-fluid">
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
                        <h4>
                            E-Payment Slip<br class="d-block d-sm-none">
                            (Only for Billfett Co.,Ltd. staff)
                        </h4>
                        <p class="mt-4 text-center">
                            You can easily register and utilize our payroll system by accessing this link.
                            <a href="http://83.118.30.208/LoginERS/Login.aspx" target="_blank" rel="nofollow" class="btn btn-primary blink">Click</a><br><br>
                            If you're still unsure about how to use it, you can refer to the detailed instructions provided in the following guide. <a href="http://83.118.30.208/LoginERS/Login.aspx" target="_blank" rel="nofollow" class="btn btn-primary ">Download PDF guide</a> 
                        </p>
                        {{-- <a href="#" class="cta-btn shadow"><strong>ฝากห้องเช่า/ฝากขาย</strong></a> --}}
                    </div>
                    
                </div>
            </div>

            <div class="row align-items-center mt-5">

                <div class="col-lg-12 order-1 order-lg-1 text-align-center">
                    <img src="{{ asset('assets_v2/assets/img/team/epayslip.png') }}" class="images-fluid">
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