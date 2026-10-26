<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $course = trim($_POST['course']);
    $phone = trim($_POST['phone']);

    $stmt = $conn->prepare(
        "INSERT INTO students (name, email, course, phone)
         VALUES (?, ?, ?, ?)"
    );

    $stmt->bind_param("ssss", $name, $email, $course, $phone);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit;
    }

    echo "Error adding student.";
}
?>
