<!DOCTYPE html>
<html>
<head>
    <title>Sebong High School</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #d4e2f0;
            color: #fb94aa; 
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 100px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #fb94aa;
        }
        form {
            margin-top: 20px;
        }
        input[type="text"] {
            padding: 8px;
            border: 1px solid #fb94aa;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
        }
        input[type="submit"] {
            padding: 8px 20px;
            background-color: #d4e2f0;
            color: #fb94aa;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        a {
            color: #fb94aa;
            text-decoration: none;
            margin-top: 10px;
            display: inline-block;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Academic Information Management System</h1>
        <form action="input_form.php" method="POST">
            <input type="submit" value="Input New Record">
        </form>
        <form action="view.php" method="POST">
            <input type="submit" value="View Record">
        </form>
        <form action="edit.php" method="POST">
            <input type="submit" value="Edit Record">
        </form>
        <form action="delete.php" method="POST">
            <input type="submit" value="Delete Record">
        </form>
    </div>
</body>
</html>
