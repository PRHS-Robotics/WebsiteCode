<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>PRHS Bearbotics Team 4068 - Gallery</title>
<link href="template.css" rel="stylesheet" type="text/css">
<style>
body {
 -moz-opacity: .999;
 padding: 25px;
}

.head {
	text-align: center;
}

.center {
	margin-left:auto;
	margin-right:auto;
}

#gallery {
	height:500px;
	width: 575px;
	margin-top: 15px;
}

#gallery div {
	text-align: center;
	width: 575px;
	height: 500px;
}

#gallery img {
	padding: 10px;
	border: 1px solid #333;
	background-color: #FFF;
}

#gallery div p {
	font: bold 12px sans-serif;	
}
#controls {
	text-align: center;
}
#pager    a, #main .control  {
	font-size: 12px;
	font-weight: bold;
	color: #FFF;
	background: #0E3B3B;
	padding: 2px 5px;
	text-decoration: none;
	margin-left: 5px;
	cursor: pointer;
}
#pager a.activeSlide {
	background-color: #E6E2AF;
	color: #000;
}
#pager a:hover, #playControl:hover {
	background: #900;
}

</style>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.cycle.js"></script>
<script type="text/javascript">
$(document).ready(function() {
													 

$('#gallery').cycle({
	fx: 'scrollRight',
	timeout: 3000,
	speed: 500,
	delay: -2000,
	/*pager: '#pager',
	next: '#next',
	prev: '#prev'*/
});

/*$('#playControl').toggle(
		function() {
			$('#gallery').cycle('pause');
			$(this).text('Play');
		},
		function() {
			$('#gallery').cycle('resume');
			$(this).text('Pause');
		});*/

}); // end ready()
</script>
</head>

<body>
<div class="header">
	<h1 class="head">Palmer Ridge Robotics</h1>
</div>
<?PHP
$home = './';
include $home.'sidebar.php';
?>
<div class="body">
<h2 class="head">Gallery</h2>
<div id="gallery" class="center">
    <div><img src="standInImages/1.jpg" alt="Slide 1" /></div>
    <div><img src="standInImages/2.jpg" alt="Slide 2" /></div>
    <div><img src="standInImages/3.png" alt="Slide 3" /></div>
    <div><img src="standInImages/4.jpg" alt="Slide 4" /></div>
    <div><img src="standInImages/5.jpg" alt="Slide 5" /></div>
</div>
</body>
</html>