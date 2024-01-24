<div id="features" class="features section-bg">
  <div class="container" data-aos="fade-up">
      @yield('seoh5-th')  
      {{-- tab rent button --}}                        
          <ul class="nav nav-tabs row  g-2 d-flex @yield('theme')">                                
              @yield('tabbutton-th')                                 
          </ul>
      {{-- tab rent button --}}
      {{-- tab content rent --}}
      <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
                <div class="pt-2 row pb-0">
                    @yield('tabslideroom-th')                 
                </div> 
          </div>
          <div class="tab-pane" id="tab-2">
                <div class="pt-2 row pb-0">
                    @yield('tabslidecondo-th')                     
                </div>                    
          </div>
            <div class="tab-pane" id="tab-3">
                <div class="pt-2 row pb-0">
                    {{-- @yield('condoinfotable-th')  --}}
                    @include('frame_v2.slider.rent-condoinfo-th') 
                </div>             
            </div>
      </div>

  </div>
  <div class="ads-tab-post board-post" id="imageBox" style="display:none">
  </div>
</div>