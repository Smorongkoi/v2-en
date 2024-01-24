<div class="img-overlay condo-detail-toon" >
          <button type="button" class="btn btn-sm btn-warning btn-rounded" data-mdb-ripple-color="dark">
              {{ $post->post_no }}
          </button>
  @switch($post->post_status_rent)
      @case(1) 
      <button type="button" class="btn btn-sm btn-outline-success btn-rounded"  data-mdb-ripple-color="dark">
          ว่างให้เช่า
          <span class="badge" >
              <i class="fas fa-check"></i>
          </span> 
      </button>                                    
      @break
      @case(0) 
      <button type="button" class="btn btn-sm btn-outline-danger btn-rounded" data-mdb-ripple-color="dark">
        เช่าแล้ว 
          <span class="badge">
              <i class="fas fa-times"></i>
          </span> 
      </button>                                    
      @break
  @endswitch

  @if($post->post_accept_pin != "")                            
      <button type="button" class="btn btn-sm btn-outline-info btn-rounded" data-mdb-ripple-color="dark">พิเศษ
          <span class="badge" >
              <i class="fas fa-star"></i>
          </span>
      </button>                              
  @endif

</div>