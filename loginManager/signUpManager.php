<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php

require_once('../model/database.php');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$signup_password = filter_input(INPUT_POST, 'signup_password');

$var = filter_var($email, FILTER_VALIDATE_EMAIL);
if ($var == FALSE) {
    echo '<script>
    setTimeout(function () { 
swal({
  title: "There was a problem!",
  text: "Invalid email format.",
  type: "error",
  confirmButtonText: "Back"
},
function(isConfirm){
  if (isConfirm) {
    window.location.href = "signUp.php";
  }
}); }, 100);</script>';
    exit();
    exit();
}
$p1 = '/[A-Z]/';

$p2 = '/[a-z]/';

$p3 = '/[0-9]/';

$length = strlen($signup_password);

if ($length < 6) {
    echo '<script>
    setTimeout(function () { 
swal({
  title: "There was a problem!",
  text: "Password must be more than 6 characters.",
  type: "error",
  confirmButtonText: "Back"
},
function(isConfirm){
  if (isConfirm) {
    window.location.href = "signUp.php";
  }
}); }, 100);</script>';
    exit();
}

if (!preg_match($p1, $signup_password) || !preg_match($p2, $signup_password) || !preg_match($p3, $signup_password)) {
    echo '<script>
    setTimeout(function () { 
swal({
  title: "There was a problem!",
  text: "Password must contain at least one lowercase letter, one uppercase letter and one numeric digit.",
  type: "error",
  confirmButtonText: "Back"
},
function(isConfirm){
  if (isConfirm) {
    window.location.href = "signUp.php";
  }
}); }, 100);</script>';
    exit();
}

$query2 = "SELECT * FROM users where email = :email";
$statement2 = $db->prepare($query2);
$statement2->bindValue(":email", $email);
$statement2->execute();
$list2 = $statement2->fetch();
$statement2->closeCursor();

if (!empty($list2)) {
    echo '<script>
    setTimeout(function () { 
swal({
  title: "There was a problem.",
  text: "Email address had been used.",
  type: "error",
  confirmButtonText: "Back"
},
function(isConfirm){
  if (isConfirm) {
    window.location.href = "signUp.php";
  }
}); }, 100);</script>';
    exit();
}

$hash = password_hash($signup_password, PASSWORD_DEFAULT);

$query = 'INSERT INTO users
                 (username, email, password)
              VALUES
                 (:username, :email, :password)';
$statement = $db->prepare($query);
$statement->bindValue(':username', $name);
$statement->bindValue(':email', $email);
$statement->bindValue(':password', $hash);
$statement->execute();
$statement->closeCursor();

echo '<script>
    setTimeout(function () { 
swal({
  title: "Congratulations!",
  text: "Account created.",
  type: "success",
  confirmButtonText: "Login"
},
function(isConfirm){
  if (isConfirm) {
    window.location.href = "signIn.php";
  }
}); }, 100);</script>';
?>
