
<style>
   #mySwiperBig swiper-slide img,
   #mySwiper2 swiper-slide img {
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
                                    
                                    <div class="text-center ">
                                        {{-- <br class="d-none d-xl-block"> --}}                            
                                    <table class="table table-borderless  condo-detail-toon">
                                        <tbody>
                                            <tr>                            
                                                <th>
                                                    
                                                    <h2 class="testimonial-author" style="text-align: center;line-height:1.5em">  
                                                                
                                                        ต้องการซื้อ/ขาย/เช่า/ - ฝากห้องชุด ให้เราดูแลคุณ<br>
                                                        {{$condo_name_th}} ({{$condo_name_en}})
                                                    </h2><br>
                                                </th>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
        
                                    <table class="table  condo-detail-toon">
                                        <tbody>                
                                            <tr>                                      
                                                <td>
                                                    <div class="p-4 pt-0">
                                                    ค้นหาห้องสวย ห้องที่ถูกใจง่าย ๆ เลื่อนลงไปดูด้านล่างได้เลยค่ะ เราคัดสรรห้องสวย ดี <br>
                                                    มีคุณภาพของ Condominium นี้มาไว้ในที่เดียว  หากสนใจห้องไหนสามารถ  <a href="//line.me/R/ti/p/%40704uwpvc" title="ขอข้อมูลเพิ่มเติม {{$condo_name_th}}"><i class="fab fa-line"  ></i> add line</a><br>
                                                    เพื่อสอบถามเจ้าหน้าที่ หรือ <a href="{{ route('want') }}" title="นัดวันดูห้องจริง {{$condo_name_en}}">ทำการจองห้องเพื่อนัดวันดูห้องจริง</a> ได้ตามที่ลูกค้าสะดวกค่ะ
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
                                                    <a href="{{ route('deposit') }}" title="หาเช่าคอนโด / ซื้อคอนโด {{$condo_name_en}}">
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
  {{-- swiper --}}
</div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script>
$("#pop").on("click", function(e) {
   e.preventDefault();
   $('#the-modal').modal('toggle');
});
</script>


<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>

{{-- test --}}
<script src="https://cdn.jsdelivr.net/npm/animejs@3.1.0/lib/anime.min.js"></script>
<script src="{{ asset('assetstoon/speed/assets/glightbox-master/demo/js/valde.min.js') }}"></script>
<script src="{{ asset('assetstoon/speed/assets/glightbox-master/dist/js/glightbox.js') }}"></script>
<script src="{{ asset('assetstoon/speed/assets/glightbox-master/demo/js/site.js') }}"></script>
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
    lightboxVideo.on('slide_changed', ({ prev, current }) => {
        console.log('Prev slide', prev);
        console.log('Current slide', current);

        const { slideIndex, slideNode, slideConfig, player } = current;

        if (player) {
            if (!player.ready) {
                // If player is not ready
                player.on('ready', (event) => {
                    // Do something when video is ready
                });
            }

            player.on('play', (event) => {
                console.log('Started play');
            });

            player.on('volumechange', (event) => {
                console.log('Volume change');
            });

            player.on('ended', (event) => {
                console.log('Video ended');
            });
        }
    });

    var lightboxInlineIframe = GLightbox({
        selector: '.glightbox4'
    });


</script>

