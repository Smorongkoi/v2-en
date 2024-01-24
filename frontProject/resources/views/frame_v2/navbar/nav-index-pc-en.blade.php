<?php
// $url="https://scancondo.com/";
// $url="https://eng.scancondo.com/demo";
$url=env('URLTH');
?>
<div class="d-none d-md-block">
    <section id="topbar" class="d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="social-links d-none d-md-block">
          <a href="https://www.youtube.com/channel/UCEABmgidNuLXBLRmE24dXkg" class="twitter" rel="nofollow" target="_blank"><i class="fab fa-youtube"></i></a>
          <a href="https://www.facebook.com/ScanCondoTH/" class="facebook" rel="nofollow" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/scancondo/" class="instagram" rel="nofollow" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://api.whatsapp.com/message/QBXG7VN7RV6YB1" class="linkedin" rel="nofollow" target="_blank"><i class="fab fa-whatsapp"></i></a>
          <a href="{{ route('want') }}" class="navlinktoon"><i class="fas fa-building blink"></i>&nbsp;&nbsp; Buy-Rent condo</a>     
            
          <a href="{{ route('agenttoon') }}" class="navlinktoon">Join us</a> 
          <a href="/#box-shock" class="navlinktoon">Articles</a> 
      </div>
          
          <div class="contact-info d-flex align-items-center d-block d-sm-none">              
              <i class="fab fa-line lemon"  ></i> &nbsp; &nbsp; 
                  <a href="//line.me/R/ti/p/%40704uwpvc" class="d-none d-md-block" style="color:#fefefe">
                      <span class="d-none d-md-block"> Line ID :</span>&nbsp;&nbsp;@scancondo
                  </a>
              
              <i class="fas fa-mobile lemonpink"></i>&nbsp; 
                  <span style="color:#fefefe">
                      <a href="tel:+6627284533" style="color:#fefefe">02-728-4533</a>
                  </span>
              &nbsp; &nbsp; | &nbsp; &nbsp;  
              <a href="@yield('link_th', $url)"><img src="{{ asset('assets_v2/assets/img/icon-webp/th.webp') }}" style="width:16px">
                &nbsp; TH&nbsp;&nbsp;</a>    
          </div>  
          
          <div class="contact-info d-flex align-items-center d-none d-xl-block"> 
            <a href="#" class="navlinktoon"><span style="color:#92e524;" >2,000 Projects Over 100,000 properties</span> in Bangkok</a>  
            &nbsp;| &nbsp;
            <a href="@yield('link_th', $url)" class="navlinktoon2 p-1" style="">
              <img src="{{ asset('assets_v2/assets/img/icon-webp/th.webp') }}" style="width:24px"> TH
            </a> 

          </div>
    </section>
</div>
<!-- ======= Top Bar ======= -->

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center " >
  <div class="container d-flex align-items-center  justify-content-between"  style="color: #fefefe;font-size:1.1em">
    <a href="/" class="logo">
        <img src="{{ asset('assets_v2/assets/img/icon-webp/scancondo-logo.webp') }}" class="img-fluid  d-none d-sm-block" 
        alt="Buy Sale Rent Condo" title="Buy Sale Rent Condo" >
        <img src="{{ asset('assets_v2/assets/img/icon-webp/scancondo-logo.webp') }}" class="img-fluid  d-block d-md-none" 
        alt="Buy Sale Rent Condo" title="Buy Sale Rent Condo" style="width: 150px" >
    </a>
    <div class="d-flex d-block d-sm-none"> 
      <a href="//line.me/R/ti/p/%40704uwpvc" >&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
        <img src="{{ asset('assets_v2/assets/img/icon-webp/line.webp') }}" style="width:16px">
      </a> &nbsp;&nbsp;| &nbsp;          
      <a href="@yield('link_th', $url)" >
        TH
      </a>    
  </div>

  <nav id="navbar" class="navbar">
    <ul>
      <li><a class="nav-link scrollto active" href="{{ route('home') }}"><i class="fas fa-home"></i>&nbsp;</a></li>
        <li><a class="nav-link scrollto" href="/#about" style="justify-content: left">
          <i class="fas fa-search"></i>&nbsp;&nbsp; Find Condo</a></li>
          <li><a class="nav-link scrollto" href="/#services">Why us?</a></li>   
          <li><a class="nav-link scrollto " href="/#portfolio">Important Location</a></li> 
      <li><a class="nav-link scrollto" href="{{ route('servicestoon') }}">Our services</a></li>
      <li class="dropdown"><a href="#"><span>Contact us</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
            <li><a class="nav-link scrollto" href="{{ route('contacttoon') }}">Contact us</a></li>            
            <li><a class="nav-link" href="{{ route('ratetoon') }}">Payment</a></li>              
            <li><a class="nav-link" href="{{ route('news') }}">News</a></li>
        </ul>            
        </li>
        <li >&nbsp;&nbsp;</li>
        <li class="d-none d-sm-block"><a href="{{ route('deposit') }}" class="hoverx" style="justify-content: left;color:#92e524;">
          <img src="{{ asset('assets_v2/assets_v2/'.$lang.'/deposit.gif') }}" ></a>
        </li>          
        &nbsp;
        <li class="d-none d-sm-block">
          <a href="//line.me/R/ti/p/%40704uwpvc" rel="nofollow" target="_blank" title="ไลน์ไอดี @scancondo" class="hoverx">
            <img src="{{ asset('assets_v2/assets_v2/'.$lang.'/freeconsult.gif') }}"></a>
        </li>  
        <li class="d-block d-sm-none" style="min-height:400px"></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav>
  <!-- .navbar -->
  </div>
</header>