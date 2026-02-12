<?php
session_start();
include "connect.php";

/* Check User Login */

if (!isset($_SESSION['user_id'])) {
    die("<h3 style='color:red;text-align:center;'>Please login first!</h3>");
}

/* Check Bus ID in URL */

if (!isset($_GET['bus_id'])) {
    die("<h3 style='color:red;text-align:center;'>Bus ID missing! Please select a bus first.</h3>");
}

$bus_id = $_GET['bus_id'];

if (isset($_POST['book'])) {

    $seat_no = $_POST['seat_no'];
    $user_id = $_SESSION['user_id'];

    /* Insert Booking */
    $query = "INSERT INTO booking(user_id, bus_id, seat_no)
              VALUES('$user_id', '$bus_id', '$seat_no')";

    if (mysqli_query($con, $query)) {
        echo "<h3 style='color:green;text-align:center;'>Ticket Booked Successfully!</h3>";
    } else {
        echo "<h3 style='color:red;text-align:center;'>Error booking ticket!</h3>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Ticket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .booking-box {
            background: white;
            padding: 25px;
            width: 350px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input:focus {
            border-color: #007bff;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #28a745;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background: #1e7e34;
        }
    </style>
</head>

<body>

    <div class="booking-box">
        <h2>Book Ticket</h2>

        <form method="POST">
            <label>Seat Number</label>
            <input type="number" name="seat_no" placeholder="Enter Seat Number" required>

            <button name="book">Confirm Booking</button>
        </form>
    </div>

</body>

</html>