<div class="area-line active">
    @foreach ($area as $areaData)
        <a href="{{ $areaData['area_url'] }}"><i class="fas fa-chevron-right pb-1 listlandmark"></i> {{ $areaData['area_name'] }}</a>
    @endforeach
</div>
