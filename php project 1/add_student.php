<?php
include 'db.php';

$name = $_POST['name'];
$roll_number = $_POST['roll_number'];
$department = $_POST['department'];

addStudent($name, $roll_number, $department);

header('Location: index.php');
?>
