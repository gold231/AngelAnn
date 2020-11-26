<!DOCTYPE html>
<head>
    <meta charset="utf-8">
	<title>main page</title>
	<?php include("./include.php"); ?>
</head>
<body>
	<div class="sl sl_main">
		<?php include("./header.php"); ?>
		<div class="row main_cont">
			<div class="col-md-6 p-0">
				<div class="row">
					<div class="col-sm-6 sort p-0"> 
						<div class="sort_by"> 
							<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								SORT BY
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
							</div>
						</div>
						<div class="sort_logo"> 
							<a href="" class="sl2_c" ><img src="../img/logo.png" /></a>
						</div>
					</div>
					<div class="col-sm-6 slide-main01 p-0">
						<img class="sl2_img sl2_img_bottom1" src="../img/mainim1.jpg" />
					</div>
				</div>
			</div>
			<div class="col-md-6 p-0">
				<div class="row">
					<div class="col-sm-6 slide-main02 p-0">
						<img class="sl2_img sl2_img_top1" src="../img/mainim2.jpg" />				
						<img class="sl2_img sl2_img_bottom2 sl2_img_bottom_otst" src="../img/mainim4.jpg" />
					</div>
					<div class="col-sm-6 slide-main03 p-0"> 
						<img class="sl2_img sl2_img_top2" src="../img/mainim3.jpg" />
					</div>
				</div>
			</div>
		</div>
		<?php include("./footer.php"); ?>
	</div> 	
</body>
</html>