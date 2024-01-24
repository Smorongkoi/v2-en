<section id="pricing" class="pricing d-none d-xl-block">
  <div class="container">

    <div class="section-title">
      {{-- <span>คอนโดยอดนิยม</span> --}}
      <h2>Popular Condominiums</h2>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "A-Space-Me-Bangna"=>"A Space Me Bangna",
            "A-space-Asoke-Ratchada"=>"A space Asoke-Ratchada",
            "Ashton-Asoke"=>"Ashton Asoke",
          );
          ?>
          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/rent-condo/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach          

        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "Ashton-Chula–Silom"=>"Ashton Chula Silom",
            "Ashton-Silom"=>"Ashton Silom",
            "Aspire-Ngamwongwan"=>"Aspire Ngamwongwan", 
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/rent-condo/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach    
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "ASPIRE-Erawan"=>"Aspire Erawan",
            "Aspire-Sukhumvit-48"=>"Aspire Sukhumvit48",              
            "Atmoz-Lakeside-Ladprao-71"=>"Atmoz Lakeside Ladprao 71",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/rent-condo/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach    
        </ul>
      </div>  
      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "Condo-Aspire-Asoke---Ratchada"=>"Aspire Asoke-Ratchada",
            "Atmoz-Ratchada-Huaikwang"=>"Atmoz Ratchada Huaikwang",
            "The-Aspire-Rama-4"=>"The Aspire Rama-4",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/rent-condo/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 
        </ul>
      </div>        
    </div><br>

    <div class="row">
      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "Belle-Grand-Rama-9"=>"Belle Grand Rama9",
            "The-BASE-Chaengwattana"=>"The BASE Chaengwattana",
            "C-EKKAMAI"=>"C EKKAMAI",
            
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/rent-condo/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 

        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "City-Home-Ratchada-Pinklao"=>"City Home Ratchada-Pinklao",
            "City-Home-Rattanathibet"=>"City Home Rattanathibet",
            "Chapter-One-Eco-Ratchada-Huai-Khwang"=>"Chapter One Eco Ratchada",
            
            
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/rent-condo/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "Dcondo-Campus-Resort-Bangna"=>"Dcondo Campus Resort Bangna",
            "D-Condo-Ramkhamhaeng"=>"D Condo Ramkhamhaeng",
            "D-Condo-Ramindra"=>"D Condo Ramindra",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/rent-condo/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 

        </ul>
      </div>  
      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "ELIO-Sukhumvit-64"=>"ELIO Sukhumvit 64",
            "ELIO-Delray"=>"ELIO Del ray",
            "Elio-del-nest"=>"Elio del nest",

            
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/rent-condo/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 

        </ul>
      </div>        
    </div><br>

    <div class="row">
      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "Elio-Sathorn-Wutthakat"=>"Elio Sathorn Wutthakat",
            "Elio-Del-Moss-Phaholyothin-34"=>"Elio Del Moss Phaholyothin 34", 
            "The-Esse-Sukhumvit-36"=>"The Esse Sukhumvit36",
            "The-ESSE-Asoke"=>"The ESSE Asoke",
            "Fuse-Mobius-Ramkhamhaeng-Station"=>"Fuse Mobius Ramkhamhaeng Station",
            "Grene-Donmuang-Songprapha"=>"Grene Donmuang Songprapha",

          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/rent-condo/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 

        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "I-Condo-Sukhumvit-105"=>"I-Condo Sukhumvit 105",
            "Ideo Chula Samyan"=>"Ideo Chula Samyan",
            "Ideo-Mix-Sukhumvit-103"=>"Ideo Mix Sukhumvit-103",
            "Ideo-Mobi-Charan-Interchange"=>"Ideo Mobi Charan-Interchange",
            "Ideo-Mobi-Rama-4"=>"Ideo Mobi Rama4",
            "Ideo-Mobi-Sukhumvit-Eastgate"=>"Ideo Mobi Sukhumvit-Eastgate",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/rent-condo/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "Ideo-O2"=>"Ideo O2",
            "IDEO-Q-Siam–Ratchatewi"=>"IDEO Q Siam–Ratchatewi", 
            "Ideo-Q-Sukhumvit-36"=>"Ideo Q Sukhumvit 36",
            "Ideo-Q-Victory"=>"Ideo Q Victory",
            "Ideo-Sathorn-Tha-Phra"=>"Ideo Sathorn Tha-Phra",
            "IDEO-Sukhumvit-115"=>"IDEO Sukhumvit 115",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/rent-condo/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 
        </ul>
      </div>  
      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "Ideo-Sukhumvit-93"=>"Ideo Sukhumvit 93", 
            "IDEO-THAPHRA-INTERCHANGE"=>"Ideo ThaPhra Interchange",
            "Ideo-Wutthakat"=>"Ideo Wutthakat",
            "The-IRIS-Rama-9-Srinakarin"=>"The IRIS Rama 9-Srinakarin",   
            "Knightsbridge-Collage-Ramkhamhaeng"=>"Knightsbridge Collage Ramkhamhaeng",
            "Kensington-Sukhumvit-Theparak"=>"Kensington Sukhumvit-Theparak",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/rent-condo/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 
        </ul>
      </div>        
    </div><br>

    <div class="row">
      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "The-Key-Sathorn-Ratchapreuk"=>"The Key Sathorn Ratchapreuk",
            "Life-Asoke"=>"Life Asoke",
            "Life-Asoke-Rama-9"=>"Life Asoke Rama9",
            "Life-Ratchadapisek"=>"Life Ratchadapisek",
            "Life-Pinklao"=>"Life-Pinklao",
            
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/rent-condo/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 

        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "Life-Sukhumvit-48"=>"Life Sukhumvit 48",
            "life-one-wireless"=>"life one wireless",
            "The-Line-Phahol-Pradipat"=>"The Line Phahol Pradipat",
            "The-Line-Sukhumvit-101"=>"The Line Sukhumvit 101",
            "The-Line-Wongsawang"=>"The Line Wongsawang",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/rent-condo/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 

        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "Lumpini-Place-Ratchayothin"=>"Lumpini-Place-Ratchayothin",
            "Lumpini-Place-Rama-4–Kluaynamthai"=>"Lumpini Place Rama4–Kluaynamthai", 
            "Lumpini-Place-Rama-9–Ratchada"=>"Lumpini Place Rama9–Ratchada",
            "Lumpini-Place-Narathiwatnatchanakharin"=>"Lumpini Place Narathiwat", 
            "Lumpini-Place-Srinakarin-Huamak-Station"=>"Lumpini Place Huamak Station",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/rent-condo/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 
        </ul>
      </div>  
      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "Lumpini-Park-Nawamin-Si-Burapha"=>"Lumpini Park Nawamin Si-Burapha",
            "Lumpini-Park-Phetkasem-98"=>"Lumpini Park Phetkasem98",
            "Lumpini-Park-Pinklao"=>"Lumpini Park Pinklao",
            "Lumpini-Park-Rattanathibet-Ngamwongwan"=>"Lumpini Park Rattanathibet", 
            "Lumpini-Park-Riverside---Rama-3"=>"Lumpini Park Riverside-Rama3",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/rent-condo/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 
        </ul>
      </div>        
    </div><br>

    <div class="row">
      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "Lumpini-Condo-Town-Rattanathibet"=>"Lumpini Condo Town Rattanathibet",
            "LUMPINI-CONDOTOWN-RAMINDRA---LAKSI"=>"Lumpini Condotown Ramindra",
            "Lumpini-Mixx-Thepharak-Srinakarin"=>"Lumpini Mixx Thepharak-Srinakarin",
            "Lumpini-Park-Vibhavadi-Chatuchak"=>"Lumpini Park Vibhavadi-Chatuchak",
            "Lumpini-Ville-Chaengwatthana-Pakkret"=>"Lumpini Ville Chaengwatthana Pakkret",
            "Lumpini-Ville-Cultural-Center"=>"Lumpini Ville Cultural Center",
            
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/rent-condo/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 

        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "Lumpini-Ville-Lasalle-Barring"=>"Lumpini Ville Lasalle-Barring",
            "Lumpini-Ville-Latphrao-Chokchai-4"=>"Lumpini-Ville-Latphrao-Chokchai-4",
            "Lumpini-Ville-On-Nut–Phatthanakan"=>"Lumpini Ville On Nut–Phatthanakan", 
            "Lumpini-ville-onnut-46"=>"Lumpini ville onnut 46",
            "Lumpini-Ville-Onnut-–-Ladkrabang"=>"Lumpini Ville Onnut - Ladkrabang",
            "Lumpini-ville-Ramkhamhaeng-60/2"=>"Lumpini ville Ramkhamhaeng 60/2",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/rent-condo/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "Lumpini-Mega-city-Bangna"=>"Lumpini Mega city Bangna",
            "Maestro-12"=>"Maestro 12",
            "Maestro-14-Siam-Rajdhevee"=>"Maestro14 Siam Rajdhevee",
            "Miami-Bangpu"=>"Miami Bangpu",   
            "Niche-Mono-Sukhumvit-Bearing"=>"Niche Mono Sukhumvit-Bearing",
            "Nue-Noble-Chaengwattana"=>"Nue Noble Chaengwattana",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/rent-condo/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 

        </ul>
      </div>  
      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "Noble-Ploenjit"=>"Noble Ploenjit",
            "Notting-Hill-Sukhumvit-–Praksa"=>"Notting Hill Sukhumvit –Praksa",
            "Notting-Hill-Sukhumvit-105"=>"Notting Hill Sukhumvit 105",
            "Noble-BE-19"=>"Noble BE 19",
            "Plum-Condo-Ladprao-101"=>"Plum Condo Ladprao 101",
            "Plum-Condo-Ramkhamhaeng-Station"=>"Plum Condo Ramkhamhaeng Station",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/rent-condo/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 

        </ul>
      </div>        
    </div><br>

    <div class="row">
      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "The-Politan-Aqua"=>"The Politan Aqua",
            "The-Politan-Rive"=>"The Politan Rive",
            "The-Parkland-Bangna"=>"The Parkland Bangna",
            "The-Parkland-Phetkasem-56"=>"The Parkland Phetkasem 56",
            "The-Parkland-Srinakarin"=>"The Parkland Srinakarin",
            "Condo-Park-24-Origin-Phrom-Phong"=>"Park 24 Origin Phrom Phong",
            "The-River"=>"The River",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/rent-condo/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "Regent-Home-VII-Sukhumvit"=>"Regent Home VII Sukhumvit",
            "REGENT-HOME-18-CHANGWATTANA-LAKSI"=>"Regent Home 18 Changwattana-Laksi",
            "Regent-Home-Sukhumvit-81"=>"Regent Home Sukhumvit 81",
            "Rhythm-Sathorn"=>"Rhythm Sathorn",
            "RHYTHM-Ekkamai"=>"Rhythm Ekkamai",
            "Rhythm-Sukhumvit-36-38"=>"Rhythm Sukhumvit 36-38",
            "Rhythm-Sukhumvit-50"=>"Rhythm Sukhumvit 50",
            
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/rent-condo/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 

        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "The-Saint-Residences"=>"The Saint Residences",
            "Supalai-Wellington-II"=>"Supalai Wellington II",
            "Supalai-Veranda-Ramkhamheang"=>"Supalai Veranda Ramkhamheang",
            "Supalai-Wellington"=>"Supalai Wellington",
            "Supalai-Veranda-Phasi-Charoen-Station"=>"Supalai Veranda Phasi-Charoen",
            "Supalai-Veranda-Rama-9"=>"Supalai Veranda Rama 9",
            "TC-Green"=>"TC Green",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/rent-condo/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 
        </ul>
      </div>  
      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "The-Tempo-Grand-Sathon-Wutthakat"=>"The Tempo Grand Sathon-Wutthakat", 
            "The-Tree-Sukhumvit-71-Ekama"=>"The Tree Sukhumvit 71-Ekamai",
            "The-Tree-Interchange"=>"The Tree Interchange",
            "The-Trust-Condo-Ngamwongwan"=>"The Trust Ngamwongwan",
            "U-Delight-@-HuaMak-Station"=>"U Delight @ HuaMak Station",
            "U-Delight-@-TalatPhlu-Station"=>"U Delight @ TalatPhlu",
            "Unio-Sukhumvit-72"=>"Unio Sukhumvit 72",
            "V-Condo-Ladkrabang"=>"V-Condo Ladkrabang",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/rent-condo/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 
          
        </ul>
      </div>        
    </div>

  </div>
</section>