<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\frontController;
use App\Http\Controllers\frontController_toon;
use App\Http\Controllers\frontController_v2;
use App\Http\Controllers\oldController;
use App\Http\Controllers\urlController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//v2*****************************************************************************
Route::get('/', [frontController_v2::class, 'index'])->name('home');
//กล่อง hero หน้าแรก
Route::get('searchArea', [frontController_v2::class, 'searchArea'])->name('searchArea');
Route::get('searchUniversity', [frontController_v2::class, 'searchUniversity'])->name('searchUniversity');
Route::get('searchLandmark', [frontController_v2::class, 'searchLandmark'])->name('searchLandmark');
Route::get('searchCondo', [frontController_v2::class, 'searchCondo'])->name('searchCondo');
Route::get('searchTrain', [frontController_v2::class, 'searchTrain'])->name('searchTrain');
//box-park
Route::post('getTabTrain', [frontController_v2::class, 'getTabTrain'])->name('getTabTrain');
Route::post('getTrainStation', [frontController_v2::class, 'getTrainStation'])->name('getTrainStation');
Route::post('getTabArea', [frontController_v2::class, 'getTabArea'])->name('getTabArea');
Route::post('getArea', [frontController_v2::class, 'getArea'])->name('getArea');
Route::post('getTabUniversity', [frontController_v2::class, 'getTabUniversity'])->name('getTabUniversity');
Route::post('getTabLandmark', [frontController_v2::class, 'getTabLandmark'])->name('getTabLandmark');
Route::post('getLandmark', [frontController_v2::class, 'getLandmark'])->name('getLandmark');
Route::post('getShockPost', [frontController_v2::class, 'getShockPost'])->name('getShockPost');
Route::post('getBeautifulPost', [frontController_v2::class, 'getBeautifulPost'])->name('getBeautifulPost');
Route::post('getViewPost', [frontController_v2::class, 'getViewPost'])->name('getViewPost');
Route::post('getNews', [frontController_v2::class, 'getNews'])->name('getNews');
Route::post('getNewsth', [frontController_v2::class, 'getNewsth'])->name('getNewsth');
Route::post('getNewsen', [frontController_v2::class, 'getNewsen'])->name('getNewsen');

//v2*****************************************************************************
//area
Route::get('rent/condo-in-the-area/{area_url}', [frontController_v2::class, 'area'])->name('area');
Route::get('buy/sell/condo-in-the-area/{area_url}', [frontController_v2::class, 'area'])->name('areaSale');

Route::post('countCondoArea/{id}', [frontController_v2::class, 'countCondoArea'])->name('countCondoArea');
Route::post('getCondoAreaStep/{id}', [frontController_v2::class, 'getCondoAreaStep'])->name('getCondoAreaStep');
Route::post('countPostArea/{type}', [frontController_v2::class, 'countPostArea'])->name('countPostArea');
    Route::post('getPostAreaEN/{type}', [frontController_v2::class, 'getPostAreaEN'])->name('getPostAreaEN');
    Route::post('getPostAreaTH/{type}', [frontController_v2::class, 'getPostAreaTH'])->name('getPostAreaTH');
//v2*****************************************************************************
//station
Route::get('rent/condo-near-BTS/{train_station_url}', [frontController_v2::class, 'station'])->name('station');
Route::get('buy/sell/condo-near-BTS/{train_station_url}', [frontController_v2::class, 'station'])->name('stationSale');

Route::post('countCondoStation/{id}', [frontController_v2::class, 'countCondoStation'])->name('countCondoStation');
Route::post('getCondoStationStep/{id}', [frontController_v2::class, 'getCondoStationStep'])->name('getCondoStationStep');
Route::post('countPostStation/{type}', [frontController_v2::class, 'countPostStation'])->name('countPostStation');
    Route::post('getPostStationEN/{type}', [frontController_v2::class, 'getPostStationEN'])->name('getPostStationEN');
    Route::post('getPostStationTH/{type}', [frontController_v2::class, 'getPostStationTH'])->name('getPostStationTH');
//v2*****************************************************************************
//university
Route::get('rent/condo-near-schools/{university_url}', [frontController_v2::class, 'university'])->name('university');
Route::get('buy/sell/condo-near-schools/{university_url}', [frontController_v2::class, 'university'])->name('universitySale');

