<?PHP
if(!isset($home)){
	die("Variable 'home' must be set in order to use sidebar");
}
?>
<div class="nav">
<ul class="nav">
	<li><a href=<?PHP echo $home.'index.php';?>><h3>Home</h3></a></li>
	<li><a href=<?PHP echo $home.'contact.php';?>><h3>Contact</h3></a></li>
	<li><a href=<?PHP echo $home.'about/about.php';?>><h3>About</h3></a></li>
<<<<<<< HEAD
    <li><a href=<?PHP echo $home.'sponsors.php';?>><h3>Sponsors</h3></a></li>
    <li><a href=<?PHP echo $home.'gallery.php';?>><h3>Gallery</h3></a></li>
	<li><?PHP //include $home.'users/user.php';?></li>
=======
	<li><?PHP // echo '<hr>'; include $home.'users/user.php';?></li>
>>>>>>> FETCH_HEAD
</ul>
</div>
<?PHP
?>