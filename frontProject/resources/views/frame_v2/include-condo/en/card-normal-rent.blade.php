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
                                        <th scope="row">ID 
                                            <i class="fas fa-caret-right"></i> 
                                            {{ $postData['post_no'] }}
                                        </th>
                                        <th>status :
                                            @switch($postData['post_status'])
                                                @case(1) <i class="fas fa-caret-right blink" style="color: #16ad29"></i>
                                                <span style="color: #16ad29">Available</span> @break
                                                @case(0) <i class="fas fa-times" style="color: #fe0000"></i>  
                                                <span style="color: #fe0000">Rented</span> @break    
                                            @endswitch
                                        </th>
                                        <td><strong>Room Type</strong> :
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
                                            <i class="fa fa-star f-rent"></i>
                                            <i class="fa fa-star f-rent"></i>
                                            <i class="fa fa-star f-rent"></i>
                                            <i class="fas fa-star-half-alt f-rent"></i>
                                            <i class="far fa-star f-rent"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><strong>Floor</strong> : {{ $postData['post_floor'] }} <i class="rent-stairs"></i>
                                            <br>
                                            {{-- อัพเดตtext --}}
                                            @switch($postData['post_status'])
                                                @case(1) 
                                                    @if ($summary < 0)
                                                                @if ($summary<-365)
                                                                <span style="color: #77726e">
                                                                    Updated : 1 year ago.</span>
                                                                @elseif ($summary<-30)
                                                                {{ Date('d M Y (H:i:s)',strtotime($postData['action_datetime'])) }}<br>
                                                                Updated : 1 month ago                                                        
                                                                @elseif ($summary<-15)
                                                                <span style="color: #16ad29">Updated : ( {{-$summary}}   days ago)</span><br>
                                                                {{ Date('d M Y (H:i:s)',strtotime($postData['action_datetime'])) }}<br>
                                                                
                                                                @else
                                                                <span style="color: #16ad29">Updated : ( {{-$summary}}  days ago)</span><br>
                                                                {{ Date('d M Y (H:i:s)',strtotime($postData['action_datetime'])) }}<br>
                                                                
                                                                @endif
                                                        @else
                                                        Updated = &nbsp;<span class="blink" style="color: #16ad29">Today</span>                                         
                                                    @endif
                                                @break
                                                @case(0) 
                                                    @if ($summary < 0)
                                                                @if ($summary<-365)
                                                                <span style="color: #77726e">
                                                                    Updated : 1 year ago.</span>
                                                                @elseif ($summary<-30)
                                                                {{ Date('d M Y (H:i:s)',strtotime($postData['action_datetime'])) }}<br>
                                                                Updated : 1 month ago                                                         
                                                                @elseif ($summary<-15)
                                                                <span style="color: #fd0000">Updated : ( {{-$summary}} days ago)</span><br>
                                                                {{ Date('d M Y (H:i:s)',strtotime($postData['action_datetime'])) }}<br>
                                                                
                                                                @else
                                                                <span style="color: #fd0000">Updated : ({{-$summary}}  days ago)</span><br>
                                                                {{ Date('d M Y (H:i:s)',strtotime($postData['action_datetime'])) }}<br>
                                                                
                                                                @endif
                                                        @else
                                                        Updated = &nbsp;<span class="blink" style="color: #fd0000">Today</span>                                         
                                                    @endif
                                                @break    
                                            @endswitch
                                            {{-- อัพเดตtext --}}
                                            
                                            
                                        </th>
                                        <td><strong>Building</strong> : @if ($postData['post_building'] != '')
                                            {{ $postData['post_building'] }} <i class="far fa-building"></i>
                                        @else
                                        -
                                        @endif</td>
                                        <td>
                                            <strong>Size</strong> : {{ $postData['post_area_total'] }} <strong>m<sup>2</sup></strong>
                                        </td>
                                        <td>
                                            <h3 class="mb-0 font-weight-semibold">
                                                {{ number_format($postData['post_price'], 0) }}.-
                                            </h3>
                                            <div class="text-muted">(Baht/month)</div>
                                            
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="2" class="text-center">
                                            @switch($postData['post_status'])
                                                @case(1) 
                                                <a href="{{ $postData['post_url'] }}" 
                                                data-abc="true" target="_blank" 
                                                class="btn btn-sm btn-warning">                        
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
                                                        <i class="icon-cart-add mr-2"></i> Available  &nbsp;<i class="fas fa-check blink"></i>
                                                    </button>
                                                                            
                                                @break
                                
                                                @case(0)
                                                    <button type="button" class="btn btn-sm btn-outline-danger">
                                                        <i class="icon-cart-add mr-2"></i> Rented  &nbsp;<i class="fas fa-times blink"></i>
                                                    </button>
                                                    
                                                @break
                                            @endswitch
                                        </th>
                                        <td colspan="2"  class="text-center">
                                            Additional Details <i class="fas fa-caret-right blink f-rent"></i>  
                                            <a href="{{ $postData['post_url'] }}" class="f-rent" 
                                            data-abc="true" target="_blank">
                                            <strong>Click</strong></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                        @else 
                        {{-- โพสต์ใหม่ --}}
                        <div class="card border border-secondary" >
                            @switch($postData['post_status'])
                            @case(1)
                                <h5 class="card-header bg-primary">Updated <i class="fas fa-star fa-spin f-sale"></i> {{ Date('d M Y (H:i:s)',strtotime($postData['action_datetime'])) }}
                                    @if ($summary < 0)
                                        <span style="color: #16ad29" class="blink">({{-$summary}} days ago)</span>
                                        @else
                                        <span style="color: #16ad29" class="blink">(Today)</span>                                
                                    @endif
                                </h5>
                            @break
                            @case(0) 
                                <h5 class="card-header bg-primary">Updated  
                                    {{ Date('d M Y (H:i:s)',strtotime($postData['action_datetime'])) }}
                                    @if ($summary < 0)
                                        <span style="color: #fd0000">({{-$summary}} days ago)</span>
                                        @else
                                        <span style="color: #fd0000" >(Today)</span>                                
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
                                        <th scope="row">ID
                                            <i class="fas fa-caret-right"></i> 
                                            {{ $postData['post_no'] }}
                                        </th>
                                        <th>status :
                                            @switch($postData['post_status'])
                                                @case(1) <i class="fas fa-caret-right blink" style="color: #16ad29"></i>
                                                <span style="color: #16ad29">Available</span> @break
                                                @case(0) <i class="fas fa-times" style="color: #fe0000"></i>  
                                                <span style="color: #fe0000">Rented</span> @break    
                                            @endswitch
                                        </th>
                                        <td><strong>Room Type</strong> :
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
                                            <i class="fa fa-star f-rent"></i>
                                            <i class="fa fa-star f-rent"></i>
                                            <i class="fa fa-star f-rent"></i>
                                            <i class="fas fa-star-half-alt f-rent"></i>
                                            <i class="far fa-star f-rent"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><strong>Floor</strong> : {{ $postData['post_floor'] }} <i class="rent-stairs"></i>
                                            <br>
                                            {{-- อัพเดตtext --}}
                                            @switch($postData['post_status'])
                                                @case(1) 
                                                    @if ($summary < 0)
                                                                @if ($summary<-365)
                                                                <span style="color: #77726e">
                                                                    Updated : 1 year ago.</span>
                                                                @elseif ($summary<-30)
                                                                {{ Date('d M Y (H:i:s)',strtotime($postData['action_datetime'])) }}<br>
                                                                Updated : 1 month ago                                                        
                                                                @elseif ($summary<-15)
                                                                <span style="color: #16ad29">Updated : ( {{-$summary}}   days ago)</span><br>
                                                                {{ Date('d M Y (H:i:s)',strtotime($postData['action_datetime'])) }}<br>
                                                                
                                                                @else
                                                                <span style="color: #16ad29">Updated : ( {{-$summary}}  days ago)</span><br>
                                                                {{ Date('d M Y (H:i:s)',strtotime($postData['action_datetime'])) }}<br>
                                                                
                                                                @endif
                                                        @else
                                                        Updated = &nbsp;<span class="blink" style="color: #16ad29">Today</span>                                         
                                                    @endif
                                                @break
                                                @case(0) 
                                                    @if ($summary < 0)
                                                                @if ($summary<-365)
                                                                <span style="color: #77726e">
                                                                    Updated : 1 year ago.</span>
                                                                @elseif ($summary<-30)
                                                                {{ Date('d M Y (H:i:s)',strtotime($postData['action_datetime'])) }}<br>
                                                                Updated : 1 month ago                                                         
                                                                @elseif ($summary<-15)
                                                                <span style="color: #fd0000">Updated : ( {{-$summary}} days ago)</span><br>
                                                                {{ Date('d M Y (H:i:s)',strtotime($postData['action_datetime'])) }}<br>
                                                                
                                                                @else
                                                                <span style="color: #fd0000">Updated : ({{-$summary}}  days ago)</span><br>
                                                                {{ Date('d M Y (H:i:s)',strtotime($postData['action_datetime'])) }}<br>
                                                                
                                                                @endif
                                                        @else
                                                        Updated = &nbsp;<span class="blink" style="color: #fd0000">Today</span>                                         
                                                    @endif
                                                @break    
                                            @endswitch
                                            {{-- อัพเดตtext --}}
 
                                        </th>
                                        <td><strong>Building</strong> : @if ($postData['post_building'] != '')
                                            {{ $postData['post_building'] }} <i class="far fa-building"></i>
                                        @else
                                        -
                                        @endif</td>
                                        <td>
                                            <strong>Size</strong> : {{ $postData['post_area_total'] }} <strong>m<sup>2</sup></strong>
                                        </td>
                                        <td>
                                            <h3 class="mb-0 font-weight-semibold">
                                                {{ number_format($postData['post_price'], 0) }}.-
                                            </h3>
                                            <div class="text-muted">(Baht/month)</div>
                                            
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="2" class="text-center">
                                            @switch($postData['post_status'])
                                                @case(1) 
                                                <a href="{{ $postData['post_url'] }}" 
                                                data-abc="true" target="_blank" 
                                                class="btn btn-sm btn-warning">                        
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
                                                        <i class="icon-cart-add mr-2"></i> Available  &nbsp;<i class="fas fa-check blink"></i>
                                                    </button>
                                                                            
                                                @break
                                
                                                @case(0)
                                                    <button type="button" class="btn btn-sm btn-outline-danger">
                                                        <i class="icon-cart-add mr-2"></i> Rented  &nbsp;<i class="fas fa-times blink"></i>
                                                    </button>
                                                    
                                                @break
                                            @endswitch
                                        </th>
                                        <td colspan="2"  class="text-center">
                                            Additional Details <i class="fas fa-caret-right blink f-rent"></i>  
                                            <a href="{{ $postData['post_url'] }}" class="f-rent" 
                                            data-abc="true" target="_blank">
                                            <strong>Click</strong></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            
                            </div>
                        </div>
                        @endif

                    </div>

                </td>
            </tr>
            </thead>
        </table>
    </td>
</tr>
{{-- card pc --}}