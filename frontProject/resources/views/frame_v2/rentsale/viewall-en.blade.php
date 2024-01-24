<div class="text-center">
  <div class="d-inline p-2">
      <a href="{{ $condo_url }}" class="btn-tag" id="all" title="View all rent announcements for this condo.">
          View all rent announcements for this condo.</a>
  </div>
  <div class="d-inline p-2">
      <a href="{{ $area_url }}" class="btn-tag" >View all announcements in this location and area</a>
  </div>
  @foreach ($condo_landmark as $landmark)
      <div class="d-inline p-2">
          <a href="{{ $landmark['url'] }}" class="btn-tag" title="condo near {{ $landmark['name'] }}">condo near {{ $landmark['name'] }}</a>
      </div>
  @endforeach
</div>