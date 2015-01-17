<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="template.css">
<style>
body {
	font-family: serif;
}

.head {
	font-family:"serif";
	text-align:center;
}
h2 {
	margin-top: 0px;
}
.district {
	float: right;
	height:150px;
	width: 550px;
	padding: 10px 10px;
	position: absolute;
	left: 306px;
}
#lpsdpic {
	float: left;
	position: absolute;
}
.hill {
	float: right;
	height:150px;
	width: 550px;
	padding: 10px 10px;
	position: absolute;
	left: 306px;
	top: 265px;
}
#hillPic {
	position: absolute;
	top: 265px;
}
.grumman {
	float: right;
	height:150px;
	width: 550px;
	padding: 10px 10px;
	position: absolute;
	left: 306px;
	top: 472px;
}
#grummanPic {
	position: absolute;
	top: 472px;
}
.martin {
	float: right;
	height:150px;
	width: 550px;
	padding: 10px 10px;
	position: absolute;
	left: 306px;
	top: 572px;
}
#martinPic {
	position: absolute;
	top: 572px;
}
.ndep {
	float: right;
	height:150px;
	width: 550px;
	padding: 10px 10px;
	position: absolute;
	left: 306px;
	top: 785px;
}
#ndepPic {
	position: absolute;
	top: 785px;
	max-height: 256px;
}
.synthes {
	float: right;
	height:150px;
	width: 550px;
	padding: 10px 10px;
	position: absolute;
	left: 306px;
	top: 1066px;
}
#synthesPic {
	position: absolute;
	top: 1066px;
}
.plus {
	float: right;
	height:150px;
	width: 550px;
	padding: 10px 10px;
	position: absolute;
	left: 306px;
	top: 1251px;
}
#plusPic {
	position: absolute;
	top: 1251px;
	left: 25px;
	margin-botton: 25px;
	padding-bottom: 75px;
}
.image {
	max-width: 256px;
	position: absolute;
	left: 25px;
}
</style>
<title>PRHS Bearbotics Team 4068 - Sponsors</title>
<meta charset="UTF-8">
</head>

<body>
<div class="header">
	<h1 class="head">Palmer Ridge Robotics - Sponsors</h1>
</div>
<?PHP
$home = './';
include $home.'sidebar.php';
?>
<div class="body">
	<h2 class="head">SPONSORS TO TEAM 4068</h2>
	<p class="district">FRC Team 4068 is supported by the<b> Lewis Palmer School District #38</b>. Without their support, we would not be able to compete. They provide us with facilities for our workshop and the sponsorship that allows us to register as an FRC team.</p>
	<img src="sponsorspage/cover_logo.jpg" alt="Lewis Palmer School District" class="image" id="lpsdpic">
	<p class="hill"><b>The Monument Hill Kiwanis</b> grants us money each year to be spent on any variety of supplies, parts or other necessary items throughout the year. They also support our team greatly.</p>
	<img src="sponsorspage/mhkiwanis_logo.jpg" alt="Monument Hill Kiwanis" class="image" id="hillPic">
	<p class="grumman"><b>Northrop Grumman</b> grants us money each year that we use to cover some of the expenses for parts and keep ourselves on budget.</p>
	<img src="sponsorspage/northrop_grumman_logo.jpg" alt="Northrop Grumman" class="image" id="grummanPic">
	<p class="martin"><b>Lockheed Martin</b> gives us a large grant. One of our team's mentors works for Lockheed Martin.</p>
	<img src="sponsorspage/lockheed_martin_logo.png" alt="Lockheed Martin" class="image" id="martinPic">
	<p class="ndep"><b>NDEP</b> gives us grant money to spend on parts and other expenses. Two of our team's mentors work for companies that often work closely with NDEP.</p>
	<img src="sponsorspage/ndep_logo.jpg" alt="NDEP" class="image" id="ndepPic">
	<p class="synthes"><b>DePuy Synthes</b> gives us a grant to be spent on metal working equipment such as a sheer, brake, and roll. They also give us money for the development of lego workshops.</p>
	<img src="sponsorspage/depuy_synthes_logo.jpg" alt="DePuy Synthes" class="image" id="synthesPic">
	<p class="plus"><b>Brakes Plus</b> donates to our team every year to cover the cost of kickoff supplies, hardware and even snacks for the workshop so that we can remain productive.</p>
	<img src="sponsorspage/brakes_plus_logo.jpg" alt="Brakes Plus" class="image" id="plusPic">
</div>
</body>
</html>
