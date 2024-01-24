{{-- pc content sale --}}
<section id="why-us"  class="why-sale d-none d-xl-block" style="margin-bottom: 0;padding-bottom:0">
    <div class="container">
  
      <div class="row">

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
          <div class="box text-center">
            <span>Beautiful room</span>
            <h4>Easy to buy</h4>
            <p >
              Worth every investment. After viewing<br>
              the room you like, you could make an <br>
              appointment to sign contract.
            </p>
          </div>
        </div>
  
        <div class="col-lg-4 d-none d-xl-block" data-aos="fade-up">
          <div class="box text-center">
            <span class="price" >{{ number_format($post->post_sale_price,0) }} Baht</span>
            <h4>Selling Price</h4>
            <p class="d-none d-xl-block" >
              In the case of a reservation payment sale,<br>
              please check with the seller and the project<br>
              if there is a change in the contract rights.
            </p>
          </div>
        </div>
  
        <div class="col-lg-4 mt-4 mt-lg-0 d-none d-xl-block" data-aos="fade-up" data-aos-delay="150">
          <div class="box text-center ">
            <span  >Sales code : {{ $post->post_no }} </span>
            <h4 >Please inform this room code</h4>
            <p >
              You can inform this Rental code  <br>to the staff right away.<br>
              <a href="//line.me/R/ti/p/%40704uwpvc" rel="nofollow" target="_blank"><i class="fab fa-line lemon" ></i> &nbsp;Line</a> | <a href="https://api.whatsapp.com/message/QBXG7VN7RV6YB1" rel="nofollow" target="_blank">
                <i class="fab fa-whatsapp"></i>&nbsp; WhatsApp
              </a>  
            </p>
          </div>
        </div><br><br>

        <div class="col-lg-12 mt-4 d-none d-xl-block" data-aos="fade-up" data-aos-delay="150">
          <div class="box2   ">
            <div  class="row">
              <div class="col-lg-8 mt-4 mt-lg-0 d-none d-xl-block" data-aos="fade-up" data-aos-delay="300">
                <p class="text-justify" style="text-align:justify" >
                  <h4 class="" >{{$post->post_header_en}}</h4><br>
                  {!! $post->post_description_en !!}
                </p>
              </div>

              <div class="col-lg-4 mt-4 mt-lg-0 d-none d-xl-block" data-aos="fade-up" data-aos-delay="300">
                <table class="table  condo-detail-toon ">
                  <tbody>                
                      <tr>
                        <th style="text-align: center">Sales code : {{ $post->post_no }}</th>
                      </tr>
                      <tr>
                        <td style="text-align: center">
                          <a href="#" class="fb" onclick="MyWindow=window.open('https://www.facebook.com/sharer/sharer.php?u={{ $url }}','MyWindow','width=600,height=300'); return false;"><i class="fab fa-facebook-square"></i> Share this post
                          </a>
                        </td>
                      </tr>                    
                  </tbody>
                </table>
                <table class="table  condo-detail-toon">
                  <tbody>                
                      <tr>
                        <th  colspan="3" style="text-align: center;">Unit Price Details</th>
                    </tr>
                      <tr>
                        <th style="text-align: left;width:33.33%">
                          Net Price
                        </th>
                        <td  style="text-align: right">{{ number_format($post->post_sale_price,0) }}</td>
                        <td  style="width:21%;text-align: left">Baht</td>
                      </tr>
                      <tr>
                        <th style="text-align: left;width:33.33%">
                          Average Price
                        </th>
                        <td  style="text-align: right">{{ number_format(($post->post_sale_price / $post->post_area_total),2) }} </td>
                        <td  style="width:21%;text-align: left">Baht/Sq.m.</td>
                    </tr>
                    <tr>
                      <td colspan="3">
                        <i class="fas fa-check"></i>&nbsp;&nbsp;
                          @switch($post->post_sale_type)
                            @case(1) Reservation/Down payment @break
                            @case(2) Immediate occupancy @break
                            @case(3) With tenant already in place @break
                          @endswitch
                      </td>
                  </tr>
                  <tr>
                      <td colspan="3">
                        <i class="fas fa-check"></i>&nbsp;&nbsp;
                          @switch($post->post_sale_hold)
                            @case(1) Freehold sale rights @break
                            @case(2) Leasehold sale rights @break
                          @endswitch
                      </td>
                  </tr>
                  <tr>
                      <td colspan="3">
                        <i class="fas fa-check"></i>
                        &nbsp;&nbsp;The room has been inspected and approved</td>
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