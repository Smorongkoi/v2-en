{{-- pc content sale --}}
<section id="why-us" class="why-rent d-none d-xl-block" style="margin-bottom: 0;padding-bottom:0">
  <div class="container">

    <div class="row">

      <div class="col-lg-4 mt-4 mt-lg-0 d-none d-xl-block" data-aos="fade-up" data-aos-delay="300">
        <div class="box text-center">
          <span>ห้องสวย ปล่อยเช่า</span>
          <h4>สะดวก อยู่สบาย</h4>
          <p >หลังจากที่ได้ชมห้องจริง และเลือกห้องที่ชอบได้แล้ว เมื่อเตรียมเอกสารพร้อม<br>
            ก็นัดหมายทำสัญญาเช่าได้เลย </p>
        </div>
      </div>

      <div class="col-lg-4" data-aos="fade-up">
        <div class="box text-center">
          <span class="price">{{ number_format($post->post_rent_price,0) }} บาท</span>
          <h4>ราคาเช่า/เดือน</h4>
          <p class="d-none d-xl-block" >
            ในกรณีการขายประเภทใบจอง/เงินดาวน์ กรุณาตรวจสอบกับทางผู้ขาย
            และโครงการว่ามีค่าเปลี่ยนสิทธิสัญญาหรือไม่                
          </p>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
        <div class="box text-center">
          <span>รหัสเช่า : {{ $post->post_no }}</span>
          <h4 class="d-none d-xl-block">แจ้งรหัสห้องแก่เจ้าหน้าที่</h4>
          <p class="d-none d-xl-block">
            ท่านสามารถแจ้งรหัสขายนี้ <br>กับเจ้าหน้าที่ได้เลยค่ะ<br>
              <a href="//line.me/R/ti/p/%40704uwpvc" rel="nofollow" target="_blank"><i class="fab fa-line lemon" ></i> &nbsp;Line</a>
               {{-- | <a href="https://api.whatsapp.com/message/QBXG7VN7RV6YB1" rel="nofollow" target="_blank">
                <i class="fab fa-whatsapp"></i>&nbsp; WhatsApp
              </a> --}}

          </p>
        </div>
      </div><br><br>

      <div class="col-lg-12 mt-4" data-aos="fade-up" data-aos-delay="150">
        <div class="box2">
          
          <div  class="row">
            <div class="col-lg-8 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
              <p class="text-justify" style="text-align:justify" >
                <h4 >{{$post->post_header}}</h4><br>
                {!! $post->post_description !!}
              </p>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                              
              <table class="table  condo-detail-toon">
                <tbody>                
                    <tr>
                      <th style="text-align: center" >รหัสเช่า {{ $post->post_no }}</th>
                    </tr>
                    <tr>
                      
                      <td style="text-align: center"><a href="#" class="fb" onclick="MyWindow=window.open('https://www.facebook.com/sharer/sharer.php?u={{ $url }}','MyWindow','width=600,height=300'); return false;"><i class="fab fa-facebook-square"></i> แชร์ประกาศนี้</a></td>
                    </tr>
                   
                    
                </tbody>
              </table>
              <table class="table  condo-detail-toon">
                  <tbody>                
                      <tr>
                          <th  colspan="3" style="text-align: center;">รายละเอียดราคาห้อง</th>
                      </tr>
                      <tr>
                          <th style="text-align: left;width:33.33%">
                            ค่าเช่า
                          </th>
                          <td  style="text-align: right">{{ number_format($post->post_rent_price,0) }}</td>
                          <td  style="width:21%;text-align: left">บาท/เดือน</td>
                      </tr>
                      <tr>
                        <th style="text-align: left;width:33.33%">
                          พักอาศัยได้
                        </th>
                        <td  style="text-align: right">
                          1-{{ $post->post_residents }}</td>
                        <td  style="width:21%;text-align: left">คน/ห้อง</td>
                      </tr>
                      <tr >
                          <th>ค่าเช่าห้อง</th>
                          <td style="text-align:right" class="f-rent">{{ number_format(($post->post_rent_price / $post->post_residents),0) }}</td>
                          <td style="width:30%;text-align: left">บาท/คน/เดือน</td>
                      </tr>

                      
                  </tbody>
              </table>

              <table class="table condo-detail-toon">
                  <thead>
                      <tr>
                          <th colspan="3" style="text-align: center">เงินทำสัญญาเช่าห้อง</th>
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
                          <th colspan="2" style="text-align: center">สถานะห้องเช่า</th>
                      </tr>
                  </thead>
                  <tbody>
                      
                            
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
                              <div class="detail">
                                  <strong class="f-rent">ค่าประกันการเช่าห้อง 2 เดือน</strong> คือ เงินประกันว่าผู้เช่าจะดูแลรักษาห้องเช่าให้อยู่ในสภาพดี เป็นระเบียบเรียบร้อย และจะได้เงินประกันคืนทั้งหมดเมื่อหมดสัญญาเช่า (ในกรณีที่ไม่มีสิ่งใดชำรุดเสียหาย) <br><br>
                                  <strong class="f-rent">ค่าเช่าล่วงหน้า</strong> คือ เงินค่าเช่าห้องที่ชำระมาล่วงหน้าของเดือนแรกสุด นับตั้งแต่วันแรกที่เริ่มสัญญาเช่า และผู้เช่าจะเริ่มชำระค่าเช่าห้อง (รายเดือนปกติ) ในเดือนถัดไป ตามวันที่ระบุในสัญญาเช่าห้อง
                              </div>
                          </td>
                      </tr>
                  </tbody>
              </table>


            </div>
          </div>
          
        </div>
      </div>

      

    </div>

  </div>
</section>