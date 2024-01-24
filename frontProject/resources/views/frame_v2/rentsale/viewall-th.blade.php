<div class="text-center">
  <div class="d-inline p-2">
      <a href="{{ $condo_url }}" class="btn-tag" id="all" title="ดูประกาศเช่า{{$condo->condo_name}}ทั้งหมด">ดูประกาศคอนโดนี้ทั้งหมด</a>
  </div>
  <div class="d-inline p-2">
      <a href="{{ $area_url }}" class="btn-tag" >ดูประกาศทั้งหมด ในทำเลและบริเวณนี้</a>
  </div>
  @foreach ($condo_landmark as $landmark)
      <div class="d-inline p-2">
          <a href="{{ $landmark['url'] }}" class="btn-tag" title="คอนโดใกล้{{ $landmark['name'] }}">คอนโดใกล้{{ $landmark['name'] }}</a>
      </div>
  @endforeach
</div>