    {{-- pc --}}
    <div class="card  mt-3 d-none d-xl-block" 
    style="padding: 0;">
    <div class="container">
        <div class="row align-items-center">
          <div class="col-4 p-3">

            <a href="{{ $data['url'] }}"  data-abc="true" target="_blank" title="ข่าว : {{ $data['title'] }}">
                <img src="{{ $data['image'] }}" class="image-fluid"  alt="" 
                style="width:270px;border-radius: 5px">
            </a>
          </div>
          <div class="col-7 p-3">
            <h6 class="media-title font-weight-semibold">
                <a href="{{ $data['url'] }}" 
                data-abc="true" target="_blank" style="font-size: 1.2em">{{ $data['title'] }}</a>
            </h6>
            {{ $data['detail'] }}
            read more <i class="fas fa-caret-right blink f-rent"></i>  
                        <a href="{{ $data['url'] }}" class="f-rent" 
                        data-abc="true" target="_blank">
                        <strong>Click</strong></a>
          </div>
          <div class="col-1 p-3">
          </div>
        </div>
      </div>
    </div>





    {{-- mobile --}}
    <div class="card  mt-3 d-block d-sm-none cardrenttoon" 
    style="padding: 0;">  
            <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row"
             
            >
                <div style="padding:10px">  
                    <a href="{{ $data['url'] }}" data-abc="true" target="_blank" title="ข่าว : {{ $data['title'] }}">
                            <img src="{{ $data['image'] }}" class="image-fluid"  alt="" 
                            style="width:270px;border-radius: 5px">
                    </a>
                </div>

                <div class="media-body ml-2 mt-3" >
                    <h6 class="media-title font-weight-semibold">
                        <a href="{{ $data['url'] }}" 
                        data-abc="true" target="_blank" style="font-size: 1.2em">{{ $data['title'] }}</a>
                    </h6>

                   
                        <table class="table table-sm" style="width: 100%" >
                            <tr>
                                <td scope="row" colspan="4" style="text-align: center">
                                    {{ $data['detail'] }}
                                </td>
                               
                              </tr>
                              <tr>
                                <td scope="row" colspan="4" style="text-align: center">
                                    read more <i class="fas fa-caret-right blink f-rent"></i>  
                                    <a href="{{ $data['url'] }}" class="f-rent" 
                                    data-abc="true" target="_blank">
                                    <strong>Click</strong></a>
                                </td>
                               
                              </tr>
                              
                            </tbody>
                          </table>
                    

                    
                </div>


            </div>
    </div> 
{{-- card pc --}}


{{-- <div class="card  mt-3 d-none d-xl-block" 
    style="padding: 0;">
    <div class="container">
        <div class="row align-items-center">
          <div class="col-4 p-3">

            <a href="{{ $data['url_en'] }}"  data-abc="true" target="_blank" title="ข่าว : {{ $data['title_en'] }}">
                <img src="{{ $data['image'] }}" class="image-fluid"  alt="" 
                style="width:270px;border-radius: 5px">
            </a>
          </div>
          <div class="col-7 p-3">
            <h6 class="media-title font-weight-semibold">
                <a href="{{ $data['url_en'] }}" 
                data-abc="true" target="_blank" style="font-size: 1.2em">{{ $data['title_en'] }}</a>
            </h6>
            {{ $data['detail_en'] }}
            read more <i class="fas fa-caret-right blink f-rent"></i>  
                        <a href="{{ $data['url_en'] }}" class="f-rent" 
                        data-abc="true" target="_blank">
                        <strong>Click</strong></a>
          </div>
          <div class="col-1 p-3">
          </div>
        </div>
      </div>
    </div>





    <div class="card  mt-3 d-block d-sm-none cardrenttoon" 
    style="padding: 0;">  
            <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row"
             
            >
                <div style="padding:10px">  
                    <a href="{{ $data['url_en'] }}" data-abc="true" target="_blank" title="ข่าว : {{ $data['title_en'] }}">
                            <img src="{{ $data['image'] }}" class="image-fluid"  alt="" 
                            style="width:270px;border-radius: 5px">
                    </a>
                </div>

                <div class="media-body ml-2 mt-3" >
                    <h6 class="media-title font-weight-semibold">
                        <a href="{{ $data['url_en'] }}" 
                        data-abc="true" target="_blank" style="font-size: 1.2em">{{ $data['title_en'] }}</a>
                    </h6>

                   
                        <table class="table table-sm" style="width: 100%" >
                            <tr>
                                <td scope="row" colspan="4" style="text-align: center">
                                    {{ $data['detail_en'] }}
                                </td>
                               
                              </tr>
                              <tr>
                                <td scope="row" colspan="4" style="text-align: center">
                                  read more <i class="fas fa-caret-right blink f-rent"></i>  
                                    <a href="{{ $data['url_en'] }}" class="f-rent" 
                                    data-abc="true" target="_blank">
                                    <strong>Click</strong></a>
                                </td>
                               
                              </tr>
                              
                            </tbody>
                          </table>
                    

                    
                </div>


            </div>
    </div>  --}}

