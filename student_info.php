<html>
    <body>
<?php
$name = $_POST["name"];
$age = $_POST["age"];
$grade = $_POST["grade"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_records";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO students (name, age, grade)
VALUES ('$name', '$age', '$grade')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
    <p><a href="home.php">Back to Home</a></p>
</body>
</html>