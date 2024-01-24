<style>
  #mySwiper2b
  {margin-bottom: 10px}

  #mySwiper2b swiper-slide img {
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
  #mySwiperBigb swiper-slide img {
    display: sw </swiper-slidek;
    /* width: 100%;
    height: 100%; */
    width: 100%;
    height: 380px;
    object-fit: cover;
    align-self: stretch;
  }
  .mySwiper2b swiper-slide {
    width: 25%;
    height: 100%;
    opacity: 0.4;
  }
  .mySwiper2b .swiper-slide-thumb-active {
    opacity: 1;
    border:3px solid #6e63e1;
    border-radius:7px;
    /* จอ pc ปกติ */
  }

  @media (max-width:320px){
      #mySwiper2b swiper-slide img {
      height: 80px;
    }
    .mySwiper2b .swiper-slide-thumb-active {
    border:3px solid #6e63e1;
    }
  }
  @media (max-width: 425px) and (min-width: 375px) {
    #mySwiper2b swiper-slide img {
      height: 80px;
    }
    .mySwiper2b .swiper-slide-thumb-active {
    border:3px solid #6e63e1;
    }
  }

  @media (max-width: 768px) and (min-width: 425px) {
    #mySwiper2b swiper-slide img {
      height: 50px;
    }
    .mySwiper2b .swiper-slide-thumb-active {
    border:3px solid #6e63e1;
    /* จอมือถือตูน */
    }
  }
</style>
<div class="col-md-6">
  <swiper-container id="mySwiper2b" class="mySwiper2b" loop="true" space-between="10" slides-per-view="6" free-mode="true"
  watch-slides-progress="true">
    <swiper-slide>        
      <img src="{{$post_image_title}}"  />       
    </swiper-slide>
      @foreach ($imageList as $item) 
      <swiper-slide>        
        <img src="{{ $item }}"  />        
      </swiper-slide>
      @endforeach
  </swiper-container>
  <swiper-container id="mySwiperBigb" style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="mySwiperb"
        thumbs-swiper=".mySwiper2b" loop="true" space-between="10" navigation="true">
        <swiper-slide>    
          <a href="{{$post_image_title}}" class="glightbox" >
            @include('speed.frame.include-rentsale.button-over-image-sale')
            <img src="{{$post_image_title}}" class="image-fluid"  />
          </a>     
        </swiper-slide>
        @foreach ($imageList as $item) 
        <swiper-slide >     
            <a href="{{ $item }}" class="glightbox2">
              @include('speed.frame.include-rentsale.button-over-image-sale')
              <img src="{{ $item }}" class="image-fluid"  />
            </a>
        </swiper-slide>  
              
        @endforeach
  </swiper-container>

</div>
<div class="col-md-6">
  @include('speed.frame.include-rentsale.swiper-detail-sale')  
  {{-- @include('speed.frame.include-rentsale.swiper-detail-condo')     --}}
</div>