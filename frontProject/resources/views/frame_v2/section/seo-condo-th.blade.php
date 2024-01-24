<section id="pricing" class="pricing d-none d-xl-block">
  <div class="container">

    <div class="section-title">
      <span>คอนโดยอดนิยม</span>
      <h2>คอนโดยอดนิยม</h2>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "คอนโด-ไอดีโอ-โอทู"=>"ไอดีโอ โอทู",
            "คอนโด-ไอดีโอ-สุขุมวิท-93"=>"ไอดีโอ สุขุมวิท 93",
            "คอนโด-ไอดีโอ-สุขุมวิท-115"=>"ไอดีโอ สุขุมวิท 115",
            "คอนโด-ไอดีโอ-สาทร-ท่าพระ"=>"ไอดีโอ สาทร-ท่าพระ",
            "คอนโด-ไอดีโอ-วุฒากาศ"=>"ไอดีโอ วุฒากาศ",
          );
          ?>
          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/เช่าคอนโด/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach          

        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "คอนโด-ไอดีโอ-โมบิ-สุขุมวิท-อีสท์เกต"=>"ไอดีโอ โมบิ สุขุมวิท อีสท์เกต",
            "คอนโด-ไอดีโอ-โมบิ-พระราม-4"=>"ไอดีโอ โมบิ พระราม 4",
            "คอนโด-ไอดีโอ-โมบิ-จรัญ-อินเตอร์เชนจ์"=>"ไอดีโอ โมบิ จรัญ-อินเตอร์เชนจ์",
            "คอนโด-ไอดีโอ-มิกซ์-สุขุมวิท-103"=>"ไอดีโอ มิกซ์ สุขุมวิท 103",
            "คอนโด-ไอดีโอ-จุฬา-สามย่าน"=>"ไอดีโอ จุฬา สามย่าน",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/เช่าคอนโด/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach    
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "คอนโด-ไอดีโอ-คิว-สุขุมวิท-36"=>"ไอดีโอ คิว สุขุมวิท 36",
            "คอนโด-ไอดีโอ-คิว-สยาม-ราชเทวี"=>"ไอดีโอ คิว สยาม-ราชเทวี",
            "คอนโด-ไอดีโอ-คิว-วิคตอรี่"=>"ไอดีโอ คิว วิคตอรี่",
            "คอนโด-ไอดิโอ-ท่าพระ-อินเตอร์เชนจ์"=>"ไอดิโอ ท่าพระ อินเตอร์เชนจ์",
            "ไอคอนโด-สุขุมวิท-105"=>"ไอคอนโด สุขุมวิท 105",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/เช่าคอนโด/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach    
        </ul>
      </div>  

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "คอนโด-แอสปาย-เอราวัณ"=>"แอสปาย เอราวัณ",
            "แอสปาย-อโศก-รัชดา"=>"แอสปาย อโศก-รัชดา",
            "คอนโด-แอสปาย-สุขุมวิท-48"=>"แอสปาย สุขุมวิท 48",
            "คอนโด-แอสปาย-งามวงศ์วาน"=>"แอสปาย งามวงศ์วาน",
            "คอนโด-แอทโมซ-เลคไซค์-ลาดพร้าว-71"=>"แอทโมซ เลคไซค์ ลาดพร้าว 71",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/เช่าคอนโด/{{$x}}">{{$val}}</a>
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
            "คอนโด-แอทโมซ-รัชดา-ห้วยขวาง"=>"แอทโมซ รัชดา-ห้วยขวาง",
            "คอนโด-แอชตัน-อโศก"=>"แอชตัน อโศก",
            "คอนโด-แอชตัน-สีลม"=>"แอชตัน สีลม",
            "คอนโด-แอชตัน-จุฬา-–-สีลม"=>"แอชตัน จุฬา – สีลม",
            "คอนโด-เอ-สเปซ-อโศก-รัชดา"=>"เอ สเปซ อโศก-รัชดา",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/เช่าคอนโด/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 

        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "คอนโด-เอ-สเปซ-มี-บางนา"=>"เอ สเปซ มี บางนา",
            "คอนโด-เอลลิโอ-สุขุมวิท-64"=>"เอลลิโอ สุขุมวิท 64",
            "คอนโด-เอลลิโอ-สาทร-วุฒากาศ"=>"เอลลิโอ สาทร-วุฒากาศ",
            "คอนโด-เอลลิโอ-เดล-เรย์"=>"เอลลิโอ เดล เรย์",
            "คอนโด-เอลลิโอ-เดล-มอสส์-พหลโยธิน-34"=>"เอลลิโอ เดล มอสส์ พหลโยธิน 34",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/เช่าคอนโด/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "คอนโด-เอลลิโอ-เดล-เนสท์"=>"เอลลิโอ เดล เนสท์",
            "คอนโด-ศุภาลัย-เวอเรนด้า-สถานีภาษีเจริญ"=>"ศุภาลัย เวอเรนด้า สถานีภาษีเจริญ",
            "คอนโด-ศุภาลัย-เวอเรนด้า-รามคำแหง"=>"ศุภาลัย เวอเรนด้า รามคำแหง",
            "คอนโด-ศุภาลัย-เวอเรนด้า-พระราม-9"=>"ศุภาลัย เวอเรนด้า พระราม 9",
            "คอนโด-ศุภาลัย-เวลลิงตัน-2"=>"ศุภาลัย เวลลิงตัน 2",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/เช่าคอนโด/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 

        </ul>
      </div>  
      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "คอนโด-ศุภาลัย-เวลลิงตัน"=>"ศุภาลัย เวลลิงตัน",
            "วี-คอนโด-ลาดกระบัง"=>"วีลาดกระบัง",
            "คอนโด-ไลฟ์-อโศก-พระราม-9"=>"ไลฟ์ อโศก-พระราม 9",
            "คอนโด-ไลฟ์-อโศก"=>"ไลฟ์ อโศก",
            "คอนโด-ไลฟ์-สุขุมวิท-48"=>"ไลฟ์ สุขุมวิท 48",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/เช่าคอนโด/{{$x}}">{{$val}}</a>
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
            "คอนโด-ไลฟ์-วัน-ไวร์เลส"=>"ไลฟ์ วัน ไวร์เลส",
            "คอนโด-ไลฟ์-รัชดาภิเษก"=>"ไลฟ์ รัชดาภิเษก",
            "คอนโด-ไลฟ์-ปิ่นเกล้า"=>"ไลฟ์ ปิ่นเกล้า",
            "คอนโด-ลุมพินี-วิลล์-อ่อนนุช-–-ลาดกระบัง"=>"ลุมพินี วิลล์ อ่อนนุช – ลาดกระบัง",
            "คอนโด-ลุมพินี-วิลล์-อ่อนนุช-พัฒนาการ"=>"ลุมพินี วิลล์ อ่อนนุช-พัฒนาการ",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/เช่าคอนโด/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 

        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "คอนโด-ลุมพินี-วิลล์-อ่อนนุช-46"=>"ลุมพินี วิลล์ อ่อนนุช 46",
            "คอนโด-ลุมพินี-วิลล์-ศูนย์วัฒนธรรม"=>"ลุมพินี วิลล์ ศูนย์วัฒนธรรม",
            "คอนโด-ลุมพินี-วิลล์-ลาดพร้าว-โชคชัย4"=>"ลุมพินี วิลล์ ลาดพร้าว-โชคชัย4",
            "คอนโด-ลุมพินี-วิลล์-ลาซาล-แบริ่ง"=>"ลุมพินี วิลล์ ลาซาล-แบริ่ง",
            "คอนโด-ลุมพินี-วิลล์-รามคำแหง-60-2"=>"ลุมพินี วิลล์ รามคำแหง 60/2",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/เช่าคอนโด/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "คอนโด-ลุมพินี-วิลล์-แจ้งวัฒนะ-ปากเกร็ด"=>"ลุมพินี วิลล์ แจ้งวัฒนะ-ปากเกร็ด",
            "คอนโด-ลุมพินี-เมกะซิตี้-บางนา"=>"ลุมพินี เมกะซิตี้ บางนา",
            "คอนโด-ลุมพินี-มิกซ์-เทพารักษ์-–-ศรีนครินทร์"=>"ลุมพินี มิกซ์ เทพารักษ์ – ศรีนครินทร์",
            "คอนโด-ลุมพินี-เพลส-ศรีนครินทร์-หัวหมาก-สเตชั่น"=>"ลุมพินี เพลส ศรีนครินทร์-หัวหมาก สเตชั่น",
            "คอนโด-ลุมพินี-เพลส-รัชโยธิน"=>"ลุมพินี เพลส รัชโยธิน",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/เช่าคอนโด/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 
        </ul>
      </div>  
      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "คอนโด-ลุมพินี-เพลส-พระราม-9-รัชดา"=>"ลุมพินี เพลส พระราม 9-รัชดา",
            "คอนโด-ลุมพินี-เพลส-พระราม-4-–-กล้วยน้ำไท"=>"ลุมพินี เพลส พระราม 4 – กล้วยน้ำไท",
            "คอนโด-ลุมพินี-เพลส-นราธิวาสราชนครินทร์"=>"ลุมพินี เพลส นราธิวาสราชนครินทร์",
            "คอนโด-ลุมพินี-พาร์ค-วิภาวดี-จตุจักร"=>"ลุมพินี พาร์ค วิภาวดี-จตุจักร",
            "คอนโด-ลุมพินี-พาร์ค-ริเวอร์ไซด์---พระราม-3"=>"ลุมพินี พาร์ค ริเวอร์ไซด์ - พระราม 3",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/เช่าคอนโด/{{$x}}">{{$val}}</a>
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
            "คอนโด-ลุมพินี-พาร์ค-รัตนาธิเบศร์-–-งามวงศ์วาน"=>"ลุมพินี พาร์ค รัตนาธิเบศร์ – งามวงศ์วาน",
            "ลุมพินี-พาร์ค-เพชรเกษม-98"=>"ลุมพินี พาร์ค เพชรเกษม 98",
            "คอนโด-ลุมพินี-พาร์ค-ปิ่นเกล้า"=>"ลุมพินี พาร์ค ปิ่นเกล้า",
            "คอนโด-ลุมพินี-นวมินทร์-ศรีบูรพา"=>"ลุมพินี นวมินทร์ ศรีบูรพา",
            "ลุมพินี-คอนโดทาวน์-รามอินทรา---หลักสี่"=>"ลุมพินี คอนโดทาวน์ รามอินทรา - หลักสี่",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/เช่าคอนโด/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 

        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "ลุมพินี-คอนโดทาวน์-รัตนาธิเบศร์"=>"ลุมพินี คอนโดทาวน์ รัตนาธิเบศร์",
            "คอนโด-รีเจ้นท์-โฮม-สุขุมวิท-81"=>"รีเจ้นท์ โฮม สุขุมวิท 81",
            "คอนโด-รีเจ้นท์-โฮม-7-สุขุมวิท"=>"รีเจ้นท์ โฮม 7 สุขุมวิท",
            "คอนโด-รีเจ้นท์-โฮม-18-แจ้งวัฒนะ-หลักสี่"=>"รีเจ้นท์ โฮม 18 แจ้งวัฒนะ-หลักสี่",
            "คอนโด-ริทึ่ม-เอกมัย"=>"ริทึ่ม เอกมัย",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/เช่าคอนโด/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 

        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "คอนโด-ริทึ่ม-สุขุมวิท-50"=>"ริทึ่ม สุขุมวิท 50",
            "คอนโด-ริทึ่ม-สุขุมวิท-36-38"=>"ริทึ่ม สุขุมวิท 36-38",
            "คอนโด-ริทึ่ม-สาทร"=>"ริทึ่ม สาทร",
            "คอนโด-ยูนิโอ-สุขุมวิท-72"=>"ยูนิโอ สุขุมวิท 72",
            "คอนโด-ยู-ดีไลท์-แอท-ตลาดพลู-สเตชั่น"=>"ยู ดีไลท์ แอท ตลาดพลู สเตชั่น",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/เช่าคอนโด/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 
        </ul>
      </div>  
      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "คอนโด-ยู-ดีไลท์-@-หัวหมากสเตชั่น"=>"ยู ดีไลท์ @ หัวหมากสเตชั่น",
            "คอนโด-มาเอสโตร-14-สยาม-ราชเทวี"=>"มาเอสโตร 14 สยาม-ราชเทวี",
            "คอนโด-มาเอสโตร-12"=>"มาเอสโตร 12",
            "คอนโด-ฟิวส์-โมเบียส-รามคำแหง-สเตชั่น"=>"ฟิวส์ โมเบียส รามคำแหง สเตชั่น",
            "คอนโด-พาร์ค-24-ออริจิ้น-พร้อมพงษ์"=>"พาร์ค 24 ออริจิ้น พร้อมพงษ์",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/เช่าคอนโด/{{$x}}">{{$val}}</a>
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
            "พลัมคอนโด-ลาดพร้าว-101"=>"พลัมคอนโด ลาดพร้าว 101",
            "พลัมคอนโด-รามคำแหง-สเตชั่น"=>"พลัมคอนโด รามคำแหง สเตชั่น",
            "คอนโด-เบ็ล-แกรนด์-พระราม-9"=>"เบ็ล แกรนด์ พระราม 9",
            "คอนโด-ไนท์บริดจ์-คอลลาจ-รามคำแหง"=>"ไนท์บริดจ์ คอลลาจ รามคำแหง",
            "คอนโด-โนเบิล-เพลินจิต"=>"โนเบิล เพลินจิต",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/เช่าคอนโด/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 

        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "คอนโด-โนเบิล-บี-19"=>"โนเบิล บี 19",
            "คอนโด-นิว-โนเบิล-แจ้งวัฒนะ"=>"นิว โนเบิล แจ้งวัฒนะ",
            "คอนโด-นิช-โมโน-สุขุมวิท-แบริ่ง"=>"นิช โมโน สุขุมวิท-แบริ่ง",
            "คอนโด-น็อตติ้ง-ฮิลล์-สุขุมวิท-แพรกษา"=>"น็อตติ้ง ฮิลล์ สุขุมวิท-แพรกษา",
            "คอนโด-น็อตติ้ง-ฮิลล์-สุขุมวิท-105"=>"น็อตติ้ง ฮิลล์ สุขุมวิท 105",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/เช่าคอนโด/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "คอนโด-ที.ซี.-กรีน"=>"ที.ซี. กรีน",
            "คอนโด-เดอะ-ไลน์-สุขุมวิท-101"=>"เดอะ ไลน์ สุขุมวิท 101",
            "คอนโด-เดอะ-ไลน์-วงศ์สว่าง"=>"เดอะ ไลน์ วงศ์สว่าง",
            "คอนโด-เดอะไลน์-พหล-ประดิพัทธ์"=>"เดอะไลน์ พหล-ประดิพัทธ์",
            "คอนโด-เดอะ-ริเวอร์"=>"เดอะ ริเวอร์",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/เช่าคอนโด/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 

        </ul>
      </div>  
      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "คอนโด-เดอะพาร์คแลนด์-ศรีนครินทร์"=>"เดอะพาร์คแลนด์ ศรีนครินทร์",
            "คอนโด-เดอะ-พาร์คแลนด์-เพชรเกษม-56"=>"เดอะ พาร์คแลนด์ เพชรเกษม 56",
            "คอนโด-เดอะ-พาร์คแลนด์-บางนา"=>"เดอะ พาร์คแลนด์ บางนา",
            "คอนโด-เดอะ-เบส-แจ้งวัฒนะ"=>"เดอะ เบส แจ้งวัฒนะ",
            "คอนโด-เดอะ-เทมโป้-แกรนด์-สาทร-วุฒากาศ"=>"เดอะ เทมโป้ แกรนด์ สาทร-วุฒากาศ",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/เช่าคอนโด/{{$x}}">{{$val}}</a>
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
            "คอนโด-เดอะทรี-สุขุมวิท-71-เอกมัย"=>"เดอะทรี สุขุมวิท 71-เอกมัย",
            "เดอะทรัสต์-คอนโด-งามวงศ์วาน"=>"เดอะทรัสต์งามวงศ์วาน",
            "คอนโด-เดอะ-เซนต์-เรสสิเด้นเซส"=>"เดอะ เซนต์ เรสสิเด้นเซส",
            "คอนโด-เดอะ-คีย์-สาทร-ราชพฤกษ์"=>"เดอะ คีย์ สาทร ราชพฤกษ์",
            "ดี-คอนโด-รามอินทรา"=>"ดีคอนโด รามอินทรา",
            
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/เช่าคอนโด/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "ดีคอนโด-รามคำแหง"=>"ดีคอนโด รามคำแหง",
            "ดี-คอนโด-แคมปัส-รีสอร์ท-เอแบค-บางนา-Abac"=>"ดีคอนโดแคมปัส รีสอร์ท เอแบค บางนา",
            "คอนโด-ดิ-ไอริส-พระราม-9-ศรีนครินทร์"=>"ดิ ไอริส พระราม 9-ศรีนครินทร์",
            "คอนโด-ดิ-แอสปาย-พระราม-4"=>"ดิ แอสปาย พระราม 4",
            
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/เช่าคอนโด/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 

        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "คอนโด-ดิ-เอส-อโศก"=>"ดิ เอส อโศก",
            "คอนโด-ดิ-เอส-สุขุมวิท-36"=>"ดิ เอส สุขุมวิท 36",
            "คอนโด-ซี-เอกมัย"=>"ซี เอกมัย",
            "คอนโด-ซิตี้-โฮม-รัตนาธิเบศร์"=>"ซิตี้ โฮม รัตนาธิเบศร์",
            
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/เช่าคอนโด/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 
        </ul>
      </div> 
      
      <div class="col-lg-3 col-md-6 footer-links">
        
        <ul>
          <?php
          $age = array(
            "คอนโด-ซิตี้โฮม-รัชดา-ปิ่นเกล้า-%28จรัญสนิทวงศ์-95-1%29"=>"ซิตี้โฮม รัชดา-ปิ่นเกล้า (จรัญสนิทวงศ์ 95/1)",
            "คอนโด-แชปเตอร์วัน-อีโค-รัชดา-ห้วยขวาง"=>"แชปเตอร์วัน อีโค รัชดา-ห้วยขวาง",
            "คอนโด-เคนซิงตัน-สุขุมวิท-เทพารักษ์"=>"เคนซิงตัน สุขุมวิท-เทพารักษ์",
            "คอนโด-กรีเน่-ดอนเมือง-สรงประภา"=>"กรีเน่ ดอนเมือง-สรงประภา",
          );
          ?>          
          @foreach($age as $x => $val)
            <li><i class='bx bx-chevron-right'></i> 
              <a href="{{route('home')}}/เช่าคอนโด/{{$x}}">{{$val}}</a>
            </li>          
          @endforeach 
          
        </ul>
      </div>        
    </div>

  </div>
</section>

