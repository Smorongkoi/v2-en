@extends('layouts_v2.singlepage')
{{-- ไทย --}}
@section('title-th', 'Scancondo : ดอกเบี้ยสินเชื่อบ้าน')
@section('facebook-title-th', 'Scancondo : ดอกเบี้ยสินเชื่อบ้าน')

@section('title-en', 'Scancondo | Mortgage Interest Rate')
@section('facebook-title-en', 'Scancondo | Mortgage Interest Rate')

@section('meta-description-th','Scancondo ตัวแทน (Agent) ให้บริการหาห้อง หาเช่า คอนโดในทำเลที่ดี ห้องสวย
พร้อมเข้าอยู่ ตามความต้องการและงบประมาณของคุณผ่านระบบฐานข้อมูลขนาดใหญ่ของเรา | ดอกเบี้ยสินเชื่อบ้าน')
@section('meta-description-en','Find your room easily with Scancondo.com. There are a lot of great room you can choose. Great condominium, location, facilities and good room decoration. | Annual return rate Calculator')

@section('meta-keywords-th','ดอกเบี้ยสินเชื่อบ้าน, เครื่องมือสำหรับอสังหาฯ')
@section('meta-keywords-en','Mortgage Interest Rate, Real estate, realtor')

@section('head-tag')
    <link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/swal/dist/sweetalert2.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/image-uploader/image-uploader.min.css') }}">
    <link href="{{ asset('assets_v2/assets/css/style-slide.css') }}" rel="stylesheet"> 
@endsection

@section('breadcrumbs-th')
    <section id="breadcrumbs" class="breadcrumbs d-none d-xl-block">        
        <div class="text-center container">
            <h1 class="d-none d-md-block"><i class="fas fa-building"></i>&nbsp; 
              ดอกเบี้ยสินเชื่อบ้าน
            </h1> 
        </div>
        <div class="container text-center d-none d-md-block">  
            <ol>
                <li><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                <li>เครื่องมือสำหรับอสังหาฯ</li>
                <li>ดอกเบี้ยสินเชื่อบ้าน</li>
            </ol>
            
        </div>
    </section>
@endsection
@section('breadcrumbs-en')
    <section id="breadcrumbs" class="breadcrumbs d-none d-xl-block">        
        <div class="text-center container">
            <h1 class="d-none d-md-block"><i class="fas fa-building"></i>&nbsp; 
              Mortgage Interest Rate
            </h1> 
        </div>
        <div class="container text-center d-none d-md-block">  
            <ol>
                <li><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                <li>Tools For Realtor</li>
                <li>Mortgage Interest Rate</li>
            </ol>
            
        </div>
    </section>
@endsection

{{-- @section('link_th',$url) --}}

@section('content-th')
  <section id="schedule" class="section-with-bg calculatetoon">
    <div class="container text-center" data-aos="fade-up">

      <div class="btn-group w-90" role="group"  data-aos="fade-up" data-aos-delay="100">
        <a href="#" class="btn btn-sm btn-outline-primary  active">
          <div class="d-block d-sm-none p-1">
            <i class="fas fa-calculator"></i> &nbsp; ดอกเบี้ยคอนโด
          </div>
          <div class="d-none d-md-block">
            <i class="fas fa-calculator"></i> &nbsp; ดอกเบี้ยสินเชื่อคอนโด
          </div>
        </a>
        <a href="{{ route('font-calculate5') }}" class="btn btn-sm btn-outline-primary">
          <div class="d-block d-sm-none p-1">
            <i class="fas fa-bullseye"></i> &nbsp;คุณสมบัติผู้กู้
          </div>
          <div class="d-none d-md-block">
            <i class="fas fa-bullseye"></i> &nbsp; คุณสมบัติผู้กู้แต่ละธนาคาร
          </div>            
        </a>
      </div>
      <br><br>



      <h3 class="sub-heading">หากมีข้อสงสัยประการใด ติดต่อสอบถาม<br>
        ที่ไลน์ไอดี @scancondo ได้เลยค่ะ</h3>

      <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

        <!-- Schdule Day 1 -->
        <div role="tabpanel" class="col-lg-12 tab-pane fade show active" id="day-1">
          {{-- คำนวณเงินขอสินเชื่อ --}}
          <div class="board-facility">
            <div class="header">
              ดอกเบี้ยสินเชื่อบ้าน
            </div>
            <div class="detail">
                <div class="calculator active" id="calculator-1">
                    <div class="row">
                          <div class="col-md-12 col-12 p-4">
                            <!--table-->
                            @include('calculate_v2.update-th')                                
                            <!--table-->
                          </div>
                    </div>
                    
                </div>
              
            </div>
          </div>
        </div>
        <!-- Schdule Day 1 -->

      </div>

    </div>

  </section>                         
@endsection
@section('content-en')
  <section id="schedule" class="section-with-bg calculatetoon">
    <div class="container text-center" data-aos="fade-up">

      <div class="btn-group w-90" role="group"  data-aos="fade-up" data-aos-delay="100">
        <a href="#" class="btn btn-sm btn-outline-primary  active">
          <div class="d-block d-sm-none p-1">
            <i class="fas fa-calculator"></i> &nbsp; Interest Rate
          </div>
          <div class="d-none d-md-block">
            <i class="fas fa-calculator"></i> &nbsp; Mortgage Interest Rate
          </div>
        </a>
        <a href="{{ route('font-calculate5') }}" class="btn btn-sm btn-outline-primary">
          <div class="d-block d-sm-none p-1">
            <i class="fas fa-bullseye"></i> &nbsp; Requirements
          </div>
          <div class="d-none d-md-block">
            <i class="fas fa-bullseye"></i> &nbsp;  Loan applicant requirements
          </div>            
        </a>

      </div>
      <br><br>


      <h3 class="sub-heading">If you have any questions, please contact us<br> via Line ID 
        <a href="//line.me/R/ti/p/%40704uwpvc">@scancondo</a></h3>

      <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

        <!-- Schdule Day 1 -->
        <div role="tabpanel" class="col-lg-12 tab-pane fade show active" id="day-1">
          {{-- คำนวณเงินขอสินเชื่อ --}}
          <div class="board-facility">
            <div class="header">
              Mortgage Interest Rate
            </div>
            <div class="detail">
                <div class="calculator active" id="calculator-1">
                    <div class="row">
                          <div class="col-md-12 col-12 p-4">
                            <!--table-->
                            @include('calculate_v2.update-en')                                
                            <!--table-->
                          </div>
                    </div>
                    
                </div>
              
            </div>
          </div>
        </div>
        <!-- Schdule Day 1 -->

      </div>

    </div>

  </section>
@endsection

@section('script')
<script src="{{ asset('plugins/select2/select2.full.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('js/area.js') }}" charset="utf-8"></script>
{{-- <script src="{{ asset('plugins/select2/select2.full.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('plugins/swal/dist/sweetalert2.js') }}" charset="utf-8"></script>
<script src="{{ asset('assets_v2/assets/js/main-slide.js') }}"></script> --}}

    <script>
      var imageBoxLoad = 0;
      var imageBoxH = $('#imageBox').offset().top;
      $(window).on('load', function() {
  
          Calculate();
          Calculate2();
          Calculate3();
  
          $(window).scroll(function (event) {
              var wH = $(window).height();
              var wS = $(this).scrollTop();
              var scrollTo = wS + wH;
              if (imageBoxLoad == 0 && scrollTo >= imageBoxH) {
                  imageBoxLoad = 1;
                  getPostOth();
              }
          });
      });
  
  
      function numberWithCommas(number) {
        var parts = number.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        return parts.join(".");
      }
  
      function Calculate() {
  
        var check = 0;
  
        var amount = parseFloat(RemoveComma($("#input_amount").val()));
        var year = parseFloat(RemoveComma($("#input_time").val()));
        var intyear = parseFloat(RemoveComma($("#input_percent").val()));
  
        if (isNaN(amount)) {
          $("#alert_amount").show();
          check = 1;
        } else {
          $("#alert_amount").hide();
        }
        if (isNaN(year)) {
          $("#alert_time").show();
          check = 1;
        } else {
          $("#alert_time").hide();
        }
        if (isNaN(intyear)) {
          $("#alert_percent").show();
          check = 1;
        } else {
          $("#alert_percent").hide();
        }
  
        if (check == 1) {
          return false;
        }
  
        var interest_year = (intyear/100);
        var interest_year_show = interest_year*100;
        var interest_month = (interest_year/12);
        var interest_month_plus =1+interest_month;
        var inttime = year*12;
        var result1 = (1/Math.pow(interest_month_plus,inttime));
        var result2 = (1-result1)/interest_month;
        var PMT = amount/result2;
        var LOAN = PMT+(PMT*1.5);
        var PMT_string = Math.round(PMT*100)/100 ;
        var LOAN_string = Math.round(LOAN*100)/100 ;
        var DDD = PMT_string;
        var loner = LOAN_string;
  
        $('#show_PMT_string').html(DDD);
        $('#show_total').html(amount);
        $('#show_loner').html(loner);
  
        $('#calculator-1 .Count').each(function () {
          var $this = $(this);
          jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
            duration: 1000,
            easing: 'swing',
            step: function () {
              $this.text(numberWithCommas(Math.ceil(this.Counter)));
            }
          });
  
  
        });
        setTimeout(function(){
          $('#show_PMT_string').html(numberWithCommas(DDD));
          $('#show_total').html(numberWithCommas(amount));
          $('#show_loner').html(numberWithCommas(loner));
        }, 1050);
      }
  
      function Calculate2() {
  
        var check = 0;
  
        var amount = parseFloat(RemoveComma($("#input_amount2").val()));
        var year = parseFloat(RemoveComma($("#input_time2").val()));
        var intyear = parseFloat(RemoveComma($("#input_percent2").val()));
  
        if (isNaN(amount)) {
          $("#alert_amount2").show();
          check = 1;
        } else {
          $("#alert_amount2").hide();
        }
        if (isNaN(year)) {
          $("#alert_time2").show();
          check = 1;
        } else {
          $("#alert_time2").hide();
        }
        if (isNaN(intyear)) {
          $("#alert_percent2").show();
          check = 1;
        } else {
          $("#alert_percent2").hide();
        }
  
        if (check == 1) {
          return false;
        }
  
        var interest_year = (intyear/100);
        var interest_year_show = interest_year*100;
        var interest_month = (interest_year/12);
        var interest_month_plus =1+interest_month;
        var inttime = year*12;
        var result1 = (1/Math.pow(interest_month_plus,inttime));
        var result2 = (1-result1)/interest_month;
        var result3 = (1-result1);
  
        var PMT = amount*0.45;
        var PMT2= PMT;
        var p0=1+interest_month;
        var PMT3=(1/Math.pow(1+interest_month_plus,inttime));
        var PMT3b=(1+Math.pow(1+interest_month_plus,inttime));
        var PMT4=PMT2/1-PMT3;
  
        var LOAN =Math.pow(1+interest_month,inttime) ;
        var LOAN2 =1-(1/LOAN);
  
        var PMT_string = Math.round(PMT*100)/100 ;
  
        var e13=1-(1/LOAN);
        var e15=interest_month/e13;
        var xcx=0.005208787422143495+e15;
        var e16=0.000383+e15;
        var maxloan=PMT2/e16;
        var maxloan2=maxloan-130.54200000013225;
        var maxloan_string2 =Math.floor(maxloan2);
        var LOAN_string = maxloan_string2 ;
  
        var intdex=interest_month+0.000383;
        var DDD = PMT_string;
        var loner = LOAN_string;
  
        $('#show_PMT_string2').html(DDD);
        $('#show_total2').html(amount);
        $('#show_loner2').html(loner);
  
        $('#calculator-2 .Count').each(function () {
          var $this = $(this);
          jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
            duration: 1000,
            easing: 'swing',
            step: function () {
              $this.text(numberWithCommas(Math.ceil(this.Counter)));
            }
          });
  
  
        });
        setTimeout(function(){
          $('#show_PMT_string2').html(numberWithCommas(DDD));
          $('#show_total2').html(numberWithCommas(amount));
          $('#show_loner2').html(numberWithCommas(loner));
        }, 1050);
      }
  
      function Calculate3() {
  
          var check = 0;
  
          var amount = parseFloat(RemoveComma($("#input_amount3").val()));
          var year = parseFloat(RemoveComma($("#input_time3").val()));
          var intyear = parseFloat(RemoveComma($("#input_percent3").val()));
  
          if (isNaN(amount)) {
            $("#alert_amount3").show();
            check = 1;
          } else {
            $("#alert_amount3").hide();
          }
          if (isNaN(year)) {
            $("#alert_time3").show();
            check = 1;
          } else {
            $("#alert_time3").hide();
          }
  
          if (isNaN(intyear)) {
            $("#alert_percent3").show();
            check = 1;
          } else {
            $("#alert_percent3").hide();
          }
  
          if (check == 1) {
            return false;
          }
  
          var maxloan_string2 = (year * 1200) / (amount);
          //var maxloan_string2 = (amount * 12) / (year*100);
  
  
          var interest_year = (intyear/100);
          var interest_year_show = interest_year*100;
          var interest_month = (interest_year/12);
          var interest_month_plus =1+interest_month;
          var inttime = year*12;
          var result1 = (1/Math.pow(interest_month_plus,inttime));
          var result2 = (1-result1)/interest_month;
          var result3 = (1-result1);
  
          var PMT = (amount * 1200) / year;
          var PMT2= PMT;
          var p0=1+interest_month;
          var PMT3=(1/Math.pow(1+interest_month_plus,inttime));
          var PMT3b=(1+Math.pow(1+interest_month_plus,inttime));
          var PMT4=PMT2/1-PMT3;
  
          var LOAN =Math.pow(1+interest_month,inttime) ;
          var LOAN2 =1-(1/LOAN);
  
          var PMT_string = Math.round(PMT*100)/100 ;
  
          var e13=1-(1/LOAN);
          var e15=interest_month/e13;
          var xcx=0.005208787422143495+e15;
          var e16=0.000383+e15;
  
  
          var LOAN_string = maxloan_string2 ;
  
          var intdex=interest_month+0.000383;
          var lonlon = maxloan_string2.toFixed(3) ;
  
          var maxloan_string3 = amount/(year * 12) ;
          var maxloan_string4 = Math.round(maxloan_string3*100)/100 ;
          var lonlon3 = maxloan_string4.toFixed(0) ;
          var DDD = lonlon3;
          var loner = lonlon;
  
          $('#show_PMT_string3').html(DDD);
          $('#show_total3').html(amount);
          $('#show_loner3').html(loner);
  
          $('.Count').each(function () {
            var $this = $(this);
            jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
              duration: 1000,
              easing: 'swing',
              step: function () {
                $this.text(numberWithCommas(Math.ceil(this.Counter)));
              }
            });
  
  
          });
          setTimeout(function(){
            $('#show_PMT_string3').html(numberWithCommas(DDD));
            $('#show_total3').html(numberWithCommas(amount));
            $('#show_loner3').html(numberWithCommas(loner));
          }, 1050);
      }
  
  
    </script>
@endsection

@section('script-th')

@endsection

@section('script-en')

@endsection