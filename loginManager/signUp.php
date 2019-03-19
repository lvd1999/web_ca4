<?php

require_once('database.php');
$first_name = filter_input(INPUT_POST, 'first_name');
$last_name = filter_input(INPUT_POST, 'last_name');
$email = filter_input(INPUT_POST, 'email');
$signup_password = filter_input(INPUT_POST, 'signup_password');

$var = filter_var($email, FILTER_VALIDATE_EMAIL);
if ($var == FALSE) {
    $message1 = "Invalid email format";
    echo "<script type='text/javascript'>alert('$message1');window.location.href = 'index.php'</script>";
    exit();
}
$p1 = '/[A-Z]/';

$p2 = '/[a-z]/';

$p3 = '/[0-9]/';

$p4 = '/!#$%^&*{}()<.>]/';

$length = strlen($signup_password);

if ($length < 6) {
    $message1 = "Password must more than 6 characters.";
    echo "<script type='text/javascript'>alert('$message1');window.location.href = 'index.php'</script>";
    exit();
}


if (!preg_match($p1, $signup_password) || !preg_match($p2, $signup_password) || !preg_match($p3, $signup_password)) {
    $message1 = "Password must have at least 1 uppercase,lowercase letter and at 1 number";
    echo "<script type='text/javascript'>alert('$message1');window.location.href = 'index.php'</script>";
    exit();
}

if (preg_match($p4, $signup_password)) {
    $message1 = "Password cannot contain any of the following symbols : /!#$%^&*{}()<.>]/";
    echo "<script type='text/javascript'>alert('$message1');window.location.href = 'index.php'</script>";
    exit();
}

$query2 = "SELECT * FROM user where email = :email";
$statement2 = $db->prepare($query2);
$statement2->bindValue(":email", $email);
$statement2->execute();
$list2 = $statement2->fetch();
$statement2->closeCursor();

if (!empty($list2)) {
    $message1 = "Email address has been used";
    echo "<script type='text/javascript'>alert('$message1');window.location.href = 'index.php'</script>";
    exit();
}

$hash = password_hash($signup_password, PASSWORD_BCRYPT);

$query = 'INSERT INTO user
                 (first_name, last_name, email, password)
              VALUES
                 (:first_name, :last_name, :email, :password)';
$statement = $db->prepare($query);
$statement->bindValue(':first_name', $first_name);
$statement->bindValue(':last_name', $last_name);
$statement->bindValue(':email', $email);
$statement->bindValue(':password', $hash);
$statement->execute();
$statement->closeCursor();

echo "<script type='text/javascript'>alert('Account created. Press Ok to get back to previous page.');window.location.href = 'index.php';</script>";
?>
