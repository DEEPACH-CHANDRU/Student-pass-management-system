<?php
include 'db.php';

$id = $_GET['id'];
updatePassStatus($id, 'Rejected');

header('Location: index.php');
?>
