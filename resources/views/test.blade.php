@extends('default')

@section('title', 'Admin')


@section('style')



@endsection


@section('content')

 
  

 <div style="margin-left:50px; height:1500px;"> 
    <center>
      <div class="fonts1" style="font-size:50px; padding-top:20px;">ระบบสมัครสมาชิก</div>


      <form action="{{ route('regMember') }}" method="post">
        {{ csrf_field() }}
        <div style="margin-top:0px; display:inline-block; padding-right:70px; " align="right">
          <div class="fonts1" style="font-size:15px; margin-top:20px; color:#383838;">
            ชื่อ<input type="text" id="fname" name="name" placeholder="" style="width:500px; margin-left:20px; height:30px;">
          </div>

          <div class="fonts1" style="font-size:15px; margin-top:20px;">
            นามสกุล<input type="text" id="fname" name="sur" placeholder="" style="width:500px; margin-left:20px; height:30px;">
          </div>

          <div class="fonts1" style="font-size:15px; margin-top:20px;">
           Email<input type="text" id="fname" name="email" placeholder="" style="width:500px; margin-left:20px; height:30px;">
         </div>

         <div class="fonts1" style="font-size:15px; margin-top:20px;">
           username<input type="text" id="fname" name="user" placeholder="" style="width:500px; margin-left:20px; height:30px;">
         </div>



         <div class="fonts1" style="font-size:15px; margin-top:20px;">
           password<input type="text" id="fname" name="pass" placeholder="" style="width:500px; margin-left:20px; height:30px;">
         </div>

         <div class="fonts1" style="font-size:15px; margin-top:20px;">
          confirm password<input type="text" id="fname" name="conpass" placeholder="" style="width:500px; margin-left:20px; height:30px;">
        </div>

        <div class="fonts1" style="font-size:15px; margin-top:20px;">
          สิทะ์การเข้าใช้งาน

            <select name="cars" style="width:500px; margin-left:20px; height:30px;">
              <option value="0">Addmin</option>
              <option value="1">User</option>
            </select>
          
        </div>
      </div>




      <center>
        <div style="margin-top:20px;">
          <button type="button" class="btn btn-primary" style="background-color:#5D5E5C; border-color:#5D5E5C; margin-right:10px; width:100px;">ยกเลิก</button>
          <button type="submit" class="btn btn-primary" style="background-color:#58B957; border-color:#58B957; width:100px; " onclick="submitform();">ยืนยัน</button>
        </div>
      </center>

    </form>

    <div class="fonts1" style="padding-top: 20px; width: 70%">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th class="text-center">ชื่อ - นามสกุล</th>
            <th class="text-center">Email</th>
            <th class="text-center">Username</th>
            <th class="text-center">สถานะ</th>
            <th class="text-center">ตัวเลือก</th>
          </tr>
        </thead>
        <tbody>
          @for ($i = 0; $i < sizeof($data); $i++)
          <tr>
            <td class="text-center">{{ $data[$i]['name'] }} {{ $data[$i]['surname'] }}</td>
            <td class="text-center">{{ $data[$i]['email'] }}</td>
            <td class="text-center">{{ $data[$i]['username'] }}</td>
            <td class="text-center">@if($data[$i]['status']==0)<span class="label label-success">Admin</span>
                                     @else<span class="label label-warning">User</span>
                                     @endif

           </td>
            <td class="text-center"> <a href="#" onclick="deletestaff('{{ route('delmember',[ 'id'=>$data[$i]['username'] ]) }}');">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>      
            </a></td>

          </tr>
          @endfor
        </tbody>

      </table>
    </div>
    

  </center>

</div>


@endsection



@section('js')

<script>
  function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

function deletestaff(url) {

    if(confirm("คุณต้องการลบหรือไม่ ?")){

    window.location = url;

  }

  
}

</script>



@endsection