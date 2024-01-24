<div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
    <div class="text-center ">
        <table class="table table-borderless  condo-detail-toon">
            <tbody>
                <tr>                            
                    <th>
                        <h2 class="testimonial-author">
                            {{$condo->condo_name_en}} Project Information
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
                    
                    <th style="width: 25%">Room Type</th>
                    <th style="width: 25%">Floors</th>
                    <th style="width: 25%">Building</th>
                    <th>Area</th>
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
                    
                    <th><i class="fas fa-building"></i> {{$condo->condo_name_en}}</th>
                </tr>
                <tr>
                    
                    <td>
                    
                    <a href="{{ $area->$area_url }}"><i class="fas fa-map-marker-alt"></i> {{ $area->area_name_en }}</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <table class="table table-borderless  condo-detail-toon" style="margin-bottom: 0">
            <tbody>                
                <tr>                                      
                    <td>
                        <div class="p-2 pt-0">
                          Search for beautiful rooms, rooms that are easy to like, <br>
                          you can scroll down to see them below. selected beautiful, <br>
                          high-quality condominiums here. If you are interested in any room<br>
                          please <a href="//line.me/R/ti/p/%40704uwpvc" title="More information {{$condo->condo_name_en}}"><i class="fab fa-line"  ></i>  add line</a> to inquire with the staff or 
                           <a href="{{ route('want') }}" title="make a appointment for {{$condo->condo_name_en}}">
                              make a appointment</a><br> to view the room at your convenience.
                           <br><br>
                        <br><br>
                    </div>
                    </td>
                </tr>                                           
                
            </tbody>
        </table>  

    </div>
</div>   