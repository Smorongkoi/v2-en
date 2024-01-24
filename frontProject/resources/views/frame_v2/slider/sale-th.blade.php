<style>
  #mySwiperBig swiper-slide img,
  #mySwiper2 swiper-slide img {
  display: sw </swiper-slidek;
  }
</style>
<div class="col-md-6">
<swiper-container id="mySwiper2" class="mySwiper2" loop="true" space-between="10" 
        slides-per-view="6" free-mode="true" watch-slides-progress="true">
    <swiper-slide>        
      <img src="{{$condo_image_banner}}"  />       
    </swiper-slide>
    @foreach ($condo_image as $item) 
      <swiper-slide>        
        <img src="{{ $item }}"  />        
      </swiper-slide>
    @endforeach
</swiper-container>
<swiper-container id="mySwiperBig" style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" 
      class="mySwiper"  thumbs-swiper=".mySwiper2" loop="true" space-between="10" navigation="true">
      <swiper-slide>    
        <a href="{{$condo_image_banner}}" class="glightbox" >
          <img src="{{$condo_image_banner}}" class="image-fluid"  />
        </a>     
      </swiper-slide>
      @foreach ($condo_image as $item) 
        <swiper-slide >     
            <a href="{{ $item }}" class="glightbox">
              <img src="{{ $item }}" class="image-fluid"  />
            </a>
        </swiper-slide>              
      @endforeach
</swiper-container>

</div>
<div class="col-md-6">
{{-- swiper --}}
<div  class="swiper">
  <div class="swiper-wrapper">
          <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                  <div class="row">
                      <div class="col-sm-12 col-md-12  text-center">
                          {{-- condo info --}}
                          <div class="row">
                              <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                  
                                  <div class="text-center ">
                                      {{-- <br class="d-none d-xl-block"> --}}                            
                                  <table class="table table-borderless  condo-detail-toon">
                                      <tbody>
                                          <tr>                            
                                              <th>
                                                  
                                                  <h2 class="testimonial-author" style="text-align: center;line-height:1.5em">            
                                                             
                                                    ต้องการซื้อ/ขาย/เช่า/ - ฝากห้องชุด <br>
                                                    ให้เราดูแลคุณ {{$condo->condo_name_th}}<br>
                                                    ({{$condo->condo_name_en}})
                                                  </h2>
                                              </th>
                                          </tr>
                                          
                                      </tbody>
                                  </table>
      
                                  <table class="table  condo-detail-toon">
                                      <tbody>                
                                          <tr>                                      
                                              <td>
                                                  <div class="p-2 pt-0">
                                                    ค้นหาห้องสวย ห้องที่ถูกใจง่าย ๆ เลื่อนลงไปดูด้านล่างได้เลยค่ะ เราคัดสรรห้องสวย ดี <br>
                                                    มีคุณภาพของ Condominium นี้มาไว้ในที่เดียว  หากสนใจห้องไหนสามารถ  <a href="//line.me/R/ti/p/%40704uwpvc" title="ขอข้อมูลเพิ่มเติม {{$condo->condo_name_th}}"><i class="fab fa-line"  ></i> add line</a><br>
                                                     เพื่อสอบถามเจ้าหน้าที่ หรือ <a href="{{ route('want') }}" title="นัดวันดูห้องจริง 
                                                     {{$condo->condo_name_en}}">ทำการจองห้องเพื่อนัดวันดูห้องจริง</a> ได้ตามที่ลูกค้าสะดวกค่ะ
                                                     <br><br>
                                              </div>
                                              </td>
                                          </tr>                                           
                                          
                                      </tbody>
                                  </table>  
                                      
                                  <table class="table  condo-detail-toon">
                                      <tbody>                
                                          <tr>                                        
                                              
                                              <td>
                                                หรือหากท่านเป็นเจ้าของห้อง (Owner) ก็สามารถติดต่อเรา เพื่อฝากห้อง<br>
                                                    หาลูกค้าเพื่อเช่าหรือขายได้เช่นกันค่ะ
                                                    <a href="{{ route('deposit') }}" title="หาเช่าคอนโด / ซื้อคอนโด 
                                                    {{$condo->condo_name_en}}">
                                                        ฝากเช่า / ขาย
                                                    </a>
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>
                  
                                  </div>
                  
                              </div>                
                          </div>
                          {{-- condo info --}}      
                      </div>
                  </div>
              </div>
          </div>
  </div>
</div>
{{-- swiper --}}
</div>



<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/animejs@3.1.0/lib/anime.min.js"></script>
<script src="{{ asset('assets_v2/glightbox-master/dist/js/glightbox.js') }}"></script>
<script>
  var lightbox = GLightbox();
  lightbox.on('open', (target) => {
      console.log('lightbox opened');
  });
  var lightboxDescription = GLightbox({
      selector: '.glightbox2'
  });
  var lightboxVideo = GLightbox({
      selector: '.glightbox3'
  });

  var lightboxInlineIframe = GLightbox({
      selector: '.glightbox4'
  });


</script>

