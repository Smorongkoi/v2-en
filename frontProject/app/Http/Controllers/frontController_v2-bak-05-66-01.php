<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Image;
use DB;
use App\Models\Zone;
use App\Models\ZoneCustom;
use App\Models\Area;
use App\Models\AreaCustom;
use App\Models\TrainType;
use App\Models\TrainTypeCustom;
use App\Models\TrainStation;
use App\Models\TrainStationCustom;
use App\Models\TrainCondo;
use App\Models\University;
use App\Models\UniversityCustom;
use App\Models\UniversityCondo;
use App\Models\LandmarkType;
use App\Models\Landmark;
use App\Models\LandmarkCondo;
use App\Models\Condo;
use App\Models\CondoImage;
use App\Models\CondoCustom;
use App\Models\optionBed;
use App\Models\optionBath;
use App\Models\optionBuilding;
use App\Models\optionPhase;
use App\Models\Post;
use App\Models\PostImage;
use App\Models\LogPost;
use App\Models\Agent;
use App\Models\Contact;
use App\Models\Deposit;
use App\Models\DepositImage;
use App\Models\News;
use App\Models\Want;
use App\Models\Bank;

use App\Models\Province;
use App\Models\Amphoe;
use App\Models\District;


class frontController_v2 extends Controller
{
    // หน้าแรก *******************************************************************
    public function index()
    {
        return view('front_v2.home');
    }
    public function searchTrain()
    {
        $train = TrainType::select('train_type.train_type_name','train_station.train_station_name','train_type.train_type_name_en','train_station.train_station_name_en','train_station_custom.train_station_url_en')
        ->leftjoin(env('DB_DATABASE_2').'.train_type_custom as train_type_custom','train_type_custom.train_type_id','=','train_type.train_type_id')
        ->leftjoin('train_station','train_station.train_type_id','=','train_type.train_type_id')
        ->leftjoin(env('DB_DATABASE_2').'.train_station_custom as train_station_custom','train_station_custom.train_station_id','=','train_station.train_station_id')
        ->where('train_type_custom.active_status','=','1')
        ->where('train_station_custom.active_status','=','1')->get();
        $list = [];
        foreach ($train as $trainData) {
            $temp = array(
                "keyword" => $trainData->train_type_name_en.' '.$trainData->train_station_name_en,
                "url" => route('station',$trainData->train_station_url_en),
                
            );
            array_push($list,$temp);
            $temp = array(
                "keyword" => $trainData->train_type_name_en.' '.$trainData->train_station_name_en,
                "url" => route('station',$trainData->train_station_url_en),
            );
            array_push($list,$temp);
        }
        return response()->json($list);
    }
    public function searchArea()
    {
        $area = Zone::select('zone.zone_name','area.area_name','zone.zone_name_en','area.area_name_en','area_custom.area_url')
        ->leftjoin(env('DB_DATABASE_2').'.zone_custom as zone_custom','zone_custom.zone_id','=','zone.zone_id')
        ->leftjoin('area','area.zone_id','=','zone.zone_id')
        ->leftjoin(env('DB_DATABASE_2').'.area_custom as area_custom','area_custom.area_id','=','area.area_id')
        ->where('zone_custom.active_status','=','1')
        ->where('area_custom.active_status','=','1')
        ->get();
        $list = [];
        foreach ($area as $areaData) {
            $temp = array(
                "keyword" => $areaData->zone_name.' '.$areaData->area_name,
                "url" => route('area',$areaData->area_url),
            );
            array_push($list,$temp);
            $temp = array(
                "keyword" => $areaData->zone_name_en.' '.$areaData->area_name_en,
                "url" => route('area',$areaData->area_url),
            );
            array_push($list,$temp);
        }
        return response()->json($list);
    }
    public function searchUniversity()
    {
        $university = University::select('university.university_name','university.university_name_en','university_custom.university_url')
        ->leftjoin(env('DB_DATABASE_2').'.university_custom as university_custom','university_custom.university_id','=','university.university_id')
        ->where('university_custom.active_status','=','1')->get();
        $list = [];
        foreach ($university as $universityData) {
            $temp = array(
                "keyword" => $universityData->university_name,
                "url" => route('university',$universityData->university_url),
            );
            array_push($list,$temp);
            $temp = array(
                "keyword" => $universityData->university_name_en,
                "url" => route('university',$universityData->university_url),
            );
            array_push($list,$temp);
        }
        return response()->json($list);
    }
    public function searchLandmark()
    {
        $landmarkType = LandmarkType::select('landmark_type.landmark_type_name','landmark.landmark_name','landmark_type.landmark_type_name_en','landmark.landmark_name_en','landmark.landmark_id')
        ->leftjoin('landmark','landmark.landmark_type_id','=','landmark_type.landmark_type_id')
        ->where('landmark_type.active_status','=','1')
        ->where('landmark.active_status','=','1')
        ->orderBy('landmark_type.landmark_type_id', 'ASC')
        ->orderBy('landmark.landmark_id', 'ASC')
        ->get();
        $list = [];
        foreach ($landmarkType as $landmarkTypeData) {
            $temp = array(
                "keyword" => $landmarkTypeData->landmark_type_name." ".$landmarkTypeData->landmark_name,
                "url" => route('landmark',[$landmarkTypeData->landmark_id,$landmarkTypeData->landmark_name]),
            );
            array_push($list,$temp);
            $temp = array(
                "keyword" => $landmarkTypeData->landmark_type_name_en." ".$landmarkTypeData->landmark_name_en,
                "url" => route('landmark',[$landmarkTypeData->landmark_id,$landmarkTypeData->landmark_name]),
            );
            array_push($list,$temp);
        }
        return response()->json($list);
    }
    public function searchCondo()
    {
        $condo = Condo::select('condo.*','condo_custom.condo_url_en')
        ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
        ->where('condo_custom.active_status','=',1)
        ->where('condo.delete_status','=','0')->get();
        $list = [];
        foreach ($condo as $condoData) {
            $temp = array(
                "keyword" => $condoData->condo_name_th,
                "url" => route('condo',[$condoData->condo_url_en]),
            );
            array_push($list,$temp);
            $temp = array(
                "keyword" => $condoData->condo_name_en,
                "url" => route('condo',[$condoData->condo_url_en]),
            );
            array_push($list,$temp);
        }
        return response()->json($list);
    }
    public function getTabTrain(Request $request)
    {
        $train = TrainType::select('train_type.*')
        ->leftjoin(env('DB_DATABASE_2').'.train_type_custom as train_type_custom','train_type_custom.train_type_id','=','train_type.train_type_id')
        ->where('train_type_custom.active_status','=','1')
        ->orderBy('train_type_custom.list_order', 'ASC')
        ->orderBy('train_type.train_type_id', 'ASC')->get();

        $trainList = [];
        foreach ($train as $trainData) {
            $tempTrain = array(
                "train_id" => $trainData->train_type_id,
                "train_icon" => getFileUrl( $trainData->train_type_icon , '/' ),
                "train_name" => $trainData->train_type_name_en,
                "train_color" => $trainData->train_type_color,
            );
            array_push($trainList,$tempTrain);
        }

        return view('ajax.home.getTabTrain',["train"=>$trainList]);
    }
    public function getTrainStation(Request $request)
    {
        $train = $request->train;
        $trainType = TrainType::find($train);
        $station = TrainStation::select('train_station.*','train_station_custom.train_station_url_en')
        ->leftjoin(env('DB_DATABASE_2').'.train_station_custom as train_station_custom','train_station_custom.train_station_id','=','train_station.train_station_id')
        ->where('train_station_custom.active_status','=','1')
        ->where('train_station.train_type_id','=',$train)->orderBy('train_station_custom.list_order', 'ASC')->get();
        $stationList = [];
        foreach ($station as $stationData) {
            $tempStation = array(
                "station_name" => $stationData->train_station_name_en,
                "station_url" => route('station',$stationData->train_station_url_en),
            );
            array_push($stationList,$tempStation);
        }
        return view('ajax.home.getTrainStation',["trainType"=>$trainType,'station'=>$stationList]);
    }
    public function getTabArea(Request $request)
    {
        $Zone = Zone::select('zone.*')
        ->leftjoin(env('DB_DATABASE_2').'.zone_custom as zone_custom','zone_custom.zone_id','=','zone.zone_id')
        ->where('zone_custom.active_status','=','1')
        ->orderBy('zone_custom.list_order', 'ASC')
        ->orderBy('zone.zone_id', 'ASC')->get();

        $zoneList = [];
        foreach ($Zone as $zoneData) {
            $tempZone = array(
                "zone_id" => $zoneData->zone_id,
                "zone_name" => $zoneData->zone_name_en,
            );
            array_push($zoneList,$tempZone);
        }
        return view('ajax.home.getTabArea',["zone"=>$zoneList]);
    }
    public function getArea(Request $request)
    {
        $area = $request->area;
        $Area = Area::select('area.*','area_custom.area_url_en')
        ->leftjoin(env('DB_DATABASE_2').'.area_custom as area_custom','area_custom.area_id','=','area.area_id')
        ->where('area.zone_id','=',$area)
        ->where('area_custom.active_status','=','1')
        ->orderBy('area_custom.list_order', 'ASC')
        ->get();
        $areaList = [];
        foreach ($Area as $areaData) {
            $tempArea = array(
                "area_name" => $areaData->area_name_en,
                "area_url" => route('area',$areaData->area_url_en),
            );
            array_push($areaList,$tempArea);
        }
        return view('ajax.home.getArea',["area"=>$areaList]);
    }
    public function getTabUniversity(Request $request)
    {
        $University = University::select('university.*','university_custom.university_url_en')
        ->leftjoin(env('DB_DATABASE_2').'.university_custom as university_custom','university_custom.university_id','=','university.university_id')
        ->where('university_custom.active_status','=','1')
        // ->orderBy('university_custom.list_order', 'ASC')
        ->orderBy('university_custom.university_url_en', 'ASC')
        ->get();
        $universityList = [];
        foreach ($University as $universityData) {
            $temp = array(
                "university_name" => $universityData->university_name_en,
                "university_url" => route('university',$universityData->university_url_en),
            );
            array_push($universityList,$temp);
        }
        return view('ajax.home.getTabUniversity',["university"=>$universityList]);
    }
    public function getTabLandmark(Request $request)
    {
        $landmarkType = LandmarkType::select('landmark_type.landmark_type_id','landmark_type.landmark_type_name_en')
        ->where('active_status','=','1')
        ->orderBy('landmark_type_name_en', 'ASC')
        ->get();
        $landmarkList = [];
        foreach ($landmarkType as $landmarkTypeData) {
            $temp = array(
                "landmark_type_id" => $landmarkTypeData->landmark_type_id,
                "landmark_type_name" => $landmarkTypeData->landmark_type_name_en,
            );
            array_push($landmarkList,$temp);
        }
        return view('ajax.home.getTabLandmark',["landmark"=>$landmarkList]);
    }
    public function getLandmark(Request $request)
    {
        $landmark = $request->landmark;
        $landmarkData = Landmark::where('landmark_type_id','=',$landmark)
        ->orderBy('landmark_name_en', 'ASC')->where('active_status','=','1')->get();
        $landmarkList = [];
        foreach ($landmarkData as $data) {
            $temp = array(
                "landmark_name" => $data->landmark_name_en,
                "landmark_url" => route('landmark',[$data->landmark_id,$data->landmark_name_en]),
            );
            array_push($landmarkList,$temp);
        }
        return view('ajax.home.getLandmark',["landmark"=>$landmarkList]);
    }
    public function getShockPost(Request $request)
    {
        $post = Post::select('post.*','condo.condo_name_en','area.area_name')
        ->leftJoin('condo','condo.condo_id','=','post.condo_id')
        ->leftJoin('area','area.area_id','=','condo.area_id')
        ->leftJoin('option_phase','option_phase.id','=','post.post_phase')
        ->whereNull('post.post_delete_datetime')
        ->where('post.post_close','=',0)
        ->where(function ($query)  {
          $query
            ->whereNull('post.post_expire')
            ->orWhere('post.post_expire','>=',date('Y-m-d'));
        })
        ->whereIn('post.post_type',[2,3])
        ->where('post.post_accept_shock','=',1)
        ->orderBy('post.post_datetime','DESC')->limit(8)->get();
        $postList = [];
        foreach ($post as $data) {
            $data = array(
                "image" => getFileUrl( $data->post_image_title , '/' ),
                'condo_name_en' => $data->condo_name_en,
                'area_name' => $data->area_name,
                'post_type' => $data->post_type,
                'post_bed' => $data->post_bed,
                'post_baths' => $data->post_baths,
                'post_area_total' => $data->post_area_total,
                'post_rent_price' => $data->post_rent_price,
                'post_sale_price' => $data->post_sale_price,
                'url' => route('shock'),
            );
            array_push($postList,$data);
        }
        return view('ajax.home.getHomePost',["post"=>$postList]);

    }
    public function getBeautifulPost(Request $request)
    {
        $post = Post::select('post.*','condo.condo_name_en','area.area_name')
        ->leftJoin('condo','condo.condo_id','=','post.condo_id')
        ->leftJoin('area','area.area_id','=','condo.area_id')
        ->leftJoin('option_phase','option_phase.id','=','post.post_phase')
        ->whereNull('post.post_delete_datetime')
        ->where('post.post_close','=',0)
        ->where(function ($query)  {
          $query
            ->whereNull('post.post_expire')
            ->orWhere('post.post_expire','>=',date('Y-m-d'));
        })
        ->where('post.post_accept_beautiful','=',1)
        ->orderBy('post.post_datetime','DESC')->limit(8)->get();

        $postList = [];
        foreach ($post as $data) {
            $data = array(
                "image" => getFileUrl( $data->post_image_title , '/' ),
                'condo_name_en' => $data->condo_name_en,
                'area_name' => $data->area_name,
                'post_type' => $data->post_type,
                'post_bed' => $data->post_bed,
                'post_baths' => $data->post_baths,
                'post_area_total' => $data->post_area_total,
                'post_rent_price' => $data->post_rent_price,
                'post_sale_price' => $data->post_sale_price,
                'url' => route('beautiful'),
            );
            array_push($postList,$data);
        }
        return view('ajax.home.getHomePost',["post"=>$postList]);

    }
    public function getViewPost(Request $request)
    {
        $post = Post::select('post.*','condo.condo_name_en','area.area_name')
        ->leftJoin('condo','condo.condo_id','=','post.condo_id')
        ->leftJoin('area','area.area_id','=','condo.area_id')
        ->leftJoin('option_phase','option_phase.id','=','post.post_phase')
        ->whereNull('post.post_delete_datetime')
        ->where('post.post_close','=',0)
        ->where(function ($query)  {
          $query
            ->whereNull('post.post_expire')
            ->orWhere('post.post_expire','>=',date('Y-m-d'));
        })
        ->where('post.post_accept_view','=',1)
        ->orderBy('post.post_datetime','DESC')->limit(8)->get();

        $postList = [];
        foreach ($post as $data) {
            $data = array(
                "image" => getFileUrl( $data->post_image_title , '/' ),
                'condo_name_en' => $data->condo_name_en,
                'area_name' => $data->area_name,
                'post_type' => $data->post_type,
                'post_bed' => $data->post_bed,
                'post_baths' => $data->post_baths,
                'post_area_total' => $data->post_area_total,
                'post_rent_price' => $data->post_rent_price,
                'post_sale_price' => $data->post_sale_price,
                'url' => route('view'),
            );
            array_push($postList,$data);
        }
        return view('ajax.home.getHomePost',["post"=>$postList]);

    }
    // public function getNews(Request $request)
    // {
    //     $news1 = News::orderBy('news_datetime',"desc")->offset(0)->limit(4)->get();
    //     $newsList1 = [];
    //     foreach ($news1 as $data) {
    //         $temp = array(
    //             'image' => getFileUrl( $data->news_image , '/' ),
    //             'title' => mb_substr(strip_tags(str_replace("&nbsp;"," ",$data->news_title_en)),0,82,"utf-8"),
    //             'detail' => mb_substr(strip_tags(str_replace("&nbsp;"," ",$data->news_description_en)),0,192,"utf-8"),
    //             'url' => route('newsDetail',[$data->id,$data->news_title_en]),
    //             'datetime' => date('d/m/Y',strtotime($data->news_datetime))
    //         );
    //         array_push($newsList1,$temp);
    //     }
    //     $news2 = News::orderBy('news_datetime',"desc")->offset(4)->limit(4)->get();
    //     $newsList2 = [];
    //     foreach ($news2 as $data) {
    //         $temp = array(
    //             'image' => getFileUrl( $data->news_image , '/' ),
    //             'title' => mb_substr(strip_tags(str_replace("&nbsp;"," ",$data->news_title_en)),0,82,"utf-8"),
    //             'detail' => mb_substr(strip_tags(str_replace("&nbsp;"," ",$data->news_description_en)),0,192,"utf-8"),
    //             'url' => route('newsDetail',[$data->id,$data->news_title_en]),
    //             'datetime' => date('d/m/Y',strtotime($data->news_datetime))
    //         );
    //         array_push($newsList2,$temp);
    //     }

    //     $data['news1'] = $newsList1;
    //     $data['news2'] = $newsList2;

    //     return view('ajax_v2.home.getNews',$data);

    // }
    public function getNewsth(Request $request)
    {
        $news1 = News::orderBy('news_datetime',"desc")->offset(0)->limit(4)->get();
        $newsList1 = [];
        foreach ($news1 as $data) {
            $temp = array(
                'image' => getFileUrl( $data->news_image , '/' ),
                'title' => mb_substr(strip_tags(str_replace("&nbsp;"," ",$data->news_title)),0,82,"utf-8"),
                'detail' => mb_substr(strip_tags(str_replace("&nbsp;"," ",$data->news_description)),0,192,"utf-8"),
                'url' => route('newsDetail',[$data->id,$data->news_title_en]),
                'datetime' => date('d/m/Y',strtotime($data->news_datetime))
            );
            array_push($newsList1,$temp);
        }
        $news2 = News::orderBy('news_datetime',"desc")->offset(4)->limit(4)->get();
        $newsList2 = [];
        foreach ($news2 as $data) {
            $temp = array(
                'image' => getFileUrl( $data->news_image , '/' ),
                'title' => mb_substr(strip_tags(str_replace("&nbsp;"," ",$data->news_title)),0,82,"utf-8"),
                'detail' => mb_substr(strip_tags(str_replace("&nbsp;"," ",$data->news_description)),0,192,"utf-8"),
                'url' => route('newsDetail',[$data->id,$data->news_title_en]),
                'datetime' => date('d/m/Y',strtotime($data->news_datetime))
            );
            array_push($newsList2,$temp);
        }

        $data['news1'] = $newsList1;
        $data['news2'] = $newsList2;

        return view('ajax_v2.home.getNewsth',$data);

    }
    public function getNewsen(Request $request)
    {
        $news1 = News::orderBy('news_datetime',"desc")->offset(0)->limit(4)->get();
        $newsList1 = [];
        foreach ($news1 as $data) {
            $temp = array(
                'image' => getFileUrl( $data->news_image , '/' ),
                'title' => mb_substr(strip_tags(str_replace("&nbsp;"," ",$data->news_title_en)),0,82,"utf-8"),
                'detail' => mb_substr(strip_tags(str_replace("&nbsp;"," ",$data->news_description_en)),0,192,"utf-8"),
                'url' => route('newsDetail',[$data->id,$data->news_title_en]),
                'datetime' => date('d/m/Y',strtotime($data->news_datetime))
            );
            array_push($newsList1,$temp);
        }
        $news2 = News::orderBy('news_datetime',"desc")->offset(4)->limit(4)->get();
        $newsList2 = [];
        foreach ($news2 as $data) {
            $temp = array(
                'image' => getFileUrl( $data->news_image , '/' ),
                'title' => mb_substr(strip_tags(str_replace("&nbsp;"," ",$data->news_title_en)),0,82,"utf-8"),
                'detail' => mb_substr(strip_tags(str_replace("&nbsp;"," ",$data->news_description_en)),0,192,"utf-8"),
                'url' => route('newsDetail',[$data->id,$data->news_title_en]),
                'datetime' => date('d/m/Y',strtotime($data->news_datetime))
            );
            array_push($newsList2,$temp);
        }

        $data['news1'] = $newsList1;
        $data['news2'] = $newsList2;

        return view('ajax_v2.home.getNewsen',$data);

    }


