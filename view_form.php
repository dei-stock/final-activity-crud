<!DOCTYPE html>
<html>
<head>
    <title>Student Info</title>
    <style>
        body {
            background-color: #F7CAC9; /* Rose Quartz */
            font-family: Verdana, sans-serif;
            text-align: center;
            margin-bottom: 20px;
            color: #91A8D0; /* Serenity */
        }

        p,
        p a,
        p a:hover {
            text-align: center;
            color: #91A8D0; /* Serenity */
        }

        input[type="submit"]:hover {
            background-color: #5499C7; /* Darker shade of Serenity */
        }

        p {
            text-align: center;
            margin-bottom: 10px;
        }

        p a {
            display: inline-block;
            padding: 10px;
            width: 200px;
            background-color: #F7CAC9; /* Rose Quartz */
            color: #91A8D0; /* Serenity */
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        p a:hover {
            background-color: #5499C7; /* Darker shade of Serenity */
        }

        table {
            width: 80%;
            margin: 20px auto;
            /* Center-align the table */
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center, left;
        }

        th {
            background-color: #F7CAC9; /* Rose Quartz */
            color: #91A8D0; /* Serenity */
        }

        tr:nth-child(even) {
            background-color: #F7CAC9; /* Rose Quartz */
        }

        img {
            display: block;
            margin: 0 auto 20px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <img src="student.png" alt="student icon" width="150" height="150">
    <?php
    $id = $_POST["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student_records";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT id, name, age, grade FROM students WHERE id = '$id'";
    $result = $conn->query($sql);
    echo "<h2>STUDENT INFORMATION</h2>";
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Student ID</th><th>Student Name</th><th>Student Age</th><th>Student Grade</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["age"] . "</td>";
            echo "<td>" . $row["grade"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>
    <p><a href="home.php">Back to Home</a></p>
    <p><a href="view.php">Search another record</a></p>
</body>
</html>