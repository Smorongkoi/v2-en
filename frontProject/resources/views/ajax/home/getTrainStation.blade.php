<style>
    .tab-home-condo .tab-home-content.train .content.train .content-train .trainline.train-{{ $trainType->train_type_id }} .entry:before,
    .tab-home-condo .tab-home-content.train .content.train .content-train .trainline.train-{{ $trainType->train_type_id }} .entry:last-child:before,
    .tab-home-condo .tab-home-content.train .content.train .content-train .trainline.train-{{ $trainType->train_type_id }} .entry:after {
    /* border-color: {{ $trainType->train_type_color }}; */
    border-color:#cdcdcd;
    }
    span.train-{{ $trainType->train_type_id }} {
    /* color: {{ $trainType->train_type_color }}; */
    color:#dc236f;
    }
    .tab-home-condo .tab-home-content.train .content.train .content-train .trainline.train-{{ $trainType->train_type_id }} .entry:hover:after {
    /* background-color: {{ $trainType->train_type_color }}; */
    background: rgb(63,94,251);
  background: linear-gradient(45deg, rgba(63,94,251,1) 0%, rgba(233,30,99,1) 100%);
    }
</style>
<div class="trainline active train-{{ $trainType->train_type_id }}">
    @foreach ($station as $stationData)
        <a href="{{ $stationData['station_url'] }}" class="entry">{{ $stationData['station_name'] }}</a>
    @endforeach
</div>
