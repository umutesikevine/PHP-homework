<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 2em;
            width: 300px;
        }

        .heading {
            text-align: center;
            margin-bottom: 1.5em;
            color: #333;
        }

        h3 {
            margin-bottom: 0.5em;
            color: #555;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"]{
            width: 100%;
            padding: 0.5em;
            margin-bottom: 1em;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="date"]:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        input[type="submit"] {
            width: 100%;
            padding: 0.5em;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        @media (max-width: 400px) {
            .form {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="form">
        <h1 class="heading">PARTICIPATION</h1> 
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h3>Meeting ID: </h3>
            <input type="text" name="MEETING_ID" placeholder="Enter the meeting ID">
            <h3>Fans ID:</h3>
            <input type="text" name="FANS_ID" placeholder="Enter the fans ID">
            <h3>Date:</h3>
            <input type="date" name="DATE">
            <input type="submit" name="send" value="Send" id="sub">
        </form>
    </div>
    <?php
    $con = new mysqli("localhost", "root", "", "l4soda");
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    if (isset($_POST["send"])) {
        $first_name = $con->real_escape_string($_POST["first_name"]);
        $last_name = $con->real_escape_string($_POST["last_name"]);
        $age = (int)$_POST["age"];
        $stmt = $con->prepare("INSERT INTO `class` (`first_name`, `last_name`, `age`) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $first_name, $last_name, $age);

        if ($stmt->execute()) {
            echo "URAKOZE KWIYANDIKISHA";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }
    $con->close();
    ?>
</body>
</html>
