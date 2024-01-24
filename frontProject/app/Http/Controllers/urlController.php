<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

class urlController extends Controller
{
    public function getUrlArea()
    {
        $id = $_GET['id'];
        $area = Zone::select('zone.zone_name','area.area_name','zone.zone_name_en','area.area_name_en','area_custom.area_url_en')
        ->leftjoin(env('DB_DATABASE_2').'.zone_custom as zone_custom','zone_custom.zone_id','=','zone.zone_id')
        ->leftjoin('area','area.area_id','=','area.area_id')
        ->leftjoin(env('DB_DATABASE_2').'.area_custom as area_custom','area_custom.area_id','=','area.area_id')
        ->where('zone_custom.active_status','=','1')
        ->where('area_custom.active_status','=','1')
        ->where('area.area_id','=',$id)
        ->first();

        $data['url'] = route('area',$area->area_url_en);

        return response()->json($data);
    }
    public function getUrlTrain()
    {
        $id = $_GET['id'];
        $train = TrainType::select('train_type.train_type_name','train_station.train_station_name','train_type.train_type_name_en','train_station.train_station_name_en','train_station_custom.train_station_url','train_station_custom.train_station_url_en')
        ->leftjoin(env('DB_DATABASE_2').'.train_type_custom as train_type_custom','train_type_custom.train_type_id','=','train_type.train_type_id')
        ->leftjoin('train_station','train_station.train_type_id','=','train_type.train_type_id')
        ->leftjoin(env('DB_DATABASE_2').'.train_station_custom as train_station_custom','train_station_custom.train_station_id','=','train_station.train_station_id')
        ->where('train_type_custom.active_status','=','1')
        ->where('train_station_custom.active_status','=','1')
        ->where('train_station.train_station_id','=',$id)
        ->first();
        $data['url'] = route('station',$train->train_station_url_en);
        return response()->json($data);
    }
    public function getUrlUniversity()
    {
        $id = $_GET['id'];
        $university = University::select('university.university_name','university.university_name_en','university_custom.university_url_en')
        ->leftjoin(env('DB_DATABASE_2').'.university_custom as university_custom','university_custom.university_id','=','university.university_id')
        ->where('university_custom.active_status','=','1')
        ->where('university.university_id','=',$id)
        ->first();
        $data['url'] = route('university',$university->university_url_en);
        return response()->json($data);
    }
    public function getUrlLandmark()
    {
        $id = $_GET['id'];
        $landmarkType = LandmarkType::select('landmark_type.landmark_type_name','landmark.landmark_name','landmark_type.landmark_type_name_en','landmark.landmark_name_en','landmark.landmark_id')
        ->leftjoin('landmark','landmark.landmark_type_id','=','landmark_type.landmark_type_id')
        ->where('landmark_type.active_status','=','1')
        ->where('landmark.active_status','=','1')
        ->where('landmark.landmark_id','=',$id)
        ->first();
        $data['url'] = route('landmark',[$landmarkType->landmark_id,str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $landmarkType->landmark_name_en)]);
        return response()->json($data);
    }
    public function getUrlCondo()
    {
        $id = $_GET['id'];
        $condo = Condo::select('condo.*','condo_custom.condo_url_en')
        ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
        ->where('condo_custom.active_status','=',1)
        ->where('condo.delete_status','=','0')
        ->where('condo.condo_id','=',$id)
        ->first();
        $data['url'] = route('condo',[$condo->condo_url_en]);
        return response()->json($data);
    }
    public function getUrlPost()
    {
        $id = $_GET['id'];
        $type = $_GET['type'];
        $post = Post::find($id);
        if ($type == 1) {
            $post_url = route('rent',[$post->id,$post->post_no,str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $post->post_header_en)]);
        } else if ($type == 2) {
            $post_url = route('sale',[$post->id,$post->post_no,str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $post->post_header_en)]);
        }
        
        $data['url'] = $post_url;
        return response()->json($data);
    }

    // public function getUrlNewsindex()
    // {
    //     $data['url'] = route('news');
    //     return response()->json($data);
    // }

    public function getUrlNews()
    {
        $id = $_GET['id'];
        $news = News::find($id);
        $news_url = route('newsDetail',[$news->id,str_replace([' ', '/' , '%20' , '%28','%29'], ['-','-','-','-','-'], $news->news_title)]);
        $data['url'] = $news_url;
        return response()->json($data);
    }
}
