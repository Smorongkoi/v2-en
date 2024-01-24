<div class="content univercity">
    <div class="container p-5 university-line">
        @foreach ($university as $universityData)
            <a href="{{ $universityData['university_url'] }}"><i class="fas fa-chevron-right pb-1 listlandmark"></i> {{ $universityData['university_name'] }}</a>
        @endforeach
    </div>
</div>
