<?php 
// เปลี่ยนภาษาใน env
$lang=env('LANGTOON');
?>
{{-- {{$lang}} --}}
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
        @yield('head-tag')
    </head>
    <body>      
        <div class="d-block d-sm-none">
        </div>
        <div class="d-none d-xl-block">
        </div>
        @include('frame_v2.navbar.nav-index-pc-'.$lang)
            @yield('content-'.$lang) 
        @include('frame_v2.seo-bts-'.$lang)
        {{-- seo-bts-eng ใหม่กว่า th อย่าลืมมาแก้ --}}
        @include('frame_v2.footer-'.$lang) 
        @include('frame_v2.modal')
    </body>
    
    @include('include_v2.includejs_v2') 
    @yield('script')

    @yield('script-'.$lang)
</html>