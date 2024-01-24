<style>
  #mySwiper2
  {margin-bottom: 10px}

  #mySwiper2 swiper-slide img {
    display: sw </swiper-slidek;
    /* width: 100%;
    height: 100%; */
    width: 100%;
    height: 80px;
    object-fit: cover;
    border:3px solid #fefefe;
    border-radius:7px;
    align-self: stretch;
  }
  #mySwiperBig swiper-slide img {
    display: sw </swiper-slidek;
    /* width: 100%;
    height: 100%; */
    width: 100%;
    height: 380px;
    object-fit: cover;
    align-self: stretch;
  }
  .mySwiper2 swiper-slide {
    width: 25%;
    height: 100%;
    opacity: 0.4;
  }
  .mySwiper2 .swiper-slide-thumb-active {
    opacity: 1;
    border:3px solid #c1c1c1;
    border-radius:7px;
    /* จอ pc ปกติ */
  }

  @media (max-width:320px){
      #mySwiper2 swiper-slide img {
      height: 80px;
    }
    .mySwiper2 .swiper-slide-thumb-active {
    border:3px solid #c1c1c1;
    }
  }
  @media (max-width: 425px) and (min-width: 375px) {
    #mySwiper2 swiper-slide img {
      height: 80px;
    }
    .mySwiper2 .swiper-slide-thumb-active {
    border:3px solid #c1c1c1;
    }
  }

  @media (max-width: 768px) and (min-width: 425px) {
    #mySwiper2 swiper-slide img {
      height: 50px;
    }
    .mySwiper2 .swiper-slide-thumb-active {
    border:3px solid #c1c1c1;
    /* จอมือถือตูน */
    }
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
  {{-- @include('speed.frame.include-condo.swiper-detail-'.$folder)  --}}
  @include('speed.frame.include-rentsale.swiper-detail-condo')    
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

