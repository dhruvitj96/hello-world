<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />

<script src="js/bootstrap.min.js" type="application/javascript">

</script>

<title>Music Store</title>
</head>

<body>
<br />
<div class="container"> 

<div class="row container">


<div class="col-4">

<h1 class="text-center">SignIn Form</h1>
<form action="signin_code.php" method="post">
Email <input type="email" class="form-control" name="email" />
Password <input type="password" class="form-control" name="password" />
<input type="submit" class="btn btn-danger my-2" value="Sign In" />
</form>
 </div>
 
<div class="form-control col-4">

<h1 class="text-center">Fill SignUp Form</h1>
<form action="signup_code.php" method="post">
First Name <input type="text" class="form-control" name="fname" />
Last Name <input type="text" class="form-control" name="lname" />
Email <input type="email" class="form-control" name="email" />
Password <input type="password" class="form-control" name="password" />
Account Type <input type="radio" name="r1" value="moderator" /> Moderator <input type="radio" name="r1" value="user" /> User <br /> 
Mobile <input type="text" class="form-control" name="mobile" />

<input type="submit" class="btn btn-danger my-2" value="Sign Up" />
</form>
 </div>
</div>
</div>

</body>
</html>
