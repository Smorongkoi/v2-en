<?php
$datestart=date("Y-m-d");
$dateend=$postData['action_datetime'];
$calculate =strtotime("$dateend")-strtotime("$datestart");
$summary=floor($calculate / 86400); // 86400 มาจาก 24*360 (1วัน = 24 ชม.)
?>
<div class="col-md-6 cardrenttoon">
    <a href="{{ $postData['post_url'] }}" target="_blank">
        <div class="card mb-3 card-toon sale-mobile"
            @switch($postData['post_status'])
                        @case(1)
                        @if ($summary < 0)
                            @if ($summary<-365)
                                style="border:0px"
                            @elseif ($summary<-30)
                                style="border:1px solid #cdcdcd"
                            @elseif ($summary<-15)
                                style="border:2px solid #938be9"
                            @else 
                                style="border:2px solid #938be9"  
                            @endif
                        @else
                            style="border:3px solid #5e52de"
                        @endif                        
                        @break

                        @case(0)
                        @break
            @endswitch 
        >
            <img class="card-img-top" src="{{ $postData['post_image'] }}" 
            alt="{{ $postData['post_header'] }}" style="height: 220px;object-fit : cover;">
            <div class="d-flex justify-content-between p-2 bg-rentsale">
                <div class="d-flex flex-row align-items-center mt-1">                            
                    <div class="c-details">
                        <h6 class="mb-0"><i class="fas fa-building"></i> <b class="f-sale">{{ $postData['post_no'] }}</b></h6> 
                        {{-- <span >รหัสเช่า</span> --}}
                    </div>
                </div><br>
                @switch($postData['post_status'])
                    @case(1)
                        <div class="badge mt-1">
                            
                            <span class="btn-outline-success">Buy now! &nbsp;<i class="fas fa-check blink"></i></span> 
                        </div>                            
                    @break

                    @case(0)
                        <div class="badge mt-1">
                            
                            <span class="btn-outline-danger">Sold out &nbsp;
                                <i class="fas fa-times"></i></span> 
                        </div>
                    @break
                @endswitch
                
            </div>
            <div class="p-2 pt-1">                    
                <h3 class="heading premium-h3">
                    <span class="f-sale">Sell</span> : {{ $postData['post_header'] }}                    
                </h3>
                <div class="mt-1">
                    <table class="table table-sm pb-0" style="padding-bottom: 0!important" >                        
                        <tbody>
                          <tr>
                            <th scope="row" >
                                Room Type
                            </th>

                            <td>   
                                @if ($postData['post_bed'] <= 6)
                                    {{ $postData['post_bed'] }} <i class="fas fa-bed"></i>
                                    {{ $postData['post_baths'] }} <i class="fas fa-shower"></i>
                                @else
                                    @switch($postData['post_bed'])
                                        @case(7)
                                            <p>Studio</p>
                                        @break
    
                                        @case(8)
                                            <p>Penthouse</p>
                                        @break
                                    @endswitch
                                @endif                                
                            </td>
                            <th>Area</th>
                            <td>{{ $postData['post_area_total'] }} <strong>m<sup>2</sup></strong>
                               </td>
                          </tr>
                          <tr>
                            <th scope="row">Floor</th>
                            <td> {{ $postData['post_floor'] }} <i class="rent-stairs"></i></td>
                            <th>Building</th>
                            <td>
                                @if ($postData['post_building'] != '')
                                    {{ $postData['post_building'] }} <i class="far fa-building"></i>
                                @else
                                -
                                @endif
                            </td>
                          </tr> 
                            <tr>
                                <th scope="row" style="text-align: center" colspan="4" > 
                                    @switch($postData['post_status'])
                                        @case(1)
                                            
                                                    {{-- อัพเดตวันที่ --}}
                                                            @if ($summary < 0)
                                                                    @if ($summary<-365)
                                                                        <span style="color: #a5aec0">
                                                                            Updated : a year ago.
                                                                        </span>
                                                                    @elseif ($summary<-30)
                                                                        <span style="color: #a5aec0">
                                                                            Updated : a month ago  
                                                                        </span>
                                                                    
                                                                    @elseif ($summary<-15)
                                                                    <span style="color: #16ad29">Updated : </span>
                                                                    {{-$summary}} days ago<br>
                                                                    {{ Date('d M Y (H:i:s)',strtotime($postData['action_datetime'])) }}  
                                                                    @else
                                                                    <b>
                                                                        <i class="fas fa-star fa-spin f-sale"></i> Updated : &nbsp;
                                                                        <span style="color: #16ad29">
                                                                            {{-$summary}} days ago
                                                                        </span>
                                                                        <i class="fas fa-star fa-spin f-sale"></i> 
                                                                    </b><br>
                                                                    {{ Date('d M Y (H:i:s)',strtotime($postData['action_datetime'])) }}  
                                                                    @endif
                                                            @else
                                                                <b>
                                                                    <i class="fas fa-star fa-spin f-sale"></i> Updated : &nbsp;
                                                                    <span  style="color: #16ad29">
                                                                        Today
                                                                    </span> 
                                                                    <i class="fas fa-star fa-spin f-sale"></i>  
                                                                </b>  <br>
                                                                {{ Date('d M Y (H:i:s)',strtotime($postData['action_datetime'])) }}                                    
                                                            @endif
                                                    {{-- อัพเดตวันที่ --}}
                                                
                                        @break
                                        @case(0)
                                            {{-- อัพเดตวันที่ --}}
                                            @if ($summary < 0)
                                                    @if ($summary<-365)
                                                    <b>
                                                        <i class="far fa-times-circle" style="color: #a5aec0"></i>
                                                        <span  style="color: #a5aec0">
                                                            Updated : &nbsp;a year ago 
                                                        </span>
                                                        <i class="far fa-times-circle" style="color: #a5aec0"></i>
                                                    </b><br>
                                                    <i class="far fa-times-circle" style="color: #fe0000">
                                                    </i>
                                                        <span  style="color: #fe0000">
                                                            Sold out
                                                        </span>
                                                    <i class="far fa-times-circle" style="color: #fe0000">
                                                    </i>  
                                                    @elseif ($summary<-30)
                                                        <b>
                                                            <i class="far fa-times-circle" style="color: #848fa8"></i>
                                                            <span  style="color: #848fa8">
                                                                Updated : &nbsp;a month ago 
                                                            </span>
                                                            <i class="far fa-times-circle" style="color: #848fa8"></i>
                                                        </b><br>
                                                        <i class="far fa-times-circle" style="color: #fe0000">
                                                        </i>
                                                            <span  style="color: #fe0000">
                                                                Sold out
                                                            </span>
                                                        <i class="far fa-times-circle" style="color: #fe0000">
                                                        </i>                                                       
                                                    @elseif ($summary<-15)
                                                        <b>
                                                            <i class="far fa-times-circle" style="color: #fe0000"></i>
                                                            <span  style="color: #fe0000">Updated : &nbsp;{{-$summary}} days ago
                                                            / Sold out</span>
                                                            <i class="far fa-times-circle" style="color: #fe0000"></i>
                                                        </b>  <br>
                                                        {{ Date('d M Y (H:i:s)',
                                                            strtotime($postData['action_datetime']))
                                                        }} 
                                                    @else
                                                        <b>
                                                            <i class="far fa-times-circle" style="color: #fe0000"></i>
                                                            <span  style="color: #fe0000">Updated : &nbsp;{{-$summary}} days ago
                                                            / Sold out</span>
                                                            <i class="far fa-times-circle" style="color: #fe0000"></i>
                                                        </b>  <br>
                                                        {{ Date('d M Y (H:i:s)',
                                                            strtotime($postData['action_datetime']))
                                                        }} 
                                                    @endif
                                            @else
                                                <b>
                                                    <i class="far fa-times-circle" style="color: #fe0000"></i>
                                                    <span  style="color: #fe0000">Updated : &nbsp;Today
                                                     / Sold out</span>
                                                     <i class="far fa-times-circle" style="color: #fe0000"></i>
                                                </b>  <br>
                                                {{ Date('d M Y (H:i:s)',
                                                    strtotime($postData['action_datetime']))
                                                }}                                 
                                            @endif
                                            {{-- อัพเดตวันที่ --}}


                                            {{-- <tr>
                                                <th scope="row" >
                                                    <span style="color: #fe0000">Updated :</span> 
                                                </th>
                                                <td colspan="3">
                                                    {{ Date('d M Y',strtotime($postData['action_datetime'])) }}
                                                  </td>                           
                                            </tr>  --}}
                                        @break
                                    @endswitch 
                                </th>                           
                            </tr>                       
                        </tbody>
                    </table>
                    {{-- <div class="text-center">
                        <div class="mt-1">
                            <span class="text1">Price<s class="text2">
                                {{ number_format($postData['post_price']*1.05, 0) }}.-
                            </s></span> &nbsp;&nbsp;
                            <a href="{{ $postData['post_url'] }}" class="btn f-sale" target="_blank">
                                <i class="fas fa-caret-right  blink"></i> Click</a>
                       </div>                      
                    </div> --}}

                    <div class="mt-0 text-center">
                        <h3 class="mb-0 font-weight-semibold">
                            <strong style="font-size: 1.5em;font-weight:bold"> 
                            {{ number_format($postData['post_price'], 0) }}
                        </strong><br>
                        <span style="font-size: 0.7em">THB</span>
                            
                        </h3>
                        
                     </div>
                </div>
            </div>
        </div>
    </a>
</div>