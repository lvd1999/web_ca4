<?php

require_once('database.php');
session_start();

$student_name = filter_input(INPUT_POST, 'name');
$sport = filter_input(INPUT_POST, 'sport');
$student_win = filter_input(INPUT_POST, 'win', FILTER_VALIDATE_INT);
$student_lose = filter_input(INPUT_POST, 'lose', FILTER_VALIDATE_INT);
$student_age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
$student_email = filter_input(INPUT_POST, 'email');

$query1 = 'INSERT INTO student
                        (coach_id, student_name, sport, student_win, student_lose, student_age, student_email)
                    VALUES
                        (:coach_id, :student_name, :sport, :student_win, :student_lose, :student_age, :student_email)';
$statement = $db->prepare($query1);
$statement->bindValue(':coach_id', $_SESSION['coach_id']);
$statement->bindValue(':student_name', $student_name);
$statement->bindValue(':sport', $sport);
$statement->bindValue(':student_win', $student_win);
$statement->bindValue(':student_lose', $student_lose);
$statement->bindValue(':student_age', $student_age);
$statement->bindValue(':student_email', $student_email);
$statement->execute();

$message = "Added";
echo "<script type='text/javascript'>alert('$message');window.location.href = 'page.php';</script>";
?>
