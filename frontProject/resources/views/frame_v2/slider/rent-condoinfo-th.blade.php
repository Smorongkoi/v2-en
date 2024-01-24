<div class="row">
    <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
      
      <div class="text-center ">
        <h5 class="testimonial-author"><i class="fas fa-align-left"></i>&nbsp; ข้อมูลโครงการ {{$condo->condo_name_th}}</h5><br><br>
        <table class="table table-striped text-left condo-detail-toon">
            <tbody>
                <tr>
                    <th>ชื่อโครงการ</th>
                    <td>{{$condo->condo_name_th}} {{$condo->condo_name_en}}</td>
                </tr>
                @if($condo->condo_project_owner_th != "")
                    <tr>
                    <th>เจ้าของโครงการ</th>
                    <td>{{$condo->condo_project_owner_th}}</td>
                    </tr>
                @endif
                @if($condo->condo_total_area_th != "")
                    <tr>
                    <th>เนื้อที่ทั้งหมด</th>
                    <td>{{$condo->condo_total_area_th}} ตร.ม</td>
                    </tr>
                @endif
                @if($condo->condo_total_buildings_th != "")
                    <tr>
                    <th>จำนวนตึก</th>
                    <td>{!!$condo->condo_total_buildings_th!!} ตึก</td>
                    </tr>
                @endif
                @if($condo->condo_total_floor_th != "")
                    <tr>
                    <th>จำนวนชั้น</th>
                    <td>{!!$condo->condo_total_floor_th!!} ชั้น</td>
                    </tr>
                @endif
                @if($condo->condo_total_room != "")
                    <tr>
                    <th>จำนวนห้อง</th>
                    <td>{!!$condo->condo_total_room!!} ห้อง</td>
                    </tr>
                @endif
                @if($condo->condo_total_style_th != "")
                    <tr>
                    <th>ลักษณะห้องและขนาดห้อง</th>
                    <td>{!!$condo->condo_total_style_th!!} แบบ</td>
                    </tr>
                @endif
                @if($condo->condo_total_parking_th != "")
                    <tr>
                    <th>ที่จอดรถทั้งหมด</th>
                    <td>{!!$condo->condo_total_parking_th!!} คัน</td>
                    </tr>
                @endif
                @if($condo->condo_total_lift_th != "")
                    <tr>
                    <th>ลิฟท์</th>
                    <td>{!!$condo->condo_total_lift_th!!} ตัว</td>
                    </tr>
                @endif
                @if($condo->condo_pubild_transport_th != "")
                    <tr>
                    <th>ขนส่งสาธารณะ</th>
                    <td>{!!$condo->condo_pubild_transport_th!!}</td>
                    </tr>
                @endif
                @if($condo->condo_bus_passing_th != "")
                    <tr>
                    <th>รถโดยสาร</th>
                    <td>{!!$condo->condo_bus_passing_th!!}</td>
                    </tr>
                @endif
                @if($condo->condo_address_th != "")
                    <tr>
                    <th>ที่ตั้ง</th>
                    <td>{!!$condo->condo_address_th!!}</td>
                    </tr>
                @endif
                <tr>
                    <th>โซน</th>
                    <td>
                      
                      <a href="{{ $area->$area_url }}"><i class="fas fa-map-marker-alt"></i> {{ $area->area_name }}</a>
                     </td>
                </tr>
            </tbody>
        </table>
        </div>

    </div>

  </div>