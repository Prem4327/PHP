<?php

include("db.php");

$sql = "SELECT * FROM students";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Student Details</title>
</head>

<body>

<h2>Student Details</h2>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Course</th>
    <th>Email</th>
</tr>

<?php

while ($row = mysqli_fetch_assoc($result)) {

?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['age']; ?></td>
    <td><?php echo $row['course']; ?></td>
    <td><?php echo $row['email']; ?></td>
</tr>

<?php

}

?>

</table>

<br>

<a href="index.php">Add New Student</a>

</body>

</html>