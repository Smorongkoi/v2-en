@extends('layouts_v2.singlepage')
{{-- ไทย --}}
@section('title-th', 'Scancondo : คำนวนผลตอบแทนรายปี')
@section('facebook-title-th', 'Scancondo : คำนวนผลตอบแทนรายปี')

@section('title-en', 'Scancondo | Annual return rate Calculator')
@section('facebook-title-en', 'Scancondo | Annual return rate Calculator')

@section('meta-description-th','Scancondo ตัวแทน (Agent) ให้บริการหาห้อง หาเช่า คอนโดในทำเลที่ดี ห้องสวย
พร้อมเข้าอยู่ ตามความต้องการและงบประมาณของคุณผ่านระบบฐานข้อมูลขนาดใหญ่ของเรา | คำนวนผลตอบแทนรายปี')
@section('meta-description-en','Find your room easily with Scancondo.com. There are a lot of great room you can choose. Great condominium, location, facilities and good room decoration. | Annual return rate Calculator')

@section('meta-keywords-th','คำนวนผลตอบแทนรายปี, เครื่องมือสำหรับอสังหาฯ')
@section('meta-keywords-en','Annual return rate Calculator, Real estate, realtor')

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
              คำนวนผลตอบแทนรายปี
            </h1> 
        </div>
        <div class="container text-center d-none d-md-block">  
            <ol>
                <li><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                <li>เครื่องมือสำหรับอสังหาฯ</li>
                <li>คำนวนผลตอบแทนรายปี</li>
            </ol>
            
        </div>
    </section>
@endsection
@section('breadcrumbs-en')
    <section id="breadcrumbs" class="breadcrumbs d-none d-xl-block">        
        <div class="text-center container">
            <h1 class="d-none d-md-block"><i class="fas fa-building"></i>&nbsp; 
              Annual return rate Calculator
            </h1> 
        </div>
        <div class="container text-center d-none d-md-block">  
            <ol>
                <li><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                <li>Tools For Realtor</li>
                <li>Annual return rate Calculator</li>
            </ol>
            
        </div>
    </section>
@endsection

{{-- @section('link_th',$url) --}}

@section('content-th')
  <section id="schedule" class="section-with-bg calculatetoon">
    <div class="container text-center" data-aos="fade-up">

      <div class="btn-group w-90" role="group"  data-aos="fade-up" data-aos-delay="100">
        <a href="{{ route('font-calculate1') }}" class="btn btn-sm btn-outline-primary">
          <div class="d-block d-sm-none p-1">
            <i class="fas fa-calculator"></i> &nbsp; ผ่อน/เดือน
          </div>
          <div class="d-none d-md-block">
            <i class="fas fa-calculator"></i> &nbsp; คำนวนเงินผ่อนค่าคอนโด
          </div>
        </a>
        <a href="{{ route('font-calculate2') }}" class="btn btn-sm btn-outline-primary">
          <div class="d-block d-sm-none p-1">
            <i class="fas fa-bullseye"></i> &nbsp;วงเงินสูงสุด
          </div>
          <div class="d-none d-md-block">
            <i class="fas fa-bullseye"></i> &nbsp; วงเงินสูงสุดที่สามารถกู้ได้
          </div>            
        </a>
        <a href="#" class="btn btn-sm btn-outline-primary  active">
          <div class="d-block d-sm-none p-1">
            <i class="fas  fa-calendar-alt"></i>&nbsp;อัตราตอบแทน
          </div>
          <div class="d-none d-md-block">
            <i class="fas  fa-calendar-alt"></i> &nbsp; คำนวนอัตราผลตอบแทนรายปี
          </div>  
          
        </a>
      </div>
      <br><br>



      <h3 class="sub-heading">หากมีข้อสงสัยประการใด ติดต่อสอบถาม<br>
        ที่ไลน์ไอดี @scancondo ได้เลยค่ะ</h3>

      <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

        <!-- Schdule Day 1 -->
        <div role="tabpanel" class="col-lg-12  tab-pane fade  show active" id="day-3">
          {{-- คำนวนอัตราผลตอบแทนรายปี --}}
          <div class="board-facility">
            <div class="header">
              คำนวนอัตราผล<br class="d-block d-md-none">ตอบแทนรายปี
            </div>
            <div class="detail">
                <div class="cal-content active" id="calculator-3">
                    <div class="row">
                      <div class="col-md-5 col-12 p-5 mobile-calculator">
                        <label for="">
                          <strong>ราคาคอนโด <font id="alert_amount3" style="display:none;" class="text-danger">กรุณาระบุราคาคอนโด</font></strong>
                        </label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control input-number" id="input_amount3" placeholder="กรุณาระบุตัวเลข" aria-label="กรุณาระบุตัวเลข" aria-describedby="basic-addon2"  autocomplete="off" 
                          value="{{ number_format(2500000,0) }}">
                          <div class="input-group-append"><span class="input-group-text" id="basic-addon23">฿</span></div>
                        </div>
                        <label for="">
                          <strong>ค่าเช่าต่อเดือน <font id="alert_time3" style="display:none;" class="text-danger">กรุณาระบุค่าเช่าต่อเดือน</font></strong>
                        </label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control input-number" id="input_time3" placeholder="กรุณาระบุค่าเช่าต่อเดือน"
                          aria-label="กรุณาระบุตัวเลข" aria-describedby="basic-addon3"  autocomplete="off" value="25,000">
                          <div class="input-group-append"><span class="input-group-text" id="basic-addon23">฿</span></div>
                        </div>
                        <label for="">
                          <strong><font id="alert_percent3" style="display:none;" class="text-danger">&nbsp;</font></strong>
                        </label>
                        <div class="input-group mb-3" style="display:none;">
                          <input type="text" class="form-control input-number" id="input_percent3" placeholder="ระบุเป็น %"
                          aria-label="ระบุเป็น %" aria-describedby="basic-addon2"  autocomplete="off" value="5.995">
                          <div class="input-group-append"><span class="input-group-text" id="basic-addon22">%</span></div>
                        </div>
                        <div class="text-right">
            
                          <button type="button" class="btn btn-success " name="button" onclick="Calculate3();">
                            <i class="fas  fa-calendar-alt"></i> เช็คอัตรา % ค่าเช่า
                          </button>
                        </div>
            
                      </div>
                      <div class="col-md-7 text-white bg-dark p-5">
                        <h2><i class="fas  fa-calendar-alt"></i> ผลการคำนวณอัตราผลตอบแทนรายปี</h2>
            
                        <br><br><br>
                        <p>
                          อัตราผลตอบแทนรายปี
                          <span class="float-right"><font class="h1 Count" id="show_loner3">12.00</font> %</span>
                        </p><br>
            
                        <p>
                          ระยะเวลาคืนทุน
                          <span class="float-right"><font class="h1 Count" id="show_PMT_string3">8</font> ปี</span>
                        </p>
            
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
        <a href="{{ route('font-calculate1') }}" class="btn btn-sm btn-outline-primary">
          <div class="d-block d-sm-none p-1">
            <i class="fas fa-calculator"></i> &nbsp; Installment
          </div>
          <div class="d-none d-md-block">
            <i class="fas fa-calculator"></i> &nbsp; Condo Installment / period
          </div>
        </a>
        <a href="{{ route('font-calculate2') }}" class="btn btn-sm btn-outline-primary">
          <div class="d-block d-sm-none p-1">
            <i class="fas fa-bullseye"></i> &nbsp; Max.loan
          </div>
          <div class="d-none d-md-block">
            <i class="fas fa-bullseye"></i> &nbsp; Maximum loan amount.
          </div>            
        </a>
        <a href="#" class="btn btn-sm btn-outline-primary  active">
          <div class="d-block d-sm-none p-1">
            <i class="fas  fa-calendar-alt"></i>&nbsp;Return
          </div>
          <div class="d-none d-md-block">
            <i class="fas  fa-calendar-alt"></i> &nbsp; Annual return rate
          </div>  
          
        </a>
      </div>
      <br><br>


      <h3 class="sub-heading">If you have any questions, please contact us<br> via Line ID 
        <a href="//line.me/R/ti/p/%40704uwpvc">@scancondo</a></h3>

      <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

        <!-- Schdule Day 1 -->
        <div role="tabpanel" class="col-lg-12  tab-pane fade  show active" id="day-3">
          {{-- คำนวนอัตราผลตอบแทนรายปี --}}
          <div class="board-facility">
            <div class="header">
              Annual return rate<br class="d-block d-md-none"> Calculator
            </div>
            <div class="detail">
                <div class="cal-content active" id="calculator-3">
                    <div class="row">
                      <div class="col-md-5 col-12 p-5 mobile-calculator">
                        <label for="">
                          <strong>Condominium price <font id="alert_amount3" style="display:none;" class="text-danger">Please specify Condominium price</font></strong>
                        </label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control input-number" id="input_amount3" placeholder="Please specify the numbers" aria-label="Please specify the numbers" aria-describedby="basic-addon2"  autocomplete="off" 
                          value="{{ number_format(2500000,0) }}">
                          <div class="input-group-append"><span class="input-group-text" id="basic-addon23">฿</span></div>
                        </div>
                        <label for="">
                          <strong>Monthly rent <font id="alert_time3" style="display:none;" class="text-danger">Please specify Monthly rent</font></strong>
                        </label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control input-number" id="input_time3" 
                          placeholder="Please specify Monthly rent"
                          aria-label="Please specify the numbers" aria-describedby="basic-addon3"  autocomplete="off" value="25,000">
                          <div class="input-group-append"><span class="input-group-text" id="basic-addon23">฿</span></div>
                        </div>
                        <label for="">
                          <strong><font id="alert_percent3" style="display:none;" class="text-danger">&nbsp;</font></strong>
                        </label>
                        <div class="input-group mb-3" style="display:none;">
                          <input type="text" class="form-control input-number" id="input_percent3" 
                          placeholder="Specify as %" aria-label="Specify as %" aria-describedby="basic-addon2"  autocomplete="off" value="5.995">
                          <div class="input-group-append"><span class="input-group-text" id="basic-addon22">%</span></div>
                        </div>
                        <div class="text-right">
            
                          <button type="button" class="btn btn-success " name="button" onclick="Calculate3();">
                            <i class="fas  fa-calendar-alt"></i> Check the rental rate %
                          </button>
                        </div>
            
                      </div>
                      <div class="col-md-7 text-white bg-dark p-5">
                        <h2><i class="fas  fa-calendar-alt"></i>  Calculation of annual return rate</h2>
            
                        <br><br><br>
                        <p>
                          Annual return rate
                          <span class="float-right"><font class="h1 Count" id="show_loner3">12.00</font> %</span>
                        </p><br>
            
                        <p>
                          Payback period
                          <span class="float-right"><font class="h1 Count" id="show_PMT_string3">8</font> Years</span>
                        </p>
            
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