Route::post('countCondoUniversity/{id}', [frontController_v2::class, 'countCondoUniversity'])
->name('countCondoUniversity');
Route::post('getCondoUniversityStep/{id}', [frontController_v2::class, 'getCondoUniversityStep'])
->name('getCondoUniversityStep');
Route::post('countPostUniversity/{type}', [frontController_v2::class, 'countPostUniversity'])
->name('countPostUniversity');
    Route::post('getPostUniversityTH/{type}', [frontController_v2::class, 'getPostUniversityTH'])->name('getPostUniversityTH');
    Route::post('getPostUniversityEN/{type}', [frontController_v2::class, 'getPostUniversityEN'])->name('getPostUniversityEN');
//v2*****************************************************************************
//landmark
Route::get('rent/condo/near/{id}/{landmark_url}', [frontController_v2::class, 'landmark'])->name('landmark');
Route::get('buy/sell/condo/near/{id}/{landmark_url}', [frontController_v2::class, 'landmark'])->name('landmarkSale');

Route::post('countCondoLandmark/{id}', [frontController_v2::class, 'countCondoLandmark'])
->name('countCondoLandmark');
Route::post('getCondoLandmarkStep/{id}', [frontController_v2::class, 'getCondoLandmarkStep'])
->name('getCondoLandmarkStep');
Route::post('countPostLandmark/{type}', [frontController_v2::class, 'countPostLandmark'])
->name('countPostLandmark');
    Route::post('getPostLandmarkTH/{type}', [frontController_v2::class, 'getPostLandmarkTH'])
    ->name('getPostLandmarkTH');
    Route::post('getPostLandmarkEN/{type}', [frontController_v2::class, 'getPostLandmarkEN'])
    ->name('getPostLandmarkEN');
//v2*****************************************************************************
//หน้าคอนโด
Route::get('rent-condo/{condo_url}', [frontController_v2::class, 'condo'])->name('condo');
Route::get('buy-sell/condo/{condo_url}', [frontController_v2::class, 'condo'])->name('condoSale');

Route::get('map-condo/{condo_url}', [frontController_v2::class, 'condoMap'])->name('condoMap');
Route::post('countPostCondo/{condo}/{type}', [frontController_v2::class, 'countPostCondo'])->name('countPostCondo');
    Route::post('getPostCondoTH/{condo}/{type}', [frontController_v2::class, 'getPostCondoTH'])->name('getPostCondoTH');
    Route::post('getPostCondoEN/{condo}/{type}', [frontController_v2::class, 'getPostCondoEN'])->name('getPostCondoEN');
    Route::post('getNearCondoTH/{condo}', [frontController_v2::class, 'getNearCondoTH'])->name('getNearCondoTH');
    Route::post('getNearCondoEN/{condo}', [frontController_v2::class, 'getNearCondoEN'])->name('getNearCondoEN');
//v2*****************************************************************************
//หน้าขาย-เช่า
Route::get('rent/{post_id}/{post_no}/{post_title}', [frontController_v2::class, 'rent'])->name('rent');
Route::get('sell/{post_id}/{post_no}/{post_title}', [frontController_v2::class, 'sale'])->name('sale');
    Route::post('getPostOthTH/{id}/{type}', [frontController_v2::class, 'getPostOthTH'])->name('getPostOthTH');
    Route::post('getPostOthEN/{id}/{type}', [frontController_v2::class, 'getPostOthEN'])->name('getPostOthEN');
//v2*****************************************************************************
//หน้าบทความ
Route::get('Articles', [frontController_v2::class, 'news'])->name('news');
Route::get('Articles/{id}/{title}', [frontController_v2::class, 'newsDetail'])->name('newsDetail');
//v2*****************************************************************************
// หน้าย่อย
Route::get('Looking-to-rent-a-condo/buy-a-condo', [frontController_v2::class, 'want'])->name('want');
Route::get('work-with-us', [frontController_v2::class, 'agenttoon'])->name('agenttoon');
Route::get('our-service', [frontController_v2::class, 'servicestoon'])->name('servicestoon');
Route::get('Contact-us', [frontController_v2::class, 'contacttoon'])->name('contacttoon');
Route::get('Payment', [frontController_v2::class, 'ratetoon'])->name('ratetoon');
Route::get('Condo-for-rent/condo-for-sale', [frontController_v2::class, 'deposit'])->name('deposit');
//v2*****************************************************************************
// หน้าคำนวณ
Route::get('/Calculate-condo-installments', function () {
    return view('calculate_v2.calculate1');
})->name('font-calculate1');

