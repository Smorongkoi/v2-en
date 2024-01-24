<div class="tab-content" id="v-pills-tabContent">
    {{-- product card normal mobile --}}
    <div class="container mt-2 mb-2 d-block d-sm-none">
        <div class="row">
            @if (count($pinList) != 0)
                @foreach ($pinList as $postData)
                @endforeach
            @endif
            
            @foreach ($normalList as $postData)
                @include('speed.frame.include-condo.card-normal-rent-mobile')
            @endforeach
        </div>
    </div>
    {{-- product card normal mobile --}}
    <div class="tab-pane fade shadow rounded bg-white show active" 
        id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <div class="card mb-3 d-none d-xl-block">
            <div class="card-header">
                Search results: rooms for rent
            </div>
            <div class="p-3"> 
                <table class="table table-borderless">
                    <thead>
                        @foreach ($normalList as $postData)
                            @include('speed.frame.card-normal-rent')
                        @endforeach
                    </thead>                    
                </table>         
            </div>                
            <p class="card-text p-3 text-center">
                <small class="text-muted">
                    If you are interested in any room, please check the room code and notify the sales staff at
                    <a href="//line.me/R/ti/p/%40704uwpvc" rel="nofollow" target="_blank">@scancondo</a>
                <br>
                </small>
            </p>
            </div>
        </div>
    </div>
</div>
