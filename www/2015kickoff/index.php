<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>PRHS Bearbotics Team 4068 - Gallery - 2015 Kickoff</title>
<link href="../template.css" rel="stylesheet" type="text/css">
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
	height:600px;
	width: 575px;
	margin-top: 15px;
}

#gallery div {
	text-align: center;
	width: 575px;
	height: 600px;
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
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery.cycle.js"></script>
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
$home = '../';
include $home.'sidebar.php';
?>
<div class="body">
<h2 class="head">2015 Kickoff</h2>
<div id="gallery" class="center">
    <div><img src="kickoff-1.jpg" alt="Slide 1" class="gallerySize"/></div>
    <div><img src="kickoff-2.jpg" alt="Slide 2" class="gallerySize"/></div>
    <div><img src="kickoff-3.jpg" alt="Slide 3" class="gallerySize"/></div>
    <div><img src="kickoff-4.jpg" alt="Slide 4" class="gallerySize"/></div>
    <div><img src="kickoff-5.jpg" alt="Slide 5" class="gallerySize"/></div>
    <div><img src="kickoff-6.jpg" alt="Slide 6" class="gallerySize"/></div>
    <div><img src="kickoff-7.jpg" alt="Slide 7" class="gallerySize"/></div>
    <div><img src="kickoff-8.jpg" alt="Slide 8" class="gallerySize"/></div>
    <div><img src="kickoff-9.jpg" alt="Slide 9" class="gallerySize"/></div>
    <div><img src="kickoff-10.jpg" alt="Slide 10" class="gallerySize"/></div>
    <div><img src="kickoff-11.jpg" alt="Slide 11" class="gallerySize"/></div>
    <div><img src="kickoff-12.jpg" alt="Slide 12" class="gallerySize"/></div>
    <div><img src="kickoff-13.jpg" alt="Slide 13" class="gallerySize"/></div>
    <div><img src="kickoff-14.jpg" alt="Slide 14" class="gallerySize"/></div>
    <div><img src="kickoff-15.jpg" alt="Slide 15" class="gallerySize"/></div>
    <div><img src="kickoff-16.jpg" alt="Slide 16" class="gallerySize"/></div>
    <div><img src="kickoff-17.jpg" alt="Slide 17" class="gallerySize"/></div>
    <div><img src="kickoff-18.jpg" alt="Slide 18" class="gallerySize"/></div>
    <div><img src="kickoff-19.jpg" alt="Slide 19" class="gallerySize"/></div>
    <div><img src="kickoff-20.jpg" alt="Slide 20" class="gallerySize"/></div>
    <div><img src="kickoff-21.jpg" alt="Slide 21" class="gallerySize"/></div>
    <div><img src="kickoff-22.jpg" alt="Slide 22" class="gallerySize"/></div>
    <div><img src="kickoff-23.jpg" alt="Slide 23" class="gallerySize"/></div>
</div>
</body>

</html>
