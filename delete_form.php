<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Record</title>
    <style>
        body {
            background-color: #F7CAC9;
            font-family: Verdana, sans-serif;
            text-align: center;
            padding: 20px;
        }

        p,
        p a,
        p a:hover {
            color: #91A8D0;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #FFFFFF;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px 20px;
            background-color: #C40C0C;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #A34343;
        }
    </style>
</head>
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
