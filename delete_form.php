<body>
<?php
$id = $_POST["id"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_records";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "DELETE FROM students WHERE id = '$id'";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "New record has been deleted";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


$conn->close();
?>
    <p><a href="home.php">Back to Home</a></p>
</body>
</html>