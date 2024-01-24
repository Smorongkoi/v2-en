@foreach ($condo as $condoData)
    <div class="col-md-3 col-sm-6 p-3">
        <a href="{{ $condoData['url'] }}" class="condolist" >
            <div class="card">
                <img class="card-img-top" src="{{ $condoData['image'] }}" alt="{{ $condoData['alt'] }}" 
                style="max-height: 150px;object-fit : cover;">
                <div class="card-body">
                <h5 class="card-title" style="font-size: 0.85em;text-transform:capitalize">{{ Str::limit($condoData['condo_name_en'], 100) }}</h5>
                    {{-- <p class="card-text">
                    {{ $condoData['condo_name_en'] }}
                    </p> --}}
                </div>
            </div>
        </a>
    </div>
 @endforeach
