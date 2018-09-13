@extends('default')

@section('title', 'สมัครสมาชิก')


@section('style')


@endsection


@section('content')



<div style="margin-left:50px; height:1500px;"> 
    <center>
      <div class="fonts1" style="font-size:50px; padding-top:20px;">ระบบเพิ่มประกาศลงทะเบียน</div>


       <form action="{{ route('addRegis') }}" method="post">
        {{ csrf_field() }}
        <div style="margin-top:0px; display:inline-block; padding-right:70px; " align="right">
          <div class="fonts1" style="font-size:15px; margin-top:20px; color:#383838;">
            ชื่อประกาศลงทะเบียน<input required type="text" id="fname" name="name" placeholder="" style="width:500px; margin-left:20px; height:30px;">
          </div>
          <div class="fonts1" style="font-size:15px; margin-top:20px;">
            รายละเอียด<textarea required type="text" id="fname" name="detail" placeholder="" style="width:500px; margin-left:20px;"></textarea>
          </div>
        <div class="fonts1" style="font-size:15px; margin-top:20px;">
           วันเริ่มงาน<input required type="date" id="fname" name="datestrat" placeholder="" style="width:500px; margin-left:20px; height:30px;">
         </div>
         <div class="fonts1" style="font-size:15px; margin-top:20px;">
           วันสิ้นสุดงาน<input required type="date" id="fname" name="datestop" placeholder="" style="width:500px; margin-left:20px; height:30px;">
         </div>
         <div class="fonts1" style="font-size:15px; margin-top:20px;">
           เวลาเริ่มงาน<input required type="time" id="fname" name="time" placeholder="" style="width:500px; margin-left:20px; height:30px;">
         </div>


         <div class="fonts1" style="font-size:15px; margin-top:20px;">
           สถานที่<input required type="text" id="fname" name="station" placeholder="" style="width:500px; margin-left:20px; height:30px;">
         </div>

         <div class="fonts1" style="font-size:15px; margin-top:20px;">
          ติดต่อสอบถาม<input required type="text" id="fname" name="contect" placeholder="" style="width:500px; margin-left:20px; height:30px;">
        </div>

         <div class="fonts1" style="font-size:15px; margin-top:20px;">
          วันเริ่มต้นลงทะเบียน<input required type="date" id="fname" name="regstrat" placeholder="" style="width:500px; margin-left:20px; height:30px;">
        </div>

         <div class="fonts1" style="font-size:15px; margin-top:20px;">
          วันสิ้นสุดลงทะเบียน<input required type="date" id="fname" name="regstop" placeholder="" style="width:500px; margin-left:20px; height:30px;">
        </div>

        <div class="fonts1" style="font-size:15px; margin-top:20px;">
          จำนวนคนที่รับ<input required type="number" id="fname" name="count" placeholder="" style="width:500px; margin-left:20px; height:30px;">
        </div>


        <div class="fonts1" style="font-size:15px; margin-top:20px;">
          </div>

      <div class="fonts1 center" style="text-align: left; padding-left: 20px">
        <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile" name="pic">
    <p class="help-block">Example block-level help text here.</p>

      </div>
        </div>
        


      <center>
        <div class="fonts1" style="margin-top:20px;">


          <button type="button" class="btn btn-primary" style="background-color:#5D5E5C; border-color:#5D5E5C; margin-right:10px; width:100px;">ยกเลิก</button>
          <button type="submit" class="btn btn-primary" style="background-color:#58B957; border-color:#58B957; width:100px; " onclick="submitform();">ยืนยัน</button>
        </div>
      </center>
    </form>

  


</center>


</div>





@endsection

@section('js')

<script>
 

function deletestaff(url) {

    if(confirm("คุณต้องการลบหรือไม่ ?")){

    window.location = url;

  }

  
}

</script>





@endsection