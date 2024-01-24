<div id="features" class="features section-bg">
  <div class="container" data-aos="fade-up">
      @yield('seoh5-th')  
      {{-- tab rent button --}}                        
          <ul class="nav nav-tabs row  g-2 d-flex condotheme">                                
              @yield('tabbutton-th')                                 
          </ul>
      {{-- tab rent button --}}
      {{-- tab content rent --}}
      <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
              <div class="area-page"> 
                  
                  <div class="area-box-condo" align="center">
                      <div class="center">
                          <h2 class="f-theme">เลือกดูคอนโด<br class="d-block d-sm-none">
                              @if($type == 1) ที่คุณสนใจเช่า@endif @if($type == 2) ที่คุณสนใจซื้อ@endif
                          </h2>
                      </div>                            
                      <div id="showCondo" class="row">                            
                      </div>
                      <div class="center" style="display: none;" id="buttonShowCondo">
                          @yield('buttonshowcondo-th')                                             
                      </div>                            
                      <div class="remark-box">
                          <div class="remark" align="center">
                              <div>
                                  <strong class="f-theme">หมายเหตุ</strong> : <br class="d-block d-sm-none">
                                  Low rise = คอนโดที่มีจำนวนไม่เกิน 8 ชั้น<br class="d-block d-sm-none">
                                  High rise = คอนโดที่มีจำนวนมากกว่า 8 ชั้นขึ้นไป<br class="d-block d-sm-none">
                                  ปี คือ ปีที่คอนโดสร้างแล้วเสร็จพร้อมอยู่
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="tab-pane" id="tab-2">
              <div class="area-page text-center" >
                  @yield('condoinfotable-th')  
              </div>                  
          </div>
      </div>

  </div>
  <div class="ads-tab-post board-post" id="imageBox" style="display:none">
  </div>
</div>