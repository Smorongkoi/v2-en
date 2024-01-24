{{-- mobile content sale --}}
<div class="toonmobile d-block d-sm-none" data-aos="fade-up" data-aos-delay="300">    
  <table class="table" style="margin-bottom: 20px;">
    <thead >

      <tr>
        <td scope="row" style="width: 33.33%;text-align:right">Rent ID :</td>
        <th  colspan="2" style="text-align: left;font-size:1.3em;line-height:1.1em">{{ $post->post_no }}</th>
      </tr>          
    </thead>
    <tbody >
      <tr>
        <td scope="col" style="text-align:right;width: 30%;border-bottom:0">Rate :</td>
        <th scope="col" style="text-align:right;border-bottom:0; font-size:1.4em;line-height:1.1em">
          {{ number_format($post->post_rent_price,0) }}</th>
        <td scope="col" style="width: 30%;border-bottom:0">Baht/Month</td>
      </tr>
      
    </tbody>
  </table>

  <table class="table  condo-detail-toon" style="margin-bottom: 0">
    <tbody>                
        <tr style="border-bottom:1px solid #ff5722;color:#ff5722">            
            <th style="width: 40%">Type</th>
            <th style="width: 10%">Floors</th>
            <th style="width: 10%">Bld.</th>
            <th>Area</th>
        </tr>
        <tr>
            
            <td>
                @if($post->post_bed <= 6)
                <span class="info">{{ $post->post_bed }} <i class="fas fa-bed"></i></span>
                <span class="info">{{ $post->post_baths }} <i class="fas fa-shower"></i></span>
                @else
                    <span class="info">
                        @switch($post->post_bed)
                            @case(7) Studio @break
                            @case(8) Penthouse @break
                        @endswitch
                    </span>
                @endif
            </td>
            <td>{{ $post->post_floor }}</td>
            <td>{{ $post->post_building }}</td>
            <td><span class="info">{{ $post->post_area_total }} <strong>m<sup>2</sup></strong></span></td>
        </tr>
        
    </tbody>
  </table>

  <table class="table">      
        <td scope="row" colspan="3"  style="text-align:left">
          &nbsp;&nbsp;<i class="fas fa-building"></i>&nbsp; {{$condo->condo_name_en}}
        </td>          
      </tr>
      <tr>
        <td scope="row" colspan="3"  style="text-align:left">
          &nbsp;<a href="{{ $area->$area_url }}">
            <i class="fas fa-map-marker-alt"></i>&nbsp; {{ $area->area_name_en }}</a>
        </td>          
      </tr>

    </tbody>
  </table>

  <div class="text-justify" style="text-align: justify;font-size:0.9em">
    <br>
    {!! $post->post_description_en !!}
  </div>

    {{-- ห้องเช่า --}}
    <table class="table condo-detail-toon" style="margin-bottom: 20px">
      <thead >
          <tr>
              <th colspan="3" style="text-align: center;border-bottom:1px solid #ff5722;color:#ff5722">Room Details</th>
          </tr>
      </thead>
      <tbody>
        <tr>
          <td colspan="2" scope="row" style="text-align:right;">able to stay : </td>
          
            <td scope="col" style="text-align:right;" > 1-{{ $post->post_residents }} person/room</td>
        </tr>
        <tr>
          <td scope="row" colspan="3" style="text-align: center;" >
            avg. rent : 
            <strong>{{ number_format(($post->post_rent_price / $post->post_residents),0) }}</strong>
              <br>
            Baht/person/Month
            </td>
          
            {{-- <td scope="col"  > </td> --}}
        </tr>
          
      </tbody>
    </table>

  {{-- เงินทำสัญญา --}}
  <table class="table condo-detail-toon" style="margin-bottom: 20px">
    <thead >
        <tr>
            <th colspan="3" style="text-align: center;border-bottom:1px solid #ff5722;color:#ff5722">Room rental contract</th>
        </tr>
    </thead>
    <tbody>
        <tr class="">
          <td>Rental guarantee fee</td>
          <td style="text-align:right">2</td>
          <td style="text-align:right">Month</td>
        </tr>
        <tr >
          <td>Advance rent</td>
          <td style="text-align:right">1</td>
          <td style="text-align:right">Month</td>
      </tr>
      <tr>
          <td>Total contract fee</td>
          <td style="text-align:right">3</td>
          <td style="text-align:right">Month</td>
      </tr>
      <tr >
        <td>Total contract fee</td>
        <td style="text-align:right" class="f-rent">{{ number_format(($post->post_rent_price * 3),0) }}</td>
        <td style="text-align:right">Baht</td>
      </tr>
    </tbody>
  </table>

  <table class="table condo-detail-toon">
    <thead>
        <tr>
            <th colspan="2" style="text-align: center;border-bottom:1px solid #ff5722;color:#ff5722">Rental room status</th>
        </tr>
    </thead>
    <tbody style="text-align: left">
        
              
              @if ($post->post_status_rent == 1)
                <tr>
                    <td colspan="3">
                        <i class="fas fa-check blink f-rent"></i>&nbsp;&nbsp; Immediately available
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <i class="fas fa-check  blink f-rent"></i>&nbsp;&nbsp; Ready to sign rental contrac
                    </td>
                </tr>
              @else
                <tr>
                    <td colspan="3">
                    <i class="fas fa-times"></i>&nbsp;&nbsp; Already rented
                    </td>
                </tr>
              @endif
            </td>
        </tr>
        <tr>
            <td colspan="3">
              <i class="fas fa-check"></i>&nbsp;&nbsp;
              Rent including annual common fees already
            </td>
        </tr>
        <tr>
            <td colspan="3">
              <i class="fas fa-check"></i>
              &nbsp;&nbsp;Minimum contract term of 6 months - 1 year</td>
        </tr>
        <tr>
            <td colspan="3">
              <i class="fas fa-check"></i>
              &nbsp;&nbsp;The room has been inspected and approved</td>
        </tr>
        <tr>
            <td colspan="3">
                <div class="title"><br>
                    <strong class="f-rent">Note:</strong>
                </div>
                <div class="detail" style="font-size: 0.8em">
                  <strong class="f-rent">The 2-month rental deposit</strong>
                  is a guarantee that the tenant will take care of and maintain
                  the rental room in good condition and in order, and will receive
                   the full deposit back at the end of the rental contract 
                   (in case of no damage or harm). 
                    <br><br>
                  <strong class="f-rent">The advance rent</strong> 
                  is the payment of the first month's rent in advance, 
                  counted from the first day of the rental contract, 
                  and the tenant will start paying the regular monthly 
                  rent in the following month, as specified in the rental 
                  contract for the room.
                </div>
            </td>
        </tr>
    </tbody>
  </table>

  
</div>

