{{-- pc content sale --}}
<section id="why-us"  class="why-sale d-none d-xl-block" style="margin-bottom: 0;padding-bottom:0">
    <div class="container">
  
      <div class="row">

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
          <div class="box text-center">
            <span>ห้องสวย ซื้อง่าย </span>
            <h4>คุ้มค่าทุกการลงทุน</h4>
            <p >หลังจากที่ได้ชมห้องจริง และเลือกห้องที่ชอบได้แล้ว เมื่อเตรียมเอกสารพร้อม<br>
              ก็นัดหมายทำสัญญาซื้อขายได้เลย </p>
          </div>
        </div>
  
        <div class="col-lg-4 d-none d-xl-block" data-aos="fade-up">
          <div class="box text-center">
            <span class="price" >{{ number_format($post->post_sale_price,0) }} บาท</span>
            <h4>ราคาขาย</h4>
            <p class="d-none d-xl-block" >
              ในกรณีการขายประเภทใบจอง/เงินดาวน์ กรุณาตรวจสอบกับทางผู้ขาย
              และโครงการว่ามีค่าเปลี่ยนสิทธิสัญญาหรือไม่                
            </p>
          </div>
        </div>
  
        <div class="col-lg-4 mt-4 mt-lg-0 d-none d-xl-block" data-aos="fade-up" data-aos-delay="150">
          <div class="box text-center ">
            <span  > รหัสขาย : {{ $post->post_no }} </span>
            <h4 >แจ้งรหัสห้องแก่เจ้าหน้าที่</h4>
            <p >
              ท่านสามารถแจ้งรหัสขายนี้ <br>กับเจ้าหน้าที่ได้เลยค่ะ<br>
              <a href="//line.me/R/ti/p/%40704uwpvc" rel="nofollow" target="_blank"><i class="fab fa-line lemon" ></i> &nbsp;Line</a>
               {{-- | <a href="https://api.whatsapp.com/message/QBXG7VN7RV6YB1" rel="nofollow" target="_blank">
                <i class="fab fa-whatsapp"></i>&nbsp; WhatsApp
              </a> --}}
  
            </p>
          </div>
        </div><br><br>

        <div class="col-lg-12 mt-4 d-none d-xl-block" data-aos="fade-up" data-aos-delay="150">
          <div class="box2   ">
            <div  class="row">
              <div class="col-lg-8 mt-4 mt-lg-0 d-none d-xl-block" data-aos="fade-up" data-aos-delay="300">
                <p class="text-justify" style="text-align:justify" >
                  <h4 class="" >{{$post->post_header}}</h4><br>
                  {!! $post->post_description !!}
                </p>
              </div>

              
              
              <div class="col-lg-4 mt-4 mt-lg-0 d-none d-xl-block" data-aos="fade-up" data-aos-delay="300">
                                
                <table class="table  condo-detail-toon ">
                  <tbody>                
                      <tr>
                        <th style="text-align: center">รหัสขาย {{ $post->post_no }}</th>
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
                              ราคารวม
                            </th>
                            <td  style="text-align: right">{{ number_format($post->post_sale_price,0) }}</td>
                            <td  style="width:21%;text-align: left">บาท</td>
                        </tr>
                        <tr>
                          <th style="text-align: left;width:33.33%">
                            ราคาเฉลี่ย
                          </th>
                          <td  style="text-align: right">{{ number_format(($post->post_sale_price / $post->post_area_total),2) }} </td>
                          <td  style="width:21%;text-align: left">บาท/ตร.ม.</td>
                      </tr>
                      <tr>
                        <td colspan="3">
                          <i class="fas fa-check"></i>&nbsp;&nbsp;
                            @switch($post->post_sale_type)
                                @case(1) ขายใบจอง/เงินดาวน์ @break
                                @case(2) ขายห้องชุดพร้อมอยู่ @break
                                @case(3) ขายห้องชุดพร้อมผู้เช่า @break
                            @endswitch
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                          <i class="fas fa-check"></i>&nbsp;&nbsp;
                            @switch($post->post_sale_hold)
                                @case(1) สิทธิการขายแบบ Freehold @break
                                @case(2) สิทธิการขายแบบ Leasehold @break
                            @endswitch
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                          <i class="fas fa-check"></i>
                          &nbsp;&nbsp;ห้องจริงผ่านการตรวจสอบแล้ว</td>
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