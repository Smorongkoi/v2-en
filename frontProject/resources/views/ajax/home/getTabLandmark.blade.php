<div class="content area">
    <div class="menu-area">
        @foreach ($landmark as $landmarkData)
            <button type="button" name="button" onclick="getLandmark(this,'{{ $landmarkData['landmark_type_id'] }}')">
                {{ $landmarkData['landmark_type_name'] }}
            </button>
        @endforeach
    </div>
    <div class="content-area" id="showLandmark"></div>
</div>
