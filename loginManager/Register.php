
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Amaze UI Admin index Examples</title>
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


<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: Log_successful.php");
}
include_once '../model/database.php';

if(isset($_POST['btn-signup']))
{
 $uname = $_POST['uname'];
 $email = $_POST['email'];
 $upass = md5($_POST['pass']);
 
 try{
	  $query = "insert into users(`username`,`password`,`email`) values (:username,:password,:email)";
 
 $stmt = $db->prepare($query);
 $stmt->execute(array(':username'=>$uname,':password'=>$upass,':email'=>$email));    
 
	?>
        <script>
				alert('successfully registered ');		
		</script>
        <?php
		  header("Location: Login.php");
		  
 }
catch (Exception $e){
//	var_dump($e);
}
 

 
if(  $db->lastinsertid() )
 {
  

 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>


<body data-type="login">

  <div class="am-g myapp-login">
	<div class="myapp-login-logo-block  tpl-login-max">
		<div class="myapp-login-logo-text">
			<div class="myapp-login-logo-text">
				Edit your title here<span> Register Page</span> <i class="am-icon-skyatlas"></i>
				
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
						<input type="text" class="" id="doc-ipt-email-1"  name="uname"  placeholder="input your username here">
					</div>
					
					<div class="am-form-group">
						<input type="password" class="" id="doc-ipt-pwd-1"  name="pass" placeholder="password">
					</div>
					<p><button type="submit"  name="btn-signup" class="am-btn am-btn-default">Sign you up</button></p>
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