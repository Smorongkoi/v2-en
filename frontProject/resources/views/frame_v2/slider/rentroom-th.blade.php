<style>
  #mySwiperBigb swiper-slide img,
  #mySwiper2b swiper-slide img {
  display: sw </swiper-slidek;
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
          @include('frame_v2.slider.button-over-image-rent-th')  
          <img src="{{$post_image_title}}" class="image-fluid"  />
        </a>     
      </swiper-slide>
      @foreach ($imageList as $item) 
        <swiper-slide >     
            <a href="{{ $item }}" class="glightbox2">
              @include('frame_v2.slider.button-over-image-rent-th')  
              <img src="{{ $item }}" class="image-fluid"  />
            </a>
        </swiper-slide> 
      @endforeach
</swiper-container>

</div>
<div class="col-md-6">
  @include('frame_v2.slider.swiper-detail-th')
</div>