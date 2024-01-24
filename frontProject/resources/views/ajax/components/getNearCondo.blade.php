<div class="owl-carousel">
    @foreach ($condoList as $data)
    <div class="item">
            <a href="{{ $data['condo_url'] }}">
                <div class="condo-oth-option">
                    <div class="condo-oth-title">
                        {{ $data['condo_name'] }}
                    </div>
                    <img src="{{ $data['condo_image'] }}" alt="{{ $data['condo_alt'] }}">
                </div>
            </a>
        </div>
    @endforeach
</div>
