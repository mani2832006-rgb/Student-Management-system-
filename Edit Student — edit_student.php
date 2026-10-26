<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = (int)$_POST['id'];
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $course = trim($_POST['course']);
    $phone = trim($_POST['phone']);

    $stmt = $conn->prepare(
        "UPDATE students
         SET name=?, email=?, course=?, phone=?
         WHERE id=?"
    );

    $stmt->bind_param(
        "ssssi", $name, $email, $course, $phone, $id
    );

    if ($stmt->execute()) {
        header("Location: index.php");
        exit;
    }

    echo "Error updating student.";
}

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if (!$id) {
    die("Invalid student ID.");
}

$stmt = $conn->prepare("SELECT * FROM students WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();
$student = $result->fetch_assoc();

if (!$student) {
    die("Student not found.");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Edit Student Details</h2>

    <form method="POST" action="edit_student.php">
        <input type="hidden" name="id"
               value="<?= $student['id'] ?>">

        <input type="text" name="name"
               value="<?= htmlspecialchars($student['name']) ?>"
               required>

        <input type="email" name="email"
               value="<?= htmlspecialchars($student['email']) ?>"
               required>

        <input type="text" name="course"
               value="<?= htmlspecialchars($student['course']) ?>"
               required>

        <input type="text" name="phone"
               value="<?= htmlspecialchars($student['phone']) ?>"
               required>

        <button type="submit">Update Student</button>
    </form>

    <a href="index.php">Back to Home</a>
</div>

</body>
</html>
