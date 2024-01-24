<div class="board-facility">
  <section id="portfolio" class="portfolio">
    <div class="container">
  
      <div class="section-title">
        <span>Gallery</span>
        <h2>อัลบั้มภาพ</h2>
      </div>
  
      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">ทั้งหมด</li>
            <li data-filter=".filter-rentsale">รูปห้อง</li>
            <li data-filter=".filter-condo">รูปคอนโด</li>
            <li data-filter=".filter-cover">รูปปก</li>
          </ul>
        </div>
      </div>
  
      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">
        <div class="col-6 col-sm-3 portfolio-item filter-cover">
          <a href="{{$condo_image_banner}}" data-gallery="portfolioGallery"  
          title="รูปปกคอนโด{{$condo->condo_name}}" class="portfolio-lightbox">
            <img src="{{$condo_image_banner}}" class="img-fluid" alt="" style="width:100%">
          </a>
        </div> 
        @foreach ($imageList as $item) 
          <div class="col-6 col-sm-3 portfolio-item filter-rentsale">
            <a href="{{ $item }}" data-gallery="portfolioGallery"  
            title="รูปห้อง{{$condo->condo_name}}" class="portfolio-lightbox">
            <img src="{{ $item }}" class="img-fluid" alt="" style="width:100%"></a>
          </div> 
        @endforeach
        
        <div class="col-6 col-sm-3 portfolio-item filter-cover">
          <a href="{{$post_image_title}}" data-gallery="portfolioGallery"  
            title="รูปหน้าปก {{$condo->condo_name}}" class="portfolio-lightbox">
            <img src="{{$post_image_title}}" class="img-fluid" alt="" style="width:100%">
          </a>
        </div> 
        @foreach ($condo_image as $item) 
          <div class="col-6 col-sm-3 portfolio-item filter-condo">
            <a href="{{ $item }}" data-gallery="portfolioGallery"  
            title="รูปคอนโด{{$condo->condo_name}}" class="portfolio-lightbox">
            <img src="{{ $item }}" class="img-fluid" alt="" style="width:100%"></a>
          </div> 
        @endforeach             
      </div>
  
    </div>
  </section>
</div> 
