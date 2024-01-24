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
use Illuminate\Support\Facades\Route;

class oldController extends Controller
{
    public function train($id,$keyword1,$keyword2)
    {
        $station = TrainStation::select('train_station.*','train_type.train_type_sub','train_type.train_type_name','train_type.train_type_name_en')
        ->leftjoin(env('DB_DATABASE_2').'.train_station_custom as train_station_custom','train_station_custom.train_station_id','=','train_station.train_station_id')
        ->leftjoin('train_type','train_type.train_type_id','=','train_station.train_type_id')
        ->where('train_station_custom.active_status','=','1')
        ->where('train_station.train_station_id','=',$id)->first();
        if ($station) {
            $data['train_station_id'] = $station->train_station_id;
            $data['train_type_sub'] = $station->train_type_sub;
            $data['train_type_name'] = $station->train_type_name;
            $data['train_station_name'] = $station->train_station_name;
            $data['train_station_name_en'] = $station->train_station_name_en;
            $data['train_type_name_en'] = $station->train_type_name_en;
            $data['rent_url'] = route('station',$train_station_url);
            $data['sale_url'] = route('stationSale',$train_station_url);

            if (!Route::is('stationSale')) {
                $data['type'] = 1;
            } else {
                $data['type'] = 2;
            }

            $data['station_id'] = $station->train_station_id;

            $trainOption = TrainType::select('train_station.train_station_id','train_type.train_type_sub','train_type.train_type_name','train_station.train_station_name')
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
                    "name" => $row->train_type_sub." ".$row->train_type_name." - ".$row->train_station_name,
                    "value" => $row->train_station_id
                );
                array_push($optionList,$temp);
            }

