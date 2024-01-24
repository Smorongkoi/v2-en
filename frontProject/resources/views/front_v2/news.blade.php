@extends('layouts_v2.news')
{{-- ไทย --}}
@section('title-th', 'Scancondo | บทความ สาระน่ารู้ และข่าวสารอสังหาริมทรัพย์')
@section('title-en', 'Scancondo | Real Estate News and Information on Scancondo.com - Your Go-To Source for Property Updates')

@section('meta-description-th','ข้อมูลข่าวสารเกี่ยวกับอสังหาริมทรัพย์ คอนโด สาระน่ารู้ต่างๆ ที่น่าสนใจในปัจจุบัน')
@section('meta-description-en','Stay informed with the latest real estate news, market trends and expert advice on Scancondo.com. Find properties for sale or rent, buying and selling tips, and location-based 
information on residential and commercial properties. Your go-to source for all things real estate.')

@section('facebook-title-th', 'Scancondo | บทความ สาระน่ารู้ และข่าวสารอสังหาริมทรัพย์')
@section('facebook-title-en', 'Scancondo | Real Estate News and Information on Scancondo.com - Your Go-To Source for Property Updates')

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
            </ol>
            
        </div>
    </section>
@endsection

@section('link_th',$url)

@section('content-th')
    <div class="card-header">
        บทความ สาระน่ารู้
    </div>
    <div class="card-body">           
        <p class="card-text">              
            {{-- product card normal pc --}}
            <div class="container d-flex justify-content-center mb-50">            
                <div >
                <div class="row"> 
                        {!! $pagination !!}
                        @foreach ($news as $data)
                                {{-- @include('speed.frame.card.news') --}}
                                @include('frame_v2.news.newsth')
                        @endforeach 
                        {!! $pagination !!}
                    </div>                     
                </div>
            </div>
            {{-- product card normal pc --}}
        </p>                                    
    </div>
@endsection
@section('content-en')
<div class="card-header">
    Read Real Estate News Updated
</div>
<div class="card-body">           
    <p class="card-text">              
        {{-- product card normal pc --}}
        <div class="container d-flex justify-content-center mb-50">            
            <div >
            <div class="row"> 
                    {!! $pagination !!}
                    @foreach ($news as $data)
                            {{-- @include('speed.frame.card.news') --}}
                            @include('frame_v2.news.newsen')
                    @endforeach
                    {!! $pagination !!}
                </div>                     
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