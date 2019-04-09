<?php
require_once('../model/database.php');
session_start();

$login_email = filter_input(INPUT_POST, 'login_email');
$login_password = filter_input(INPUT_POST, 'login_password');

$query1 = 'SELECT * FROM users WHERE email = :login_email';
$statement1 = $db->prepare($query1);
$statement1->bindValue(':login_email', $login_email);
$statement1->execute();
$list = $statement1->fetch();
$statement1->closeCursor();

$_SESSION['name'] = $list['username'];

if (empty($list)) {
    echo '<script>
    setTimeout(function () { 
swal({
  title: "There was a problem.",
  text: "User not found.",
  type: "error",
  confirmButtonText: "Back"
},
function(isConfirm){
  if (isConfirm) {
    window.location.href = "signIn.php";
  }
}); }, 100);</script>';
} else {
    $password = $list['password'];

    if (password_verify($login_password, $password)) {
        $_SESSION['block'] = NULL;
        header('Location: ../gunManager/index_home.php');
    } else if (!(password_verify($login_password, $password))) {
        echo '<script>
    setTimeout(function () { 
swal({
  title: "There was a problem.",
  text: "Your password is wrong.",
  type: "error",
  confirmButtonText: "Back"
},
function(isConfirm){
  if (isConfirm) {
    window.location.href = "signIn.php";
  }
}); }, 100);</script>';
    }
}
?>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">