<div class="condo owl-carousel">
    @foreach ($post as $data)
        <div class="item">
            <a href="{{ $data['url'] }}">
                <div class="box-condo">
                    <img src="{{ $data['image'] }}" alt="">
                    <div class="condo-name">
                        {{ $data['condo_name_en'] }}
                    </div>
                    <div class="condo-area">
                        ทำเล {{ $data['area_name'] }}
                    </div>
                    <div class="condo-detail">
                        @if ($data['post_bed'] <= 6)
                            <div class="bed">{{ $data['post_bed'] }} <i class="fas fa-bed"></i></div>
                            <div class="shower">{{ $data['post_baths'] }} <i class="fas fa-shower"></i></div>
                        @else
                            <div class="bed">
                                @switch($data['post_bed'])
                                    @case(7)
                                        Studio
                                    @break
                                    @case(8)
                                        Penthouse
                                    @break
                                @endswitch
                            </div>
                            <div class="shower">{{ $data['post_baths'] }} <i class="fas fa-shower"></i></div>
                        @endif
                        <div class="size">{{ $data['post_area_total'] }} ตร.ม.</div>
                    </div>
                    <div class="condo-price">
                        @switch($data['post_type'])
                            @case(1)
                                ราคาเช่า <span>{{ number_format($data['post_rent_price'], 0) }}</span>
                            @break
                            @default
                                ราคาขาย
                                <span>{{ number_format($data['post_sale_price'], 0) }}</span>
                        @endswitch
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>
