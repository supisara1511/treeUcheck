@extends('default')

@section('title', 'Admin')


@section('style')



@endsection


@section('content')

 <center>
    <!-- menu -->
    <div class="fonts1" style="width: 75%;">
      <div class="row fonts1" style="text-align: center; padding-top: 50px";>
        <div class="col-md-6">
          <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary" style="color:#E59D35; margin-top:15px;"></i>
            <i class="fa fa-calendar fa-stack-1x fa-inverse" style="margin-top:15px;"></i>
          </span>   
          <h4 class="service-heading fonts1" style="font-size:25px; padding-top: 10px">ระบบลงประกาศลงทะเบียน</h4>
          <p class="text-muted"> <span style="color:#58B957;">สำหรับเจ้าหน้าที่</span>กรุณาเข้าสู่ระบบ </p>
          <p class="text">เพื่อเพิ่มประกาศลงทะเบียนกิจกรรมต่างๆ สัมนา ประชุด และอื่นๆ</p>

          <a  href="{{route('addregister')}}"  class="btn btn-warning" style="background-color:#58B957; border-color:#58B957; width:150px; border-radius: 0px;">เพิ่มประกาศ</a>
        </div>


    
       <div class="col-md-6">  
          <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary" style="color:#1f7cab; margin-top:15px;"></i>
            <i class="glyphicon glyphicon-user fa-stack-1x fa-inverse" style="margin-top:15px;"></i>
          </span>
          <h4 class="service-heading fonts1" style="font-size:25px; padding-top: 10px">ระบบเช็คชื่อ</h4>
          <p class="text-muted"> <span style="color:#1f7cab;">สำหรับเจ้าหน้าที่</span>กรุณาเข้าสู่ระบบ </p>
          <p>เพื่อทำการเช็คชื่อผู้เข้าร่วมกิจกรรมต่างๆ สัมนา ประชุด และอื่นๆ</p>

          <a   href="{{route('addmember')}}" class="btn btn-success" style="background-color:#E59D35; border-color:#E59D35; width:150px; border-radius: 0px" >เพิ่มผู้ใช้งาน</a>
        </div>

      </div>
    </div>
  </center>
      <!-- menu -->

   
    
      
  

    <div class="fonts1" style="text-align: center; padding-top: 50px">

        <p style="font-size:30px;">รายการลงทะเบียน</p>
        <p style="color:#908F8F">ติดตามรายละเอียดการจัดการลงทะเบียน สำหรับกิจกรรมต่าง การสัมนา การสอบ และอื่นๆ</p>

    </div>

  
<div class="form-inline fonts1" style="padding-top: 30px">
  @for ($i = 0; $i < sizeof($data); $i++)

  <div class="row" style="padding-top: 15px">
   <div class="col-md-3"></div>
   <div class="col-md-3" >
    <img src="img/Untitled-1.jpg" style="width: 100%"> 
  </div>
  <div class="col-md-4">
    <div class="fonts1 left" style="font-size:20px; margin-bottom:10px; ">{{ $data[$i]['name'] }}</div>
    <div class="fonts1" style="font-size:14px; color: #807F7D; margin-bottom:10px;">{{ $data[$i]['detail'] }}</div>
    <div  style="margin-bottom:8px; padding-left: 50px "><span class="glyphicon glyphicon-paperclip" ></span> {{ $data[$i]['datestrat'] }} ถึง {{ $data[$i]['datestop'] }}</div>
    <div  style="margin-bottom:8px; padding-left: 50px"><span class="glyphicon glyphicon-paperclip"></span> {{ $data[$i]['station'] }}</div>
    <div  style="margin-bottom:15px; padding-left: 50px;"><span class="glyphicon glyphicon-paperclip"></span> {{ $data[$i]['contect'] }}</div>
    <center>
    


    <a  href="{{ route('check',[ 'id'=>$data[$i]['_id'] ]) }}"  class="btn btn-warning"  style="background-color:#58B957; border-color:#58B957; width:100px; border-radius: 0px;">เช็คชื่อ</a>

    <a  href="{{ route('delPP',[ 'id'=>$data[$i]['name'] ]) }}"  class="btn btn-warning"  style="background-color:#58B957; border-color:#58B957; width:100px; border-radius: 0px;">ลบ</a>

    
  </center>
  </div>
  <div class="col-md-1"></div>
</div>
  @endfor
</div>
 





@endsection