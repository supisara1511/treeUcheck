@extends('default')

@section('title', 'สมัครสมาชิก')


@section('style')


@endsection


@section('content')

<div style="width:100%;  background-color:#E2E2E2; padding-bottom:20px;" >
  <div class="container">
    <center>
      <div class="fonts1" style="font-size:50px; padding-top:30px;">ระบบลงทะเบียน</div>
      <div class="fonts1" style="color:#807F7D;">ติดตามรายละเอียดการจัดการลงทะเบียน สำหรับกิจกรรมต่าง การสัมนา การสอบ และอื่นๆ</div>
      <div class="fonts1" style="font-size:25px; padding-top:20px;">{{ $data['name'] }}</div>
      <div class="fonts1" style="color:#807F7D; font-size:16px;" >{{ $data['detail'] }}</div>
    </center>

    <div class="fonts1" style="font-size:18px; margin-top:15px;" align="center">
      <div class="row" style="width:65%;">
        <div  class="col-md-6" style="display:inline-block; color:#807F7D;" align="left">
          <div  style="margin-bottom:12px;"><span class="glyphicon glyphicon-stop" ></span> {{ $data['datestrat'] }} ถึง {{ $data['datestop'] }}</div>
          <div  style="margin-bottom:12px;"><span class="glyphicon glyphicon-stop"></span> {{ $data['station'] }}</div>
          <div  style="margin-bottom:12px;"><span class="glyphicon glyphicon-stop"></span> {{ $data['contect'] }}</div>
          <div  style="margin-bottom:12px;"><span class="glyphicon glyphicon-stop"></span> ระยะเวลาการลงทะเบียน {{ $data['regstrat'] }} ถึง {{ $data['regstop'] }}</div>

        </div>
        <div class="col-md-6">

         <div class="col-md-6">
          <div style="width:150px; height:150px; background-color:#56C0E0; -webkit-border-radius: 25px;-moz-border-radius: 25px;border-radius: 25px; color:#FFF; padding-top:10px; ">
            <center>
              <div style="font-size:25px;">รับ</div>
              <div style="font-size:100px; margin-top:-45px;">{{ $data['count'] }}</div>
            </center>
          </div>
        </div>

        <div class="col-md-6" >
          <div style="width:150px; height:150px; background-color:#58B957; -webkit-border-radius: 25px;-moz-border-radius: 25px;border-radius: 25px; color:#FFF; padding-top:10px;">
            <center>
              <div style="font-size:25px;">ลงทะเบียนแล้ว</div>

              <div style="font-size:100px; margin-top:-45px;">{{sizeof($tb) }}</div>
            </center>
          </div>
        </div>


      </div>
    </div>
  </div>
</div> 
</div>






<center>
<form action="{{ route('regSent') }}" method="post">
  {{ csrf_field() }}
  <input type="hidden" name="ID" value="{{ $id }}">
  <div style="margin-top:0px; display:inline-block; padding-right:70px; " align="right">
    <div class="fonts1" style="font-size:15px; margin-top:20px; color:#383838;">
      ชื่อ<input required type="text" id="fname" name="name" placeholder="" style="width:500px; margin-left:20px; height:30px;">
    </div>

    <div class="fonts1" style="font-size:15px; margin-top:20px;">
      นามสกุล<input required type="text" id="fname" name="sur" placeholder="" style="width:500px; margin-left:20px; height:30px;">
    </div>

    <div class="fonts1" style="font-size:15px; margin-top:20px;">
     Email<input required type="text" id="fname" name="email" placeholder="" style="width:500px; margin-left:20px; height:30px;">
   </div>

   <div class="fonts1" style="font-size:15px; margin-top:20px;">
     ที่อยู่<input required type="text" id="fname" name="add" placeholder="" style="width:500px; margin-left:20px; height:30px;">
   </div>



   <div class="fonts1" style="font-size:15px; margin-top:20px;">
     เบอร์โทรศัพท์<input required type="text" id="fname" name="phone" placeholder="" style="width:500px; margin-left:20px; height:30px;">
   </div>

 </div>


<div class="fonts1" style="margin-top:20px;">
  <button type="reset" class="btn btn-primary" style="background-color:#5D5E5C; border-color:#5D5E5C; margin-right:10px; width:100px;">ยกเลิก</button>
  <button type="submit" class="btn btn-primary" style="background-color:#58B957; border-color:#58B957; width:100px; " onclick="submitform();">ยืนยัน</button>
</div>


</form>

</center>



<center>
  <div class="fonts1" style="padding-top: 20px; width: 70%">
    <table id="example2" class="table table-bordered table-hover">
      <thead>
        <tr>
          <th class="text-center">ชื่อ - นามสกุล</th>
          <th class="text-center">Email</th>
          <th class="text-center">ที่อยู่</th>
          <th class="text-center">เบอร์โทรศัพท์</th>
        
        </tr>
      </thead>
      <tbody>
        @for ($i = 0; $i < sizeof($tb); $i++)
          <tr>
            <td class="text-center">{{ $tb[$i]['name'] }} {{ $tb[$i]['sur'] }}</td>
            <td class="text-center">{{ $tb[$i]['email'] }}</td>
            <td class="text-center">{{ $tb[$i]['add'] }}</td>
            <td class="text-center">{{ $tb[$i]['phone'] }}</td>
           
 
          </tr>
          @endfor
      </tbody>

    </table>
  </div>
</center>


@endsection

@section('js')

<script>


  function deletestaff(url) {

    if(confirm("คุณต้องการลบหรือไม่ ?")){

      window.location = url;

    }


 

</script>





@endsection