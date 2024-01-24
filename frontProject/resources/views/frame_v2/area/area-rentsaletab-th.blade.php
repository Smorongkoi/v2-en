<!-- ======= box-rentsale ======= -->
<div class="area-page"> 
    <br>
    <div id="features2" class="features2">
        <div>
            <div class="d-block d-sm-none container mb-0">
                <ul class="nav nav-tabs nav-fill">
                   
                    <li class="nav-item">
                      <a class="nav-link @if($type == 1) active @endif" 
                       href="{{ $rent_url }}"
                      ><b><i class="fas fa-key"></i> เช่า (<span id="showPostRent-mobile"></span>&nbsp; ห้อง)</b></a>
                    </li>
                   
                    
                    <li class="nav-item">
                      <a class="nav-link @if($type == 2) active  @endif" 
                      href="{{ $sale_url }}" 
                      ><b><i class="fas fa-building"></i> ขาย (<span id="showPostSale-mobile"></span>&nbsp; ห้อง)</b></a>
                    </li>
                </ul>
                
            </div>
            <div class="d-none d-md-block  container mb-0">
                <ul class="nav nav-tabs row d-flex">
                        <li class="nav-item col-3" ></li>
                        <li class="nav-item col-3" >
                        <a class="nav-link @if($type == 1) active @endif show"  href="{{ $rent_url }}">
                            <i class="ri-gps-line"></i>
                            <h4 class="d-none d-lg-block">For rent 
                                (เช่า <span id="showPostRent"></span>)
                            </h4>
                        </a>
                        </li>
                        <li class="nav-item col-3" >
                        <a class="nav-link @if($type == 2) active show @endif" href="{{ $sale_url }}"> 
                            <i class="ri-body-scan-line"></i>
                            <h4 class="d-none d-lg-block">For Sale
                                 (ขาย <span id="showPostSale"></span>)
                                </h4>
                        </a>
                        </li>
                        <li class="nav-item col-3" ></li>
                </ul>
            </div>
            <div class="tab-content">
                    <div class="ads-tab-post-content active" id="showPost">                    
                    </div>
                    <div class="ads-tab-post-content active">
                        <div class="normal" style="display:none;" id="showPostNull">
                            <div class="text-center" >
                                <h2>ยังไม่มีประกาศ</h2>
                            </div>
                        </div>
                    </div>            
                    <div class="ads-tab-post-content active" style="margin-top: 24px;">
                        <div id="showPaginaiton" class="pagination normal my-0"></div>
                    </div>
            </div>  
        </div>
    </div>  
</div>
<!-- End box-rentsale -->