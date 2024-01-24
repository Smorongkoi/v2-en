<section id="schedule" class="section-with-bg calculatetoon">
  <div class="container text-center" data-aos="fade-up">
    {{-- button group tab *************************************************--}}
    <div class="btn-group w-90" role="tablist"  data-aos="fade-up" data-aos-delay="100">
      <a href="#day-1" role="tab" data-bs-toggle="tab" class="btn btn-sm btn-outline-primary active">
        <div class="d-block d-sm-none p-1">
          <i class="fas fa-calculator"></i> &nbsp; Installment / period
        </div>
        <div class="d-none d-md-block">
          <i class="fas fa-calculator"></i> &nbsp; Installment / period
        </div>
      </a>
      <a href="#day-2" role="tab" data-bs-toggle="tab" class="btn btn-sm btn-outline-primary">
        <div class="d-block d-sm-none p-1">
          <i class="fas fa-bullseye"></i> &nbsp;Loan limit
        </div>
        <div class="d-none d-md-block">
          <i class="fas fa-bullseye"></i> &nbsp;Loan amount limit
        </div>            
      </a>
      <a href="#day-3" role="tab" data-bs-toggle="tab" class="btn btn-sm btn-outline-primary">
        <div class="d-block d-sm-none p-1">
          <i class="fas  fa-calendar-alt"></i>&nbsp;Return rate
        </div>
        <div class="d-none d-md-block">
          <i class="fas  fa-calendar-alt"></i> &nbsp; Annual return rate
        </div>  
        
      </a>
    </div>
    {{-- button group tab *************************************************--}}

    <br><br>

    <h3 class="sub-heading"> If you have any questions<br>
      Please contact us at Line ID <a href="//line.me/R/ti/p/%40704uwpvc" target="_blank" rel="nofollow">@scancondo</a>.</h3>

    <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

      <!-- Schdule Day 1 -->
      <div role="tabpanel" class="col-lg-12 tab-pane fade show active" id="day-1">
          {{-- คำนวณเงินขอสินเชื่อ --}}
          <div class="board-facility">
            <div class="header">
              Condo Installment / period
            </div>
            <div class="detail">
                <div class="calculator active" id="calculator-1">
                    <div class="row">
                     
                      <div class="col-md-5 col-12 p-4 mobile-calculator">
                        <label for="">
                        <strong>The price of the condominium being loaned  <font id="alert_amount" style="display:none;" class="text-danger">Please specify  price of the condominium being loaned</font></strong>
                        </label>
                        <div class="input-group mb-3">
                        <input type="text" class="form-control input-number" id="input_amount" placeholder="Please specify the numbers" aria-label="Please specify the numbers" aria-describedby="basic-addon2"  autocomplete="off" value="{{ number_format($post->post_sale_price,0) }}">
                        <div class="input-group-append"><span class="input-group-text" id="basic-addon2">฿</span></div>
                        </div>
                        <label for="">
                        <strong>The repayment period <font id="alert_time" style="display:none;" class="text-danger">Please specify the repayment period information</font></strong>
                        </label>
                        <div class="input-group mb-3">
                        <input type="text" class="form-control input-number" id="input_time" placeholder="สูงสุดไม่ควรเกิน 30 ปี" aria-label="สูงสุดไม่ควรเกิน 30 ปี" aria-describedby="basic-addon2"  autocomplete="off" value="30">
                        <div class="input-group-append"><span class="input-group-text" id="basic-addon2">Years</span></div>
                        </div>
                        <label for="">
                        <strong>Interest rate (per year) <font id="alert_percent" style="display:none;" class="text-danger">Please specify the interest rate information</font></strong>
                        </label>
                        <div class="input-group mb-3">
                        <input type="text" class="form-control input-number" id="input_percent" placeholder="Please specify the numbers" aria-label="Please specify the numbers" aria-describedby="basic-addon2"  autocomplete="off" value="4">
                        <div class="input-group-append"><span class="input-group-text" id="basic-addon2">%</span></div>
                        </div>
                        <div class="text-center">
                        <button type="button" class="btn btn-success" name="button" onclick="Calculate();">
                            <i class="fas fa-calculator"></i> Calculate the loan amount
                        </button>
                      </div>
                    </div>

                        <div class="col-md-7 text-white bg-dark p-4 mobile-result">
                            <h2><i class="fas fa-calculator"></i>  Loan calculation result</h2>
                            <p>
                            <span class="float-right"><font class="h2 Count" id="show_PMT_string">3,012,244.60</font> Baht</span><br>
                            Monthly repayment amount
                            </p>
                            <br>
                            <p>
                            Maximum loan limit
                            <span class="float-right"><font class="h4 Count" id="show_total">35,000,000.00</font> Baht</span>
                            </p>
                            <p>
                              Minimum total income of co-borrower
                            <span class="float-right"><font class="h4 Count" id="show_loner">52,432.55</font> Baht</span>
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
            Maximum loan amount.
          </div>
          <div class="detail">
              <div class="calculator active" id="calculator-2">
                  <div class="row">
                      <div class="col-md-5 col-12 p-5 mobile-calculator">

                          <label for="">
                              <strong>Average monthly income (including co-borrower's income if applicable). <font id="alert_amount2" style="display:none;" class="text-danger">Please specify Average monthly income</font></strong>
                          </label>
                          <div class="input-group mb-3">
                              <input type="text" class="form-control input-number" id="input_amount2" placeholder="Please specify the numbers" aria-label="Please specify the numbers" aria-describedby="basic-addon2"  autocomplete="off" value="30,000">
                              <div class="input-group-append"><span class="input-group-text" id="basic-addon22">฿</span></div>
                          </div>
                          <label for="">
                            <strong>Monthly debt burden (if applicable).<font id="alert_amount2" style="display:none;" class="text-danger">Please specify Monthly debt burden</font></strong>
                        </label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control input-number" id="input_dept" placeholder="Please specify the numbers" aria-label="Please specify the numbers" aria-describedby="basic-addon2"  autocomplete="off" value="1,000">
                            <div class="input-group-append"><span class="input-group-text" id="basic-addon22">฿</span></div>
                        </div>

                          <label for="">
                              <select class="form-select" aria-label="Default select example" id="input_yy">
                                <option  value="5800">40 years installment/repayment.</option>
                                <option selected value="6000">30 years installment/repayment.</option>
                                <option value="6500">25 years installment/repayment.</option>
                                <option value="7000">20 years installment/repayment.</option>
                                <option value="7500">15 years installment/repayment.</option>
                                <option value="7000">10 years installment/repayment.</option>
                              </select>
                          </label>

                          <div class="input-group mb-3" style="display: none">
                              <input type="text" class="form-control input-number" id="input_time2" placeholder="Maximum should not exceed 40 years." aria-label="Maximum should not exceed 40 years." aria-describedby="basic-addon2"  autocomplete="off" value="30">
                              <div class="input-group-append"><span class="input-group-text" id="basic-addon22">Years</span></div>
                          </div>
                          <label for="" style="display: none">>
                              <strong>Interest rate (per year)." <font id="alert_percent2" style="display:none;" class="text-danger">please specify Interest rate"</font></strong>
                          </label>
                          <div class="input-group mb-3" style="display: none">>
                              <input type="text" class="form-control input-number" id="input_percent2" placeholder="please expressed as a percentage." aria-label="please expressed as a percentage." aria-describedby="basic-addon2"  autocomplete="off" value="4">
                              <div class="input-group-append"><span class="input-group-text" id="basic-addon22">%</span></div>
                          </div><br><br>
                          <div class="text-center">
                              <button type="button" class="btn btn-success " name="button" onclick="Calculate2();">
                                  <i class="fas fa-bullseye"></i> Calculate maximum credit limit.
                              </button>
                          </div>
                      </div>
                      <div class="col-md-7 text-white bg-dark p-5">
                          <h2><i class="fas fa-bullseye"></i> result of the maximum credit limit calculation.</h2>

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
                            Maximum amount that can be borrowed is.<br>
                            <span class="float-right"><font class="h1 Count" id="show_divide">2,833,000</font> Baht</span><br><br>
                          </p>
                            <p style="display: none">
                              ยอดสูงสุดที่กู้ได้
                              <span class="float-right"><font class="h1 Count" id="show_loner2">2,181,305</font> Baht</span>
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
                          <input type="text" class="form-control input-number" id="input_amount3" placeholder="Please specify the numbers" aria-label="Please specify the numbers" aria-describedby="basic-addon2"  autocomplete="off" value="{{ number_format($post->post_sale_price,0) }}">
                          <div class="input-group-append"><span class="input-group-text" id="basic-addon23">฿</span></div>
                        </div>
                        <label for="">
                          <strong>Monthly rent <font id="alert_time3" style="display:none;" class="text-danger">
                            Please specify Monthly rent</font></strong>
                        </label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control input-number" id="input_time3" placeholder="Please specify Monthly rent"
                          aria-label="Please specify the numbers" aria-describedby="basic-addon3"  autocomplete="off" value="25,000">
                          <div class="input-group-append"><span class="input-group-text" id="basic-addon23">฿</span></div>
                        </div>
                        <label for="">
                          <strong><font id="alert_percent3" style="display:none;" class="text-danger">&nbsp;</font></strong>
                        </label>
                        <div class="input-group mb-3" style="display:none;">
                          <input type="text" class="form-control input-number" id="input_percent3" 
                          placeholder="Specify as %"
                          aria-label="Specify as %" aria-describedby="basic-addon2"  autocomplete="off" value="5.995">
                          <div class="input-group-append"><span class="input-group-text" id="basic-addon22">%</span></div>
                        </div>
                        <div class="text-right">
            
                          <button type="button" class="btn btn-success " name="button" onclick="Calculate3();">
                            <i class="fas  fa-calendar-alt"></i> Check the rental rate %
                          </button>
                        </div>
            
                      </div>
                      <div class="col-md-7 text-white bg-dark p-5">
                        <h2><i class="fas  fa-calendar-alt"></i> Calculation of annual return rate</h2>
            
                        <br><br><br>
                        <p>
                          Annual return rate
                          <span class="float-right"><font class="h1 Count" id="show_loner3">52,432.55</font> %</span>
                        </p><br>
            
                        <p>
                          Payback period
                          <span class="float-right"><font class="h1 Count" id="show_PMT_string3">35,000,000.00</font> Years</span>
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

