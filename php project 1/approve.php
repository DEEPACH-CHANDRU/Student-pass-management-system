<?php
include 'db.php';

$id = $_GET['id'];
updatePassStatus($id, 'Approved');

header('Location: index.php');
?>
