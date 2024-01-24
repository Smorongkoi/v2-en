<div  class="swiper d-none d-md-block">
    <div class="swiper-wrapper">
            <div class="carousel-item-a swiper-slide">
                <div class="testimonials-box">
                    <div class="row">
                        <div class="col-sm-12 col-md-12  text-center">
                            {{-- condo info --}}
                            <div class="row">
                                <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                    
                                    <div class="text-center">                           
                                    <table class="table table-borderless  condo-detail-toon">
                                        <tbody>
                                            <tr>                            
                                                <th>
                                                    
                                                    <h5 class="testimonial-author" style="text-align: center;line-height:1.5em">            
                                                        ต้องการซื้อ/ขาย/เช่า/ - ฝากห้องชุด ให้เราดูแลคุณ<br>
                                                        {{$condo->condo_name_th}} ({{$condo->condo_name_en}})
                                                    </h5><br>
                                                </th>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
        
                                    <table class="table  condo-detail-toon">
                                        <tbody>                
                                            <tr>                                      
                                                <td>
                                                    <div class="p-4 pt-0">
                                                    ค้นหาห้องสวย ห้องที่ถูกใจง่าย ๆ เลื่อนลงไปดูด้านล่างได้เลยค่ะ เราคัดสรรห้องสวย ดี <br>
                                                    มีคุณภาพของ Condominium นี้มาไว้ในที่เดียว  หากสนใจห้องไหนสามารถ  <a href="//line.me/R/ti/p/%40704uwpvc" title="ขอข้อมูลเพิ่มเติม {{$condo->condo_name_th}}"><i class="fab fa-line"  ></i> add line</a><br>
                                                     เพื่อสอบถามเจ้าหน้าที่ หรือ <a href="{{ route('want') }}" title="นัดวันดูห้องจริง 
                                                     {{$condo->condo_name_en}}">ทำการจองห้องเพื่อนัดวันดูห้องจริง</a> ได้ตามที่ลูกค้าสะดวกค่ะ
                                                     <br><br>
                                                </div>
                                                </td>
                                            </tr>                                           
                                            
                                        </tbody>
                                    </table>  
                                        
                                    <table class="table  condo-detail-toon">
                                        <tbody>                
                                            <tr>                                        
                                                
                                                <td>
                                                    หรือหากท่านเป็นเจ้าของห้อง (Owner) ก็สามารถติดต่อเรา เพื่อฝากห้อง<br>
                                                    หาลูกค้าเพื่อเช่าหรือขายได้เช่นกันค่ะ
                                                    <a href="{{ route('deposit') }}" title="หาเช่าคอนโด / ซื้อคอนโด 
                                                    {{$condo->condo_name_en}}">
                                                        ฝากเช่า / ขาย
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>                   
                                    </div>
                    
                                </div>                
                            </div>
                            {{-- condo info --}}      
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<br class="d-block d-sm-none"><br class="d-block d-sm-none">
