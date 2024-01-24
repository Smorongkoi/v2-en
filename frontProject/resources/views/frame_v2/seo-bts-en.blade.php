<?php
$urlstation2="/rent/condo-near-BTS/";
?>
<div id="pricing" class="pricing d-none d-xl-block">
  <div class="container">

    <div class="section-title">
      <h2>Popular condos near BTS Sukhumvit - Silom lines
      </h2>

    </div>

    <div class="row">
      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $station = array(
            "Bang-Na"=>"Condo Bang Na",
            "On-Nut"=>"Condo On-Nut",
            "Phrom-Phong"=>"Condo Phrom Phong",
            "Chit-Lom"=>"Condo Chit Lom",
            "Victory-Monument"=>"Condo Victory Monument",
            "Sala-Daeng"=>"Condo Sala Daeng",
          );
          ?>          
          @foreach($station as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}{{$urlstation2}}{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 

        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $station = array(
            "Udom-Suk"=>"Condo Udom Suk",
            "Phra-Khanong"=>"Condo Phra Khanong",
            "Asok"=>"Condo Asoke",
            "Siam-Interchange"=>"Condo Siam Interchange",
            "Ari"=>"Condo Ari",
            "Ratchadamri"=>"Condo Ratchadamri",
          );
          ?>          
          @foreach($station as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}{{$urlstation2}}{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 

        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $station = array(
            "Punnawithi"=>"Condo Punnawithi",
            "Ekkamai"=>"Condo Ekkamai",
            "Nana"=>"Condo Nana",
            "Ratchathewi"=>"Condo Ratchathewi",
            "Ratchayothin"=>"Condo Ratchayothin",
            "Chong-Nonsi"=>"Condo Chong-Nonsi",
          );
          ?>          
          @foreach($station as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}{{$urlstation2}}{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 
        </ul>
      </div>  
      <div class="col-lg-3 col-md-6 footer-links">        
        <ul>
          <?php
          $station = array(
            "Bang-Chak"=>"Condo Bang Chak",
            "Thong-Lo"=>"Condo Thong Lo",
            "Phloen-Chit"=>"Condo Phloen Chit",
            "Phaya-Thai"=>"Condo Phaya Thai",
            "National-Stadium"=>"Condo National Stadium",
            "Surasak"=>"Condo Surasak",
          );
          ?>          
          @foreach($station as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}{{$urlstation2}}{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 
                 
        </ul>
      </div>        
    </div><br>

    <div class="section-title">
      <h2>Popular condos near MRT</h2>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-6 footer-links">        
        <ul>
          <?php
          $station = array(
            "Sam-Yan"=>"Condo Sam Yan",
            "Si-Lom"=>"Condo Si Lom",
            "Lumphini"=>"Condo Lumphini",
            "khlong-Toei"=>"Condo Khlong Toei",
          );
          ?>          
          @foreach($station as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}{{$urlstation2}}{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 

        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $station = array(
            "Queen-Sirikit-National-Convention-Centre"=>"Condo Queen Sirikit Centre",
            
            "Sukhumvit"=>"Condo MRT Sukhumvit",
            "Phetchaburi"=>"Condo Phetchaburi",
            "Phra-Ram-9"=>"Condo Phra Ram 9",
          );
          ?>          
          @foreach($station as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}{{$urlstation2}}{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $station = array(
            "Thailand-Cultural-Centre"=>"Condo Thailand Cultural Centre",
            "Huai-Khwang"=>"Condo Huai Khwang",
            "Sutthisan"=>"Condo Sutthisan",
            "Ratchadaphisek"=>"Condo Ratchadaphisek",
          );
          ?>          
          @foreach($station as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}{{$urlstation2}}{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 
          </ul>
      </div>  
      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $station = array(
            "Lat-Phrao"=>"Condo Lat Phrao",
            "Phahon-Yothin"=>"Condo Phahon Yothin",
            "Chatuchak-Park"=>"Condo Chatuchak",
          );
          ?>          
          @foreach($station as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}{{$urlstation2}}{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 
        </ul>
      </div>        
    </div><br>

    <div class="section-title">
      <h2>Condos close to educational institutions</h2>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-6 footer-links">        
        <ul>
          <?php
          $university = array(
            "Bangkok-University-Kluaynamthai-"=>"Condo BU Kluaynamthai",
            "Kasetsart-University"=>"Condo Kasetsart University",
          );
          ?>          
          @foreach($university as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/rent/condo-near-schools/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 
 
          
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $university = array(
            "Bangkok-University-Rangsit"=>"Condo Bangkok University Rangsit",
            "Assumption-University"=>"Condo ABAC Bangna",
          );
          ?>          
          @foreach($university as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/rent/condo-near-schools/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $university = array(
            "Chulalongkorn-University"=>"Condo Chulalongkorn University",
          );
          ?>          
          @foreach($university as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/rent/condo-near-schools/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 

        </ul>
      </div>  
      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $university = array(
            "Thammasat-University-Rangsit"=>"Condo Thammasat Rangsit",

          );
          ?>          
          @foreach($university as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/rent/condo-near-schools/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 

        </ul>
      </div>        
    </div><br>



  </div>
</div>