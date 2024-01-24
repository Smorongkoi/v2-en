<div class="tab-content" id="v-pills-tabContent">
    {{-- product card normal mobile --}}
    <div class="container mt-2 mb-2 d-lg-none d-xl-none">
        <div class="row">
            @if (count($pinList) != 0)
                @foreach ($pinList as $postData)
                @endforeach
            @endif
            
            @foreach ($normalList as $postData)
                {{-- @include('speed.frame.include-condo.card-normal-rent-mobile') --}}
                @include('frame_v2.include-condo.th.card-normal-rent-mobile')
            @endforeach
        </div>
    </div>
    {{-- product card normal mobile --}}
    <div class="tab-pane fade shadow rounded bg-white show active" 
        id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <div class="card mb-3 d-none d-lg-block">
            <div class="card-header">
                ผลการค้นหา ห้องที่ประกาศให้เช่า
            </div>
            <div class="p-3"> 
                <table class="table table-borderless">
                    <thead>
                        @foreach ($normalList as $postData)
                            @include('frame_v2.include-condo.th.card-normal-rent')
                            {{-- @include('speed.frame.card-normal-rent') --}}
                        @endforeach
                    </thead>                    
                </table>         
            </div>                
            <p class="card-text p-3 text-center">
                <small class="text-muted">
                    หากสนใจห้องไหน สามารถแจ้งพนักงานขายด้วยรหัสของห้องนั้นๆ ผ่านไลน์ <a href="//line.me/R/ti/p/%40704uwpvc" rel="nofollow" target="_blank">@scancondo</a> ได้เลยค่ะ
                <br>
                </small>
            </p>
            </div>
        </div>
    </div>
</div>
