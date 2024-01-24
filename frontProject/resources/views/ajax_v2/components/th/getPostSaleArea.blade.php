@if (count($pinList) != 0)
<div class="tab-content" id="v-pills-tabContent">
    <div class="container mt-2 mb-2 d-lg-none d-xl-none">
        <div class="row">
            @foreach ($pinList as $postData)
                    @include('frame_v2.include-condo.th.card-premium-sale-mobile')
            @endforeach            
        </div>
    </div>
    <div class="tab-pane fade shadow rounded bg-white show active" 
        id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <div class="card mb-3 d-none d-lg-block" style="border: 2px solid #385c83;">
            <div class="card-header">
                ผลการค้นหา ห้องที่ประกาศให้ขาย ห้องสวย ห้ามพลาด Premium Sale
            </div>
            <div class="p-3 pb-0"> 
                <table class="table table-borderless">
                    <thead>
                        @foreach ($pinList as $postData)
                            @include('frame_v2.include-condo.th.card-premium-sale')
                        @endforeach
                    </thead>                    
                </table>         
            </div>                
            {{-- <p class="card-text p-3 text-center">
                <small class="text-muted">
                    หากสนใจห้องไหน สามารถแจ้งพนักงานขายด้วยรหัสของห้องนั้นๆ ผ่านไลน์ <a href="//line.me/R/ti/p/%40704uwpvc" rel="nofollow" target="_blank">@scancondo</a> ได้เลยค่ะ
                <br>
                </small>
            </p> --}}
            </div>
        </div>
    </div>
</div>

@endif

<div class="tab-content" id="v-pills-tabContent">
    {{-- product card normal mobile --}}
    <div class="container mt-2 mb-2 d-lg-none d-xl-none">
        <div class="row">
            @foreach ($normalList as $postData)
                @include('frame_v2.include-condo.th.card-normal-sale-mobile')
            @endforeach
        </div>
    </div>
    {{-- product card normal pc --}}
    <div class="tab-pane fade shadow rounded bg-white show active" 
        id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <div class="card mb-3 d-none d-lg-block">
            <div class="card-header">
                ผลการค้นหา ห้องที่ประกาศขาย
            </div>
            <div class="p-3"> 
                <table class="table table-borderless">
                    <thead>
                        @foreach ($normalList as $postData)
                            @include('frame_v2.include-condo.th.card-normal-sale')
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