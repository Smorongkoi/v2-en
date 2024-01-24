<div class="landmark-line active">
    @foreach ($landmark as $landmarkData)
    <a href="{{ $landmarkData['landmark_url'] }}"><i class="fas fa-chevron-right pb-1 listlandmark"></i>  {{ $landmarkData['landmark_name'] }}</a>
    @endforeach
</div>
