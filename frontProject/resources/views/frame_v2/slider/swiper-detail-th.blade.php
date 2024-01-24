<div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
    <div class="text-center ">
        <table class="table table-borderless  condo-detail-toon">
            <tbody>
                <tr>                            
                    <th>
                        <h2 class="testimonial-author">
                            ข้อมูลห้อง  {{$condo->condo_name_en}} Condominium
                        </h2> 
                        
                        <br>
                    </th>
                </tr>
                
            </tbody>
        </table>

        <table class="table  condo-detail-toon">
            <tbody>                
                <tr>
                    
                    <th style="width: 25%">รูปแบบห้อง</th>
                    <th style="width: 25%">ชั้น</th>
                    <th style="width: 25%">อาคาร</th>
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
                                    @case(7) สตูดิโอ @break
                                    @case(8) เพนเฮ้าส์ @break
                                @endswitch
                            </span>
                        @endif
                    </td>
                    <td>{{ $post->post_floor }} fl.</td>
                    <td>{{ $post->post_building }}</td>
                    <td><span class="info">{{ $post->post_area_total }} <strong>m<sup>2</sup></strong></span></td>
                </tr>
                
            </tbody>
        </table>

        <table class="table table-borderless  condo-detail-toon">
            <tbody>
            
                <tr>
                    
                    <th><i class="fas fa-building"></i> {{$condo->condo_name}}</th>
                </tr>
                <tr>
                    
                    <td>
                    
                    <a href="{{ $area->$area_url }}"><i class="fas fa-map-marker-alt"></i> {{ $area->area_name }}</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <table class="table table-borderless condo-detail-toon">
            <tbody>                
                <tr>                                      
                    <td>
                        <div class="p-2 pt-0">
                            ค้นหาห้องสวย ห้องที่ถูกใจง่าย ๆ เลื่อนลงไปดูด้านล่างได้เลยค่ะ เราคัดสรรห้องสวย ดี <br>
                            มีคุณภาพของ Condominium นี้มาไว้ในที่เดียว  หากสนใจห้องไหนสามารถ  <a href="//line.me/R/ti/p/%40704uwpvc" title="ขอข้อมูลเพิ่มเติม {{$condo->condo_name_th}}"><i class="fab fa-line"  ></i> add line</a><br>
                             เพื่อสอบถามเจ้าหน้าที่ หรือ <a href="{{ route('want') }}" title="นัดวันดูห้องจริง 
                             {{$condo->condo_name_en}}">ทำการจองห้องเพื่อนัดวันดูห้องจริง</a> ได้ตามที่ลูกค้าสะดวกค่ะ
                           <br><br>
                        <br><br>
                    </div>
                    </td>
                </tr>                                           
                
            </tbody>
        </table>  

    </div>
</div>   