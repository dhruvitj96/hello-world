



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />

<script src="../js/bootstrap.min.js" type="application/javascript">

</script>

<style>
.back{

width:100%;	
}
body{

font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;	
}
.nav-link{
color:#FFF;	
}
.table{
color:black;	

}
.back{
background-color:#000;	
}
</style>

</head>


<body>

<div class="container-fluid">
<div class="row back">

<div class="col-lg-2 col-sm-2">
<img src="../image/logo.svg" /> <br />

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
<div class="row clearfix">
<div class="col-12 clearfix">
<h1 class="text-center"><u> Moderator Profile</u></h1>
</div>



<?php



$link = mysqli_connect("localhost", "root", "", "musicmania");
if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql ="select * from tbsongs";
	echo "<table class='table table-hover'>";
	echo "<th>Image</th><th>Song Title</th><th> Play List</th> <th>Status</t>";
if($result = mysqli_query($link,$sql))
{
while($row=mysqli_fetch_assoc($result))
{

	echo "<tr><td><img src='images/".$row['song_image']."' height='150' width='100' /></td>";
	echo "<td><h4> ".$row['song_title']. " </h4></td>";
	echo "<td><audio controls><source src='songs/".$row['song']."' type='audio/mpeg'>
</audio></td>";
	echo "<td><h4>".$row['status']."</h4></td>";
	
	echo "</tr>";
	
}
echo "</table>";
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

<div class="card-footer back">

<div class="row">
<div class="col-12">
<center>
<img src="../image/logo.svg" />

<h6>All rights reserved.</h6>
</center>
</div>
</div>
</div>

</body>
</html>
