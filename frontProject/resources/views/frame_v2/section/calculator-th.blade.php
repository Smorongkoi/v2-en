<section id="schedule" class="section-with-bg calculatetoon">
  <div class="container text-center" data-aos="fade-up">
    {{-- button group tab *************************************************--}}
    <div class="btn-group w-90" role="tablist"  data-aos="fade-up" data-aos-delay="100">
      <a href="#day-1" role="tab" data-bs-toggle="tab" class="btn btn-sm btn-outline-primary active">
        <div class="d-block d-sm-none p-1">
          <i class="fas fa-calculator"></i> &nbsp; ผ่อน/เดือน
        </div>
        <div class="d-none d-md-block">
          <i class="fas fa-calculator"></i> &nbsp; คำนวนเงินผ่อนค่าคอนโด
        </div>
      </a>
      <a href="#day-2" role="tab" data-bs-toggle="tab" class="btn btn-sm btn-outline-primary">
        <div class="d-block d-sm-none p-1">
          <i class="fas fa-bullseye"></i> &nbsp;วงเงินสูงสุด
        </div>
        <div class="d-none d-md-block">
          <i class="fas fa-bullseye"></i> &nbsp; วงเงินสูงสุดที่สามารถกู้ได้
        </div>            
      </a>
      <a href="#day-3" role="tab" data-bs-toggle="tab" class="btn btn-sm btn-outline-primary">
        <div class="d-block d-sm-none p-1">
          <i class="fas  fa-calendar-alt"></i>&nbsp;อัตราตอบแทน
        </div>
        <div class="d-none d-md-block">
          <i class="fas  fa-calendar-alt"></i> &nbsp; คำนวนอัตราผลตอบแทนรายปี
        </div>  
        
      </a>
    </div>
    {{-- button group tab *************************************************--}}
    <br><br>

    <h3 class="sub-heading">หากมีข้อสงสัยประการใด ติดต่อสอบถาม<br>
      ที่ไลน์ไอดี @scancondo ได้เลยค่ะ</h3>

    <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

      <!-- Schdule Day 1 -->
      <div role="tabpanel" class="col-lg-12 tab-pane fade show active" id="day-1">
          {{-- คำนวณเงินขอสินเชื่อ --}}
          <div class="board-facility">
            <div class="header">
              คำนวนเงินผ่อนค่าคอนโด
            </div>
            <div class="detail">
                <div class="calculator active" id="calculator-1">
                    <div class="row">
                     
                      <div class="col-md-5 col-12 p-4 mobile-calculator">
                        <label for="">
                        <strong>ราคาคอนโดที่กู้ <font id="alert_amount" style="display:none;" class="text-danger">กรุณาระบุข้อมูลวงเงินที่ต้องการกู้</font></strong>
                        </label>
                        <div class="input-group mb-3">
                        <input type="text" class="form-control input-number" id="input_amount" placeholder="กรุณาระบุตัวเลข" aria-label="กรุณาระบุตัวเลข" aria-describedby="basic-addon2"  autocomplete="off" value="{{ number_format($post->post_sale_price,0) }}">
                        <div class="input-group-append"><span class="input-group-text" id="basic-addon2">฿</span></div>
                        </div>
                        <label for="">
                        <strong>ระยะเวลาผ่อนชำระ <font id="alert_time" style="display:none;" class="text-danger">กรุณาระบุข้อมูลระยะเวลาผ่อนชำระ</font></strong>
                        </label>
                        <div class="input-group mb-3">
                        <input type="text" class="form-control input-number" id="input_time" placeholder="สูงสุดไม่ควรเกิน 30 ปี" aria-label="สูงสุดไม่ควรเกิน 30 ปี" aria-describedby="basic-addon2"  autocomplete="off" value="30">
                        <div class="input-group-append"><span class="input-group-text" id="basic-addon2">ปี</span></div>
                        </div>
                        <label for="">
                        <strong>อัตราดอกเบี้ย (ต่อปี) <font id="alert_percent" style="display:none;" class="text-danger">กรุณาระบุข้อมูลอัตราดอกเบี้ย</font></strong>
                        </label>
                        <div class="input-group mb-3">
                        <input type="text" class="form-control input-number" id="input_percent" placeholder="กรุณาระบุตัวเลข" aria-label="กรุณาระบุตัวเลข" aria-describedby="basic-addon2"  autocomplete="off" value="4">
                        <div class="input-group-append"><span class="input-group-text" id="basic-addon2">%</span></div>
                        </div>
                        <div class="text-center">
                        <button type="button" class="btn btn-success" name="button" onclick="Calculate();">
                            <i class="fas fa-calculator"></i> คำนวณเงินกู้
                        </button>
                      </div>
                    </div>

                        <div class="col-md-7 text-white bg-dark p-4 mobile-result">
                            <h2><i class="fas fa-calculator"></i> ผลการคำนวณเงินกู้</h2>
                            <p>
                            <span class="float-right"><font class="h2 Count" id="show_PMT_string">3,012,244.60</font> บาท</span><br>
                            ยอดผ่อนชำระต่อเดือน
                            </p>
                            <br>
                            <p>
                            วงเงินกู้สูงสุด
                            <span class="float-right"><font class="h4 Count" id="show_total">35,000,000.00</font> บาท</span>
                            </p>
                            <p>
                            รายได้รวมขั้นต่ำของผู้กู้ร่วม
                            <span class="float-right"><font class="h4 Count" id="show_loner">52,432.55</font> บาท</span>
                            </p>

                        </div>
                    </div>
                    
                </div>
            </div>
          </div>
      </div>
      <!-- End Schdule Day 1 -->

      <!-- Schdule Day 2 -->
      <div role="tabpanel" class="col-lg-12  tab-pane fade  show" id="day-2">
        {{-- คำนวณวงเงินสูงสุด --}}
        <div class="board-facility">
          <div class="header">
            วงเงินสูงสุดที่สามารถกู้ได้
          </div>
          <div class="detail">
              <div class="calculator active" id="calculator-2">
                  <div class="row">
                      <div class="col-md-5 col-12 p-5 mobile-calculator">

                          <label for="">
                              <strong>รายได้เฉลี่ยต่อเดือน (รวมรายได้ผู้กู้ร่วม(ถ้ามี)) <font id="alert_amount2" style="display:none;" class="text-danger">กรุณาระบุรายได้เฉลี่ยต่อเดือน</font></strong>
                          </label>
                          <div class="input-group mb-3">
                              <input type="text" class="form-control input-number" id="input_amount2" placeholder="กรุณาระบุตัวเลข" aria-label="กรุณาระบุตัวเลข" aria-describedby="basic-addon2"  autocomplete="off" value="30,000">
                              <div class="input-group-append"><span class="input-group-text" id="basic-addon22">฿</span></div>
                          </div>
                          <label for="">
                            <strong>ภาระหนี้ต่อเดือน (ถ้ามี) <font id="alert_amount2" style="display:none;" class="text-danger">กรุณาระบุภาระหนี้ต่อเดือน</font></strong>
                        </label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control input-number" id="input_dept" placeholder="กรุณาระบุตัวเลข" aria-label="กรุณาระบุตัวเลข" aria-describedby="basic-addon2"  autocomplete="off" value="1,000">
                            <div class="input-group-append"><span class="input-group-text" id="basic-addon22">฿</span></div>
                        </div>

                          <label for="">
                              <select class="form-select" aria-label="Default select example" id="input_yy">
                                <option  value="5800">ผ่อน 40 ปี</option>
                                <option selected value="6000">ผ่อน 30 ปี</option>
                                <option value="6500">ผ่อน 25 ปี</option>
                                <option value="7000">ผ่อน 20 ปี</option>
                                <option value="7500">ผ่อน 15 ปี</option>
                                <option value="7000">ผ่อน 10 ปี</option>
                              </select>
                          </label>

                          <div class="input-group mb-3" style="display: none">
                              <input type="text" class="form-control input-number" id="input_time2" placeholder="สูงสุดไม่ควรเกิน 40 ปี" aria-label="สูงสุดไม่ควรเกิน 40 ปี" aria-describedby="basic-addon2"  autocomplete="off" value="30">
                              <div class="input-group-append"><span class="input-group-text" id="basic-addon22">ปี</span></div>
                          </div>
                          <label for="" style="display: none">>
                              <strong>อัตราดอกเบี้ย (ต่อปี) <font id="alert_percent2" style="display:none;" class="text-danger">กรุณาระบุข้อมูลอัตราดอกเบี้ย</font></strong>
                          </label>
                          <div class="input-group mb-3" style="display: none">>
                              <input type="text" class="form-control input-number" id="input_percent2" placeholder="ระบุเป็น %" aria-label="ระบุเป็น %" aria-describedby="basic-addon2"  autocomplete="off" value="4">
                              <div class="input-group-append"><span class="input-group-text" id="basic-addon22">%</span></div>
                          </div><br><br>
                          <div class="text-center">
                              <button type="button" class="btn btn-success " name="button" onclick="Calculate2();">
                                  <i class="fas fa-bullseye"></i> เช็ควงเงินสูงสุด
                              </button>
                          </div>
                      </div>
                      <div class="col-md-7 text-white bg-dark p-5">
                          <h2><i class="fas fa-bullseye"></i> ผลการคำนวณวงเงินสูงสุด</h2>

                          <br><br><br>
                          <p  style="display: none">
                            รายได้ * 0.6  เท่ากับ<br>
                            <span class="float-right"><font class="h1 Count" id="formula">15,000</font> บาท</span><br><br>

                            ภาระหนี้ต่อเดือน<br>
                            <span class="float-right"><font class="h1 Count" id="show_dept">0</font> บาท</span><br><br>

                            รายได้ - ภาระหนี้ เท่ากับ<br>
                            <span class="float-right"><font class="h1 Count" id="show_nodept">15,000</font> บาท</span><br><br>


                            ตัวที่เอามาหาร<br>
                            <span class="float-right"><font class="h1 Count" id="show_yy">5,800</font> บาท</span><br><br>
                          </p>
                          <p>
                            ยอดสูงสุดที่กู้ได้ เท่ากับ<br>
                            <span class="float-right"><font class="h1 Count" id="show_divide">2,833,000</font> บาท</span><br><br>
                          </p>
                            <p style="display: none">
                              ยอดสูงสุดที่กู้ได้
                              <span class="float-right"><font class="h1 Count" id="show_loner2">2,181,305</font> บาท</span>
                          </p><br>

                          <p style="display: none">
                              ผ่อนชำระต่องวดทั้งสิ้น
                              <span class="float-right"><font class="h1 Count" id="show_PMT_string2">
                                11,250</font> บาท</span>
                          </p>

                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
      <!-- End Schdule Day 2 -->

      <!-- Schdule Day 3 -->
      <div role="tabpanel" class="col-lg-12  tab-pane fade" id="day-3">
          {{-- คำนวนอัตราผลตอบแทนรายปี --}}
          <div class="board-facility">
            <div class="header">
                คำนวนอัตราผล<br class="d-block d-md-none">ตอบแทนรายปี
            </div>
            <div class="detail">
                <div class="cal-content active" id="calculator-3">
                    <div class="row">
                      <div class="col-md-5 col-12 p-5">
                        <label for="">
                          <strong>ราคาคอนโด <font id="alert_amount3" style="display:none;" class="text-danger">กรุณาระบุราคาคอนโด</font></strong>
                        </label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control input-number" id="input_amount3" placeholder="กรุณาระบุตัวเลข" aria-label="กรุณาระบุตัวเลข" aria-describedby="basic-addon2"  autocomplete="off" value="{{ number_format($post->post_sale_price,0) }}">
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
                          <span class="float-right"><font class="h1 Count" id="show_loner3">52,432.55</font> %</span>
                        </p><br>
            
                        <p>
                          ระยะเวลาคืนทุน
                          <span class="float-right"><font class="h1 Count" id="show_PMT_string3">35,000,000.00</font> ปี</span>
                        </p>
            
                      </div>
                    </div>
                  </div>             

            </div>
          </div>
      </div>
      <!-- End Schdule Day 2 -->

    </div>

  </div>

</section>

