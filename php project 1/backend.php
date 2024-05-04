<?php
// Database connection
$host = 'localhost';
$username = 'your_username';
$password = 'your_password';
$database = 'your_database';

$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Function to get all students
function getStudents() {
    global $conn;
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn, $sql);
    $students = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $students;
}

// Function to add a student
function addStudent($name, $roll_number, $department) {
    global $conn;
    $sql = "INSERT INTO students (name, roll_number, department) VALUES ('$name', '$roll_number', '$department')";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

// Function to update pass status
function updatePassStatus($student_id, $status) {
    global $conn;
    $sql = "UPDATE students SET pass_status='$status' WHERE id=$student_id";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

// Close connection
mysqli_close($conn);
?>
