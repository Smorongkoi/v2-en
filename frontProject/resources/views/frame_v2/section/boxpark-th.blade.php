<!-- ======= Features Section ======= -->
<div id="about" class="about d-none d-xl-block" style="padding-bottom: 0">
  
</div>
<div id="features" class="features section-bg d-none d-xl-block">
  <div class="section-title">
    <h2>ค้นหาคอนโดแต่ละทำเล</h2>
  </div>
  <div class="tab-home-condo">
    <div class="container tab-home-menu" data-aos="fade-up">

      <ul class="nav nav-tabs row  g-2 d-flex">

        <li class="nav-item col-3"  >
          <a class="nav-link active show" onclick="getTabTrain();" data-bs-toggle="tab" data-bs-target="#tab-1">
            <h4><i class="fas fa-subway"></i> สถานีรถไฟฟ้า</h4>
          </a>
        </li><!-- End tab nav item -->

        <li class="nav-item col-3">
          <a class="nav-link" onclick="getTabArea();" data-bs-toggle="tab" data-bs-target="#tab-2">
            <h4 class="d-none d-md-block"><i class="fas fa-map-marker-alt"></i> ทำเลทั่วกรุงเทพฯ</span></h4>
          </a><!-- End tab nav item -->
        </li>
        <li class="nav-item col-3">
          <a class="nav-link" onclick="getTabUniversity();" data-bs-toggle="tab" data-bs-target="#tab-3">
            <h4><i class="fas fa-graduation-cap"></i> สถานศึกษา</h4>
          </a>
        </li><!-- End tab nav item -->

        <li class="nav-item col-3">
          <a class="nav-link" onclick="getTabLandmark();" data-bs-toggle="tab" data-bs-target="#tab-4">
            <h4><i class="fas fa-map-marked-alt"></i> สถานที่สำคัญ</h4>
          </a>
        </li><!-- End tab nav item -->

      </ul>
      <div class="tab-home-content" id="showTabData"></div>

    </div>
  </div>
</div><!-- End Features Section -->




