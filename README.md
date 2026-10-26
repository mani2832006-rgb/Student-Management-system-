🎓 Student Management System

A simple web-based Student Management System developed using HTML, CSS, PHP, and MySQL. This project helps manage student information efficiently through a user-friendly interface.

📌 Project Overview

The Student Management System allows users to add, view, update, and delete student records. It uses PHP for server-side processing and MySQL for storing student information.

✨ Features

- ➕ Add new student records
- 👀 View all student details
- ✏️ Edit student information
- 🗑️ Delete student records
- 💾 Store student details in a MySQL database
- 🎨 Simple and user-friendly interface
- 🔒 Prepared SQL statements for database operations

🛠️ Technologies Used

Technology| Purpose
HTML| Structure of the web pages
CSS| Styling and layout
PHP| Backend development
MySQL| Database management
XAMPP| Local development server

📂 Project Structure

student_management/
│
├── index.php
├── db.php
├── add_student.php
├── edit_student.php
├── delete_student.php
├── style.css
└── README.md

⚙️ Installation and Setup

Prerequisites

Install the following software:

- "XAMPP" (https://www.apachefriends.org/)
- A web browser
- A code editor, such as Visual Studio Code

Step 1: Clone the Repository

git clone https://github.com/YOUR-USERNAME/student-management-system.git

Replace "YOUR-USERNAME" with your GitHub username.

Step 2: Move the Project

Copy the project folder into the XAMPP "htdocs" directory.

Example:

C:/xampp/htdocs/student_management/

Step 3: Start XAMPP

Open the XAMPP Control Panel and start:

- Apache
- MySQL

Step 4: Create the Database

1. Open "http://localhost/phpmyadmin/".
2. Select the SQL tab.
3. Execute the following SQL commands:

CREATE DATABASE student_db;

USE student_db;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    course VARCHAR(100) NOT NULL,
    phone VARCHAR(15) NOT NULL
);

Step 5: Configure the Database

Open "db.php" and configure the database connection:

<?php
$conn = new mysqli("localhost", "root", "", "student_db");

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>

The default settings assume that MySQL runs locally with the username "root" and no password. Change these settings if your environment is different.

Step 6: Run the Project

Open your browser and visit:

http://localhost/student_management/

The Student Management System should now be ready to use.

🖥️ System Modules

1. Add Student

Enter the student's name, email address, course, and phone number to create a new record.

2. View Students

Display all registered students in a table.

3. Edit Student

Modify existing student information.

4. Delete Student

Remove a student record from the database.

🗄️ Database Structure

Table Name: "students"

Field| Data Type| Description
id| INT| Primary key with auto-increment
name| VARCHAR(100)| Student name
email| VARCHAR(100)| Student email address
course| VARCHAR(100)| Student course
phone| VARCHAR(15)| Student phone number

🔮 Future Enhancements

- Student login and authentication
- Search and filter student records
- Pagination for large student lists
- Form validation and improved error handling
- Admin dashboard
- Attendance management
- Student marks and results management
- Responsive design for mobile devices

🎯 Project Objective

The objective of this project is to develop a simple student information management application that demonstrates CRUD operations using PHP and MySQL.

CRUD stands for:

- C — Create
- R — Read
- U — Update
- D — Delete

👨‍💻 Author

Your Name

GitHub: "YOUR-USERNAME" (https://github.com/YOUR-USERNAME)

📜 License

This project is available for educational and learning purposes. You may add an MIT License if you want to distribute it under those terms.
