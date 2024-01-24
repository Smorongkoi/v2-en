<div class="img-overlay condo-detail-toon" >

    <button type="button" class="btn btn-sm btn-outline-secondary btn-rounded" data-mdb-ripple-color="dark">
      {{ $post->post_no }}
       </button>

@switch($post->post_status_sale)
    @case(1) 
    <button type="button" class="btn btn-sm btn-outline-success btn-rounded"  data-mdb-ripple-color="dark">
      Buynow
        <span class="badge" >
            <i class="fas fa-check"></i>
        </span> 
    </button>                                    
    @break
    @case(0) 
    <button type="button" class="btn btn-sm btn-outline-danger btn-rounded" data-mdb-ripple-color="dark">
      Sold out
        <span class="badge">
            <i class="fas fa-times"></i>
        </span> 
    </button>                                    
    @break

@endswitch

@if($post->post_accept_pin != "")                            
    <button type="button" class="btn btn-sm btn-outline-info btn-rounded" data-mdb-ripple-color="dark">HQ
        <span class="badge" >
            <i class="fas fa-star"></i>
        </span>
    </button>                              
@endif

</div>