@extends('layouts_v2.news')
{{-- ไทย --}}
@section('title-th', 'Scancondo | ' . $title)
@section('title-en', 'Scancondo | ' . $title_en)

@section('meta-description-th',strip_tags($detail))
@section('meta-description-en',strip_tags($detail_en))

@section('facebook-title-th', 'Scancondo | ' . $title)
@section('facebook-title-en', 'Scancondo | ' . $title_en)

@section('meta-keywords-th','ซื้อ, ขาย, เช่า, คอนโด, buy, rent, sell, forsale, condo, condominium, agent, agency, property, bangkok, ขายดาวน์, กรุงเทพ, นนทบุรี, ปทุมธานี, สมุทรปราการ, bts, mrt, airport link, สุขุมวิท, sukhumvit, down payment, room, available, location, บีทีเอส, เอ็มอาร์ที, ใกล้รถไฟฟ้า, สถานี, แผนที่, map, ห้องว่าง')
@section('meta-keywords-en','2-bedroom condo, accommodation for rent, buy, sell, cheap prices, near area, vicinity and location')

@section('head-tag')
    <link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}">
@endsection
@section('breadcrumbs-th')
    <?php
    $folder ="area";
    ?>
    <section id="breadcrumbs" class="breadcrumbs d-none d-xl-block">        
        <div class="text-center container">
            <h1 class="d-none d-md-block"><i class="fas fa-building"></i>&nbsp; 
                รวมข่าวสารในแวดวงอสังหาริมทรัพย์
            </h1> 
        </div>
        <div class="container text-center d-none d-md-block">  
            <ol>
            <li><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
            <li><a href="{{ route('news') }}"  class="f-rent" 
                data-abc="true" target="_blank"> ข่าวสาร</a>
            </li>
            <li>{{ $title }}</li>
            </ol>
            
        </div>
    </section>
@endsection
@section('breadcrumbs-en')
    <?php
    $folder ="area";
    ?>
    <section id="breadcrumbs" class="breadcrumbs d-none d-xl-block">        
        <div class="text-center container">
            <h1 class="d-none d-md-block"><i class="fas fa-building"></i>&nbsp; 
                Read Real Estate News Updated
            </h1> 
        </div>
        <div class="container text-center d-none d-md-block">  
            <ol>
                <li><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                <li><a href="{{ route('news') }}"  class="f-rent" 
                    data-abc="true" target="_blank"> News</a>
                </li>
                <li>{{ $title_en }}</li>
            </ol>
            
        </div>
    </section>
@endsection

@section('link_th',$url)

@section('content-th')
    <div class="card-header text-center">
        {{ $title_en }}
    </div>
    <div class="card-body">           
        <p class="card-text">              
            {{-- product card normal pc --}}
            <div class="container d-flex justify-content-center mb-50">            
                <div class="page-news-content">
                    <img src="
                    {{ $image }}
                    " class="w-100" alt="">
                    <div class="text-center">
                        <h1>{{ $title }}</h1>
                    </div>
                    <div style="text-align: justify">
                        {!! $detail !!}
                    <div>
                </div>
            </div>
            {{-- product card normal pc --}}
        </p>                                    
    </div>                                
@endsection
@section('content-en')
    <div class="card-header text-center">
        {{ $title }}
    </div>
    <div class="card-body">           
        <p class="card-text">              
            {{-- product card normal pc --}}
            <div class="container d-flex justify-content-center mb-50">            
                <div class="page-news-content">
                    <img src="
                    {{ $image }}
                    " class="w-100" alt="">
                    <div class="text-center">
                        <h1>{{ $title_en }}</h1>
                    </div>
                    <div style="text-align: justify">
                    {!! $detail_en !!}
                    <div>
                </div>
            </div>
            {{-- product card normal pc --}}
        </p>
    
    </div>
@endsection

@section('script')
    <script src="{{ asset('plugins/select2/select2.full.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/area.js') }}" charset="utf-8"></script>
@endsection