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
            <div class="pt-2 row pb-4">
                @include('frame_v2.slider.condo-th')  
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