<?php
$sts='';
if(strcmp($_GET['sts'],"Active")==0)
{
	$sts=$_GET['sts'];

}
else if(strcmp($_GET['sts'],"Reject")==0)
{
	
$sts=$_GET['sts'];
}
else{
header('Location: http://localhost/music/admin/admin_display.php');
	
}




$link = mysqli_connect("localhost", "root", "", "musicmania");
if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql ="update tbsongs set status='$sts' where song_id=".$_GET['id']."";
if(mysqli_query($link,$sql))
{
	header('Location: http://localhost/music/admin/admin_display.php');
}
else{
echo $conn->error;
}
?>