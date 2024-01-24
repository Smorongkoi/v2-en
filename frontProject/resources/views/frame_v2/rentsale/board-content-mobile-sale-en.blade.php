{{-- mobile content sale --}}
<div class="toonmobile d-block d-sm-none" data-aos="fade-up" data-aos-delay="300">    
  <table class="table" style="margin-bottom: 0;">
    <thead >
      <tr>
        <td scope="row" style="width: 33.33%;text-align:right">Sale ID :</td>
        <th  colspan="2" style="text-align: left;font-size:1.3em;line-height:1.1em">{{ $post->post_no }}</th>
      </tr>          
    </thead>
    <tbody >
      <tr>
        <td scope="col" style="text-align:right;width: 30%;border-bottom:0">Price :</td>
        <th  scope="col" style="text-align:left;border-bottom:0; font-size:1.4em;line-height:1.1em">
          {{ number_format($post->post_sale_price,0) }} </th>
        <td scope="col" style="width: 5%;border-bottom:0">Baht</td>
      </tr>
      <tr>
        <td colspan="3" style="font-size: 0.8em;text-align:center;" >
          * Average {{ number_format(($post->post_sale_price / $post->post_area_total),2) }}  Baht/Sq.m. *
        </td>
    </tr>
    </tbody>
  </table>

  <table class="table  condo-detail-toon" style="margin-bottom: 0">
    <tbody>                
        <tr style="border-bottom:1px solid #6d62df;color:#6d62df">
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
  <table class="table condo-detail-toon">
    <thead>
        <tr>
            <th colspan="3" style="text-align: center;border-bottom:1px solid #6d62df;color:#6d62df">Unit Price Details</th>
        </tr>
    </thead>
    <tbody style="text-align: left">

    <tr>
      <td colspan="3">
        <i class="fas fa-check"></i>&nbsp;&nbsp;
          @switch($post->post_sale_type)
            @case(1) Reservation/Down payment @break
            @case(2) Immediate occupancy @break
            @case(3) With tenant already in place @break
          @endswitch
      </td>
  </tr>
  <tr>
      <td colspan="3">
        <i class="fas fa-check"></i>&nbsp;&nbsp;
          @switch($post->post_sale_hold)
            @case(1) Freehold sale rights @break
            @case(2) Leasehold sale rights @break
          @endswitch
      </td>
  </tr>
  <tr>
      <td colspan="3">
        <i class="fas fa-check"></i>
        &nbsp;&nbsp;The room has been verified</td>
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

  
</div>