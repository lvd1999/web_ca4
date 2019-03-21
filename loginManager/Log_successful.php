<?php
session_start();
include_once '../model/database.php';

if(!isset($_SESSION['user']))
{
 header("Location: ../index.php");
}
$query = "SELECT * FROM users WHERE user_id=".$_SESSION['user'];
$stmt = $db->prepare($query);    
$stmt->execute(); 
$res = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $res['email']; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
 <div id="left">
    <label>cleartuts</label>
    </div>
    <div id="right">
     <div id="content">
         hi' <?php echo $res['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
        </div>
    </div>
</div>
</body>
</html>