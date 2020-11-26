<?php

$valid_passwords = array ("admin" => "fr%T%T2fsd");
$valid_users = array_keys($valid_passwords);

$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];

$validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);

if (!$validated) {
  header('WWW-Authenticate: Basic realm="My Realm"');
  header('HTTP/1.0 401 Unauthorized');
  die ("Not authorized");
}

?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>AngelAnn</title>
	<!-- CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<!-- jQuery and JS bundle w/ Popper.js -->
	<script src="./js/jquery-3.1.0.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="./css/slick.css" media="all" />
	<link rel="stylesheet" type="text/css" href="./css/slick-theme.css" media="all" />
    <link rel="stylesheet" type="text/css" href="./css/styles1.css" media="all" />
    <script type="text/javascript" src="./js/slick.min.js"></script>
	<script type="text/javascript" src="./js/main1.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
    <!--  
	<div class="sl sl0">
		<div class="row_wrap"><div class="row">
			<div class="col-sm-6 slide-main1"> 
				<img class="sl2_img sl2_img_top" src="/img/im21.jpg" />
				<a href="" class="sl2_c" ><img src="/img/logo.png" /></a>
				<img class="sl2_img sl2_img_bottom" src="/img/im22.jpg" />
			</div>
			<div class="col-sm-6 slide-main2"> 
				<img class="sl2_img sl2_img_top" src="/img/im22.jpg" />
				<a href="" class="sl2_c" ><img src="/img/logo.png" /></a>
				<img class="sl2_img sl2_img_bottom" src="/img/im21.jpg" />
			</div>
		</div></div>
    </div> 
	 -->
    <div class="sl sl1">
		<div class="row">
			<div class="col-sm-3 slide-out-top1"> 
			
			</div>
			<div class="col-sm-3 slide-out-top2"> 
			
			</div>
			<div class="col-sm-3 slide-out-top3"> 
			
			</div>
			<div class="col-sm-3 slide-out-top4"> 
			
			</div>
		</div>
    </div>
    <div class="sl sl2">
		<div class="row">
			<a href="/" class="main_logo" ><img src="./img/logo.png" /></a>
			<div class="col-sm-3 slide-main1"> 
				<a  class="main_c" ><img src="./img/c4.png" /> NORTH AMERICA</a>
			</div>
			<div class="col-sm-3 slide-main2"> 
				<a  class="main_c" ><img src="./img/c3.png" /> EUROPE</a>
			</div>
			<div class="col-sm-3 slide-main3"> 
				<a  class="main_c" ><img src="./img/c2.png" /> CIS</a>
			</div>
			<div class="col-sm-3 slide-main4"> 
				<a  class="main_c" ><img src="./img/c1.png" /> UKRAINE</a>
			</div>
		</div>
    </div>
	<div class="sl sl3">
		<div class="row_wrap"><div class="row">
			<div class="col-sm-6 slide-main1"> 
				<img class="sl2_img sl2_img_top" src="./img/img23.jpg" />
				<a href="./page/main.php" class="sl2_c" ><img src="./img/logo.png" /></a>
				<img class="sl2_img sl2_img_bottom" src="./img/img24.jpg" />
			</div>
			<div class="col-sm-6 slide-main2"> 
				<img class="sl2_img sl2_img_top" src="./img/img21.jpg" />
				<a href="./page/main.php" class="sl2_c" ><img src="./img/logo.png" /></a>
				<img class="sl2_img sl2_img_bottom" src="./img/img22.jpg" />
			</div>
		</div></div>
    </div>
</body>
</html>