<div class="row">
    <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
      
      <div class="text-center ">
        <h5 class="testimonial-author"><i class="fas fa-align-left"></i>&nbsp; {{$condo->condo_name_en}} Information</h5><br><br>
        <table class="table table-striped text-left condo-detail-toon" style="text-align: left">
            <tbody>
                <tr>
                    <th>Project Name</th>
                    <td>{{$condo->condo_name_en}}</td>
                </tr>
                <tr>
                  <th>Project Name in Thai</th>
                  <td>{{$condo->condo_name_th}}</td>
              </tr>
                @if($condo->condo_project_owner_en != "")
                    <tr>
                    <th>Project Owner</th>
                    <td>{{$condo->condo_project_owner_en}}</td>
                    </tr>
                @endif
                @if($condo->condo_total_area_en != "")
                    <tr>
                    <th>Total area</th>
                    <td>{{$condo->condo_total_area_en}} m<sup>2</sup></td>
                    </tr>
                @endif
                @if($condo->condo_total_buildings_en != "")
                    <tr>
                    <th>Total Building</th>
                    <td>{!!$condo->condo_total_buildings_en!!} Buildings</td>
                    </tr>
                @endif
                @if($condo->condo_total_floor_en != "")
                    <tr>
                    <th>Total Floors</th>
                    <td>{!!$condo->condo_total_floor_en!!} floors</td>
                    </tr>
                @endif
                @if($condo->condo_total_room != "")
                    <tr>
                    <th>Total rooms</th>
                    <td>{!!$condo->condo_total_room!!} rooms</td>
                    </tr>
                @endif
                @if($condo->condo_total_style_en != "")
                    <tr>
                    <th>Room features and room size.</th>
                    <td>{!!$condo->condo_total_style_en!!}</td>
                    </tr>
                @endif
                @if($condo->condo_total_parking_en != "")
                    <tr>
                    <th>Parking lot</th>
                    <td>{!!$condo->condo_total_parking_en!!} </td>
                    </tr>
                @endif
                @if($condo->condo_total_lift_en != "")
                    <tr>
                    <th>Total Lift/Elevator</th>
                    <td>{!!$condo->condo_total_lift_en!!} </td>
                    </tr>
                @endif
                @if($condo->condo_pubild_transport_en != "")
                    <tr>
                    <th>Public Transportation</th>
                    <td>{!!$condo->condo_pubild_transport_en!!}</td>
                    </tr>
                @endif
                @if($condo->condo_bus_passing_en != "")
                    <tr>
                    <th>Bus passing</th>
                    <td>{!!$condo->condo_bus_passing_en!!}</td>
                    </tr>
                @endif
                @if($condo->condo_address_en != "")
                    <tr>
                    <th>Address</th>
                    <td>{!!$condo->condo_address_en!!}</td>
                    </tr>
                @endif
                <tr>
                    <th>Zone</th>
                    <td>
                      
                      <a href="{{ $area->$area_url }}"><i class="fas fa-map-marker-alt"></i> {{ $area->area_name_en }}</a>
                     </td>
                </tr>
            </tbody>
        </table>
        </div>
  
    </div>
  
  </div>