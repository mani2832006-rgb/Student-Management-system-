<?php
include 'db.php';

$result = $conn->query("SELECT * FROM students ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Student Management System</h1>

    <h2>Add Student</h2>

    <form action="add_student.php" method="POST">
        <input type="text" name="name"
               placeholder="Student Name" required>

        <input type="email" name="email"
               placeholder="Email Address" required>

        <input type="text" name="course"
               placeholder="Course" required>

        <input type="text" name="phone"
               placeholder="Phone Number" required>

        <button type="submit">Add Student</button>
    </form>

    <h2>Student Records</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= htmlspecialchars($row['id']) ?></td>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td><?= htmlspecialchars($row['course']) ?></td>
            <td><?= htmlspecialchars($row['phone']) ?></td>

            <td>
                <a href="edit_student.php?id=<?= $row['id'] ?>">
                    Edit
                </a>

                <a href="delete_student.php?id=<?= $row['id'] ?>"
                   onclick="return confirm('Delete this student?')">
                    Delete
                </a>
            </td>
        </tr>
        <?php } ?>

    </table>
</div>

</body>
</html>
