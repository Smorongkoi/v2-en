<?php 
// เปลี่ยนภาษาใน env
$lang=env('LANGTOON');
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>@yield('title-'.$lang)</title>
        <meta name="description" content="@yield('meta-description-'.$lang)">
        <meta name="keywords" content="@yield('meta-keywords-'.$lang)">
        <meta property="og:title" content="@yield('facebook-title')">
        <meta property="og:image" content="@yield('facebook-image')">
        <meta name="author" content="" />
        <meta name="robots" content="index,follow">
        <meta property="og:description" content="@yield('facebook-description')" />
        <meta name="csrf-token" content="{{ csrf_token() }}">    
        @include('include_v2.includecss_v2')
        <!-- Toon custom -->
        <link rel="stylesheet" href="{{ asset('assets_v2/'.$lang.'/style.css') }}" >            
        <link rel="stylesheet" href="{{ asset('assets_v2/'.$lang.'/scancondo.css') }}">
        <link rel="stylesheet" href="{{ asset('assets_v2/slider/slider.css') }}">  
        {{-- <link rel="stylesheet" href="{{ asset('assets_v2/'.$lang.'/css-speed/style.css') }}" >            
        <link rel="stylesheet" href="{{ asset('assets_v2/'.$lang.'/css-speed/scancondo.css') }}">   --}}
        @yield('head-tag')
    </head>
    <body>      
        <div class="d-block d-sm-none">
        </div>
        <div class="d-none d-xl-block">
        </div>
        @include('frame_v2.navbar.nav-pc-'.$lang)
            @yield('breadcrumbs-'.$lang)
            <br class="d-block d-sm-none">
            <br class="d-block d-sm-none">
            <br class="d-none d-md-block">
           

                <!-- ======= tab ======= -->
                {{-- @include('frame_v2.area.area-tab-'.$lang) --}}
                @include('frame_v2.area.condo-tab-'.$lang)
                <!-- ======= tab ======= -->
                @include('frame_v2.area.area-seotextmobile-'.$lang)
                @include('frame_v2.area.area-boxfilter-'.$lang)
                @include('frame_v2.area.area-rentsaletab-'.$lang)
                <div class="board-page">
                  <div class="ads-post-content container">
                      <div class="text-center row">
                          <a href="{{ $area_url }}" class="btn-tag col-12 col-md-3" id="all">
                            View all listings in this area and location</a>
                          @foreach ($condo_landmark as $landmark)
                              <a href="{{ $landmark['url'] }}" class="btn-tag col-12 col-md-3" title="Condo near{{ $landmark['name'] }}">
                                Condo near {{ $landmark['name'] }}
                              </a>
                          @endforeach
                      </div>
                  </div>
                  <div  id="searchBox">
                  </div>
                </div>

        @yield('content-'.$lang) 
        @include('frame_v2.seo-bts-'.$lang)
        {{-- seo-bts-eng ใหม่กว่า th อย่าลืมมาแก้ --}}
        @include('frame_v2.footer-'.$lang) 
        @include('frame_v2.modal')
    </body>
    
    @include('include_v2.includejs_v2') 
    <script type="text/javascript">

        if (document.getElementById('state1')) {
          const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
          if (!countUp.error) {
            countUp.start();
          } else {
            console.error(countUp.error);
          }
        }
        if (document.getElementById('state2')) {
          const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
          if (!countUp1.error) {
            countUp1.start();
          } else {
            console.error(countUp1.error);
          }
        }
        if (document.getElementById('state3')) {
          const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
          if (!countUp2.error) {
            countUp2.start();
          } else {
            console.error(countUp2.error);
          };
        }
      </script>
    @yield('script')
    {{-- เปลี่ยนภาษาของ showpost --}}
    @yield('script-'.$lang)
    <script>
        function getNews() {
            $.ajax({
                type: "post",
                url: "{{ route('getNews'.$lang) }}",
                dataType: "html",
                success: function (response) {
                    $("#showNews").html(response);
                }
            });
        }
    </script>
</html>