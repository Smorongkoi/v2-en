<div class="content train">
    <div class="menu-train">
        @foreach ($train as $data)
            <button type="button" onclick="getTrainStation(this,'{{ $data['train_id'] }}');">
                <img src="{{ $data['train_icon'] }}" alt="" style="height:20px;"> {{ $data['train_name'] }}
            </button>
        @endforeach
    </div>
    <div class="content-train" id="showStation">

    </div>
</div>
