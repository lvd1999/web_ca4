<?php

require_once('database.php');
$student_id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

$query = 'DELETE FROM student WHERE student_id = :student_id';

$statement1 = $db->prepare($query);
$statement1->bindValue(':student_id', $student_id);
$statement1->execute();
$statement1->closeCursor();

$message = "Deleted";
echo "<script type='text/javascript'>alert('$message');window.location.href = 'page.php';</script>";


