<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Musician</title>
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" />
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />

<script src="js/bootstrap.js" type="application/javascript">
</script>
<style>
.back{

width:100%;	
}
body{
background-color:#000;
font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;	
}
.nav-link{
color:#FFF;	
}
h1, h2,h3, h4, h5, h6{
color:white;	

}
</style>

</head>


<body>

<div class="container-fluid">
<div class="row">

<div class="col-lg-2 col-sm-2">
<img src="image/logo.svg" /> <br />

</div>

<div class="col-lg-7 col-sm-7">
<nav class="nav nav-fill navbar-dark float-right">
  <a class="nav-link active" href="#">Home</a>
  <a class="nav-link" href="#">About</a>
  <a class="nav-link" href="#">Contact</a>
  <a class="nav-link" href="#">Play List</a>

</nav>

</div>
</div>
<div class="container">
<div class="row">
<div class="col-12 back">
<img src="image/music-background.jpg" height="400" style="width:100%;" />
</div>
</div>
</div>
<div class="row clearfix">
<div class="col-12 clearfix">
<h1 class="text-center"><u>Musician</u></h1>
</div>





<?php



$link = mysqli_connect("localhost", "root", "", "musicmania");
if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql ="select * from tbsongs where status='Active'";

if($result = mysqli_query($link,$sql))
{
while($row=mysqli_fetch_assoc($result))
{
echo "<div class='col-6'> <center>";


	


	
	echo "<img src='moderator/images/".$row['song_image']."' height='200' width='300' /> <br>";
		echo "<audio controls><source src='moderator/songs/".$row['song']."'  type='audio/mpeg'></audio>";

	echo "</center>";
    echo "<h3 class='text-center'>".$row['song_title']."</h3>";
	echo "</div>";
	
}
}
mysqli_close($link);



?>




<!--
<div class="col-6">
<center>
<img src="image/img2.jpg" />
<h3 class="text-center">Music</h3>
</center>
</div>
-->

</div>
</div>

</div>

<div class="card-footer">

<div class="row">
<div class="col-12">
<center>
<img src="image/logo.svg" />

<h6>All rights reserved.</h6>
</center>
</div>
</div>
</div>

</body>
</html>
