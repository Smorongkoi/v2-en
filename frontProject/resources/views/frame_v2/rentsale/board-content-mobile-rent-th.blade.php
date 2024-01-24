{{-- mobile content sale --}}
<div class="toonmobile d-block d-sm-none" data-aos="fade-up" data-aos-delay="300">    
  <table class="table" style="margin-bottom: 20px;">
    <thead >
      <tr>
        <td scope="row" style="text-align:right;">รหัสเช่า</td>
        <th  colspan="2" style="text-align: center;font-size:1.3em;line-height:1.1em">{{ $post->post_no }}</th>
      </tr>          
    </thead>
    <tbody >
      <tr>
        <td scope="col" style="text-align:right;width: 30%;border-bottom:0">ค่าเช่า</td>
        <th scope="col" style="text-align:right;border-bottom:0; font-size:1.4em;line-height:1.1em">
          {{ number_format($post->post_rent_price,0) }}</th>
        <td scope="col" style="width: 30%;border-bottom:0">บาท/เดือน</td>
      </tr>
      
    </tbody>
  </table>

  <table class="table  condo-detail-toon" style="margin-bottom: 0">
    <tbody>                
        <tr style="border-bottom:1px solid #ff5722;color:#ff5722">
            
            <th style="width: 40%">รูปแบบห้อง</th>
            <th style="width: 10%">ชั้น</th>
            <th style="width: 10%">ตึก</th>
            <th>พื้นที่ห้อง</th>
        </tr>
        <tr>
            
            <td>
                @if($post->post_bed <= 6)
                <span class="info">{{ $post->post_bed }} <i class="fas fa-bed"></i></span>
                <span class="info">{{ $post->post_baths }} <i class="fas fa-shower"></i></span>
                @else
                    <span class="info">
                        @switch($post->post_bed)
                            @case(7) Studio @break
                            @case(8) Penthouse @break
                        @endswitch
                    </span>
                @endif
            </td>
            <td>{{ $post->post_floor }}</td>
            <td>{{ $post->post_building }}</td>
            <td><span class="info">{{ $post->post_area_total }} <strong>m<sup>2</sup></strong></span></td>
        </tr>
        
    </tbody>
  </table>

  <table class="table">      
        <td scope="row" colspan="3"  style="text-align:left">
          &nbsp;&nbsp;<i class="fas fa-building"></i>&nbsp; {{$condo->condo_name_th}}
        </td>          
      </tr>
      <tr>
        <td scope="row" colspan="3"  style="text-align:left">
          &nbsp;<a href="{{ $area->$area_url }}">
            <i class="fas fa-map-marker-alt"></i>&nbsp; {{ $area->area_name }}</a>
        </td>          
      </tr>

    </tbody>
  </table>

  <div class="text-justify" style="text-align: justify;font-size:0.9em">
    {!! $post->post_description !!}
  </div>

    {{-- ห้องเช่า --}}
    <table class="table condo-detail-toon" style="margin-bottom: 20px">
      <thead >
          <tr>
              <th colspan="3" style="text-align: center;border-bottom:1px solid #ff5722;color:#ff5722">รายละเอียดห้อง</th>
          </tr>
      </thead>
      <tbody>
        <tr>
          <td scope="row" style="text-align:right;">พักอาศัยได้</td>
          <th   style="text-align: center;font-size:1.3em;line-height:1.1em">
            1-{{ $post->post_residents }}</th>
            <td scope="col" style="border-bottom:0"> คน/ห้อง</td>
        </tr>
        <tr>
          <td scope="row" style="text-align:right;">ค่าเช่าห้อง</td>
          <th   style="text-align: center;font-size:1.3em;line-height:1.1em">
            {{ number_format(($post->post_rent_price / $post->post_residents),0) }} </th>
            <td scope="col" style="width: 40%;border-bottom:0"> บาท/คน/เดือน</td>
        </tr>
          
      </tbody>
    </table>

  {{-- เงินทำสัญญา --}}
  <table class="table condo-detail-toon" style="margin-bottom: 20px">
    <thead >
        <tr>
            <th colspan="3" style="text-align: center;border-bottom:1px solid #ff5722;color:#ff5722">เงินทำสัญญาเช่าห้อง</th>
        </tr>
    </thead>
    <tbody>
        <tr class="">
            <td>ค่าประกันการเช่า</td>
            <td style="text-align:right">2</td>
            <td style="text-align:right">เดือน</td>
        </tr>
        <tr >
            <td>ค่าเช่าล่วงหน้า</td>
            <td style="text-align:right">1</td>
            <td style="text-align:right">เดือน</td>
        </tr>
        <tr>
            <td>รวมค่าทำสัญญา</td>
            <td style="text-align:right">3</td>
            <td style="text-align:right">เดือน</td>
        </tr>
        <tr >
            <td>รวมเงินทำสัญญา</td>
            <td style="text-align:right" class="f-rent">{{ number_format(($post->post_rent_price * 3),0) }}</td>
            <td style="text-align:right">บาท</td>
        </tr>
    </tbody>
  </table>

  <table class="table condo-detail-toon">
    <thead>
        <tr>
            <th colspan="2" style="text-align: center;border-bottom:1px solid #ff5722;color:#ff5722">สถานะห้องเช่า</th>
        </tr>
    </thead>
    <tbody style="text-align: left">
        
              
              @if ($post->post_status_rent == 1)
                <tr>
                    <td colspan="3">
                        <i class="fas fa-check blink f-rent"></i>&nbsp;&nbsp; พร้อมเข้าอยู่ทันที
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <i class="fas fa-check  blink f-rent"></i>&nbsp;&nbsp; พร้อมทำสัญญาเช่า
                    </td>
                </tr>
              @else
                <tr>
                    <td colspan="3">
                    <i class="fas fa-times"></i>&nbsp;&nbsp; เช่าแล้ว
                    </td>
                </tr>
              @endif
            </td>
        </tr>
        <tr>
            <td colspan="3">
              <i class="fas fa-check"></i>&nbsp;&nbsp;
              ค่าเช่ารวมค่าส่วนกลางรายปีแล้ว
            </td>
        </tr>
        <tr>
            <td colspan="3">
              <i class="fas fa-check"></i>
              &nbsp;&nbsp;สัญญาขั้นต่ำระยะเวลา 1 ปี</td>
        </tr>
        <tr>
            <td colspan="3">
              <i class="fas fa-check"></i>
              &nbsp;&nbsp;รูปจริงห้องจริงผ่านการตรวจสอบแล้ว</td>
        </tr>
        <tr>
            <td colspan="3">
                <div class="title"><br>
                    <strong class="f-rent">หมายเหตุ:</strong>
                </div>
                <div class="detail" style="font-size: 0.8em">
                    <strong class="f-rent">ค่าประกันการเช่าห้อง 2 เดือน</strong> คือ เงินประกันว่าผู้เช่าจะดูแลรักษาห้องเช่าให้อยู่ในสภาพดี เป็นระเบียบเรียบร้อย และจะได้เงินประกันคืนทั้งหมดเมื่อหมดสัญญาเช่า (ในกรณีที่ไม่มีสิ่งใดชำรุดเสียหาย) <br><br>
                    <strong class="f-rent">ค่าเช่าล่วงหน้า</strong> คือ เงินค่าเช่าห้องที่ชำระมาล่วงหน้าของเดือนแรกสุด นับตั้งแต่วันแรกที่เริ่มสัญญาเช่า และผู้เช่าจะเริ่มชำระค่าเช่าห้อง (รายเดือนปกติ) ในเดือนถัดไป ตามวันที่ระบุในสัญญาเช่าห้อง
                </div>
            </td>
        </tr>
    </tbody>
  </table>

  
</div>

