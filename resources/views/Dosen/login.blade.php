<html>
<head>
<title>Login user</title>
<link href=”style/css/style.css” rel=”stylesheet” type=”text/css”>
<link href=”style/css/bootstrap.min.css” rel=”stylesheet”>
<script type=”style/text/javascript” src=”js/jquery.js”></script>
<script type=”style/text/javascript” src=”js/bootstrap.js”></script>
<meta http-equiv=”Content-Type” content=”text/html; charset=iso-8859-1″><style type=”text/css”>
body {
background-image: url(style/data/background-login.jpg);
background-repeat: no-repeat;
width: 100%;
height: 100%;
position: fixed;
z-index: 1;
float: left;
left: 0;
min-width:100%;
min-height:100%;

}
.style1 {color: #FFFFFF}
–>
</style></head>
<body>

<div id=wrapper align=”center”>
<p><h3 class=”style1″>Login User</h3></p></br></br>
<form name=”form” action=”login-cek.php” method=”post” class=”form-inline”>

<p>
<input type=”text” name=”username” required=”required” class=”form-control” size=”30″ placeholder=”Username”>
</p></br>
<p><input type=”password” name=”password” required=”required” class=”form-control” size=”30″ placeholder=”Password”/></p>

<h6><b style=”color: white”>Tidak memiliki account </b><a href=”daftar”>klik disini</a></h6>
<input type=”submit” value=”Login” class=”btn btn-success btn-sm” size=”500″/>
</form>
</div>
</body>
</html>

