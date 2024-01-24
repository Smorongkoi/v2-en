{{-- pc content sale --}}
<section id="why-us" class="why-rent d-none d-xl-block" style="margin-bottom: 0;padding-bottom:0">
  <div class="container">

    <div class="row">

      <div class="col-lg-4 mt-4 mt-lg-0 d-none d-xl-block" data-aos="fade-up" data-aos-delay="300">
        <div class="box text-center">
          <span>Beautiful room</span>
          <h4>Easy to rent</h4>
          <p >
            After viewing the room you like,<br>
            you could make an appointment<br>
             to sign Rental contract.
            {{-- หลังจากที่ได้ชมห้องจริง และเลือกห้องที่ชอบได้แล้ว เมื่อเตรียมเอกสารพร้อม<br>
            ก็นัดหมายทำสัญญาเช่าได้เลย  --}}
          </p>
        </div>
      </div>

      <div class="col-lg-4" data-aos="fade-up">
        <div class="box text-center">
          <span class="price">{{ number_format($post->post_rent_price,0) }} Baht</span>
          <h4>Rental Rate/Month</h4>
          <p class="d-none d-xl-block" >
            there will be a deposit / damage deposit<br>
            collected. Please check before signing<br>
             the rental agreement.            
          </p>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
        <div class="box text-center">
          <span>Rental code : {{ $post->post_no }}</span>
          <h4 class="d-none d-xl-block">Please inform this room code</h4>
          <p class="d-none d-xl-block">
            You can inform this Rental code  <br>to the staff right away.<br>
            <a href="//line.me/R/ti/p/%40704uwpvc" rel="nofollow" target="_blank"><i class="fab fa-line lemon" ></i> &nbsp;Line</a> | <a href="https://api.whatsapp.com/message/QBXG7VN7RV6YB1" rel="nofollow" target="_blank">
              <i class="fab fa-whatsapp"></i>&nbsp; WhatsApp
            </a>

          </p>
        </div>
      </div><br><br>

      <div class="col-lg-12 mt-4" data-aos="fade-up" data-aos-delay="150">
        <div class="box2">
          
          <div  class="row">
            <div class="col-lg-8 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
              <p class="text-justify" style="text-align:justify" >
                <h4 >{{$post->post_header_en}}</h4><br>
                {!! $post->post_description_en !!}
              </p>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                              
              <table class="table  condo-detail-toon">
                <tbody>                
                    <tr>
                      <th style="text-align: center" >Rental code : {{ $post->post_no }}</th>
                    </tr>
                    <tr>
                      
                      <td style="text-align: center"><a href="#" class="fb" onclick="MyWindow=window.open('https://www.facebook.com/sharer/sharer.php?u={{ $url }}','MyWindow','width=600,height=300'); return false;"><i class="fab fa-facebook-square"></i> Share this post</a></td>
                    </tr>
                   
                    
                </tbody>
              </table>
              <table class="table  condo-detail-toon">
                  <tbody>                
                      <tr>
                          <th  colspan="3" style="text-align: center;">Room rental details</th>
                      </tr>
                      <tr>
                          <th style="text-align: left;width:33.33%">
                            Rental
                          </th>
                          <td  style="text-align: right">{{ number_format($post->post_rent_price,0) }}</td>
                          <td  style="width:21%;text-align: left">Baht/Month</td>
                      </tr>
                      <tr>
                        <th style="text-align: left;width:33.33%">
                          able to stay
                        </th>
                        <td  style="text-align: right">
                          1-{{ $post->post_residents }}</td>
                        <td  style="width:21%;text-align: left">person/room</td>
                      </tr>
                      <tr >
                          <th>average rent</th>
                          <td style="text-align:right" class="f-rent">{{ number_format(($post->post_rent_price / $post->post_residents),0) }}</td>
                          <td style="width:30%;text-align: left">Baht/person/Month</td>
                      </tr>

                      
                  </tbody>
              </table>

              <table class="table condo-detail-toon">
                  <thead>
                      <tr>
                          <th colspan="3" style="text-align: center">Room rental contract</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr class="">
                        <td>Rental guarantee fee</td>
                        <td style="text-align:right">2</td>
                        <td style="text-align:right">Month</td>
                      </tr>
                      <tr >
                        <td>Advance rent</td>
                        <td style="text-align:right">1</td>
                        <td style="text-align:right">Month</td>
                      </tr>
                      <tr>
                        <td>Total contract fee</td>
                        <td style="text-align:right">3</td>
                        <td style="text-align:right">Month</td>
                      </tr>
                      <tr >
                        <td>Total contract fee</td>
                        <td style="text-align:right" class="f-rent">{{ number_format(($post->post_rent_price * 3),0) }}</td>
                        <td style="text-align:right">Baht</td>
                      </tr>
                  </tbody>
              </table>

              <table class="table condo-detail-toon">
                  <thead>
                      <tr>
                          <th colspan="2" style="text-align: center">Rental room status</th>
                      </tr>
                  </thead>
                  <tbody>
                      
                            
                            @if ($post->post_status_rent == 1)
                              <tr>
                                  <td colspan="3">
                                      <i class="fas fa-check blink f-rent"></i>&nbsp;&nbsp; Immediately available
                                  </td>
                              </tr>
                              <tr>
                                  <td colspan="3">
                                      <i class="fas fa-check  blink f-rent"></i>&nbsp;&nbsp; Ready to sign rental contract
                                  </td>
                              </tr>
                            @else
                              <tr>
                                  <td colspan="3">
                                  <i class="fas fa-times"></i>&nbsp;&nbsp; Already rented
                                  </td>
                              </tr>
                            @endif
                          </td>
                      </tr>
                      <tr>
                          <td colspan="3">
                            <i class="fas fa-check"></i>&nbsp;&nbsp;
                            Rent including annual common fees already
                          </td>
                      </tr>
                      <tr>
                          <td colspan="3">
                            <i class="fas fa-check"></i>
                            &nbsp;&nbsp;Minimum contract term of 6 months - 1 year</td>
                      </tr>
                      <tr>
                          <td colspan="3">
                            <i class="fas fa-check"></i>
                            &nbsp;&nbsp;The room has been inspected and approved</td>
                      </tr>
                      <tr>
                          <td colspan="3">
                              <div class="title"><br>
                                  <strong class="f-rent">Note:</strong>
                              </div>
                              <div class="detail">
                                <strong class="f-rent">The 2-month rental deposit</strong> 
                                is a guarantee that the tenant will take care of and maintain
                                 the rental room in good condition and in order, and will receive
                                  the full deposit back at the end of the rental contract 
                                  (in case of no damage or harm). <br><br>
                                <strong class="f-rent">The advance rent</strong> 
                                is the payment of the first month's rent in advance, 
                                counted from the first day of the rental contract, 
                                and the tenant will start paying the regular monthly 
                                rent in the following month, as specified in the rental 
                                contract for the room.
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