            $data['optionList'] = $optionList;
            return view('front.station',$data);

        } else {
            return abort(404);
        }
    }
    public function area($id,$keyword1,$keyword2)
    {
        $area = Zone::select('zone.zone_name','area.area_name','area.area_name_en','area_custom.area_url','area.area_id')
        ->leftjoin(env('DB_DATABASE_2').'.zone_custom as zone_custom','zone_custom.zone_id','=','zone.zone_id')
        ->leftjoin('area','area.area_id','=','zone.zone_id')
        ->leftjoin(env('DB_DATABASE_2').'.area_custom as area_custom','area_custom.area_id','=','area.area_id')
        ->where('zone_custom.active_status','=','1')
        ->where('area_custom.active_status','=','1')
        ->where('area.area_id','=',$id)
        ->first();
        if ($area) {
            $data['area_id'] = $area->area_id;
            $data['zone_name'] = $area->zone_name;
            $data['area_name'] = $area->area_name;
            $data['area_name_en'] = $area->area_name_en;
            $data['rent_url'] = route('area',$area_url);
            $data['sale_url'] = route('areaSale',$area_url);

            if (!Route::is('areaSale')) {
                $data['type'] = 1;
            } else {
                $data['type'] = 2;
            }

            $areaOption = Area::select('area.area_name','area.area_id')
            ->leftjoin(env('DB_DATABASE_2').'.area_custom as area_custom','area_custom.area_id','=','area.area_id')
            ->where('area_custom.active_status','=','1')
            ->get();

            $optionList = [];
            foreach ($areaOption as $row) {
                $temp = array(
                    "name" => $row->area_name,
                    "value" => $row->area_id
                );
                array_push($optionList,$temp);
            }

            $data['optionList'] = $optionList;
            return view('front.area',$data);

        } else {
            return abort(404);
        }
    }
    public function university($id,$keyword1)
    {
        $university = University::select('university.university_id','university.university_name','university.university_name_en','university_custom.university_url')
        ->leftjoin(env('DB_DATABASE_2').'.university_custom as university_custom','university_custom.university_id','=','university.university_id')
        ->where('university_custom.active_status','=','1')->where('university.university_id','=',$id)->first();

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

            $universityOption = University::select('university.university_id','university.university_name','university.university_name_en','university_custom.university_url')
            ->leftjoin(env('DB_DATABASE_2').'.university_custom as university_custom','university_custom.university_id','=','university.university_id')
            ->where('university_custom.active_status','=','1')->orderBy('university.university_name','ASC')->get();

            $optionList = [];
            foreach ($universityOption as $row) {
                $temp = array(
                    "name" => $row->university_name,
                    "value" => $row->university_id
                );
                array_push($optionList,$temp);
            }

            $data['optionList'] = $optionList;
            return view('front.university',$data);

        } else {
            return abort(404);
        }
    }

    public function condo($keyword1,$id)
    {
        $condo = Condo::select('condo.*','condo_custom.condo_url_th')
        ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
        ->where('condo_custom.active_status','=',1)
        ->where('condo.delete_status','=','0')
        ->where('condo.condo_id','=',$id)
        ->first();
        return redirect()->route('condo',[$condo->condo_url_th]);
        // $condo = Condo::select('condo.*','condo_custom.condo_url_th')
        // ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
        // ->where('condo_custom.active_status','=',1)
        // ->where('condo.condo_id','=',$id)
        // ->where('condo.delete_status','=','0')->first();
        // if ($condo) {

        //     $condo_url = $condo->condo_url_th;

        //     $condoImage = CondoImage::where('condo_id','=',$condo->condo_id)->get();

        //     $addressCondoData = District::select('province.province_name_th','amphoe.amphoe_name_th','district.district_name_th','district.zipcode')
        //     ->join('amphoe','amphoe.amphoe_id','=','district.amphoe_id')
        //     ->join('province','province.province_id','=','amphoe.province_id')
        //     ->where('district.district_id','=',$condo->condo_district_id)->first();

        //     if ($addressCondoData) {
        //         $addressCondo = $condo->condo_address_th." ".$addressCondoData->province_name_th." ".$addressCondoData->amphoe_name_th." ".$addressCondoData->district_name_th;
        //     } else {
        //         $addressCondo = $condo->condo_address_th;
        //     }

        //     $area = Area::select('area.*','area_custom.area_url')
        //     ->leftjoin(env('DB_DATABASE_2').'.area_custom as area_custom','area_custom.area_id','=','area.area_id')
        //     ->where('area.area_id','=',$condo->area_id)->first();

        //     $data['condo_id'] = $condo->condo_id;
        //     $data['condo_name_th'] = $condo->condo_name_th;
        //     $data['condo_name_en'] = $condo->condo_name_en;
        //     $data['condo_project_owner'] = $condo->condo_project_owner_th;
        //     $data['condo_total_area'] = $condo->condo_total_area_th;
        //     $data['condo_total_buildings'] = $condo->condo_total_buildings_th;
        //     $data['condo_total_floor'] = $condo->condo_total_floor_th;
        //     $data['condo_total_room'] = $condo->condo_total_room;
        //     $data['condo_total_style'] = $condo->condo_total_style_th;
        //     $data['condo_total_parking'] = $condo->condo_total_parking_th;
        //     $data['condo_total_lift'] = $condo->condo_total_lift_th;
        //     $data['condo_pubild_transport'] = $condo->condo_pubild_transport_th;
        //     $data['condo_bus_passing'] = $condo->condo_bus_passing_th;
        //     $data['condo_notable'] = $condo->condo_notable_th;
        //     $data['condo_google_map_link'] = $condo->condo_google_map_link;
        //     $data['condo_rise_style'] = $condo->condo_rise_style;
        //     $data['condo_finish'] = $condo->condo_finish_th;
        //     $data['condo_1bed_price_rent'] = number_format($condo->condo_1bed_price_rent);
        //     $data['condo_facilities_th'] = $condo->condo_facilities_th;
        //     $data['condo_common_fee_th'] = $condo->condo_common_fee_th;
            

        //     $data['condo_address'] = $addressCondo;

        //     $data['area_name'] = $area->area_name;
        //     $data['area_url'] = route('area',$area->area_url);

        //     $data['rent_url'] = route('condo',[$condo_url]);
        //     $data['sale_url'] = route('condoSale',[$condo_url]);

        //     $data["condo_image_banner"] = getFileUrl( $condo->condo_image_banner , '/' );
        //     $data["condo_image_banner_alt"] = $condo->condo_image_banner_alt;
        //     $data["condo_image"] = [];

        //     foreach ($condoImage as $row) {
        //         array_push($data["condo_image"],getFileUrl( $row->image_name , '/' ));
        //     }

        //     $data["condo_landmark"] = [];

        //     $landmark = LandmarkCondo::select("landmark.landmark_name",'landmark.landmark_id')
        //     ->leftJoin('landmark','landmark.landmark_id','=','landmark_condo.landmark_id')
        //     ->where('landmark.active_status','=','1')
        //     ->where('landmark_condo.condo_id','=',$condo->condo_id)
        //     ->orderBy('landmark.landmark_name', 'ASC')->get();

        //     foreach ($landmark as $row) {
        //         $temp = array(
        //             "name" => $row->landmark_name,
        //             "url" => route('landmark',[$row->landmark_id,$row->landmark_name]),
        //         );
        //         array_push($data["condo_landmark"],$temp);
        //     }

        //     $university = UniversityCondo::select("university.university_name",'university_custom.university_url')
        //     ->leftJoin('university','university.university_id','=','university_condo.university_id')
        //     ->leftJoin(env('DB_DATABASE_2').'.university_custom as university_custom','university_custom.university_id','=','university.university_id')
        //     ->where('university_custom.active_status','=',1)
        //     ->where('university_condo.condo_id','=',$condo->condo_id)
        //     ->orderBy('university.university_name','ASC')->get();

        //     foreach ($university as $row) {
        //         $temp = array(
        //             "name" => $row->university_name,
        //             "url" => route('university',$row->university_url),
        //         );
        //         array_push($data["condo_landmark"],$temp);
        //     }

        //     $train = TrainCondo::select("train_station.train_station_name",'train_station_custom.train_station_url')
        //     ->leftJoin('train_station','train_station.train_station_id','=','train_condo.train_station_id')
        //     ->leftJoin(env('DB_DATABASE_2').'.train_station_custom as train_station_custom','train_station_custom.train_station_id','=','train_station.train_station_id')
        //     ->where('train_station_custom.active_status','=',1)
        //     ->where('train_condo.condo_id','=',$condo->condo_id)
        //     ->orderBy('train_station.train_station_name','ASC')->get();

        //     foreach ($train as $row) {
        //         $temp = array(
        //             "name" => $row->train_station_name,
        //             "url" => route('station',$row->train_station_url),
        //         );
        //         array_push($data["condo_landmark"],$temp);
        //     }

        //     if (!Route::is('condoSale')) {
        //         $data['type'] = 1;
        //     } else {
        //         $data['type'] = 2;
        //     }

        //     return view('front-toon.condonew',$data);

        // } else {
        //     return abort(404);
        // }
    }
    public function postRent($no,$id,$keyword1)
    {
        $post = Post::find($id);

        return $id;

        if ( $post ) {

            $condo = Condo::select('condo.*','condo_custom.condo_url_th')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->where('condo_custom.active_status','=',1)
            ->where('condo.condo_id','=',$post->condo_id)
            ->where('condo.delete_status','=','0')->first();

            $area = Area::select('area.*','area_custom.area_url')
            ->leftjoin(env('DB_DATABASE_2').'.area_custom as area_custom','area_custom.area_id','=','area.area_id')
            ->where('area.area_id','=',$condo->area_id)->first();

            $data['url'] = route('rent',[$post->id,$post->post_no,$post->post_header]);

            $data['area_url'] = route('area',$area->area_url);
            $data['condo_url'] = route('condo',[$condo->condo_url_th]);

            $data['condo'] = $condo;
            $data['area'] = $area;
            $data['post'] = $post;
            $data['post_image_title'] = getFileUrl( $post->post_image_title , '/' );
            $data["condo_image_banner"] = getFileUrl( $condo->condo_image_banner , '/' );
            $data["condo_image_banner_alt"] = $condo->condo_image_banner_alt;

            $PostImage = PostImage::where('post_id','=',$post_id)->get();
            $imageList = [];

            foreach ($PostImage as $row) {
                array_push($imageList,getFileUrl( $row->image_name , '/' ));
            }

            $data["imageList"] = $imageList;

            $data["condo_landmark"] = [];

            $landmark = LandmarkCondo::select("landmark.landmark_name",'landmark.landmark_id')
            ->leftJoin('landmark','landmark.landmark_id','=','landmark_condo.landmark_id')
            ->where('landmark.active_status','=','1')
            ->where('landmark_condo.condo_id','=',$condo->condo_id)
            ->orderBy('landmark.landmark_name', 'ASC')->get();

            foreach ($landmark as $row) {
                $temp = array(
                    "name" => $row->landmark_name,
                    "url" => route('landmark',[$row->landmark_id,$row->landmark_name]),
                );
                array_push($data["condo_landmark"],$temp);
            }

            $university = UniversityCondo::select("university.university_name",'university_custom.university_url')
            ->leftJoin('university','university.university_id','=','university_condo.university_id')
            ->leftJoin(env('DB_DATABASE_2').'.university_custom as university_custom','university_custom.university_id','=','university.university_id')
            ->where('university_custom.active_status','=',1)
            ->where('university_condo.condo_id','=',$condo->condo_id)
            ->orderBy('university.university_name','ASC')->get();

            foreach ($university as $row) {
                $temp = array(
                    "name" => $row->university_name,
                    "url" => route('university',$row->university_url),
                );
                array_push($data["condo_landmark"],$temp);
            }

            $train = TrainCondo::select("train_station.train_station_name",'train_station_custom.train_station_url')
            ->leftJoin('train_station','train_station.train_station_id','=','train_condo.train_station_id')
            ->leftJoin(env('DB_DATABASE_2').'.train_station_custom as train_station_custom','train_station_custom.train_station_id','=','train_station.train_station_id')
            ->where('train_station_custom.active_status','=',1)
            ->where('train_condo.condo_id','=',$condo->condo_id)
            ->orderBy('train_station.train_station_name','ASC')->get();

            foreach ($train as $row) {
                $temp = array(
                    "name" => $row->train_station_name,
                    "url" => route('station',$row->train_station_url),
                );
                array_push($data["condo_landmark"],$temp);
            }

            return view('front.rent',$data);

        } else {
            return abort(404);
        }
    }

    public function postSale($no,$id,$keyword1)
    {
        $post = Post::find($id);

        if ( $post ) {

            $condo = Condo::select('condo.*','condo_custom.condo_url_th')
            ->leftJoin(env('DB_DATABASE_2').'.condo_custom as condo_custom','condo_custom.condo_id','=','condo.condo_id')
            ->where('condo_custom.active_status','=',1)
            ->where('condo.condo_id','=',$post->condo_id)
            ->where('condo.delete_status','=','0')->first();

            $area = Area::select('area.*','area_custom.area_url')
            ->leftjoin(env('DB_DATABASE_2').'.area_custom as area_custom','area_custom.area_id','=','area.area_id')
            ->where('area.area_id','=',$condo->area_id)->first();

            $data['url'] = route('sale',[$post->id,$post->post_no,$post->post_header]);

            $data['area_url'] = route('area',$area->area_url);
            $data['condo_url'] = route('condo',[$condo->condo_url_th]);

            $data['condo'] = $condo;
            $data['area'] = $area;
            $data['post'] = $post;
            $data['post_image_title'] = getFileUrl( $post->post_image_title , '/' );
            $data["condo_image_banner"] = getFileUrl( $condo->condo_image_banner , '/' );
            $data["condo_image_banner_alt"] = $condo->condo_image_banner_alt;

            $PostImage = PostImage::where('post_id','=',$post_id)->get();
            $imageList = [];

            foreach ($PostImage as $row) {
                array_push($imageList,getFileUrl( $row->image_name , '/' ));
            }

            $data["imageList"] = $imageList;

            $data["condo_landmark"] = [];

            $landmark = LandmarkCondo::select("landmark.landmark_name",'landmark.landmark_id')
            ->leftJoin('landmark','landmark.landmark_id','=','landmark_condo.landmark_id')
            ->where('landmark.active_status','=','1')
            ->where('landmark_condo.condo_id','=',$condo->condo_id)
            ->orderBy('landmark.landmark_name', 'ASC')->get();

            foreach ($landmark as $row) {
                $temp = array(
                    "name" => $row->landmark_name,
                    "url" => route('landmark',[$row->landmark_id,$row->landmark_name]),
                );
                array_push($data["condo_landmark"],$temp);
            }

            $university = UniversityCondo::select("university.university_name",'university_custom.university_url')
            ->leftJoin('university','university.university_id','=','university_condo.university_id')
            ->leftJoin(env('DB_DATABASE_2').'.university_custom as university_custom','university_custom.university_id','=','university.university_id')
            ->where('university_custom.active_status','=',1)
            ->where('university_condo.condo_id','=',$condo->condo_id)
            ->orderBy('university.university_name','ASC')->get();

            foreach ($university as $row) {
                $temp = array(
                    "name" => $row->university_name,
                    "url" => route('university',$row->university_url),
                );
                array_push($data["condo_landmark"],$temp);
            }

            $train = TrainCondo::select("train_station.train_station_name",'train_station_custom.train_station_url')
            ->leftJoin('train_station','train_station.train_station_id','=','train_condo.train_station_id')
            ->leftJoin(env('DB_DATABASE_2').'.train_station_custom as train_station_custom','train_station_custom.train_station_id','=','train_station.train_station_id')
            ->where('train_station_custom.active_status','=',1)
            ->where('train_condo.condo_id','=',$condo->condo_id)
            ->orderBy('train_station.train_station_name','ASC')->get();

            foreach ($train as $row) {
                $temp = array(
                    "name" => $row->train_station_name,
                    "url" => route('station',$row->train_station_url),
                );
                array_push($data["condo_landmark"],$temp);
            }

            return view('front.sale',$data);

        } else {
            return abort(404);
        }
    }
}
