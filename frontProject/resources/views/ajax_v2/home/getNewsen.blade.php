<div class="home-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12  pt-3">
                <div class="card-body">           
                    <p class="card-text">              
                        <div class="container d-flex justify-content-center mb-50">            
                            <div >
                               <div class="row">                         
                                    @foreach ($news2 as $data)
                                        @include('frame_v2.news.newsen')                                       
                                    @endforeach  
                                    @foreach ($news1 as $data) 
                                        @include('frame_v2.news.newsen') 
                                    @endforeach                                  
                                </div>                     
                            </div>
                        </div>
                    </p>
                    <div class="text-center">
                        <a href="{{ route('news') }}" class="f-rent" 
                        data-abc="true" target="_blank"><i class="fas fa-caret-right blink f-rent"></i> 
                        <strong>Read More Articles</strong></a>
                    </div>
                    </div>
            </div>
        </div>
    </div>

</div>
<div class="home-news">

</div>
