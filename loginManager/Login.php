<?php
session_start();
include_once '../model/database.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: Log_successful.php");
}


if(isset($_POST['btn-login']))
{
	
	echo "123123";
$email = $_POST['email'];
$upass = $_POST['pass'];
$query="SELECT * FROM users where email = '{$email}'";
$stmt = $db->prepare($query);    
$stmt->execute(); 
$res = $stmt->fetch(PDO::FETCH_ASSOC);
 
 if ($res){

if($res['password']==md5($upass))
 {
	$_SESSION['user'] = $res['user_id'];
  header("Location: ../index.php");
 }
 
 }else{
	 ?>
        <script>alert('wrong pass');</script>
        <?php
 }
 
 
}
?>

<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Welcome join us!Let's build warm world</title>
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="assets/css/amazeui.min.css" />
  <link rel="stylesheet" href="assets/css/admin.css">
  <link rel="stylesheet" href="assets/css/app.css">
</head>
<style>
    body{
        background-image: url(image/2.jpg);
    }
</style>

<body data-type="login">

  <div class="am-g myapp-login">
	<div class="myapp-login-logo-block  tpl-login-max">
		<div class="myapp-login-logo-text">
			<div class="myapp-login-logo-text">
				Welcome join us!<span> Let's build warm world</span> <i class="am-icon-skyatlas"></i>
				
			</div>
		</div>

		<div class="login-font">
			<i> <a href="Login.php">Log In  </a> </i> or <span> <a href="Register.php"> Sign Up </a></span>
		</div>
		<div class="am-u-sm-10 login-am-center">
			<form class="am-form" method="post">
				<fieldset>
					<div class="am-form-group">
						<input type="email" class="" id="doc-ipt-email-1"  name="email"  placeholder="input your email here">
					</div>
					<div class="am-form-group">
						<input type="password" class="" id="doc-ipt-pwd-1"  name="pass" placeholder="password">
					</div>
					<p><button type="submit"  name="btn-login" class="am-btn am-btn-default">Login</button></p>
				</fieldset>
			</form>
		</div>
	</div>
</div>

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/amazeui.min.js"></script>
  <script src="assets/js/app.js"></script>
</body>




</html>



