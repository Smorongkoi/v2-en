{{-- mobile content sale --}}
<div class="toonmobile d-block d-sm-none" data-aos="fade-up" data-aos-delay="300">    
  <table class="table" style="margin-bottom: 0;">
    <thead >
      {{-- <tr>
        <th scope="row" colspan="3"  style="text-align: left">
          <b>{{ $post->post_header }}</b>
        </th>
      </tr>  --}}
      <tr>
        <td scope="row">รหัสขาย</td>
        <th  style="text-align: right;font-size:1.3em;line-height:1.1em">{{ $post->post_no }}</th>
        <td scope="col" style="width: 5%;border-bottom:0"></td>
      </tr>          
    </thead>
    <tbody >
      <tr>
        <td scope="col" style="width: 30%;border-bottom:0">ราคาขาย</td>
        <th scope="col" style="text-align:right;border-bottom:0; font-size:1.4em;line-height:1.1em">
          {{ number_format($post->post_sale_price,0) }}</th>
        <td scope="col" style="width: 5%;border-bottom:0">บาท</td>
      </tr>
      <tr>
        <td colspan="3" style="font-size: 0.8em" >
          * ราคาเฉลี่ย {{ number_format(($post->post_sale_price / $post->post_area_total),2) }}  บาท/ตร.ม. *
        </td>
    </tr>
    </tbody>
  </table>

  <table class="table  condo-detail-toon" style="margin-bottom: 0">
    <tbody>                
        <tr style="border-bottom:1px solid #6d62df;color:#6d62df">
          <th style="width: 40%">รูปแบบห้อง</th>
          <th style="width: 10%">ชั้น</th>
          <th style="width: 10%">ตึก</th>
          <th>พื้นที่ห้อง</th>
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
          &nbsp;&nbsp;<i class="fas fa-building"></i>&nbsp; {{$condo->condo_name_th}}
        </td>          
      </tr>
      <tr>
        <td scope="row" colspan="3"  style="text-align:left">
          &nbsp;<a href="{{ $area->$area_url }}">
            <i class="fas fa-map-marker-alt"></i>&nbsp; {{ $area->area_name }}</a>
        </td>          
      </tr>
      {{-- <tr>
        <td scope="row" colspan="3"  style="text-align:left">
          &nbsp;<a href="{{ $area->$area_url }}">
            <i class="fas fa-map-marker-alt"></i>&nbsp; {{ $area->area_name }}</a>
        </td>          
      </tr> --}}
    </tbody>
  </table>
  <div class="text-justify" style="text-align: justify;font-size:0.9em">
    {!! $post->post_description !!}
  </div>

  
</div>