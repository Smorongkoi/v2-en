<div class="content area">
    <div class="menu-area">
        @foreach ($zone as $zoneData)
            <button type="button" name="button" onclick="getArea(this,'{{ $zoneData['zone_id'] }}')">{{ $zoneData['zone_name'] }}</button>
        @endforeach
    </div>
    <div class="content-area" id="showArea"></div>
</div>
