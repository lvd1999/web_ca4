<?php

require_once('database.php');
session_start();

$login_email = filter_input(INPUT_POST, 'login_email');
$login_password = filter_input(INPUT_POST, 'login_password');

$query1 = 'SELECT * FROM user WHERE email = :login_email';
$statement1 = $db->prepare($query1);
$statement1->bindValue(':login_email', $login_email);
$statement1->execute();
$list = $statement1->fetch();
$statement1->closeCursor();


$_SESSION['coach_id'] = $list['coach_id'];
$_SESSION['name'] = $list['name'];

if (empty($list)) {
    $message = "There was a problem. User not found.";
    echo "<script type='text/javascript'>alert('$message');window.location.href = 'signIn.php'</script>";
} else {
    $password = $list['password'];

    if (password_verify($login_password, $password)) {
        header('Location: ../gunManager/index.php');
    } else if (!(password_verify($login_password, $password))) {

        $message1 = "There was a problem. Your password is wrong";
        echo "<script type='text/javascript'>alert('$message1');window.location.href = 'signIn.php'</script>";
    }
}
?>