    // หน้า area*********** *******************************************************************
        public function area($area_url)
        {
            $area = Zone::select('zone.zone_name','zone.zone_name_en','area.area_name','area.area_name_en','area_custom.area_url_en','area.area_id')
            ->leftjoin(env('DB_DATABASE_2').'.zone_custom as zone_custom','zone_custom.zone_id','=','zone.zone_id')
            ->leftjoin('area','area.zone_id','=','zone.zone_id')
            ->leftjoin(env('DB_DATABASE_2').'.area_custom as area_custom','area_custom.area_id','=','area.area_id')
            ->where('zone_custom.active_status','=','1')
            ->where('area_custom.active_status','=','1')
            ->where('area_custom.area_url_en','=',$area_url)
            ->first();

            if ($area) {
                $data['area_id'] = $area->area_id;
                $data['zone_name'] = $area->zone_name;
                $data['zone_name_en'] = $area->zone_name_en;
                $data['area_name'] = $area->area_name;
                $data['area_name_en'] = $area->area_name_en;
                $data['rent_url'] = route('area',$area_url);
                $data['sale_url'] = route('areaSale',$area_url);

                if (!Route::is('areaSale')) {
                    $data['type'] = 1;
                } else {
                    $data['type'] = 2;
                }

                $areaOption = Area::select('area.area_name_en','area.area_id')
                ->leftjoin(env('DB_DATABASE_2').'.area_custom as area_custom','area_custom.area_id','=','area.area_id')
                ->where('area_custom.active_status','=','1')
                ->get();

                $optionList = [];
                foreach ($areaOption as $row) {
                    $temp = array(
                        "name" => $row->area_name_en,
                        "value" => $row->area_id
                    );
                    array_push($optionList,$temp);
                }

                $data['optionList'] = $optionList;

                // ต้องใส่เพื่อเปลี่ยนภาษา******************************************
                $url = 'https://www.scancondo.com/get/url/area?id='.$area->area_id;
                // $url = 'https://www.eng.scancondo.com/get/url/area?id='.$area->area_id;
                // ถ้า eng มาแก้ตรงนี้ 
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_HTTPGET, true);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response_json = curl_exec($ch);
                curl_close($ch);
                $response=json_decode($response_json, true);    
                $data['url'] = $response['url'];
                // ต้องใส่เพื่อเปลี่ยนภาษา******************************************

                return view('front_v2.area',$data);

            } else {
                return abort(404);
            }
        }
        public function countCondoArea(Request $request,$area_id)
        {

            $condo = Condo::select('condo.*')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->where('condo.delete_status','=','0')
            ->where('condo_custom.active_status','=',1)
            ->where('condo.area_id','=',$area_id)
            ->count();

            return response()->json(['countCondo' => $condo]);
        }
        public function getCondoAreaStep(Request $request,$area_id)
        {
            $step = $request->step;

            $condo = Condo::select("condo.*","condo_custom.condo_url_en")
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->where('condo.delete_status','=','0')
            ->where('condo_custom.active_status','=',1)
            ->where('condo.area_id','=',$area_id)
            ->orderBy('condo_custom.condo_interesting','DESC')->orderBy('condo.condo_name_en','ASC');

            if ($step == 1) {
                $condo = $condo->limit(4);
            } else if ($step == 2) {
                $getLimit = $condo->count();
                $condo = $condo->offset(4)->limit($getLimit);
            }

            $condo = $condo->get();

            $condoList = [];

            foreach ($condo as $data) {
                $temp = array(
                    'image' => getFileUrl( $data->condo_image_tltle , '/' ),
                    'alt' => $data->condo_image_tltle_alt,
                    'condo_name_th' => $data->condo_name_th,
                    'condo_name_en' => $data->condo_name_en,
                    "url" => route('condo',[$data->condo_url_en]),
                );
                array_push($condoList,$temp);
            }

            $data['condo'] = $condoList;

            return view('ajax_v2.components.getCondoStep',$data);

        }
        public function countPostArea(Request $request,$type)
        {

            $area_id = $request->area_id;
            $price_low = $request->price_low;
            $price_high = $request->price_high;
            $post_style = $request->post_style;
            $post_status = $request->post_status;

            $postRent = Condo::select('condo.*','post.*')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->join('post','post.condo_id','=','condo.condo_id')
            ->where('condo.delete_status','=','0')
            ->where('condo_custom.active_status','=',1)
            ->where('condo.area_id','=',$area_id)            
            ->whereNull('post.post_delete_datetime')
            ->where('post.post_close','=',0)
            ->where(function ($query)  {
            $query
                ->whereNull('post.post_expire')
                ->orWhere('post.post_expire','>=',date('Y-m-d'));
            });

            $postSale = Condo::select('condo.*','post.*')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->join('post','post.condo_id','=','condo.condo_id')
            ->where('condo.delete_status','=','0')
            ->where('condo_custom.active_status','=',1)
            ->where('condo.area_id','=',$area_id)
            ->whereNull('post.post_delete_datetime')
            ->where('post.post_close','=',0)
            ->where(function ($query)  {
            $query
                ->whereNull('post.post_expire')
                ->orWhere('post.post_expire','>=',date('Y-m-d'));
            });

            if ($type == 1) {

                $postSale = $postSale->whereIn('post.post_type',[2,3])->count();

                if ($price_low != "") {
                    $postRent = $postRent->where('post.post_rent_price','>=',$price_low);
                }

                if ($price_high != "") {
                    $postRent = $postRent->where('post.post_rent_price','<=',$price_high);
                }

                if ($post_style != "") {
                    $postRent = $postRent->where('post.post_bed','=',$post_style);
                }

                if ($post_status!= "") {
                    $postRent = $postRent->where('post.post_status_rent','=',$post_status);
                }

                $postRent = $postRent->whereIn('post.post_type',[1,3])
                ->where('post.post_rent_price','>=',env('MINRENT'))
                ->count();

                $pagination = ceil( $postRent / 25 );

            }

            if ($type == 2) {

                $postRent = $postRent->whereIn('post.post_type',[1,3])->count();

                if ($price_low != "") {
                    $postSale = $postSale->where('post.post_sale_price','>=',$price_low);
                }

                if ($price_high != "") {
                    $postSale = $postSale->where('post.post_sale_price','<=',$price_high);
                }

                if ($post_style != "") {
                    $postSale = $postSale->where('post.post_bed','=',$post_style);
                }

                if ($post_status!= "") {
                    $postSale = $postSale->where('post.post_status_sale','=',$post_status);
                }

                $postSale = $postSale->whereIn('post.post_type',[2,3])->count();

                $pagination = ceil( $postSale / 25 );

            }

            $data['postRent'] = number_format($postRent);
            $data['postSale'] = number_format($postSale);
            $data['pagination'] = $pagination;

            return response()->json($data);

        }
        public function getPostAreaEN(Request $request,$type)
        {
            $area_id = $request->area_id;
            $price_low = $request->price_low;
            $price_high = $request->price_high;
            $post_style = $request->post_style;
            $page = $request->page;
            $post_status = $request->post_status;

            $offset = ($page - 1) * 25;


            $postPin = Condo::select('condo.*','post.*',"condo_custom.condo_url_en")
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->join('post','post.condo_id','=','condo.condo_id')
            ->where('condo.delete_status','=','0')
            ->where('condo_custom.active_status','=',1)
            ->where('condo.area_id','=',$area_id)
            ->whereNull('post.post_delete_datetime')
            ->where('post.post_close','=',0)
            ->where(function ($query)  {
            $query
                ->whereNull('post.post_expire')
                ->orWhere('post.post_expire','>=',date('Y-m-d'));
            });

            $postNormal = Condo::select('condo.*','post.*',"condo_custom.condo_url_en")
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->join('post','post.condo_id','=','condo.condo_id')
            ->where('condo.delete_status','=','0')
            ->where('condo_custom.active_status','=',1)
            ->where('condo.area_id','=',$area_id)
            ->whereNull('post.post_delete_datetime') 
            ->where('post.post_close','=',0)
            ->where(function ($query)  {
            $query
                ->whereNull('post.post_expire')
                ->orWhere('post.post_expire','>=',date('Y-m-d'));
            });

            if ($type == 1) {

                if ($price_low != "") {
                    $postPin = $postPin->where('post.post_rent_price','>=',$price_low);
                    $postNormal = $postNormal->where('post.post_rent_price','>=',$price_low);
                }

                if ($price_high != "") {
                    $postPin = $postPin->where('post.post_rent_price','<=',$price_high);
                    $postNormal = $postNormal->where('post.post_rent_price','<=',$price_high);
                }

                if ($post_status != "") {
                    $postPin = $postPin->where('post.post_status_rent','=',$post_status);
                    $postNormal = $postNormal->where('post.post_status_rent','=',$post_status);
                }

                if ($post_style != "") {
                    $postPin = $postPin->where('post.post_bed','=',$post_style);
                    $postNormal = $postNormal->where('post.post_bed','=',$post_style);
                }


                $postPin = $postPin->whereIn('post.post_type',[1,3])
                ->where('post.post_rent_price','>=',env('MINRENT'))
                ->orderBy('post.action_datetime','DESC')->orderBy('post.post_status_rent','DESC');
                $postNormal = $postNormal->whereIn('post.post_type',[1,3])
                ->where('post.post_rent_price','>=',env('MINRENT'))
                ->orderBy('post.post_status_rent','DESC')->orderBy('post.action_datetime','DESC');

            }

            if ($type == 2) {

                if ($price_low != "") {
                    $postPin = $postPin->where('post.post_sale_price','>=',$price_low);
                    $postNormal = $postNormal->where('post.post_sale_price','>=',$price_low);
                }

                if ($price_high != "") {
                    $postPin = $postPin->where('post.post_sale_price','<=',$price_high);
                    $postNormal = $postNormal->where('post.post_sale_price','<=',$price_high);
                }

                if ($post_style != "") {
                    $postPin = $postPin->where('post.post_bed','=',$post_style);
                    $postNormal = $postNormal->where('post.post_bed','=',$post_style);
                }

                if ($post_status != "") {
                    $postPin = $postPin->where('post.post_status_sale','=',$post_status);
                    $postNormal = $postNormal->where('post.post_status_sale','=',$post_status);
                }


                $postPin = $postPin->whereIn('post.post_type',[2,3])
                ->orderBy('post.action_datetime','DESC')->orderBy('post.post_status_sale','DESC');
                $postNormal = $postNormal->whereIn('post.post_type',[2,3])
                ->orderBy('post.post_status_sale','DESC')->orderBy('post.action_datetime','DESC');

            }


            $postPin = $postPin
            ->whereNotNull('post_accept_pin')
            ->limit(0)->get();

            $postNormal = $postNormal
            ->orderBy('post.id','DESC')        
            ->orderBy('post_accept_pin','DESC')
            ->limit(25)->offset($offset)->get();


            $pinList = [];
            foreach ($postPin as $postData) {
                if ($type == 1) {
                    $post_price = $postData->post_rent_price;
                    $post_status = $postData->post_status_rent;
                    $post_url = route('rent',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                } else if ($type == 2) {
                    $post_price = $postData->post_sale_price;
                    $post_status = $postData->post_status_sale;
                    $post_url = route('sale',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                }
                $tempPin = array(
                    'post_id' => $postData->id,
                    'post_no' => $postData->post_no,
                    'post_type' => $postData->post_type,
                    'post_bed' => $postData->post_bed,
                    'post_baths' => $postData->post_baths,
                    'post_building' => $postData->post_building,
                    'post_phase' => $postData->post_phase,
                    'post_floor' => $postData->post_floor,
                    'post_image' => getFileUrl( $postData->post_image_title , '/' ),
                    'post_type' => $type,
                    'post_area_total' => $postData->post_area_total,
                    'post_price' => $post_price,
                    'post_header' => $postData->post_header_en,
                    'condo_image' => getFileUrl( $postData->condo_image_tltle , '/' ),
                    'condo_name' => $postData->condo_name_en,
                    'condo_url' => route('condo',[$postData->condo_url_en]),
                    'condo_alt' => $postData->condo_image_tltle_alt,
                    'post_url' => $post_url,
                    'post_status' => $post_status,
                    'action_datetime'=> $postData->action_datetime,
                    'post_contract_expire'=> $postData->post_contract_expire,
                );
                array_push($pinList,$tempPin);
            }

            $normalList = [];
            foreach ($postNormal as $postData) {
                if ($type == 1) {
                    $post_price = $postData->post_rent_price;
                    $post_status = $postData->post_status_rent;
                    $post_url = route('rent',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                } else if ($type == 2) {
                    $post_price = $postData->post_sale_price;
                    $post_status = $postData->post_status_sale;
                    $post_url = route('sale',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                }
                $tempNormal = array(
                    'post_id' => $postData->id,
                    'post_no' => $postData->post_no,
                    'post_type' => $postData->post_type,
                    'post_bed' => $postData->post_bed,
                    'post_baths' => $postData->post_baths,
                    'post_building' => $postData->post_building,
                    'post_phase' => $postData->post_phase,
                    'post_floor' => $postData->post_floor,
                    'post_image' => getFileUrl( $postData->post_image_title , '/' ),
                    'post_type' => $type,
                    'post_area_total' => $postData->post_area_total,
                    'post_price' => $post_price,
                    'post_header' => $postData->post_header_en,
                    'condo_image' => getFileUrl( $postData->condo_image_tltle , '/' ),
                    'condo_name' => $postData->condo_name_en,
                    'condo_url' => route('condo',[$postData->condo_url_en]),
                    'condo_alt' => $postData->condo_image_tltle_alt,
                    'post_url' => $post_url,
                    'post_status' => $post_status,
                    'action_datetime'=> $postData->action_datetime,
                    'post_contract_expire'=> $postData->post_contract_expire,
                );
                array_push($normalList,$tempNormal);
            }

            $data['pinList'] = $pinList;
            $data['normalList'] = $normalList;

            if ($type == 1) {
                return view('ajax_v2.components.en.getPostRentArea',$data);
            } else if ($type == 2) {
                return view('ajax_v2.components.en.getPostSaleArea',$data);
            }
        }
        public function getPostAreaTH(Request $request,$type)
        {
            $area_id = $request->area_id;
            $price_low = $request->price_low;
            $price_high = $request->price_high;
            $post_style = $request->post_style;
            $page = $request->page;
            $post_status = $request->post_status;

            $offset = ($page - 1) * 25;


            $postPin = Condo::select('condo.*','post.*',"condo_custom.condo_url_en")
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->join('post','post.condo_id','=','condo.condo_id')
            ->where('condo.delete_status','=','0')
            ->where('condo_custom.active_status','=',1)
            ->where('condo.area_id','=',$area_id)
            ->whereNull('post.post_delete_datetime')
            ->where('post.post_close','=',0)
            ->where(function ($query)  {
            $query
                ->whereNull('post.post_expire')
                ->orWhere('post.post_expire','>=',date('Y-m-d'));
            });

            $postNormal = Condo::select('condo.*','post.*',"condo_custom.condo_url_en")
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->join('post','post.condo_id','=','condo.condo_id')
            ->where('condo.delete_status','=','0')
            ->where('condo_custom.active_status','=',1)
            ->where('condo.area_id','=',$area_id)
            ->whereNull('post.post_delete_datetime') 
            ->where('post.post_close','=',0)
            ->where(function ($query)  {
            $query
                ->whereNull('post.post_expire')
                ->orWhere('post.post_expire','>=',date('Y-m-d'));
            });

            if ($type == 1) {

                if ($price_low != "") {
                    $postPin = $postPin->where('post.post_rent_price','>=',$price_low);
                    $postNormal = $postNormal->where('post.post_rent_price','>=',$price_low);
                }

                if ($price_high != "") {
                    $postPin = $postPin->where('post.post_rent_price','<=',$price_high);
                    $postNormal = $postNormal->where('post.post_rent_price','<=',$price_high);
                }

                if ($post_status != "") {
                    $postPin = $postPin->where('post.post_status_rent','=',$post_status);
                    $postNormal = $postNormal->where('post.post_status_rent','=',$post_status);
                }

                if ($post_style != "") {
                    $postPin = $postPin->where('post.post_bed','=',$post_style);
                    $postNormal = $postNormal->where('post.post_bed','=',$post_style);
                }


                $postPin = $postPin->whereIn('post.post_type',[1,3])
                ->where('post.post_rent_price','>=',env('MINRENT'))
                ->orderBy('post.action_datetime','DESC')->orderBy('post.post_status_rent','DESC');
                $postNormal = $postNormal->whereIn('post.post_type',[1,3])
                ->where('post.post_rent_price','>=',env('MINRENT'))
                ->orderBy('post.post_status_rent','DESC')->orderBy('post.action_datetime','DESC');

            }

            if ($type == 2) {

                if ($price_low != "") {
                    $postPin = $postPin->where('post.post_sale_price','>=',$price_low);
                    $postNormal = $postNormal->where('post.post_sale_price','>=',$price_low);
                }

                if ($price_high != "") {
                    $postPin = $postPin->where('post.post_sale_price','<=',$price_high);
                    $postNormal = $postNormal->where('post.post_sale_price','<=',$price_high);
                }

                if ($post_style != "") {
                    $postPin = $postPin->where('post.post_bed','=',$post_style);
                    $postNormal = $postNormal->where('post.post_bed','=',$post_style);
                }

                if ($post_status != "") {
                    $postPin = $postPin->where('post.post_status_sale','=',$post_status);
                    $postNormal = $postNormal->where('post.post_status_sale','=',$post_status);
                }


                $postPin = $postPin->whereIn('post.post_type',[2,3])
                ->orderBy('post.action_datetime','DESC')->orderBy('post.post_status_sale','DESC');
                $postNormal = $postNormal->whereIn('post.post_type',[2,3])
                ->orderBy('post.post_status_sale','DESC')->orderBy('post.action_datetime','DESC');

            }


            $postPin = $postPin
            ->whereNotNull('post_accept_pin')
            ->limit(0)->get();

            $postNormal = $postNormal
            ->orderBy('post.id','DESC')        
            ->orderBy('post_accept_pin','DESC')
            ->limit(25)->offset($offset)->get();


            $pinList = [];
            foreach ($postPin as $postData) {
                if ($type == 1) {
                    $post_price = $postData->post_rent_price;
                    $post_status = $postData->post_status_rent;
                    $post_url = route('rent',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                } else if ($type == 2) {
                    $post_price = $postData->post_sale_price;
                    $post_status = $postData->post_status_sale;
                    $post_url = route('sale',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                }
                $tempPin = array(
                    'post_id' => $postData->id,
                    'post_no' => $postData->post_no,
                    'post_type' => $postData->post_type,
                    'post_bed' => $postData->post_bed,
                    'post_baths' => $postData->post_baths,
                    'post_building' => $postData->post_building,
                    'post_phase' => $postData->post_phase,
                    'post_floor' => $postData->post_floor,
                    'post_image' => getFileUrl( $postData->post_image_title , '/' ),
                    'post_type' => $type,
                    'post_area_total' => $postData->post_area_total,
                    'post_price' => $post_price,
                    'post_header' => $postData->post_header_en,
                    'condo_image' => getFileUrl( $postData->condo_image_tltle , '/' ),
                    'condo_name' => $postData->condo_name_en,
                    'condo_url' => route('condo',[$postData->condo_url_en]),
                    'condo_alt' => $postData->condo_image_tltle_alt,
                    'post_url' => $post_url,
                    'post_status' => $post_status,
                    'action_datetime'=> $postData->action_datetime,
                    'post_contract_expire'=> $postData->post_contract_expire,
                );
                array_push($pinList,$tempPin);
            }

            $normalList = [];
            foreach ($postNormal as $postData) {
                if ($type == 1) {
                    $post_price = $postData->post_rent_price;
                    $post_status = $postData->post_status_rent;
                    $post_url = route('rent',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                } else if ($type == 2) {
                    $post_price = $postData->post_sale_price;
                    $post_status = $postData->post_status_sale;
                    $post_url = route('sale',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                }
                $tempNormal = array(
                    'post_id' => $postData->id,
                    'post_no' => $postData->post_no,
                    'post_type' => $postData->post_type,
                    'post_bed' => $postData->post_bed,
                    'post_baths' => $postData->post_baths,
                    'post_building' => $postData->post_building,
                    'post_phase' => $postData->post_phase,
                    'post_floor' => $postData->post_floor,
                    'post_image' => getFileUrl( $postData->post_image_title , '/' ),
                    'post_type' => $type,
                    'post_area_total' => $postData->post_area_total,
                    'post_price' => $post_price,
                    'post_header' => $postData->post_header_en,
                    'condo_image' => getFileUrl( $postData->condo_image_tltle , '/' ),
                    'condo_name' => $postData->condo_name_en,
                    'condo_url' => route('condo',[$postData->condo_url_en]),
                    'condo_alt' => $postData->condo_image_tltle_alt,
                    'post_url' => $post_url,
                    'post_status' => $post_status,
                    'action_datetime'=> $postData->action_datetime,
                    'post_contract_expire'=> $postData->post_contract_expire,
                );
                array_push($normalList,$tempNormal);
            }

            $data['pinList'] = $pinList;
            $data['normalList'] = $normalList;

            if ($type == 1) {
                return view('ajax_v2.components.th.getPostRentArea',$data);
            } else if ($type == 2) {
                return view('ajax_v2.components.th.getPostSaleArea',$data);
            }
        }
    // ****************************************************************************************
    // หน้า station ****************************************************************************
        public function station($train_station_url_en)
        {
            $station = TrainStation::select('train_station.*','train_type.train_type_sub','train_type.train_type_name','train_type.train_type_name_en')
            ->leftjoin(env('DB_DATABASE_2').'.train_station_custom as train_station_custom','train_station_custom.train_station_id','=','train_station.train_station_id')
            ->leftjoin('train_type','train_type.train_type_id','=','train_station.train_type_id')
            ->where('train_station_custom.active_status','=','1')
            ->where('train_station_custom.train_station_url_en','=',$train_station_url_en)->first();
            if ($station) {
                $data['train_station_id'] = $station->train_station_id;
                $data['train_type_sub'] = $station->train_type_sub;
                $data['train_type_name'] = $station->train_type_name;
                $data['train_station_name'] = $station->train_station_name;
                $data['train_station_name_en'] = $station->train_station_name_en;
                $data['train_type_name_en'] = $station->train_type_name_en;
                $data['rent_url'] = route('station',$train_station_url_en);
                $data['sale_url'] = route('stationSale',$train_station_url_en);

                if (!Route::is('stationSale')) {
                    $data['type'] = 1;
                } else {
                    $data['type'] = 2;
                }

                $data['station_id'] = $station->train_station_id;

                $trainOption = TrainType::select('train_station.train_station_id','train_type.train_type_sub','train_type.train_type_name_en','train_station.train_station_name_en')
                ->leftjoin(env('DB_DATABASE_2').'.train_type_custom as train_type_custom','train_type_custom.train_type_id','=','train_type.train_type_id')
                ->leftjoin('train_station','train_type.train_type_id','=','train_station.train_type_id')
                ->leftjoin(env('DB_DATABASE_2').'.train_station_custom as train_station_custom','train_station_custom.train_station_id','=','train_station.train_station_id')
                ->where('train_type_custom.active_status','=','1')
                ->where('train_station_custom.active_status','=','1')
                ->orderBy('train_type_custom.list_order', 'ASC')
                ->orderBy('train_station_custom.list_order', 'ASC')->get();

                $optionList = [];
                foreach ($trainOption as $row) {
                    $temp = array(
                        "name" => $row->train_type_sub." ".$row->train_type_name_en." - ".$row->train_station_name_en,
                        "value" => $row->train_station_id
                    );
                    array_push($optionList,$temp);
                }

                $data['optionList'] = $optionList;
                // ต้องใส่เพื่อเปลี่ยนภาษา******************************************
                $url = 'https://www.scancondo.com/get/url/train?id='.$station->train_station_id;
                // $url = 'https://www.scancondo.com/demo/get/url/train?id='.$station->train_station_id;
                // $url = 'https://www.eng.scancondo.com/get/url/area?id='.$area->area_id;
                // ถ้า eng มาแก้ตรงนี้ 
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_HTTPGET, true);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response_json = curl_exec($ch);
                curl_close($ch);
                $response=json_decode($response_json, true);    
                $data['url'] = $response['url'];
                // ต้องใส่เพื่อเปลี่ยนภาษา******************************************
                return view('front_v2.station',$data);

            } else {
                return abort(404);
            }
        } 
        public function countCondoStation(Request $request,$train_station_id)
        {
            $TrainCondo = TrainCondo::select("train_condo.*")
            ->join('condo','condo.condo_id','=','train_condo.condo_id')
            ->join('train_station','train_station.train_station_id','=','train_condo.train_station_id')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->where('train_condo.train_station_id','=',$train_station_id)
            ->where('condo.delete_status','=',0)->where('condo_custom.active_status','=',1)
            ->count();
            return response()->json(['countCondo' => $TrainCondo]);
        } 
        public function getCondoStationStep(Request $request,$train_station_id)
        {
            $step = $request->step;
    
            $TrainCondo = TrainCondo::select("condo.*","condo_custom.condo_url_en")
            ->join('condo','condo.condo_id','=','train_condo.condo_id')
            ->join('train_station','train_station.train_station_id','=','train_condo.train_station_id')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->where('train_condo.train_station_id','=',$train_station_id)
            ->where('condo.delete_status','=',0)
            ->where('condo_custom.active_status','=',1)
            ->orderBy('condo_custom.condo_interesting','DESC')
            ->orderBy('condo.condo_name_en','ASC');
    
            if ($step == 1) {
                // $TrainCondo = $TrainCondo->limit(9);
                $TrainCondo = $TrainCondo->limit(4);
            } else if ($step == 2) {
                $getLimit = $TrainCondo->count();
                // $TrainCondo = $TrainCondo->offset(9)->limit($getLimit);
                $TrainCondo = $TrainCondo->offset(4)->limit($getLimit);
            }
    
            $TrainCondo = $TrainCondo->get();
    
            $condoList = [];
    
            foreach ($TrainCondo as $data) {
                $temp = array(
                    'image' => getFileUrl( $data->condo_image_tltle , '/' ),
                    'alt' => $data->condo_image_tltle_alt,
                    'condo_name_th' => $data->condo_name_th,
                    'condo_name_en' => $data->condo_name_en,
                    "url" => route('condo',[$data->condo_url_en]),
                );
                array_push($condoList,$temp);
            }
    
            $data['condo'] = $condoList;
    
            return view('ajax.components.getCondoStep',$data);
    
        }
        public function countPostStation(Request $request,$type)
        {
    
            $station_id = $request->station_id;
            $price_low = $request->price_low;
            $price_high = $request->price_high;
            $post_style = $request->post_style;
            $post_status = $request->post_status;
    
            $postRent = TrainCondo::select('condo.*','post.*')
            ->join('condo','condo.condo_id','=','train_condo.condo_id')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->join('post','post.condo_id','=','condo.condo_id')
            ->where('condo_custom.active_status','=',1)
            ->where('train_condo.train_station_id','=',$station_id)
            ->whereNull('post.post_delete_datetime')
            ->where('post.post_close','=',0)
            ->where(function ($query)  {
              $query
                ->whereNull('post.post_expire')
                ->orWhere('post.post_expire','>=',date('Y-m-d'));
            });
    
            $postSale = TrainCondo::select('condo.*','post.*')
            ->join('condo','condo.condo_id','=','train_condo.condo_id')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->join('post','post.condo_id','=','condo.condo_id')
            ->where('condo_custom.active_status','=',1)
            ->where('train_condo.train_station_id','=',$station_id)
            ->whereNull('post.post_delete_datetime')
            ->where('post.post_close','=',0)
            ->where(function ($query)  {
              $query
                ->whereNull('post.post_expire')
                ->orWhere('post.post_expire','>=',date('Y-m-d'));
            });
    
            if ($type == 1) {
    
                $postSale = $postSale->whereIn('post.post_type',[2,3])->count();
    
                if ($price_low != "") {
                    $postRent = $postRent->where('post.post_rent_price','>=',$price_low);
                }
    
                if ($price_high != "") {
                    $postRent = $postRent->where('post.post_rent_price','<=',$price_high);
                }
    
                if ($post_style != "") {
                    $postRent = $postRent->where('post.post_bed','=',$post_style);
                }
    
                if ($post_status != "") {
                    $postRent = $postRent->where('post.post_status_rent','=',$post_status);
                }
    
                // $postRent = $postRent->whereIn('post.post_type',[1,3])->count();
                $postRent = $postRent->whereIn('post.post_type',[1,3])
                ->where('post.post_rent_price','>=',env('MINRENT'))
                ->count();
                
    
                $pagination = ceil( $postRent / 25 );
    
            }
    
            if ($type == 2) {
    
                $postRent = $postRent->whereIn('post.post_type',[1,3])->count();
    
                if ($price_low != "") {
                    $postSale = $postSale->where('post.post_sale_price','>=',$price_low);
                }
    
                if ($price_high != "") {
                    $postSale = $postSale->where('post.post_sale_price','<=',$price_high);
                }
    
                if ($post_style != "") {
                    $postSale = $postSale->where('post.post_bed','=',$post_style);
                }
    
                if ($post_status!= "") {
                    $postSale = $postSale->where('post.post_status_sale','=',$post_status);
                }
    
                $postSale = $postSale->whereIn('post.post_type',[2,3])->count();
    
                $pagination = ceil( $postSale / 25 );
    
            }
    
            $data['postRent'] = number_format($postRent);
            $data['postSale'] = number_format($postSale);
            $data['pagination'] = $pagination;
    
            return response()->json($data);
    
        }
        public function getPostStationTH(Request $request,$type)
        {
            $station_id = $request->station_id;
            $price_low = $request->price_low;
            $price_high = $request->price_high;
            $post_style = $request->post_style;
            $post_status = $request->post_status;
            $page = $request->page;
    
            $offset = ($page - 1) * 25;
    
            $postPin = TrainCondo::select('condo.condo_image_tltle','condo.condo_image_tltle_alt','condo.condo_name_en','condo_custom.condo_url_en','post.*')
            ->join('condo','condo.condo_id','=','train_condo.condo_id')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->join('post','post.condo_id','=','condo.condo_id')
            ->where('condo_custom.active_status','=',1)
            ->where('train_condo.train_station_id','=',$station_id)
            ->whereNull('post.post_delete_datetime')
            ->where('post.post_close','=',0)
            ->where(function ($query)  {
              $query
                
                ->whereNull('post.post_expire')
                ->orWhere('post.post_expire','>=',date('Y-m-d'));
            });
    
            $postNormal = TrainCondo::select('condo.condo_image_tltle','condo.condo_image_tltle_alt','condo.condo_name_en','condo_custom.condo_url_en','post.*')
            ->join('condo','condo.condo_id','=','train_condo.condo_id')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->join('post','post.condo_id','=','condo.condo_id')
            ->where('condo_custom.active_status','=',1)
            ->where('train_condo.train_station_id','=',$station_id)
            ->whereNull('post.post_delete_datetime')
            ->where('post.post_close','=',0)
            ->where(function ($query)  {
              $query
              
                ->whereNull('post.post_expire')
                ->orWhere('post.post_expire','>=',date('Y-m-d'));
            });
    
            if ($type == 1) {
    
                if ($price_low != "") {
                    $postPin = $postPin->where('post.post_rent_price','>=',$price_low);
                    $postNormal = $postNormal->where('post.post_rent_price','>=',$price_low);
                }
    
                if ($price_high != "") {
                    $postPin = $postPin->where('post.post_rent_price','<=',$price_high);
                    $postNormal = $postNormal->where('post.post_rent_price','<=',$price_high);
                }
    
                if ($post_style != "") {
                    $postPin = $postPin->where('post.post_bed','=',$post_style);
                    $postNormal = $postNormal->where('post.post_bed','=',$post_style);
                }
    
                if ($post_status != "") {
                    $postPin = $postPin->where('post.post_status_rent','=',$post_status)
                    ;
                    $postNormal= $postNormal->where('post.post_status_rent','=',$post_status)
                    ;
                }
    
                // $postPin = $postPin->whereIn('post.post_type',[1,3])->orderBy('post_status_rent','DESC');
                // $postNormal = $postNormal->whereIn('post.post_type',[1,3])->orderBy('post_status_rent','DESC');
                $postPin = $postPin->whereIn('post.post_type',[1,3])
                ->where('post.post_rent_price','>=',env('MINRENT'))
                ->orderBy('post.action_datetime','DESC')->orderBy('post.post_status_rent','DESC');
                $postNormal = $postNormal->whereIn('post.post_type',[1,3])
                ->where('post.post_rent_price','>=',env('MINRENT'))
                ->orderBy('post.post_status_rent','DESC')->orderBy('post.action_datetime','DESC');
    
            }
    
            if ($type == 2) {
    
                if ($price_low != "") {
                    $postPin = $postPin->where('post.post_sale_price','>=',$price_low);
                    $postNormal = $postNormal->where('post.post_sale_price','>=',$price_low);
                }
    
                if ($price_high != "") {
                    $postPin = $postPin->where('post.post_sale_price','<=',$price_high);
                    $postNormal = $postNormal->where('post.post_sale_price','<=',$price_high);
                }
    
                if ($post_style != "") {
                    $postPin = $postPin->where('post.post_bed','=',$post_style);
                    $postNormal = $postNormal->where('post.post_bed','=',$post_style);
                }
    
                if ($post_status != "") {
                    $postPin = $postPin->where('post.post_status_sale','=',$post_status)
                    ;
                    $postNormal = $postNormal->where('post.post_status_sale','=',$post_status)
                    ;
                }
    
    
                $postPin = $postPin->whereIn('post.post_type',[2,3])
                ->orderBy('post.action_datetime','DESC')->orderBy('post.post_status_sale','DESC');
                $postNormal = $postNormal->whereIn('post.post_type',[2,3])
                ->orderBy('post.post_status_sale','DESC')->orderBy('post.action_datetime','DESC');
    
            }
    
    
            $postPin = $postPin
            ->whereNotNull('post_accept_pin')
            ->orderBy('post.updated_at','DESC')        
            ->orderBy('post_accept_pin','DESC')
            ->limit(0)->get();
    
            $postNormal = $postNormal
            ->orderBy('post.updated_at','DESC')        
            ->orderBy('post_accept_pin','DESC')
            ->limit(25)->offset($offset)->get();
    
            $pinList = [];
            foreach ($postPin as $postData) {
                if ($type == 1) {
                    $post_price = $postData->post_rent_price;
                    $post_status = $postData->post_status_rent;                
                    $post_url = route('rent',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                } else if ($type == 2) {
                    $post_price = $postData->post_sale_price;
                    $post_status = $postData->post_status_sale;
                    $post_url = route('sale',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                }
                $tempPin = array(
                    'post_id' => $postData->id,
                    'post_no' => $postData->post_no,
                    'post_type' => $postData->post_type,
                    'post_bed' => $postData->post_bed,
                    'post_baths' => $postData->post_baths,
                    'post_building' => $postData->post_building,
                    'post_phase' => $postData->post_phase,
                    'post_floor' => $postData->post_floor,
                    'post_image' => getFileUrl( $postData->post_image_title , '/' ),
                    'post_type' => $type,
                    'post_area_total' => $postData->post_area_total,
                    'post_price' => $post_price,
                    'post_header' => $postData->post_header_en,
                    'condo_image' => getFileUrl( $postData->condo_image_tltle , '/' ),
                    'condo_name' => $postData->condo_name_en,
                    'condo_url' => route('condo',[$postData->condo_url_en]),
                    'condo_alt' => $postData->condo_image_tltle_alt,
                    'post_url' => $post_url,
                    'post_status' => $post_status,
                    'action_datetime'=> $postData->action_datetime,
                    'post_contract_expire'=> $postData->post_contract_expire,
                );
                array_push($pinList,$tempPin);
            }
    
            $normalList = [];
            foreach ($postNormal as $postData) {
                if ($type == 1) {
                    $post_price = $postData->post_rent_price;
                    $post_status = $postData->post_status_rent;
                    $post_url = route('rent',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                } else if ($type == 2) {
                    $post_price = $postData->post_sale_price;
                    $post_status = $postData->post_status_sale;
                    $post_url = route('sale',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                }
                $tempNormal = array(
                    'post_id' => $postData->id,
                    'post_no' => $postData->post_no,
                    'post_type' => $postData->post_type,
                    'post_bed' => $postData->post_bed,
                    'post_baths' => $postData->post_baths,
                    'post_building' => $postData->post_building,
                    'post_phase' => $postData->post_phase,
                    'post_floor' => $postData->post_floor,
                    'post_image' => getFileUrl( $postData->post_image_title , '/' ),
                    'post_type' => $type,
                    'post_area_total' => $postData->post_area_total,
                    'post_price' => $post_price,
                    'post_header' => $postData->post_header_en,
                    'condo_image' => getFileUrl( $postData->condo_image_tltle , '/' ),
                    'condo_name' => $postData->condo_name_en,
                    'condo_url' => route('condo',[$postData->condo_url_en]),
                    'condo_alt' => $postData->condo_image_tltle_alt,
                    'post_url' => $post_url,
                    'post_status' => $post_status,
                    'action_datetime'=> $postData->action_datetime,
                    'post_contract_expire'=> $postData->post_contract_expire,
                );
                array_push($normalList,$tempNormal);
            }
    
            $data['pinList'] = $pinList;
            $data['normalList'] = $normalList;
    
            if ($type == 1) {
                return view('ajax_v2.components.th.getPostRentArea',$data);
            } else if ($type == 2) {
                return view('ajax_v2.components.th.getPostSaleArea',$data);
            }
        }
        public function getPostStationEN(Request $request,$type)
        {
            $station_id = $request->station_id;
            $price_low = $request->price_low;
            $price_high = $request->price_high;
            $post_style = $request->post_style;
            $post_status = $request->post_status;
            $page = $request->page;
    
            $offset = ($page - 1) * 25;
    
            $postPin = TrainCondo::select('condo.condo_image_tltle','condo.condo_image_tltle_alt','condo.condo_name_en','condo_custom.condo_url_en','post.*')
            ->join('condo','condo.condo_id','=','train_condo.condo_id')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->join('post','post.condo_id','=','condo.condo_id')
            ->where('condo_custom.active_status','=',1)
            ->where('train_condo.train_station_id','=',$station_id)
            ->whereNull('post.post_delete_datetime')
            ->where('post.post_close','=',0)
            ->where(function ($query)  {
              $query
                
                ->whereNull('post.post_expire')
                ->orWhere('post.post_expire','>=',date('Y-m-d'));
            });
    
            $postNormal = TrainCondo::select('condo.condo_image_tltle','condo.condo_image_tltle_alt','condo.condo_name_en','condo_custom.condo_url_en','post.*')
            ->join('condo','condo.condo_id','=','train_condo.condo_id')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->join('post','post.condo_id','=','condo.condo_id')
            ->where('condo_custom.active_status','=',1)
            ->where('train_condo.train_station_id','=',$station_id)
            ->whereNull('post.post_delete_datetime')
            ->where('post.post_close','=',0)
            ->where(function ($query)  {
              $query
              
                ->whereNull('post.post_expire')
                ->orWhere('post.post_expire','>=',date('Y-m-d'));
            });
    
            if ($type == 1) {
    
                if ($price_low != "") {
                    $postPin = $postPin->where('post.post_rent_price','>=',$price_low);
                    $postNormal = $postNormal->where('post.post_rent_price','>=',$price_low);
                }
    
                if ($price_high != "") {
                    $postPin = $postPin->where('post.post_rent_price','<=',$price_high);
                    $postNormal = $postNormal->where('post.post_rent_price','<=',$price_high);
                }
    
                if ($post_style != "") {
                    $postPin = $postPin->where('post.post_bed','=',$post_style);
                    $postNormal = $postNormal->where('post.post_bed','=',$post_style);
                }
    
                if ($post_status != "") {
                    $postPin = $postPin->where('post.post_status_rent','=',$post_status)
                    ;
                    $postNormal= $postNormal->where('post.post_status_rent','=',$post_status)
                    ;
                }
    
                // $postPin = $postPin->whereIn('post.post_type',[1,3])->orderBy('post_status_rent','DESC');
                // $postNormal = $postNormal->whereIn('post.post_type',[1,3])->orderBy('post_status_rent','DESC');
                $postPin = $postPin->whereIn('post.post_type',[1,3])
                ->where('post.post_rent_price','>=',env('MINRENT'))
                ->orderBy('post.action_datetime','DESC')->orderBy('post.post_status_rent','DESC');
                $postNormal = $postNormal->whereIn('post.post_type',[1,3])
                ->where('post.post_rent_price','>=',env('MINRENT'))
                ->orderBy('post.post_status_rent','DESC')->orderBy('post.action_datetime','DESC');
    
            }
    
            if ($type == 2) {
    
                if ($price_low != "") {
                    $postPin = $postPin->where('post.post_sale_price','>=',$price_low);
                    $postNormal = $postNormal->where('post.post_sale_price','>=',$price_low);
                }
    
                if ($price_high != "") {
                    $postPin = $postPin->where('post.post_sale_price','<=',$price_high);
                    $postNormal = $postNormal->where('post.post_sale_price','<=',$price_high);
                }
    
                if ($post_style != "") {
                    $postPin = $postPin->where('post.post_bed','=',$post_style);
                    $postNormal = $postNormal->where('post.post_bed','=',$post_style);
                }
    
                if ($post_status != "") {
                    $postPin = $postPin->where('post.post_status_sale','=',$post_status)
                    ;
                    $postNormal = $postNormal->where('post.post_status_sale','=',$post_status)
                    ;
                }
    
    
                $postPin = $postPin->whereIn('post.post_type',[2,3])
                ->orderBy('post.action_datetime','DESC')->orderBy('post.post_status_sale','DESC');
                $postNormal = $postNormal->whereIn('post.post_type',[2,3])
                ->orderBy('post.post_status_sale','DESC')->orderBy('post.action_datetime','DESC');
    
            }
    
    
            $postPin = $postPin
            ->whereNotNull('post_accept_pin')
            ->orderBy('post.updated_at','DESC')        
            ->orderBy('post_accept_pin','DESC')
            ->limit(0)->get();
    
            $postNormal = $postNormal
            ->orderBy('post.updated_at','DESC')        
            ->orderBy('post_accept_pin','DESC')
            ->limit(25)->offset($offset)->get();
    
            $pinList = [];
            foreach ($postPin as $postData) {
                if ($type == 1) {
                    $post_price = $postData->post_rent_price;
                    $post_status = $postData->post_status_rent;                
                    $post_url = route('rent',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                } else if ($type == 2) {
                    $post_price = $postData->post_sale_price;
                    $post_status = $postData->post_status_sale;
                    $post_url = route('sale',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                }
                $tempPin = array(
                    'post_id' => $postData->id,
                    'post_no' => $postData->post_no,
                    'post_type' => $postData->post_type,
                    'post_bed' => $postData->post_bed,
                    'post_baths' => $postData->post_baths,
                    'post_building' => $postData->post_building,
                    'post_phase' => $postData->post_phase,
                    'post_floor' => $postData->post_floor,
                    'post_image' => getFileUrl( $postData->post_image_title , '/' ),
                    'post_type' => $type,
                    'post_area_total' => $postData->post_area_total,
                    'post_price' => $post_price,
                    'post_header' => $postData->post_header_en,
                    'condo_image' => getFileUrl( $postData->condo_image_tltle , '/' ),
                    'condo_name' => $postData->condo_name_en,
                    'condo_url' => route('condo',[$postData->condo_url_en]),
                    'condo_alt' => $postData->condo_image_tltle_alt,
                    'post_url' => $post_url,
                    'post_status' => $post_status,
                    'action_datetime'=> $postData->action_datetime,
                    'post_contract_expire'=> $postData->post_contract_expire,
                );
                array_push($pinList,$tempPin);
            }
    
            $normalList = [];
            foreach ($postNormal as $postData) {
                if ($type == 1) {
                    $post_price = $postData->post_rent_price;
                    $post_status = $postData->post_status_rent;
                    $post_url = route('rent',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                } else if ($type == 2) {
                    $post_price = $postData->post_sale_price;
                    $post_status = $postData->post_status_sale;
                    $post_url = route('sale',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                }
                $tempNormal = array(
                    'post_id' => $postData->id,
                    'post_no' => $postData->post_no,
                    'post_type' => $postData->post_type,
                    'post_bed' => $postData->post_bed,
                    'post_baths' => $postData->post_baths,
                    'post_building' => $postData->post_building,
                    'post_phase' => $postData->post_phase,
                    'post_floor' => $postData->post_floor,
                    'post_image' => getFileUrl( $postData->post_image_title , '/' ),
                    'post_type' => $type,
                    'post_area_total' => $postData->post_area_total,
                    'post_price' => $post_price,
                    'post_header' => $postData->post_header_en,
                    'condo_image' => getFileUrl( $postData->condo_image_tltle , '/' ),
                    'condo_name' => $postData->condo_name_en,
                    'condo_url' => route('condo',[$postData->condo_url_en]),
                    'condo_alt' => $postData->condo_image_tltle_alt,
                    'post_url' => $post_url,
                    'post_status' => $post_status,
                    'action_datetime'=> $postData->action_datetime,
                    'post_contract_expire'=> $postData->post_contract_expire,
                );
                array_push($normalList,$tempNormal);
            }
    
            $data['pinList'] = $pinList;
            $data['normalList'] = $normalList;
    
            if ($type == 1) {
                return view('ajax_v2.components.en.getPostRentArea',$data);
            } else if ($type == 2) {
                return view('ajax_v2.components.en.getPostSaleArea',$data);
            }
        }
    // ****************************************************************************************
    // หน้า university *************************************************************************
        public function university($university_url)
        {

            $university = University::select('university.university_id','university.university_name','university.university_name_en','university_custom.university_url_en')
            ->leftjoin(env('DB_DATABASE_2').'.university_custom as university_custom','university_custom.university_id','=','university.university_id')
            ->where('university_custom.active_status','=','1')->where('university_custom.university_url_en','=',$university_url)->first();

            if ($university) {
                $data['university_id'] = $university->university_id;
                $data['university_name'] = $university->university_name;
                $data['university_name_en'] = $university->university_name_en;
                $data['rent_url'] = route('university',$university_url);
                $data['sale_url'] = route('universitySale',$university_url);

                if (!Route::is('universitySale')) {
                    $data['type'] = 1;
                } else {
                    $data['type'] = 2;
                }

                $universityOption = University::select('university.university_id','university.university_name','university.university_name_en','university_custom.university_url_en')
                ->leftjoin(env('DB_DATABASE_2').'.university_custom as university_custom','university_custom.university_id','=','university.university_id')
                ->where('university_custom.active_status','=','1')->orderBy('university.university_name','ASC')->get();

                $optionList = [];
                foreach ($universityOption as $row) {
                    $temp = array(
                        "name" => $row->university_name_en,
                        "value" => $row->university_id
                    );
                    array_push($optionList,$temp);
                }

                $data['optionList'] = $optionList;
                // ต้องใส่เพื่อเปลี่ยนภาษา******************************************
                $url = 'https://www.scancondo.com/get/url/university?id='.$university->university_id;
                // $url = 'https://www.eng.scancondo.com/get/url/area?id='.$area->area_id;
                // ถ้า eng มาแก้ตรงนี้ 
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_HTTPGET, true);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response_json = curl_exec($ch);
                curl_close($ch);
                $response=json_decode($response_json, true);    
                $data['url'] = $response['url'];
                // ต้องใส่เพื่อเปลี่ยนภาษา******************************************
                return view('front_v2.university',$data);

            } else {
                return abort(404);
            }
        }

        public function countCondoUniversity(Request $request,$university_id)
        {
    
            $condo = UniversityCondo::select('university_condo.*')
            ->leftJoin('condo','condo.condo_id','=','university_condo.condo_id')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->where('condo.delete_status','=','0')
            ->where('condo_custom.active_status','=',1)
            ->where('university_condo.university_id','=',$university_id)
            ->count();
    
            return response()->json(['countCondo' => $condo]);
        }
        public function getCondoUniversityStep(Request $request,$university_id)
        {
            $step = $request->step;
    
            $condo = UniversityCondo::select("condo.*","condo_custom.condo_url_en")
            ->leftJoin('condo','condo.condo_id','=','university_condo.condo_id')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->where('condo.delete_status','=','0')
            ->where('condo_custom.active_status','=',1)
            ->where('university_condo.university_id','=',$university_id)
            ->orderBy('condo_custom.condo_interesting','DESC')->orderBy('condo.condo_name_en','ASC');
    
            if ($step == 1) {
                // $condo = $condo->limit(9);
                $condo = $condo->limit(4);
            } else if ($step == 2) {
                $getLimit = $condo->count();
                // $condo = $condo->offset(9)->limit($getLimit);
                $condo = $condo->offset(4)->limit($getLimit);
            }
    
            $condo = $condo->get();
    
            $condoList = [];
    
            foreach ($condo as $data) {
                $temp = array(
                    'image' => getFileUrl( $data->condo_image_tltle , '/' ),
                    'alt' => $data->condo_image_tltle_alt,
                    'condo_name_th' => $data->condo_name_th,
                    'condo_name_en' => $data->condo_name_en,
                    "url" => route('condo',[$data->condo_url_en]),
                );
                array_push($condoList,$temp);
            }
    
            $data['condo'] = $condoList;
    
            return view('ajax.components.getCondoStep',$data);
    
        }
        public function countPostUniversity(Request $request,$type)
        {
    
            $university_id = $request->university_id;
            $price_low = $request->price_low;
            $price_high = $request->price_high;
            $post_style = $request->post_style;
            $post_status = $request->post_status;
    
            $postRent = UniversityCondo::select('condo.*','post.*')
            ->leftJoin('condo','condo.condo_id','=','university_condo.condo_id')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->join('post','post.condo_id','=','condo.condo_id')
            ->where('condo.delete_status','=','0')
            ->where('condo_custom.active_status','=',1)
            ->where('university_condo.university_id','=',$university_id)
            ->whereNull('post.post_delete_datetime')
            ->where('post.post_close','=',0)
            ->orderBy('post.post_status_rent','DESC')
            ->orderBy('post.post_status_sale','DESC')
            ->orderBy('post.last_update','ASC')
            ->where(function ($query)  {
              $query
                ->whereNull('post.post_expire')
                ->orWhere('post.post_expire','>=',date('Y-m-d'));
            });
    
            $postSale = UniversityCondo::select('condo.*','post.*')
            ->leftJoin('condo','condo.condo_id','=','university_condo.condo_id')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->join('post','post.condo_id','=','condo.condo_id')
            ->where('condo.delete_status','=','0')
            ->where('condo_custom.active_status','=',1)
            ->where('university_condo.university_id','=',$university_id)
            ->whereNull('post.post_delete_datetime')
            ->where('post.post_close','=',0)
            ->where(function ($query)  {
              $query
                ->whereNull('post.post_expire')
                ->orWhere('post.post_expire','>=',date('Y-m-d'));
            });
    
            if ($type == 1) {
    
                $postSale = $postSale->whereIn('post.post_type',[2,3])->count();
    
                if ($price_low != "") {
                    $postRent = $postRent->where('post.post_rent_price','>=',$price_low);
                }
    
                if ($price_high != "") {
                    $postRent = $postRent->where('post.post_rent_price','<=',$price_high);
                }
    
                if ($post_style != "") {
                    $postRent = $postRent->where('post.post_bed','=',$post_style);
                }
    
                if ($post_status!= "") {
                    $postRent = $postRent->where('post.post_status_rent','=',$post_status);
                }
    
                $postRent = $postRent->whereIn('post.post_type',[1,3])
                ->where('post.post_rent_price','>=',env('MINRENT'))
                ->count();
    
                $pagination = ceil( $postRent / 25 );
    
            }
    
            if ($type == 2) {
    
                $postRent = $postRent->whereIn('post.post_type',[1,3])->count();
    
                if ($price_low != "") {
                    $postSale = $postSale->where('post.post_sale_price','>=',$price_low);
                }
    
                if ($price_high != "") {
                    $postSale = $postSale->where('post.post_sale_price','<=',$price_high);
                }
    
                if ($post_style != "") {
                    $postSale = $postSale->where('post.post_bed','=',$post_style);
                }
    
                if ($post_status!= "") {
                    $postSale = $postSale->where('post.post_status_sale','=',$post_status);
                }
    
                $postSale = $postSale->whereIn('post.post_type',[2,3])->count();
    
                $pagination = ceil( $postSale / 25 );
    
            }
    
            $data['postRent'] = number_format($postRent);
            $data['postSale'] = number_format($postSale);
            $data['pagination'] = $pagination;
    
            return response()->json($data);
    
        }
        public function getPostUniversityTH(Request $request,$type)
        {
            $university_id = $request->university_id;
            $price_low = $request->price_low;
            $price_high = $request->price_high;
            $post_style = $request->post_style;
            $page = $request->page;
            $post_status = $request->post_status;
    
            $offset = ($page - 1) * 25;
    
    
            $postPin = UniversityCondo::select('condo.*','post.*',"condo_custom.condo_url_en")
            ->leftJoin('condo','condo.condo_id','=','university_condo.condo_id')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->join('post','post.condo_id','=','condo.condo_id')
            ->where('condo.delete_status','=','0')
            ->where('condo_custom.active_status','=',1)
            ->where('university_condo.university_id','=',$university_id)
            ->whereNull('post.post_delete_datetime')
            ->where('post.post_close','=',0)
            ->where(function ($query)  {
              $query
                ->whereNull('post.post_expire')
                ->orWhere('post.post_expire','>=',date('Y-m-d'));
            });
    
            $postNormal = UniversityCondo::select('condo.*','post.*',"condo_custom.condo_url_en")
            ->leftJoin('condo','condo.condo_id','=','university_condo.condo_id')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->join('post','post.condo_id','=','condo.condo_id')
            ->where('condo.delete_status','=','0')
            ->where('condo_custom.active_status','=',1)
            ->where('university_condo.university_id','=',$university_id)
            ->whereNull('post.post_delete_datetime')
            ->where('post.post_close','=',0)
            ->where(function ($query)  {
              $query
                ->whereNull('post.post_expire')
                ->orWhere('post.post_expire','>=',date('Y-m-d'));
            });
    
            if ($type == 1) {
    
                if ($price_low != "") {
                    $postPin = $postPin->where('post.post_rent_price','>=',$price_low);
                    $postNormal = $postNormal->where('post.post_rent_price','>=',$price_low);
                }
    
                if ($price_high != "") {
                    $postPin = $postPin->where('post.post_rent_price','<=',$price_high);
                    $postNormal = $postNormal->where('post.post_rent_price','<=',$price_high);
                }
    
                if ($post_style != "") {
                    $postPin = $postPin->where('post.post_bed','=',$post_style);
                    $postNormal = $postNormal->where('post.post_bed','=',$post_style);
                }
    
                if ($post_status != "") {
                    $postPin = $postPin->where('post.post_status_rent','=',$post_status);
                    $postNormal = $postNormal->where('post.post_status_rent','=',$post_status);
                }
    
    
                $postPin = $postPin->whereIn('post.post_type',[1,3])
                ->where('post.post_rent_price','>=',env('MINRENT'))
                ->orderBy('post.action_datetime','DESC')->orderBy('post.post_status_rent','DESC');
                $postNormal = $postNormal->whereIn('post.post_type',[1,3])
                ->where('post.post_rent_price','>=',env('MINRENT'))
                ->orderBy('post.post_status_rent','DESC')->orderBy('post.action_datetime','DESC');
    
            }
    
            if ($type == 2) {
    
                if ($price_low != "") {
                    $postPin = $postPin->where('post.post_sale_price','>=',$price_low);
                    $postNormal = $postNormal->where('post.post_sale_price','>=',$price_low);
                }
    
                if ($price_high != "") {
                    $postPin = $postPin->where('post.post_sale_price','<=',$price_high);
                    $postNormal = $postNormal->where('post.post_sale_price','<=',$price_high);
                }
    
                if ($post_style != "") {
                    $postPin = $postPin->where('post.post_bed','=',$post_style);
                    $postNormal = $postNormal->where('post.post_bed','=',$post_style);
                }
    
                if ($post_status != "") {
                    $postPin = $postPin->where('post.post_status_sale','=',$post_status);
                    $postNormal = $postNormal->where('post.post_status_sale','=',$post_status);
                }
    
    
                $postPin = $postPin->whereIn('post.post_type',[2,3])
                ->orderBy('post.action_datetime','DESC')->orderBy('post.post_status_sale','DESC');
                $postNormal = $postNormal->whereIn('post.post_type',[2,3])
                ->orderBy('post.post_status_sale','DESC')->orderBy('post.action_datetime','DESC');
                
    
            }
    
    
            $postPin = $postPin
    
            ->whereNotNull('post_accept_pin')
            ->orderBy('post.updated_at','DESC')        
            ->orderBy('post_accept_pin','DESC')
            ->limit(5)->get();
    
    
            $postNormal = $postNormal
            ->orderBy('post.updated_at','DESC')        
            ->orderBy('post_accept_pin','DESC')
            ->limit(25)->offset($offset)->get();
    
    
            $pinList = [];
            foreach ($postPin as $postData) {
                if ($type == 1) {
                    $post_price = $postData->post_rent_price;
                    $post_status = $postData->post_status_rent;
                    $post_url = route('rent',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                } else if ($type == 2) {
                    $post_price = $postData->post_sale_price;
                    $post_status = $postData->post_status_sale;
                    $post_url = route('sale',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                }
                $tempPin = array(
                    'post_id' => $postData->id,
                    'post_no' => $postData->post_no,
                    'post_type' => $postData->post_type,
                    'post_bed' => $postData->post_bed,
                    'post_baths' => $postData->post_baths,
                    'post_building' => $postData->post_building,
                    'post_phase' => $postData->post_phase,
                    'post_floor' => $postData->post_floor,
                    'post_image' => getFileUrl( $postData->post_image_title , '/' ),
                    'post_type' => $type,
                    'post_area_total' => $postData->post_area_total,
                    'post_price' => $post_price,
                    'post_header' => $postData->post_header_en,
                    'condo_image' => getFileUrl( $postData->condo_image_tltle , '/' ),
                    'condo_name' => $postData->condo_name_en,
                    'condo_url' => route('condo',[$postData->condo_url_en]),
                    'condo_alt' => $postData->condo_image_tltle_alt,
                    'post_url' => $post_url,
                    'post_status' => $post_status,
                    'action_datetime'=> $postData->action_datetime,
                    'post_contract_expire'=> $postData->post_contract_expire,
                );
                array_push($pinList,$tempPin);
            }
    
            $normalList = [];
            foreach ($postNormal as $postData) {
                if ($type == 1) {
                    $post_price = $postData->post_rent_price;
                    $post_status = $postData->post_status_rent;
                    $post_url = route('rent',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                } else if ($type == 2) {
                    $post_price = $postData->post_sale_price;
                    $post_status = $postData->post_status_sale;
                    $post_url = route('sale',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                }
                $tempNormal = array(
                    'post_id' => $postData->id,
                    'post_no' => $postData->post_no,
                    'post_type' => $postData->post_type,
                    'post_bed' => $postData->post_bed,
                    'post_baths' => $postData->post_baths,
                    'post_building' => $postData->post_building,
                    'post_phase' => $postData->post_phase,
                    'post_floor' => $postData->post_floor,
                    'post_image' => getFileUrl( $postData->post_image_title , '/' ),
                    'post_type' => $type,
                    'post_area_total' => $postData->post_area_total,
                    'post_price' => $post_price,
                    'post_header' => $postData->post_header_en,
                    'condo_image' => getFileUrl( $postData->condo_image_tltle , '/' ),
                    'condo_name' => $postData->condo_name_en,
                    'condo_url' => route('condo',[$postData->condo_url_en]),
                    'condo_alt' => $postData->condo_image_tltle_alt,
                    'post_url' => $post_url,
                    'post_status' => $post_status,
                    'action_datetime'=> $postData->action_datetime,
                    'post_contract_expire'=> $postData->post_contract_expire,
                );
                array_push($normalList,$tempNormal);
            }
    
            $data['pinList'] = $pinList;
            $data['normalList'] = $normalList;
    
            if ($type == 1) {
                return view('ajax_v2.components.th.getPostRentArea',$data);
            } else if ($type == 2) {
                return view('ajax_v2.components.th.getPostSaleArea',$data);
            }
        }
        public function getPostUniversityEN(Request $request,$type)
        {
            $university_id = $request->university_id;
            $price_low = $request->price_low;
            $price_high = $request->price_high;
            $post_style = $request->post_style;
            $page = $request->page;
            $post_status = $request->post_status;
    
            $offset = ($page - 1) * 25;
    
    
            $postPin = UniversityCondo::select('condo.*','post.*',"condo_custom.condo_url_en")
            ->leftJoin('condo','condo.condo_id','=','university_condo.condo_id')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->join('post','post.condo_id','=','condo.condo_id')
            ->where('condo.delete_status','=','0')
            ->where('condo_custom.active_status','=',1)
            ->where('university_condo.university_id','=',$university_id)
            ->whereNull('post.post_delete_datetime')
            ->where('post.post_close','=',0)
            ->where(function ($query)  {
              $query
                ->whereNull('post.post_expire')
                ->orWhere('post.post_expire','>=',date('Y-m-d'));
            });
    
            $postNormal = UniversityCondo::select('condo.*','post.*',"condo_custom.condo_url_en")
            ->leftJoin('condo','condo.condo_id','=','university_condo.condo_id')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->join('post','post.condo_id','=','condo.condo_id')
            ->where('condo.delete_status','=','0')
            ->where('condo_custom.active_status','=',1)
            ->where('university_condo.university_id','=',$university_id)
            ->whereNull('post.post_delete_datetime')
            ->where('post.post_close','=',0)
            ->where(function ($query)  {
              $query
                ->whereNull('post.post_expire')
                ->orWhere('post.post_expire','>=',date('Y-m-d'));
            });
    
            if ($type == 1) {
    
                if ($price_low != "") {
                    $postPin = $postPin->where('post.post_rent_price','>=',$price_low);
                    $postNormal = $postNormal->where('post.post_rent_price','>=',$price_low);
                }
    
                if ($price_high != "") {
                    $postPin = $postPin->where('post.post_rent_price','<=',$price_high);
                    $postNormal = $postNormal->where('post.post_rent_price','<=',$price_high);
                }
    
                if ($post_style != "") {
                    $postPin = $postPin->where('post.post_bed','=',$post_style);
                    $postNormal = $postNormal->where('post.post_bed','=',$post_style);
                }
    
                if ($post_status != "") {
                    $postPin = $postPin->where('post.post_status_rent','=',$post_status);
                    $postNormal = $postNormal->where('post.post_status_rent','=',$post_status);
                }
    
    
                $postPin = $postPin->whereIn('post.post_type',[1,3])
                ->where('post.post_rent_price','>=',env('MINRENT'))
                ->orderBy('post.action_datetime','DESC')->orderBy('post.post_status_rent','DESC');
                $postNormal = $postNormal->whereIn('post.post_type',[1,3])
                ->where('post.post_rent_price','>=',env('MINRENT'))
                ->orderBy('post.post_status_rent','DESC')->orderBy('post.action_datetime','DESC');
    
            }
    
            if ($type == 2) {
    
                if ($price_low != "") {
                    $postPin = $postPin->where('post.post_sale_price','>=',$price_low);
                    $postNormal = $postNormal->where('post.post_sale_price','>=',$price_low);
                }
    
                if ($price_high != "") {
                    $postPin = $postPin->where('post.post_sale_price','<=',$price_high);
                    $postNormal = $postNormal->where('post.post_sale_price','<=',$price_high);
                }
    
                if ($post_style != "") {
                    $postPin = $postPin->where('post.post_bed','=',$post_style);
                    $postNormal = $postNormal->where('post.post_bed','=',$post_style);
                }
    
                if ($post_status != "") {
                    $postPin = $postPin->where('post.post_status_sale','=',$post_status);
                    $postNormal = $postNormal->where('post.post_status_sale','=',$post_status);
                }
    
    
                $postPin = $postPin->whereIn('post.post_type',[2,3])
                ->orderBy('post.action_datetime','DESC')->orderBy('post.post_status_sale','DESC');
                $postNormal = $postNormal->whereIn('post.post_type',[2,3])
                ->orderBy('post.post_status_sale','DESC')->orderBy('post.action_datetime','DESC');
                
    
            }
    
    
            $postPin = $postPin
    
            ->whereNotNull('post_accept_pin')
            ->orderBy('post.updated_at','DESC')        
            ->orderBy('post_accept_pin','DESC')
            ->limit(5)->get();
    
    
            $postNormal = $postNormal
            ->orderBy('post.updated_at','DESC')        
            ->orderBy('post_accept_pin','DESC')
            ->limit(25)->offset($offset)->get();
    
    
            $pinList = [];
            foreach ($postPin as $postData) {
                if ($type == 1) {
                    $post_price = $postData->post_rent_price;
                    $post_status = $postData->post_status_rent;
                    $post_url = route('rent',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                } else if ($type == 2) {
                    $post_price = $postData->post_sale_price;
                    $post_status = $postData->post_status_sale;
                    $post_url = route('sale',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                }
                $tempPin = array(
                    'post_id' => $postData->id,
                    'post_no' => $postData->post_no,
                    'post_type' => $postData->post_type,
                    'post_bed' => $postData->post_bed,
                    'post_baths' => $postData->post_baths,
                    'post_building' => $postData->post_building,
                    'post_phase' => $postData->post_phase,
                    'post_floor' => $postData->post_floor,
                    'post_image' => getFileUrl( $postData->post_image_title , '/' ),
                    'post_type' => $type,
                    'post_area_total' => $postData->post_area_total,
                    'post_price' => $post_price,
                    'post_header' => $postData->post_header_en,
                    'condo_image' => getFileUrl( $postData->condo_image_tltle , '/' ),
                    'condo_name' => $postData->condo_name_en,
                    'condo_url' => route('condo',[$postData->condo_url_en]),
                    'condo_alt' => $postData->condo_image_tltle_alt,
                    'post_url' => $post_url,
                    'post_status' => $post_status,
                    'action_datetime'=> $postData->action_datetime,
                    'post_contract_expire'=> $postData->post_contract_expire,
                );
                array_push($pinList,$tempPin);
            }
    
            $normalList = [];
            foreach ($postNormal as $postData) {
                if ($type == 1) {
                    $post_price = $postData->post_rent_price;
                    $post_status = $postData->post_status_rent;
                    $post_url = route('rent',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                } else if ($type == 2) {
                    $post_price = $postData->post_sale_price;
                    $post_status = $postData->post_status_sale;
                    $post_url = route('sale',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                }
                $tempNormal = array(
                    'post_id' => $postData->id,
                    'post_no' => $postData->post_no,
                    'post_type' => $postData->post_type,
                    'post_bed' => $postData->post_bed,
                    'post_baths' => $postData->post_baths,
                    'post_building' => $postData->post_building,
                    'post_phase' => $postData->post_phase,
                    'post_floor' => $postData->post_floor,
                    'post_image' => getFileUrl( $postData->post_image_title , '/' ),
                    'post_type' => $type,
                    'post_area_total' => $postData->post_area_total,
                    'post_price' => $post_price,
                    'post_header' => $postData->post_header_en,
                    'condo_image' => getFileUrl( $postData->condo_image_tltle , '/' ),
                    'condo_name' => $postData->condo_name_en,
                    'condo_url' => route('condo',[$postData->condo_url_en]),
                    'condo_alt' => $postData->condo_image_tltle_alt,
                    'post_url' => $post_url,
                    'post_status' => $post_status,
                    'action_datetime'=> $postData->action_datetime,
                    'post_contract_expire'=> $postData->post_contract_expire,
                );
                array_push($normalList,$tempNormal);
            }
    
            $data['pinList'] = $pinList;
            $data['normalList'] = $normalList;
    
            if ($type == 1) {
                return view('ajax_v2.components.en.getPostRentArea',$data);
            } else if ($type == 2) {
                return view('ajax_v2.components.en.getPostSaleArea',$data);
            }
        }
    // ****************************************************************************************
    // หน้า landmark ***************************************************************************
        public function landmark($landmark_id,$landmark_url)
        {

            $landmarkType = LandmarkType::select('landmark_type.landmark_type_name_en'
            ,'landmark_type.landmark_type_name','landmark.landmark_name'
            ,'landmark.landmark_name_en','landmark_type.landmark_type_name_en'
            ,'landmark.landmark_name_en','landmark.landmark_id')
            ->leftjoin('landmark','landmark.landmark_type_id','=','landmark_type.landmark_type_id')
            ->where('landmark_type.active_status','=','1')
            ->where('landmark.active_status','=','1')
            ->where('landmark.landmark_id','=',$landmark_id)
            ->first();

            if ($landmarkType) {

                $data['landmark_id'] = $landmarkType->landmark_id;
                $data['landmark_type_name'] = $landmarkType->landmark_type_name;
                $data['landmark_type_name_en'] = $landmarkType->landmark_type_name_en;
                $data['landmark_name'] = $landmarkType->landmark_name;
                $data['landmark_name_en'] = $landmarkType->landmark_name_en;
                $data['rent_url'] = route('landmark',[$landmarkType->landmark_id,$landmarkType->landmark_name_en]);
                $data['sale_url'] = route('landmarkSale',[$landmarkType->landmark_id,$landmarkType->landmark_name_en]);

                if (!Route::is('landmarkSale')) {
                    $data['type'] = 1;
                } else {
                    $data['type'] = 2;
                }

                $landmarkOption = LandmarkType::select('landmark.landmark_name_en','landmark.landmark_id')
                ->leftjoin('landmark','landmark.landmark_type_id','=','landmark_type.landmark_type_id')
                ->where('landmark.active_status','=','1')
                ->orderBy('landmark.landmark_name_en', 'ASC')
                ->get();

                $optionList = [];
                foreach ($landmarkOption as $row) {
                    $temp = array(
                        "name" => $row->landmark_name_en,
                        "value" => $row->landmark_id
                    );
                    array_push($optionList,$temp);
                }

                $data['optionList'] = $optionList;
                // ต้องใส่เพื่อเปลี่ยนภาษา******************************************
                $url = 'https://www.scancondo.com/get/url/landmark?id='.$landmarkType->landmark_id;
                // $url = 'https://www.eng.scancondo.com/get/url/area?id='.$area->area_id;
                // ถ้า eng มาแก้ตรงนี้ 
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_HTTPGET, true);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response_json = curl_exec($ch);
                curl_close($ch);
                $response=json_decode($response_json, true);    
                $data['url'] = $response['url'];
                // return view('front-toon.landmarknew',$data);
                return view('front_v2.landmark',$data);

            } else {
                return abort(404);
            }

        }

        public function countCondoLandmark(Request $request,$landmark_id)
        {
    
            $condo = LandmarkCondo::select("condo.*","condo_custom.condo_url_en")
            ->leftJoin('condo','condo.condo_id','=','landmark_condo.condo_id')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->where('condo.delete_status','=','0')
            ->where('condo_custom.active_status','=',1)
            ->where('landmark_condo.landmark_id','=',$landmark_id)
            ->count();
    
            return response()->json(['countCondo' => $condo]);
        }
        public function getCondoLandmarkStep(Request $request,$landmark_id)
        {
            $step = $request->step;
    
            $condo = LandmarkCondo::select("condo.*","condo_custom.condo_url_en")
            ->leftJoin('condo','condo.condo_id','=','landmark_condo.condo_id')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->where('condo.delete_status','=','0')
            ->where('condo_custom.active_status','=',1)
            ->where('landmark_condo.landmark_id','=',$landmark_id)
            ->orderBy('condo_custom.condo_interesting','DESC')->orderBy('condo.condo_name_en','ASC');
    
            if ($step == 1) {
                // $condo = $condo->limit(9);
                $condo = $condo->limit(4);
            } else if ($step == 2) {
                $getLimit = $condo->count();
                // $condo = $condo->offset(9)->limit($getLimit);
                $condo = $condo->offset(4)->limit($getLimit);
            }
    
            $condo = $condo->get();
    
            $condoList = [];
    
            foreach ($condo as $data) {
                $temp = array(
                    'image' => getFileUrl( $data->condo_image_tltle , '/' ),
                    'alt' => $data->condo_image_tltle_alt,
                    'condo_name_th' => $data->condo_name_th,
                    'condo_name_en' => $data->condo_name_en,
                    "url" => route('condo',[$data->condo_url_en]),
                );
                array_push($condoList,$temp);
            }
    
            $data['condo'] = $condoList;
    
            return view('ajax.components.getCondoStep',$data);
    
        }
        public function countPostLandmark(Request $request,$type)
        {
    
            $landmark_id = $request->landmark_id;
            $price_low = $request->price_low;
            $price_high = $request->price_high;
            $post_style = $request->post_style;
            $post_status = $request->post_status;
    
            $postRent = LandmarkCondo::select('condo.*','post.*',"condo_custom.condo_url_en")
            ->leftJoin('condo','condo.condo_id','=','landmark_condo.condo_id')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->join('post','post.condo_id','=','condo.condo_id')
            ->where('condo.delete_status','=','0')
            ->where('condo_custom.active_status','=',1)
            ->where('landmark_condo.landmark_id','=',$landmark_id)
            ->whereNull('post.post_delete_datetime')
            ->where('post.post_close','=',0)
            ->where(function ($query)  {
              $query
                ->whereNull('post.post_expire')
                ->orWhere('post.post_expire','>=',date('Y-m-d'));
            });
    
            $postSale = LandmarkCondo::select('condo.*','post.*',"condo_custom.condo_url_en")
            ->leftJoin('condo','condo.condo_id','=','landmark_condo.condo_id')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->join('post','post.condo_id','=','condo.condo_id')
            ->where('condo.delete_status','=','0')
            ->where('condo_custom.active_status','=',1)
            ->where('landmark_condo.landmark_id','=',$landmark_id)
            ->whereNull('post.post_delete_datetime')
            ->where('post.post_close','=',0)
            ->where(function ($query)  {
              $query
                ->whereNull('post.post_expire')
                ->orWhere('post.post_expire','>=',date('Y-m-d'));
            });
    
            if ($type == 1) {
    
                $postSale = $postSale->whereIn('post.post_type',[2,3])->count();
    
                if ($price_low != "") {
                    $postRent = $postRent->where('post.post_rent_price','>=',$price_low);
                }
    
                if ($price_high != "") {
                    $postRent = $postRent->where('post.post_rent_price','<=',$price_high);
                }
    
                if ($post_style != "") {
                    $postRent = $postRent->where('post.post_bed','=',$post_style);
                }
    
                if ($post_status!= "") {
                    $postRent = $postRent->where('post.post_status_rent','=',$post_status);
                }
    
                $postRent = $postRent->whereIn('post.post_type',[1,3])
                ->where('post.post_rent_price','>=',env('MINRENT'))
                ->count();
    
                $pagination = ceil( $postRent / 25 );
    
            }
    
            if ($type == 2) {
    
                $postRent = $postRent->whereIn('post.post_type',[1,3])->count();
    
                if ($price_low != "") {
                    $postSale = $postSale->where('post.post_sale_price','>=',$price_low);
                }
    
                if ($price_high != "") {
                    $postSale = $postSale->where('post.post_sale_price','<=',$price_high);
                }
    
                if ($post_style != "") {
                    $postSale = $postSale->where('post.post_bed','=',$post_style);
                }
    
                if ($post_status!= "") {
                    $postSale = $postSale->where('post.post_status_sale','=',$post_status);
                }
    
                $postSale = $postSale->whereIn('post.post_type',[2,3])->count();
    
                $pagination = ceil( $postSale / 25 );
    
            }
    
            $data['postRent'] = number_format($postRent);
            $data['postSale'] = number_format($postSale);
            $data['pagination'] = $pagination;
    
            return response()->json($data);
    
        }
        public function getPostLandmarkTH(Request $request,$type)
        {
            $landmark_id = $request->landmark_id;
            $price_low = $request->price_low;
            $price_high = $request->price_high;
            $post_style = $request->post_style;
            $page = $request->page;
            $post_status = $request->post_status;
    
            $offset = ($page - 1) * 25;
    
    
            $postPin = LandmarkCondo::select('condo.*','post.*',"condo_custom.condo_url_en")
            ->leftJoin('condo','condo.condo_id','=','landmark_condo.condo_id')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->join('post','post.condo_id','=','condo.condo_id')
            ->where('condo.delete_status','=','0')
            ->where('condo_custom.active_status','=',1)
            ->where('landmark_condo.landmark_id','=',$landmark_id)
            ->whereNull('post.post_delete_datetime')
            ->where('post.post_close','=',0)
            ->where(function ($query)  {
              $query
                ->whereNull('post.post_expire')
                ->orWhere('post.post_expire','>=',date('Y-m-d'));
            });
    
            $postNormal = LandmarkCondo::select('condo.*','post.*',"condo_custom.condo_url_en")
            ->leftJoin('condo','condo.condo_id','=','landmark_condo.condo_id')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->join('post','post.condo_id','=','condo.condo_id')
            ->where('condo.delete_status','=','0')
            ->where('condo_custom.active_status','=',1)
            ->where('landmark_condo.landmark_id','=',$landmark_id)
            ->whereNull('post.post_delete_datetime')
            // ->whereNull('post.post_accept_pin')
            ->where('post.post_close','=',0)
            ->where(function ($query)  {
              $query
                ->whereNull('post.post_expire')
                ->orWhere('post.post_expire','>=',date('Y-m-d'));
            });
    
            if ($type == 1) {
    
                if ($price_low != "") {
                    $postPin = $postPin->where('post.post_rent_price','>=',$price_low);
                    $postNormal = $postNormal->where('post.post_rent_price','>=',$price_low);
                }
    
                if ($price_high != "") {
                    $postPin = $postPin->where('post.post_rent_price','<=',$price_high);
                    $postNormal = $postNormal->where('post.post_rent_price','<=',$price_high);
                }
    
                if ($post_style != "") {
                    $postPin = $postPin->where('post.post_bed','=',$post_style);
                    $postNormal = $postNormal->where('post.post_bed','=',$post_style);
                }
    
                if ($post_status != "") {
                    $postPin = $postPin->where('post.post_status_rent','=',$post_status);
                    $postNormal = $postNormal->where('post.post_status_rent','=',$post_status);
                }
    
                $postPin = $postPin->whereIn('post.post_type',[1,3])
                ->where('post.post_rent_price','>=',env('MINRENT'))
                ->orderBy('post.action_datetime','DESC')->orderBy('post.post_status_rent','DESC');
                $postNormal = $postNormal->whereIn('post.post_type',[1,3])
                ->where('post.post_rent_price','>=',env('MINRENT'))
                ->orderBy('post.post_status_rent','DESC')->orderBy('post.action_datetime','DESC');
    
            }
    
            if ($type == 2) {
    
                if ($price_low != "") {
                    $postPin = $postPin->where('post.post_sale_price','>=',$price_low);
                    $postNormal = $postNormal->where('post.post_sale_price','>=',$price_low);
                }
    
                if ($price_high != "") {
                    $postPin = $postPin->where('post.post_sale_price','<=',$price_high);
                    $postNormal = $postNormal->where('post.post_sale_price','<=',$price_high);
                }
    
                if ($post_style != "") {
                    $postPin = $postPin->where('post.post_bed','=',$post_style);
                    $postNormal = $postNormal->where('post.post_bed','=',$post_style);
                }
    
                if ($post_status != "") {
                    $postPin = $postPin->where('post.post_status_sale','=',$post_status);
                    $postNormal = $postNormal->where('post.post_status_sale','=',$post_status);
                }
    
                $postPin = $postPin->whereIn('post.post_type',[2,3])
                ->orderBy('post.action_datetime','DESC')->orderBy('post.post_status_sale','DESC');
                $postNormal = $postNormal->whereIn('post.post_type',[2,3])
                ->orderBy('post.post_status_sale','DESC')->orderBy('post.action_datetime','DESC');
    
            }
    
    
            $postPin = $postPin
            ->whereNotNull('post_accept_pin')
            ->limit(5)->get();
    
            $postNormal = $postNormal
            ->orderBy('post.id','DESC')        
            ->orderBy('post_accept_pin','DESC')
            ->limit(25)->offset($offset)->get();
    
            $pinList = [];
            foreach ($postPin as $postData) {
                if ($type == 1) {
                    $post_price = $postData->post_rent_price;
                    $post_status = $postData->post_status_rent;
                    $post_url = route('rent',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                } else if ($type == 2) {
                    $post_price = $postData->post_sale_price;
                    $post_status = $postData->post_status_sale;
                    $post_url = route('sale',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                }
                $tempPin = array(
                    'post_id' => $postData->id,
                    'post_no' => $postData->post_no,
                    'post_type' => $postData->post_type,
                    'post_bed' => $postData->post_bed,
                    'post_baths' => $postData->post_baths,
                    'post_building' => $postData->post_building,
                    'post_phase' => $postData->post_phase,
                    'post_floor' => $postData->post_floor,
                    'post_image' => getFileUrl( $postData->post_image_title , '/' ),
                    'post_type' => $type,
                    'post_area_total' => $postData->post_area_total,
                    'post_price' => $post_price,
                    'post_header' => $postData->post_header_en,
                    'condo_image' => getFileUrl( $postData->condo_image_tltle , '/' ),
                    'condo_name' => $postData->condo_name_en,
                    'condo_url' => route('condo',[$postData->condo_url_en]),
                    'condo_alt' => $postData->condo_image_tltle_alt,
                    'post_url' => $post_url,
                    'post_status' => $post_status,
                    'action_datetime'=> $postData->action_datetime,
                    'post_contract_expire'=> $postData->post_contract_expire,
                );
                array_push($pinList,$tempPin);
            }
    
            $normalList = [];
            foreach ($postNormal as $postData) {
                if ($type == 1) {
                    $post_price = $postData->post_rent_price;
                    $post_status = $postData->post_status_rent;
                    $post_url = route('rent',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                } else if ($type == 2) {
                    $post_price = $postData->post_sale_price;
                    $post_status = $postData->post_status_sale;
                    $post_url = route('sale',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                }
                $tempNormal = array(
                    'post_id' => $postData->id,
                    'post_no' => $postData->post_no,
                    'post_type' => $postData->post_type,
                    'post_bed' => $postData->post_bed,
                    'post_baths' => $postData->post_baths,
                    'post_building' => $postData->post_building,
                    'post_phase' => $postData->post_phase,
                    'post_floor' => $postData->post_floor,
                    'post_image' => getFileUrl( $postData->post_image_title , '/' ),
                    'post_type' => $type,
                    'post_area_total' => $postData->post_area_total,
                    'post_price' => $post_price,
                    'post_header' => $postData->post_header_en,
                    'condo_image' => getFileUrl( $postData->condo_image_tltle , '/' ),
                    'condo_name' => $postData->condo_name_en,
                    'condo_url' => route('condo',[$postData->condo_url_en]),
                    'condo_alt' => $postData->condo_image_tltle_alt,
                    'post_url' => $post_url,
                    'post_status' => $post_status,
                    'action_datetime'=> $postData->action_datetime,
                    'post_contract_expire'=> $postData->post_contract_expire,
                );
                array_push($normalList,$tempNormal);
            }
    
            $data['pinList'] = $pinList;
            $data['normalList'] = $normalList;
    
            if ($type == 1) {
                return view('ajax_v2.components.th.getPostRentArea',$data);
            } else if ($type == 2) {
                return view('ajax_v2.components.th.getPostSaleArea',$data);
            }
        }
        public function getPostLandmarkEN(Request $request,$type)
        {
            $landmark_id = $request->landmark_id;
            $price_low = $request->price_low;
            $price_high = $request->price_high;
            $post_style = $request->post_style;
            $page = $request->page;
            $post_status = $request->post_status;
    
            $offset = ($page - 1) * 25;
    
    
            $postPin = LandmarkCondo::select('condo.*','post.*',"condo_custom.condo_url_en")
            ->leftJoin('condo','condo.condo_id','=','landmark_condo.condo_id')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->join('post','post.condo_id','=','condo.condo_id')
            ->where('condo.delete_status','=','0')
            ->where('condo_custom.active_status','=',1)
            ->where('landmark_condo.landmark_id','=',$landmark_id)
            ->whereNull('post.post_delete_datetime')
            ->where('post.post_close','=',0)
            ->where(function ($query)  {
              $query
                ->whereNull('post.post_expire')
                ->orWhere('post.post_expire','>=',date('Y-m-d'));
            });
    
            $postNormal = LandmarkCondo::select('condo.*','post.*',"condo_custom.condo_url_en")
            ->leftJoin('condo','condo.condo_id','=','landmark_condo.condo_id')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->join('post','post.condo_id','=','condo.condo_id')
            ->where('condo.delete_status','=','0')
            ->where('condo_custom.active_status','=',1)
            ->where('landmark_condo.landmark_id','=',$landmark_id)
            ->whereNull('post.post_delete_datetime')
            // ->whereNull('post.post_accept_pin')
            ->where('post.post_close','=',0)
            ->where(function ($query)  {
              $query
                ->whereNull('post.post_expire')
                ->orWhere('post.post_expire','>=',date('Y-m-d'));
            });
    
            if ($type == 1) {
    
                if ($price_low != "") {
                    $postPin = $postPin->where('post.post_rent_price','>=',$price_low);
                    $postNormal = $postNormal->where('post.post_rent_price','>=',$price_low);
                }
    
                if ($price_high != "") {
                    $postPin = $postPin->where('post.post_rent_price','<=',$price_high);
                    $postNormal = $postNormal->where('post.post_rent_price','<=',$price_high);
                }
    
                if ($post_style != "") {
                    $postPin = $postPin->where('post.post_bed','=',$post_style);
                    $postNormal = $postNormal->where('post.post_bed','=',$post_style);
                }
    
                if ($post_status != "") {
                    $postPin = $postPin->where('post.post_status_rent','=',$post_status);
                    $postNormal = $postNormal->where('post.post_status_rent','=',$post_status);
                }
    
                $postPin = $postPin->whereIn('post.post_type',[1,3])
                ->where('post.post_rent_price','>=',env('MINRENT'))
                ->orderBy('post.action_datetime','DESC')->orderBy('post.post_status_rent','DESC');
                $postNormal = $postNormal->whereIn('post.post_type',[1,3])
                ->where('post.post_rent_price','>=',env('MINRENT'))
                ->orderBy('post.post_status_rent','DESC')->orderBy('post.action_datetime','DESC');
    
            }
    
            if ($type == 2) {
    
                if ($price_low != "") {
                    $postPin = $postPin->where('post.post_sale_price','>=',$price_low);
                    $postNormal = $postNormal->where('post.post_sale_price','>=',$price_low);
                }
    
                if ($price_high != "") {
                    $postPin = $postPin->where('post.post_sale_price','<=',$price_high);
                    $postNormal = $postNormal->where('post.post_sale_price','<=',$price_high);
                }
    
                if ($post_style != "") {
                    $postPin = $postPin->where('post.post_bed','=',$post_style);
                    $postNormal = $postNormal->where('post.post_bed','=',$post_style);
                }
    
                if ($post_status != "") {
                    $postPin = $postPin->where('post.post_status_sale','=',$post_status);
                    $postNormal = $postNormal->where('post.post_status_sale','=',$post_status);
                }
    
                $postPin = $postPin->whereIn('post.post_type',[2,3])
                ->orderBy('post.action_datetime','DESC')->orderBy('post.post_status_sale','DESC');
                $postNormal = $postNormal->whereIn('post.post_type',[2,3])
                ->orderBy('post.post_status_sale','DESC')->orderBy('post.action_datetime','DESC');
    
            }
    
    
            $postPin = $postPin
            ->whereNotNull('post_accept_pin')
            ->limit(5)->get();
    
            $postNormal = $postNormal
            ->orderBy('post.id','DESC')        
            ->orderBy('post_accept_pin','DESC')
            ->limit(25)->offset($offset)->get();
    
            $pinList = [];
            foreach ($postPin as $postData) {
                if ($type == 1) {
                    $post_price = $postData->post_rent_price;
                    $post_status = $postData->post_status_rent;
                    $post_url = route('rent',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                } else if ($type == 2) {
                    $post_price = $postData->post_sale_price;
                    $post_status = $postData->post_status_sale;
                    $post_url = route('sale',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                }
                $tempPin = array(
                    'post_id' => $postData->id,
                    'post_no' => $postData->post_no,
                    'post_type' => $postData->post_type,
                    'post_bed' => $postData->post_bed,
                    'post_baths' => $postData->post_baths,
                    'post_building' => $postData->post_building,
                    'post_phase' => $postData->post_phase,
                    'post_floor' => $postData->post_floor,
                    'post_image' => getFileUrl( $postData->post_image_title , '/' ),
                    'post_type' => $type,
                    'post_area_total' => $postData->post_area_total,
                    'post_price' => $post_price,
                    'post_header' => $postData->post_header_en,
                    'condo_image' => getFileUrl( $postData->condo_image_tltle , '/' ),
                    'condo_name' => $postData->condo_name_en,
                    'condo_url' => route('condo',[$postData->condo_url_en]),
                    'condo_alt' => $postData->condo_image_tltle_alt,
                    'post_url' => $post_url,
                    'post_status' => $post_status,
                    'action_datetime'=> $postData->action_datetime,
                    'post_contract_expire'=> $postData->post_contract_expire,
                );
                array_push($pinList,$tempPin);
            }
    
            $normalList = [];
            foreach ($postNormal as $postData) {
                if ($type == 1) {
                    $post_price = $postData->post_rent_price;
                    $post_status = $postData->post_status_rent;
                    $post_url = route('rent',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                } else if ($type == 2) {
                    $post_price = $postData->post_sale_price;
                    $post_status = $postData->post_status_sale;
                    $post_url = route('sale',[$postData->id,$postData->post_no,
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)
                ]);
                }
                $tempNormal = array(
                    'post_id' => $postData->id,
                    'post_no' => $postData->post_no,
                    'post_type' => $postData->post_type,
                    'post_bed' => $postData->post_bed,
                    'post_baths' => $postData->post_baths,
                    'post_building' => $postData->post_building,
                    'post_phase' => $postData->post_phase,
                    'post_floor' => $postData->post_floor,
                    'post_image' => getFileUrl( $postData->post_image_title , '/' ),
                    'post_type' => $type,
                    'post_area_total' => $postData->post_area_total,
                    'post_price' => $post_price,
                    'post_header' => $postData->post_header_en,
                    'condo_image' => getFileUrl( $postData->condo_image_tltle , '/' ),
                    'condo_name' => $postData->condo_name_en,
                    'condo_url' => route('condo',[$postData->condo_url_en]),
                    'condo_alt' => $postData->condo_image_tltle_alt,
                    'post_url' => $post_url,
                    'post_status' => $post_status,
                    'action_datetime'=> $postData->action_datetime,
                    'post_contract_expire'=> $postData->post_contract_expire,
                );
                array_push($normalList,$tempNormal);
            }
    
            $data['pinList'] = $pinList;
            $data['normalList'] = $normalList;
    
            if ($type == 1) {
                return view('ajax_v2.components.en.getPostRentArea',$data);
            } else if ($type == 2) {
                return view('ajax_v2.components.en.getPostSaleArea',$data);
            }
        }

    // ****************************************************************************************
    // หน้า Condo ******************************************************************************
    public function condo($condo_url)
    {
        $condo = Condo::select('condo.*','condo_custom.condo_url_en')
        ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
        ->where('condo_custom.active_status','=',1)
        ->where('condo_custom.condo_url_en','=',$condo_url)
        ->where('condo.delete_status','=','0')->first();
        if ($condo) {

            $condoImage = CondoImage::where('condo_id','=',$condo->condo_id)->get();

            $addressCondoData = District::select('province.province_name_en','amphoe.amphoe_name_en','district.district_name_en','district.zipcode')
            ->join('amphoe','amphoe.amphoe_id','=','district.amphoe_id')
            ->join('province','province.province_id','=','amphoe.province_id')
            ->where('district.district_id','=',$condo->condo_district_id)->first();

            if ($addressCondoData) {
                $addressCondo = $condo->condo_address_en." ".$addressCondoData->province_name_en." ".$addressCondoData->amphoe_name_en." ".$addressCondoData->district_name_en;
            } else {
                $addressCondo = $condo->condo_address_en;
            }

            $area = Area::select('area.*','area_custom.area_url_en')
            ->leftjoin(env('DB_DATABASE_2').'.area_custom as area_custom','area_custom.area_id','=','area.area_id')
            ->where('area.area_id','=',$condo->area_id)->first();

            $data['condo_id'] = $condo->condo_id;
            $data['condo_name_th'] = $condo->condo_name_th;
            $data['condo_name_en'] = $condo->condo_name_en;
            $data['condo_project_owner'] = $condo->condo_project_owner_en;
            $data['condo_total_area'] = $condo->condo_total_area_en;
            $data['condo_total_buildings'] = $condo->condo_total_buildings_en;
            $data['condo_total_floor'] = $condo->condo_total_floor_en;
            $data['condo_total_room'] = $condo->condo_total_room;
            $data['condo_total_style'] = $condo->condo_total_style_en;
            $data['condo_total_parking'] = $condo->condo_total_parking_en;
            $data['condo_total_lift'] = $condo->condo_total_lift_en;
            $data['condo_pubild_transport'] = $condo->condo_pubild_transport_en;
            $data['condo_bus_passing'] = $condo->condo_bus_passing_en;
            $data['condo_notable'] = $condo->condo_notable_en;
            $data['condo_google_map_link'] = $condo->condo_google_map_link;
            $data['condo_rise_style'] = $condo->condo_rise_style;
            $data['condo_finish'] = $condo->condo_finish_en;
            $data['condo_1bed_price_rent'] = number_format($condo->condo_1bed_price_rent);
            $data['condo_facilities_en'] = $condo->condo_facilities_en;
            $data['condo_common_fee_en'] = $condo->condo_common_fee_en;
            

            $data['condo_address'] = $addressCondo;

            $data['area_name'] = $area->area_name_en;
            $data['area_url'] = route('area',$area->area_url_en);

            $data['rent_url'] = route('condo',[$condo_url]);
            $data['sale_url'] = route('condoSale',[$condo_url]);

            $data["condo_image_banner"] = getFileUrl( $condo->condo_image_banner , '/' );
            $data["condo_image_banner_alt"] = $condo->condo_image_banner_alt;
            $data["condo_image"] = [];

            foreach ($condoImage as $row) {
                array_push($data["condo_image"],getFileUrl( $row->image_name , '/' ));
            }

            $data["condo_landmark"] = [];

            $landmark = LandmarkCondo::select("landmark.landmark_name_en",'landmark.landmark_id')
            ->leftJoin('landmark','landmark.landmark_id','=','landmark_condo.landmark_id')
            ->where('landmark.active_status','=','1')
            ->where('landmark_condo.condo_id','=',$condo->condo_id)
            ->orderBy('landmark.landmark_name_en', 'ASC')->get();

            foreach ($landmark as $row) {
                $temp = array(
                    "name" => $row->landmark_name_en,
                    "url" => route('landmark',[$row->landmark_id,$row->landmark_name_en]),
                );
                array_push($data["condo_landmark"],$temp);
            }

            $university = UniversityCondo::select("university.university_name_en",'university_custom.university_url_en')
            ->leftJoin('university','university.university_id','=','university_condo.university_id')
            ->leftJoin(env('DB_DATABASE_2').'.university_custom as university_custom','university_custom.university_id','=','university.university_id')
            ->where('university_custom.active_status','=',1)
            ->where('university_condo.condo_id','=',$condo->condo_id)
            ->orderBy('university.university_name_en','ASC')->get();

            foreach ($university as $row) {
                $temp = array(
                    "name" => $row->university_name_en,
                    "url" => route('university',$row->university_url_en),
                );
                array_push($data["condo_landmark"],$temp);
            }

            $train = TrainCondo::select("train_station.train_station_name_en",'train_station_custom.train_station_url_en')
            ->leftJoin('train_station','train_station.train_station_id','=','train_condo.train_station_id')
            ->leftJoin(env('DB_DATABASE_2').'.train_station_custom as train_station_custom','train_station_custom.train_station_id','=','train_station.train_station_id')
            ->where('train_station_custom.active_status','=',1)
            ->where('train_condo.condo_id','=',$condo->condo_id)
            ->orderBy('train_station.train_station_name','ASC')->get();

            foreach ($train as $row) {
                $temp = array(
                    "name" => $row->train_station_name_en,
                    "url" => route('station',$row->train_station_url_en),
                );
                array_push($data["condo_landmark"],$temp);
            }

            if (!Route::is('condoSale')) {
                $data['type'] = 1;
            } else {
                $data['type'] = 2;
            }

            
                // ต้องใส่เพื่อเปลี่ยนภาษา******************************************
                $url = 'https://scancondo.com/get/url/condo?id='.$condo->condo_id;
                // $url = 'https://eng.scancondo.com/get/url/condo?id='.$condo->condo_id;
                // ถ้า eng มาแก้ตรงนี้ 
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_HTTPGET, true);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response_json = curl_exec($ch);
                curl_close($ch);
                $response=json_decode($response_json, true);    
                $data['url'] = $response['url'];
                // ต้องใส่เพื่อเปลี่ยนภาษา******************************************
                
            // return view('front-toon.condonew',$data);
            return view('front_v2.condo',$data);
        } else {
            return abort(404);
        }

    }

    public function condomap($condo_url)
    {
        $condo = Condo::select('condo.*','condo_custom.condo_url_en')
        ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
        ->where('condo_custom.active_status','=',1)
        ->where('condo_custom.condo_url_en','=',$condo_url)
        ->where('condo.delete_status','=','0')->first();
        if ($condo) {

            $condoImage = CondoImage::where('condo_id','=',$condo->condo_id)->get();

            $addressCondoData = District::select('province.province_name_en','amphoe.amphoe_name_en','district.district_name_en','district.zipcode')
            ->join('amphoe','amphoe.amphoe_id','=','district.amphoe_id')
            ->join('province','province.province_id','=','amphoe.province_id')
            ->where('district.district_id','=',$condo->condo_district_id)->first();

            if ($addressCondoData) {
                $addressCondo = $condo->condo_address_en." ".$addressCondoData->province_name_en." ".$addressCondoData->amphoe_name_en." ".$addressCondoData->district_name_en;
            } else {
                $addressCondo = $condo->condo_address_en;
            }

            $area = Area::select('area.*','area_custom.area_url_en')
            ->leftjoin(env('DB_DATABASE_2').'.area_custom as area_custom','area_custom.area_id','=','area.area_id')
            ->where('area.area_id','=',$condo->area_id)->first();

            $data['condo_id'] = $condo->condo_id;
            $data['condo_name_th'] = $condo->condo_name_th;
            $data['condo_name_en'] = $condo->condo_name_en;
            $data['condo_project_owner'] = $condo->condo_project_owner_en;
            $data['condo_total_area'] = $condo->condo_total_area_en;
            $data['condo_total_buildings'] = $condo->condo_total_buildings_en;
            $data['condo_total_floor'] = $condo->condo_total_floor_en;
            $data['condo_total_room'] = $condo->condo_total_room;
            $data['condo_total_style'] = $condo->condo_total_style_en;
            $data['condo_total_parking'] = $condo->condo_total_parking_en;
            $data['condo_total_lift'] = $condo->condo_total_lift_en;
            $data['condo_pubild_transport'] = $condo->condo_pubild_transport_en;
            $data['condo_bus_passing'] = $condo->condo_bus_passing_en;
            $data['condo_notable'] = $condo->condo_notable_en;
            $data['condo_google_map_link'] = $condo->condo_google_map_link;
            $data['condo_rise_style'] = $condo->condo_rise_style;
            $data['condo_finish'] = $condo->condo_finish_en;
            $data['condo_1bed_price_rent'] = number_format($condo->condo_1bed_price_rent);
            $data['condo_facilities_en'] = $condo->condo_facilities_en;
            $data['condo_common_fee_en'] = $condo->condo_common_fee_en;
            

            $data['condo_address'] = $addressCondo;

            $data['area_name'] = $area->area_name_en;
            $data['area_url'] = route('area',$area->area_url_en);

            $data['rent_url'] = route('condo',[$condo_url]);
            $data['sale_url'] = route('condoSale',[$condo_url]);

            $data["condo_image_banner"] = getFileUrl( $condo->condo_image_banner , '/' );
            $data["condo_image_banner_alt"] = $condo->condo_image_banner_alt;
            $data["condo_image"] = [];

            foreach ($condoImage as $row) {
                array_push($data["condo_image"],getFileUrl( $row->image_name , '/' ));
            }

            $data["condo_landmark"] = [];

            $landmark = LandmarkCondo::select("landmark.landmark_name_en",'landmark.landmark_id')
            ->leftJoin('landmark','landmark.landmark_id','=','landmark_condo.landmark_id')
            ->where('landmark.active_status','=','1')
            ->where('landmark_condo.condo_id','=',$condo->condo_id)
            ->orderBy('landmark.landmark_name_en', 'ASC')->get();

            foreach ($landmark as $row) {
                $temp = array(
                    "name" => $row->landmark_name_en,
                    "url" => route('landmark',[$row->landmark_id,$row->landmark_name_en]),
                );
                array_push($data["condo_landmark"],$temp);
            }

            $university = UniversityCondo::select("university.university_name_en",'university_custom.university_url_en')
            ->leftJoin('university','university.university_id','=','university_condo.university_id')
            ->leftJoin(env('DB_DATABASE_2').'.university_custom as university_custom','university_custom.university_id','=','university.university_id')
            ->where('university_custom.active_status','=',1)
            ->where('university_condo.condo_id','=',$condo->condo_id)
            ->orderBy('university.university_name_en','ASC')->get();

            foreach ($university as $row) {
                $temp = array(
                    "name" => $row->university_name_en,
                    "url" => route('university',$row->university_url_en),
                );
                array_push($data["condo_landmark"],$temp);
            }

            $train = TrainCondo::select("train_station.train_station_name",'train_station_custom.train_station_url_en')
            ->leftJoin('train_station','train_station.train_station_id','=','train_condo.train_station_id')
            ->leftJoin(env('DB_DATABASE_2').'.train_station_custom as train_station_custom','train_station_custom.train_station_id','=','train_station.train_station_id')
            ->where('train_station_custom.active_status','=',1)
            ->where('train_condo.condo_id','=',$condo->condo_id)
            ->orderBy('train_station.train_station_name','ASC')->get();

            foreach ($train as $row) {
                $temp = array(
                    "name" => $row->train_station_name,
                    "url" => route('station',$row->train_station_url_en),
                );
                array_push($data["condo_landmark"],$temp);
            }

            if (!Route::is('condoSale')) {
                $data['type'] = 1;
            } else {
                $data['type'] = 2;
            }

            
                // ต้องใส่เพื่อเปลี่ยนภาษา******************************************
                $url = 'https://scancondo.com/get/url/condo?id='.$condo->condo_id;
                // $url = 'https://eng.scancondo.com/get/url/condo?id='.$condo->condo_id;
                // ถ้า eng มาแก้ตรงนี้ 
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_HTTPGET, true);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response_json = curl_exec($ch);
                curl_close($ch);
                $response=json_decode($response_json, true);    
                $data['url'] = $response['url'];
                // ต้องใส่เพื่อเปลี่ยนภาษา******************************************
                
            // return view('front-toon.condonew',$data);
            return view('front_v2.condo',$data);
        } else {
            return abort(404);
        }

    }

    public function countPostCondo(Request $request,$condo_id,$type)
    {

        $post_style = $request->post_style;
        $post_status = $request->post_status;
        $price_low = $request->price_low;
        $price_high = $request->price_high;

        $postRent = Post::select('post.*')
        ->whereNull('post.post_delete_datetime')
        ->where('post.post_close','=',0)
        ->where('post.condo_id','=',$condo_id)
        ->where(function ($query)  {
          $query
            ->whereNull('post.post_expire')
            ->orWhere('post.post_expire','>=',date('Y-m-d'));
        });

        $postSale = Post::select('post.*')
        ->whereNull('post.post_delete_datetime')
        ->where('post.post_close','=',0)
        ->where('post.condo_id','=',$condo_id)
        ->where(function ($query)  {
          $query
            ->whereNull('post.post_expire')
            ->orWhere('post.post_expire','>=',date('Y-m-d'));
        });

        if ($type == 1) {

            $postSale = $postSale->whereIn('post.post_type',[2,3])->count();

            if ($post_style != "") {
                $postRent = $postRent->where('post.post_bed','=',$post_style);
            }

            if ($post_status != "") {
                $postRent = $postRent->where('post.post_status_rent','=',$post_status);
            }

            if ($price_low != "") {
                $postRent = $postRent->where('post.post_rent_price','>=',$price_low);
            }

            if ($price_high != "") {
                $postRent = $postRent->where('post.post_rent_price','<=',$price_high);
            }

            $postRent = $postRent->whereIn('post.post_type',[1,3])
            ->where('post.post_rent_price','>=',env('MINRENT'))
            ->count();

            $pagination = ceil( $postRent / 25 );

        }

        if ($type == 2) {

            $postRent = $postRent->whereIn('post.post_type',[1,3])->count();

            if ($post_style != "") {
                $postSale = $postSale->where('post.post_bed','=',$post_style);
            }

            if ($post_status!= "") {
                $postSale = $postSale->where('post.post_status_sale','=',$post_status);
            }

            if ($price_low != "") {
                $postSale = $postSale->where('post.post_sale_price','>=',$price_low);
            }

            if ($price_high != "") {
                $postSale = $postSale->where('post.post_sale_price','<=',$price_high);
            }

            $postSale = $postSale->whereIn('post.post_type',[2,3])->count();

            $pagination = ceil( $postSale / 25 );

        }

        $data['postRent'] = number_format($postRent);
        $data['postSale'] = number_format($postSale);
        $data['pagination'] = $pagination;

        return response()->json($data);

    }

    public function getNearCondoTH(Request $request,$condo_id)
    {
        $main_condo = Condo::find($condo_id);
        $main_latitude = $main_condo->condo_latitude;
        $main_longtitude = $main_condo->condo_longtitude;
        $condo = Condo::select('condo.*',DB::raw("condo.*,condo_custom.condo_url_en,(3959 * acos(cos(radians($main_latitude)) * cos(radians(condo.condo_latitude)) * cos(radians(condo.condo_longtitude) - radians($main_longtitude)) + sin(radians($main_latitude)) * sin(radians(condo.condo_latitude)))) AS distanceCondo"))
        ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
        ->havingRaw('distanceCondo < 10')->orderBy('distanceCondo', 'asc')->limit(10)->get();

        $condoList = [];
        foreach ($condo as $row) {
            $temp = array(
                'condo_image' => getFileUrl( $row->condo_image_tltle , '/' ),
                'condo_name' => $row->condo_name,
                'condo_url' => route('condo',[$row->condo_url_en]),
                'condo_alt' => $row->condo_image_tltle_alt,
            );
            array_push($condoList,$temp);
        }

        $data['condoList'] = $condoList;
        return view('ajax_v2.components.th.getNearCondo',$data);

    }

    public function getNearCondoEN(Request $request,$condo_id)
    {
        $main_condo = Condo::find($condo_id);
        $main_latitude = $main_condo->condo_latitude;
        $main_longtitude = $main_condo->condo_longtitude;
        $condo = Condo::select('condo.*',DB::raw("condo.*,condo_custom.condo_url_en,(3959 * acos(cos(radians($main_latitude)) * cos(radians(condo.condo_latitude)) * cos(radians(condo.condo_longtitude) - radians($main_longtitude)) + sin(radians($main_latitude)) * sin(radians(condo.condo_latitude)))) AS distanceCondo"))
        ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
        ->havingRaw('distanceCondo < 10')->orderBy('distanceCondo', 'asc')->limit(10)->get();

        $condoList = [];
        foreach ($condo as $row) {
            $temp = array(
                'condo_image' => getFileUrl( $row->condo_image_tltle , '/' ),
                'condo_name' => $row->condo_name_en,
                'condo_url' => route('condo',[$row->condo_url_en]),
                'condo_alt' => $row->condo_image_tltle_alt,
            );
            array_push($condoList,$temp);
        }

        $data['condoList'] = $condoList;
        return view('ajax_v2.components.en.getNearCondo',$data);

    }    

    public function getPostCondoTH(Request $request,$condo_id,$type)
    {

        $post_style = $request->post_style;
        $post_status = $request->post_status;
        $page = $request->page;
        $price_low = $request->price_low;
        $price_high = $request->price_high;

        $offset = ($page - 1) * 25;


        $postPin = Post::select('post.*')
        ->whereNull('post.post_delete_datetime')
        ->where('post.post_close','=',0)
        ->where('post.condo_id','=',$condo_id)   
        ->where(function ($query)  {
          $query
            ->whereNull('post.post_expire')
            ->orWhere('post.post_expire','>=',date('Y-m-d'));
        });

        $postNormal = Post::select('post.*')
        ->whereNull('post.post_delete_datetime')
        ->where('post.post_close','=',0)
        ->where('post.condo_id','=',$condo_id)     
        ->where(function ($query)  {
          $query
            ->whereNull('post.post_expire')
            ->orWhere('post.post_expire','>=',date('Y-m-d'));
        });

        if ($type == 1) {

            if ($post_style != "") {
                $postPin = $postPin->where('post.post_bed','=',$post_style);
                $postNormal = $postNormal->where('post.post_bed','=',$post_style);
            }

            if ($post_status != "") {
                $postPin = $postPin->where('post.post_status_rent','=',$post_status);
                $postNormal = $postNormal->where('post.post_status_rent','=',$post_status);
            }

            if ($price_low != "") {
                $postPin = $postPin->where('post.post_rent_price','>=',$price_low);
                $postNormal = $postNormal->where('post.post_rent_price','>=',$price_low);
            }

            if ($price_high != "") {
                $postPin = $postPin->where('post.post_rent_price','<=',$price_high);
                $postNormal = $postNormal->where('post.post_rent_price','<=',$price_high);
            }


            $postPin = $postPin->whereIn('post.post_type',[1,3])
            ->where('post.post_rent_price','>=',env('MINRENT'))
            ->orderBy('post.action_datetime','DESC')->orderBy('post.post_status_rent','DESC');
            $postNormal = $postNormal->whereIn('post.post_type',[1,3])
            ->where('post.post_rent_price','>=',env('MINRENT'))
            ->orderBy('post.post_status_rent','DESC')->orderBy('post.action_datetime','DESC');

        }

        if ($type == 2) {

            if ($post_style != "") {
                $postPin = $postPin->where('post.post_bed','=',$post_style);
                $postNormal = $postNormal->where('post.post_bed','=',$post_style);
            }

            if ($post_status != "") {
                $postPin = $postPin->where('post.post_status_sale','=',$post_status);
                $postNormal = $postNormal->where('post.post_status_sale','=',$post_status);
            }

            if ($price_low != "") {
                $postPin = $postPin->where('post.post_sale_price','>=',$price_low);
                $postNormal = $postNormal->where('post.post_sale_price','>=',$price_low);
            }

            if ($price_high != "") {
                $postPin = $postPin->where('post.post_sale_price','<=',$price_high);
                $postNormal = $postNormal->where('post.post_sale_price','<=',$price_high);
            }


            $postPin = $postPin->whereIn('post.post_type',[2,3])
            ->orderBy('post.action_datetime','DESC')->orderBy('post.post_status_sale','DESC');
            $postNormal = $postNormal->whereIn('post.post_type',[2,3])
            ->orderBy('post.post_status_sale','DESC')->orderBy('post.action_datetime','DESC');

        }


        $postPin = $postPin
        ->whereNotNull('post_accept_pin')
        ->limit(0)->get();

        $postNormal = $postNormal
        ->orderBy('post.post_no','DESC')        
        ->orderBy('post_accept_pin','DESC')
        ->limit(25)->offset($offset)->get();

        $pinList = [];
        foreach ($postPin as $postData) {
            if ($type == 1) {
                $post_price = $postData->post_rent_price;
                $post_status = $postData->post_status_rent;
                $post_url = route('rent',[$postData->id,$postData->post_no,
                str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)]);
            } else if ($type == 2) {
                $post_price = $postData->post_sale_price;
                $post_status = $postData->post_status_sale;
                $post_url = route('sale',[$postData->id,$postData->post_no,
                str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)]);
            }
            $tempPin = array(
                'post_id' => $postData->id,
                'post_no' => $postData->post_no,
                'post_type' => $postData->post_type,
                'post_bed' => $postData->post_bed,
                'post_baths' => $postData->post_baths,
                'post_building' => $postData->post_building,
                'post_phase' => $postData->post_phase,
                'post_floor' => $postData->post_floor,
                'post_image' => getFileUrl( $postData->post_image_title , '/' ),
                'post_type' => $type,
                'post_area_total' => $postData->post_area_total,
                'post_price' => $post_price,
                'post_header' => $postData->post_header_en,
                'post_url' => $post_url,
                'post_status' => $post_status,
                'action_datetime'=> $postData->action_datetime,
                'post_contract_expire'=> $postData->post_contract_expire,
            );
            array_push($pinList,$tempPin);
        }

        $normalList = [];
        foreach ($postNormal as $postData) {
            if ($type == 1) {
                $post_price = $postData->post_rent_price;
                $post_status = $postData->post_status_rent;
                $post_url = route('rent',[$postData->id,$postData->post_no,
                str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)]);
            } else if ($type == 2) {
                $post_price = $postData->post_sale_price;
                $post_status = $postData->post_status_sale;
                $post_url = route('sale',[$postData->id,$postData->post_no,
                str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)]);
            }
            $tempNormal = array(
                'post_id' => $postData->id,
                'post_no' => $postData->post_no,
                'post_type' => $postData->post_type,
                'post_bed' => $postData->post_bed,
                'post_baths' => $postData->post_baths,
                'post_building' => $postData->post_building,
                'post_phase' => $postData->post_phase,
                'post_floor' => $postData->post_floor,
                'post_image' => getFileUrl( $postData->post_image_title , '/' ),
                'post_type' => $type,
                'post_area_total' => $postData->post_area_total,
                'post_price' => $post_price,
                'post_header' => $postData->post_header_en,
                'post_url' => $post_url,
                'post_status' => $post_status,
                'action_datetime'=> $postData->action_datetime,
                'post_contract_expire'=> $postData->post_contract_expire,
            );
            array_push($normalList,$tempNormal);
        }

        $data['pinList'] = $pinList;
        $data['normalList'] = $normalList;

        if ($type == 1) {
            return view('ajax_v2.components.th.getPostRentArea',$data);
            // return view('ajax.components.getPostRentCondo',$data);
        } else if ($type == 2) {
            return view('ajax_v2.components.th.getPostSaleArea',$data);
            // return view('ajax.components.getPostSaleCondo',$data);
        }
    }

    public function getPostCondoEN(Request $request,$condo_id,$type)
    {

        $post_style = $request->post_style;
        $post_status = $request->post_status;
        $page = $request->page;
        $price_low = $request->price_low;
        $price_high = $request->price_high;

        $offset = ($page - 1) * 25;


        $postPin = Post::select('post.*')
        ->whereNull('post.post_delete_datetime')
        ->where('post.post_close','=',0)
        ->where('post.condo_id','=',$condo_id)   
        ->where(function ($query)  {
          $query
            ->whereNull('post.post_expire')
            ->orWhere('post.post_expire','>=',date('Y-m-d'));
        });

        $postNormal = Post::select('post.*')
        ->whereNull('post.post_delete_datetime')
        ->where('post.post_close','=',0)
        ->where('post.condo_id','=',$condo_id)    
        ->where(function ($query)  {
          $query
            ->whereNull('post.post_expire')
            ->orWhere('post.post_expire','>=',date('Y-m-d'));
        });

        if ($type == 1) {

            if ($post_style != "") {
                $postPin = $postPin->where('post.post_bed','=',$post_style);
                $postNormal = $postNormal->where('post.post_bed','=',$post_style);
            }

            if ($post_status != "") {
                $postPin = $postPin->where('post.post_status_rent','=',$post_status);
                $postNormal = $postNormal->where('post.post_status_rent','=',$post_status);
            }

            if ($price_low != "") {
                $postPin = $postPin->where('post.post_rent_price','>=',$price_low);
                $postNormal = $postNormal->where('post.post_rent_price','>=',$price_low);
            }

            if ($price_high != "") {
                $postPin = $postPin->where('post.post_rent_price','<=',$price_high);
                $postNormal = $postNormal->where('post.post_rent_price','<=',$price_high);
            }


            $postPin = $postPin->whereIn('post.post_type',[1,3])
            ->where('post.post_rent_price','>=',env('MINRENT'))
            ->orderBy('post.action_datetime','DESC')->orderBy('post.post_status_rent','DESC');
            $postNormal = $postNormal->whereIn('post.post_type',[1,3])
            ->where('post.post_rent_price','>=',env('MINRENT'))
            ->orderBy('post.post_status_rent','DESC')->orderBy('post.action_datetime','DESC');

        }

        if ($type == 2) {

            if ($post_style != "") {
                $postPin = $postPin->where('post.post_bed','=',$post_style);
                $postNormal = $postNormal->where('post.post_bed','=',$post_style);
            }

            if ($post_status != "") {
                $postPin = $postPin->where('post.post_status_sale','=',$post_status);
                $postNormal = $postNormal->where('post.post_status_sale','=',$post_status);
            }

            if ($price_low != "") {
                $postPin = $postPin->where('post.post_sale_price','>=',$price_low);
                $postNormal = $postNormal->where('post.post_sale_price','>=',$price_low);
            }

            if ($price_high != "") {
                $postPin = $postPin->where('post.post_sale_price','<=',$price_high);
                $postNormal = $postNormal->where('post.post_sale_price','<=',$price_high);
            }


            $postPin = $postPin->whereIn('post.post_type',[2,3])
            ->orderBy('post.action_datetime','DESC')->orderBy('post.post_status_sale','DESC');
            $postNormal = $postNormal->whereIn('post.post_type',[2,3])
            ->orderBy('post.post_status_sale','DESC')->orderBy('post.action_datetime','DESC');

        }


        $postPin = $postPin
        ->whereNotNull('post_accept_pin')
        ->limit(0)->get();

        $postNormal = $postNormal
        ->orderBy('post.post_no','DESC')        
        ->orderBy('post_accept_pin','DESC')
        ->limit(25)->offset($offset)->get();

        $pinList = [];
        foreach ($postPin as $postData) {
            if ($type == 1) {
                $post_price = $postData->post_rent_price;
                $post_status = $postData->post_status_rent;
                $post_url = route('rent',[$postData->id,$postData->post_no,
                str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)]);
            } else if ($type == 2) {
                $post_price = $postData->post_sale_price;
                $post_status = $postData->post_status_sale;
                $post_url = route('sale',[$postData->id,$postData->post_no,
                str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)]);
            }
            $tempPin = array(
                'post_id' => $postData->id,
                'post_no' => $postData->post_no,
                'post_type' => $postData->post_type,
                'post_bed' => $postData->post_bed,
                'post_baths' => $postData->post_baths,
                'post_building' => $postData->post_building,
                'post_phase' => $postData->post_phase,
                'post_floor' => $postData->post_floor,
                'post_image' => getFileUrl( $postData->post_image_title , '/' ),
                'post_type' => $type,
                'post_area_total' => $postData->post_area_total,
                'post_price' => $post_price,
                'post_header' => $postData->post_header_en,
                'post_url' => $post_url,
                'post_status' => $post_status,
                'action_datetime'=> $postData->action_datetime,
                'post_contract_expire'=> $postData->post_contract_expire,
            );
            array_push($pinList,$tempPin);
        }

        $normalList = [];
        foreach ($postNormal as $postData) {
            if ($type == 1) {
                $post_price = $postData->post_rent_price;
                $post_status = $postData->post_status_rent;
                $post_url = route('rent',[$postData->id,$postData->post_no,
                str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)]);
            } else if ($type == 2) {
                $post_price = $postData->post_sale_price;
                $post_status = $postData->post_status_sale;
                $post_url = route('sale',[$postData->id,$postData->post_no,
                str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $postData->post_header_en)]);
            }
            $tempNormal = array(
                'post_id' => $postData->id,
                'post_no' => $postData->post_no,
                'post_type' => $postData->post_type,
                'post_bed' => $postData->post_bed,
                'post_baths' => $postData->post_baths,
                'post_building' => $postData->post_building,
                'post_phase' => $postData->post_phase,
                'post_floor' => $postData->post_floor,
                'post_image' => getFileUrl( $postData->post_image_title , '/' ),
                'post_type' => $type,
                'post_area_total' => $postData->post_area_total,
                'post_price' => $post_price,
                'post_header' => $postData->post_header_en,
                'post_url' => $post_url,
                'post_status' => $post_status,
                'action_datetime'=> $postData->action_datetime,
                'post_contract_expire'=> $postData->post_contract_expire,
            );
            array_push($normalList,$tempNormal);
        }

        $data['pinList'] = $pinList;
        $data['normalList'] = $normalList;

        if ($type == 1) {
            return view('ajax_v2.components.en.getPostRentArea',$data);
            // return view('ajax.components.getPostRentCondo',$data);
        } else if ($type == 2) {
            return view('ajax_v2.components.en.getPostSaleArea',$data);
            // return view('ajax.components.getPostSaleCondo',$data);
        }
    }

    // ****************************************************************************************
    // หน้าขาย-เช่า******************************************************************************
    public function rent($post_id,$post_no,$post_title)
    {
        $post = Post::find($post_id);

        if ( $post && $post->post_no == $post_no && $post->post_close == 0) {

            $condo = Condo::select('condo.*','condo_custom.condo_url_en','condo_custom.condo_url_th')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->where('condo_custom.active_status','=',1)
            ->where('condo.condo_id','=',$post->condo_id)
            ->where('condo.delete_status','=','0')->first();

            if (!$condo) {
                return abort(404);
            }
            
            $condoImage = CondoImage::where('condo_id','=',$condo->condo_id)->get();
            $data["condo_image"] = [];

            foreach ($condoImage as $row) {
                array_push($data["condo_image"],getFileUrl( $row->image_name , '/' ));
            }

            $area = Area::select('area.*','area_custom.area_url_en')
            ->leftjoin(env('DB_DATABASE_2').'.area_custom as area_custom','area_custom.area_id','=','area.area_id')
            ->where('area.area_id','=',$condo->area_id)->first();

            $data['url'] = route('rent',[$post->id,$post->post_no,$post->post_header_en]);

            $data['area_url'] = route('area',$area->area_url_en);
            $data['condo_url'] = route('condo',[$condo->condo_url_en]);
            $data['condo_google_map_link'] = $condo->condo_google_map_link;
            $data['condo'] = $condo;
            $data['area'] = $area;
            $data['post'] = $post;
            $data['post_image_title'] = getFileUrl( $post->post_image_title , '/' );
            $data["condo_image_banner"] = getFileUrl( $condo->condo_image_banner , '/' );
            $data["condo_image_banner_alt"] = $condo->condo_image_banner_alt;

            $PostImage = PostImage::where('post_id','=',$post_id)->get();
            $imageList = [];

            array_push($imageList,getFileUrl( $post->post_image_title , '/' ));

            foreach ($PostImage as $row) {
                array_push($imageList,getFileUrl( $row->image_name , '/' ));
            }

            $data["imageList"] = $imageList;

            $data["condo_landmark"] = [];

            $landmark = LandmarkCondo::select("landmark.landmark_name_en",'landmark.landmark_id')
            ->leftJoin('landmark','landmark.landmark_id','=','landmark_condo.landmark_id')
            ->where('landmark.active_status','=','1')
            ->where('landmark_condo.condo_id','=',$condo->condo_id)
            ->orderBy('landmark.landmark_name_en', 'ASC')->get();

            foreach ($landmark as $row) {
                $temp = array(
                    "name" => $row->landmark_name_en,
                    "url" => route('landmark',[$row->landmark_id,$row->landmark_name_en]),
                );
                array_push($data["condo_landmark"],$temp);
            }

            $university = UniversityCondo::select("university.university_name_en",'university_custom.university_url_en')
            ->leftJoin('university','university.university_id','=','university_condo.university_id')
            ->leftJoin(env('DB_DATABASE_2').'.university_custom as university_custom','university_custom.university_id','=','university.university_id')
            ->where('university_custom.active_status','=',1)
            ->where('university_condo.condo_id','=',$condo->condo_id)
            ->orderBy('university.university_name_en','ASC')->get();

            foreach ($university as $row) {
                $temp = array(
                    "name" => $row->university_name_en,
                    "url" => route('university',$row->university_url_en),
                );
                array_push($data["condo_landmark"],$temp);
            }

            $train = TrainCondo::select("train_station.train_station_name_en",'train_station_custom.train_station_url_en')
            ->leftJoin('train_station','train_station.train_station_id','=','train_condo.train_station_id')
            ->leftJoin(env('DB_DATABASE_2').'.train_station_custom as train_station_custom','train_station_custom.train_station_id','=','train_station.train_station_id')
            ->where('train_station_custom.active_status','=',1)
            ->where('train_condo.condo_id','=',$condo->condo_id)
            ->orderBy('train_station.train_station_name','ASC')->get();

            foreach ($train as $row) {
                $temp = array(
                    "name" => $row->train_station_name_en,
                    "url" => route('station',$row->train_station_url_en),
                );
                array_push($data["condo_landmark"],$temp);
            }


                
               
            // ต้องใส่เพื่อเปลี่ยนภาษา******************************************
            $url = 'https://scancondo.com/get/url/post?type=1&id='.$post_id;
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_HTTPGET, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response_json = curl_exec($ch);
            curl_close($ch);
            $response=json_decode($response_json, true);
            // ต้องใส่เพื่อเปลี่ยนภาษา******************************************
            $data['url'] = $response['url'];

            // return view('front-toon.rent',$data);
            return view('front_v2.rent',$data);

        } else {
            $post = Post::find($post_no);
            if ($post) {
                return redirect()->route('rent',[$post->id,$post->post_no, str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $post->post_header_en)]);
            } else {
                return abort(404);
            }
        }
    }
    public function sale($post_id,$post_no,$post_title)
    {
        $post = Post::find($post_id);

        if ( $post && $post->post_no == $post_no && $post->post_close == 0) {

            $condo = Condo::select('condo.*','condo_custom.condo_url_en','condo_custom.condo_url_th')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->where('condo_custom.active_status','=',1)
            ->where('condo.condo_id','=',$post->condo_id)
            ->where('condo.delete_status','=','0')->first();

            if (!$condo) {
                return abort(404);
            }

            $condoImage = CondoImage::where('condo_id','=',$condo->condo_id)->get();
            $data["condo_image"] = [];

            foreach ($condoImage as $row) {
                array_push($data["condo_image"],getFileUrl( $row->image_name , '/' ));
            }

            $area = Area::select('area.*','area_custom.area_url_en')
            ->leftjoin(env('DB_DATABASE_2').'.area_custom as area_custom','area_custom.area_id','=','area.area_id')
            ->where('area.area_id','=',$condo->area_id)->first();

            $data['url'] = route('sale',[$post->id,$post->post_no,$post->post_header_en]);

            $data['area_url'] = route('area',$area->area_url_en);
            $data['condo_url'] = route('condo',[$condo->condo_url_en]);
            $data['condo_google_map_link'] = $condo->condo_google_map_link;
            $data['condo'] = $condo;
            $data['area'] = $area;
            $data['post'] = $post;
            $data['post_image_title'] = getFileUrl( $post->post_image_title , '/' );
            $data["condo_image_banner"] = getFileUrl( $condo->condo_image_banner , '/' );
            $data["condo_image_banner_alt"] = $condo->condo_image_banner_alt;

            $PostImage = PostImage::where('post_id','=',$post_id)->get();
            $imageList = [];
            array_push($imageList,getFileUrl( $post->post_image_title , '/' ));
            foreach ($PostImage as $row) {
                array_push($imageList,getFileUrl( $row->image_name , '/' ));
            }

            $data["imageList"] = $imageList;

            $data["condo_landmark"] = [];

            $landmark = LandmarkCondo::select("landmark.landmark_name_en",'landmark.landmark_id')
            ->leftJoin('landmark','landmark.landmark_id','=','landmark_condo.landmark_id')
            ->where('landmark.active_status','=','1')
            ->where('landmark_condo.condo_id','=',$condo->condo_id)
            ->orderBy('landmark.landmark_name_en', 'ASC')->get();

            foreach ($landmark as $row) {
                $temp = array(
                    "name" => $row->landmark_name_en,
                    "url" => route('landmark',[$row->landmark_id,$row->landmark_name_en]),
                );
                array_push($data["condo_landmark"],$temp);
            }

            $university = UniversityCondo::select("university.university_name_en",'university_custom.university_url_en')
            ->leftJoin('university','university.university_id','=','university_condo.university_id')
            ->leftJoin(env('DB_DATABASE_2').'.university_custom as university_custom','university_custom.university_id','=','university.university_id')
            ->where('university_custom.active_status','=',1)
            ->where('university_condo.condo_id','=',$condo->condo_id)
            ->orderBy('university.university_name_en','ASC')->get();

            foreach ($university as $row) {
                $temp = array(
                    "name" => $row->university_name_en,
                    "url" => route('university',$row->university_url_en),
                );
                array_push($data["condo_landmark"],$temp);
            }

            $train = TrainCondo::select("train_station.train_station_name",'train_station_custom.train_station_url_en')
            ->leftJoin('train_station','train_station.train_station_id','=','train_condo.train_station_id')
            ->leftJoin(env('DB_DATABASE_2').'.train_station_custom as train_station_custom','train_station_custom.train_station_id','=','train_station.train_station_id')
            ->where('train_station_custom.active_status','=',1)
            ->where('train_condo.condo_id','=',$condo->condo_id)
            ->orderBy('train_station.train_station_name','ASC')->get();

            foreach ($train as $row) {
                $temp = array(
                    "name" => $row->train_station_name,
                    "url" => route('station',$row->train_station_url_en),
                );
                array_push($data["condo_landmark"],$temp);
            }

            // ต้องใส่เพื่อเปลี่ยนภาษา******************************************
            $url = 'https://scancondo.com/get/url/post?type=2&id='.$post_id;
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_HTTPGET, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response_json = curl_exec($ch);
            curl_close($ch);
            $response=json_decode($response_json, true);
            // ต้องใส่เพื่อเปลี่ยนภาษา******************************************
           
            $data['url'] = $response['url'];
            return view('front_v2.sale',$data);
            // return view('front-toon.sale',$data);

        } else {
            $post = Post::find($post_no);
            if ($post) {
                return redirect()->route('sale',[$post->id,$post->post_no, str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $post->post_header_en)]);
            } else {
                return abort(404);
            }
        }
    }

    public function getPostOthTH($post_id,$type)
    {
        $post = Post::find($post_id);
        $postOther = Post::where('condo_id', '=', $post->condo_id)
        ->where('id', '!=', $post_id)
        ->whereIn('post_type', [$type, 3])
        ->whereNull('post_delete_datetime')
        ->where('post_close','=',0)
        ->inRandomOrder()->limit(12)->get();
        $otherList = [];
        foreach ($postOther as $postData) {
            if ($type == 1) {
                $post_price = $postData->post_rent_price;
                $post_url = route('rent',[$postData->id,$postData->post_no,$postData->post_header]);
            } else if ($type == 2) {
                $post_price = $postData->post_sale_price;
                $post_url = route('sale',[$postData->id,$postData->post_no,$postData->post_header]);
            }
            $temp = array(
                'post_id' => $postData->id,
                'post_bed' => $postData->post_bed,
                'post_floor' => $postData->post_floor,
                'post_building' => $postData->post_building,
                'post_area_total' => $postData->post_area_total,
                'post_price' => $post_price,
                'post_url' => $post_url,
                'post_image' => getFileUrl( $postData->post_image_title , '/' ),
                'post_header' => $postData->post_header,
                'post_status' => $type,
            );
            array_push($otherList,$temp);
        }
        $data['post'] = $otherList;
        return view('ajax_v2.components.th.getPostOth',$data);
    }

    public function getPostOthEN($post_id,$type)
    {
        $post = Post::find($post_id);
        $postOther = Post::where('condo_id', '=', $post->condo_id)
        ->where('id', '!=', $post_id)
        ->whereIn('post_type', [$type, 3])
        ->whereNull('post_delete_datetime')
        ->where('post_close','=',0)
        ->inRandomOrder()->limit(12)->get();
        $otherList = [];
        foreach ($postOther as $postData) {
            if ($type == 1) {
                $post_price = $postData->post_rent_price;
                $post_url = route('rent',[$postData->id,$postData->post_no,$postData->post_header]);
            } else if ($type == 2) {
                $post_price = $postData->post_sale_price;
                $post_url = route('sale',[$postData->id,$postData->post_no,$postData->post_header]);
            }
            $temp = array(
                'post_id' => $postData->id,
                'post_bed' => $postData->post_bed,
                'post_floor' => $postData->post_floor,
                'post_building' => $postData->post_building,
                'post_area_total' => $postData->post_area_total,
                'post_price' => $post_price,
                'post_url' => $post_url,
                'post_image' => getFileUrl( $postData->post_image_title , '/' ),
                'post_header' => $postData->post_header,
                'post_status' => $type,
            );
            array_push($otherList,$temp);
        }
        $data['post'] = $otherList;
        return view('ajax_v2.components.en.getPostOth',$data);
    }
    // ****************************************************************************************
    // หน้าข่าว-บทความ**************************************************************************
    public function news()
    {
        $news = News::orderBy('news_datetime',"desc")->paginate(8,['*'],'pageNews');
        $newsList = [];
        foreach ($news as $data) {
                $temp = array(
                    'image' => getFileUrl( $data->news_image , '/' ),
                    'title' => $data->news_title,
                    'title_en' => $data->news_title_en,
                    // xxxx
                    'url' => route('newsDetail',[$data->id,
                    // $data->news_title
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $data->news_title)
                    ]),
                    'url_en' => route('newsDetail',[$data->id,
                    // $data->news_title
                    str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $data->news_title_en)
                    ]),
                    'datetime' => date('d/m/Y',strtotime($data->news_datetime)),
                    'detail' => mb_substr(strip_tags(str_replace("&nbsp;"," ",$data->news_description)),0,200,"utf-8"),
                    'detail_en' => mb_substr(strip_tags(str_replace("&nbsp;"," ",$data->news_description_en)),0,200,"utf-8"),
                );
                array_push($newsList,$temp);
            }
            $data['news'] = $newsList;
            $data['pagination'] = $news->links();

            // ต้องใส่เพื่อเปลี่ยนภาษา******************************************
            $url = env('URLTH').'/ข่าวสาร'; $data['url'] = $url;
            // ต้องใส่เพื่อเปลี่ยนภาษา******************************************

        return view('front_v2.news',$data);
    }

    public function newsDetail($id,$keyword)
    {
        $news = News::find($id);
        $data['image'] = getFileUrl( $news->news_image , '/' );
        // $data['title'] = $news->news_title_en;
        // $data['detail'] = $news->news_description_en;
        $data['title'] = $news->news_title;
        $data['title_en'] = $news->news_title_en;
        $data['detail'] = $news->news_description;
        $data['detail_en'] = $news->news_description_en;
        $data['datetime'] = date('d/m/Y',strtotime($news->news_datetime));
        // ต้องใส่เพื่อเปลี่ยนภาษา******************************************
        $headernews = str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $news->news_title);
        $url = env('URLTH').'/ข่าวสาร/'.$news->id.'/'.$headernews;
        $data['url'] = $url;
        // ต้องใส่เพื่อเปลี่ยนภาษา******************************************

        return view('front_v2.newsDetail',$data);
    }


    // ****************************************************************************************
    // หน้าย่อย
    public function want()
    {
        // ต้องใส่เพื่อเปลี่ยนภาษา******************************************
        $url = env('URLTH').'/หาเช่าคอนโด/หาซื้อคอนโด'; $data['url'] = $url;
        // ต้องใส่เพื่อเปลี่ยนภาษา******************************************
        return view('front_v2.want',$data);
    }
    public function agenttoon()
    {
        // ต้องใส่เพื่อเปลี่ยนภาษา******************************************
        $url = env('URLTH').'/ร่วมงานกับเรา'; $data['url'] = $url;
        // ต้องใส่เพื่อเปลี่ยนภาษา******************************************
        return view('front_v2.agenttoon',$data);
    }
    public function servicestoon()
    {
        // ต้องใส่เพื่อเปลี่ยนภาษา******************************************
        $url = env('URLTH').'/บริการของเรา'; $data['url'] = $url;
        // ต้องใส่เพื่อเปลี่ยนภาษา******************************************
        return view('front_v2.servicestoon',$data);
    }
    public function contacttoon()
    {
        // ต้องใส่เพื่อเปลี่ยนภาษา******************************************
        $url = env('URLTH').'/ติดต่อเรา'; $data['url'] = $url;
        // ต้องใส่เพื่อเปลี่ยนภาษา******************************************
        return view('front_v2.contacttoon',$data);
    }
    public function ratetoon()
    {
    // ต้องใส่เพื่อเปลี่ยนภาษา******************************************
    $url = env('URLTH').'/Payment'; $data['url'] = $url;
    // ต้องใส่เพื่อเปลี่ยนภาษา******************************************
        return view('front_v2.ratetoon',$data);
    }
    public function deposit()
    {
    // ต้องใส่เพื่อเปลี่ยนภาษา******************************************
    $url = env('URLTH').'/ฝากเช่าคอนโด/ฝากขายคอนโด'; $data['url'] = $url;
    // ต้องใส่เพื่อเปลี่ยนภาษา******************************************
        return view('front_v2.deposit',$data);
    }
    // ****************************************************************************************
    public function wantSave(Request $request)
    {

        $want = new Want;
        $want->want_type = $request->want_type;
        $want->condo_name = $request->condo_name;
        $want->want_bed = $request->want_room_style;
        $want->want_area_total = $request->want_room_size;
        $want->want_time_period = $request->want_time_period;
        $want->want_time_stay = $request->want_time_stay;
        $want->want_reason = $request->want_reason;

        if ($request->want_type == 1) {
            $want_price = $request->want_price_rent;
        } else {
            $want_price = $request->want_price_sale;
        }
        
        $want->want_price = $want_price;

        $want->want_description = $request->want_detail;
        $want->want_customer_name = $request->want_name;
        $want->want_customer_phone = $request->want_phone;
        $want->want_customer_line = $request->want_line;
        $want->want_customer_email = $request->want_email;

        if ($want->save()) {

            $want_id = $want->id;

            switch ($request->want_type) {
                case '1': $dep_type = "ต้องการเช่า"; break;
                case '2': $dep_type = "ต้องการซื้อ"; break;
            }

            $room_detail = "รูปแบบ ";

            if ($request->want_room_style <= 6) {
                $room_detail .= "$request->want_room_style ห้องนอน\r\n";
            } else {
                switch ($request->want_room_style) {
                    case '7': $room_detail .= "Studio\r\n"; break;
                    case '8': $room_detail .= "Penthouse\r\n"; break;
                    case '9': $room_detail .= "Duplex\r\n"; break;
                }
            }

            if (isset($request->want_room_size) && $request->want_room_size != "") {
                $room_detail .= " พื้นที่ $request->want_room_size ตร.ม.\r\n";
            }

            if ($request->want_type == 1) {
                $room_detail .= " ราคา ".number_format($request->want_price_rent)." บาท";
            } elseif ($request->want_type == 2) {
                $room_detail .= " ราคา ".number_format($request->want_price_sale)." บาท";
            }

            $remark = strip_tags($request->want_detail);

            $msgLineNotify = "$dep_type\r\n$request->condo_name\r\nคุณ $request->want_name\r\nโทร : $request->want_phone\r\nLine : $request->want_line\r\nรายละเอียด\r\n$room_detail\r\nเพิ่มเติม : $remark";

            $StrokeAlert = env('LINE_NOTI_TOKEN');

            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
            date_default_timezone_set("Asia/Bangkok");

            $chOne = curl_init();
            curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
            curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt( $chOne, CURLOPT_POST, 1);
            curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$msgLineNotify);
            $headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$StrokeAlert.'', );
            curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
            curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec( $chOne );

            curl_close( $chOne );
            $status = 1;
        } else {
            $status = 0;
        }

        return response()->json(['status' => $status]);
    }

    public function depositSave(Request $request)
    {

        $Deposit = new Deposit;
        $Deposit->deposit_type = $request->deposit_type;
        $Deposit->condo_name = $request->condo_name;
        $Deposit->deposit_bed = $request->deposit_room_style;
        $Deposit->deposit_baths = $request->deposit_room_bath;
        $Deposit->deposit_building = $request->deposit_room_building;
        $Deposit->deposit_phase = $request->deposit_room_phase;
        $Deposit->deposit_sale_type = $request->deposit_sale_type;
        $Deposit->deposit_sale_hold = $request->deposit_sale_hold;
        $Deposit->deposit_area_total = $request->deposit_room_size;
        $Deposit->deposit_floor = $request->deposit_room_floor;
        $Deposit->deposit_residents = $request->deposit_room_live;
        $Deposit->deposit_rent_price = $request->deposit_price_rent;
        $Deposit->deposit_sale_price = $request->deposit_price_sale;
        $Deposit->deposit_description = $request->deposit_detail;
        $Deposit->deposit_customer_name = $request->deposit_name;
        $Deposit->deposit_customer_phone = $request->deposit_phone;
        $Deposit->deposit_customer_line = $request->deposit_line;
        $Deposit->deposit_customer_email = $request->deposit_email;
        $Deposit->deposit_owner_type = $request->deposit_owner_type;

        if ($Deposit->save()) {

            $deposit_id = $Deposit->id;

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $file) {
                    $fileNamePost = date('YmdHis').rand();
                    $DepositImage = new DepositImage;
                    $DepositImage->deposit_id = $deposit_id;
                    $DepositImage->image_name = uploadResize( $file , $fileNamePost , '/' , 1000 );
                    $DepositImage->save();
                }
            }

            switch ($request->deposit_type) {
                case '1': $dep_type = "ฝากเช่า"; break;
                case '2': $dep_type = "ฝากขาย"; break;
                case '3': $dep_type = "ฝากเช่า/ขาย"; break;
            }

            $room_detail = "รูปแบบ ";

            if ($request->deposit_room_style <= 6) {
                $room_detail .= "$request->deposit_room_style ห้องนอน $request->deposit_room_bath ห้องน้ำ\r\n";
            } else {
                switch ($request->deposit_room_style) {
                case '7': $room_detail .= "Studio\r\n"; break;
                case '8': $room_detail .= "Penthouse\r\n"; break;
                case '9': $room_detail .= "Duplex\r\n"; break;
                }
            }

            if (isset($request->deposit_room_size) && $request->deposit_room_size != "") {
                $room_detail .= " พื้นที่ $request->deposit_room_size ตร.ม.";
            }

            if (isset($request->deposit_room_floor) && $request->deposit_room_floor != "") {
                $room_detail .= " ชั้น $request->deposit_room_floor";
            }

            if (isset($request->deposit_room_phase) && $request->deposit_room_phase != "") {
                $room_detail .= " เฟส $request->deposit_room_phase";
            }

            if (isset($request->deposit_room_building) && $request->deposit_room_building != "") {
                $room_detail .= " ตึก $request->deposit_room_building";
            }

            $remark = strip_tags($request->deposit_detail);

            $msgLineNotify = "$dep_type\r\n$request->condo_name\r\nคุณ $request->deposit_name\r\nโทร : $request->deposit_phone\r\nLine : $request->deposit_line\r\nรายละเอียด\r\n$room_detail\r\nเพิ่มเติม : $remark";

            $StrokeAlert = env('LINE_NOTI_TOKEN');

            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
            date_default_timezone_set("Asia/Bangkok");

            $chOne = curl_init();
            curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
            curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt( $chOne, CURLOPT_POST, 1);
            curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$msgLineNotify);
            $headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$StrokeAlert.'', );
            curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
            curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec( $chOne );

            curl_close( $chOne );

        }

        return redirect()->route('deposit');
    }

    public function agentSave(Request $request)
    {
        $Agent = new Agent;
        $Agent->agent_name = $request->agent_name;
        $Agent->agent_phone = $request->agent_phone;
        $Agent->agent_birthday = $request->agent_birthday;
        $Agent->agent_line = $request->agent_line;
        $Agent->agent_email = $request->agent_email;
        $Agent->agent_skill = $request->agent_skill;
        $Agent->agent_type = $request->agent_type;
        $Agent->agent_want_post = $request->agent_want_post;
        $Agent->agent_want_theme = $request->agent_want_theme;
        $Agent->agent_want_co = $request->agent_want_co;

        if ($Agent->save()) {
        $status = 1;
        } else {
        $status = 0;
        }

        return response()->json(['status' => $status]);
    }

    public function contactSave(Request $request)
    {
        $contact = new Contact;
        $contact->contact_name = $request->contact_name;
        $contact->contact_phone = $request->contact_phone;
        $contact->contact_email = $request->contact_email;
        $contact->contact_subject = $request->contact_subject;
        $contact->contact_description = $request->contact_description;
        $contact->contact_datetime = date('Y-m-d H:i:s');

        if ($contact->save()) {
          $status = 1;
        } else {
          $status = 0;
        }

        return response()->json(['status' => $status]);
    }
    // ****************************************************************************************
    
}
