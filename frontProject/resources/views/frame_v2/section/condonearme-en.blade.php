<?php
$urluniversity="/rent/condo-near-schools/";
$urlstation="/rent/condo-near-BTS/";
$urlarea="/rent/condo-in-the-area/";
$urllandmark="/rent/condo/near/";
?>
<section id="portfolio" class="portfolio">
  <div class="container">

    <div class="section-title">

      <h4>Prime Locations Condos In Bangkok</h4>
      <p>Choose a condo near you and drop by!</p>
    </div>

    <div class="row" data-aos="fade-up">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-train">BTS & MRT</li>
          <li data-filter=".filter-university">Education</li>
          <li data-filter=".filter-area">Location</li>
          <li data-filter=".filter-hospital">Hospital</li>
          <li data-filter=".filter-attraction">Mall</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">


        {{-- 004 filter-university จุฬา--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-university">
          <a href="{{ asset('assets_v2/port-webp/university-01.webp') }}" data-gallery="portfolioGallery"  
          title="Chulalongkorn University" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/university-01.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urluniversity}}Chulalongkorn-University" title="More Details"><b><h4 style="display: inline">Chulalongkorn</h4></b></a></p>
          </div>
        </div>

        {{-- 005 filter-university kaset--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-university">
          <a href="{{ asset('assets_v2/port-webp/university-02.webp') }}" data-gallery="portfolioGallery"  
          title="Kasetsart University" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/university-02.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urluniversity}}Kasetsart-University" title="More Details"><b><h4 style="display: inline">Kasetsart University</h4></b></a></p>
          </div>
        </div>

        {{-- 006 filter-university abac--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-university">
          <a href="{{ asset('assets_v2/port-webp/university-03.webp') }}" data-gallery="portfolioGallery"  
          title="ABAC Bangna" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/university-03.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urluniversity}}Assumption-University" title="More Details"><b><h4 style="display: inline">ABAC Bangna</h4></b></a></p>
          </div>
        </div>

        {{-- 011 filter-university ธรรมศาสตร์--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-university">
          <a href="{{ asset('assets_v2/port-webp/university-04.webp') }}" data-gallery="portfolioGallery"  
          title="Thammasat-University-Rangsit" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/university-04.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urluniversity}}Thammasat-University-Rangsit" title="More Details"><b><h4 style="display: inline">
              Thammasat Rangsit</h4></b></a></p>
          </div>
        </div>

        {{-- 012 filter-university Thammasat-University-Tha-Prachan--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-university">
          <a href="{{ asset('assets_v2/port-webp/university-05.webp') }}" data-gallery="portfolioGallery"  
          title="Thammasat-University-Tha-Prachan" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/university-05.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urluniversity}}Thammasat-University-Tha-Prachan" title="More Details">
              <b><h4 style="display: inline">Thammasat Tha-Prachan</h4></b></a></p>
          </div>
        </div>

        {{-- 013 filter-university กรุงเทพ--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-university">
          <a href="{{ asset('assets_v2/port-webp/university-06.webp') }}" data-gallery="portfolioGallery"  
          title="Bangkok Rangsit" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/university-06.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urluniversity}}Bangkok Rangsit" title="More Details">
              <b><h4 style="display: inline">BU. Rangsit</h4></b></a></p>
          </div>
        </div>

        {{-- 01 train asoke--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-train">
          <a href="{{ asset('assets_v2/port-webp/bts-01.webp') }}" data-gallery="portfolioGallery"  
          title="BTS : Asoke Station" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/bts-01.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urlstation}}Asok" title="More Details"><b><h4 style="display: inline">BTS</h4> Asok</b></a></p>
          </div>
        </div>

        {{-- 002 ทองหล่อ--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-train">
          <a href="{{ asset('assets_v2/port-webp/bts-02.webp') }}" data-gallery="portfolioGallery"  
          title="BTS : Thong Lo Station" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/bts-02.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urlstation}}Thong-Lo" title="More Details"><b><h4 style="display: inline">BTS</h4> Thong Lo</b></a></p>
          </div>
        </div>

        {{-- 003 เอกมัย--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-train">
          <a href="{{ asset('assets_v2/port-webp/bts-03.webp') }}" data-gallery="portfolioGallery"  
          title="BTS : Ekkamai Station" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/bts-03.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urlstation}}Ekkamai" title="More Details"><b><h4 style="display: inline">BTS</h4> Ekkamai</b></a></p>
          </div>
        </div>

        {{-- 007 filter-area  จุฬา-สามย่าน--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-area">
          <a href="{{ asset('assets_v2/port-webp/area-01.webp') }}" data-gallery="portfolioGallery"  
          title="Chulalongkorn Samyan" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/area-01.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urlarea}}Chulalongkorn-Samyan-Siam-National-Stadium" title="More Details">
              <b><h4 style="display: inline">Chulalongkorn Samyan</h4></b></a></p>
          </div>
        </div>

        {{-- 014 filter-area  อโศก-ทองหล่อ --}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-area">
          <a href="{{ asset('assets_v2/port-webp/area-02.webp') }}" data-gallery="portfolioGallery"  
          title="Asoke Thonglor" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/area-02.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urlarea}}Mid-Sukhumvit-Asoke-Prompong-Thonglor-Eakamai" title="More Details"><b><h4 style="display: inline">Asoke Thonglor</h4></b></a></p>
          </div>
        </div>

        {{-- 015 filter-area พระโขนง-อ่อนนุช--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-area">
          <a href="{{ asset('assets_v2/port-webp/area-03.webp') }}" data-gallery="portfolioGallery"  
          title="Phrakhanong ON-Nut" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/area-03.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urlarea}}Phrakhanong-ON-Nut-Bangchak-Udomsuk" title="More Details">
              <b><h4 style="display: inline">Phrakhanong ON-Nut</h4></b></a></p>
          </div>
        </div>

        {{-- 008 filter-hospital บำรุงราษฎร์ --}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-hospital">
          <a href="{{ asset('assets_v2/port-webp/hospital-02.webp') }}" data-gallery="portfolioGallery"  
          title="Bumrungrad International Hospital" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/hospital-02.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urllandmark}}75/Bumrungrad%20International%20Hospital" title="More Details"><b><h4 style="display: inline">Bumrungrad Hospital</h4></b></a></p>
          </div>
        </div>

        {{-- 016 filter-hospital รามาธิบดี --}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-hospital">
          <a href="{{ asset('assets_v2/port-webp/hospital-01.webp') }}" data-gallery="portfolioGallery"  
          title="Ramathibodi Hospital" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/hospital-01.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urllandmark}}136/Ramathibodi%20Hospital" title="More Details"><b><h4 style="display: inline">Ramathibodi Hospital</h4></b></a></p>
          </div>
        </div>

        {{-- 017 filter-hospital  โรงพยาบาลกรุงเทพ ซอยศูนย์วิจัย--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-hospital">
          <a href="{{ asset('assets_v2/port-webp/hospital-03.webp') }}" data-gallery="portfolioGallery"  
          title="Bangkok Hospital" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/hospital-03.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urllandmark}}67/Bangkok%20Hospital" title="More Details"><b><h4 style="display: inline">
              Bangkok Hospital</h4></b></a></p>
          </div>
        </div>

        {{-- 018 filter-hospital สมิติเวช สุขุมวิท --}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-hospital">
          <a href="{{ asset('assets_v2/port-webp/hospital-04.webp') }}" data-gallery="portfolioGallery"  
          title="Samitivej Hospital" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/hospital-04.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urllandmark}}88/Samitivej%20Sukhumvit%20Hospital" title="More Details"><b>
              <h4 style="display: inline">Samitivej Hospital</h4></b></a></p>
          </div>
        </div>

        {{-- 019 filter-hospital โรงพยาบาลจุฬาลงกรณ์ --}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-hospital">
          <a href="{{ asset('assets_v2/port-webp/hospital-05.webp') }}" data-gallery="portfolioGallery"  
          title="Chulalongkorn Hospital" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/hospital-05.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urllandmark}}131/King%20Chulalongkorn%20Memorial%20Hospital" title="More Details"><b><h4 style="display: inline">Chulalongkorn Hospital</h4></b></a></p>
          </div>
        </div>

        {{-- 020 filter-hospital รพ.พญาไท 1 --}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-hospital">
          <a href="{{ asset('assets_v2/port-webp/hospital-06.webp') }}" data-gallery="portfolioGallery"  
          title="Phyathai 1 Hospital" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/hospital-06.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urllandmark}}81/Phyathai%201%20Hospital" title="More Details"><b>
              <h4 style="display: inline">Phyathai 1 Hospital</h4></b></a></p>
          </div>
        </div>

        {{-- 009 filter-attraction พารากอน--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-attraction">
          <a href="{{ asset('assets_v2/port-webp/attraction-01.webp') }}" data-gallery="portfolioGallery"  
          title="Siam Paragon" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/attraction-01.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urllandmark}}23/Siam%20Paragon" title="More Details"><b><h4 style="display: inline">Paragon</h4></b></a></p>
          </div>
        </div>

        {{-- 010 train อ่อนนุช--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-train">
          <a href="{{ asset('assets_v2/port-webp/bts-04.webp') }}" data-gallery="portfolioGallery"  
          title="BTS : On Nut Station" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/bts-04.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urlstation}}On-Nut" title="More Details"><b><h4 style="display: inline">BTS</h4> On Nut</b></a></p>
          </div>
        </div>

        {{-- 026 filter-attraction เมกา--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-attraction">
          <a href="{{ asset('assets_v2/port-webp/attraction-02.webp') }}" data-gallery="portfolioGallery"  
          title="Mega Bangna" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/attraction-02.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urllandmark}}26/Mega%20Bangna" title="More Details"><b>
              <h4 style="display: inline">Mega Bangna</h4></b></a></p>
          </div>
        </div>


        {{-- 021-train ห้วยขวาง--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-train">
          <a href="{{ asset('assets_v2/port-webp/bts-05.webp') }}" data-gallery="portfolioGallery"  
          title="MRT : Huai Khwang Station" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/bts-05.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urlstation}}Huai-Khwang" title="More Details">
              <b><h4 style="display: inline">MRT</h4> Huai Khwang</b></a></p>
          </div>
        </div>

        {{-- 022 filter-train สามย่าน--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-train">
          <a href="{{ asset('assets_v2/port-webp/bts-06.webp') }}" data-gallery="portfolioGallery"  
          title="MRT : Sam Yan Station" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/bts-06.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urlstation}}Sam-Yan" title="More Details">
              <b><h4 style="display: inline">MRT</h4> Sam Yan</b></a></p>
          </div>
        </div>

        {{-- 023 filter-area รัชดา-ห้วยขวาง--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-area">
          <a href="{{ asset('assets_v2/port-webp/area-04.webp') }}" data-gallery="portfolioGallery"  
          title="Ratchada Huaikwangง" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/area-04.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urlarea}}Ratchadapisek--Huaikwang--Suttisan,-Thailand-Cultural-Centre-" 
              title="More Details"><b><h4 style="display: inline">Ratchada Huaikwang</h4></b></a></p>
          </div>
        </div>

        {{-- 024 filter-area พระราม-9-RCA--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-area">
          <a href="{{ asset('assets_v2/port-webp/area-05.webp') }}" data-gallery="portfolioGallery"  
          title="Rama9 RCA" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/area-05.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urlarea}}Rama9--RCA--Asoke-Petchaburi-Dindaeng-Khlongtan" title="More Details"><b><h4 style="display: inline">Rama9 RCA</h4></b></a></p>
          </div>
        </div>

        {{-- 025 filter-area บางนา-แบริ่ง--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-area">
          <a href="{{ asset('assets_v2/port-webp/area-06.webp') }}" data-gallery="portfolioGallery"  
          title="Bangna Bearing" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/area-06.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urlarea}}Bangna-Bearing-Lasalle-Bang-Phli--Mega-Bangna" title="More Details">
              <b><h4 style="display: inline">Bangna Bearing</h4></b></a></p>
          </div>
        </div>

        {{-- 028 {{$urllandmark}}1/เซ็นทรัลเวิลด์ filter-attraction--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-attraction">
          <a href="{{ asset('assets_v2/port-webp/attraction-03.webp') }}" data-gallery="portfolioGallery"  
          title="Central World" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/attraction-03.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urllandmark}}1/Central%20World" title="More Details">
              <b><h4 style="display: inline">Central World</h4></b></a></p>
          </div>
        </div>

        {{-- 027 เซ็นทรัล ลาดพร้าว filter-attraction--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-attraction">
          <a href="{{ asset('assets_v2/port-webp/attraction-04.webp') }}" data-gallery="portfolioGallery"  
          title="Central Ladprao" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/attraction-04.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urllandmark}}2/Central%20Ladprao" title="More Details">
              <b><h4 style="display: inline">Central Ladprao</h4></b></a></p>
          </div>
        </div>
                
        {{-- 029 ดิ เอ็มควอเทียร์ filter-attraction--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-attraction">
          <a href="{{ asset('assets_v2/port-webp/attraction-05.webp') }}" data-gallery="portfolioGallery"  
          title="The Em Quartier" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/attraction-05.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urllandmark}}22/The%20Em%20Quartier" title="More Details">
              <b><h4 style="display: inline">The Em Quartier</h4></b></a></p>
          </div>
        </div>

        {{-- 030 ไอคอน สยาม filter-attraction--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-attraction">
          <a href="{{ asset('assets_v2/port-webp/attraction-06.webp') }}" data-gallery="portfolioGallery"  
          title="Icon Siam" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/attraction-06.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urllandmark}}30/Icon%20Siam" title="More Details">
              <b><h4 style="display: inline">Icon Siam</h4></b></a></p>
          </div>
        </div>

    </div>

  </div>
</section>
