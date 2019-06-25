<?php
$target_dir_image = "images/";
$target_file_image = $target_dir_image . basename($_FILES["image"]["name"]);
echo $target_file_image."<br>";
$uploadOk_image = 1;
$imageFileType = strtolower(pathinfo($target_file_image,PATHINFO_EXTENSION));
echo $imageFileType;

/*
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
	//echo $check;
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk_image = 1;
    } else {
        echo "File is not an image.";
        $uploadOk_image = 0;
    }
}
*/

// Check file size
if ($_FILES["image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk_image = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk_image == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
}
 else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file_image)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
		
		echo "<br><img src='images/".basename( $_FILES["image"]["name"])."' width=100 height=100 />";
  
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$target_dir_song = "songs/";
$target_file_song = $target_dir_song . basename($_FILES["song"]["name"]);
echo $target_file_song."<br>";
$uploadOk_song = 1;
$SongFileType = strtolower(pathinfo($target_file_song,PATHINFO_EXTENSION));
echo $SongFileType;

// Check file size
if ($_FILES["song"]["size"] > 500000000) {
    echo "Sorry, your file is too large.";
    $uploadOk_song = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk_song == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
}
 else {
    if (move_uploaded_file($_FILES["song"]["tmp_name"], $target_file_song)) {
        echo "The file ". basename( $_FILES["song"]["name"]). " has been uploaded.";
		
//		echo "<br><img src='songs/".basename( $_FILES["song"]["name"])."' width=100 height=100 />";
		echo "<br> <audio src='songs/'" .basename( $_FILES["song"]["name"]). " />";
  
    } else {
        echo "Sorry, there was an error uploading your file.".$target_file_song;
    }
}


// insertion code
session_start();

$eml=$_SESSION['email'];
$nm = $_POST['songname'];

$img = basename( $_FILES["image"]["name"]);

$song = basename( $_FILES["song"]["name"]);
$typ = $_POST['type'];
$sts="Pending";

$link = mysqli_connect("localhost", "root", "", "musicmania");
if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql ="insert into tbsongs values(NULL,'$eml','$nm','$img','$song','$typ','$sts')";


if(mysqli_query($link,$sql))
{
echo "Successful ".mysqli_insert_id($link);	
}
else
{
	echo "Not Successful" .mysqli_error($link);
	
}

mysqli_close($link);


?>


