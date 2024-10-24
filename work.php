<html lang="en">
<head>
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
        input[type="number"] {
            width: 100%;
            padding: 0.5em;
            margin-bottom: 1em;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
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
    <title>form</title>
</head>
<body>
    <h1 class="heading">LOGIN FORM</h1>
    <div class="form" >
        <form>
            <h3>user name:</h3>
            <input type="text" name="U_NAME" placeholder=" enter your user name">
            <h3>password:</h3>
            <input type="password" name="U_PASSWORD" placeholder="enter your password">
            <input type="submit" name="send" value="Send" id="sub">
        </form>


    </div>
</body>
</html>