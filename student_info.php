<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Record</title>
    <style>
        body {
            background-color: #F7CAC9;
            font-family: Verdana, sans-serif;
            text-align: center;
        }

        p,
        p a,
        p a:hover {
            color: #91A8D0;
            margin-bottom: 10px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        p {
            text-align: center;
            margin-top: 20px;
            font-family: Verdana;
        }

        a {
            color: #91A8D0;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #5499C7;
        }
    </style>
</head>

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

    $sql = "INSERT INTO students (name, age, grade) VALUES ('$name', '$age', '$grade')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>New record created successfully</p>";
    } else {
        echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }


    $conn->close();
    ?>
    <p><a href="home.php">Back to Home</a></p>
</body>

</html>
