<!DOCTYPE html>
<html>
<head>
    <title>Edit Student Record</title>
    <style>
        body {
            background-color: #F7CAC9; /* Rose Quartz */
            font-family: Verdana, sans-serif;
            text-align: center;
            padding: 20px;
        }

        h1,
        form,
        p,
        p a,
        p a:hover {
            text-align: center;
            color: #91A8D0; /* Serenity */
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
            background-color: #6C5B7B; /* Rose Quartz */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #9B59B6; /* Darker shade of Rose Quartz */
        }

        p {
            margin-bottom: 10px;
        }

        p a {
            display: inline-block;
            padding: 10px;
            width: 200px;
            background-color: #AF8260; /* Brown */
            color: black;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        p a:hover {
            background-color: #F7DCB9; /* Lighter shade of Rose Quartz */
        }

        img {
            display: block;
            margin: 0 auto 20px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <h1>Edit Student Record</h1>
    <form action="edit_form.php" method="POST">
        Input ID Number: <input type="text" name="id"><br>
        <input type="submit"><br><br>
    </form>
    <p><a href="home.php">Back to Home</a></p>
</body>
</html>
