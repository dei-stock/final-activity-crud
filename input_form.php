<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebong High School</title>
    <style>
        body {
            background-color: #91A8D0;
            font-family: Verdana, sans-serif;
        }
        form {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #FFFFFF;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #F7CAC9;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #F7CAC9;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #F7CAC9;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #5499C7;
        }
        p {
            text-align: center;
            margin-top: 20px;
            font-family: Verdana;
        }
        a {
            color: #F7CAC9;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        a:hover {
            color: #5499C7;
        }
    </style>
</head>
<body>
    <form action="student_info.php" method="POST">
        <h1>Input New Student Record</h1>
        Student Name: <input type="text" name="name"><br>
        Age: <input type="text" name="age"><br>
        Grade: <input type="text" name="grade"><br>
        <input type="submit" value="Submit">
    </form>
    <p><a href="home.php">Back to Home</a></p>
</body>
</html>