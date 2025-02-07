<?php
// index.php - Student Portal Home Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        header { background: #007bff; color: white; padding: 15px; text-align: center; }
        nav { text-align: center; padding: 10px; }
        nav a { margin: 0 15px; text-decoration: none; color: #007bff; font-weight: bold; }
        .container { padding: 20px; text-align: center; }
        footer { background: #333; color: white; text-align: center; padding: 10px; position: fixed; bottom: 0; width: 100%; }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to the Student Portal</h1>
    </header>
    <nav>
        <a href="#">Home</a>
        <a href="#">Courses</a>
        <a href="#">Enroll</a>
        <a href="#">Attendance</a>
        <a href="#">Schedule</a>
        <a href="#">Contact</a>
    </nav>
    <div class="container">
        <h2>Manage Your Courses and Attendance</h2>
        <p>Use this portal to enroll in courses, track attendance, and view your schedules.</p>
    </div>
    <footer>
        <p>&copy; 2025 Student Portal. All Rights Reserved.</p>
    </footer>
</body>
</html>
