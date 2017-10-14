<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link rel="stylesheet" type="text/css" href="login1.css">
   


</head>

<body>
<body>
<body background="aa.jpg">
<div class="container">
<div class="main">
    <h2> Login</h2>
   


        
		 <label><b>Email</b></label>  &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; 
            <input type="text" name="usr" placeholder="Username" required="required"  /> <br>
			<label><b>Password</b></label>
            <input type="password" name="pword" placeholder="Password" required="required"  /> <br>
			<form name="loginform" onsubmit="return validateForm();" action="welcome.php" method="post" />
            <button type="submit" value="Login" class="btn btn-primary btn-block btn-large">Login</button> <br> <br>
			New User<br> <br> <br>
			Sign Up Here
			<form name="loginform" onsubmit="return validateForm();" action="signup.php" method="post" />
            <button type="submit" value="Login" class="btn btn-primary btn-block btn-large">Sign up</button> <br> <br>
        </form>
    </div>
</div>


</body>

</html>