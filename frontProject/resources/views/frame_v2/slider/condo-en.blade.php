<style>
    #mySwiperBig swiper-slide img,
    #mySwiper2 swiper-slide img  {
    display: sw </swiper-slidek;
    }
</style>
<div class="col-md-6">
  <swiper-container id="mySwiper2" class="mySwiper2" loop="true" space-between="10" slides-per-view="6" free-mode="true"
  watch-slides-progress="true"> 
  <swiper-slide>        
    <img src="{{$condo_image_banner}}"  />       
  </swiper-slide>
      @foreach ($condo_image as $item) 
      <swiper-slide>        
        <img src="{{ $item }}"  />        
      </swiper-slide>
      @endforeach
  </swiper-container>
  <swiper-container id="mySwiperBig" style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="mySwiper"
        thumbs-swiper=".mySwiper2" loop="true" space-between="10" navigation="true">
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
                                      
                                    <div class="text-center">
                                      <div class="d-none d-xl-block">
                                        <table class="table table-borderless  condo-detail-toon">
                                            <tbody>
                                                <tr>                            
                                                    <th>
                                                        
                                                        <h2 class="testimonial-author" style="text-align: center;line-height:1.5em">            
                                                            @if($type == 1)            
                                                            Want to Rent {{$condo_name_en}}<br>
                                                            @endif
                                                            @if($type == 2)
                                                            Want to Buy / Sell {{$condo_name_en}}<br>
                                                            @endif
                                                            Let us take care of you.
                                                        </h2><br>
                                                    </th>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
            
                                        <table class="table  condo-detail-toon">
                                            <tbody>                
                                                <tr>                                      
                                                    <td>
                                                        <div class="p-2 pt-0">
                                                            Search for beautiful rooms, rooms that are easy to like, <br>
                                                            you can scroll down to see them below. selected beautiful, <br>
                                                            high-quality condominiums here. If you are interested in any room<br>
                                                            please <a href="//line.me/R/ti/p/%40704uwpvc" title="More information {{$condo_name_en}}"><i class="fab fa-line"  ></i>  add line</a> to inquire with the staff or 
                                                            <a href="{{ route('want') }}" title="make a appointment for {{$condo_name_en}}">
                                                                make a appointment</a><br> to view the room at your convenience.
                                                            <br><br>
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
                                                        If you are an owner, you can also contact us to entrust your room<br>
                                                        to find customers to rent or sell. 
                                                        <a href="{{ route('deposit') }}" title="Deposit room for Rent / Sell {{$condo_name_en}}">
                                                            Deposit room for Rent / Sell
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>                      
                                      </div>
                                      <div class="d-block d-sm-none pt-0 mt-0">
                                        <strong class="testimonial-author" style="text-align: center;line-height:1.5em">  
                                            @if($type == 1)            
                                            Want to Rent {{$condo_name_en}}<br>
                                            @endif
                                            @if($type == 2)
                                            Want to Buy / Sell {{$condo_name_en}}<br>
                                            @endif
                                            Let us take care of you.
                                        </strong>
                                    </div>   
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

