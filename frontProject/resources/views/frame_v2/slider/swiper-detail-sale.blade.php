<div  class="swiper">
    <div class="swiper-wrapper">
            <div class="carousel-item-a swiper-slide">
                <div class="testimonials-box">
                <div class="row">
                    <div class="col-sm-12 col-md-12  text-center">
                        {{-- condo info --}}
                        <div class="row">
                        <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                            
                            <div class="text-center "><br class="d-none d-xl-block">

                            
                            <table class="table table-borderless  condo-detail-toon">
                                <tbody>
                                    <tr>                            
                                        <th>
                                            <h2 class="testimonial-author">
                                                ข้อมูลห้อง {{$condo->condo_name_th}} Condominium
                                            </h2> 
                                            {{-- <h5 class="testimonial-author" style="text-align: left;line-height:1.5em">            
                                                {{ $post->post_header }}
                                            </h5> --}}
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
                                                        @case(7) Studio @break
                                                        @case(8) Penthouse @break
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
                                        
                                        <th><i class="fas fa-building"></i> {{$condo->condo_name_th}}</th>
                                    </tr>
                                    <tr>
                                        
                                        <td>
                                        
                                        <a href="{{ $area->$area_url }}"><i class="fas fa-map-marker-alt"></i> {{ $area->area_name }}</a>
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