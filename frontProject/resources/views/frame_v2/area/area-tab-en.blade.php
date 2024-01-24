<div id="features" class="features section-bg">
  <div class="container" data-aos="fade-up">
      @yield('seoh5-en')  
      {{-- tab rent button --}}                        
          <ul class="nav nav-tabs row  g-2 d-flex condotheme">                                
              @yield('tabbutton-en')                                 
          </ul>
      {{-- tab rent button --}}
      {{-- tab content rent --}}
      <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
              <div class="area-page"> 
                  
                  <div class="area-box-condo" align="center">
                      <div class="center">
                          <h2 class="f-theme">View condos you are <br class="d-block d-sm-none">
                              @if($type == 1) interested in renting @endif @if($type == 2) interested in buying @endif
                          </h2>
                      </div>                            
                      <div id="showCondo" class="row">                            
                      </div>
                      <div class="center" style="display: none;" id="buttonShowCondo">
                          @yield('buttonshowcondo-en')                                             
                      </div>                            
                      <div class="remark-box">
                          <div class="remark" align="center">
                              <div>
                                  <strong class="f-theme">Remark</strong> : <br class="d-block d-sm-none">
                                  Low rise is not more than 8 floors.<br class="d-block d-sm-none">
                                  High rise is 8 floors or more.<br class="d-block d-sm-none">
                                  Year is the year the condo was completed and ready.
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="tab-pane" id="tab-2">
              <div class="area-page text-center" >
                  @yield('condoinfotable-en')  
              </div>                  
          </div>
      </div>

  </div>
  <div class="ads-tab-post board-post" id="imageBox" style="display:none">
  </div>
</div>