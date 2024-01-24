{{-- card pc --}}
<tr>
    <td>
        <?php
            $datestart=date("Y-m-d");
            $dateend=$postData['action_datetime'];
            $calculate =strtotime("$dateend")-strtotime("$datestart");
            $summary=floor($calculate / 86400); // 86400 มาจาก 24*360 (1วัน = 24 ชม.)
        ?>
        <table class="table table-borderless" >
            <thead>
            <tr>
                <th scope="col" class="align-top" style="width: 40%;">
                    <a href="{{ $postData['post_url'] }}">
                        <img src="{{ $postData['post_image'] }}" class="image-fluid" alt="" style="border-radius: 5px;width:100%">
                    </a>
                </th>
                <td>
                    <div>
                        @if ($summary <=-15)
                        {{-- โพสต์เก่า --}}
                            <table class="table cardrenttoon table-sm">
                                <thead>
                                <tr>
                                    <th scope="col" colspan="4" >
                                        <a href="{{ $postData['post_url'] }}" 
                                            data-abc="true" target="_blank"
                                            @switch($postData['post_status'])
                                                @case(1) 
                                                style="color:#121212;"
                                                @break
                                                @case(0)
                                                style="color:#898989;"
                                                @break    
                                            @endswitch
                                            >{{ $postData['post_header'] }}
                                        </a>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">รหัสขาย 
                                        <i class="fas fa-caret-right"></i> 
                                        {{ $postData['post_no'] }}
                                    </th>
                                    <th>สถานะ :
                                        @switch($postData['post_status'])
                                            @case(1) <i class="fas fa-caret-right blink" style="color: #16ad29"></i>
                                            <span style="color: #16ad29">ซื้อเลย</span> @break
                                            @case(0) <i class="fas fa-times" style="color: #fe0000"></i>  
                                            <span style="color: #fe0000">ขายแล้ว</span> @break    
                                        @endswitch
                                    </th>
                                    <td><strong>แบบห้อง</strong> :
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
                                    <td>
                                        <i class="fa fa-star f-sale"></i>
                                        <i class="fa fa-star f-sale"></i>
                                        <i class="fa fa-star f-sale"></i>
                                        <i class="fa fa-star f-sale"></i>
                                        <i class="fa fa-star f-sale"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><strong>ชั้น</strong> : {{ $postData['post_floor'] }} <i class="rent-stairs"></i>
                                        <br>
                                            {{-- อัพเดตtext --}}
                                            @switch($postData['post_status'])
                                                @case(1) 
                                                    @if ($summary < 0)
                                                                @if ($summary<-365)
                                                                <span style="color: #77726e">
                                                                    อัพเดตล่าสุด : เกินกว่า 1 ปีมาแล้ว</span>
                                                                @elseif ($summary<-30)
                                                                {{ DateTimeThai($postData['action_datetime']) }}<br>
                                                                อัพเดตล่าสุดเกินกว่า 1เดือน มาแล้ว                                                        
                                                                @elseif ($summary<-15)
                                                                <span style="color: #16ad29">อัพเดตล่าสุด : (ผ่านมาแล้ว {{-$summary}} วัน)</span><br>
                                                                {{ DateTimeThai($postData['action_datetime']) }}<br>
                                                                
                                                                @else
                                                                <span style="color: #16ad29">อัพเดตล่าสุด : (เมื่อ {{-$summary}} วันที่แล้ว)</span><br>
                                                                {{ DateTimeThai($postData['action_datetime']) }}<br>
                                                                
                                                                @endif
                                                        @else
                                                        อัพเดตล่าสุด = &nbsp;<span class="blink" style="color: #16ad29">วันนี้</span>                                         
                                                    @endif
                                                @break
                                                @case(0) 
                                                    @if ($summary < 0)
                                                                @if ($summary<-365)
                                                                <span style="color: #77726e">
                                                                    อัพเดตล่าสุด : เกินกว่า 1 ปีมาแล้ว</span>
                                                                @elseif ($summary<-30)
                                                                {{ DateTimeThai($postData['action_datetime']) }}<br>
                                                                อัพเดตล่าสุดเกินกว่า 1เดือน มาแล้ว                                                        
                                                                @elseif ($summary<-15)
                                                                <span style="color: #fd0000">อัพเดตล่าสุด : (ผ่านมาแล้ว {{-$summary}} วัน)</span><br>
                                                                {{ DateTimeThai($postData['action_datetime']) }}<br>
                                                                
                                                                @else
                                                                <span style="color: #fd0000">อัพเดตล่าสุด : (เมื่อ {{-$summary}} วันที่แล้ว)</span><br>
                                                                {{ DateTimeThai($postData['action_datetime']) }}<br>
                                                                
                                                                @endif
                                                        @else
                                                        อัพเดตล่าสุด = &nbsp;<span class="blink" style="color: #fd0000">วันนี้</span>                                         
                                                    @endif
                                                @break    
                                            @endswitch
                                            {{-- อัพเดตtext --}}
                                    </th>
                                    <td><strong>อาคาร</strong> : @if ($postData['post_building'] != '')
                                        {{ $postData['post_building'] }} <i class="far fa-building"></i>
                                    @else
                                    -
                                    @endif</td>
                                    <td>
                                        <strong>พื้นที่</strong> : {{ $postData['post_area_total'] }} <strong>m<sup>2</sup></strong>
                                    </td>
                                    <td>
                                        <h3 class="mb-0 font-weight-semibold">
                                            {{ number_format($postData['post_price'], 0) }}.-
                                        </h3>
                                        <div class="text-muted">ราคาขาย (บาท)</div>
                                        
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2" class="text-center">
                                        @switch($postData['post_status'])
                                            @case(1) 
                                            <a href="{{ $postData['post_url'] }}" 
                                            data-abc="true" target="_blank" 
                                            class="btn btn-sm btn-outline-secondary">                        
                                                    <i class="icon-cart-add mr-2"></i> {{ $postData['post_no'] }}
                                            </a>
                                            @break
                                            @case(0)
                                            <button type="button" class="btn btn-sm btn-outline-danger">
                                                <i class="icon-cart-add mr-2"></i> {{ $postData['post_no'] }}
                                            </button>
                                            @break    
                                        @endswitch
                                        @switch($postData['post_status'])
                                            @case(1)
                                                <button type="button" class="btn btn-sm btn-outline-success" style="width: 130px">
                                                    <i class="icon-cart-add mr-2"></i> ซื้อเลย  &nbsp;<i class="fas fa-check blink"></i>
                                                </button>
                                                                        
                                            @break
                            
                                            @case(0)
                                                <button type="button" class="btn btn-sm btn-outline-danger">
                                                    <i class="icon-cart-add mr-2"></i> ขายแล้ว  &nbsp;<i class="fas fa-times blink"></i>
                                                </button>
                                                
                                            @break
                                        @endswitch
                                    </th>
                                    <td colspan="2"  class="text-center">
                                        รายละเอียดเพิ่มเติม <i class="fas fa-caret-right blink f-sale"></i>  
                                        <a href="{{ $postData['post_url'] }}" class="f-sale" 
                                        data-abc="true" target="_blank">
                                        <strong>คลิก</strong></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        {{-- โพสต์เก่า --}}
                        @else 
                        {{-- โพสต์ใหม่ --}}
                            <div class="card border border-secondary" >                              
                                    @switch($postData['post_status'])
                                        @case(1)
                                            <h5 class="card-header bg-primary">อัพเดตล่าสุด <i class="fas fa-star fa-spin f-sale"></i> {{ DateTimeThai($postData['action_datetime']) }}
                                                @if ($summary < 0)
                                                    <span style="color: #16ad29" class="blink">({{-$summary}} วันที่ผ่านมา)</span>
                                                    @else
                                                    <span style="color: #16ad29" class="blink">(วันนี้)</span>                                
                                                @endif
                                            </h5>
                                        @break
                                        @case(0) 
                                            <h5 class="card-header bg-primary">อัพเดตล่าสุด  {{ DateTimeThai($postData['action_datetime']) }}
                                                @if ($summary < 0)
                                                    <span style="color: #fd0000">({{-$summary}} วันที่ผ่านมา)</span>
                                                    @else
                                                    <span style="color: #fd0000" >(วันนี้)</span>                                
                                                @endif
                                            </h5>
                                        @break
                                    @endswitch
                                <div class="card-body">
                                    <table class="table cardrenttoon table-sm">
                                        <thead>
                                        <tr>
                                            <th scope="col" colspan="4" >
                                                <a href="{{ $postData['post_url'] }}" 
                                                    data-abc="true" target="_blank"
                                                    @switch($postData['post_status'])
                                                        @case(1) 
                                                        style="color:#121212;"
                                                        @break
                                                        @case(0)
                                                        style="color:#898989;"
                                                        @break    
                                                    @endswitch
                                                    >{{ $postData['post_header'] }}
                                                </a>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">รหัสขาย 
                                                <i class="fas fa-caret-right"></i> 
                                                {{ $postData['post_no'] }}
                                            </th>
                                            <th>สถานะ :
                                                @switch($postData['post_status'])
                                                    @case(1) <i class="fas fa-caret-right blink" style="color: #16ad29"></i>
                                                    <span style="color: #16ad29">ซื้อเลย</span> @break
                                                    @case(0) <i class="fas fa-times" style="color: #fe0000"></i>  
                                                    <span style="color: #fe0000">ขายแล้ว</span> @break    
                                                @endswitch
                                            </th>
                                            <td><strong>แบบห้อง</strong> :
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
                                            <td>
                                                <i class="fa fa-star f-sale"></i>
                                                <i class="fa fa-star f-sale"></i>
                                                <i class="fa fa-star f-sale"></i>
                                                <i class="fa fa-star f-sale"></i>
                                                <i class="fa fa-star f-sale"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><strong>ชั้น</strong> : {{ $postData['post_floor'] }} <i class="rent-stairs"></i>
                                                <br>
                                            {{-- อัพเดตtext --}}
                                            @switch($postData['post_status'])
                                                @case(1) 
                                                    @if ($summary < 0)
                                                                @if ($summary<-365)
                                                                <span style="color: #77726e">
                                                                    อัพเดตล่าสุด : เกินกว่า 1 ปีมาแล้ว</span>
                                                                @elseif ($summary<-30)
                                                                {{ DateTimeThai($postData['action_datetime']) }}<br>
                                                                อัพเดตล่าสุดเกินกว่า 1เดือน มาแล้ว                                                        
                                                                @elseif ($summary<-15)
                                                                <span style="color: #16ad29">อัพเดตล่าสุด : (ผ่านมาแล้ว {{-$summary}} วัน)</span><br>
                                                                {{ DateTimeThai($postData['action_datetime']) }}<br>
                                                                
                                                                @else
                                                                <span style="color: #16ad29">อัพเดตล่าสุด : (เมื่อ {{-$summary}} วันที่แล้ว)</span><br>
                                                                {{ DateTimeThai($postData['action_datetime']) }}<br>
                                                                
                                                                @endif
                                                        @else
                                                        อัพเดตล่าสุด = &nbsp;<span class="blink" style="color: #16ad29">วันนี้</span>                                         
                                                    @endif
                                                @break
                                                @case(0) 
                                                    @if ($summary < 0)
                                                                @if ($summary<-365)
                                                                <span style="color: #77726e">
                                                                    อัพเดตล่าสุด : เกินกว่า 1 ปีมาแล้ว</span>
                                                                @elseif ($summary<-30)
                                                                {{ DateTimeThai($postData['action_datetime']) }}<br>
                                                                อัพเดตล่าสุดเกินกว่า 1เดือน มาแล้ว                                                        
                                                                @elseif ($summary<-15)
                                                                <span style="color: #fd0000">อัพเดตล่าสุด : (ผ่านมาแล้ว {{-$summary}} วัน)</span><br>
                                                                {{ DateTimeThai($postData['action_datetime']) }}<br>
                                                                
                                                                @else
                                                                <span style="color: #fd0000">อัพเดตล่าสุด : (เมื่อ {{-$summary}} วันที่แล้ว)</span><br>
                                                                {{ DateTimeThai($postData['action_datetime']) }}<br>
                                                                
                                                                @endif
                                                        @else
                                                        อัพเดตล่าสุด = &nbsp;<span class="blink" style="color: #fd0000">วันนี้</span>                                         
                                                    @endif
                                                @break    
                                            @endswitch
                                            {{-- อัพเดตtext --}}
                                            </th>
                                            <td><strong>อาคาร</strong> : @if ($postData['post_building'] != '')
                                                {{ $postData['post_building'] }} <i class="far fa-building"></i>
                                            @else
                                            -
                                            @endif</td>
                                            <td>
                                                <strong>พื้นที่</strong> : {{ $postData['post_area_total'] }} <strong>m<sup>2</sup></strong>
                                            </td>
                                            <td>
                                                <h3 class="mb-0 font-weight-semibold">
                                                    {{ number_format($postData['post_price'], 0) }}.-
                                                </h3>
                                                <div class="text-muted">ราคาขาย (บาท)</div>
                                                
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <th scope="row" colspan="2" class="text-center">
                                                @switch($postData['post_status'])
                                                    @case(1) 
                                                    <a href="{{ $postData['post_url'] }}" 
                                                    data-abc="true" target="_blank" 
                                                    class="btn btn-sm btn-outline-secondary">                        
                                                            <i class="icon-cart-add mr-2"></i> {{ $postData['post_no'] }}
                                                    </a>
                                                    @break
                                                    @case(0)
                                                    <button type="button" class="btn btn-sm btn-outline-danger">
                                                        <i class="icon-cart-add mr-2"></i> {{ $postData['post_no'] }}
                                                    </button>
                                                    @break    
                                                @endswitch
                                                @switch($postData['post_status'])
                                                    @case(1)
                                                        <button type="button" class="btn btn-sm btn-outline-info" style="width: 130px">
                                                            <i class="icon-cart-add mr-2"></i> Premium &nbsp;
                                                            <i class="fa fa-star"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-sm btn-outline-success" style="width: 130px">
                                                            <i class="icon-cart-add mr-2"></i> ซื้อเลย  &nbsp;<i class="fas fa-check blink"></i>
                                                        </button>
                                                                                
                                                    @break
                                    
                                                    @case(0)
                                                        <button type="button" class="btn btn-sm btn-outline-danger" style="width: 130px">
                                                            <i class="icon-cart-add mr-2"></i> Premium &nbsp;
                                                            <i class="fa fa-star"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-sm btn-outline-danger">
                                                            <i class="icon-cart-add mr-2"></i> ขายแล้ว  &nbsp;<i class="fas fa-times blink"></i>
                                                        </button>
                                                        
                                                    @break
                                                @endswitch
                                            </th>
                                            <td colspan="2"  class="text-center">
                                                รายละเอียดเพิ่มเติม <i class="fas fa-caret-right blink f-sale"></i>  
                                                <a href="{{ $postData['post_url'] }}" class="f-sale" 
                                                data-abc="true" target="_blank">
                                                <strong>คลิก</strong></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                
                                </div>
                            </div>
                        {{-- โพสต์ใหม่ --}}
                        @endif
                    </div>

                </td>
            </tr>
            </thead>
        </table>
    </td>
</tr>