<?php

include("db.php");

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $course = $_POST['course'];
    $email = $_POST['email'];

    $sql = "INSERT INTO students (name, age, course, email)
            VALUES ('$name', '$age', '$course', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "Student record inserted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Student Registration</title>
</head>

<body>

<h2>Student Registration Form</h2>

<form action="index.php" method="POST">

    Name:
    <input type="text" name="name" required>
    <br><br>

    Age:
    <input type="number" name="age" required>
    <br><br>

    Course:
    <input type="text" name="course" required>
    <br><br>

    Email:
    <input type="email" name="email" required>
    <br><br>

    <input type="submit" name="submit" value="Insert Student">

</form>

<br>

<a href="display.php">View Students</a>

</body>

</html>