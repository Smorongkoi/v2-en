<div class="post-oth-slide owl-carousel owl-theme">
    @foreach ($post as $postData)
        <div class="item">
            <a
                href="{{ $postData['post_url'] }}">
                <div class="post-oth">
                    <div class="image">
                        <img src="{{ $postData['post_image'] }}" alt="{{ $postData['post_header'] }}">
                    </div>
                    <div class="detail">
                        @if ($postData['post_bed'] <= 6)
                            <span>{{ $postData['post_bed'] }} <i class="fas fa-bed"></i></span>
                        @else
                            <span>
                                @switch($postData['post_bed'])
                                    @case(7)
                                        สตูดิโอ
                                    @break

                                    @case(8)
                                        เพ้นท์เฮ้าส์
                                    @break
                                @endswitch
                            </span>
                        @endif
                        <span>{{ $postData['post_floor'] }} <i class="rent-stairs"></i></span>
                        <span>{{ $postData['post_building'] }} <i class="far fa-building"></i></span>
                        <span>{{ $postData['post_area_total'] }} <strong>m<sup>2</sup></strong></span>
                    </div>
                    <div class="price">
                        <strong>
                            @if ($postData['post_status'] <= 1)
                            ราคาเช่า {{ number_format($postData['post_price'], 0) }} <br>บาท/เดือน
                            @else
                            ราคาขาย<br>
                             {{ number_format($postData['post_price'], 0) }} บาท
                            @endif
                        </strong> 

                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>
