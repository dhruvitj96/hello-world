<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />

<script src="../js/bootstrap.min.js" type="application/javascript">

</script>

<title>Music Store</title>
</head>

<body>
<br />
<div class="container"> 

<div class="row container">



<div class="form-control col-4">

<h1 class="text-center">Upload Song</h1>
<form action="songs.php" method="post"  enctype="multipart/form-data">
<!-- Albumn <input type="text" class="form-control" name="albumn" /> -->
Song Name <input type="text" class="form-control" name="songname" />
Image <input type="file" class="form-control" name="image" />
Song <input type="file" class="form-control" name="song" />
Type <input type="radio" name="type" value="mp3">Mp3 <input type="radio" value="mp4" name="type"> Video
<br>
<input type="submit" class="btn btn-danger my-2" value="Upload" />
</form>
 </div>
</div>
</div>

</body>
</html>