Route::get('/Calculate-the-amount-of-loan-that-can-be-borrowed', function () {
    return view('calculate_v2.calculate2');
})->name('font-calculate2');

Route::get('/Calculate-the-number-of-years-to-payback', function () {
    return view('calculate_v2.calculate3');
})->name('font-calculate3');

Route::get('/Compare-home-loan-rates/interest', function () {
    return view('calculate_v2.calculate4');
})->name('font-calculate4');

Route::get('/How-do-I-start-buying-a-condo', function () {
    return view('calculate_v2.calculate5');
})->name('font-calculate5');
//v2*****************************************************************************
Route::post('contactSave', [frontController_v2::class, 'contactSave'])->name('contactSave');
Route::post('agentSave', [frontController_v2::class, 'agentSave'])->name('agentSave');
Route::post('wantSave', [frontController_v2::class, 'wantSave'])->name('wantSave');
Route::post('depositSave', [frontController_v2::class, 'depositSave'])->name('depositSave');

//ของปาร์ก*****************************************************************************
Route::get('/เช่า/ซื้อ/ขายคอนโดใกล้รถไฟฟ้า/{id}/{keyword1}/{keyword2}', [oldController::class, 'train']);
Route::get('/เช่า/ซื้อ/ขายคอนโดทำเล/{id}/{keyword1}/{keyword2}', [oldController::class, 'area']);
Route::get('/เช่า/ซื้อ/ขายคอนโดใกล้/สถานศึกษา/{id}/{keyword}', [oldController::class, 'university']);
Route::get('/{id}/คอนโด/{keyword1}/{keyword2}', [oldController::class, 'train']);
Route::get('/เช่า/ซื้อ/ขายคอนโด/{name}/{id}', [oldController::class, 'condo']);

Route::get('ให้เช่า/{post_no}/{post_id}/{header}', [oldController::class, 'postRent']);
Route::get('ขาย/{post_no}/{post_id}/{header}', [oldController::class, 'postSale']);

Route::get('get/url/area', [urlController::class, 'getUrlArea']);
Route::get('get/url/train', [urlController::class, 'getUrlTrain']);
Route::get('get/url/university', [urlController::class, 'getUrlUniversity']);
Route::get('get/url/landmark', [urlController::class, 'getUrlLandmark']);
Route::get('get/url/condo', [urlController::class, 'getUrlCondo']);
Route::get('get/url/post', [urlController::class, 'getUrlPost']);
Route::get('get/url/news', [urlController::class, 'getUrlNews']);
    Route::get('get/url/newsindex', [urlController::class, 'getUrlNewsindex']);
//ของปาร์ก*****************************************************************************

//ไม่ได้ใช้*****************************************************************************
Route::post('1', [frontController_toon::class, 'getPostShock'])->name('post-new');
Route::get('rates', [frontController_toon::class, 'rate'])->name('rate');
Route::get('service', [frontController_toon::class, 'services'])->name('services');
Route::get('contact', [frontController_toon::class, 'contact'])->name('contact');
Route::get('shock-price', [frontController_toon::class, 'shock'])->name('shock');
Route::get('ourteam', [frontController_toon::class, 'ourteam'])->name('ourteam');
Route::get('join-us', [frontController_toon::class, 'agent'])->name('agent');
Route::get('beautifulrent', [frontController_toon::class, 'beautiful'])->name('beautiful');
Route::get('beautifulsale', [frontController_toon::class, 'beautiful'])->name('beautifulSale');
Route::get('viewrent', [frontController_toon::class, 'view'])->name('view');
Route::get('viewsale', [frontController_toon::class, 'view'])->name('viewSale');
Route::post('countPostShock/{type}', [frontController_toon::class, 'countPostShock'])->name('countPostShock');
Route::post('getPostShock/{type}', [frontController_toon::class, 'getPostShock'])->name('getPostShock');
//ไม่ได้ใช้*****************************************************************************