<section id="clients" class="clients">
  <div class="container" data-aos="zoom-in">
    <div class="row d-flex align-items-center">
      @for ($i = 1; $i <= 6; $i++)
      <div class="col-lg-2 col-md-4 col-6">
        <img src="{{ asset('assets_v2/clients-webp/client-'.$i.'.webp') }}" 
        class="img-fluid" alt="scancondo portfolio image {{$i}}" title="scancondo portfolio image {{$i}}">
      </div>
      @endfor
    </div>
  </div>
</section>