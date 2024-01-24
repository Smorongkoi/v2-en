<div class="col-md-6 cardrenttoon">
    <a href="{{ $postData['post_url'] }}" target="_blank">
        <div class="card mb-3 card-toon rent-mobile">
            <img class="card-img-top" src="{{ $postData['post_image'] }}" 
            alt="{{ $postData['post_header'] }}" style="height: 220px;object-fit : cover;">
            <div class="d-flex justify-content-between p-2 bg-rentsale">
                <div class="d-flex flex-row align-items-center mt-1">                            
                    <div class="c-details">
                        <h6 class="mb-0"><i class="fas fa-key"></i> <b class="f-rent">{{ $postData['post_no'] }}</b></h6> 
                        
                    </div>
                </div><br>
                @switch($postData['post_status'])
                    @case(1)
                        <div class="badge mt-1">
                            
                            <span class="btn-outline-success">ว่างให้เช่า &nbsp;<i class="fas fa-check blink"></i></span> 
                        </div>                            
                    @break

                    @case(0)
                        <div class="badge mt-1">
                            
                            <span class="btn-outline-danger">เช่าแล้ว &nbsp;
                                <i class="fas fa-times"></i></span> 
                        </div>
                    @break
                @endswitch
                
            </div>
            <div class="p-2 pt-1">                    
                <h3 class="heading premium-h3">
                    <span class="f-rent">เช่า</span> : {{ $postData['post_header'] }}                    
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
                                    <th scope="row" >
                                        <span style="color: #16ad29">อัพเดตล่าสุด : </span>
                                    </th>
                                    <td colspan="3">
                                        {{ $postData['action_datetime'] }} 
                                    </td>                           
                                </tr> 
                            @break
                            @case(0)
                                <tr>
                                    <th scope="row" >
                                        <span style="color: #fe0000">อัพเดตล่าสุด :</span> 
                                    </th>
                                    <td colspan="3">
                                        {{ $postData['action_datetime'] }} 
                                    </td>                           
                                </tr> 
                                <tr>
                                    <th scope="row" >
                                        <span style="color: #fe0000">สัญญาสิ้นสุด :</span> 
                                    </th>
                                    <td colspan="3">
                                        {{ $postData['post_contract_expire'] }} 
                                    </td>                           
                                </tr> 
                            @break
                          @endswitch                      
                        </tbody>
                    </table>
                    <div class="text-center">
                        <div class="mt-1">
                            <span class="text1">ค่าเช่าห้อง <s class="text2">
                                {{ number_format($postData['post_price']*1.05, 0) }}.-
                            </s></span> &nbsp;&nbsp;
                            <a href="{{ $postData['post_url'] }}" class="btn f-rent" target="_blank"><i class="fas fa-caret-right  blink"></i> คลิก</a>
                       </div>
                       
                        
                    </div>
                    <div class="mt-0 text-center">
                        <h3 class="mb-0 font-weight-semibold">
                            {{ number_format($postData['post_price'], 0) }} บาท/เดือน
                            
                        </h3>
                        
                     </div>
                </div>
            </div>
        </div>
    </a>
</div>