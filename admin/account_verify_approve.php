

<?php

$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "", "musicmania");
if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql ="update registration set regstatus='Approve' where regid='$id'";

if(mysqli_query($link,$sql))
{
header('Location: account_verify.php');
}
mysqli_close($link);

?>


