<!DOCTYPE html>
<head>
    <meta charset="utf-8">
	<title>video page</title>
	<?php include("./include.php"); ?>
	<script src="../js/video.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/video.css" media="all"/>
</head>
<body>
	<div class="sl sl_main">
		<?php include("./header.php"); ?>
		<div class="row main_cont">
			<div class="col-sm-6 slide-main03"> 
				<a href="./main.php" class="sl2_c" ><img src="../img/logo.png" /></a>
				<!-- <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY?rel=0&amp;autoplay=1&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe> -->
				<div id="player"></div>
				<p style="font-size: 14px;">MAISON D'ANGELANN 2014</p>
			</div>
			<div class="col-sm-6" style="margin-top: 30px;"> 
				<!-- <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY?controls=0"></iframe> -->
				<div id="player1"></div>
				<p class="videoframe" style="font-size: 14px;">MAISON D'ANGELANN 2014</p>			
				<div id="player2"></div>
				<!-- <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY?controls=0"></iframe> -->
				<p style="font-size: 14px;">MAISON D'ANGELANN 2014</p>
			</div>
		</div>
		<?php include("./footer.php"); ?>
	</div> 
</body>
</html>