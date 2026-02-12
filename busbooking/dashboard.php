<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .dashboard {
            width: 400px;
            margin: 80px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0px 0px 15px gray;
        }

        h2 {
            color: #333;
            margin-bottom: 25px;
        }

        a {
            display: block;
            padding: 12px;
            margin: 10px 0;
            text-decoration: none;
            background: #007bff;
            color: white;
            border-radius: 8px;
            font-size: 16px;
        }

        a:hover {
            background: #0056b3;
        }

        .logout {
            background: red;
        }

        .logout:hover {
            background: darkred;
        }
    </style>
</head>

<body>

    <div class="dashboard">
        <h2>Welcome User </h2>

        <a href="search.php"> View Available Buses</a>

        <a href="my_tickets.php"> My Tickets</a>

        <a href="logout.php" class="logout"> Logout</a>
    </div>

</body>

</html>