<?php
include "connect.php";

if (isset($_GET['source']) && isset($_GET['destination']) && isset($_GET['travel_date'])) {
    $source = $_GET['source'];
    $destination = $_GET['destination'];
    $travel_date = $_GET['travel_date'];

    $buses = mysqli_query(
        $con,
        "SELECT * FROM buses 
         WHERE source='$source'
         AND destination='$destination'
         AND travel_date='$travel_date'"
    );
} else {
    echo "<h3 style='text-align:center;color:red;'>Please Search First!</h3>";
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Buses</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .bus-box {
            background: white;
            padding: 15px;
            margin: 15px auto;
            width: 60%;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        .bus-box h3 {
            margin: 0;
            color: #007bff;
        }

        .bus-box p {
            margin: 5px 0;
        }

        .btn {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 15px;
            background: green;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background: darkgreen;
        }
    </style>
</head>

<body>

    <h2>Available Buses</h2>

    <?php while ($bus = mysqli_fetch_assoc($buses)) { ?>

        <div class="bus-box">
            <h3><?php echo $bus['busname']; ?></h3>

            <p><b>Route:</b> <?php echo $bus['source']; ?> → <?php echo $bus['destination']; ?></p>

            <p><b>Date:</b> <?php echo $bus['travel_date']; ?></p>

            <p><b>Seats:</b> <?php echo $bus['total_seats']; ?></p>

            <p><b>Price:</b> ₹<?php echo $bus['price']; ?></p>

            <a class="btn" href="bookticket.php?bus_id=<?php echo $bus['id']; ?>">
                Book Ticket
            </a>

        </div>

    <?php } ?>

</body>

</html>