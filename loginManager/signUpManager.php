<?php

require_once('../model/database.php');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$signup_password = filter_input(INPUT_POST, 'signup_password');

$var = filter_var($email, FILTER_VALIDATE_EMAIL);
if ($var == FALSE) {
    $message1 = "Invalid email format";
    echo "<script type='text/javascript'>alert('$message1');window.location.href = 'signUp.php'</script>";
    exit();
}
$p1 = '/[A-Z]/';

$p2 = '/[a-z]/';

$p3 = '/[0-9]/';

$p4 = '/!#$%^&*{}()<.>]/';

$length = strlen($signup_password);

if ($length < 6) {
    $message1 = "Password must more than 6 characters.";
    echo "<script type='text/javascript'>alert('$message1');window.location.href = 'signUp.php'</script>";
    exit();
}


if (!preg_match($p1, $signup_password) || !preg_match($p2, $signup_password) || !preg_match($p3, $signup_password)) {
    $message1 = "Password must have at least 1 uppercase,lowercase letter and at 1 number";
    echo "<script type='text/javascript'>alert('$message1');window.location.href = 'signUp.php'</script>";
    exit();
}

if (preg_match($p4, $signup_password)) {
    $message1 = "Password cannot contain any of the following symbols : /!#$%^&*{}()<.>]/";
    echo "<script type='text/javascript'>alert('$message1');window.location.href = 'signUp.php'</script>";
    exit();
}

$query2 = "SELECT * FROM users where email = :email";
$statement2 = $db->prepare($query2);
$statement2->bindValue(":email", $email);
$statement2->execute();
$list2 = $statement2->fetch();
$statement2->closeCursor();

if (!empty($list2)) {
    $message1 = "Email address has been used";
    echo "<script type='text/javascript'>alert('$message1');window.location.href = 'signUp.php'</script>";
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

echo "<script type='text/javascript'>alert('Account created. Press Ok to get back to previous page.');window.location.href = 'signIn.php';</script>";
?>
