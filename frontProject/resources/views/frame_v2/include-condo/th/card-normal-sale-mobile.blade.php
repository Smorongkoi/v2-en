<?php
$datestart=date("Y-m-d");
$dateend=$postData['action_datetime'];
$calculate =strtotime("$dateend")-strtotime("$datestart");
$summary=floor($calculate / 86400); // 86400 มาจาก 24*360 (1วัน = 24 ชม.)
?>
<div class="col-md-6 cardrenttoon">
    <a href="{{ $postData['post_url'] }}" target="_blank">
        <div class="card mb-3 card-toon sale-mobile">
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
                            
                            <span class="btn-outline-success">ซื้อเลย &nbsp;<i class="fas fa-check blink"></i></span> 
                        </div>                            
                    @break

                    @case(0)
                        <div class="badge mt-1">
                            
                            <span class="btn-outline-danger">ขายแล้ว &nbsp;
                                <i class="fas fa-times"></i></span> 
                        </div>
                    @break
                @endswitch
                
            </div>
            <div class="p-2 pt-1">                    
                <h3 class="heading premium-h3">
                    <span class="f-sale">ขาย</span> : {{ $postData['post_header'] }}                    
                </h3>
                <div class="mt-1">
                    <table class="table table-sm pb-0" style="padding-bottom: 0!important" >                        
                        <tbody>
                          <tr>
                            <th scope="row" >
                                แบบห้อง
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
                            <th>พื้นที่</th>
                            <td>{{ $postData['post_area_total'] }} <strong>m<sup>2</sup></strong>
                               </td>
                          </tr>
                          <tr>
                            <th scope="row">ชั้น</th>
                            <td> {{ $postData['post_floor'] }} <i class="rent-stairs"></i></td>
                            <th>อาคาร</th>
                            <td>
                                @if ($postData['post_building'] != '')
                                    {{ $postData['post_building'] }} <i class="far fa-building"></i>
                                @else
                                -
                                @endif
                            </td>
                          </tr>  
                            @switch($postData['post_status'])
                            @case(1)
                                <tr>
                                    <th scope="row" style="text-align: center" colspan="4" >
                                        {{-- อัพเดตวันที่ --}}
                                        @if ($summary < 0)
                                                @if ($summary<-365)
                                                <span style="color: #77726e">อัพเดตล่าสุด : เกินกว่า 1 ปีมาแล้ว</span>
                                                @elseif ($summary<-30)
                                                <span style="color: #16ad29">อัพเดตล่าสุด : </span>
                                                {{ DateTimeThai($postData['action_datetime']) }}<br>
                                                อัพเดตล่าสุดเกินกว่า 1เดือน มาแล้ว                                                        
                                                @elseif ($summary<-15)
                                                <span style="color: #16ad29">อัพเดตล่าสุด : </span>
                                                {{ DateTimeThai($postData['action_datetime']) }}<br>
                                                ผ่านมาแล้ว {{-$summary}} วัน
                                                @else
                                                <span style="color: #16ad29">อัพเดตล่าสุด : </span>
                                                {{ DateTimeThai($postData['action_datetime']) }}<br>
                                                เพิ่งอัพเดตเมื่อ {{-$summary}} วันที่แล้ว
                                                @endif
                                        @else
                                        อัพเดตล่าสุด = &nbsp;<span class="blink">วันนี้</span>                                         
                                        @endif
                                        {{-- อัพเดตวันที่ --}}
                                    </td>                           
                                </tr> 
                            @break
                            @case(0)
                                <tr>
                                    <th scope="row"  colspan="4" style="text-align: center">
                                        {{-- อัพเดตวันที่ --}}
                                        @if ($summary < 0)
                                                @if ($summary<-365)
                                                <span style="color: #77726e">อัพเดตล่าสุด : เกินกว่า 1 ปีมาแล้ว</span>
                                                @elseif ($summary<-30)
                                                <span style="color: #16ad29">อัพเดตล่าสุด : </span>
                                                {{ DateTimeThai($postData['action_datetime']) }}<br>
                                                อัพเดตล่าสุดเกินกว่า 1เดือน มาแล้ว                                                        
                                                @elseif ($summary<-15)
                                                <span style="color: #16ad29">อัพเดตล่าสุด : </span>
                                                {{ DateTimeThai($postData['action_datetime']) }}<br>
                                                ผ่านมาแล้ว {{-$summary}} วัน
                                                @else
                                                <span style="color: #16ad29">อัพเดตล่าสุด : </span>
                                                {{ DateTimeThai($postData['action_datetime']) }}<br>
                                                เพิ่งอัพเดตเมื่อ {{-$summary}} วันที่แล้ว
                                                @endif
                                        @else
                                        อัพเดตล่าสุด = &nbsp;<span class="blink">วันนี้</span>                                         
                                        @endif
                                        {{-- อัพเดตวันที่ --}}
                                    </td>                           
                                </tr> 
                               
                            @break
                            @endswitch                        
                        </tbody>
                    </table>
                    <div class="text-center">
                        <div class="mt-1">
                            <span class="text1">Price<s class="text2">
                                {{ number_format($postData['post_price']*1.05, 0) }}.-
                            </s></span> &nbsp;&nbsp;
                            <a href="{{ $postData['post_url'] }}" class="btn f-sale" target="_blank">
                                <i class="fas fa-caret-right  blink"></i> Click</a>
                       </div>
                       
                        
                    </div>
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