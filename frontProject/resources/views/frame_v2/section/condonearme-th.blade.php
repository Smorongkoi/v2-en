<?php
$urluniversity="/ให้เช่า/คอนโดใกล้/";
$urlstation="/ให้เช่า/คอนโดใกล้สถานี/";
$urlarea="/เช่า/คอนโดทำเล/";
$urllandmark="/เช่า/คอนโด/ใกล้/";
?>
<section id="portfolio" class="portfolio">
  <div class="container">

    <div class="section-title">
      <h4>คอนโดใกล้ทำเลสำคัญ</h4>
      <p>เลือกคอนโดใกล้คุณ แวะเข้ามาเลย!</p>
    </div>

    <div class="row" data-aos="fade-up">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">ทั้งหมด</li>
          <li data-filter=".filter-train">รถไฟฟ้า</li>
          <li data-filter=".filter-university">สถานศึกษา</li>
          <li data-filter=".filter-area">ทำเลยอดนิยม</li>
          <li data-filter=".filter-hospital">โรงพยาบาล</li>
          <li data-filter=".filter-attraction">ห้างสรรพสินค้า</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">


        {{-- 004 filter-university จุฬา--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-university">
          <a href="{{ asset('assets_v2/port-webp/university-01.webp') }}" data-gallery="portfolioGallery"  
          title="มหาวิทยาลัยจุฬาลงกรณ์" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/university-01.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urluniversity}}จุฬาลงกรณ์มหาวิทยาลัย" title="More Details"><b><h4 style="display: inline">จุฬาลงกรณ์</h4></b></a></p>
          </div>
        </div>

        {{-- 005 filter-university kaset--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-university">
          <a href="{{ asset('assets_v2/port-webp/university-02.webp') }}" data-gallery="portfolioGallery"  
          title="มหาวิทยาลัยเกษตรศาสตร์" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/university-02.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urluniversity}}ม.เกษตรศาสตร์" title="More Details"><b><h4 style="display: inline">ม.เกษตรศาสตร์</h4></b></a></p>
          </div>
        </div>

        {{-- 006 filter-university abac--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-university">
          <a href="{{ asset('assets_v2/port-webp/university-03.webp') }}" data-gallery="portfolioGallery"  
          title="เอแบค บางนา" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/university-03.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urluniversity}}ม.อัสสัมชัญ-%28เอแบค-บางนา%29" title="More Details"><b><h4 style="display: inline">เอแบค บางนา</h4></b></a></p>
          </div>
        </div>

        {{-- 011 filter-university ธรรมศาสตร์--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-university">
          <a href="{{ asset('assets_v2/port-webp/university-04.webp') }}" data-gallery="portfolioGallery"  
          title="ม.ธรรมศาสตร์-รังสิต" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/university-04.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urluniversity}}ม.ธรรมศาสตร์-รังสิต" title="More Details"><b><h4 style="display: inline">ม.ธรรมศาสตร์-รังสิต</h4></b></a></p>
          </div>
        </div>

        {{-- 012 filter-university ม.ธรรมศาสตร์-ท่าพระจันทร์--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-university">
          <a href="{{ asset('assets_v2/port-webp/university-05.webp') }}" data-gallery="portfolioGallery"  
          title="ม.ธรรมศาสตร์-ท่าพระจันทร์" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/university-05.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urluniversity}}ม.ธรรมศาสตร์-ท่าพระจันทร์" title="More Details"><b><h4 style="display: inline">ม.ธรรมศาสตร์-ท่าพระจันทร์</h4></b></a></p>
          </div>
        </div>

        {{-- 013 filter-university กรุงเทพ--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-university">
          <a href="{{ asset('assets_v2/port-webp/university-06.webp') }}" data-gallery="portfolioGallery"  
          title="ม.กรุงเทพ-รังสิต" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/university-06.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urluniversity}}ม.กรุงเทพ-รังสิต" title="More Details"><b><h4 style="display: inline">ม.กรุงเทพ-รังสิต</h4></b></a></p>
          </div>
        </div>

        {{-- 01 train asoke--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-train">
          <a href="{{ asset('assets_v2/port-webp/bts-01.webp') }}" data-gallery="portfolioGallery"  
          title="BTS : Asoke Station" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/bts-01.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urlstation}}อโศก" title="More Details"><b><h4 style="display: inline">BTS</h4> อโศก</b></a></p>
          </div>
        </div>

        {{-- 002 ทองหล่อ--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-train">
          <a href="{{ asset('assets_v2/port-webp/bts-02.webp') }}" data-gallery="portfolioGallery"  
          title="BTS : Thong Lo Station" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/bts-02.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urlstation}}ทองหล่อ" title="More Details"><b><h4 style="display: inline">BTS</h4> ทองหล่อ</b></a></p>
          </div>
        </div>

        {{-- 003 เอกมัย--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-train">
          <a href="{{ asset('assets_v2/port-webp/bts-03.webp') }}" data-gallery="portfolioGallery"  
          title="BTS : Ekkamai Station" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/bts-03.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urlstation}}เอกมัย" title="More Details"><b><h4 style="display: inline">BTS</h4> เอกมัย</b></a></p>
          </div>
        </div>

        {{-- 007 filter-area  จุฬา-สามย่าน--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-area">
          <a href="{{ asset('assets_v2/port-webp/area-01.webp') }}" data-gallery="portfolioGallery"  
          title="โรงพยาบาลบำรุงราษฎร์" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/area-01.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urlarea}}จุฬาลงกรณ์-สามย่าน-สยาม-สนามกีฬาแห่งชาติ" title="More Details"><b><h4 style="display: inline">จุฬา-สามย่าน</h4></b></a></p>
          </div>
        </div>

        {{-- 014 filter-area  อโศก-ทองหล่อ --}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-area">
          <a href="{{ asset('assets_v2/port-webp/area-02.webp') }}" data-gallery="portfolioGallery"  
          title="อโศก-ทองหล่อ" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/area-02.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urlarea}}กลางสุขุมวิท-อโศก-พร้อมพงษ์-ทองหล่อ-เอกมัย" title="More Details"><b><h4 style="display: inline">อโศก-ทองหล่อ</h4></b></a></p>
          </div>
        </div>

        {{-- 015 filter-area พระโขนง-อ่อนนุช--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-area">
          <a href="{{ asset('assets_v2/port-webp/area-03.webp') }}" data-gallery="portfolioGallery"  
          title="พระโขนง-อ่อนนุช" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/area-03.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urlarea}}ปลายสุขุมวิท-พระโขนง-อ่อนนุช-บางจาก-อุดมสุข" title="More Details"><b><h4 style="display: inline">พระโขนง-อ่อนนุช</h4></b></a></p>
          </div>
        </div>

        {{-- 008 filter-hospital บำรุงราษฎร์ --}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-hospital">
          <a href="{{ asset('assets_v2/port-webp/hospital-02.webp') }}" data-gallery="portfolioGallery"  
          title="โรงพยาบาลบำรุงราษฎร์" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/hospital-02.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urllandmark}}75/โรงพยาบาลบำรุงราษฎร์" title="More Details"><b><h4 style="display: inline">บำรุงราษฎร์</h4></b></a></p>
          </div>
        </div>

        {{-- 016 filter-hospital รามาธิบดี --}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-hospital">
          <a href="{{ asset('assets_v2/port-webp/hospital-01.webp') }}" data-gallery="portfolioGallery"  
          title="รพ. รามาธิบดี" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/hospital-01.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urllandmark}}136/โรงพยาบาลรามาธิบดี" title="More Details"><b><h4 style="display: inline">รามาธิบดี</h4></b></a></p>
          </div>
        </div>

        {{-- 017 filter-hospital  โรงพยาบาลกรุงเทพ ซอยศูนย์วิจัย--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-hospital">
          <a href="{{ asset('assets_v2/port-webp/hospital-03.webp') }}" data-gallery="portfolioGallery"  
          title="โรงพยาบาลกรุงเทพ ซอยศูนย์วิจัย" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/hospital-03.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urllandmark}}67/โรงพยาบาลกรุงเทพ%20ซอยศูนย์วิจัย" title="More Details"><b><h4 style="display: inline">รพ.กรุงเทพ ซอยศูนย์วิจัย</h4></b></a></p>
          </div>
        </div>

        {{-- 018 filter-hospital สมิติเวช สุขุมวิท --}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-hospital">
          <a href="{{ asset('assets_v2/port-webp/hospital-04.webp') }}" data-gallery="portfolioGallery"  
          title="สมิติเวช สุขุมวิท" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/hospital-04.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urllandmark}}88/โรงพยาบาลสมิติเวช%20สุขุมวิท" title="More Details"><b><h4 style="display: inline">รพ.สมิติเวช สุขุมวิท</h4></b></a></p>
          </div>
        </div>

        {{-- 019 filter-hospital โรงพยาบาลจุฬาลงกรณ์ --}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-hospital">
          <a href="{{ asset('assets_v2/port-webp/hospital-05.webp') }}" data-gallery="portfolioGallery"  
          title="โรงพยาบาลจุฬาลงกรณ์" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/hospital-05.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urllandmark}}131/โรงพยาบาลจุฬาลงกรณ์" title="More Details"><b><h4 style="display: inline">รพ.โรงพยาบาลจุฬาลงกรณ์</h4></b></a></p>
          </div>
        </div>

        {{-- 020 filter-hospital รพ.พญาไท 1 --}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-hospital">
          <a href="{{ asset('assets_v2/port-webp/hospital-06.webp') }}" data-gallery="portfolioGallery"  
          title="รพ.พญาไท 1" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/hospital-06.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urllandmark}}81/โรงพยาบาลพญาไท%201" title="More Details"><b><h4 style="display: inline">รพ.พญาไท 1</h4></b></a></p>
          </div>
        </div>

        {{-- 009 filter-attraction พารากอน--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-attraction">
          <a href="{{ asset('assets_v2/port-webp/attraction-01.webp') }}" data-gallery="portfolioGallery"  
          title="Paragon" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/attraction-01.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urllandmark}}23/สยาม%20พารากอน" title="More Details"><b><h4 style="display: inline">Paragon</h4></b></a></p>
          </div>
        </div>

        {{-- 010 train อ่อนนุช--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-train">
          <a href="{{ asset('assets_v2/port-webp/bts-04.webp') }}" data-gallery="portfolioGallery"  
          title="BTS : On Nut Station" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/bts-04.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urlstation}}อ่อนนุช" title="More Details"><b><h4 style="display: inline">BTS</h4> อ่อนนุช</b></a></p>
          </div>
        </div>

        {{-- 026 filter-attraction เมกา--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-attraction">
          <a href="{{ asset('assets_v2/port-webp/attraction-02.webp') }}" data-gallery="portfolioGallery"  
          title="เมกา บางนา" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/attraction-02.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urllandmark}}26/เมกาบางนา" title="More Details"><b><h4 style="display: inline">เมกา บางนา</h4></b></a></p>
          </div>
        </div>


        {{-- 021-train ห้วยขวาง--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-train">
          <a href="{{ asset('assets_v2/port-webp/bts-05.webp') }}" data-gallery="portfolioGallery"  
          title="MRT : Huai Khwang Station" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/bts-05.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urlstation}}ห้วยขวาง" title="More Details"><b><h4 style="display: inline">MRT</h4> ห้วยขวาง</b></a></p>
          </div>
        </div>

        {{-- 022 filter-train สามย่าน--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-train">
          <a href="{{ asset('assets_v2/port-webp/bts-06.webp') }}" data-gallery="portfolioGallery"  
          title="MRT : Sam Yan Station" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/bts-06.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urlstation}}สามย่าน" title="More Details"><b><h4 style="display: inline">MRT</h4> สามย่าน</b></a></p>
          </div>
        </div>

        {{-- 023 filter-area รัชดา-ห้วยขวาง--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-area">
          <a href="{{ asset('assets_v2/port-webp/area-04.webp') }}" data-gallery="portfolioGallery"  
          title="รัชดา-ห้วยขวาง" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/area-04.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urlarea}}รัชดา-ห้วยขวาง-สุทธิสาร-ศูนย์วัฒนธรรม" title="More Details"><b><h4 style="display: inline">รัชดา-ห้วยขวาง</h4></b></a></p>
          </div>
        </div>

        {{-- 024 filter-area พระราม-9-RCA--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-area">
          <a href="{{ asset('assets_v2/port-webp/area-05.webp') }}" data-gallery="portfolioGallery"  
          title="พระราม-9-RCA" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/area-05.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urlarea}}พระราม-9-RCA-อโศก-เพชรบุรี-ดินแดง-เพชรบุรีตัดใหม่-ศูนย์วิจัย-คลองตัน" title="More Details"><b><h4 style="display: inline">พระราม-9-RCA</h4></b></a></p>
          </div>
        </div>

        {{-- 025 filter-area บางนา-แบริ่ง--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-area">
          <a href="{{ asset('assets_v2/port-webp/area-06.webp') }}" data-gallery="portfolioGallery"  
          title="โรงพยาบาลบำรุงราษฎร์" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/area-06.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urlarea}}บางนา-แบริ่ง-ลาซาล-บางพลี-เมกะบางนา" title="More Details"><b><h4 style="display: inline">บางนา-แบริ่ง</h4></b></a></p>
          </div>
        </div>

        {{-- 028 {{$urllandmark}}1/เซ็นทรัลเวิลด์ filter-attraction--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-attraction">
          <a href="{{ asset('assets_v2/port-webp/attraction-03.webp') }}" data-gallery="portfolioGallery"  
          title="เซ็นทรัลเวิลด์" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/attraction-03.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urllandmark}}1/เซ็นทรัลเวิลด์" title="More Details"><b><h4 style="display: inline">เซ็นทรัลเวิลด์</h4></b></a></p>
          </div>
        </div>

        {{-- 027 เซ็นทรัล ลาดพร้าว filter-attraction--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-attraction">
          <a href="{{ asset('assets_v2/port-webp/attraction-04.webp') }}" data-gallery="portfolioGallery"  
          title="เซ็นทรัล ลาดพร้าว" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/attraction-04.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urllandmark}}2/เซ็นทรัล%20ลาดพร้าว" title="More Details"><b><h4 style="display: inline">เซ็นทรัล ลาดพร้าว</h4></b></a></p>
          </div>
        </div>
                
        {{-- 029 ดิ เอ็มควอเทียร์ filter-attraction--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-attraction">
          <a href="{{ asset('assets_v2/port-webp/attraction-05.webp') }}" data-gallery="portfolioGallery"  
          title="ดิ เอ็มควอเทียร์" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/attraction-05.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urllandmark}}22/ดิ%20เอ็มควอเทียร์" title="More Details"><b><h4 style="display: inline">ดิ เอ็มควอเทียร์</h4></b></a></p>
          </div>
        </div>

        {{-- 030 ไอคอน สยาม filter-attraction--}}
        <div class="col-lg-2 col-md-6 col-4 portfolio-item filter-attraction">
          <a href="{{ asset('assets_v2/port-webp/attraction-06.webp') }}" data-gallery="portfolioGallery"  
          title="ไอคอน สยาม" class="portfolio-lightbox">
          <img src="{{ asset('assets_v2/port-webp/attraction-06.webp') }}" class="img-fluid" alt=""></a>
          <div class="portfolio-info text-center">   
            <p><a href="{{route('home')}}{{$urllandmark}}30/ไอคอน%20สยาม" title="More Details"><b><h4 style="display: inline">ไอคอน สยาม</h4></b></a></p>
          </div>
        </div>

    </div>

  </div>
</section>
