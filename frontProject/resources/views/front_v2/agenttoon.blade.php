@extends('layouts_v2.singlepage')
{{-- ไทย --}}
@section('title-th', 'Scancondo | ร่วมงานกับเรา CO Agents')
@section('title-en', 'Scancondo | Find condominium for rent | Buy condo in Bangkok | Room in prime area near Sukhumvit BTS or MRT')

@section('meta-description-th','Scancondo.com คือเว็บไซด์ประกาศฟรี สำหรับให้เช่า / ซื้อ / ขาย
เฉพาะที่อยู่อาศัยประเภทคอนโดมิเนียม ภายใต้การดำเนินงานของบริษัทบิลเฟต จำกัด
หนึ่งในผู้นำและผู้ให้บริการให้เช่า / ซื้อ / ขาย อสังหาริมทรัพย์ประเภท “คอนโดมิเนียม”
ในทุกทำเลทั่วกรุงเทพมหานครและปริมณฑล เปิดกว้างสำหรับเพื่อนร่วมอาชีพที่เป็นเอเจนท์มาร่วมเป็นเครือข่าย
เป็นพันธมิตรทางธุรกิจ มาร่วมงานและร่วมธุรกิจกับเรา (Business Partner) เพื่อสามารถเพิ่มยอดขาย เพิ่มโอกาสและเพิ่มรายได้
ในการ CO-Agents เช่า / ซื้อ / ขาย ห้องชุดคอนโดมิเนียมให้กับลูกค้าของคุณได้รวดเร็วและมากยิ่งขึ้น')
@section('meta-description-en','Get in touch with the Scancondo.com team for all your real estate needs. Contact us through email, phone, or visit us at our office. We are here to assist you with buying, selling, or renting property, and all other inquiries.')

@section('facebook-title-th', 'Scancondo | ร่วมงานกับเรา CO Agents')
@section('facebook-title-en', 'Scancondo | Find condominium for rent | Buy condo in Bangkok | Room in prime area near Sukhumvit BTS or MRT')

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
            <h2>ร่วมงานกับเรา</h2>
            <ol>
            <li><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
            <li>ร่วมงานกับเรา</li>
            </ol>
        </div>

        </div>
    </section>
@endsection
@section('breadcrumbs-en')
    <section class="breadcrumbs d-none d-xl-block">
        <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Work with us</h2>
            <ol>
            <li><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
            <li>Work with us</li>
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
                        <h4>Scancondo.com <br class="d-block d-sm-none">เว็บไซต์ในเครือบริษัท<br class="d-block d-sm-none"> บิลเฟต จำกัด</h4>
                        <p class="mt-4">
                            เราดำเนินการธุรกิจให้บริการ ซื้อ / ขาย / เช่า คอนโดมิเนียมทั่วกรุงเทพฯ และปริมณฑล มีความสนใจต้องการรับสมัครทีมงาน ที่มีใจรักงานด้านบริการ ขยัน อดทน มีความซื่อสัตย์ ร่วมเป็นส่วนหนึ่งในทีมงานของเรา สอบถามเพิ่มเติม โทร 02-728-4533 หรือ ไลน์ @scancondojob
                        </p>

                    </div>
                    
                </div>
            </div>

            <div class="container">



                <div class="row align-items-center mt-5">
                    <div class="col-lg-6 order-2 order-lg-2">
                        
                        <div class="mt-1 p-4 text-center">
                            <br class="d-block d-sm-none">
                            <h4>ตำแหน่ง : <br class="d-block d-sm-none">ฝ่ายบริการแนะนำงานขาย/เช่าคอนโด
                                </h4>
                                <h5>(Sales Executives)</h5>
                                {{-- slide --}}
                                <div id="testimonial-carousel2" class="swiper">
                                    <div class="swiper-wrapper">                            
                                        <div class="carousel-item-a swiper-slide">
                                            <p class="mt-2">
                                                <b>รายได้และสวัสดิการ :</b><br>
                                                เงินเดือน + ค่าคอมมิชชั่น
                                                ประกันสังคม, โบนัส, วันหยุดประจำปี, เงินรางวัลพิเศษ<br><br>
                                                
                                                <b>สถานที่ปฏิบัติงาน :</b><br>
                                                บางนาตราด กม.8 ใกล้มหาวิทยาลัยรามคำแหง 2<br><br>
                                                
                                                
                                                <b>รายละเอียดงาน :</b><br>
                                                ให้บริการคำแนะนำลูกค้า เกี่ยวกับคอนโดมิเนียมที่สนใจ เช่า/ซื้อคอนโด                         
                                            </p>                                        
                                        </div> 
                                        <div class="carousel-item-a swiper-slide">
                                            <p class="mt-1">
                                                <ul class="list-group">
                                                <li class="list-group-item"><b>คุณสมบัติ</b></li>
                                                <li class="list-group-item">อายุ 20 - 50 ปี ไม่จำกัดเพศ</li>
                                                <li class="list-group-item">รักงานขาย/งานบริการ มีทักษะพูดจูงใจ</li>
                                                <li class="list-group-item"> มีความกระตือรือร้น รักการเรียนรู้ บุคลิกภาพดี</li>
                                                <li class="list-group-item">หากสื่อสารภาษาอังกฤษได้ จะพิจารณาพิเศษ</li>
                                                
                                                </ul>                       
                                            </p>                                        
                                        </div> 
                                        <div class="carousel-item-a swiper-slide">
                                            <p class="mt-5">
                                                <ul class="list-group">
                                                <li class="list-group-item"><b>ลักษณะงาน</b></li>
                                                <li class="list-group-item">ตอบแชทลูกค้า พูดคุย และปิดการขาย (ประจำออฟฟิต)</li>
                                                <li class="list-group-item"> ให้คำแนะนำและให้บริการลูกค้าที่สนใจ เช่า/ซื้อ คอนโด</li>
                                                <li class="list-group-item">แนะนำข้อมูล สิทธิประโยชน์ และบริการให้กับลูกค้า</li>
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
                        <img src="{{ asset('assets_v2/images-news/jobs-001.png') }}" class="images-fluid">
                    </div>
                </div> 

                <div class="row align-items-center mt-5">
                    <div class="col-lg-6 order-2 order-lg-2">
                        <div class="mt-1 p-4 text-center">
                            <br class="d-block d-sm-none">
                            <h4>ตำแหน่ง : ฝ่ายบริการ<br class="d-block d-sm-none">เปิดห้องคอนโด ให้ลูกค้า
                                </h4>
                                <h5>(Sales Assistant)</h5>
                                {{-- slide --}}
                                <div id="testimonial-carousel" class="swiper">
                                    <div class="swiper-wrapper">                            
                                        <div class="carousel-item-a swiper-slide">
                                            <p class="mt-2">
                                                <b>รายได้และสวัสดิการ :</b><br>
                                                เงินเดือน + ค่าคอมมิชชั่น
                                                ประกันสังคม, โบนัส, วันหยุดประจำปี, เงินรางวัลพิเศษ<br><br>
                                                
                                                <b>สถานที่ปฏิบัติงาน :</b><br>
                                                บางนาตราด กม.8 ใกล้มหาวิทยาลัยรามคำแหง 2<br><br>
                                                
                                                
                                                <b>รายละเอียดงาน :</b><br>
                                                ให้บริการคำแนะนำลูกค้า เกี่ยวกับคอนโดมิเนียมที่สนใจ เช่า/ซื้อคอนโด                         
                                            </p>                                        
                                        </div> 
                                        <div class="carousel-item-a swiper-slide">
                                            <p class="mt-1">
                                                <ul class="list-group">
                                                <li class="list-group-item"><b>คุณสมบัติ</b></li>
                                                <li class="list-group-item">อายุ 25 - 40 ปี ไม่จำกัดเพศ</li>
                                                <li class="list-group-item">บุคลิกภาพดี พูดจาสุภาพ แต่งกายสะอาด</li>
                                                <li class="list-group-item">มีความซื่อสัตย์ และกระตือรือร้นในการทำงาน 
                                                </li>
                                                <li class="list-group-item">มีทักษะในการเจรจา (จะได้รับการพิจารณาเป็นพิเศษ)</li>
                                                <li class="list-group-item">มีรถจักรยานยนต์เป็นของตนเอง หรือ สามารถขับรถยนต์ได้</li>

                                                </ul>                       
                                            </p>                                        
                                        </div> 
                                        <div class="carousel-item-a swiper-slide">
                                            <p class="mt-5">
                                                <ul class="list-group">
                                                <li class="list-group-item"><b>ลักษณะงาน</b></li>
                                                <li class="list-group-item">นัดหมายกับลูกค้า เพื่อเปิดห้องให้กับลูกค้าที่สนใจเช่า/ซื้อ</li>
                                                <li class="list-group-item">แนะนำข้อมูล รายละเอียดโครงการ และบริการให้กับลูกค้า</li>
                                                <li class="list-group-item">สามารถเจรจาปิดการขายได้</li>
                                                </ul>                       
                                            </p>                                        
                                        </div> 
                                    </div> 
                                </div> 
                                <div class="testimonial-carousel-pagination carousel-pagination"></div> 
                                {{-- slide --}}
                            
                        </div>
                        
                    </div>
                    <div class="col-lg-6 order-1 order-lg-1 text-align-center">
                        <img src="{{ asset('assets_v2/images-news/jobs-002.png') }}" class="images-fluid">
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
                        <h4>Scancondo.com <br class="d-block d-sm-none">Websites in the group of <br class="d-block d-sm-none"> BillFett Co., Ltd.</h4>
                        <p class="mt-4">
                            We operate a business of buying / selling / renting condominiums throughout Bangkok and its vicinity. We are interested in recruiting a team. with service-mindedness, diligence, patience, honesty Be a part of our team For more information, <a href="https://lin.ee/fGSllTZ">Line @scancondojob</a>  or <a href="https://api.whatsapp.com/message/QBXG7VN7RV6YB1">Whatsapp</a>
                        </p>
                    </div>
                    
                </div>
            </div>

            <div class="row align-items-center mt-5">
                <div class="col-lg-6 order-2 order-lg-2">
                    
                    <div class="mt-1 p-4 text-center">
                        <br class="d-block d-sm-none">
                        <h4>Sales Executives
                            </h4>
                            <h5>Condo sales/rental advice service</h5>
                            {{-- slide --}}
                            <div id="testimonial-carousel2" class="swiper">
                                <div class="swiper-wrapper">                            
                                    <div class="carousel-item-a swiper-slide">
                                        <p class="mt-2">
                                            <b>Income and Welfare :</b><br>
                                            Salary + commission
                                            Social security, bonus, annual leave, special rewards<br><br>
                                            
                                            <b>Place of work :</b><br>
                                            Bangna-Trad Km.8 near Ramkhamhaeng University 2<br><br>
                                            
                                            
                                            <b>Job details :</b><br>
                                            Provide customer advice about interested condominiums Rent/buy a condo                         
                                        </p>                                        
                                    </div> 
                                    <div class="carousel-item-a swiper-slide">
                                        <p class="mt-1">
                                            <ul class="list-group">
                                                <li class="list-group-item"><b>Qualification</b></li>
                                                <li class="list-group-item">20 - 50 years old, no gender restrictions</li>
                                                <li class="list-group-item">Love sales/service work. Have persuasive speaking skills</li>
                                                <li class="list-group-item"> Enthusiastic love learning Good personality</li>
                                                <li class="list-group-item">If able to communicate in English. Special consideration</li>
                                            
                                            </ul>                       
                                        </p>                                        
                                    </div> 
                                    <div class="carousel-item-a swiper-slide">
                                        <p class="mt-5">
                                            <ul class="list-group">
                                                <li class="list-group-item"><b>Job Description</b></li>
                                                <li class="list-group-item">Respond to customer chats, talk and close sales 
                                                    (in the office)</li>
                                                <li class="list-group-item"> Give advice and services to customers who renting/buying condos</li>
                                                <li class="list-group-item">Recommended information. benefits and services to customers.</li>
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
                    <img src="{{ asset('assets_v2/images-news/jobs-001.png') }}" class="images-fluid">
                </div>
            </div> 

            <div class="row align-items-center mt-5">
                <div class="col-lg-6 order-2 order-lg-2">
                    <div class="mt-1 p-4 text-center">
                        <br class="d-block d-sm-none">
                        <h4>Sales Assistant
                            </h4>
                            <h5>(Open a condo room to customers.)</h5>
                            {{-- slide --}}
                            <div id="testimonial-carousel" class="swiper">
                                <div class="swiper-wrapper">                            
                                    <div class="carousel-item-a swiper-slide">
                                        <p class="mt-2">
                                            <b>Income and Welfare :</b><br>
                                            Salary + commission
                                            Social security, bonus, annual leave, special rewards<br><br>
                                            
                                            <b>Place of work :</b><br>
                                            Bangna-Trad Km.8 near Ramkhamhaeng University 2<br><br>
                                            
                                            
                                            <b>Job details :</b><br>
                                            Provide customer advice about interested condominiums Rent/buy a condo                         
                                        </p>                                        
                                    </div> 
                                    <div class="carousel-item-a swiper-slide">
                                        <p class="mt-1">
                                            <ul class="list-group">
                                                <li class="list-group-item"><b>Qualification</b></li>
                                                <li class="list-group-item">25 - 40 years old, no gender restrictions</li>
                                                <li class="list-group-item">Good personality, polite speech, clean dress</li>
                                                <li class="list-group-item">Be honest. and enthusiastic about work
                                                </li>
                                                <li class="list-group-item">Has negotiation skills. (Will be given special consideration)</li>
                                                <li class="list-group-item">Have your own motorcycle or can drive a car</li>
                                            </ul>                       
                                        </p>                                        
                                    </div> 
                                    <div class="carousel-item-a swiper-slide">
                                        <p class="mt-5">
                                            <ul class="list-group">
                                                <li class="list-group-item"><b>Job Description</b></li>
                                                <li class="list-group-item">Make an appointment with a customer. to open rooms to customers who are interested in renting / buying</li>
                                                <li class="list-group-item">Recommended information. project details and services to customers.</li>
                                                <li class="list-group-item">Can negotiate to close the sale</li>
                                            </ul>                       
                                        </p>                                        
                                    </div> 
                                </div> 
                            </div> 
                            <div class="testimonial-carousel-pagination carousel-pagination"></div> 
                            {{-- slide --}}
                        
                    </div>
                    
                </div>
                <div class="col-lg-6 order-1 order-lg-1 text-align-center">
                    <img src="{{ asset('assets_v2/images-news/jobs-002.png') }}" class="images-fluid">
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