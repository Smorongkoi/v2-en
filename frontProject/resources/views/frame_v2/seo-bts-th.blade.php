<?php
$urlstation2="/ให้เช่า/คอนโดใกล้สถานี/";
?>
<div id="pricing" class="pricing d-none d-xl-block">
  <div class="container">

    <div class="section-title">
      <h2>คอนโดยอดนิยม BTS สายสุขุมวิท-สายสีลม
      </h2>

    </div>

    <div class="row">
      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $station = array(
            "บางนา"=>"คอนโด บางนา",
            "อ่อนนุช"=>"คอนโด อ่อนนุช",
            "พร้อมพงษ์"=>"คอนโด พร้อมพงษ์",
            "ชิดลม"=>"คอนโด ชิดลม",
            "อนุสาวรีย์ชัยสมรภูมิ"=>"คอนโด อนุสาวรีย์",
            "ศาลาแดง"=>"คอนโด ศาลาแดง",
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
            "อุดมสุข"=>"คอนโด อุดมสุข",
            "พระโขนง"=>"คอนโด พระโขนง",
            "อโศก"=>"คอนโด อโศก",
            "สยาม"=>"คอนโด สยาม",
            "อารีย์"=>"คอนโด อารีย์",
            "ราชดำริ"=>"คอนโด ราชดำริ",
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
            "ปุณณวิถี"=>"คอนโด ปุณณวิถี",
            "เอกมัย"=>"คอนโด เอกมัย",
            "นานา"=>"คอนโด นานา",
            "ราชเทวี"=>"คอนโด ราชเทวี",
            "รัชโยธิน"=>"คอนโด รัชโยธิน",
            "ช่องนนทรี"=>"คอนโด ช่องนนทรี",
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
            "บางจาก"=>"คอนโด บางจาก",
            "ทองหล่อ"=>"คอนโด ทองหล่อ",
            "เพลินจิต"=>"คอนโด เพลินจิต",
            "พญาไท"=>"คอนโด พญาไท",
            "สนามกีฬาแห่งชาติ"=>"คอนโด สนามกีฬาแห่งชาติ",
            "สุรศักดิ์"=>"คอนโด สุรศักดิ์",
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
      <h2>คอนโดยอดนิยม MRT</h2>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-6 footer-links">        
        <ul>
          <?php
          $station = array(
            "สามย่าน"=>"คอนโด สามย่าน",
            "สีลม"=>"คอนโด สีลม",
            "ลุมพินี"=>"คอนโด ลุมพินี",
            "คลองเตย"=>"คอนโด คลองเตย",
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
            "ศูนย์การประชุมแห่งชาติสิริกิติ์"=>"คอนโด ศูนย์การประชุมแห่งชาติสิริกิติ์",
            "สุขุมวิท"=>"คอนโด MRT สุขุมวิท",
            "เพชรบุรี"=>"คอนโด เพชรบุรี",
            "พระราม-9"=>"คอนโด พระราม 9",
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
            "ศูนย์วัฒนธรรมแห่งประเทศไทย"=>"คอนโด ศูนย์วัฒนธรรม",
            "ห้วยขวาง"=>"คอนโด ห้วยขวาง",
            "สุทธิสาร"=>"คอนโด สุทธิสาร",
            "รัชดาภิเษก"=>"คอนโด รัชดา",
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
            "ลาดพร้าว"=>"คอนโด ลาดพร้าว",
            "พหลโยธิน"=>"คอนโด พหลโยธิน",
            "สวนจตุจักร"=>"คอนโด สวนจตุจักร",
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
      <h2>คอนโดใกล้สถานศึกษา</h2>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-6 footer-links">        
        <ul>
          <?php
          $university = array(
            "ม.กรุงเทพ-กล้วยน้ำไท"=>"คอนโด ม.กรุงเทพ กล้วยน้ำไท",
            "ม.เกษตรศาสตร์"=>"คอนโด ม.เกษตรศาสตร์",
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
            "ม.กรุงเทพ-รังสิต"=>"คอนโด ม.กรุงเทพ รังสิต",
            "ม.อัสสัมชัญ-%28เอแบค-บางนา%29"=>"คอนโด เอแบค บางนา",
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
            "จุฬาลงกรณ์มหาวิทยาลัย"=>"คอนโด จุฬาลงกรณ์มหาวิทยาลัย",
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
            "ม.ธรรมศาสตร์-รังสิต"=>"คอนโด ม.ธรรมศาสตร์ รังสิต",
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