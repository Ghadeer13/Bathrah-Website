<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>بذرة</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>لقد قمت بتسجيل الدخول بنجاح</h3>
<br/>اضغط هنا <a href='login.php'>تسجيل الدخول</a></div>";
        }
    }else{
?>

<div class="form">
<h1>إنشاء حساب </h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="إسم المستخدم" required />
<input type="email" name="email" placeholder="الايميل" required />
<input type="password" name="password" placeholder="كلمة المرور" required />
<input type="submit" name="submit" value="تسجيل" />
</form>
</div>
<?php } ?>
</body>
</html>
