<div class="area-page"> 
    <div >
        <div class="container ads-post-search" id="searchBox">
            <div  class="ads-post-form"  >
                <div id="searchBox" class="row justify-content-md-center align-items-center">
                    <div class="col-md-2">
                        <h2 style="font-size:1.1em">ค้นหาคอนโด<span class="blink" >ได้ที่นี่!!</span></h2>
                    </div>
                    <div class="col-md-2">
                        @yield('boxfilter-th')                                       
                    </div>
                    
                    <div class="col-md-2  mt-2">
                        <div class="ads-post-input-locotion">                   
                            <select id="post_status">
                                <option value="">เลือกสถานะประกาศ</option>
                                @if($type == 1)
                                <option value="1">ห้องว่าง</option>
                                <option value="0">เช่าแล้ว</option>
                                @endif
                                @if($type == 2)
                                <option value="1">ซื้อเลย</option>
                                <option value="0">Sold out</option>
                                @endif
                            </select>   
                        </div>
                    </div>                                    
                    
                    <div class="col-md-2" >
                        <div class="ads-post-input-price">
                            <div class="ads-input-box-price">
                                <span id="show_price">
                                    @if($type == 1) ราคา
                                    @endif
                                    @if($type == 2) ราคาขาย
                                    @endif
                                </span>
                                <i class="fas fa-caret-down"></i>
                            </div>
                            <div class="ads-input-select-price">
                                <div class="select-price">
                                    @if($type == 1)
                                    <label for="customRange1" class="form-label" >
                                        <i class='fas fa-caret-down'></i> ราคาต่ำสุด (min)
                                        <output id="price_low_show" style="display: none">
                                            0
                                        </output>
                                        <input class="form-range input-group-text" type="text" id="price_low" 
                                            onclick="this.value = ''"
                                            value="0" placeholder="กรุณากรอก" min="0" max="100000" step="100" 
                                            oninput="
                                            price_low_show.value    = price_low.value;
                                            price_low.value         = price_low.value;
                                            ;" autocomplete="off"
                                            >
                                    </label> 
                                    @endif
                                    @if($type == 2)
                                        <label for="customRange1" class="form-label" >
                                            <i class='fas fa-caret-down'></i> ราคาขายต่ำสุด (min)
                                            <output id="price_low_show" style="display: none">
                                                500000
                                            </output>
                                            <input class="form-range input-group-text" type="text" id="price_low" 
                                                onclick="this.value = ''"
                                                value="500000" placeholder="กรุณากรอก" min="500000" max="20000000" step="100000" 
                                                oninput="
                                                price_low_show.value    = price_low.value;
                                                price_low.value         = price_low.value;
                                                ;" autocomplete="off"
                                                >
                                        </label> 
                                    @endif

                                  
                                </div>
                                <div class="and-price" style="padding-top: 20px">
                                    <i class='fas fa-arrows-alt-h'></i>
                                </div>
                                <div class="select-price">
                                    @if($type == 1)
                                        <label for="customRange2" class="form-label" >
                                            <i class='fas fa-caret-up'></i> ค่าเช่าสูงสุด (max)
                                            <output id="price_high_show" style="display: none">
                                                200000
                                            </output>
                                            <input class="form-range input-group-text" type="text" id="price_high" 
                                                onclick="this.value = ''"
                                                value="200000" placeholder="กรุณากรอก" min="5500" max="200000" step="100" 
                                                oninput="
                                                price_high_show.value    = price_high.value;
                                                price_high.value         = price_high.value; 
                                                ;" autocomplete="off"
                                                >
                                        </label>
                                    @endif
                                    @if($type == 2)
                                    <label for="customRange2" class="form-label" >
                                        <i class='fas fa-caret-up'></i> ราคาขายสูงสุด (max)
                                        <output id="price_high_show" style="display: none">
                                            200000000
                                        </output>
                                        <input class="form-range input-group-text" type="text" id="price_high" 
                                            onclick="this.value = ''"
                                            value="200000000" placeholder="กรุณากรอก" min="500000" max="200000000" step="100000" 
                                            oninput="
                                            price_high_show.value    = price_high.value;
                                            price_high.value         = price_high.value; 
                                            ;" autocomplete="off"
                                            >
                                    </label>
                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- ของใหม่ --}}

                    <input type="hidden" id="post_type" value="{{ $type }}">            
        
                    <div class="col-md-2 mb-2 post_style">
                        <select id="post_style" >
                            <option value="">รูปแบบห้องนอน</option>
                            <option value="7">Studio</option>
                            <option value="1">1 นอน</option>
                            <option value="2">2 นอน</option>
                            <option value="3">3 นอน</option>
                            <option value="4">4 นอน</option>
                            <option value="5">5 นอน</option>
                            <option value="6">6 นอน</option>
                            <option value="8">Penthouse</option>
                        </select>
                    </div>
                    <div class="col-md-2 mb-2" style="text-align: center" >
                        @yield('boxfilterbutton-th')                                         
                    </div>
                </div>
        
            </div>
        </div>                        
    </div>            
</div>