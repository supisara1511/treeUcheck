<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>THREE-U CHECK - @yield('title')</title>
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/w3.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	@yield('css')
	<style>
	.fonts1{
		font-family:"supermarket Regular", Times,  sans-serif;

	}
	.w3-black, .w3-hover-black:hover {
		color: #fff!important;
		background-color: #313332!important;
	}
	.carousel-control {
		text-align:left;
		padding-left:50px;
		padding-top:10px;
	}

	.li-manu:visited {
		color: #FFF;
		
	}
	.li-manu:active {
		color: #FFF;
	}

	#map {
		margin-top:20px;
		height: 200px;
		width: 300px;
		-webkit-border-radius: 10px;
		-moz-border-radius: 10px;
		border-radius: 10px;
	}

	@yield('style')
</style>
</head>


<body>
<!-- nav -->

@if(Session::has('user'))
	@include('menu.login')
@else
	@include('menu.not-login')
@endif
  <!-- nav -->


  <!-- banner header -->
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="padding-top: 70px">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="{{asset('img/01.png')}}" alt="..." style="width:100%; height:100%">
      </div>
      <div class="item">
        <img src="{{asset('img/02.png')}}" alt="..." style="width:100%; height:100%">
      </div>
      <div class="item">
        <img src="{{asset('img/03.png')}}" alt="..." style="width:100%; height:100%">
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- banner header -->


	
<form action="{{ route('login') }}" method="post">
  {{ csrf_field() }}
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="z-index:20000; margin-left:17px;">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title fonts1 " style="font-size:30px;" id="myModalLabel">Login</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="name" class="cols-sm-2 control-label fonts1" style="letter-spacing: 4px; ">Username</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true" ></i></span>
                <input required type="text" class="form-control" name="user" id="name"  placeholder="Enter your Username"/>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="name" class="cols-sm-2 control-label fonts1" style="letter-spacing: 4px;">Password</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock fa" aria-hidden="true"></i></span>
                <input required type="Password" class="form-control" name="Pass" id="name"  placeholder="Enter your Password"/>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" style="background-color:#58B957; border-color:#58B957;">Cofirm</button>
        </div>
      </div>
    </div>
  </div>
</form>
	

	@yield('content')











	
	<div style="background-color:#313332; width:100%; height:300px; margin-top:100px; padding-top:30px; ">
		<div style="display:inline-block; left:50%; position:relative; margin-left:-425px;">
			<div style="float:left; right:-50%;">
				<div id="map"></div>
				<script>
					function initMap() {
						var uluru = {lat: 13.289386, lng: 100.930221};
						var map = new google.maps.Map(document.getElementById('map'), {
							zoom: 10,
							center: uluru
						});
						var marker = new google.maps.Marker({
							position: uluru,
							map: map
						});
					}
				</script>
				<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSri6xDweSFsQ2ELKMOxNgmBmAgQH-xmM&callback=initMap">
				</script>
			</div>

			<div style="color:#FFF; margin-top:20px; width:500px; float:left; margin-left:50px;" align = "left">
				<div style="font-size:14px; color:#D8D8D8; display:inline-block; width:500px;">
					<div style="font-size:24px; padding-bottom:20px;">CONTACT<span style="color:#00C7E8;"> ME</span>
					</div>
					<span class="fa fa-map-marker" style="font-size:20px; padding-right:20px;"></span>
					Adderss : 24/66 สุขสรรค์วิลล่า 1 ถ.ลงหาดบางแสน ซ.12 ต.แสนสุข อ.เมือง
					<div style="padding-top:30px;"></div>
					<span class="fa fa-phone" style="font-size:20px; padding-right:20px;"></span>
					Phone : 097-1949445
					<div style="padding-top:30px;"></div>
					<span class="fa fa-envelope" style="font-size:20px; padding-right:20px;"></span>
					E-mail : Xhoa_2541@hotmail.com
				</div>
			</div>
		</div>
	</div>



	<div style="background-color:#252726; width:100%; height:50px;">
		<center>
			<div style="padding-top:13px; color:#FFFFFF;" class="fonts1" >
				Copyrigts 2016
			</div>
		</center>

	</div>
	

	@yield('js')

	<script>
		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
			showDivs(slideIndex += n);
		}

		function showDivs(n) {
			var i;
			var x = document.getElementsByClassName("mySlides");
			if (n > x.length) {slideIndex = 1}    
				if (n < 1) {slideIndex = x.length}
					for (i = 0; i < x.length; i++) {
						x[i].style.display = "none";  
					}
					x[slideIndex-1].style.display = "block";  
				}
	</script>


	<script>
				function myFunction() {
					var x = document.getElementById("navDemo");
					if (x.className.indexOf("w3-show") == -1) {
						x.className += " w3-show";
					} else { 
						x.className = x.className.replace(" w3-show", "");
					}
				}
	</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>	

	</body>
</html>