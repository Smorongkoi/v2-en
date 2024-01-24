@if (count($pinList) != 0)
<div class="tab-content" id="v-pills-tabContent">
    <div class="container mt-2 mb-2 d-block d-sm-none">
        <div class="row">
            @foreach ($pinList as $postData)
                    @include('speed.frame.include-condo.card-premium-sale-mobile')
            @endforeach            
        </div>
    </div>
    <div class="tab-pane fade shadow rounded bg-white show active" 
        id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <div class="card mb-3 d-none d-xl-block">
            <div class="card-header">
                Search results: Beautiful rooms for sale, don't miss out on Premium Sale
            </div>
            <div class="p-3"> 
                <table class="table table-borderless">
                    <thead>
                        @foreach ($pinList as $postData)
                            @include('speed.frame.card-premium-sale')
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

@endif

<div class="tab-content" id="v-pills-tabContent">
    {{-- product card normal mobile --}}
    <div class="container mt-2 mb-2 d-block d-sm-none">
        <div class="row">
            @foreach ($normalList as $postData)
                {{-- @include('speed.frame.include-condo.card-normal-rent-mobile') --}}
                @include('speed.frame.include-condo.card-normal-sale-mobile')
            @endforeach
        </div>
    </div>
    {{-- product card normal pc --}}
    <div class="tab-pane fade shadow rounded bg-white show active" 
        id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <div class="card mb-3 d-none d-xl-block">
            <div class="card-header">
                Search results: Rooms for sale
            </div>
            <div class="p-3"> 
                <table class="table table-borderless">
                    <thead>
                        @foreach ($normalList as $postData)
                            @include('speed.frame.card-normal-sale')
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