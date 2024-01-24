@push('css')
@if ($summary < 0)
@if ($summary<-365)
<span style="color: #77726e">อัพเดตล่าสุด : เกินกว่า 1 ปีมาแล้ว</span>
@elseif ($summary<-30)
<span style="color: #16ad29">อัพเดตล่าสุด : </span>
{{ DateTimeThai($postData['action_datetime']) }}<br>
อัพเดตล่าสุดเกินกว่า 1เดือน มาแล้ว                                                        
@elseif ($summary<-7)

@else

@endif
@else
อัพเดตล่าสุด = &nbsp;<span class="blink">วันนี้</span>                                         
@endif
@break
@case(0) 
@if ($summary < 0)
@if ($summary<-365)
<span style="color: #fe0000">อัพเดตล่าสุด : เกินกว่า 1 ปีมาแล้ว</span>  

@elseif ($summary<-30)
{{ DateTimeThai($postData['action_datetime']) }} <br>
<span style="color: #fe0000">อัพเดตล่าสุด : เกินกว่า 1เดือน มาแล้ว</span> 

@elseif ($summary<-7)
{{ DateTimeThai($postData['action_datetime']) }} <br>
<span style="color: #fe0000">อัพเดตล่าสุด : 
ผ่านมาแล้ว {{-$summary}} วัน
</span> 
@else
{{ DateTimeThai($postData['action_datetime']) }} <br>
<span style="color: #fe0000">อัพเดตล่าสุด : 
เพิ่งอัพเดตเมื่อ {{-$summary}} วันที่แล้ว
</span> 
@endif
@else
อัพเดตล่าสุด = &nbsp;<span class="blink">วันนี้
</span>                                         
@endif