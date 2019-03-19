<?php

require_once('database.php');

$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$update_student_name = filter_input(INPUT_POST, 'update_name');
$update_sport = filter_input(INPUT_POST, 'update_sport');
$update_student_win = filter_input(INPUT_POST, 'update_win', FILTER_VALIDATE_INT);
$update_student_lose = filter_input(INPUT_POST, 'update_lose', FILTER_VALIDATE_INT);
$update_student_age = filter_input(INPUT_POST, 'update_age', FILTER_VALIDATE_INT);
$update_student_email = filter_input(INPUT_POST, 'update_email');

$query = 'SELECT * FROM student WHERE student_id = :student_id';
$statement = $db->prepare($query);
$statement->bindValue(':student_id', $id);
$statement->execute();
$list = $statement->fetch();
$statement->closeCursor();

if (empty($list)) {
    $message = "There was a problem. Cannot find student with given ID.";
    echo "<script type='text/javascript'>alert('$message');window.location.href = 'page.php'</script>";
} else {
    $query1 = 'UPDATE student SET
                        student_name = :student_name, sport = :sport, student_win = :student_win, student_lose =  :student_lose, student_age = :student_age, student_email = :student_email
                        WHERE student_id = :student_id';
    $statement1 = $db->prepare($query1);
    $statement1->bindValue(':student_id', $id);
    $statement1->bindValue(':student_name', $update_student_name);
    $statement1->bindValue(':sport', $update_sport);
    $statement1->bindValue(':student_win', $update_student_win);
    $statement1->bindValue(':student_lose', $update_student_lose);
    $statement1->bindValue(':student_age', $update_student_age);
    $statement1->bindValue(':student_email', $update_student_email);
    $statement1->execute();

    $message1 = "Updated";
    echo "<script type='text/javascript'>alert('$message1');window.location.href = 'page.php'</script>";
}
?>






