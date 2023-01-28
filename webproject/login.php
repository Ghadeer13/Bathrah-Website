<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>بذرة</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>إسم المستخدم أو كلمة المرور خاطئة</h3>
<br/>حاول مره اخرى <a href='login.php'>تسجيل الدخول</a></div>";
	}
    }else{
?>
<div class="form">
<h1><img src="https://i.dlpng.com/static/png/6647896_preview.png" alt= "bathrah logo" width="100" height="80"></h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="إسم المستخدم " required />
<input type="password" name="password" placeholder="كلمة المرور" required />
<br>
<input name="submit" type="submit" value="التالي " />
</form>
<p>ليس لديك حساب ؟ <a href='registration.php'>اضغط هنا</a></p>
</div>
<?php } ?>
</body>
</html>
